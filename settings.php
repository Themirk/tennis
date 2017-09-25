<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$db = "tennis";


// Create connection
$conn = new mysqli($hostname, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    echo "Errore di connessione al database, riprovare più tardi";
    die("Connection failed: " . $conn->connect_error);
}
?>