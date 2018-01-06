<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "reasuransi");
$constraint=$_REQUEST["q"];

$result = $conn->query("SELECT nama_subrutin FROM readsyssubrutin WHERE $constraint");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	if ($outp != "") {$outp .= ",";}
	$outp .= '{"SelectedTask":"'.$rs["nama_subrutin"].'"}';
};

$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
