<?php
    require 'includes/db.includes.php';
    if(isset($_POST['man_name'])){
        $sql = "INSERT INTO manufacturer (Manufacturer) VALUES (".$_POST["man_name"] .")";
    }
    if(isset($_POST['admin'])){
        $sql = "INSERT INTO `admin`(`user_id`,`prev`) Select user_id,1 from users where username='".$_POST["admin"]."'";
    }
    if(isset($_POST['chip_name'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["chip_name"] .")";
    }
    if(isset($_POST['ram_type'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["ram_type"] .")";
    }
    if(isset($_POST['stype_name'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["stype_name"] .")";
    }
    if(isset($_POST['socket'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["socket"] .")";
    }
    if(isset($_POST['c_name'],$_POST['seeds'],$_POST['threads'],$_POST['clock'],$_POST['Turbo clock'],$_POST['l3-cache'],$_POST['TDP'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST['c_name']."".$_POST['seeds']."".$_POST['threads']."".$_POST['clock']."".$_POST['Turbo clock']."".$_POST['l3-cache']."".$_POST['TDP'].")";
    }
    if(isset($_POST['man_name'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["man_name"] .")";
    }
    if(isset($_POST['man_name'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["man_name"] .")";
    }
    if(isset($_POST['man_name'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["man_name"] .")";
    }
    if(isset($_POST['man_name'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["man_name"] .")";
    }
    if(isset($_POST['man_name'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["man_name"] .")";
    }
    if(isset($_POST['man_name'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["man_name"] .")";
    }
    if(isset($_POST['man_name'])){
        $sql = "INSERT INTO manufacturer(Manufacturer) VALUES (".$_POST["man_name"] .")";
    }
    if (isset($sql)){
        $conn->query($sql);
    }
?>