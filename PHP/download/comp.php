<?php
    require '../includes/db.includes.php';
    $sql = "SELECT cpu, motherboard, cpu_cooler, ram, gpu, first_storage, sec_storage, pc_case, power_supply FROM complete_builds WHERE cb_id=".$_GET['buildId'];
    $result = $conn->query($sql);
    $resultCheck = $result->num_rows;
    while ($row = mysqli_fetch_array($result)){
    $txt = "CPU: ".$row["cpu"]."\n"."Motherboard: ".$row["motherboard"]."\n"."CPU cooler: ".$row["cpu_cooler"]."\n"."RAM: ".$row["ram"]."\n"."Video Card: ".$row["gpu"]."\n"."Storage: ".$row["first_storage"]."\n"."2nd Storage: ".$row["sec_storage"]."\n"."Case: ".$row["pc_case"]."\n"."PowerSupply: ".$row["power_supply"]."\n";
    }
    $myfile = fopen("complete_build.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $txt);
    fclose($myfile);
    header("Content-Disposition: attachment; filename=\"" . basename("complete_build.txt") . "\"");
    header("Content-Type: application/force-download");
    header("Content-Length: " . filesize("complete_build.txt"));
    header("Connection: close");
    readfile("complete_build.txt");
?>