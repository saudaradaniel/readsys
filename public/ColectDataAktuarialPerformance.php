<?php
	header("Content-Type: application/json; charset=UTF-8");
		$obj = json_decode($_GET["x"], false);
	$conn = new mysqli("localhost", "root", "", "reasuransi");
	$result = $conn->query("SELECT nomor_urut, tahun, periode, exposure FROM ".$obj->table." LIMIT ".$obj->limit);
	$outp = array();
    $outp = $result->fetch_all(MYSQLI_ASSOC);
	$obj = json_encode($outp);
    echo json_encode($outp);
?>