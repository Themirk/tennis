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
    public function selectAll($connessione,$table)
    {
        $sql = "SELECT * FROM $table";
        $res = mysqli_query($connessione, $sql);

        return $res;
    }
    /* inserire dob*/
    public function insert($user, $connessione, $conn)
    {
        $sql = "INSERT INTO users (name, surname, isOpen,cardExpire,medExpire,cf)
		VALUES ('$user->name','$user->surname','$user->isOpen',$user->cardExpire,$user->medExpire,'$user->cf')";
        echo $sql;

        if(mysqli_query($connessione, $sql))
        {

            ?>

            <script> window.alert("Dati inseriti correttamente."); </script>

            <?php

        }
        else
        {
            echo "ciao";
            ?>

            <script>window.alert("errore") </script>

            <?php
        }



    }


}

//

