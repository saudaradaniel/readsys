<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$constrain="TotalBillingRow WHERE (`readsyswarehousetransaksipremi`.`billing_no` =1) AND (`readsyswarehousetransaksipremi`.`type_of_transaction` = 'ClaimTransactio')";
$conn = new mysqli("localhost", "root", "", "reasuransi");
$constrain=$_REQUEST["q"];
$swiching=substr($constrain,0,15);
$constrain=substr($constrain,15);

switch ($swiching) {
	case "BillingTransact":
		$result = $conn->query("SELECT `readsysdetailcessieidentityingeneral`.`reas_no`, CONCAT(`detail_objinsured_name`, ' ', `detail_objinsured_backname`) nama,  CONCAT(`ins_period_from`, ' To ', `ins_period_to`) periode, 
		`total_sum_insured_org`, SUM(`readsyswarehousetransaksipremi`.`premium`) AS transaksi, `readsyswarehousetransaksipremi`.`id_mata_uang` 
		FROM `readsysdetailcessieidentityingeneral` 
		INNER JOIN `readsysmastercoverage` ON `readsysmastercoverage`.`reas_no` = `readsysdetailcessieidentityingeneral`.`reas_no`
		INNER JOIN `readsyswarehousetransaksipremi` ON `readsyswarehousetransaksipremi`.`coverage_ced_code`=`readsysmastercoverage`.`coverage_ced_code`  $constrain 
		GROUP BY `readsysdetailcessieidentityingeneral`.`reas_no`, CONCAT(`detail_objinsured_name`, ' ', `detail_objinsured_backname`),  CONCAT(`ins_period_from`, ' To ', `ins_period_to`), `total_sum_insured_org`");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"ReinsuranceNumber":"'. $rs["reas_no"].'",';
			$outp .= '"Currency":"'.$rs["id_mata_uang"].'",'; 
			$outp .= '"InsuredName":"'.$rs["nama"].'",'; 
			$outp .= '"ReinsurancePeriod":"'.$rs["periode"].'",'; 
			$outp .= '"SumInsured":"'.$rs["total_sum_insured_org"].'",'; 
			$outp .= '"TransactionAmount":"'.$rs["transaksi"].'"}';
		};
		break;
	case "TotalBillingRow":
		$result = $conn->query("SELECT `readsyswarehousetransaksipremi`.`id_mata_uang`, SUM(`readsysdetailcessieidentityingeneral`.`total_sum_insured_org`) AS totalSumInsured, SUM(`readsyswarehousetransaksipremi`.`premium`) AS totalTransaksi 
		FROM `readsysdetailcessieidentityingeneral` 
		INNER JOIN `readsysmastercoverage` ON `readsysmastercoverage`.`reas_no` = `readsysdetailcessieidentityingeneral`.`reas_no`
		INNER JOIN `readsyswarehousetransaksipremi` ON `readsyswarehousetransaksipremi`.`coverage_ced_code`=`readsysmastercoverage`.`coverage_ced_code` $constrain 
		GROUP BY `readsyswarehousetransaksipremi`.`id_mata_uang`");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Currency":"'. $rs["id_mata_uang"].'",';
			$outp .= '"TotalSumInsured":"'.$rs["totalSumInsured"].'",'; 
			$outp .= '"TotalTransactionAmount":"'.$rs["totalTransaksi"].'"}';
		};
		break;
	case "Years5Customer1":
		$result = $conn->query("SELECT no_client, billing_no, customer, Saldo_awal, transaksi_newbusiness, transaksi_renewal, transaksi_alterasi, transaksi_klaim, pembayaran_kekita, 
		pembayaran_kecustomer, (transaksi_newbusiness + transaksi_renewal + transaksi_alterasi - transaksi_klaim ) AS transaksi,  
		saldo_ahir, nama_periode FROM ReadsYsBillingTransaction $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Customer":"'. $rs["customer"].'",';
			$outp .= '"BeginingBalance":"'.$rs["Saldo_awal"].'",'; 
			$outp .= '"NewBusinesFas":"'.$rs["transaksi_newbusiness"].'",'; 
			$outp .= '"RenewalFas":"'.$rs["transaksi_renewal"].'",'; 
			$outp .= '"AlterationFas":"'.$rs["transaksi_alterasi"].'",'; 
			$outp .= '"ClaimFas":"'.$rs["transaksi_klaim"].'",'; 
			$outp .= '"YourPayment":"'.$rs["pembayaran_kekita"].'",'; 
			$outp .= '"OurPayment":"'.$rs["pembayaran_kecustomer"].'",'; 
			$outp .= '"EndingBalance":"'.$rs["saldo_ahir"].'",'; 
			$outp .= '"Period":"'.$rs["nama_periode"].'",';
			$outp .= '"Transaction":"'.$rs["transaksi"].'",';
			$outp .= '"BillingNumber":"'.$rs["billing_no"].'",';
			$outp .= '"Code":"'.$rs["no_client"].'"}';
		};
		break; 
	case "Years5CustomerA":
		$result = $conn->query("SELECT no_client, billing_no, customer, Saldo_awal, transaksi_newbusiness, transaksi_renewal, transaksi_alterasi, transaksi_klaim, 
		pembayaran_kekita, pembayaran_kecustomer, saldo_ahir, nama_periode, (transaksi_newbusiness + transaksi_renewal + transaksi_alterasi - transaksi_klaim) AS subTotal FROM ReadsYsBillingTransaction");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Customer":"'. $rs["customer"].'",';
			$outp .= '"BeginingBalance":"'.$rs["Saldo_awal"].'",'; 
			$outp .= '"NewBusinesFas":"'.$rs["transaksi_newbusiness"].'",'; 
			$outp .= '"RenewalFas":"'.$rs["transaksi_renewal"].'",'; 
			$outp .= '"AlterationFas":"'.$rs["transaksi_alterasi"].'",'; 
			$outp .= '"ClaimFas":"'.$rs["transaksi_klaim"].'",'; 
			$outp .= '"YourPayment":"'.$rs["pembayaran_kekita"].'",'; 
			$outp .= '"OurPayment":"'.$rs["pembayaran_kecustomer"].'",'; 
			$outp .= '"SubTotal":"'.$rs["subTotal"].'",'; 
			$outp .= '"EndingBalance":"'.$rs["saldo_ahir"].'",'; 
			$outp .= '"BillingNumber":"'.$rs["billing_no"].'",'; 
			$outp .= '"Period":"'.$rs["nama_periode"].'",';
			$outp .= '"Code":"'.$rs["no_client"].'"}';
		};
		break;	
	case "Years5CustomerT":
		$result = $conn->query("SELECT SUM(Saldo_awal) AS Saldo_awal, SUM(transaksi_newbusiness) AS transaksi_newbusiness, SUM(transaksi_renewal) AS transaksi_renewal, SUM(transaksi_alterasi) AS transaksi_alterasi, SUM(transaksi_klaim) AS transaksi_klaim, SUM(pembayaran_kekita) AS pembayaran_kekita, 
		SUM(pembayaran_kecustomer) AS pembayaran_kecustomer, SUM(transaksi_newbusiness + transaksi_renewal + transaksi_alterasi - transaksi_klaim) AS transaksi 		
		FROM ReadsYsBillingTransaction ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"BeginingBalance":"'.$rs["Saldo_awal"].'",'; 
			$outp .= '"NewBusinesFas":"'.$rs["transaksi_newbusiness"].'",'; 
			$outp .= '"RenewalFas":"'.$rs["transaksi_renewal"].'",'; 
			$outp .= '"AlterationFas":"'.$rs["transaksi_alterasi"].'",';  
			$outp .= '"ClaimFas":"'.$rs["transaksi_klaim"].'",'; 
			$outp .= '"YourPayment":"'.$rs["pembayaran_kekita"].'",'; 
			$outp .= '"OurPayment":"'.$rs["pembayaran_kecustomer"].'",'; 
			$outp .= '"Transaction":"'.$rs["transaksi"].'"}';
		};
		break; 
		default:
			echo "Not part of allowable access!";
};
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);

?>
