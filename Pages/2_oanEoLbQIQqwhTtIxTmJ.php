<!DOCTYPE html>
<html lang="en" style="background-color: #37630e;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 2 - FIND THE BUTTON</title>

    <?php
        include "../Shortcut_HTML/buttonMessage.php";
        $hintMessage = "hint message";
    ?>

    <link href="../stylesheet/stylesheet_global.css" rel="stylesheet"/>
    <link href="../stylesheet/stylesheet_2.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <?php include "../Shortcut_HTML/titleAndHintButton.php" ?>

    <textarea disabled></textarea>

    <img alt="numpad" usemap="#numpad" src="../Image/numpad.png"/>

    <map name="numpad">
        <area alt="7" title="7" coords="53,98,168,98,183,112,184,188,74,188,53,177" shape="poly" onclick="addNumber('7')">
        <area alt="8" title="8" coords="479,98,363,98,362,177,368,188,478,189" shape="poly" onclick="addNumber('8')">
        <area alt="9" title="9" coords="665,115,675,99,793,99,792,178,777,189,665,189" shape="poly" onclick="addNumber('9')">
        
        <area alt="4" title="4" coords="58,410,185,409,187,482,173,487,58,485" shape="poly" onclick="addNumber('4')">
        <area alt="5" title="5" coords="363,411,478,411,477,489,362,489" shape="poly" onclick="addNumber('5')">
        <area alt="6" title="6" coords="661,411,786,412,785,490,670,488,660,485" shape="poly" onclick="addNumber('6')">
        
        <area alt="1" title="1" coords="63,710,82,695,188,698,191,769,176,786,64,784" shape="poly" onclick="addNumber('1')">
        <area alt="2" title="2" coords="369,699,477,700,476,789,363,787,363,713" shape="poly" onclick="addNumber('2')">
        <area alt="3" title="3" coords="657,702,766,702,781,717,778,792,664,790,655,773" shape="poly" onclick="addNumber('3')">
    </map>

    <script src="../script/imageMapResizer.js"></script>
    <script> imageMapResize(); </script>
    <script src="../script/numpadCode.js"></script>
</body>
</html>