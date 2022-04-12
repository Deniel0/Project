<?php
    require 'includes/db.includes.php';
    require 'html_header.php';
?>
    <div class="container">
        <div class="title-style">
            <h1 class="main-header pulsate"><span class="bigger">Build your</span> <br> own gaming PC</h1>
        </div>
    
    <?php 
        if(!isset($_SESSION['username'])){
    ?>
        <button class="startb"><span class="text"><a href="login2.php">Let's get started</a></span></button>
    <?php 
        }
    ?>
    <?php 
        if(isset($_SESSION['username'])){
    ?>
        <button class="startb"><span class="text"><a href="Picker.php">Let's get started</a></span></button>
    <?php 
        }
    ?>
    </div>
</body>
