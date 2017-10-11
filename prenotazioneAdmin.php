<?php

include('Classes/ConnessioneDb.php');
include('Classes/User.php');
$conn = new ConnessioneDb();

$connessione = $conn->connect();

$res = $conn->selectAll($connessione,"users");

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

<div class="container-fluid">
    <?php include('navbar-title.php'); ?>
    <div class="container">
        <div class="row">
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
                        <!--<th>Data di nascita</th>-->
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
                                <!--<td><?php echo $row['dataDiNascita'];?></td>-->

                            </tr>

                            <?php
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
            <form class="formInserimento" method="POST" action="insertAdmin.php">
                <div class="form-group">
                    <label for="nome" class="col-2 col-form-label">Nome: </label>
                    <input type="text" class="form-control margin-right" value="ste" name="nome" id="nome" placeholder="Inserisci nome">
                </div>

                <div class="form-group">
                    <label for="cognome"  class="col-2 col-form-label">Cognome: </label>
                    <input type="text" class="form-control margin-less-right" value="bu" name="cognome" id="cognome" placeholder="Inserisci cognome">
                </div>

                <div class="form-group">
                    <label for="cf" class="margin-less-right">Codice Fiscale: </label>
                    <input type="text" class="form-control margin-right" value = "dushfisufs" name="cf" id="cf" placeholder="inserire codice fiscale">
                </div>

                <!-- <div class="form-group">
                   <label for="scadenzaTessera" class="col-2 col-form-label">Data di nascita :</label>
                     <input class="form-control" type="datetime-local" id="data" name="dataDiNascita">
                </div>
            -->

                <div class="form-group">
                    <label for="scadenzaTessera" class="col-2 col-form-label">Scadenza tessera</label>
                    <input class="form-control" type="date"  id="scadenzaTessera" name="cardExpire">
                </div>

                <div class="form-group">
                    <label for="scadenzaCertificatoMedico" class="col-2 col-form-label">Scadenza certificato medico</label>
                    <input class="form-control" type="date"  id="scadenzaCertificatoMedico" name="medExpire">
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

                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>

        </div>



    </div>
</body>

<!--<?php include 'footer.php';?>-->

</html>