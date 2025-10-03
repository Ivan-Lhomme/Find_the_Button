<?php
    include "../Shortcut_HTML/buttonMessage.php";
    $hintMessage = "Too hard. Highlight it !";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .hintButton{
            position: fixed;
            top: 10%;
            right: 3%;
            border-top-right-radius: 0.8em;
            border-bottom-left-radius: 0.8em;
            border-bottom-right-radius: 0.5em;
            border-top-left-radius: 0.5em;
            background-color: black;
            color: red;
            border-color: white;
            font-size: medium;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1 - FIND THE BUTTON</title>

    <link href="../stylesheet_global.css" rel="stylesheet"/>

</head>
<body>
    <?php include "../Shortcut_HTML/titleAndHintButton.php" ?>

    <a onclick="alert('<?php echo $wrongButtonMessage[random_int(0, 9)] ?>')" href=""><?php echo $buttonName ?></a>

</body>
</html>