<?php
    if(isset($_POST['save'])){
        $myfile = fopen("picked_parts.txt", "w") or die("Unable to open file!");
        $txt = "CPU: ".$_POST["cpu"]."\n"."Motherboard: ".$_POST["Motherboard"]."\n"."CPU cooler: ".$_POST["cooler"]." rpm\n"."RAM: ".$_POST["RAM"]."\n"."Video Card: ".$_POST["gpu"]."\n"."Storage: ".$_POST["Storage"]."\n"."2nd Storage: ".$_POST["ndStorage"]."\n"."Case: ".$_POST["case"]."\n"."PowerSupply: ".$_POST["PowerSupply"]."\n";
            fwrite($myfile, $txt);
            fclose($myfile);
            header("Content-Disposition: attachment; filename=\"" . basename("picked_parts.txt") . "\"");
            header("Content-Type: application/force-download");
            header("Content-Length: " . filesize("picked_parts.txt"));
            header("Connection: close");
            readfile("picked_parts.txt");
    }
    require 'includes/db.includes.php';
    include_once 'html_header.php';
?>
<!-- Head -->
    <head>
        <title>Picker</title>
        <link rel="stylesheet" href="css/picker.css">
    </head>
<!-- Head end -->
<body>
    <div class="pcontainer">
<!-- form-select -->
<!-- CPU -->
    <form action="" method="post" id="jump">
            <h3 class="pickertarget"><i class="fa-solid fa-microchip"></i> Select your CPU:</h3>
        <select required id="cpu" name="cpu" onchange="changeCpu()">
            <option value="" selected disabled>Select CPU...</option>
            <?php
                $sql = "SELECT cpu.Manufacturer_id, manufacturer.Manufacturer, Name, Clock, cpu_id FROM cpu, manufacturer WHERE cpu.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY Name ASC";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                while ($row = mysqli_fetch_array($result)){
                    echo "<option id='".$row['cpu_id']."' value='". $row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Clock']."'>".$row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Clock']."</option>";
                }
            ?>
        </select><br>
<!-- Motherboard -->
        <h3><i class="fa-solid fa-chess-board"></i> Select your Motherboard:</h3>
    <select required name="Motherboard" id="Motherboard" onchange="changeStorage()">
        <option value="" selected disabled>Select Motherboard...</option>
        <?php
            $sql = "SELECT motherboard.Manufacturer_id, manufacturer.Manufacturer, Name, motherboard.motherboard_id FROM motherboard, manufacturer WHERE motherboard.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY manufacturer.Manufacturer ASC";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)){
                echo "<option id='".$row['motherboard_id']."' value='". $row['Manufacturer'] . " " . $row['Name'] .  " " ."'>".$row['Manufacturer'] . " " . $row['Name'] .  " " ."</option>";
            }
        ?>
    </select><br>
<!-- CPU cooler -->
        <h3><i class="fa-solid fa-fan"></i> Select your CPU cooler:</h3>
    <select required name="cooler">
        <option value="" selected disabled>Select CPU Cooler...</option>
        <?php
            $sql = "SELECT cpu_cooler.Manufacturer_id, manufacturer.Manufacturer, Model, cpu_cooler.cooler_type_id, cpu_cooler_type.cooler_type, RPM FROM cpu_cooler, manufacturer, cpu_cooler_type WHERE cpu_cooler.Manufacturer_id=manufacturer.Manufacturer_id AND cpu_cooler.cooler_type_id=cpu_cooler_type.cpu_cooler_type_id ORDER BY manufacturer.Manufacturer ASC";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)){
                echo "<option value='".$row['Manufacturer'] . " " . $row['Model'] .  " " . $row['cooler_type'] .  " " . $row['RPM']. "'>".$row['Manufacturer'] . " " . $row['Model'] .  " " . $row['cooler_type'] .  " " . $row['RPM']. " rpm"."</option>" ;
            }
        ?>
    </select><br>
<!-- RAM -->
        <h3><i class="fa-solid fa-memory"></i> Select your RAM:</h3>
    <select required name="RAM">
        <option value="" selected disabled>Select RAM...</option>
        <?php
            $sql = "SELECT ram.Manufacturer_id, manufacturer.Manufacturer, ram.ram_type_id, ram_type.model, Capacity, Speed, Modules FROM ram, manufacturer, ram_type WHERE ram.Manufacturer_id=manufacturer.Manufacturer_id AND ram.ram_type_id=ram_type.ram_type_id ORDER BY manufacturer.Manufacturer ASC";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)){
                echo "<option value='".$row['Manufacturer'] . " " . $row['model'] .  " " . $row['Capacity'] . " " . $row['Speed'] . " " . $row['Modules'] . " piece". "'>".$row['Manufacturer'] . " " . $row['model'] .  " " . $row['Capacity'] . " " . $row['Speed'] . " " . $row['Modules'] . " piece". "</option>" ;
            }
        ?>
    </select><br>
<!-- GPU -->
        <h3><i class="fa-solid fa-gamepad"></i> Select your Video Card:</h3>
    <select required name="gpu" id="gpu" onchange="changeCase()">
        <option value="" selected disabled>Select Video Card...</option>
        <?php
            $sql = "SELECT gpu.Manufacturer_id, manufacturer.Manufacturer, Type, Name, Memory_size, Memory_type, gpu_id FROM gpu, manufacturer WHERE gpu.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY manufacturer.Manufacturer ASC";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)){
                echo "<option id='".$row['gpu_id']."' value='".$row['Manufacturer'] . " " . $row['Type'] .  " " . $row['Name'] . " " . $row['Memory_size'] . " " . $row['Memory_type'] ."'>".$row['Manufacturer'] . " " . $row['Type'] .  " " . $row['Name'] . " " . $row['Memory_size'] . " " . $row['Memory_type'] ."</option>" ;
            }
        ?>
    </select><br>
<!-- 1st.:Storage -->
        <h3><i class="fa-solid fa-hard-drive"></i> Select your 1st.:Storage:</h3>
    <select required name="Storage" id="Storage">
        <option value="" selected disabled>Select 1st.:Storage...</option>
        <?php
            $sql = "SELECT storage.Manufacturer_id, manufacturer.Manufacturer, storage.storage_type_id, storage_type.s_type, Name, Capacity, R_W_speed, storage_id FROM storage, manufacturer, storage_type WHERE storage.Manufacturer_id=manufacturer.Manufacturer_id AND storage.storage_type_id=storage_type.storage_type_id ORDER BY manufacturer.Manufacturer ASC";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)){
                echo "<option id='".$row['storage_id']."' value='".$row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed']. "'>".$row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed']. "</option>" ;
            }
        ?>
    </select><br>
<!-- 2nd.:Storage -->
        <h3><i class="fa-solid fa-hard-drive"></i> Select your 2nd.:Storage:</h3>
    <select required name="ndStorage" id="ndStorage">
        <option value="" selected disabled>Select 2nd.:Storage...</option>
        <?php
            $sql = "SELECT storage.Manufacturer_id, manufacturer.Manufacturer, storage.storage_type_id, storage_type.s_type, Name, Capacity, R_W_speed, storage_id FROM storage, manufacturer, storage_type WHERE storage.Manufacturer_id=manufacturer.Manufacturer_id AND storage.storage_type_id=storage_type.storage_type_id ORDER BY manufacturer.Manufacturer ASC";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)){
                echo "<option id='".$row['storage_id']."' value='". $row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed']."'>". $row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed']."</option>" ;
            }
        ?>
    </select><br>
<!-- Case -->
        <h3><i class="fa-solid fa-fan"></i> Select your Case:</h3>
    <select required name="case" id="case">
    <option value="" selected disabled>Select case...</option>
    <?php
        $sql = "SELECT case_pc.Manufacturer_id, manufacturer.Manufacturer, Name, case_id FROM case_pc, manufacturer  WHERE case_pc.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY manufacturer.Manufacturer ASC";
        $result = $conn->query($sql);
        $resultCheck = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result)){
            echo "<option  id='".$row['case_id']."' value='".$row['Manufacturer'] . " " . $row['Name']. "'>".$row['Manufacturer'] . " " . $row['Name']. "</option>" ;
        }
    ?>
    </select><br>
<!-- PowerSupply -->
        <h3><i class="fa-solid fa-plug"></i> Select your PowerSupply:</h3>
    <select required name="PowerSupply">
    <option value="" selected disabled>Select Power Supply...</option>
    <?php
        $sql = "SELECT power_supply.Manufacturer_id, manufacturer.Manufacturer, Name, Wattage, Efficiency_Rating, Modular FROM power_supply, manufacturer WHERE power_supply.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY manufacturer.Manufacturer ASC";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result)){
            echo "<option value='".$row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Wattage'] . " " . $row['Efficiency_Rating'] . " " . $row['Modular']. "'>".$row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Wattage'] . " " . $row['Efficiency_Rating'] . " " . $row['Modular']. "</option>";
        }
    ?>
    </select><br>
    <?php 
        if(isset($_SESSION['username'])){
    ?>
        <!-- button -->
        <button type="submit" class="startb" name="save" role="button">
            <span class="text"><i class="fa-solid fa-download"></i> Save</span>
        </button>
        <!-- close -->
    <?php 
        }
    ?>
    </form>
    </div>

<!-- AJAX -->
    <script>
            changeCpu();
            changeStorage();
            changeCase();
        function changeCpu() {
            var id=document.getElementById("cpu").options[document.getElementById("cpu").selectedIndex].id;
            $.ajax({
                type:'post',
                url:'partpickerAjax.php',
                dataType:"JSON",
                data:{ action:'cpu',c_id:id},
                success: function(data){
                    var motherboard = document.getElementById("Motherboard");
                    motherboard.options.length=0;
                    for(i=0;i<data.length;i++){
                        opt = document.createElement("option");
                        opt.value = data[i].name;
                        opt.textContent = data[i].name;
                        opt.id=data[i].id;
                        motherboard.appendChild(opt);
                    }
                },
            })
        }
        function changeStorage() {
            var id=document.getElementById("Motherboard").options[document.getElementById("Motherboard").selectedIndex].id;
            $.ajax({
                type:'post',
                url:'partpickerAjax.php',
                dataType:"JSON",
                data:{ action:'Motherboard',m_id:id},
                success: function(data){
                    var motherboard = document.getElementById("Storage");
                    motherboard.options.length=0;
                    for(j=0;j<data.length;j++){
                        opt = document.createElement("option");
                        opt.value = data[j];
                        opt.textContent = data[j];
                        motherboard.appendChild(opt);
                    }
                    motherboard = document.getElementById("ndStorage");
                    motherboard.options.length=0;
                    for(j=0;j<data.length;j++){
                        opt = document.createElement("option");
                        opt.value = data[j];
                        opt.textContent = data[j];
                        motherboard.appendChild(opt);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            })
        }
        function changeCase() {
            var id=document.getElementById("gpu").options[document.getElementById("gpu").selectedIndex].id;
            $.ajax({
                type:'post',
                url:'partpickerAjax.php',
                dataType:"JSON",
                data:{ action:'gpu',g_id:id},
                success: function(data){
                    var motherboard = document.getElementById("case");
                    motherboard.options.length=0;
                    for(i=0;i<data.length;i++){
                        opt = document.createElement("option");
                        opt.value = data[i];
                        opt.textContent = data[i];
                        motherboard.appendChild(opt);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            })
        }
    </script>
<!-- AJAX End -->
</body>
<?php
    include_once 'footer.php';
?>