<?php
    require 'includes/db.includes.php';
    require 'adminadd.php';
    require 'html_header.php';
?>
<!-- Admin interface: Add admin | Delete admin/user | Add parts and part types to database -->
    <div class="content">
        <div class="flex-container wrap">
        <!-- Admin/User -->
        <div class="card">
            <div class="flex-item">
            <form method="POST">
            <h4>Add admin privilege to user:</h4>
            <select required name="admin">
                    <option selected disabled>Users</option>
                    <?php
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['username']."'>".$row['username']."</option>" ;
                        }
                    ?>
            </select><br>
                <br>
                <button class="button-6" type="submit">Add Admin</button>
            </form>
            <form method="POST">
            <h4>Remove admin privilege:</h4>
            <select required name="rem_admin">
                <option selected disabled>Admins</option>
                    <?php
                        $sql = "SELECT admin.user_id, users.username FROM admin, users WHERE admin.user_id=users.user_id ORDER BY username ASC";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['user_id']."'>".$row['username']."</option>";
                        }
                    ?>
                    </select><br>
                <br>
                <button class="button-6" type="submit">Remove Admin</button>
            </form>
            <form method="POST">
            <h4>Remove user:</h4>
            <select required name="rem_user">
                    <option selected disabled>Users</option>
                    <?php
                        $sql = $sql = "SELECT * FROM users ORDER BY username ASC";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['user_id']."'>".$row['username']."</option>" ;
                        }
                    ?>
                    </select><br>
                <br>
                <button class="button-6" type="submit">Remove User</button>
            </form>
            </div>
        </div>
        <!-- 1st -->
        <div class="card">
            <div class="flex-item">
                <form method="POST">
                    <h4>Manufacturer:</h4>
                        <input required pattern="[A-Za-z]{1,32}" placeholder="Asus" type="text" name="man_name">
                    <br>
                    <button class="button-6" type="submit">Add Manufacturer</button>
                </form>
                <form method="POST">
                    <h4>Chipset:</h4>
                        <input required pattern="[A-Za-z0-9]{1,12}" placeholder="Z590" type="text" name="chip_name">
                    <br>
                    <button class="button-6" type="submit">Add Chipset</button>
                </form>
                <form method="POST">
                    <h4>Ram type:</h4>
                        <input required pattern="[A-Za-z0-9 ]{1,12}" placeholder="DDR4" type="text" name="ram_type">
                    <br>
                    <button class="button-6" type="submit">Add Ram type</button>
                </form>
                <form method="POST">
                    <h4>Storage type:</h4>
                        <input required pattern="[A-Za-z0-9 ]{1,12}" placeholder="SSD" type="text" name="stype_name">
                    <br>
                    <button class="button-6" type="submit">Add Storage type</button>
                </form>
            </div>
        </div>
        <!-- 2nd -->
        <div class="card">
            <div class="flex-item">
            <form method="POST">
                <h4>Socket:</h4>
                    <input required type="text" placeholder="1151" name="Socket">
                <br>
                <button class="button-6" type="submit">Add Socket</button>
            </form>
            <form method="POST">
                <h4>Cooler Type:</h4>
                    <input required type="text" placeholder="Air" name="cooler_id">
                <br>
                <button class="button-6" type="submit">Add Cooler Type</button>
            </form>
            <form method="POST">
                <h4>GPU Type:</h4>
                    <input required type="text" placeholder="GeForce GTX" name="gpu_type">
                <br>
                <button class="button-6" type="submit">Add GPU Type</button>
            </form>
            <form method="POST">
                <h4>GPU Memory Type:</h4>
                    <input required type="text" placeholder="GDDR5" name="gpu_mem_type">
                <br>
                <button class="button-6" type="submit">Add GPU Memory Type</button>
            </form>
            </div>
        </div>
        <!-- CPU -->
        <div class="card">
            <div class="flex-item">
            <h3>Add CPU:</h3>
            <form method="POST">
                <h4>Socket:</h4>
                    <select required name="Socket">
                    <option selected disabled>Select Socket</option>
                    <?php
                        $sql = "SELECT * FROM socket";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['Socket_id']."'>".$row['Socket']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>Manufacturer:</h4>
                    <select required name="Manufacturer">
                    <option selected disabled>Select Manufacturer</option>
                    <?php
                        $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['Manufacturer_id']."'>".$row['Manufacturer']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>Cpu name:</h4>
                    <input required placeholder="I7-11700K" pattern="[a-zA-Z0-9\-]" type="text" name="c_name">
                <h4>Number of seeds:</h4>
                    <input required placeholder="4" type="number" min="1" max="256" name="seeds">
                <h4>Number of threads:</h4>
                    <input required placeholder="5" type="number" min="1" max="512" name="threads">
                <h4>Clock:</h4>
                    <input required placeholder="4.1 GHz" pattern="[a-zA-Z0-9 \.]" name="clock">
                <h4>Turbo clock:</h4>
                    <input required placeholder="5.1 GHz" pattern="[a-zA-Z0-9 \.]" name="Turbo_clock">
                <h4>Size of L3 cache:</h4>
                    <input required pattern="[A-Za-z0-9 ]{1,12}" placeholder="64 MB" type="text" name="l3-cache">
                <h4>Wattage:</h4>
                    <input required pattern="[A-Za-z0-9 ]{1,12}" placeholder="110 W" type="text" name="TDP">
                <br>
                <button class="button-6" type="submit">Add CPU</button>
            </form>
            </div>
        </div>
        <!-- Motherboard -->
        <div class="card">
            <div class="flex-item">
            <h3>Add Motherboard:</h3>
            <form method="POST">
            <h4>Socket:</h4>
                <select required name="Socket">
                    <option selected disabled>Select Socket</option>
                    <?php
                        $sql = "SELECT * FROM socket";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['Socket_id']."'>".$row['Socket']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>Manufacturer:</h4>
                <select required name="Manufacturer">
                <option selected disabled>Select Manufacturer</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer_id']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Chipset:</h4>
                <select required name="Chipset">
                    <option selected disabled>Select Chipset</option>
                    <?php
                        $sql = "SELECT * FROM chipset";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['chipset_id']."'>".$row['chipset']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>M.2 compatibility (0/1):</h4>
                    <input required type="number" placeholder="0" min="0" max="1" name="m2_comp">
                <h4>Motherboard name:</h4>
                    <input required pattern="[A-Za-z0-9 ]{1,12}{16}" placeholder="ROG MAXIMUS Z690" type="text" name="m_name">
                <br>
                <button class="button-6" type="submit">Add Motherboard</button>
            </form>
            </div>
        </div>
        <!-- CPU cooler -->
        <div class="card">
            <div class="flex-item">
            <h3>Add CPU cooler:</h3>
            <form method="POST">
                <h4>Manufacturer:</h4>
                <select required name="Manufacturer">
                <option selected disabled>Select Manufacturer</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer_id']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Name:</h4>
                    <input required type="text" placeholder="Dark Rock Pro 4" name="model">
                <h4>Cooler Type:</h4>
                    <select required name="cooler_type">
                    <option selected disabled>Select Cooler Type</option>
                    <?php
                        $sql = "SELECT * FROM `cpu_cooler_type`";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['cpu_cooler_type_id']."'>".$row['cooler_type']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>RPM:</h4>
                    <input required type="number" min="1" max="5000" placeholder="2000" name="rmp">
                <br>
                <button class="button-6" type="submit">Add CPU cooler</button>
            </form>
            </div>
        </div>
        <!-- RAM -->
        <div class="card">
            <div class="flex-item">
            <h3>Add RAM:</h3>
            <form method="POST">
                <h4>Manufacturer:</h4>
                <select required name="Manufacturer">
                <option selected disabled>Select Manufacturer</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer_id']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Ram type:</h4>
                <select required name="ram_type">
                    <option selected disabled>Select Ram type</option>
                    <?php
                        $sql = "SELECT * FROM `ram_type`";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['ram_type_id']."'>".$row['model']."</option>" ;
                        }
                    ?>
                </select><br>
                <h4>Capacity (GB):</h4>
                    <input required pattern="[A-Za-z0-9 ]{1,12}{5}" placeholder="16 GB" type="text" name="capacity">
                <h4>Speed (Mhz):</h4>
                    <input required pattern="[A-Za-z0-9 ]{1,12}{7}" placeholder="2133 MHz" type="text" name="speed">
                <h4>Modules:</h4>
                    <input required type="number" min="1" max="8" placeholder="4" name="modules">
                <h4>Cas Latency:</h4>
                    <input required pattern="[0-9]{1,12}" type="text" placeholder="16" name="cas_Latency">
                <br>
                <button class="button-6" type="submit">Add RAM</button>
            </form>
            </div>
        </div>
        <!-- GPU -->
        <div class="card">
            <div class="flex-item">
            <h3>Add GPU:</h3>
            <form method="POST">
                <h4>Manufacturer:</h4>
                <select required name="Manufacturer">
                <option selected disabled>Select Manufacturer</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer_id']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>GPU Type:</h4>
                <select required name="g_type">
                <option selected disabled>Select GPU type</option>
                <?php
                    $sql = "SELECT * FROM gpu_type";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['gpu_type_id']."'>".$row['g_type']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>GPU name:</h4>
                    <input required type="text" placeholder="3080Ti" name="g_name">
                <h4>Memory size(GB):</h4>
                    <input required type="text" placeholder="8GB" name="memory_size">
                <h4>Memory type:</h4>
                <select required name="memory_type">
                <option selected disabled>Select Memory type</option>
                <?php
                    $sql = "SELECT * FROM gmemory_type";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['memory_type_id']."'>".$row['gmem_type']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Core clock(Mhz):</h4>
                    <input required type="text" placeholder="1755 MHz" name="core_clock">
                <h4>Boost clock(Mhz):</h4>
                    <input required type="text" placeholder="1955 MHz" name="boost_clock">
                <h4>Length(mm):</h4>
                    <input required type="number" placeholder="275" min="100" max="500" name="Length">
                <br>
                <button class="button-6" type="submit">Add GPU</button>
            </form>
            </div>
        </div>
        <!-- Storage -->
        <div class="card">
            <div class="flex-item">
            <h3>Add Storage:</h3>
            <form method="POST">
                <h4>Manufacturer:</h4>
                <select required name="Manufacturer">
                <option selected disabled>Select Manufacturer</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer_id']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Storage type:</h4>
                <select required name="storage_type">
                    <option selected disabled>Select Storage type</option>
                    <?php
                        $sql = "SELECT * FROM `storage_type`";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['storage_type_id']."'>".$row['s_type']."</option>" ;
                        }
                    ?>
                    </select><br>
                <h4>Storage name:</h4>
                    <input required type="text" placeholder="980 Pro" name="Name">
                <h4>Capacity:</h4>
                    <input required type="text" placeholder="1 TB" name="Capacity">
                <h4>Read/Write speed:</h4>
                    <input required type="text" placeholder="550/500 MB/s" name="R_W_speed">
                <h4>M.2 compatibility (0/1):</h4>
                    <input required type="number" placeholder="1" min="0" max="1" name="m2_comp">
                <br>
                <button class="button-6" type="submit">Add Storage</button>
            </form>
            </div>
        </div>
        <!-- Case -->
        <div class="card">
            <div class="flex-item">
            <h3>Add Case:</h3>
            <form method="POST">
                <h4>Manufacturer:</h4>
                <select required name="Manufacturer">
                <option selected disabled>Select Manufacturer</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer_id']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Case name:</h4>
                    <input required type="text" placeholder="Silent Base 800" name="case_name">
                <h4>Max length(mm):</h4>
                    <input required type="text"  placeholder="420" name="max_length">
                <br>
                <button class="button-6" type="submit">Add Case</button>
            </form>
            </div>
        </div>
        <!-- Power Supply -->
        <div class="card">
            <div class="flex-item">
            <h3>Add Power Supply:</h3>
            <form method="POST">
                <h4>Manufacturer:</h4>
                <select required name="Manufacturer">
                <option selected disabled>Select Manufacturer</option>
                <?php
                    $sql = "SELECT * FROM manufacturer ORDER BY manufacturer.Manufacturer ASC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['Manufacturer_id']."'>".$row['Manufacturer']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Power Supply name:</h4>
                    <input required type="text" placeholder="Dark Power 12" name="pw_name">
                <h4>Wattage(W):</h4>
                    <input required type="text" placeholder="1250 W" name="wattage">
                <h4>Efficiency Rating:</h4>
                <select required name="Efficiency_Rating">
                <option selected disabled>Select Efficiency Rating</option>
                <?php
                    $sql = "SELECT * FROM efficiency_type";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['efficiency_type_id']."'>".$row['efficiency_type']."</option>" ;
                    }
                ?>
                </select><br>
                <h4>Modular:</h4>
                <select required name="Modular">
                <option selected disabled>Select Modularity</option>
                <?php
                    $sql = "SELECT * FROM pw_modular_type";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['pw_modular_type_id']."'>".$row['pw_modular_type']."</option>" ;
                    }
                ?>
                </select><br>
                <br>
                <button class="button-6" type="submit">Add Power Supply</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</body>