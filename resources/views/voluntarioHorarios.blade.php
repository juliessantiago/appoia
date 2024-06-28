<x-app-layout>
  <html>
    <head>
      <title>Full calendar</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      @vite([
        'resources/css/input.css', 
        'resources/js/app.js'
        ])

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
      <script src="{{ asset("https://cdn.jsdelivr.net/npm/sweetalert2@11") }}"></script>
    </head>
    <body> 
     
        <div class="py-2"> 
            <h4 class="text-center text-purple-300 text-4xl p-1 font-bold">Marcar consulta</h4>
        </div>
      <div class="flex flex-row justify-center">
        <div id="calendar" class="p-10"> 
            
        </div> 
      </div>
 

            <script type="text/javascript">
                var expedientes = []
                var idVoluntario = window.location.pathname.slice(-1)
                function getExpedientes(){
                
                //voluntarioHorarios/{id}
                    $.ajax({
                        url: "/expedientes/"+idVoluntario,
                        method: 'GET', 
                        dataType: 'json', 
                        success: function(response) {
                            expedientes = response
                            // console.log(expedientes[0])
                        },
                        error: function(xhr, status, error) {
                            console.error('Erro na requisição:', error);
                        }
                    });
            }
                $(document).ready(function () {
                    getExpedientes()
                    
                
            /*------------Get Site URL----*/
            var SITEURL = "{{ url('/') }}";
            /*-------------- CSRF Token------*/
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            /*------FullCalendar JS Code------*/
            var calendar = $('#calendar').fullCalendar({
                            header: {
                                left: 'prev,next',
                                //    center: 'title',
                                right: 'agendaWeek', 
                            },
                            timezone: 'America/Sao_Paulo', 
                            eventColor: ' #d8b4fe',
                            events: SITEURL + "/fullcalendar/" + idVoluntario,
                            displayEventTime: true,
                            editable: false,
                            defaultView: 'agendaWeek',
                            timeFormat: 'H:mm',
                            slotDuration: "01:00:00",
                            allDaySlot: false, 
                            slotLabelFormat: 'H:mm', 
                            nowIndicator: false,
                            defaultTimedEventDuration : { 
                                hours: 1, 
                            },
                            timeFormat: 'HH:00', 
                            allDayDefault: false,
                            dayNamesShort: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                            buttonText: {
                                    week: 'Semana',
                                    day:'Dia',
                                },
                                height: 'auto', 
                                hiddenDays: [0, 6], //domingo, sábado não são exibidos 
                            eventRender: function (event, element, view) { //por que event render só é executada ao clicar? 
                                event.allDay = false;
                                calendar.fullCalendar('option', 'businessHours', expedientes);
                                calendar.fullCalendar('addEventSource', { events: [ 
                                    {title: 'teste indisponível', start: '2024-06-28T10:00', end: '2024-06-28T11:00' }
                                ],
                                color: 'pink', 
                                textColor: 'yellow'
                                })
                                   
                            },
                            selectable: true,
                            selectHelper: true,
                            eventStartEditable: false,
                            eventDurationEditable: false,
                            displayEventEnd: true,
                            select: function (start, end, allDay) { //função executada quando as datas são selecionadas
                                var title = 'consulta';
                                var start = $.fullCalendar.formatDate(start, "Y-MM-DD H:mm");
                                var end = $.fullCalendar.formatDate(end, "Y-MM-DD H:mm");
                                var checkDiaExpediente = false
                                var checkHoraExpediente = false
                                var diaSemana = (new Date(start)).getDay() 
                                // new Date(start) -> obter data com dia da semana
                                // getDay() -> separa apenas o dia da semana em formato de número 
                                // console.log(diaSemana);
                                expedientes.forEach(expediente => {
                                    var startEvent = parseInt(start.split(" ")[1].split(":")[0])
                                   var startExpediente = parseInt(expediente.start.split(":")[0])
                                   var endExpediente = parseInt(expediente.end.split(":")[0])
                                   if(expediente.dow[0] == diaSemana){//dia selecionado é um dos dias de expediente
                                        checkDiaExpediente = true;
                                        if(startEvent >= startExpediente && startEvent < endExpediente){
                                           checkHoraExpediente = true;
                                        }
                                   }
                                });
                                
                                if(!checkDiaExpediente){
                                    calendar.fullCalendar('unselect');
                                    toastr.error('Opa! Você pode marcar consulta apenas nos dias disponíveis do voluntário')
                                    return; 
                                }
                                if(!checkHoraExpediente){
                                    calendar.fullCalendar('unselect');
                                    toastr.error('Opa! Você marcar consulta apenas nos horários disponíveis do voluntário')
                                    return; 
                                }

                                Swal.fire({
                                    title: "Gostaria de marcar consulta nesse horário?",
                                    showDenyButton: false,
                                    showCancelButton: true,
                                    confirmButtonText: "Marcar",
                                    cancelButtonText: "Cancelar"
                                    }).then((result) => {
                                    if (result.isConfirmed) {
                                        $.ajax({
                                                url: SITEURL + "/fullcalendarAjax",
                                                data: {
                                                    expedientes: expedientes,
                                                    diaSemana: diaSemana,
                                                    title: title,
                                                    start: start,
                                                    end: end,
                                                    idVoluntario: idVoluntario,
                                                    type: 'add', 
                                                },
                                                type: "POST",
                                                success: function (data) {
                                                    //data: dados do evento
                                                    Swal.fire("Consulta marcada!");
                                                    calendar.fullCalendar('renderEvent',
                                                        {
                                                            status : 'agendado',
                                                            id: data.id,
                                                            title: title,
                                                            start: start,
                                                            end: end,
                                                            allDay: allDay
                                                        },true);
                                                    calendar.fullCalendar('unselect');
                                                }
                                        });
                                    } else {
                                        calendar.fullCalendar('unselect');
                                    }
                                });
                            
                                    
                            },
                            /*-------------------arrasta e solta --------------------------*/ 
                            eventDrop: function (event, delta) {
                                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                                $.ajax({
                                    url: SITEURL + '/fullcalendarAjax',
                                    data: {
                                        title: event.title,
                                        start: start,
                                        end: end,
                                        id: event.id,
                                        type: 'update'
                                    },
                                    type: "POST",
                                    success: function (response) {
                                        displayMessage("Evento atualizado com sucesso");
                                    }
                                });
                            },

                            eventClick: function (event) { //evento quando é clicado é excluído
                                var deleteMsg = confirm("Você realmente gostaria de excluir?");
                                if (deleteMsg) {
                                    $.ajax({
                                        type: "POST",
                                        url: SITEURL + '/fullcalendarAjax',
                                        data: {
                                                id: event.id,
                                                type: 'delete'
                                        },

                                        success: function (response) {
                                            calendar.fullCalendar('removeEvents', event.id);
                                            displayMessage("Evento excluído com sucesso");
                                        }
                                    });
                                }
                            }
                        });
            });
            /*---------Toastr Success ------------*/
            function displayMessage(message) {
                toastr.success(message, 'SUCESSO');
            } 
        </script>
        <div class="flex justify-end px-14 py-6"> 
            <div class="flex mt-4 md:mt-6">
                <a href="{{route('aluno.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
            </div>
        </div>
    </body>
  </html>
</x-app-layout>
  