<?php
    require 'includes/db.includes.php';
    if(isset($_POST['man_name'])){
        $sql = "INSERT INTO manufacturer (Manufacturer) VALUES ('".$_POST["man_name"] ."')";
    }
    if(isset($_POST['admin'])){
        $sql = "INSERT INTO admin(user_id,prev) SELECT user_id,1 FROM users WHERE username='".$_POST["admin"]."'";
    }
    if(isset($_POST['rem_admin'])){
        $sql = "DELETE FROM admin WHERE user_id='".$_POST["rem_admin"]."'";
    }
    if(isset($_POST['rem_user'])){
        $sql = "DELETE FROM users WHERE user_id='".$_POST["rem_user"]."'";
    }
    if(isset($_POST['chip_name'])){
        $sql = "INSERT INTO chipset(chipset) VALUES ('".$_POST["chip_name"] ."')";
    }
    if(isset($_POST['ram_type'])){
        $sql = "INSERT INTO ram_type(model) VALUES ('".$_POST["ram_type"] ."')";
    }
    if(isset($_POST['stype_name'])){
        $sql = "INSERT INTO storage_type(s_type)  VALUES ('".$_POST["stype_name"] ."')";
    }
    if(isset($_POST['socket'])){
        $sql = "INSERT INTO socket(Socket)  VALUES ('".$_POST["socket"] ."')";
    }
    if(isset($_POST['cooler_id'])){
        $sql = "INSERT INTO cpu_cooler_type(cooler_type) VALUES ('".$_POST["cooler_id"] ."')";
    }
    // COOL
    if(isset($_POST['c_name'])and isset($_POST['seeds']) and isset($_POST['threads']) and isset($_POST['clock']) and isset($_POST['Turbo clock)'] )and isset($_POST['l3-cache)'] )and isset($_POST['TDP'])){
        $sql = "INSERT INTO cpu(Socket_id, Manufacturer_id, Name, Seeds, Threads, Clock, Turbo clock, L3 cache, TDP)
                VALUES ('(SELECT socket_id FROM socket WHERE socket=".$_POST['Socket'].")',' ".$_POST['Manufacturer']."','".$_POST['c_name']."','".$_POST['seeds']."','".$_POST['threads']."','".$_POST['clock']."','".$_POST['Turbo clock']."','".$_POST['l3-cache']."','".$_POST['TDP'].")";
    }
    if(isset($_POST['Socket'],$_POST['Manufacturer'],$_POST['Chipset'],$_POST['m2_comp'],$_POST['m_name'])){
        $sql = "INSERT INTO motherboard(Socket_id, Manufacturer_id, chipset_id, m2_comp, Name)
                VALUES ('".$_POST['Socket']."''".$_POST['Manufacturer']."'".$_POST['Chipset']."'".$_POST['m2_comp']."'".$_POST['m_name'].")";
    }
    if(isset($_POST['Manufacturer'],$_POST['model'],$_POST['type'],$_POST['rmp'])){
        $sql = "INSERT INTO cpu_cooler(Manufacturer_id, Model, cooler_type, RPM)
                VALUES ('".$_POST['Manufacturer']."''".$_POST['model']."'".$_POST['cooler_type']."'".$_POST['rmp'].")";
    }
    if(isset($_POST['socket'],$_POST['Manufacturer'],$_POST['ram_type'],$_POST['capacity'],$_POST['speed'],$_POST['modules'],$_POST['cas_Latency'])){
        $sql = "INSERT INTO ram(Manufacturer_id, ram_type_id, Capacity, Speed, Modules, CAS_Latency)
                VALUES ('".$_POST['socket']."''".$_POST['Manufacturer']."'".$_POST['ram_type']."'".$_POST['capacity']."'".$_POST['speed']."'".$_POST['modules']."'".$_POST['cas_Latency'].")";
    }
    if(isset($_POST['Manufacturer'],$_POST['type'],$_POST['g_name'],$_POST['memory_size'],$_POST['memory_type'],$_POST['core_clock'],$_POST['boost_clock'],$_POST['length'])){
        $sql = "INSERT INTO gpu(Manufacturer_id, Type, Name, Memory_size, Memory_type, Core_clock, Boost_clock, Length)
                VALUES ('".$_POST['Manufacturer']."''".$_POST['type']."'".$_POST['g_name']."'".$_POST['memory_size']."'".$_POST['memory_type']."'".$_POST['core_clock']."'".$_POST['boost_clock']."'".$_POST['length'].")";
    }
    if(isset($_POST['Manufacturer'],$_POST['storage_type'],$_POST['s_name'],$_POST['capacity'],$_POST['r_w_speed'],$_POST['m2_comp'])){
        $sql = "INSERT INTO storage(Manufacturer_id, storage_type_id, Name, Capacity, R_W_speed, m2_comp)
                VALUES ('".$_POST['Manufacturer']."''".$_POST['storage_type']."'".$_POST['s_name']."'".$_POST['capacity']."'".$_POST['r_w_speed']."'".$_POST['m2_comp'].")";
    }
    if(isset($_POST['Manufacturer'],$_POST['case_name'],$_POST['max_length'])){
        $sql = "INSERT INTO case_pc(Manufacturer_id, Name, Max_Length)
                VALUES ('".$_POST['Manufacturer']."''".$_POST['case_name']."'".$_POST['max_length'].")";
    }
    if(isset($_POST['Manufacturer'],$_POST['pw_name'],$_POST['wattage'],$_POST['efficiency_rating'],$_POST['modular'])){
        $sql = "INSERT INTO power_supply(Manufacturer_id, Name, Wattage, Efficiency_Rating, Modular)
                VALUES ('".$_POST['Manufacturer']."''".$_POST['pw_name']."'".$_POST['wattage']."'".$_POST['efficiency_rating']."'".$_POST['modular'].")";
    }
    // conn
    if (isset($sql)){
        $conn->query($sql);
        header("location:admin.php");
    }
?>