<?php

//require'header.php';

$sql = "SELECT * FROM users";
$res = mysqli_query($conn, $sql);
//print_r($conn);
//echo '<pre>' .var_dump($res).'<pre>';
if(!$res)
{
    var_dump($res);
    echo "no";
    die();
}
$righe = mysqli_num_rows($res);
//print_r($res);

if(mysqli_num_rows($res)>0)

{

    $row = mysqli_fetch_array($res);
    //print_r($row);
    //echo  $row;
    echo $res;


    /*echo "<tr>";
        echo "<td>" .$row['cardNumber']."</td>";
        echo "<td>" .$row['cf']."</td>";
        <td><?= $row['isOpen'] ?></td>
        <td><?= $row['cardNumber'] ?></td>
        <td><?= $row['cardExpire'] ?></td>
        <td><?= $row['medExpire'] ?></td>
        <td><?= $row['cf'] ?></td>
    echo "</tr>";  */



}
else
{
    echo "non funzia";
}
?>