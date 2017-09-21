<html>
    <head>
        <link rel='stylesheet' href='css/fullcalendar.css' />
        <script src='js/jquery.min.js'></script>
        <script src='js/moment.js'></script>
        <script src='js/fullcalendar.js'></script>
        <script>
            $(document).ready(function() {

                // page is now ready, initialize the calendar...

                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events:[
                        {
                            id: 999,
                            title: 'Evento mio',
                            start: '2017-09-21 11:30:45',
                            end: '2017-09-21 20:00:00'
                        }
                    ]
                })

            });
        </script>
    </head>
    <body>

    <div id='calendar'></div>
    </body>
</html>


