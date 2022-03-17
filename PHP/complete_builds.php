<?php
    // if(isset($_POST['save'])){
    //     $myfile = fopen("complete_build.txt", "w") or die("Unable to open file!");
    //     $txt = "Cpu: ".$_POST['first'];
    //     fwrite($myfile, $txt);
    //     fclose($myfile);
    //     header("Content-Disposition: attachment; filename=\"" . basename("complete_build.txt") . "\"");
    //     header("Content-Type: application/force-download");
    //     header("Content-Length: " . filesize("complete_build.txt"));
    //     header("Connection: close");
    //     readfile("complete_build.txt");
    // }
    require 'includes/db.includes.php';
    include_once 'html_header.php';
?>
<head>
<link rel="stylesheet" href="css/compb.css">
</head>
<body>
<div class="content">
    <ul class="flex-container wrap">
        <div class="card">
            <li class="flex-item">
                <img src="images/gamingpc.png" alt="gamingpc">
                <span id="dots1">First Setup: Weak</span>
                    <span  id="more1">
                        <?php
                            $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=1";
                            $result = $conn->query($sql);
                            $resultCheck = $result->num_rows;
                            while ($row = mysqli_fetch_array($result)){
                                echo "<p value='". $row['cpu'] . " " . $row['motherboard'] .  " " . $row['cpu_cooler']." ".$row['ram']." ".$row['gpu']." ".$row['first_storage']." ".$row['sec_storage']." ".$row['pc_case']." ".$row['power_supply']."'>
                                "."Cpu: ".$row['cpu'] . "<br>Motherboard: " . $row['motherboard'] .  "<br>Cpu_cooler: " . $row['cpu_cooler']."<br>RAM: ".$row['ram']."<br>Video Card: ".$row['gpu']."<br>First_storage: ".$row['first_storage']."<br>Second_storage: ".$row['sec_storage']."<br>Case: ".$row['pc_case']."<br>Power Supply: ".$row['power_supply']."</p>";
                            }
                        ?>
                    </span>
                    <?php 
                        if(isset($_SESSION['username'])){
                    ?>
                        <button type="submit" class="startb" name="save" role="button">
                            <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                        </button>
                    <?php 
                        }
                    ?>
            </li>
            <button onclick="arrow1()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <span id="dots2">Second Setup: Weak</span>
                <span  id="more2">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=2";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
                ?>
                    <button type="submit" class="startb" name="save" role="button">
                        <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                    </button>
                    <?php 
                        }
                    ?>
            </li>
            <button onclick="arrow2()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/gamingpc.png" alt="gamingpc">
                <span id="dots3">Third: Weak</span>
                <span  id="more3">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=3";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
                ?>
                    <button type="submit" class="startb" name="save" role="button">
                        <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                    </button>
                <?php 
                    }
                ?>
            </li>
            <button onclick="arrow3()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <span id="dots4">Forth: Weak</span>
                <span  id="more4">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=4";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
                ?>
                    <button type="submit" class="startb" name="save" role="button">
                        <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                    </button>
                <?php 
                    }
                ?>
            </li>
            <button onclick="arrow4()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/gamingpc.png" alt="gamingpc">
                <span id="dots5">Fifth: Weak</span>
                <span  id="more5">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=5";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
        ?>
        <button type="submit" class="startb" name="save" role="button">
            <span class="text"><i class="fa-solid fa-download"></i> Save</span>
        </button>

<?php 
    }
?>
            </li>
            <button onclick="arrow5()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <span id="dots6">Sixth: Weak</span>
                <span  id="more6">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=6";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
        ?>
        <button type="submit" class="startb" name="save" role="button">
            <span class="text"><i class="fa-solid fa-download"></i> Save</span>
        </button>

<?php 
    }
?>
            </li>
            <button onclick="arrow6()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/gamingpc.png" alt="gamingpc">
                <span id="dots7">Seventh Setup: Weak</span>
                <span  id="more7">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=7";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
                ?>
                    <button type="submit" class="startb" name="save" role="button">
                        <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                    </button>
                <?php 
                    }
                ?>
            </li>
            <button onclick="arrow7()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <span id="dots8">Eight Setup: Weak</span>
                <span  id="more8">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=8";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
                ?>
                    <button type="submit" class="startb" name="save" role="button">
                        <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                    </button>
                <?php 
                    }
                ?>
            </li>
            <button onclick="arrow8()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/gamingpc.png" alt="gamingpc">
                <span id="dots9">Ninth Setup: Weak</span>
                <span  id="more9">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=9";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
                ?>
                    <button type="submit" class="startb" name="save" role="button">
                        <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                    </button>
                <?php
                    }
                ?>
            </li>
            <button onclick="arrow9()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <span id="dots10">Tenth Setup: Weak</span>
                <span  id="more10">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=10";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
                ?>
                    <button type="submit" class="startb" name="save" role="button">
                        <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                    </button>
                <?php 
                    }
                ?>
            </li>
            <button onclick="arrow10()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
                <li class="flex-item">
                    <img src="images/gamingpc.png" alt="gamingpc">
                    <span id="dots11">Eleventh Setup: Weak</span>
                    <span  id="more11">
                    <?php
                        $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=11";
                        $result = $conn->query($sql);
                        $resultCheck = $result->num_rows;
                        while ($row = mysqli_fetch_array($result)){
                            echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                        }
                    ?>
                    </span>
                    <?php 
                    if(isset($_SESSION['username'])){
                    ?>
                        <button type="submit" class="startb" name="save" role="button">
                            <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                        </button>
                    <?php 
                        }
                    ?>
                </li>
                <button onclick="arrow11()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <span id="dots12">Twelfth Setup: Weak</span>
                <span  id="more12">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=12";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                </span>
                <?php 
                    if(isset($_SESSION['username'])){
                ?>
                    <button type="submit" class="startb" name="save" role="button">
                        <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                    </button>
                <?php 
                    }
                ?>
            </li>
            <button onclick="arrow12()" id="click"><i class="fa-solid fa-up-down"></i></button>
        </div>
    </ul>
</div>
<script src="JavaScript/show.js"></script>
</body>
<?php
    include_once 'footer.php';
?>