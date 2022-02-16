<?php
    require 'includes/db.includes.php';
    include_once 'html_header.php';
    
?>
<head>
<link rel="stylesheet" href="picker.css">
</head>
<body>
<?php
    $sql = "SELECT Manufacturer_id, Name, Clock FROM cpu WHERE cpu_id = 1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            //echo $row['Manufacturer_id'] . " " . $row['Name'] .  " " . $row['Clock'] . "<br>";
            $dbselected = $row['cpu'];
        }
    }
    $options = array('Manufacturer_id', 'Name', 'Clock');
    echo "<select>";
    foreach ($options as $option) {
        if ($selected == $option) {
            echo "<option selected='selected' value='$option'>$option</option>";
        }
        else {
            echo "<option value='$option'>$option</option>";
        }
    }
    echo "</select>"
?>
    <div class="wrap">
        <div class="select">
        <label class="select-label">Select CPU:</label>
            <select class="selects" required>
                <option value="" disabled selected></option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
        </div>
    </div>
</body>
<?php
    include_once 'footer.php';
?>