<?php
    require 'includes/db.includes.php';
    require 'adminadd.php';
    include_once 'html_header.php';
?>
<form action="" method="POST">
    <h4>Teszt:</h4>
        <input type="text" name="nev" id=""><br>
        <input type="number" name="szam" id=""><br>
        <input type="text" name="valami" id=""><br>
    <button type="submit">Add</button>
</form>