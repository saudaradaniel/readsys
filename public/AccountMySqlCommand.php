<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$constrain="ListOfFinanceAT WHERE (ReadsYsJobs.field_multi_fungsi1 = 'November 2017') AND (ReadsYsJobs.status_kontrol = 'On Going Process') ";
$conn = new mysqli("localhost", "root", "", "reasuransi");
$constrain=$_REQUEST["q"];
$swiching=substr($constrain,0,15);
$constrain=substr($constrain,15);

switch ($swiching) {
    case "CustomerBilling":
        $result = $conn->query("SELECT ReadsYsCustomer.ceding, COUNT(ReadsYsCustomer.ceding) AS jumlah_cessie, ReadsYsCustomer.no_client, ReadsYsJobs.field_multi_fungsi3 FROM ReadsYsJobs 
		INNER JOIN ReadsYsMasterDocument ON ReadsYsJobs.no_mail_doc = ReadsYsMasterDocument.no_mail_doc LEFT OUTER JOIN ReadsYsCustomer on ReadsYsCustomer.no_client=ReadsYsMasterDocument.no_client $constrain
		Group By ReadsYsCustomer.ceding, ReadsYsCustomer.no_client, ReadsYsJobs.field_multi_fungsi3 ORDER BY ReadsYsCustomer.ceding ASC ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Customer":"'. $rs["ceding"].'",';
			$outp .= '"Count":"'.$rs["jumlah_cessie"].'",'; 
			$outp .= '"Code":"'.$rs["no_client"].'"}';
		};
        break;
	case "TotCustomerBill":
		$result = $conn->query("SELECT SUM(ReadsYsJobs.jlh_tally) AS jumlah_cessie 
		FROM ReadsYsJobs 
		INNER JOIN ReadsYsMasterDocument ON ReadsYsJobs.no_mail_doc = ReadsYsMasterDocument.no_mail_doc 
		LEFT OUTER JOIN ReadsYsCustomer on ReadsYsCustomer.no_client=ReadsYsMasterDocument.no_client $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Total":"'.$rs["jumlah_cessie"].'"}'; 
		};
        break;
	case "ListOfFinanceAS":
        $result = $conn->query("SELECT ReadsYsBillingTransaction.Fas_Number, ReadsYsBillingTransaction.no_client, ReadsYsBillingTransaction.customer, SUM(ReadsYsBillingTransaction.Saldo_awal) AS Saldo_awal, SUM(ReadsYsBillingTransaction.transaksi_newbusiness) AS transaksi_newbusiness, 
		SUM(ReadsYsBillingTransaction.transaksi_renewal) AS transaksi_renewal, SUM(ReadsYsBillingTransaction.transaksi_alterasi) AS transaksi_alterasi, SUM(ReadsYsBillingTransaction.transaksi_klaim) AS transaksi_klaim, 
		SUM(ReadsYsBillingTransaction.pembayaran_kekita) AS pembayaran_kekita, SUM(ReadsYsBillingTransaction.pembayaran_kecustomer) AS pembayaran_kecustomer, SUM(ReadsYsBillingTransaction.saldo_ahir) AS saldo_ahir,
		SUM(ReadsYsBillingTransaction.transaksi_newbusiness + ReadsYsBillingTransaction.transaksi_renewal + ReadsYsBillingTransaction.transaksi_alterasi - ReadsYsBillingTransaction.transaksi_klaim ) AS transaksi, ReadsYsBillingTransaction.nama_periode
		FROM ReadsYsBillingTransaction $constrain GROUP BY ReadsYsBillingTransaction.Fas_Number, ReadsYsBillingTransaction.no_client, ReadsYsBillingTransaction.customer, ReadsYsBillingTransaction.nama_periode");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Customer":"'. $rs["customer"].'",';
			$outp .= '"BeginingBalance":"'.$rs["Saldo_awal"].'",'; 
			$outp .= '"FasNumber":"'.$rs["Fas_Number"].'",'; 
			$outp .= '"AccountingPeriod":"'.$rs["nama_periode"].'",'; 
			$outp .= '"NewBusinesFas":"'.$rs["transaksi_newbusiness"].'",'; 
			$outp .= '"RenewalFas":"'.$rs["transaksi_renewal"].'",'; 
			$outp .= '"AlterationFas":"'.$rs["transaksi_alterasi"].'",'; 
			$outp .= '"ClaimFas":"'.$rs["transaksi_klaim"].'",'; 
			$outp .= '"YourPayment":"'.$rs["pembayaran_kekita"].'",'; 
			$outp .= '"OurPayment":"'.$rs["pembayaran_kecustomer"].'",'; 
			$outp .= '"Transaction":"'.$rs["transaksi"].'",'; 
			$outp .= '"EndingBalance":"'.$rs["saldo_ahir"].'",';
			$outp .= '"Code":"'.$rs["no_client"].'"}';
		};
        break; 	
	case "ListOfFinanceAT":
        $result = $conn->query("SELECT SUM(ReadsYsBillingTransaction.pembayaran_kekita) AS pembayaran_kekita, SUM(ReadsYsBillingTransaction.pembayaran_kecustomer) AS pembayaran_kecustomer, SUM(ReadsYsBillingTransaction.saldo_ahir) AS saldo_ahir,
		SUM(ReadsYsBillingTransaction.transaksi_newbusiness + ReadsYsBillingTransaction.transaksi_renewal + ReadsYsBillingTransaction.transaksi_alterasi - ReadsYsBillingTransaction.transaksi_klaim ) AS transaksi
		FROM ReadsYsBillingTransaction $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"YourPayments":"'. $rs["pembayaran_kekita"].'",'; 
			$outp .= '"OurPayments":"'.$rs["pembayaran_kecustomer"].'",'; 
			$outp .= '"Transactions":"'.$rs["transaksi"].'",'; 
			$outp .= '"EndingBalances":"'.$rs["saldo_ahir"].'"}';
		};
		break; 
    case "NewBusinesBills" or "RenewalBizBill" or "TerminationBill" or "AlterationBills" or "ClaBusinesBills":
        $result = $conn->query("SELECT ReadsYsJobs.tgl_buat, ReadsYsJobs.jlh_data_cessie, ReadsYsJobs.no_jobs, ReadsYsJobs.pembuat, ReadsYsJobs.ditujukan_untuk, ReadsYsMasterDocument.Path_Image, 
		ReadsYsMasterDocument.tingkat_pengamanan, ReadsYsJobs.field_multi_fungsi1, ReadsYsJobs.status_kontrol, ReadsYsJobs.jobs_history, ReadsYsMasterDocument.no_client, 
		ReadsYsMasterDocument.image_file AS nama_file,  readsyscustomer.ceding, ReadsYsJobs.identitas, ReadsYsJobs.field_multi_fungsi2, ReadsYsJobs.id_tabel_analisis_variabel, 
		ReadsYsJobs.id_tabel_analisis_variabel AS id_tabel, ReadsYsJobs.topik, ReadsYsMasterDocument.no_mail_doc, ReadsYsJobs.field_multi_fungsi3  
		FROM ReadsYsJobs INNER JOIN ReadsYsMasterDocument ON ReadsYsJobs.no_mail_doc = ReadsYsMasterDocument.no_mail_doc LEFT OUTER JOIN readsyscustomer on readsyscustomer.no_client=ReadsYsMasterDocument.no_client $constrain ORDER BY ReadsYsJobs.tgl_buat ASC ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Job":"'. $rs["no_jobs"].'",';
			$outp .= '"Topic":"'.$rs["topik"].'",'; 
			$outp .= '"Dated":"'.$rs["tgl_buat"].'",'; 
			$outp .= '"Customer":"'.$rs["ceding"].'",'; 
			$outp .= '"FileName":"'.$rs["nama_file"].'",'; 
			$outp .= '"SOAPL":"'.$rs["identitas"].'",'; 
			$outp .= '"Code":"'.$rs["no_client"].'"}';
		};
        break; 
    default:
        echo "Not part of allowable access!";
};

$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);

?>
