<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//$obj = json_decode($_POST["x"], false);
$conn = new mysqli("localhost", "root", "", "reasuransi");
$result = $conn->query("SELECT nomor_urut, tahun, periode, exposure, bulan FROM readsysstatisticsexperience WHERE tahun=2017 Order By bulan");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"No":"'  . $rs["nomor_urut"] . '",';
    $outp .= '"Year":"' . $rs["tahun"] . '",';
	$outp .= '"Value":"' . $rs["exposure"] . '",';
    $outp .= '"Period":"'. $rs["periode"] . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);



	/*$result = $conn->query(""".$obj->sqlKuery." "".$obj->table." ".$obj->limit." ".$obj->order);
	

	$outp = array();
    $outp = $result->fetch_all(MYSQLI_ASSOC);
	$obj = json_encode($outp);
    echo json_encode($outp);*/
?>


