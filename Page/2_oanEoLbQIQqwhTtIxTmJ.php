<?php
    include "../Shortcut_HTML/buttonMessage.php";
    $hintMessage = "hint message";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 2 - FIND THE BUTTON</title>

    <link href="../stylesheet_global.css" rel="stylesheet"/>

</head>
<body>
    <?php include "../Shortcut_HTML/titleAndHintButton.php" ?>

    <script>
        window.addEventListener("load", function () {
            console.log(
                "Cette fonction est exécutée une fois quand la page est chargée.",
            );
        });
    </script>

</body>
</html>