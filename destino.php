<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- resgatar uma variavel da url -->
    <?php
    //$fruta = $_GET['codigo'];

    //echo $fruta;
    /*array */

    $salada = array('img/laranja-pera.png', 'img/abacate.jpg', 'img/maca.jpg');
    $fruta = $_GET['codigo'];


    ?>
    <img src="<?php echo $salada[$fruta]; ?>" alt="">
</body>

</html>