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
    $sql = "SELECT cpu.Manufacturer_id, manufacturer.Manufacturer, Name, Clock FROM cpu, manufacturer WHERE cpu.Manufacturer_id=manufacturer.Manufacturer_id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Clock'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- Motherboard -->
<h3>Select your Motherboard:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
<?php
    $sql = "SELECT motherboard.Manufacturer_id, manufacturer.Manufacturer, Name FROM motherboard, manufacturer WHERE motherboard.Manufacturer_id=manufacturer.Manufacturer_id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['Name'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- CPU cooler -->
<h3>Select your CPU cooler:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
<?php
    $sql = "SELECT cpu_cooler.Manufacturer_id, manufacturer.Manufacturer, Model, Type, RPM FROM cpu_cooler, manufacturer WHERE cpu_cooler.Manufacturer_id=manufacturer.Manufacturer_id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['Model'] .  " " . $row['Type'] .  " " . $row['RPM'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- RAM -->
<h3>Select your RAM:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
<?php
    $sql = "SELECT ram.Manufacturer_id, manufacturer.Manufacturer, ram.ram_type_id, ram_type.model, Capacity, Speed, Modules FROM ram, manufacturer, ram_type WHERE ram.Manufacturer_id=manufacturer.Manufacturer_id AND ram.ram_type_id=ram_type.ram_type_id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['model'] .  " " . $row['Capacity'] . " " . $row['Speed'] . " " . $row['Modules'] . " piece";
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- 1st.:Storage -->
<h3>Select your 1st.:Storage:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
<?php
    $sql = "SELECT storage.Manufacturer_id, manufacturer.Manufacturer, storage.storage_type_id, storage_type.s_type, Name, Capacity, R_W_speed FROM storage, manufacturer, storage_type WHERE storage.Manufacturer_id=manufacturer.Manufacturer_id AND storage.storage_type_id=storage_type.storage_type_id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- 2nd.:Storage -->
<h3>Select your 2nd.:Storage:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
<?php
    $sql = "SELECT storage.Manufacturer_id, manufacturer.Manufacturer, storage.storage_type_id, storage_type.s_type, Name, Capacity, R_W_speed FROM storage, manufacturer, storage_type WHERE storage.Manufacturer_id=manufacturer.Manufacturer_id AND storage.storage_type_id=storage_type.storage_type_id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed'];
        echo "<option value='". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- PowerSupply -->
<h3>Select your PowerSupply:</h3>
<select  class="form-select rounded shadow" data-live-search="true">
<?php
    $sql = "SELECT power_supply.Manufacturer_id, manufacturer.Manufacturer, Name, Wattage, Efficiency_Rating, Modular FROM power_supply, manufacturer WHERE power_supply.Manufacturer_id=manufacturer.Manufacturer_id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Wattage'] . " " . $row['Efficiency_Rating'] . " " . $row['Modular'];
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