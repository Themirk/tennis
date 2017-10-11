<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ('header.php');
    ?>
    <title>Tennis club Angera</title>

</head>
<body>
<!----------------------------------------Galleria-------------------------------------->
<div class="container-fluid">
    <?php include 'navbar-title.php'; ?>

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

</div>

<!-- CALENDARIO -->

</body>
<?php include 'footer.php';?>
</html>