<?php 
    include "PHP/buttonMessage.php";
    $indiceMessage = ["The red is pretty no ?", "What do you must find in this game ?"];
?>
<!DOCTYPE html>
<html lang="en">

<style>
    body{
        text-align: center;
    }
    div{
        margin-top: 5%;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheet_global.css" rel="stylesheet"/>

    <title>Find the Button</title>
</head>

<body>
    <h1>FIND THE <a id="a1" onclick="alert('<?php echo $rightButtonMessage ?>')">BUTTON !</a></h1>

    <div>

        <h2>Tu dois trouver tout les boutons cachés sur ce site pour gagner !</h2>
        <p>Pour <a onclick="alert('<?php echo $wrongButtonMessage[random_int(0, 5)] ?>');">commencer</a> le jeu tu dois trouver le <a onclick="alert('<?php echo $wrongButtonMessage[random_int(0, 5)] ?>')">bouton</a>.</p>
        <p>Deplus tu as le droit à des <a onclick="alert('<?php echo $indiceMessage[random_int(0, 1)] ?>')">indices</a> en haut à droite de la page.</p>

    </div>
</body>

</html>