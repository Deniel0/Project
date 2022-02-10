<?php
    include_once 'db.includes.php';
    include_once 'html_header.php';
?>
<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['username'] . "<br>";
        }
    }
?>
<?php
    include_once 'footer.php';
?>