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
    </head>
    <body> 
      <div class="flex">
       
        <div id="calendar" class="p-10 bg-pink-100 "> 
        </div> 
      </div>
 

      <script type="text/javascript">
        var expedientes = []
        function getExpedientes(){
        var id = window.location.pathname.slice(-1)
        //voluntarioHorarios/{id}
            $.ajax({
                url: "/expedientes/"+id,
                method: 'GET', 
                dataType: 'json', 
                success: function(response) {
                    expedientes = response
                    // console.log(expedientes)
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
                           center: 'title',
                           right: 'agendaWeek, agendaDay', 
                        
                       },
                       timezone: 'America/Sao_Paulo', 
                       eventColor: '#db2777',
                       editable: true,
                       events: SITEURL + "/fullcalendar",
                       displayEventTime: true,
                       editable: true,
                       defaultView: 'agendaWeek',
                       timeFormat: 'H:mm',
                       slotDuration: "01:00:00",
                       allDaySlot: false, 
                       slotLabelFormat: 'H:mm', 
                       nowIndicator: false,
                       defaultTimedEventDuration : { 
                           hours: 1, 
                       },
                       timeFormat: 'HH:mm', 
                       // allDay: false, 
                       allDayDefault: false,
                       dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
                       buttonText: {
                            week:     'Semana',
                            day:      'Dia',
                        },
                        height: 'auto', 
                       businessHours: [], 
                       eventRender: function (event, element, view) { //por que event render só é executada ao clicar? 
                           event.allDay = false;
                            expedientes.forEach(expediente => {
                                calendar.fullCalendar('option', 'businessHours', expediente);
                                console.log(expediente)
                           });
                           //problema: só preenche o último horário de experiente
                        
                       },
                       selectable: true,
                       selectHelper: true,
                   
                       select: function (start, end, allDay) { //função executada quando as datas são selecionadas
                        var title = prompt('Event Title:');
                           if (title) { //alterar essa verificação posteriormente! 
                                var hoje = moment().format('Y-MM-DD')
                                var agora = moment().format('HH:mm')
                                var start = $.fullCalendar.formatDate(start, "Y-MM-DD H:mm");
                                var end = $.fullCalendar.formatDate(end, "Y-MM-DD H:mm");
                               if((moment(start).format('Y-MM-DD')) < hoje && moment(start).format('H:mm') <= agora ){
                                    alert('Selecione outro horário!')
                                    calendar.fullCalendar('unselect');
                               }
                               else{
                                $.ajax({
                                   url: SITEURL + "/fullcalendarAjax",
                                   data: {
                                       title: title,
                                       start: start,
                                       end: end,
                                       type: 'add'
                                   },
                                   type: "POST",
                                   success: function (data) {
                                       //data: dados do evento
                                       displayMessage("Evento criado com sucesso");
                                       calendar.fullCalendar('renderEvent',
                                           {
                                               id: data.id,
                                               title: title,
                                               start: start,
                                               end: end,
                                               allDay: allDay
                                           },true);
                                       calendar.fullCalendar('unselect');
                                   }
                               });
                               }
                              
                           }
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
    </body>
  </html>
</x-app-layout>
  