<?php  


    include 'config.php';

    $selct = $_POST['selct'];

    switch($selct){

        case 'novaPasta':
            
            $name = $_POST['name'];
            $cad = "INSERT INTO folder (name) VALUES ('$name')";
            $exec = mysqli_query($conn,$cad);
            break;
        case 'Editar':
            echo 'edit';
            break;

        case 'excluir':
            echo 'del';
            break;


    }



    header('location:janelas7.php');


?>