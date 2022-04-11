<?php
    include "includes/db.includes.php";
    if(isset($_POST['action']) and $_POST['action'] == 'cpu'){
        $motherboards=array();
        $sql="SELECT Socket_id FROM cpu WHERE cpu_id=".$_POST['c_id'] ;
        if ($result=$conn->query($sql)){
            if($result->num_rows>0){
                $row=$result->fetch_assoc();
                $sql="SELECT motherboard.Manufacturer_id, manufacturer.Manufacturer, Name,motherboard.motherboard_id FROM motherboard, manufacturer WHERE motherboard.Manufacturer_id=manufacturer.Manufacturer_id AND motherboard.Socket_id=".$row['Socket_id'];
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                     $motherboards[]=array(
                         "name"=>$row['Manufacturer'] . " " . $row['Name'],
                         "id"=>$row['motherboard_id'],
                        );
                }
            }
            echo json_encode($motherboards);
            exit();
        }else{
            echo $conn->error;
        }
    }
    if(isset($_POST['action']) and $_POST['action'] == 'Motherboard'){
        $storages=array();
        $sql="SELECT m2_comp FROM motherboard WHERE motherboard_id=".$_POST['m_id'] ;
        if ($result=$conn->query($sql)){
            if($result->num_rows>0){
                $row=$result->fetch_assoc();
                $sql="SELECT storage.Manufacturer_id, manufacturer.Manufacturer, storage.storage_type_id, storage_type.s_type, Name, Capacity, R_W_speed FROM storage, manufacturer, storage_type WHERE storage.Manufacturer_id=manufacturer.Manufacturer_id AND storage.storage_type_id=storage_type.storage_type_id AND m2_comp in (0 ".($row['m2_comp']==1 ? ", 1" : "").") ORDER BY manufacturer.Manufacturer ASC";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                     $storages[]=$row['Manufacturer'] . " " . $row['s_type'] .  " " . $row['Name'] . " " . $row['Capacity'] . " " . $row['R_W_speed'];
                }
            }
            echo json_encode($storages);
            exit();
        }else{
            echo $conn->error;
        }
    }
    if(isset($_POST['action']) and $_POST['action'] == 'gpu'){
        $case=array();
        $sql="SELECT Length FROM gpu WHERE gpu_id=".$_POST['g_id'];
        if ($result=$conn->query($sql)){
            if($result->num_rows>0){
                $row=$result->fetch_assoc();
                $sql = "SELECT case_pc.Manufacturer_id, manufacturer.Manufacturer, Name, Max_Length FROM case_pc, manufacturer WHERE case_pc.Manufacturer_id=manufacturer.Manufacturer_id AND Max_Length>".$row['Length']." ORDER BY manufacturer.Manufacturer ASC";
                $result=$conn->query($sql);
                echo $conn->error;
                while($row=$result->fetch_assoc()){
                     $case[]=$row['Manufacturer'] . " " . $row['Name'];
                }
            }
            echo json_encode($case);
            exit();
        }else{
            echo $conn->error;
        }
    }
?>