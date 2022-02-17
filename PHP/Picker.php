<?php
    require 'includes/db.includes.php';
    include_once 'html_header.php';
?>
<head>
<link rel="stylesheet" href="picker.css">
</head>
<body>
<!-- CPU -->
<select name='cpu1'>
<?php
    $sql = "SELECT Manufacturer_id, Name, Clock FROM cpu";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer_id'] . " " . $row['Name'] .  " " . $row['Clock'];
        echo "<option value='". "'</option>" ;
        //echo "<option value='". $row['Manufacturer_id'] . " " . $row['Name'] .  " " . $row['Clock'] ."'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- Motherboard -->
<select name='cpu1'>
<?php
    $sql = "SELECT Manufacturer_id, Name FROM motherboard";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer_id'] . " " . $row['Name'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- CPU cooler -->
<select name='cpu1'>
<?php
    $sql = "SELECT Manufacturer_id, Model, Type, RPM FROM cpu_cooler";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer_id'] . " " . $row['Model'] .  " " . $row['Type'] .  " " . $row['RPM'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- RAM -->
<select name='cpu1'>
<?php
    $sql = "SELECT Manufacturer_id, ram_type_id, Capacity, Speed, Modules FROM ram";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer_id'] . " " . $row['ram_type_id'] .  " " . $row['Capacity'] . " " . $row['Speed'] . " " . $row['Modules'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- 1st.:Storage -->
<select name='cpu1'>
<?php
    $sql = "SELECT Manufacturer_id, storage_type_id, Name, Capacity, R_W_speed FROM storage";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer_id'] . " " . $row['storage_type_id'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- 2nd.:Storage -->
<select name='cpu1'>
<?php
    $sql = "SELECT Manufacturer_id, storage_type_id, Name, Capacity, R_W_speed FROM storage";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer_id'] . " " . $row['storage_type_id'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- PowerSupply -->
<select name='cpu1'>
<?php
    $sql = "SELECT Manufacturer_id, Name, Wattage, Efficiency_Rating, Modular FROM power_supply";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer_id'] . " " . $row['Name'] .  " " . $row['Wattage'] . " " . $row['Efficiency_Rating'] . " " . $row['Modular'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
</body>
<?php
    include_once 'footer.php';
?>