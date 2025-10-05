<?php
    include "../Shortcut_HTML/buttonMessage.php";
    $hintMessage = "Too hard. Highlight it !";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1 - FIND THE BUTTON</title>

    <link href="../stylesheet_global.css" rel="stylesheet"/>

</head>
<body>
    <?php include "../Shortcut_HTML/titleAndHintButton.php" ?>

    <style>
        a{
            position: relative;
            right: -40%;
        }
        #test:hover{
            cursor: default;
        }
    </style>

    <a id="test" style="color: black;" onclick="alert('<?php echo $rightButtonMessage ?>')" href="">.</a>

</body>
</html>