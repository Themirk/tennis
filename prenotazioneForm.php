<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ('header.php');
    ?>
    <title>Tennis club Angera</title>
    <link rel="stylesheet" href="css/contact_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
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
        <div class="col-sm-8">
            <?php include 'calendar.php';?>
        </div>
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




