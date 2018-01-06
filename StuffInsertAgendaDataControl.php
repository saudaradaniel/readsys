<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$bowner=$bdate=$btime=$bplace=$broom=$bstatus="";
$conn = mysqli_connect("localhost", "root", "", "reasuransi");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
};
if (isset($_POST["bowner"]) && !empty($_POST["bowner"])) {
    $bowner = mysql_real_escape_string($conn, $_REQUEST['bowner']);    
}else{  
    echo "N0, owner is not set";
};
if (isset($_POST["bdate"]) && !empty($_POST["bdate"])) {
    $bdate = mysql_real_escape_string($conn, $_REQUEST['bdate']);   
}else{  
    echo "N0, date is not set";
};
if (isset($_POST["btime"]) && !empty($_POST["btime"])) {
    $btime = mysql_real_escape_string($conn, $_REQUEST['btime']);    
}else{  
    echo "N0, time is not set";
};
if (isset($_POST["bplace"]) && !empty($_POST["bplace"])) {
    $bplace = mysql_real_escape_string($conn, $_REQUEST['bplace']);   
}else{  
    echo "N0, plac is not set";
};
if (isset($_POST["broom"]) && !empty($_POST["broom"])) {
    $broom = mysql_real_escape_string($conn, $_REQUEST['broom']);   
}else{  
    echo "N0, room is not set";
};
if (isset($_POST["bstatus"]) && !empty($_POST["bstatus"])) {
    $bstatus = mysql_real_escape_string($conn, $_REQUEST['bstatus']);    
}else{  
    echo "N0, status is not set";
};
$sql = "INSERT INTO `readsysagenda`(`WAKTU`, `TEMPAT`, `NAMA`, `TGL_AGENDA`, `status_agenda`, `KdMeetingRoom`) VALUES ('$btime', '$bplace', '$bowner', '$bdate', '$bstatus', '$broom')";
if(mysqli_query($conn, $sql)){
	echo "Records added successfully.";
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
};
mysqli_close($conn);
?>