<?php 
    include "Shortcut_HTML/buttonMessage.php";
    $indiceMessage = ["The red is pretty no ?", "What do you must find in this game ?"];
?>
<!DOCTYPE html>
<html lang="en">

<style>
    body{
        text-align: center;
    }
    footer{
        text-align: left;
        position: absolute;
        bottom: 0;
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
    <h1>FIND THE <a style="color: red" class="secret_button" onclick="alert('<?php echo 'Now the game start. Good luck !' ?>')" href="Page/1_FSNfxQhOsdliySInItaz.php">BUTTON !</a></h1>

    <div>

        <h2>You must find all the <a onclick="alert('<?php echo $wrongButtonMessage[random_int(0, 9)] ?>')" href="">button</a> on the site to win !</h2>
        <p>To <a onclick="alert('<?php echo $wrongButtonMessage[random_int(0, 9)] ?>')" href="">start</a> the game you must find the right <a onclick="alert('<?php echo $wrongButtonMessage[random_int(0, 9)] ?>')" href="">button</a>.</p>
        <p>You also have access to <a onclick="alert('<?php echo $indiceMessage[random_int(0, 1)] ?>')" href="">hint</a> on the top right of the page.</p>

    </div>
</body>

<footer>
    <b>Any copy or reproduction is allowed.</b> Start the 1 september 2025 and finish the ... .
</footer>

</html>