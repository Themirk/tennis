<?php
include 'settings.php';

$sql = "SELECT * FROM reservations";
$res = mysqli_query($conn, $sql);
$rows = array();

if(!$res)
{
    echo "no";
    die();
}
while($r = mysqli_fetch_assoc($res)) {
    $rows = $r;
    $data = array("messaggio" => $rows['title']);
    echo json_encode($data);
}


