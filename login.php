<?php


include('Classes/ConnessioneDb.php');

$conn = new ConnessioneDb();

$connessione = $conn->connect();

$cardNumber = mysqli_real_escape_string($connessione, $_POST['cardNumber']);
$cf= mysqli_real_escape_string($connessione, $_POST['cf']);


$res = $conn->selectAll($connessione,'users');


if(!$res)
{
    var_dump($res);
    die();
}
$righe = mysqli_num_rows($res);
if(mysqli_num_rows($res)>0)
{
    $row = mysqli_fetch_assoc($res);

    if($cardNumber == 1234 && $cf == 'admin')
    {
        ?>
        <script type="text/javascript">
            window.location.href='prenotazioneAdmin.php';
        </script>
        <?php
    }
    else{

        ?>
        <script type="text/javascript">
            window.location.href='prenotazioneForm.php';
        </script>
        <?php
    }
    mysqli_close($connessione);
}
?>