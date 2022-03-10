<?php
    if(isset($_POST['save'])){
        $myfile = fopen("complete_build.txt", "w") or die("Unable to open file!");
        $txt = "Cpu: ".$_POST['first'];
        fwrite($myfile, $txt);
        fclose($myfile);
        header("Content-Disposition: attachment; filename=\"" . basename("complete_build.txt") . "\"");
        header("Content-Type: application/force-download");
        header("Content-Length: " . filesize("complete_build.txt"));
        header("Connection: close");
        readfile("complete_build.txt");
    }
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
                <form action="" method="post">
                    <?php
                        $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=1";
                        $result = $conn->query($sql);
                        $resultCheck = $result->num_rows;
                        while ($row = mysqli_fetch_array($result)){
                            //echo "<p value=''></p>";
                            echo "<p value='". $row['cpu'] . " " . $row['motherboard'] .  " " . $row['cpu_cooler']." ".$row['ram']." ".$row['gpu']." ".$row['first_storage']." ".$row['sec_storage']." ".$row['pc_case']." ".$row['power_supply']."'>
                            "."Cpu:".$row['cpu'] . "Motherboard: " . $row['motherboard'] .  "Cpu_cooler: " . $row['cpu_cooler']."RAM: ".$row['ram']."Video Card: ".$row['gpu']."First_storage: ".$row['first_storage']."Second_storage: ".$row['sec_storage']."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply']."</p>";
                        }
                    ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
                </form>
            </li>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=2";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/gamingpc.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=3";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=4";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/gamingpc.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=5";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=6";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/gamingpc.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=7";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=8";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/gamingpc.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=9";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=10";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
        <div class="card">
            <form class="form">
                <li class="flex-item">
                    <img src="images/gamingpc.png" alt="gamingpc">
                    <?php
                        $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=11";
                        $result = $conn->query($sql);
                        $resultCheck = $result->num_rows;
                        while ($row = mysqli_fetch_array($result)){
                            echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                        }
                    ?>
                    <button type="submit" class="startb" name="save" role="button">
                        <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                    </button>
                </li>
            </form>
        </div>
        <div class="card">
            <li class="flex-item">
                <img src="images/spirit.png" alt="gamingpc">
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=12";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
                <button type="submit" class="startb" name="save" role="button">
                    <span class="text"><i class="fa-solid fa-download"></i> Save</span>
                </button>
            </li>
        </div>
    </ul>
</div>
</body>
<?php
    include_once 'footer.php';
?>