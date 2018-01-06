<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "reasuransi");
$selectedProcessing = $_REQUEST["q"];
$mtahun = date("Y");
//$queryConstrain = " WHERE tahun = $mtahun AND SUBSTRING(Kodasi,1,4) = SUBSTRING($selectedProcessing,1,4) "; 	
$queryConstrain = " WHERE Year(tgl_proses) = $mtahun"; 	

$result = $conn->query("SELECT `id_jurnal`, `no_jurnal_umum`, `no_billing_akun`, `no_jurnal_sales`, `no_jurnal_purchase`, `no_jurnal_cash`, `no_payment`, `tgl_proses`, `kodasi`, `kd_jurnal`, 
`kd_csl`, `kd_cicil`, `jenis_akun`, `kd_dk`, `posting`, `jenis_jurnal`, `no_jurnal_invoice`, `no_invoice`, `kd_transitory`, `no_voucher`, `descrip`, `no_transaksi`, `kd_produksi`, `no_client`, 
`debet`, `kredit`, `no_tehnik`, `id_mata_uang`, `kd_kob`, `kd_proporsional`, `tgl_entry`, `no_bilyet`, `kd_cashflow` FROM `readsystransactionjournal` $queryConstrain ");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	if ($outp != "") {$outp .= ",";}
	$outp .= '{"Journal":"'.  $rs["id_jurnal"]. '",';
	$outp .= '"Transaction":"'.     $rs["no_transaksi"]. '",';
	$outp .= '"ProcessingDate":"'.     $rs["tgl_proses"]. '",';
	$outp .= '"Ccy":"'.     $rs["id_mata_uang"]. '",';
	$outp .= '"Debit":"'.     $rs["debet"]. '",';
	$outp .= '"Credit":"'.    $rs["kredit"]. '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);

?>