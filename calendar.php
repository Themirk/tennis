<html>
    <head>
        <link rel='stylesheet' href='css/fullcalendar.css' />
        <script src='js/jquery.min.js'></script>
        <script src='js/moment.js'></script>
        <script src='js/fullcalendar.js'></script>
        <script>
            $(document).ready(function(){
                $.ajax({
                    type:"GET",
                    url: 'events.php',
                    success:function(msg)
                    {
                        alert(msg);
                    },
                    error:function(){
                        console.log("ERRORE");
                    }
                })
            });
        </script>
    </head>
    <body>

    <div id='calendar'></div>
    </body>
</html>


