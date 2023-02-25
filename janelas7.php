<?php    

    include 'config.php';
    


    $selct = 'SELECT * FROM folder';

    $folder = mysqli_query($conn, $selct);



?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./src/midia/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./src/styles/style.css">

    <title>Windows Web</title>
</head>
<body >
  <section class="menu" id="mainmenu">
    
  
    <item-box class="itembox"
    
        icon="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnikru-4ikPbDC7Wpp2XQ1ehaxA10IqoXwyA&usqp=CAU"

        name= "test"
    ></item-box>
    <?php 
        while ($reciv = mysqli_fetch_array($folder)){

            $id = $reciv['id'];
            $icon = $reciv['icon'];
            $name = $reciv['name'];





    ?>

   
    <item-box 
            icon="<?php   echo $icon;?>"
            name="<?php   echo $name;?>"

    
    ></item-box>

    <?php }; ?>
    
    <div class="optionscontainer" id="menuopt">
       <div class="optionsmenu">
           
           <form action="options.php" method="post">
                <button class="option" onclick="location.reload()">Atualizar</button>
                <button class="option "  name="selct" type="submit" value="novaPasta">Nova Pasta</button>
                <button class="option"  name="selct" type="submit" value="Editar">Editar</button>
                <button class="option"  name="selct" type="submit" value="Excluir">Excluir</button>
            </form>
       </div>
    </div>
  </section>






        <section class="bar">
            
            <div class="btwindows"></div>
            <div class="ultility">

                <div class="timedate">
                    <span class="time" id="time"></span>
                    <span class="date" id="date"></span>
                </div>
                <div class="atalho"></div>
            </div>
        
        </section>
        <script src="./src/scripts/item.js"></script>
        <script src="./src/scripts/home.js"></script>
</body>
</html>