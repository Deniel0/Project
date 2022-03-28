<?php
    require 'includes/db.includes.php';
    include_once 'html_header.php';
?>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
<?php

?>
<body>

    <div class="content">
        <h1>Add parts to database:</h1>
        <!-- CPU -->
        <h3>Add CPU:</h3>
        <form action="yo.php" method="POST">
            <h3>Socket id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="socket" id="">
            <h3>Manufacturer id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="manufacturer" id="">
            <h3>Cpu name:</h3>
            <input required pattern="[A-Za-z]{12}" type="text" name="c_name" id="">
            <h3>Number of seeds:</h3>
            <input required pattern="[A-Za-z]{12}" type="text" name="seeds" id="">
            <h3>Number of threads:</h3>
            <input required pattern="[A-Za-z]{12}" type="text" name="threads" id="">
            <h3>clock:</h3>
            <input required pattern="[A-Za-z]{12}" type="text" name="clock" id="">
            <h3>Turbo clock:</h3>
            <input required pattern="[A-Za-z]{12}" type="text" name="Turbo clock" id="">
            <h3>Size of L3 cache:</h3>
            <input required pattern="[A-Za-z]{12}" type="text" name="l3-cache" id="">
            <h3>Wattage:</h3>
            <input required pattern="[A-Za-z]{12}" type="text" name="TDP" id="">
            <button type="submit">Add CPU</button>
        </form>
        <?php
            /*$sql = "INSERT INTO `cpu`(`cpu_id`, `Socket_id`, `Manufacturer_id`, `Name`, `Seeds`, `Threads`, `Clock`, `Turbo clock`, `L3 cache`, `TDP`)
                    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')";*/
        ?>
        <!-- Motherboard -->
        <h3>Add Motherboard:</h3>
        <form action="yo.php" method="POST">
            <h3>Socket id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="socket" id="">
            <h3>Manufacturer id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="manufacturer" id="">
            <h3>Chipset id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="chipset" id="">
            <h3>M.2 compatibility (0/1):</h3>
            <input required type="number" pattern="[0-9]{3}" min="0" max="1" name="m2_comp" id="">
            <h3>Motherboard name:</h3>
            <input required pattern="[A-Za-z]{16}" type="text" name="m_name" id="">
            <button type="submit">Add Motherboard</button>
        </form>
        <?php
            /*$sql = "INSERT INTO `motherboard`(`motherboard_id`, `Socket_id`, `Manufacturer_id`, `chipset_id`, `m2_comp`, `Name`)
                    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";*/
        ?>
        <!-- CPU cooler -->
        <h3>Add CPU cooler:</h3>
        <form action="yo.php" method="POST">
            <h3>Manufacturer id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="manufacturer" id="">
            <h3>Model:</h3>
            <input required pattern="[A-Za-z]{12}" type="text" name="model" id="">
            <h3>Type</h3>
            <input required pattern="[A-Za-z]{12}" type="text" name="type" id="">
            <h3>RPM:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="rmp" id="">
            <h3>Height:</h3>
            <input required pattern="[A-Za-z]{8}" type="text" name="height" id="">
            <h3>Fan size (in mm):</h3>
            <input required pattern="[A-Za-z]{8}" type="text" name="fan_size" id="">
            <button type="submit">Add CPU cooler</button>
        </form>
        <?php
            /*$sql = "INSERT INTO `cpu_cooler`(`cooler_id`, `Manufacturer_id`, `Model`, `Type`, `RPM`, `Height`, `Fan size`)
                    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";*/
        ?>
        <!-- RAM -->
        <h3>Add RAM:</h3>
        <form action="yo.php" method="POST">
            <h3>Socket id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="socket" id="">
            <h3>Manufacturer id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="manufacturer" id="">
            <h3>Ram type:</h3>
            <input required pattern="[A-Za-z]{4}" type="text" name="ram_type" id="">
            <h3>Capacity (GB):</h3>
            <input required pattern="[A-Za-z]{5}" type="text" name="capacity" id="">
            <h3>Speed (Mhz):</h3>
            <input required pattern="[A-Za-z]{7}" type="text" name="speed" id="">
            <h3>Modules:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" max="8" name="modules" id="">
            <h3>Cas Latency:</h3>
            <input required pattern="[A-Za-z]{4}" type="text" name="cas_Latency" id="">
            <button type="submit">Add RAM</button>
        </form>
        <?php
            /*$sql = "INSERT INTO `ram`(`ram_id`, `Manufacturer_id`, `ram_type_id`, `Capacity`, `Speed`, `Modules`, `CAS_Latency`)
                    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";*/
        ?>
        <!-- GPU -->
        <h3>Add GPU:</h3>
        <form action="yo.php" method="POST">
            <h3>Manufacturer id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="manufacturer" id="">
            <h3>Type:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="type" id="">
            <h3>GPU name:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="g_name" id="">
            <h3>Memory size(GB):</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="memory_size" id="">
            <h3>Memory type:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="memory_type" id="">
            <h3>Core clock(Mhz):</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="core_clock" id="">
            <h3>Boost clock(Mhz):</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="boost_clock" id="">
            <h3>Length(mm):</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="length" id="">
            <button type="submit">Add GPU</button>
        </form>
        <?php
            /*$sql = "INSERT INTO `gpu`(`gpu_id`, `Manufacturer_id`, `Type`, `Name`, `Memory_size`, `Memory_type`, `Core_clock`, `Boost_clock`, `Length`)
                    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";*/
        ?>
        <!-- Storage -->
        <h3>Add Storage:</h3>
        <form action="yo.php" method="POST">
            <h3>Manufacturer id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="manufacturer" id="">
            <h3>Storage type:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="storage_type" id="">
            <h3>Storage name:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="s_name" id="">
            <h3>Capacity:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="capacity" id="">
            <h3>Read/Write speed:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="r_w_speed" id="">
            <h3>M.2 compatibility (0/1):</h3>
            <input required type="number" pattern="[0-9]{3}" min="0" max="1" name="m2_comp" id="">
            <button type="submit">Add Storage</button>
        </form>
        <?php
            /*$sql = "INSERT INTO `storage`(`storage_id`, `Manufacturer_id`, `storage_type_id`, `Name`, `Capacity`, `R_W_speed`, `m2_comp`)
                    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";*/
        ?>
        <!-- Case -->
        <h3>Add Case:</h3>
        <form action="yo.php" method="POST">
            <h3>Manufacturer id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="manufacturer" id="">
            <h3>Case name:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="case_name" id="">
            <h3>Max length(mm):</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="max_length" id="">
            <button type="submit">Add Case</button>
        </form>
        <?php
            /*$sql = "INSERT INTO `case_pc`(`case_id`, `Manufacturer_id`, `Name`, `Max_Length`)
                    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";*/
        ?>
        <!-- Power Supply -->
        <h3>Add Power Supply:</h3>
        <form action="yo.php" method="POST">
            <h3>Manufacturer id:</h3>
            <input required type="number" pattern="[0-9]{3}" min="1" name="manufacturer" id="">
            <h3>Power Supply name:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="pw_name" id="">
            <h3>Wattage(W):</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="wattage" id="">
            <h3>Efficiency_Rating:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="efficiency_rating" id="">
            <h3>Modular:</h3>
            <input required pattern="[A-Za-z]{3}" type="text" name="modular" id="">
            <button type="submit">Add Power Supply</button>
        </form>
        <?php
            /*$sql = "INSERT INTO `power_supply`(`pw_id`, `Manufacturer_id`, `Name`, `Wattage`, `Efficiency_Rating`, `Modular`)
                    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";*/
        /* */
        ?>
    </div>
</body>