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
        @csrf
     
        <div class="flex mt-4 md:mt-4 mx-10">
            <a href="{{route('dashboardAluno')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium"> 
                <img  src="{{ asset('images/icons/dashboard.png')}}" class="h-8" alt="voltar para dashboard" />
                <p class="text-sky-400 text-md ml-4">Dashboard</p>
            </a>
        </div>
        <div class="py-2"> 
            <h4 class="text-center text-purple-300 text-4xl p-1 font-bold">Marcar consulta</h4>
        </div>
      <div class="flex flex-row justify-center">
        <div id="calendar" class="p-10 "> 

        </div> 
      </div>
        <script type="text/javascript">
            var expedientes = []
            let idVoluntario = window.location.pathname.slice(-1)
            let idAluno = {{Auth::user()->id}}
            let diaLiberado = ''
            function getQtdConsultas(){
                $.ajax({
                    url: "/consultas/"+idAluno,
                    method: 'GET', 
                    dataType: 'json', 
                    success: function(response) {
                        diaLiberado = response
                        // console.log(expedientes[0])
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro na requisição:', error);
                    }
                });
            }
            function getExpedientes(){
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
                getQtdConsultas()
            
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
                        timezone: 'America/Sao_Paulo', 
                        eventColor: ' #D8B4FE',
                        events: SITEURL + "/fullcalendar/" + idVoluntario,
                        displayEventTime: true,
                        editable: false,
                        defaultView: 'agendaWeek',
                        views: {
                            // agendaWeek: {
                            //     columnFormat: 'DD-MM' //deu problema, não estava alterando dia no header do calendário
                            // }
                        },
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
                                today:'Ir para hoje',
                            },
                            height: 'auto', 
                            hiddenDays: [0, 6], //domingo, sábado não são exibidos 
                        eventRender: function (event, element, view) { //por que event render só é executada ao clicar? 
                            // console.log(event)
                            getQtdConsultas()

                            event.allDay = false;
                            calendar.fullCalendar('option', 'businessHours', expedientes);
                        },
                        eventAfterRender(event, element, view){
                            // element -> evento no html 
                            // view -> tipo de view utilizada (semana, mês)
                            
                                if(event.id_aluno != idAluno ){
                                // console.log(event.title)
                                // console.log(element[0].innerText)
                                element[0].innerText = 'indisponível'
                                element.css('background-color', '#A9A9A9')
                                element.css('border-color', '#A9A9A9')
                                }
                            
                        },
                        selectable: true,
                        selectHelper: true,
                        eventStartEditable: false,
                        eventDurationEditable: false,
                        displayEventEnd: true,
                        select: function (start, end, allDay) { //função executada quando as datas são selecionadas
                            getQtdConsultas()
                    
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD H:mm");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD H:mm");
                            var checkDiaExpediente = false
                            var checkHoraExpediente = false
                            var diaSemana = (new Date(start)).getDay() 
                            // new Date(start) -> obter data com dia da semana
                            // getDay() -> separa apenas o dia da semana em formato de número 
                            // console.log(diaSemana);
                            var daySelected = (start.split(" ")[0])
                            let today = new moment().format('YYYY-MM-DD')
                            // console.log(contConsult)
                            // if(contConsult > 0){
                            //     Swal.fire({
                            //         title: "Oops!",
                            //         text: "Voce já possui consulta marcada nessa semana",
                            //         confirmButtonText: "Ok",
                            //         confirmButtonColor: '#f472b6',
                                    
                            //     });
                            // }
                        //    console.log(daySelected)
                           if(daySelected < diaLiberado){ //diaLiberado: data da última consulta + 7 dias
                                calendar.fullCalendar('unselect')
                                toastr.warning('Você já possui uma consulta marcada nessa semana, escolha uma data após o dia '+moment(diaLiberado).format('DD/MM/YYYY'))
                                return;
                            }
                            if(daySelected < today){
                                calendar.fullCalendar('unselect')
                                toastr.error('Opa, você selecionou uma data que já passou!')
                                return;
                            }
                            if(daySelected == today){
                                calendar.fullCalendar('unselect')
                                toastr.warning('A data selecionada é hoje. Você poderia escolher outro dia?')
                                return;
                            }
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
                                confirmButtonColor: '#f472b6',
                                cancelButtonText: "Cancelar", 
                                cancelButtonColor: '#9ca3af'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                let dia = start.substring(0, 10)
                                // let inicio = start.substring(11, 16)
                                // let final = end.substring(11, 16)
                                let  string = Math.random()+Date.now()
                                // console.log(start)
                                //criação de string aleatória
                              
                                    $.ajax({
                                            url: SITEURL + "/fullcalendarAjax",
                                            data: {
                                                expedientes: expedientes,
                                                dia: dia, 
                                                start: start,
                                                end: end, 
                                                status: 'pendente',
                                                link: string, 
                                                idVoluntario: idVoluntario,
                                                idAluno: idAluno, 
                                                type: 'add', 
                                            },
                                            type: "POST",
                                            success: function (data) {
                                                //data: dados do evento
                                               
                                                Swal.fire({
                                                    title: "Consulta marcada!", 
                                                    confirmButtonColor: '#f472b6'
                                                });
                                                calendar.fullCalendar('renderEvent',
                                                    {
                                                        id_aluno: idAluno, 
                                                        id: data.id,
                                                        start: start,
                                                        end: end,
                                                        allDay: allDay,
                                                        title: data.status
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
                        // eventDrop: function (event, delta) {
                        //     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        //     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                        //     $.ajax({
                        //         url: SITEURL + '/fullcalendarAjax',
                        //         data: {
                        //             start: start,
                        //             end: end,
                        //             id: event.id,
                        //             type: 'update'
                        //         },
                        //         type: "POST",
                        //         success: function (response) {
                        //             displayMessage("Evento atualizado com sucesso");
                        //         }
                        //     });
                        // },

                        // eventClick: function (event) { //evento quando é clicado é excluído
                        //     if(event.id_aluno == idAluno){
                        //         var deleteMsg = confirm("Você realmente gostaria de excluir?");
                        //         if (deleteMsg) {
                        //             $.ajax({
                        //                 type: "POST",
                        //                 url: SITEURL + '/fullcalendarAjax',
                        //                 data: {
                        //                         id: event.id,
                        //                         type: 'delete'
                        //                 },

                        //                 success: function (response) {
                        //                     calendar.fullCalendar('removeEvents', event.id);
                        //                     displayMessage("Evento excluído com sucesso");
                        //                 }
                        //             });
                        //         }
                        //     }
                            
                        // }
                    });
        });
        /*---------Toastr Success ------------*/
        function displayMessage(message) {
            toastr.success(message, 'SUCESSO');
        } 
    </script>
        <div class="flex justify-between px-14 py-6"> 
            <div class="flex mt-4 md:mt-6">
                <a href="{{route('dashboardAluno')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-sky-400">Ver minhas consultas</a>
            </div>
            <div class="flex mt-4 md:mt-6">
                <a href="{{route('aluno.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
            </div>
        </div>
    </body>
  </html>
</x-app-layout>
  