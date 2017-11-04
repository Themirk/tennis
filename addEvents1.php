<?php
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

// connection to the database
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tennis', 'root', 'root');
} catch(Exception $e) {
    exit('Unable to connect to database.');
}

// insert the records
$sql = "INSERT INTO reservations1 (title, start, end) VALUES (:title, :start, :end )";
$q = $bdd->prepare($sql);
$response =$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end));
//echo "inserimento riuscito con ". $title. $start;

if($response) {
    echo "ok";
}
else{
    echo "errore";
}
?>