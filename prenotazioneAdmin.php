<?php

include('Classes/ConnessioneDb.php');
include('Classes/User.php');

$conn = new ConnessioneDb();

$connessione = $conn->connect();

$res = $conn->selectAll($connessione);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ('header.php');
    ?>
    <title>PrenotazioneAdmin</title>
</head>

<body>


<!--------- NAVBAR_------>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="regolamento.php">Regolamento</a></li>
                <li><a href="tariffe.php">Tariffe</a></li>
                <li><a href="prenotazione.php">Prenotazioni</a></li>
                <li class="active"><a href="HomeManagement.php">HomeManagement</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <div class="row"
    <div class="col-md-10 col-md-offset-1">
        <h2 id = "h2">Database</h2>

        <table class="table table-bordered" id = "table">
            <thead>
            <tr class = "success">
                <th>Nome</th>
                <th>Cognome</th>
                <th>Open</th>
                <th>Numero Tessera</th>
                <th>Scadenza Tessera</th>
                <th>Scadenza Certificato medico</th>
                <th>Codice Fiscale</th>
            </tr>
            </thead>
            <tbody id ="tbody">
            <?php
            while($row = mysqli_fetch_array($res))
            {
                if($row['cf'] == 'admin'){

                    ?>

                    <tr class = "admin">
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['surname'];?></td>
                        <td><?php echo $row['isOpen'];?></td>
                        <td><?php echo $row['cardNumber'];?></td>
                        <td><?php echo $row['cardExpire'];?></td>
                        <td><?php echo $row['medExpire'];?></td>
                        <td><?php echo $row['cf'];?></td>

                    </tr>

                    <?php
                    $utente = new User("pippo");
                    echo $utente->name;
                    $utente->name = $row['name'];
                    echo $utente->name;
                }
                else{


                    ?>
                    <tr class = "active">
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['surname'];?></td>
                        <td><?php echo $row['isOpen'];?></td>
                        <td><?php echo $row['cardNumber'];?></td>
                        <?php
                        if($row['cardExpire'] < date("Y/m/d")){
                            ?>
                            <td class="expired"><?php echo $row['cardExpire'];?></td>
                            <?php
                        }
                        else{
                            ?>
                            <td><?php echo $row['cardExpire'];?></td>
                            <?php
                        }
                        ?>
                        <?php
                        if($row['medExpire'] < date("Y/m/d")){
                            ?>
                            <td class="expired"><?php echo $row['medExpire'];?></td>
                            <?php
                        }
                        else{
                            ?>
                            <td><?php echo $row['medExpire'];?></td>
                            <?php
                        }
                        ?>
                        <td><?php echo $row['cf'];?></td>

                    </tr>
                    <?php

                }

            }
            ?>
            </tbody>
        </table>


    </div>
</div>
<div class = "row col-md-10 col-md-offset-1">
    <form class="formInserimento">
        <div class="form-group">
            <label for="nome" class="col-2 col-form-label">Nome: </label>
            <input type="text" class="form-control margin-right" name="nome" id="nome" placeholder="Inserisci nome">
        </div>

        <div class="form-group">
            <label for="cognome"  class="col-2 col-form-label">Cognome: </label>
            <input type="text" class="form-control margin-less-right" name="cognome" id="cognome" placeholder="Inserisci cognome">
        </div>

        <div class="form-group">
            <label for="cf" class="margin-less-right">Codice Fiscale: </label>
            <input type="text" class="form-control margin-right" name="cf" id="cf" placeholder="inserire codice fiscale">
        </div>

        <div class="form-group">
            <label for="scadenzaTessera" class="col-2 col-form-label">Scadenza tessera</label>
            <input class="form-control" type="datetime-local" value="" id="scadenzaTessera" name="cardExpire">
        </div>

        <div class="form-group">
            <label for="scadenzaCertificatoMedico" class="col-2 col-form-label">Scadenza certificato medico</label>
            <input class="form-control" type="datetime-local" value="" id="scadenzaCertificatoMedico" name="medExpire">
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="isOpen" id="open" value="1" checked>
                Il cliente è un tesserato open
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="isOpen" id="nonOpen" value="0" checked>
                Il cliente non è un tesserato open
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


</div>
</body>
<?php include 'footer.php';?>
</html>