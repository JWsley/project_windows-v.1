<?php  


    include 'config.php';


    switch($selct){

        case 'novaPasta':
            echo '<item-box></item-box>';
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