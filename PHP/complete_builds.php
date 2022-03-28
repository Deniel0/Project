<?php
    require 'includes/db.includes.php';
    include_once 'html_header.php';
?>
<head>
    <!-- Title -->
  <title>Complete Builds</title>
<link rel="stylesheet" href="css/compb.css">
</head>
<body>
<div class="content">
    <ul class="flex-container wrap">
        <?php
            $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply, images FROM complete_builds";
            $result = $conn->query($sql);
            $resultCheck = $result->num_rows;
            $index=1;
            while ($row = mysqli_fetch_array($result)){
        ?>
            <div class="card">
                <li class="flex-item">
                    <div class="image-fit"><img src="<?=$row['images']?>" class="gepek" alt="gamingpc"></div>
                    <span id="dots<?=$index?>">Setup:</span>
                        <span  id="more<?=$index?>" style="display:none">
                            <?php
                                echo "<p id='build".$index."' value='". $row['cpu'] . " " . $row['motherboard'] .  " " . $row['cpu_cooler']." ".$row['ram']." ".$row['gpu']." ".$row['first_storage']." ".$row['sec_storage']." ".$row['pc_case']." ".$row['power_supply']."'>
                                "."Cpu: ".$row['cpu'] . "<br>Motherboard: " . $row['motherboard'] .  "<br>Cpu_cooler: " . $row['cpu_cooler']."<br>RAM: ".$row['ram']."<br>Video Card: ".$row['gpu']."<br>First_storage: ".$row['first_storage']."<br>Second_storage: ".$row['sec_storage']."<br>Case: ".$row['pc_case']."<br>Power Supply: ".$row['power_supply']."</p>";
                            ?>
                        <?php 
                            if(isset($_SESSION['username'])){
                        ?>
                        <img class="qrcode" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $_SERVER['SERVER_NAME']."/daniel/szakdolgozat/download/comp.php?buildId=".$index?>" alt="">
                        </span>
                            <button type="submit" class="startb" name="save" role="button" onclick="WriteToFile('<?=$index;?>')">
                                <a href="download/comp.php?buildId=<?=$index?>" target="_blank"><span class="text"><i class="fa-solid fa-download"></i> Save</span></a>
                            </button>
                        <?php 
                            }
                        ?>
                </li>
                <button onclick="arrow(<?php echo $index++;?>)" id="click"><i class="fa-solid fa-up-down"></i></button>
            </div>
        <?php } ?>
    </ul>
</div>
<script src="JavaScript/show.js"></script>
</body>
<?php
    include_once 'footer.php';
?>