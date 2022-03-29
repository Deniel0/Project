<?php
    require 'includes/db.includes.php';
    require 'adminadd.php';
    include_once 'html_header.php';
?>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="css/select.css">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/compb.css">
    </head>
<?php
?>
<body>
    <div class="content">
        <ul class="flex-container wrap">
            <!-- Manufacturer -->
        <div class="card">
            <li class="flex-item">
            <form action="" method="POST">
            <h4>Admin:</h4>
                <input required type="number" pattern="[0-9]{3}" min="1" name="admin" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Admin</button>
            </form>
            <form action="" method="POST">
                <h4>Manufacturer:</h4>
                <input required type="text" name="man_name" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Manufacturer</button>
            </form>
            <form action="" method="POST">
                <h4>Chipset:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="chip_name" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Chipset</button>
            </form>
            <?php
                $sql = "INSERT INTO `chipset`(`chipset_id`, `chipset`) VALUES ('[value-2]')";
            ?>
            <form action="" method="POST">
                <h4>Ram type:</h4>
                <input required pattern="[A-Za-z]{4}" type="text" name="ram_type" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Ram type</button>
            </form>
            <?php
                /*$sql = "INSERT INTO `ram_type`(`ram_type_id`, `model`) VALUES ('[value-2]')";*/
            ?>
            <form action="" method="POST">
                <h4>Storage type:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="stype_name" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Storage type</button>
            </form>
            <?php
                /*$sql = "INSERT INTO `storage_type`(`storage_type_id`, `s_type`) VALUES ('[value-2]')";*/
            ?>
            </li>
        </div>
        <!-- CPU -->
        <div class="card">
            <li class="flex-item">
            <h3>Add CPU:</h3>
            <form action="" method="POST">
                <h4>Socket id:</h4>
                <input required type="number" pattern="[0-9]{3}" min="1" name="socket" id="">
                <h4>Manufacturer:</h4>
                    <select required name="Manufacturer">
                    <option value="" selected disabled>Select Manufacturer...</option>
                    <?php
                        $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>Cpu name:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="c_name" id="">
                <h4>Number of seeds:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="seeds" id="">
                <h4>Number of threads:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="threads" id="">
                <h4>Clock:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="clock" id="">
                <h4>Turbo clock:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="Turbo clock" id="">
                <h4>Size of L3 cache:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="l3-cache" id="">
                <h4>Wattage:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="TDP" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add CPU</button>
            </form>
            <?php
                /*$sql = "$sql = "INSERT INTO `cpu`(`cpu_id`, `Socket_id`, `Manufacturer_id`, `Name`, `Seeds`, `Threads`, `Clock`, `Turbo clock`, `L3 cache`, `TDP`)
                        VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')"";*/
            ?>
            </li>
        </div>
        <!-- Motherboard -->
        <div class="card">
            <li class="flex-item">
            <h3>Add Motherboard:</h3>
            <form action="yo.php" method="POST">
                <h4>Socket id:</h4>
                <input required type="number" pattern="[0-9]{3}" min="1" name="socket" id="">
                <h4>Manufacturer id:</h4>
                <select required name="Manufacturer">
                <option value="" selected disabled>Select Manufacturer...</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Chipset id:</h4>
                <input required type="number" pattern="[0-9]{3}" min="1" name="chipset" id="">
                <h4>M.2 compatibility (0/1):</h4>
                <input required type="number" pattern="[0-9]{3}" min="0" max="1" name="m2_comp" id="">
                <h4>Motherboard name:</h4>
                <input required pattern="[A-Za-z]{16}" type="text" name="m_name" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Motherboard</button>
            </form>
            <?php
                /*$sql = "$sql = "INSERT INTO `motherboard`(`motherboard_id`, `Socket_id`, `Manufacturer_id`, `chipset_id`, `m2_comp`, `Name`)
                        VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')"";*/
            ?>
            </li>
        </div>
        <!-- CPU cooler -->
        <div class="card">
            <li class="flex-item">
            <h3>Add CPU cooler:</h3>
            <form action="yo.php" method="POST">
                <h4>Manufacturer id:</h4>
                <select required name="Manufacturer">
                <option value="" selected disabled>Select Manufacturer...</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Model:</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="model" id="">
                <h4>Type</h4>
                <input required pattern="[A-Za-z]{12}" type="text" name="type" id="">
                <h4>RPM:</h4>
                <input required type="number" pattern="[0-9]{3}" min="1" name="rmp" id="">
                <h4>Height:</h4>
                <input required pattern="[A-Za-z]{8}" type="text" name="height" id="">
                <h4>Fan size (in mm):</h4>
                <input required pattern="[A-Za-z]{8}" type="text" name="fan_size" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add CPU cooler</button>
            </form>
            <?php
                /*$sql = "$sql = "INSERT INTO `cpu_cooler`(`cooler_id`, `Manufacturer_id`, `Model`, `Type`, `RPM`, `Height`, `Fan size`)
                        VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')"";*/
            ?>
            </li>
        </div>
        <!-- RAM -->
        <div class="card">
            <li class="flex-item">
            <h3>Add RAM:</h3>
            <form action="yo.php" method="POST">
                <h4>Socket id:</h4>
                <input required type="number" pattern="[0-9]{3}" min="1" name="socket" id="">
                <h4>Manufacturer id:</h4>
                <select required name="Manufacturer">
                <option value="" selected disabled>Select Manufacturer...</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Ram type:</h4>
                <select required name="ram_type">
                    <option value="" selected disabled>Select Ram type...</option>
                    <?php
                        $sql = "SELECT * FROM `ram_type`";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['model']."'>".$row['model']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>Capacity (GB):</h4>
                <input required pattern="[A-Za-z]{5}" type="text" name="capacity" id="">
                <h4>Speed (Mhz):</h4>
                <input required pattern="[A-Za-z]{7}" type="text" name="speed" id="">
                <h4>Modules:</h4>
                <input required type="number" pattern="[0-9]{3}" min="1" max="8" name="modules" id="">
                <h4>Cas Latency:</h4>
                <input required pattern="[A-Za-z]{4}" type="text" name="cas_Latency" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add RAM</button>
            </form>
            <?php
                /*$sql = "$sql = "INSERT INTO `ram`(`ram_id`, `Manufacturer_id`, `ram_type_id`, `Capacity`, `Speed`, `Modules`, `CAS_Latency`)
                        VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')"";*/
            ?>
            </li>
        </div>
        <!-- GPU -->
        <div class="card">
            <li class="flex-item">
            <h3>Add GPU:</h3>
            <form action="yo.php" method="POST">
                <h4>Manufacturer id:</h4>
                <select required name="Manufacturer">
                <option value="" selected disabled>Select Manufacturer...</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Type:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="type" id="">
                <h4>GPU name:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="g_name" id="">
                <h4>Memory size(GB):</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="memory_size" id="">
                <h4>Memory type:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="memory_type" id="">
                <h4>Core clock(Mhz):</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="core_clock" id="">
                <h4>Boost clock(Mhz):</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="boost_clock" id="">
                <h4>Length(mm):</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="length" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add GPU</button>
            </form>
            <?php
                /*$sql = "$sql = "INSERT INTO `gpu`(`gpu_id`, `Manufacturer_id`, `Type`, `Name`, `Memory_size`, `Memory_type`, `Core_clock`, `Boost_clock`, `Length`)
                        VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')"";*/
            ?>
            </li>
        </div>
        <!-- Storage -->
        <div class="card">
            <li class="flex-item">
            <h3>Add Storage:</h3>
            <form action="yo.php" method="POST">
                <h4>Manufacturer id:</h4>
                <select required name="Manufacturer">
                <option value="" selected disabled>Select Manufacturer...</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Storage type:</h4>
                <select required name="storage_type">
                    <option value="" selected disabled>Select Storage type...</option>
                    <?php
                        $sql = "SELECT * FROM `storage_type`";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['s_type']."'>".$row['s_type']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>Storage name:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="s_name" id="">
                <h4>Capacity:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="capacity" id="">
                <h4>Read/Write speed:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="r_w_speed" id="">
                <h4>M.2 compatibility (0/1):</h4>
                <input required type="number" pattern="[0-9]{3}" min="0" max="1" name="m2_comp" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Storage</button>
            </form>
            <?php
                /*$sql = "$sql = "INSERT INTO `storage`(`storage_id`, `Manufacturer_id`, `storage_type_id`, `Name`, `Capacity`, `R_W_speed`, `m2_comp`)
                        VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')"";*/
            ?>
            </li>
        </div>
        <!-- Case -->
        <div class="card">
            <li class="flex-item">
            <h3>Add Case:</h3>
            <form action="yo.php" method="POST">
                <h4>Manufacturer id:</h4>
                <select required name="Manufacturer">
                <option value="" selected disabled>Select Manufacturer...</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Case name:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="case_name" id="">
                <h4>Max length(mm):</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="max_length" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Case</button>
            </form>
            <?php
                /*$sql = "$sql = "INSERT INTO `case_pc`(`case_id`, `Manufacturer_id`, `Name`, `Max_Length`)
                        VALUES ('[value-2]','[value-3]','[value-4]')"";*/
            ?>
            </li>
        </div>
        <!-- Power Supply -->
        <div class="card">
            <li class="flex-item">
            <h3>Add Power Supply:</h3>
            <form action="yo.php" method="POST">
                <h4>Manufacturer id:</h4>
                <select required name="Manufacturer">
                <option value="" selected disabled>Select Manufacturer...</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Power Supply name:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="pw_name" id="">
                <h4>Wattage(W):</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="wattage" id="">
                <h4>Efficiency_Rating:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="efficiency_rating" id="">
                <h4>Modular:</h4>
                <input required pattern="[A-Za-z]{3}" type="text" name="modular" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Power Supply</button>
            </form>
            <?php
                /*$sql = "$sql = "INSERT INTO `power_supply`(`pw_id`, `Manufacturer_id`, `Name`, `Wattage`, `Efficiency_Rating`, `Modular`)
                        VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')"";*/
            /* */
            ?>
            </li>
        </div>
        </ul>
    </div>
</body>