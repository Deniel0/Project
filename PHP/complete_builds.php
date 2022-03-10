<?php
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
                <?php
                    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=1";
                    $result = $conn->query($sql);
                    $resultCheck = $result->num_rows;
                    while ($row = mysqli_fetch_array($result)){
                        echo "Cpu: ".$row['cpu']."<br>"."Motherboard: ".$row['motherboard']."<br>"."Cpu cooler: ".$row['cpu_cooler']."<br>"."Ram: ".$row['ram']."<br>"."Video Card: ".$row['gpu']."<br>"."1st Storage: ".$row['first_storage']."<br>"."2nd Storage: ".$row['sec_storage']."<br>"."Case: ".$row['pc_case']."Power Supply: ".$row['power_supply'];
                    }
                ?>
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
            </li>
        </div>
        <div class="card">
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
            </li>
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
            </li>
        </div>
    </ul>
</div>
</body>
<?php
    include_once 'footer.php';
?>