<?php

class ConnessioneDb
{
    public function __construct()
    {
        $this->hostname = "localhost";
        $this->username = "root";
        $this->password = "root";
        $this->db = "tennis";
    }

    public function connect()
    {
        $conn = new mysqli($this->hostname,$this->username,$this->password,$this->db);
        if ($conn->connect_error) {

            die("connessione fallita".$conn->connect_error);
        }
        else
        {
            return $conn;
        }
    }
    public function selectAll($connessione)
    {
        $sql = "SELECT * FROM users";
        $res = mysqli_query($connessione, $sql);

        return $res;
    }



}



// Create connection
/*$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "no";
}
//echo "Connected successfully";
?>*/