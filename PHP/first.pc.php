<?php
    require 'includes/db.includes.php';
    include_once 'html_header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>First Complete build</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<?php
    $sql = "SELECT cpu.Manufacturer_id, manufacturer.Manufacturer, Name, Clock FROM cpu, manufacturer WHERE cpu.Manufacturer_id=manufacturer.Manufacturer_id ORDER BY Name ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Clock']."'>".$row['Manufacturer'] . " " . $row['Name'] .  " " . $row['Clock'];
    }
?>
</body>
</html>
<?php
    include_once 'footer.php';
?>