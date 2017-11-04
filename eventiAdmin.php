<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ('header.php');
    ?>
    <link rel='stylesheet' href='/css/fullcalendar.css' />
    <title>Tennis club Angera</title>
    <link rel="stylesheet" href="css/contact_style.css">
    <script type="text/javascript" src="js/jquery.min.js" charset="UTF-8"></script>
    <link rel='stylesheet' href='css/fullcalendar.css' />
    <script src='js/jquery.min.js'></script>
    <script src='js/moment.js'></script>
    <script src='js/fullcalendar.js'></script>
    <script src="js/it.js"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <script>
        $(document).ready(function()
        {
            fai(1);
            //funzione creazione evento
            $("#bottoneConferma").click(function()
            {
                //ritorno valore bottone selezionato
                var selected = $('input[name=optradio]:checked').val();
                var nome = $("#nome").val();
                var cognome = $("#cognome").val();
                var start = $("#start").val();
                var end = $("#end").val();
                var title = nome + ' ' + cognome;
                $.ajax({
                    url: 'addEvents'+selected+'.php',
                    data: 'title='+ title+'&start='+ start +'&end='+ end,
                    type: "POST",
                    dataType: "text",
                    success: function(json)
                    {

                        if(json =="ok")
                        {
                            location.href = "modal.php?nome=" + nome + "&cognome=" + cognome + "&start=" + start +"&end=" + end + "&campo=" + selected;
                        }
                        //alert('Prenotazione effettuata correttamente');
                        //fai(selectedVal); //TODO reindirizzamento a visualizzazione cal o smth simile
                    },error: function(json)
                    {
                        if(json == "error")
                        {
                            alert("errore");
                        }
                    }
                });
            });
        });
        function rimuovi()
        {
            $("#mess_iniz").remove();
        }
        function rimuoviCalendar()
        {
            $("#calendar").replaceWith("<div class=\"col-sm-8\"id=\"calendar\"></div>")
        }
        function fai(campo) {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var varDelete = "deleteEvents" + campo + ".php"
            var campoLocal = "events" + campo + ".php";
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                selectable: true,
                header:
                    {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek'
                    },
                lang: 'it',
                defaultView: 'agendaWeek',
                minTime: "07:00:00",
                maxTime: "21:00:00",
                events: campoLocal,
                // Convert the allDay from string to boolean
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                }, eventClick: function (event) {                     //funzione per rimozione fino a riga 115
                    var id = event.eventid;
                    console.log(id);
                    var decision = confirm("Stai rimuovendo l'evento di " + event.title + " delle " + event.startTime);
                    if (decision) {
                        $.ajax({
                            type: "POST",
                            url: varDelete,
                            data: "id=" + event.eventid,
                            success: function (json) {
                                $('#calendar').fullCalendar('removeEvents', event.eventid);
                                alert("Updated Successfully");

                                window.location.href='eventiAdmin.php';//con questo fucking funziona dibbrutto
                            }
                        });

                    }
                }
            });

        }
    </script>
    <script>
        $(document).ready(function(){
            for (i = 1; i <= 3; i++) {
                var radioBtn = $('<br><div id="radioDiv"><label class="campi">' +
                    '<input type="radio" id="radioBtn'+i+'"' +
                    'name="optradio" ' +
                    'value="'+i+'"' +
                    'onclick="rimuovi(); fai('+i+');"' +
                    'onchange="rimuoviCalendar();fai('+i+');"> Campo numero '+ i + '</label><div>');
                radioBtn.appendTo('#bottoni');
            }
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
        <div class="col-sm-8 padding" id="calendar"></div>
        <div class="col-sm-4 padding">
            <h4>Completamento registrazione</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Nome: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" value="nome"placeholder="Inserire nome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="cognome">Cognome: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cognome" value="cognome"placeholder="Inserire cognome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="start">Inizio:</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="start" value="start"placeholder="Inserire inizio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="end">Fine:</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="end" value="end"placeholder="Inserire fine">
                    </div>
                </div>
                <h3>Campo desiderato<br></h3>
                <div class="form-group" id="bottoni">
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id="bottoneConferma" type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
    </div>
</div>

</body>
<?php include 'footer.php'?>




