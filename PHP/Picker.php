<?php
    if(isset($_POST['save'])){
        $myfile = fopen("picked_parts.txt", "w") or die("Unable to open file!");
        $txt = "CPU: ".$_POST["cpu"]."\n"."Motherboard: ".$_POST["Motherboard"]."\n"."CPU cooler: ".$_POST["cooler"]."\n"."RAM: ".$_POST["RAM"]."Video Card: ".$_POST["gpu"]."\n"."\n"."Storage: ".$_POST["Storage"]."\n"."2nd Storage: ".$_POST["ndStorage"]."\n"."Case: ".$_POST["case"]."\n"."PowerSupply: ".$_POST["PowerSupply"]."\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        header("Content-Disposition: attachment; filename=\"" . basename("picked_parts.txt") . "\"");
        header("Content-Type: application/force-download");
        header("Content-Length: " . filesize("picked_parts.txt"));
        header("Connection: close");
        readfile("picked_parts.txt");
    }
    require 'includes/db.includes.php';
    include_once 'header_picker.php';
?>
<head>
    <link rel="stylesheet" href="css/picker.css">
</head>
<body>
    <div class="pcontainer">
<!-- form-select -->
<!-- CPU -->
<form action="" method="post" id="jump">
<h3 class="pickertarget"><i class="fa-solid fa-microchip"></i> Select your CPU:</h3>
<select class="form-select rounded shadow" data-live-search="true" name="cpu">
    <!-- <option value="first" selected id="ogoption">Choose...</option> -->
<?php
    $sql = "SELECT cpu.Manufacturer_id, manufacturer.Manufacturer, Name, Clock FROM cpu, manufacturer WHERE cpu.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY Name ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo "<option value='". $row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Clock']."'>".$row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Clock']."</option>";
    }
    echo "</select> <br>";
?>

<!-- Motherboard -->
<h3><i class="fa-solid fa-chess-board"></i> Select your Motherboard:</h3>
<select  class="form-select rounded shadow" data-live-search="true" name="Motherboard">
    <!-- <option value="first" selected id="ogoption">Choose...</option> -->
<?php
    $sql = "SELECT motherboard.Manufacturer_id, manufacturer.Manufacturer, Name FROM motherboard, manufacturer WHERE motherboard.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY manufacturer.Manufacturer ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        // echo $row['Manufacturer'] . " " . $row['Name'];
        echo "<option value='". $row['Manufacturer'] . " " . $row['Name'] .  " " ."'>".$row['Manufacturer'] . " " . $row['Name'] .  " " ."</option>";
    }
    echo "</select> <br>";
?>
<!-- CPU cooler -->
<h3><i class="fa-solid fa-fan"></i> Select your CPU cooler:</h3>
<select  class="form-select rounded shadow" data-live-search="true" name="cooler">
    <!-- <option value="first" selected id="ogoption">Choose...</option> -->
<?php
    $sql = "SELECT cpu_cooler.Manufacturer_id, manufacturer.Manufacturer, Model, Type, RPM FROM cpu_cooler, manufacturer WHERE cpu_cooler.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY manufacturer.Manufacturer ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['Model'] .  " " . $row['Type'] .  " " . $row['RPM'];
        echo "<option value='".$row['Manufacturer'] . " " . $row['Model'] .  " " . $row['Type'] .  " " . $row['RPM']. "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- RAM -->
<h3><i class="fa-solid fa-memory"></i> Select your RAM:</h3>
<select  class="form-select rounded shadow" data-live-search="true" name="RAM">
    <!-- <option value="first" selected id="ogoption">Choose...</option> -->
<?php
    $sql = "SELECT ram.Manufacturer_id, manufacturer.Manufacturer, ram.ram_type_id, ram_type.model, Capacity, Speed, Modules FROM ram, manufacturer, ram_type WHERE ram.Manufacturer_id=manufacturer.Manufacturer_id AND ram.ram_type_id=ram_type.ram_type_id ORDER BY manufacturer.Manufacturer ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['model'] .  " " . $row['Capacity'] . " " . $row['Speed'] . " " . $row['Modules'] . " piece";
        echo "<option value='".$row['Manufacturer'] . " " . $row['model'] .  " " . $row['Capacity'] . " " . $row['Speed'] . " " . $row['Modules'] . " piece". "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- GPU -->
<h3><i class="fa-solid fa-gamepad"></i> Select your Video Card:</h3>
<select  class="form-select rounded shadow" data-live-search="true" name="gpu">
    <!-- <option value="first" selected id="ogoption">Choose...</option> -->
<?php
    $sql = "SELECT gpu.Manufacturer_id, manufacturer.Manufacturer, Type, Name, Memory_size, Memory_type, Core_clock, Boost_clock  FROM gpu, manufacturer WHERE gpu.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY manufacturer.Manufacturer ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['Type'] .  " " . $row['Name'] . " " . $row['Memory_size'] . " " . $row['Memory_type'] . " " . $row['Core_clock'] . " " . $row['Boost_clock'];
        echo "<option value='".$row['Manufacturer'] . " " . $row['Type'] .  " " . $row['Name'] . " " . $row['Memory_size'] . " " . $row['Memory_type'] . " " . $row['Core_clock'] . " " . $row['Boost_clock']."'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- 1st.:Storage -->
<h3><i class="fa-solid fa-hard-drive"></i> Select your 1st.:Storage:</h3>
<select  class="form-select rounded shadow" data-live-search="true" name="Storage">
    <!-- <option value="first" selected id="ogoption">Choose...</option> -->
<?php
    $sql = "SELECT storage.Manufacturer_id, manufacturer.Manufacturer, storage.storage_type_id, storage_type.s_type, Name, Capacity, R_W_speed FROM storage, manufacturer, storage_type WHERE storage.Manufacturer_id=manufacturer.Manufacturer_id AND storage.storage_type_id=storage_type.storage_type_id ORDER BY manufacturer.Manufacturer ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed'];
        echo "<option value='".$row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed']. "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- 2nd.:Storage -->
<h3><i class="fa-solid fa-hard-drive"></i> Select your 2nd.:Storage:</h3>
<select  class="form-select rounded shadow" data-live-search="true" name="ndStorage">
    <!-- <option value="first" selected id="ogoption">Choose...</option> -->
<?php
    $sql = "SELECT storage.Manufacturer_id, manufacturer.Manufacturer, storage.storage_type_id, storage_type.s_type, Name, Capacity, R_W_speed FROM storage, manufacturer, storage_type WHERE storage.Manufacturer_id=manufacturer.Manufacturer_id AND storage.storage_type_id=storage_type.storage_type_id ORDER BY manufacturer.Manufacturer ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed'];
        echo "<option value='". $row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed']."'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- Case -->
<h3><i class="fa-solid fa-fan"></i> Select your Case:</h3>
<select  class="form-select rounded shadow" data-live-search="true" name="case">
    <!-- <option value="first" selected id="ogoption">Choose...</option> -->
<?php
    $sql = "SELECT case_pc.Manufacturer_id, manufacturer.Manufacturer, Name FROM case_pc, manufacturer WHERE case_pc.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY manufacturer.Manufacturer ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['Name'];
        echo "<option value='".$row['Manufacturer'] . " " . $row['Name']. "'</option>" ;
    }
    echo "</select> <br>";
?>
<!-- PowerSupply -->
<h3><i class="fa-solid fa-plug"></i> Select your PowerSupply:</h3>
<select  class="form-select rounded shadow" data-live-search="true" name="PowerSupply">
    <!-- <option value="first" selected id="ogoption">Choose...</option> -->
<?php
    $sql = "SELECT power_supply.Manufacturer_id, manufacturer.Manufacturer, Name, Wattage, Efficiency_Rating, Modular FROM power_supply, manufacturer WHERE power_supply.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY manufacturer.Manufacturer ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Wattage'] . " " . $row['Efficiency_Rating'] . " " . $row['Modular'];
        echo "<option value='".$row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Wattage'] . " " . $row['Efficiency_Rating'] . " " . $row['Modular']. "'</option>" ;
    }
    echo "</select> <br>";
?>
        <!-- button -->
        <button type="submit" class="startb" name="save" role="button">
            <span class="text"><i class="fa-solid fa-download"></i> Save</span>
        </button>
        <!-- close -->
    </form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
    include_once 'footer.php'; 
?>