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
                <input required type="number" pattern="[0-9]" min="1" name="admin" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Admin</button>
            </form>
            <form action="" method="POST">
                <h4>Manufacturer:</h4>
                <input required pattern="[A-Za-z]" type="text" name="man_name" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Manufacturer</button>
            </form>
            <form action="" method="POST">
                <h4>Chipset:</h4>
                <input required pattern="[A-Za-z]" type="text" name="chip_name" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Chipset</button>
            </form>
            <form action="" method="POST">
                <h4>Ram type:</h4>
                <input required pattern="[A-Za-z]" type="text" name="ram_type" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Ram type</button>
            </form>
            <form action="" method="POST">
                <h4>Storage type:</h4>
                <input required pattern="[A-Za-z]" type="text" name="stype_name" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Storage type</button>
            </form>
            <form action="" method="POST">
                <h4>Socket:</h4>
                <input required pattern="[A-Za-z]" type="text" name="stype_name" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Storage type</button>
            </form>
            </li>
        </div>
        <!-- CPU -->
        <div class="card">
            <li class="flex-item">
            <h3>Add CPU:</h3>
            <form action="" method="POST">
                <h4>Socket:</h4>
                <select required name="Socket">
                    <option value="" selected disabled>Select Socket...</option>
                    <?php
                        $sql = "SELECT * FROM socket";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['Socket']."'>".$row['Socket']."</option>" ;
                        }
                    ?>
                    </select><br>
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
                <input required pattern="[A-Za-z]" type="text" name="c_name" id="">
                <h4>Number of seeds:</h4>
                <input required pattern="[A-Za-z]" type="text" name="seeds" id="">
                <h4>Number of threads:</h4>
                <input required pattern="[A-Za-z]" type="text" name="threads" id="">
                <h4>Clock:</h4>
                <input required pattern="[A-Za-z]" type="text" name="clock" id="">
                <h4>Turbo clock:</h4>
                <input required pattern="[A-Za-z]" type="text" name="Turbo clock" id="">
                <h4>Size of L3 cache:</h4>
                <input required pattern="[A-Za-z]" type="text" name="l3-cache" id="">
                <h4>Wattage:</h4>
                <input required pattern="[A-Za-z]" type="text" name="TDP" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add CPU</button>
            </form>
            </li>
        </div>
        <!-- Motherboard -->
        <div class="card">
            <li class="flex-item">
            <h3>Add Motherboard:</h3>
            <form action="yo.php" method="POST">
            <h4>Socket:</h4>
                <select required name="Socket">
                    <option value="" selected disabled>Select Socket...</option>
                    <?php
                        $sql = "SELECT * FROM socket";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['Socket']."'>".$row['Socket']."</option>" ;
                        }
                    ?>
                    </select><br>
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
                <h4>Chipset:</h4>
                <select required name="Chipset">
                    <option value="" selected disabled>Select Chipset...</option>
                    <?php
                        $sql = "SELECT * FROM chipset";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['chipset']."'>".$row['chipset']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>M.2 compatibility (0/1):</h4>
                <input required type="number" pattern="[0-9]" min="0" max="1" name="m2_comp" id="">
                <h4>Motherboard name:</h4>
                <input required pattern="[A-Za-z]{16}" type="text" name="m_name" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Motherboard</button>
            </form>
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
                <input required pattern="[A-Za-z]" type="text" name="model" id="">
                <h4>Type</h4>
                <input required pattern="[A-Za-z]" type="text" name="type" id="">
                <h4>RPM:</h4>
                <input required type="number" pattern="[0-9]" min="1" name="rmp" id="">
                <h4>Height:</h4>
                <input required pattern="[A-Za-z]{8}" type="text" name="height" id="">
                <h4>Fan size (in mm):</h4>
                <input required pattern="[A-Za-z]{8}" type="text" name="fan_size" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add CPU cooler</button>
            </form>
            </li>
        </div>
        <!-- RAM -->
        <div class="card">
            <li class="flex-item">
            <h3>Add RAM:</h3>
            <form action="yo.php" method="POST">
                <h4>Socket id:</h4>
                <input required type="number" pattern="[0-9]" min="1" name="socket" id="">
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
                <input required type="number" pattern="[0-9]" min="1" max="8" name="modules" id="">
                <h4>Cas Latency:</h4>
                <input required pattern="[A-Za-z]" type="text" name="cas_Latency" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add RAM</button>
            </form>
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
                <input required pattern="[A-Za-z]" type="text" name="type" id="">
                <h4>GPU name:</h4>
                <input required pattern="[A-Za-z]" type="text" name="g_name" id="">
                <h4>Memory size(GB):</h4>
                <input required pattern="[A-Za-z]" type="text" name="memory_size" id="">
                <h4>Memory type:</h4>
                <input required pattern="[A-Za-z]" type="text" name="memory_type" id="">
                <h4>Core clock(Mhz):</h4>
                <input required pattern="[A-Za-z]" type="text" name="core_clock" id="">
                <h4>Boost clock(Mhz):</h4>
                <input required pattern="[A-Za-z]" type="text" name="boost_clock" id="">
                <h4>Length(mm):</h4>
                <input required pattern="[A-Za-z]" type="text" name="length" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add GPU</button>
            </form>
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
                <input required pattern="[A-Za-z]" type="text" name="s_name" id="">
                <h4>Capacity:</h4>
                <input required pattern="[A-Za-z]" type="text" name="capacity" id="">
                <h4>Read/Write speed:</h4>
                <input required pattern="[A-Za-z]" type="text" name="r_w_speed" id="">
                <h4>M.2 compatibility (0/1):</h4>
                <input required type="number" pattern="[0-9]" min="0" max="1" name="m2_comp" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Storage</button>
            </form>
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
                <input required pattern="[A-Za-z]" type="text" name="case_name" id="">
                <h4>Max length(mm):</h4>
                <input required pattern="[A-Za-z]" type="text" name="max_length" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Case</button>
            </form>
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
                <input required pattern="[A-Za-z]" type="text" name="pw_name" id="">
                <h4>Wattage(W):</h4>
                <input required pattern="[A-Za-z]" type="text" name="wattage" id="">
                <h4>Efficiency_Rating:</h4>
                <input required pattern="[A-Za-z]" type="text" name="efficiency_rating" id="">
                <h4>Modular:</h4>
                <input required pattern="[A-Za-z]" type="text" name="modular" id="">
                <br>
                <button class="button-6" role="button" type="submit">Add Power Supply</button>
            </form>
            </li>
        </div>
        </ul>
    </div>
</body>