<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "reasuransi");
$tahun=$_REQUEST["q"];
//$tahun = date("Y");
//echo "$tahun";
//die;
$result = $conn->query("SELECT parameters, actual FROM readsysstatisticsexperience WHERE group_parameter = 'Five Years Valuation Development' AND tahun =$tahun");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Legend":"'.  $rs["parameters"]. '",';
    $outp .= '"Amount":"'.    $rs["actual"]. '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>

