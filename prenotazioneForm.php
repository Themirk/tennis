<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ('header.php');
    ?>
    <link rel='stylesheet' href='/css/fullcalendar.css' />
    <title>Tennis club Angera</title>
    <link rel="stylesheet" href="css/contact_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js" charset="UTF-8"></script>
    <link rel='stylesheet' href='css/fullcalendar.css' />
    <script src='js/jquery.min.js'></script>
    <script src='js/moment.js'></script>
    <script src='js/fullcalendar.js'></script>
    <script>
        $(document).ready(function() {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },

                events: "eventsSecond.php",

                // Convert the allDay from string to boolean
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    //var url = prompt('Type Event url, if exits:');
                    if (title) {
                        var start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
                        $.ajax({
                            url: 'add_events.php',
                            data: 'title='+ title+'&start='+ start +'&end='+ end,
                            type: "POST",
                            success: function(json) {
                                alert('Added Successfully');
                            }
                        });
                        calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true // make the event "stick"
                        );
                    }
                    calendar.fullCalendar('unselect');
                },

                editable: true,
                eventDrop: function(event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
                    $.ajax({
                        url: 'update_events.php',
                        data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                        type: "POST",
                        success: function(json) {
                            alert("Updated Successfully");
                        }
                    });
                },
                eventClick: function(event) {
                    var decision = confirm("Do you really want to do that?");
                    if (decision) {
                        $.ajax({
                            type: "POST",
                            url: "delete_event.php",
                            data: "&id=" + event.id,
                            success: function(json) {
                                $('#calendar').fullCalendar('removeEvents', event.id);
                                alert("Updated Successfully");}
                        });

                    }
                },
                eventResize: function(event) {
                    var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
                    $.ajax({
                        url: 'update_events.php',
                        data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                        type: "POST",
                        success: function(json) {
                            alert("Updated Successfully");
                        }
                    });
                }

            });

        });
    </script>
    <style>
        body {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        }
        #calendar {
            width: 900px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="margin-top-zero">
<div class="navbar">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Tennis club Angera</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--pagina riassuntiva del profilo per eventuali dimenticanze e scadenze -->
                <li><a href="index.php">Profilo</a></li>
                <!--prenotazioni già effettuate da questo account -->
                <li><a href="#">Prenotazioni</a></li>
                <!-- logout da implementare-->
                <li><a href="#">Esci</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8"id="calendar"></div>
        <div class="col-sm-4">
            <h4>Completamento registrazione</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Nome: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Nome" placeholder="Inserire nome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="cognome">Cognome: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Cognome" placeholder="Inserire cognome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="start">Inizio:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="start" placeholder="Inserire inizio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="end">Fine:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="end" placeholder="Inserire fine">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<?php include 'footer.php'?>




