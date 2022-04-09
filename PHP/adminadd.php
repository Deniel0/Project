<?php
    require 'includes/db.includes.php';
    /*
    admin.php háttere, itt vannak a funkciók/hibakezelések
    */
    // Manufacturer: Ugyan az a gyártó ne szerepeljen többször az adatbázisban
    if(isset($_POST['man_name'])){
        $manufacturer=$_POST['man_name'];
        $sql = "SELECT * FROM manufacturer WHERE Manufacturer='$manufacturer'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $manufacturer_error="Manufacturer already exist!";
            }else {
                $sql = "INSERT INTO manufacturer (Manufacturer) VALUES ('".$_POST["man_name"] ."')";
                echo "Manufacturer added to the database.";
            }
    }
    // Add Admin
    if(isset($_POST['admin'])){
        $sql = "INSERT INTO admin(user_id,prev) SELECT user_id,1 FROM users WHERE username='".$_POST["admin"]."'";
    }
    // Remove Admin:
    if(isset($_POST['rem_admin'])){
        $sql = "DELETE FROM admin WHERE user_id='".$_POST["rem_admin"]."'";
    }
    // Remove user: (SQL miatt adminból is rögtön törlődik a felhaszáló)
    if(isset($_POST['rem_user'])){
        $sql = "DELETE FROM users WHERE user_id='".$_POST["rem_user"]."'";
    }
    // Chipset: Ugyan az a Chipset ne szerepeljen többször az adatbázisban
    if(isset($_POST['chip_name'])){
        $chipset=$_POST['chip_name'];
        $sql = "SELECT * FROM chipset WHERE chipset='$chipset'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $chipset_error="Chipset already exist!";
            }else {
                $sql = "INSERT INTO chipset(chipset) VALUES ('".$_POST["chip_name"] ."')";
                echo "Chipset added to the database.";
            }
    }
    // RAM type: Ugyan az a típús ne szerepeljen többször az adatbázisban
    if(isset($_POST['ram_type'])){
        $ramtype=$_POST['ram_type'];
        $sql = "SELECT * FROM ram_type WHERE model='$ramtype'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $ramtype_error="RAM type is already exist!";
            }else {
                $sql = "INSERT INTO ram_type(model) VALUES ('".$_POST["ram_type"] ."')";
                echo "RAM type added to the database.";
            }
    }
    // Storage type: Ugyan az a típús ne szerepeljen többször az adatbázisban
    if(isset($_POST['stype_name'])){
        $storagetype=$_POST['stype_name'];
        $sql = "SELECT * FROM storage_type WHERE s_type='$storagetype'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $storagetype_error="Storage type is already exist!";
            }else {
                $sql = "INSERT INTO storage_type(s_type) VALUES ('".$_POST["stype_name"] ."')";
                echo "RAM type added to the database.";
            }
    }
    // Socket: Ugyan az a Socket ne szerepeljen többször az adatbázisban
    if(isset($_POST['Socket'])){
        $socket=$_POST['Socket'];
        $sql = "SELECT * FROM socket WHERE Socket='$socket'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $socket_error="Socket is already exist!";
            }else {
                $sql = "INSERT INTO socket(Socket) VALUES ('".$_POST["Socket"] ."')";
                echo "Socket added to the database.";
            }
    }
    // CPU cooler type: Ugyan az a típús ne szerepeljen többször az adatbázisban
    if(isset($_POST['cooler_id'])){
        $coolertype=$_POST['cooler_id'];
        $sql = "SELECT * FROM cpu_cooler_type WHERE cooler_type='$coolertype'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $coolertype_error="Cooler type is already exist!";
            }else {
                $sql = "INSERT INTO cpu_cooler_type(cooler_type) VALUES ('".$_POST["cooler_id"] ."')";
                echo "Cooler type added to the database.";
            }
    }
    // GPU type: Ugyan az a típús ne szerepeljen többször az adatbázisban
    if(isset($_POST['gpu_type'])){
        $gputype=$_POST['gpu_type'];
        $sql = "SELECT * FROM gpu_type WHERE g_type='$gputype'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $gputype_error="GPU type is already exist!";
            }else {
                $sql = "INSERT INTO gpu_type(g_type) VALUES ('".$_POST["gpu_type"] ."')";
                echo "GPU type added to the database.";
            }
    }
    // GPU mem type: Ugyan az a típús ne szerepeljen többször az adatbázisban
    if(isset($_POST['gpu_mem_type'])){
        $gmemputype=$_POST['gpu_mem_type'];
        $sql = "SELECT * FROM gmemory_type WHERE gmem_type='$gmemputype'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $gmemputype_error="GPU memory type is already exist!";
            }else {
                $sql = "INSERT INTO gmemory_type(gmem_type) VALUES ('".$_POST["gpu_mem_type"] ."')";
                echo "GPU memory type added to the database.";
            }
    }
    // CPU: Ugyan az a nevű (Name/c_name) ne szerepeljen többször az adatbázisban
    if(isset($_POST['Socket'])and isset($_POST['Manufacturer'])and isset($_POST['c_name'])and isset($_POST['seeds'])and isset($_POST['threads'])and isset($_POST['clock'])and isset($_POST['Turbo_clock'])and isset($_POST['l3-cache'])and isset($_POST['TDP'])){
        $cpusocket=$_POST['Socket'];
        $cpuman=$_POST['Manufacturer'];
        $cpuname=$_POST['c_name'];
        $sql = "SELECT * FROM cpu WHERE Socket_id='$cpusocket' AND Manufacturer_id='$cpuman' AND Name='$cpuname'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $cpuname_error="CPU is already exist!";
            }else {
                $sql = "INSERT INTO cpu (Socket_id, Manufacturer_id, Name, Seeds, Threads, Clock, Turbo_clock, L3_cache, TDP) 
                        VALUES ('".$_POST['Socket']. "','".$_POST['Manufacturer']. "','".$_POST['c_name']. "','".$_POST['seeds']. "','".$_POST['threads']. "','".$_POST['clock']. "','".$_POST['Turbo_clock']. "','".$_POST['l3-cache']. "','".$_POST['TDP']. "')";
                echo "CPU added to the database.";
            }
    }
    // Motherboard: Ugyan az a nevű (Name/m_name) ne szerepeljen többször az adatbázisban
    if(isset($_POST['Socket'])and isset($_POST['Manufacturer'])and isset($_POST['Chipset'])and isset($_POST['m2_comp'])and isset($_POST['m_name'])){
        $motherboardname=$_POST['m_name'];
        $sql = "SELECT * FROM motherboard WHERE Name='$motherboardname'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $motherboardname_error="Motherboard is already exist!";
            }else {
                $sql = "INSERT INTO motherboard (Socket_id, Manufacturer_id, chipset_id, m2_comp, Name)
                        VALUES ('".$_POST['Socket']. "','".$_POST['Manufacturer']. "','".$_POST['Chipset']. "','".$_POST['m2_comp']. "','".$_POST['m_name']. "')";
                echo "Motherboard added to the database.";
            }
    }
    // CPU cooler: Ugyan az a nevű (model) ne szerepeljen többször az adatbázisban
    if(isset($_POST['Manufacturer'])and isset($_POST['model'])and isset($_POST['cooler_type'])and isset($_POST['rmp'])){
        $coolermodel=$_POST['model'];
        $sql = "SELECT * FROM cpu_cooler WHERE Model='$coolermodel'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $coolermodel_error="CPU cooler is already exist!";
            }else {
                $sql = "INSERT INTO cpu_cooler(Manufacturer_id, Model, cooler_type_id, RPM)
                        VALUES ('".$_POST['Manufacturer']. "','".$_POST['model']. "','".$_POST['cooler_type']. "','".$_POST['rmp']."')";
                echo "CPU cooler added to the database.";
            }
    }
    // RAM: Ugyan az a ram ne szerpelhessen többször
    if(isset($_POST['Manufacturer'])and isset($_POST['ram_type'])and isset($_POST['capacity'])and isset($_POST['speed'])and isset($_POST['modules'])and isset($_POST['cas_Latency'])){
        $ramman=$_POST['Manufacturer'];
        $ramtype=$_POST['ram_type'];
        $ramcap=$_POST['capacity'];
        $ramspeed=$_POST['speed'];
        $rammodule=$_POST['modules'];
        $ramcas=$_POST['cas_Latency'];
        $sql = "SELECT * FROM ram WHERE Manufacturer_id=$ramman AND ram_type_id=$ramtype AND Capacity=$ramcap AND Speed=$ramspeed AND Modules=$rammodule AND CAS_Latency=$ramcas";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $cpuname_error="RAM is already exist!";
            }else {
                $sql = "INSERT INTO ram(Manufacturer_id, ram_type_id, Capacity, Speed, Modules, CAS_Latency)
                VALUES ('".$_POST['Manufacturer']. "','".$_POST['ram_type']. "','".$_POST['capacity']. "','".$_POST['speed']. "','".$_POST['modules']. "','".$_POST['cas_Latency']. "')";
                echo "RAM added to the database.";
            }
    }
    // GPU: Ugyan az a GPU ne szerpelhessen többször
    if(isset($_POST['Manufacturer'])and isset($_POST['g_type'])and isset($_POST['g_name'])and isset($_POST['memory_size'])and isset($_POST['memory_type'])and isset($_POST['core_clock'])and isset($_POST['boost_clock'])and isset($_POST['Length'])){
        $gpuman=$_POST['Manufacturer'];
        $gputype=$_POST['g_type'];
        $gpuname=$_POST['g_name'];
        $gpumemsize=$_POST['memory_size'];
        $gpuclock=$_POST['core_clock'];
        $gpubclock=$_POST['boost_clock'];
        $sql = "SELECT * FROM gpu WHERE Manufacturer_id='$gpuman' AND Type='$gputype' AND Name='$gpuname' AND Memory_size='$gpumemsize' AND Core_clock='$gpuclock' AND Boost_clock='$gpubclock'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $storagename_error="GPU is already exist!";
            }else {
                $sql = "INSERT INTO gpu(Manufacturer_id, Type, Name, Memory_size, Memory_type, Core_clock, Boost_clock, Length)
                VALUES ('".$_POST['Manufacturer']. "','".$_POST['g_type']. "','".$_POST['g_name']. "','".$_POST['memory_size']. "','".$_POST['memory_type']. "','".$_POST['core_clock']. "','".$_POST['boost_clock']. "','".$_POST['Length']. "')";
                echo "GPU added to the database.";
            }
    }
    // Storage: Ugyan az a Storage ne szerpelhessen többször
    if(isset($_POST['Manufacturer'])and isset($_POST['storage_type'])and isset($_POST['Name'])and isset($_POST['Capacity'])and isset($_POST['R_W_speed'])and isset($_POST['m2_comp'])){
        $storagename=$_POST['Name'];
        $storagetype=$_POST['storage_type'];
        $storagecap=$_POST['Capacity'];
        $sql = "SELECT * FROM storage WHERE Name='$storagename' AND storage_type_id='$storagetype' AND Capacity='$storagecap'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $storagename_error="Storage is already exist!";
            }else {
                $sql = "INSERT INTO storage(Manufacturer_id, storage_type_id, Name, Capacity, R_W_speed, m2_comp)
                VALUES ('".$_POST['Manufacturer']. "','".$_POST['storage_type']. "','".$_POST['Name']. "','".$_POST['Capacity']. "','".$_POST['R_W_speed']. "','".$_POST['m2_comp']. "')";
                echo "Storage added to the database.";
            }
    }
    // Case: Ugyan az a nevű (model) ne szerepeljen többször az adatbázisban
    if(isset($_POST['Manufacturer'])and isset($_POST['case_name'])and isset($_POST['max_length'])){
        $casename=$_POST['case_name'];
        $sql = "SELECT * FROM case_pc WHERE Name='$casename'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $casename_error="Case is already exist!";
            }else {
                $sql = "INSERT INTO case_pc(Manufacturer_id, Name, Max_Length)
                        VALUES ('".$_POST['Manufacturer']. "','".$_POST['case_name']. "','".$_POST['max_length']. "')";
                echo "Case added to the database.";
            }
    }
    // Power Supply: Ugyan oyal (pw_name, wattage) ne szerepeljen többször az adatbázisban
    if(isset($_POST['Manufacturer'])and isset($_POST['pw_name'])and isset($_POST['wattage'])and isset($_POST['Efficiency_Rating'])and isset($_POST['Modular'])){
        $psupplyname=$_POST['pw_name'];
        $psupplywattage=$_POST['wattage'];
        $psupplyeffr=$_POST['Efficiency_Rating'];
        $sql = "SELECT * FROM power_supply WHERE Name='$psupplyname' AND Wattage='$psupplywattage' AND Efficiency_Rating='$psupplyeffr'";
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $psupplyname_error="Power Supply is already exist!";
            }else {
                $sql = "INSERT INTO power_supply(Manufacturer_id, Name, Wattage, Efficiency_Rating, modular_type)
                        VALUES ('".$_POST['Manufacturer']. "','".$_POST['pw_name']. "','".$_POST['wattage']. "','".$_POST['Efficiency_Rating']. "','".$_POST['Modular']. "')";
                echo "Power Supply added to the database.";
            }
    }
    // Connecting to database:
    if (isset($sql)){
        if($conn->query($sql)){
            header("location:admin.php?sikeres=true");
        }else{
            header("location:admin.php?sikeres=false");
        }
    }
?>