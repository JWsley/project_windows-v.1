<?php 

    $host = "localhost";
    $user = "root";
    $passwd = "";
    $dbname = "pjwindows";

    $conn = mysqli_connect($host,$user,$passwd,$dbname);

    if (!$conn){

        echo "deu ruim";

    }
    

?>