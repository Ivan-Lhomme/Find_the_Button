<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheet/stylesheet_global.css" rel="stylesheet"/>
    <link href="stylesheet/stylesheet_index.css" rel="stylesheet"/>

    <?php 
        include "Shortcut_HTML/buttonMessage.php";
        $indiceMessage = ["The red is pretty no ?", "What do you must find in this game ?"];
    ?>

    <title>Find the Button</title>
</head>

<body>
    <header>
        <h1>FIND THE <a style="color: red" class="secret_button" onclick="alert('<?= 'Now the game start. Good luck !' ?>')" href="Pages/1_FSNfxQhOsdliySInItaz.php">BUTTON !</a></h1>
    </header>

    <section>

        <h2>You must find all the <a onclick="alert('<?= $wrongButtonMessage[random_int(0, 9)] ?>')" href="">button</a> on the site to win !</h2>
        <p>To <a onclick="alert('<?= $wrongButtonMessage[random_int(0, 9)] ?>')">start</a> the game you must find the right <a onclick="alert('<?= $wrongButtonMessage[random_int(0, 9)] ?>')" href="">button</a>.</p>
        <p>You also have access to <a onclick="alert('<?= $indiceMessage[random_int(0, 1)] ?>')" href="">hint</a> on the top right of the page.</p>

    </section>

    <footer>
        <p>
            <b>Any copy or reproduction is allowed.</b> Start the 1 september 2025 and finish the ... .
        </p>
    </footer>
</body>
</html>