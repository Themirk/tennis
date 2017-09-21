<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ('header.php');
    ?>
    <title>Tennis club Angera</title>
    <link rel="stylesheet" href="css/contact_style.css">
</head>
<body>
<!----------------------------------------Galleria-------------------------------------->
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron center">
            <h1>Tennis Angera</h1>
        </div>              <!-- jumbotron tennis -->
        <div class="navbar">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="regolamento.php">Regolamento</a></li>
                        <li><a href="prices.php">Tariffe</a></li>
                        <li><a href="reservation.php">Prenotazioni</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- riga per carosello -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1  col-sm-12" >
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner fixed-size">
                    <div class="item active">
                        <img src="images/cinque.jpg" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="images/sei.jpg" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="images/sette.jpg" alt="New york">
                    </div>
                    <div class="item">
                        <img src="images/quattro.jpg" alt="non funziono">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br><hr>
    <!-- riga per contatti -->
    <h1 style="text-align:center">CHIAMAMI</h1>
    <div class="row">
        <?php include 'contact.php' ?>
    </div>

</div>

<!-- CALENDARIO -->

</body>
<?php include 'footer.php'?>
</html>