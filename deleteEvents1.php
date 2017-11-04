<?php
$id = $_POST['id'];
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tennis', 'root', 'root');
} catch(Exception $e) {
    exit('Unable to connect to database.');
}
$sql = "DELETE from reservations1 WHERE eventid=".$id;
$q = $bdd->prepare($sql);
$q->execute();

?>