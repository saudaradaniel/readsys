<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$constrain="";
$conn = new mysqli("localhost", "root", "", "reasuransi");
$constrain=$_REQUEST["q"];

$result = $conn->query("SELECT `ceding`,`no_client` FROM `readsyscustomer` ORDER BY `ceding`");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	if ($outp != "") {$outp .= ",";}
	$outp .= '{"Customer":"'. $rs["ceding"].'",';
	$outp .= '"Code":"'.$rs["no_client"].'"}';
};
		
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);

?>
