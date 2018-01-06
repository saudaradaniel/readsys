<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "reasuransi");
$constraint=$_REQUEST["q"];

$result = $conn->query("SELECT CONCAT(tahun, '_', TRIM(folder), '_', nama_gambar) AS gambar FROM readsyschart ");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	if ($outp != "") {$outp .= ",";}
	$outp .= '{"SelectedChart":"'.$rs["gambar"].'"}';
};

$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>