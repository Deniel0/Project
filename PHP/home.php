<?php
    include_once 'db.includes.php';
?>
<h1>Welcome my friend</h1>
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
