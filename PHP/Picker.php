<?php
    require 'includes/db.includes.php';
    include_once 'html_header.php';
?>
<head>
<link rel="stylesheet" href="picker.css">
</head>
<body>
    <div class="container">
<!-- form-select -->
<!-- CPU -->
<h3>Select your CPU:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
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
<h3>Select your Motherboard:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
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
<h3>Select your CPU cooler:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
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
<h3>Select your RAM:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
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
<h3>Select your 1st.:Storage:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
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
<h3>Select your 2nd.:Storage:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
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
<h3>Select your PowerSupply:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
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
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
    include_once 'footer.php';
?>