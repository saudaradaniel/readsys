<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$constrain="ReadsysUserList WHERE kd_divisi = 1";
$conn = new mysqli("localhost", "root", "", "reasuransi");
$constrain=$_REQUEST["q"];
$swiching=substr($constrain,0,15);
$constrain=substr($constrain,15);
switch ($swiching) {
	case "ReadsysUserList":
		$result = $conn->query("SELECT `User_name`, `Full_name`, `child`, `parent`, `nama_depan`, `nama_belakang`, `gelar`, `panggilan`, `sex`, `pangkat`, `fungsi_akseptasi`, 
		`fungsi_underwriting`, `fungsi_pla`, `fungsi_dla`, `fungsi_reserving`, `fungsi_ar_ap`, `snn`, `tgl_mulai_kerja`, `kota`, `propinsi`, `negara`, `kd_user`, `password`, 
		`kd_divisi`, `no_extension`, `homephone`, `handphone1`, `handphone2`, `email`, `tgl_lahir`, `tpt_lahir`, `alamat`, `inisial`, `edoc_path`, `kd_departemen`, `kd_jabatan`, 
		`reportto`, `dutie`, `min_limit_acceptation`, `max_limit_acceptation`, `marital_status`, `zip`, `status_user`, `nomor_urut`, `fungsi_aktuaria` 
		FROM `readsysusers` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Name":"'. $rs["User_name"].'",';
			//$outp .= '"LastName"'. $rs["nama_belakang"].'",';
			$outp .= '"Identity":"'.$rs["nomor_urut"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break;
		
	default:
		echo "Not part of allowable access!";
};
?>
