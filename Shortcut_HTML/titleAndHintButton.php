<style>
    #hintButton{
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
        cursor: pointer;
    }
</style>
<h1 id="title" style="text-align: center;">FIND THE BUTTON !</h1>
<button id="hintButton" onclick="alert('<?php echo $hintMessage ?>')"> <b>HINT</b> </button>