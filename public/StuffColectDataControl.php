<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
session_start();
$constrain="ListOfCustCesie  WHERE (`readsysdetailcessieidentityingeneral`.`reas_no` = 2)"; 
$conn = mysqli_connect("localhost", "root", "", "reasuransi");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
};
$constrain=$_REQUEST["q"];
$swiching=substr($constrain,0,15);
$constrain=substr($constrain,15);

switch ($swiching) {
	case "AgendaAttention":
		$result = $conn->query("SELECT `no_agenda`, `nama`, `norut` FROM `ReadsYsAgendaAttention` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Name":"'. $rs["nama"].'",';
			$outp .= '"Identity":"'.$rs["norut"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break; 
	case "AgendaCurrentYe":
		$result = $conn->query("SELECT `WAKTU`, `TEMPAT`, `NAMA`, DATE_FORMAT(`TGL_AGENDA`,'%Y %M %D') As TGL_AGENDA, `tgl_valid_mulai`, `No_agenda`, `WAKTU_SEL`, `MOBIL`, `SUPIR`, `WKT_DARI_REAL`, `WKT_SELESAI_REAL`, `REMARKS`, `REALISASI_STATUS`, `CARORDER`, 
		`keterangan`, `JAM_WAKTU`, `KdMeetingRoom`, `no_client`, `status_agenda`, `transport`, `car_order_status`, `tgl_valid_ahir` 
		FROM `ReadsYsAgenda` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"AgendaNumber":"'. $rs["No_agenda"].'",';
			$outp .= '"Time":"'. $rs["WAKTU"].'",';
			$outp .= '"Place":"'. $rs["TEMPAT"].'",';
			$outp .= '"Owner":"'. $rs["NAMA"].'",';
			$outp .= '"AgendaDate":"'. $rs["TGL_AGENDA"].'",';
			$outp .= '"Starting":"'. $rs["tgl_valid_mulai"].'",';
			$outp .= '"ExpectingFinished":"'. $rs["WAKTU_SEL"].'",';
			$outp .= '"Car":"'. $rs["MOBIL"].'",';
			$outp .= '"Driver":"'. $rs["SUPIR"].'",';
			$outp .= '"TimeFromReal":"'. $rs["WKT_DARI_REAL"].'",';
			$outp .= '"TimeFinishedReal":"'. $rs["WKT_SELESAI_REAL"].'",';
			$outp .= '"Notes":"'. $rs["REMARKS"].'",';
			$outp .= '"StatusReal":"'. $rs["REALISASI_STATUS"].'",';
			$outp .= '"CarOrder":"'. $rs["CARORDER"].'",';
			$outp .= '"Room":"'. $rs["KdMeetingRoom"].'",';
			$outp .= '"Status":"'. $rs["status_agenda"].'",';
			$outp .= '"CarOrderStatus":"'. $rs["car_order_status"].'",';
			$outp .= '"Finished":"'. $rs["tgl_valid_ahir"].'",';
			$outp .= '"Description":"'.$rs["keterangan"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break;
	case "AgendaDeleteRec":
		$conn->query("DELETE FROM `readsysagenda` $constrain ");
		$conn->close();
		break;
	case "AgendaInserting":
		$bowner = $_SESSION['bowner'];
		if (empty($bowner)) $bowner = '';
		$bdate = $_SESSION['bdate'];
		if (empty($bdate)) $bdate = '';
		$btime = $_SESSION['btime'];
		if (empty($btime)) $btime = '';
		$bplace = $_SESSION['bplace'];
		if (empty($bplace)) $bplace = '';
		$broom = $_SESSION['broom'];
		if (empty($broom)) $broom = '';
		$bstatus = $_SESSION['bstatus'];
		if (empty($bstatus)) $bstatus = '';
		$conn->query("INSERT INTO readsysagenda ('WAKTU', 'TEMPAT', 'NAMA', 'TGL_AGENDA', 'status_agenda', 'KdMeetingRoom' 
		VALUES ('".$btime."', '".$bplace."', '".$bowner."', '".$bdate."', '".$bstatus."', '".$broom."')");
		if(mysqli_query($conn, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		};
		$conn->close();
		break;
	case "ContactPersonal":
		$result = $conn->query("SELECT `no_contact`, `no_client`, `departemen`, `nama`, `alamat`, `telepon`, `private`, `primary_contact4`, `primary_contact`, 
		`primary_contact1`, `primary_contact2`, `primary_contact3`, `email`, `tgl_lahir`, `tempat_lahir`, `fax`, `regional`, `keterangan`, `nama1`, `gelar`, 
		`jabatan`, `pekerjaan`, `pekerjaan1`, `pekerjaan2`, `pekerjaan3`, `panggilan`, `kelamin`, `marital_status`, `negara`, `propinsi`, `religion`, `status`, 
		`jabatan_organisasi1`, `jabatan_organisasi2`, `jabatan_organisasi3`, `organisasi1`, `organisasi2`, `organisasi3`, `extension`, `reputasi_profesi`, `tanggal_perubahan` 
		FROM `ReadsYsContactPerson` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"ID":"'. $rs["no_contact"].'",';			
			$outp .= '"Code":"'. $rs["no_client"].'",';
			$outp .= '"Departement":"'. $rs["departemen"].'",';
			$outp .= '"FirstName":"'. $rs["nama"].'",';
			$outp .= '"Address":"'. $rs["alamat"].'",';
			$outp .= '"Phone":"'. $rs["telepon"].'",';
			$outp .= '"HP":"'. $rs["private"].'",';
			$outp .= '"Contact":"'. $rs["primary_contact"].'",';
			$outp .= '"contact1":"'. $rs["primary_contact1"].'",';
			$outp .= '"contact2":"'. $rs["primary_contact2"].'",';
			$outp .= '"contact3":"'. $rs["primary_contact3"].'",';
			$outp .= '"Email":"'. $rs["email"].'",';
			$outp .= '"DOB":"'. $rs["tgl_lahir"].'",';
			$outp .= '"POB":"'. $rs["tempat_lahir"].'",';
			$outp .= '"Fax":"'. $rs["fax"].'",';
			$outp .= '"Region":"'. $rs["regional"].'",';
		    $outp .= '"Description":"'. $rs["keterangan"].'",';
			$outp .= '"LastName":"'. $rs["nama1"].'",';
			$outp .= '"Master":"'. $rs["gelar"].'",';
			$outp .= '"Designation":"'. $rs["jabatan"].'",';
			$outp .= '"Job":"'. $rs["pekerjaan"].'",';
			$outp .= '"Job1":"'. $rs["pekerjaan1"].'",';
			$outp .= '"Job2":"'. $rs["pekerjaan2"].'",';
			$outp .= '"Job3":"'. $rs["pekerjaan3"].'",';
			$outp .= '"Alias":"'. $rs["panggilan"].'",';
			$outp .= '"Gender":"'. $rs["kelamin"].'",';
			$outp .= '"MaritalStatus":"'. $rs["marital_status"].'",';
			$outp .= '"State":"'. $rs["negara"].'",';
			$outp .= '"Province":"'. $rs["propinsi"].'",';
			$outp .= '"Religion":"'. $rs["religion"].'",';
			$outp .= '"Status":"'. $rs["status"].'",';
			$outp .= '"RoleOrganization1":"'. $rs["jabatan_organisasi1"].'",';
			$outp .= '"RoleOrganization2":"'. $rs["jabatan_organisasi2"].'",';
			$outp .= '"RoleOrganization3":"'. $rs["jabatan_organisasi3"].'",';
			$outp .= '"Organization1":"'. $rs["organisasi1"].'",';
			$outp .= '"Organization2":"'. $rs["organisasi2"].'",';
			$outp .= '"Organization3":"'. $rs["organisasi3"].'",';
			$outp .= '"Extention":"'. $rs["extension"].'",';
			$outp .= '"ProfesionalReputation":"'. $rs["reputasi_profesi"].'",';
			$outp .= '"ChangeDate":"'.$rs["tanggal_perubahan"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break;
	case "CustomerInforma":
		$result = $conn->query("SELECT no_client, kd_divisi, klasifikasi, kd_ceding, ceding, gedung, alamat, kodepos, kota, propinsi, negara, overseas, asean, 
		telepon1, telepon2, telepon3, fax1, fax2, fax3, problem, email, web, history, location, region, status, kompetitor
		FROM readsyscustomer $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"ID":"'. $rs["no_client"].'",';			
			$outp .= '"DivisionCode":"'. $rs["kd_divisi"].'",';
			$outp .= '"Classification":"'. $rs["kd_divisi"].'",';
			$outp .= '"Code":"'. $rs["kd_ceding"].'",';
			$outp .= '"Customer":"'. $rs["ceding"].'",';
			$outp .= '"Building":"'. $rs["gedung"].'",';
			$outp .= '"Address":"'. $rs["alamat"].'",';
			$outp .= '"ZIP":"'. $rs["kodepos"].'",';
			$outp .= '"City":"'. $rs["kota"].'",';
			$outp .= '"Province":"'. $rs["propinsi"].'",';
			$outp .= '"State":"'. $rs["negara"].'",';
			$outp .= '"Overseas":"'. $rs["overseas"].'",';
			$outp .= '"Asean":"'. $rs["asean"].'",';
			$outp .= '"Telephone1":"'. $rs["telepon1"].'",';
			$outp .= '"Telephone2":"'. $rs["telepon2"].'",';
			$outp .= '"Telephone3":"'. $rs["telepon3"].'",';
			$outp .= '"Faxes1":"'. $rs["fax1"].'",';
			$outp .= '"Faxes2":"'. $rs["fax2"].'",';
			$outp .= '"Faxes3":"'. $rs["fax3"].'",';
			$outp .= '"Problems":"'. $rs["problem"].'",';
			$outp .= '"Email":"'. $rs["email"].'",';
		    $outp .= '"Web":"'. $rs["web"].'",';
			$outp .= '"History":"'. $rs["history"].'",';
			$outp .= '"Location":"'. $rs["location"].'",';
			$outp .= '"Region":"'. $rs["region"].'",';
			$outp .= '"Status":"'. $rs["status"].'",';
			$outp .= '"Competitor":"'.$rs["kompetitor"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break; 
	case "ClaimOfCustomer":
		$result = $conn->query("SELECT readsyscustomer.ceding, ReadsYsBillingTransaction.no_client, COALESCE(SUM(ReadsYsBillingTransaction.transaksi_klaim ),0) AS transaksi 
		FROM ReadsYsBillingTransaction 
		RIGHT OUTER JOIN readsyscustomer on readsyscustomer.no_client = ReadsYsBillingTransaction.no_client 
		$constrain GROUP BY readsyscustomer.ceding, ReadsYsBillingTransaction.no_client ORDER BY COALESCE(SUM(ReadsYsBillingTransaction.transaksi_klaim ),0) DESC LIMIT 10 ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Customer":"'. $rs["ceding"].'",';
			$outp .= '"Code":"'. $rs["no_client"].'",';
			$outp .= '"Transaction":"'.$rs["transaksi"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break; 
	case "FutureEconomics":
		$result = $conn->query("SELECT `no_urut`, `nama_subrutin`, `skrip_program`, `jenis_routine`, `keterangan` FROM `readsyssubrutin` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"CafeId":"'. $rs["no_urut"].'",';
			$outp .= '"Subrutine":"'. $rs["nama_subrutin"].'",';
			$outp .= '"TypeSubrutine":"'. $rs["jenis_routine"].'",';
			$outp .= '"Description":"'. $rs["keterangan"].'",';
			$outp .= '"CAFE":"'.$rs["skrip_program"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break;
	case "IntercCurrentYe":
		$result = $conn->query("SELECT `nomor_intercon`, `tanggal_intercon`, `topik`, `pengirim`, `penerima`, `nomor_intercontext`, `status_penerima`, `status_pengirim`, 
		`status_intercon`, `attensi1`, `attensi2`, `attensi3`, `attensi4`, `attensi5`, `status_intercon1`, `status_intercon2`, `status_intercon3`, `status_intercon4`, 
		`status_intercon5`, `status_intercon6`, `status_intercon7`, `pesan` FROM `ReadsYsIntercon` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"InterconNumber":"'. $rs["nomor_intercon"].'",';
			$outp .= '"InterconDate":"'. $rs["tanggal_intercon"].'",';
			$outp .= '"Topic":"'. $rs["topik"].'",';
			$outp .= '"Message":"'. $rs["pesan"].'",';
			$outp .= '"Sender":"'. $rs["pengirim"].'",';
			$outp .= '"Receiver":"'. $rs["penerima"].'",';
			$outp .= '"ReceiverStatus":"'. $rs["status_penerima"].'",';
			$outp .= '"SenderStatus":"'. $rs["status_pengirim"].'",';
			$outp .= '"Attention1":"'. $rs["attensi1"].'",';
			$outp .= '"Attention2":"'. $rs["attensi2"].'",';
			$outp .= '"Attention3":"'. $rs["attensi3"].'",';
			$outp .= '"Attention4":"'. $rs["attensi4"].'",';
			$outp .= '"Attention5":"'. $rs["attensi5"].'",';
			$outp .= '"StatusIntercon1":"'. $rs["status_intercon1"].'",';
			$outp .= '"StatusIntercon2":"'. $rs["status_intercon2"].'",';
			$outp .= '"StatusIntercon3":"'. $rs["status_intercon3"].'",';
			$outp .= '"StatusIntercon4":"'. $rs["status_intercon4"].'",';
			$outp .= '"StatusIntercon5":"'. $rs["status_intercon5"].'",';
			$outp .= '"StatusIntercon7":"'. $rs["status_intercon7"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);
		break; 
	case "ListOfCustCesie":
		$result = $conn->query("SELECT `readsysdetailcessieidentityingeneral`.`reas_no`, `readsysdetailcessieidentityingeneral`.`reas_code`, `readsysdetailcessieidentityingeneral`.`ref_policy_no`, 
		`readsysdetailcessieidentityingeneral`.`ceding_slip_no`, `readsysdetailcessieidentityingeneral`.`id_ref_spesific_business`, `readsysdetailcessieidentityingeneral`.`accept_code`, `readsysdetailcessieidentityingeneral`.`insured_object`, 
		`readsysdetailcessieidentityingeneral`.`metode_reasuransi`, `readsysdetailcessieidentityingeneral`.`detail_objinsured_name`, `readsysdetailcessieidentityingeneral`.`detail_objinsured_backname`, `readsysdetailcessieidentityingeneral`.`cob_code`, 
		`readsysdetailcessieidentityingeneral`.`cob2_code`, `readsysdetailcessieidentityingeneral`.`occupation_code`, `readsysdetailcessieidentityingeneral`.`interest_code`, `readsysdetailcessieidentityingeneral`.`ins_period_from`, 
		`readsysdetailcessieidentityingeneral`.`ins_period_to`, `readsysdetailcessieidentityingeneral`.`ins_period_status`, `readsysdetailcessieidentityingeneral`.`update_date`, `readsysdetailcessieidentityingeneral`.`contract_no`, 
		`readsysdetailcessieidentityingeneral`.`condition_code`, `readsysdetailcessieidentityingeneral`.`treaty_code`, `readsysdetailcessieidentityingeneral`.`total_sum_insured_org`, `readsysdetailcessieidentityingeneral`.`total_sum_insured_idr`, 
		`readsysdetailcessieidentityingeneral`.`total_sum_reinsured_org`, `readsysdetailcessieidentityingeneral`.`total_sum_reinsured_idr`, `readsysdetailcessieidentityingeneral`.`total_sum_atrisk_org`, `readsysdetailcessieidentityingeneral`.`total_sum_atrisk_idr`, 
		`readsysdetailcessieidentityingeneral`.`total_sum_retroced_org`, `readsysdetailcessieidentityingeneral`.`total_sum_retroced_idr`, `readsysdetailcessieidentityingeneral`.`payment_method`, `readsysdetailcessieidentityingeneral`.`date_to_renewal`, 
		`readsysdetailcessieidentityingeneral`.`status_renewal`, `readsysdetailcessieidentityingeneral`.`date_to_retroceed`, `readsysdetailcessieidentityingeneral`.`status_retro`, `readsysdetailcessieidentityingeneral`.`status_portofolio_protection`, 
		`readsysdetailcessieidentityingeneral`.`accumulation_no`, `readsysdetailcessieidentityingeneral`.`accumulation_date`, `readsysdetailcessieidentityingeneral`.`claim_status`, `readsysdetailcessieidentityingeneral`.`policy_history`, `readsysdetailcessieidentityingeneral`.`deductible`, 
		`readsysdetailcessieidentityingeneral`.`wpc`, `readsysdetailcessieidentityingeneral`.`days_due_on`, `readsysdetailcessieidentityingeneral`.`installment_count`, `readsysdetailcessieidentityingeneral`.`metode_memproses_retro`, `readsysdetailcessieidentityingeneral`.`retro_no`, 
		`readsysdetailcessieidentityingeneral`.`claim_date`, `readsysdetailcessieidentityingeneral`.`acceptation_remarks`, `readsysdetailcessieidentityingeneral`.`tgl_terima_penawaran`, `readsysdetailcessieidentityingeneral`.`tgl_terima_entry`, `readsysdetailcessieidentityingeneral`.`tgl_data_lengkap`, 
		`readsysdetailcessieidentityingeneral`.`tgl_underwriting`, `readsysdetailcessieidentityingeneral`.`reas_code_complex`, `readsysdetailcessieidentityingeneral`.`ceding_slip_date`, `readsysdetailcessieidentityingeneral`.`id_holder`, `readsysdetailcessieidentityingeneral`.`division_code`, 
		`readsysdetailcessieidentityingeneral`.`underwriter`, `readsysdetailcessieidentityingeneral`.`full_objinsured_name`, `readsysdetailcessieidentityingeneral`.`group_individu`, `readsysdetailcessieidentityingeneral`.`status_revenue_account`, `readsysdetailcessieidentityingeneral`.`tgl_endorse`, 
		`readsysdetailcessieidentityingeneral`.`program_asuransi`, `readsysdetailcessieidentityingeneral`.`nomor_job`, `readsysdetailcessieidentityingeneral`.`document_no`, `readsysdetailcessieidentityingeneral`.`status_proses_underwriting`, `readsysdetailcessieidentityingeneral`.`status_proses_retro`, 
		`readsysdetailcessieidentityingeneral`.`status_proses_akumulasi`, `readsysdetailcessieidentityingeneral`.`nomor_urut_group`, `readsysdetailcessieidentityingeneral`.`mortalita`, `readsysdetailcessieidentityingeneral`.`ssn`, `readsysdetailcessieidentityingeneral`.`complience_status`, 
		`readsysdetailcessieidentityingeneral`.`periode`, `readsysdetailcessieidentityingeneral`.`tgl_billing`, `readsysdetailcessieidentityingeneral`.`status_endorse`, `readsysdetailcessieidentityingeneral`.`kompletor`, `readsysdetailcessieidentityingeneral`.`next_renew`, `readsyscustomer`.`ceding` 
		FROM `readsysdetailcessieidentityingeneral` 
		INNER JOIN `readsyscustomer` on `readsyscustomer`.`no_client` = `readsysdetailcessieidentityingeneral`.`id_holder` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"AcceptCode":"'. $rs["accept_code"].'",';
			$outp .= '"CedingPolicy":"'. $rs["ref_policy_no"].'",';
			$outp .= '"Contract":"'. $rs["contract_no"].'",';
			$outp .= '"Customer":"'. $rs["ceding"].'",';
			$outp .= '"DateOfPLA":"'. $rs["claim_date"].'",';
			$outp .= '"DateOfUnderwriting":"'. $rs["tgl_underwriting"].'",';
			$outp .= '"DateOfOfferEntry":"'. $rs["tgl_terima_entry"].'",';			
			$outp .= '"DateOfComprehensiveData":"'. $rs["tgl_data_lengkap"].'",';
			$outp .= '"DueDate":"'. $rs["days_due_on"].'",';
			$outp .= '"FirstName":"'. $rs["detail_objinsured_name"].'",';
			$outp .= '"Insured":"'. $rs["full_objinsured_name"].'",';
			$outp .= '"InsuredObject":"'. $rs["insured_object"].'",';			
			$outp .= '"LastName":"'. $rs["detail_objinsured_backname"].'",';
			$outp .= '"LastRenewalDate":"'. $rs["date_to_renewal"].'",';
			$outp .= '"LastUpdate":"'. $rs["update_date"].'",';	
			$outp .= '"ReasCode":"'. $rs["reas_code"].'",';	
			$outp .= '"ReinsuranceNumber":"'. $rs["reas_no"].'",';			
			$outp .= '"ReinsuranceMethod":"'. $rs["metode_reasuransi"].'",';
			$outp .= '"RetrocessionDate":"'. $rs["date_to_retroceed"].'",';
			$outp .= '"SlipDate":"'. $rs["ceding_slip_date"].'",';	
			$outp .= '"SlipNumber":"'. $rs["ceding_slip_no"].'",';			
			$outp .= '"SpesificBusiness":"'. $rs["id_ref_spesific_business"].'",';			
			$outp .= '"SocialSecurityNumber":"'. $rs["ssn"].'",';			
			$outp .= '"SourceOfBusiness":"'. $rs["ceding"].'",';
			$outp .= '"StatusInsurancePeriod":"'. $rs["ins_period_status"].'",';		
			$outp .= '"SumInsuredOrg":"'. $rs["total_sum_insured_org"].'",';
			$outp .= '"SumReInsuredOrg":"'. $rs["total_sum_reinsured_org"].'",';			
			$outp .= '"TreatyNumber":"'.$rs["treaty_code"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break; 
	case "ListOfCustomer1":
		$result = $conn->query("SELECT readsyscustomer.ceding, ReadsYsBillingTransaction.no_client, COALESCE(SUM(ReadsYsBillingTransaction.transaksi_newbusiness + ReadsYsBillingTransaction.transaksi_renewal + ReadsYsBillingTransaction.transaksi_alterasi - ReadsYsBillingTransaction.transaksi_klaim ),0) AS transaksi 
		FROM ReadsYsBillingTransaction 
		RIGHT OUTER JOIN readsyscustomer on readsyscustomer.no_client = ReadsYsBillingTransaction.no_client 
		$constrain GROUP BY readsyscustomer.ceding, ReadsYsBillingTransaction.no_client ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Customer":"'. $rs["ceding"].'",';
			$outp .= '"Code":"'. $rs["no_client"].'",';
			$outp .= '"Transaction":"'.$rs["transaksi"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break; 
	case "ListOfCustomer5":
		$result = $conn->query("SELECT readsyscustomer.ceding, ReadsYsBillingTransaction.no_client, COALESCE(SUM(ReadsYsBillingTransaction.transaksi_newbusiness + ReadsYsBillingTransaction.transaksi_renewal + ReadsYsBillingTransaction.transaksi_alterasi - ReadsYsBillingTransaction.transaksi_klaim ),0) AS transaksi 
		FROM ReadsYsBillingTransaction 
		RIGHT OUTER JOIN readsyscustomer on readsyscustomer.no_client = ReadsYsBillingTransaction.no_client 
		$constrain GROUP BY readsyscustomer.ceding, ReadsYsBillingTransaction.no_client ORDER BY COALESCE(SUM(ReadsYsBillingTransaction.transaksi_newbusiness + ReadsYsBillingTransaction.transaksi_renewal + ReadsYsBillingTransaction.transaksi_alterasi - ReadsYsBillingTransaction.transaksi_klaim ),0) DESC LIMIT 10 ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Customer":"'. $rs["ceding"].'",';
			$outp .= '"Code":"'. $rs["no_client"].'",';
			$outp .= '"Transaction":"'.$rs["transaksi"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break; 
	case "ListOfNewsInsur";
		$result = $conn->query("SELECT `no_berita`, `tanggal`, `topik`, `details`, `file_gambar` FROM `ReadsYsNews` $constrain ORDER BY `tanggal` DESC LIMIT 120 ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Date":"'. $rs["tanggal"].'",';
			$outp .= '"Code":"'. $rs["no_berita"].'",';
			$outp .= '"Topic":"'. $rs["topik"].'",';
			$outp .= '"Details":"'. $rs["details"].'",';
			$outp .= '"FileGambar":"'.$rs["file_gambar"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break; 
	case "ListOfDocumData";
		$result = $conn->query("SELECT `no_mail_doc`, `no_relasi`, `jenis_dokumen`, `divisi`, `topik`, `ekstensi`, `logistik`, `status`, `pemilik`, 
		`kode_folder`, `kode_rak`, `kode_lemari`, `kode_kotak`, `tanggal_input`, `tanggal`, `client`, `sign_return_status`, `Process_Status`, 
		`pekerjaan_pla`, `pekerjaan_dla`, `pekerjaan_underwriting`, `pekerjaan_assessment`, `pekerjaan_soa`, `catatan_pekerjaan`, `tingkat_pengamanan`, 
		`peminjam_terahir`, `referensi_surat`, `attensi1`, `attensi2`, `attensi3`, `image_file`, `Path_Image`, `alasan_pinjam`, `tahun`, `media_dokumen`, 
		`ditujukan_kepada`, `pengirim`, `claim_code` FROM `readsysmasterdocument` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"DocumentNumber":"'. $rs["no_mail_doc"].'",';
			$outp .= '"Relation":"'. $rs["no_relasi"].'",';
			$outp .= '"TypeDocument":"'. $rs["jenis_dokumen"].'",';
			$outp .= '"Division":"'. $rs["divisi"].'",';
			$outp .= '"Topics":"'. $rs["topik"].'",';
			$outp .= '"Extention":"'. $rs["ekstensi"].'",';
			$outp .= '"Logistics":"'. $rs["logistik"].'",';
			$outp .= '"Status":"'. $rs["status"].'",';
			$outp .= '"Owner":"'. $rs["pemilik"].'",';
			$outp .= '"FolderCode":"'. $rs["kode_folder"].'",';
			$outp .= '"Rack":"'. $rs["kode_rak"].'",';
			$outp .= '"BoxesCode":"'. $rs["kode_kotak"].'",';			
			$outp .= '"Cupboard":"'. $rs["kode_lemari"].'",';
			$outp .= '"DateEntry":"'. $rs["tanggal_input"].'",';
			$outp .= '"Date":"'. $rs["tanggal"].'",';
			$outp .= '"Ceding":"'. $rs["client"].'",';
			$outp .= '"SignReturnStatus":"'. $rs["sign_return_status"].'",';
			$outp .= '"ProcessingStatus":"'. $rs["Process_Status"].'",';
			$outp .= '"PLAJob":"'. $rs["pekerjaan_pla"].'",';
			$outp .= '"DLAJob":"'. $rs["pekerjaan_dla"].'",';
			$outp .= '"UnderwritingJob":"'. $rs["pekerjaan_underwriting"].'",';
			$outp .= '"AssessmentJob":"'. $rs["pekerjaan_assessment"].'",';
			$outp .= '"SOAJob":"'. $rs["pekerjaan_soa"].'",';
			$outp .= '"SecurityLevel":"'. $rs["tingkat_pengamanan"].'",';
			$outp .= '"TakeOuters":"'. $rs["peminjam_terahir"].'",';
			$outp .= '"ReasonTakeOut":"'. $rs["alasan_pinjam"].'",';
			$outp .= '"DocumentReference":"'. $rs["referensi_surat"].'",';
			$outp .= '"Attention1":"'. $rs["attensi1"].'",';
			$outp .= '"Attention2":"'. $rs["attensi2"].'",';			
			$outp .= '"Attention3":"'. $rs["attensi3"].'",';
            //$outp .= '"PathImage":"'. $rs["Path_Image"].'",';
			$outp .= '"Year":"'. $rs["tahun"].'",';
			$outp .= '"MediaDocument":"'. $rs["media_dokumen"].'",';
			$outp .= '"Addressed":"'. $rs["ditujukan_kepada"].'",';
			$outp .= '"Sender":"'. $rs["pengirim"].'",';
			$outp .= '"ClaimCode":"'. $rs["claim_code"].'",';
			$outp .= '"FileGambar":"'.$rs["image_file"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break;
	case "ProcessingClaim":
		$result = $conn->query("SELECT `readsysmasterclaim`.`claim_code`, `readsysmasterclaim`.`reas_no`, `readsysmasterclaim`.`status`, `readsysmasterclaim`.`tgl_entry`, `readsysmasterclaim`.`update_date`, `readsysmasterclaim`.`tanggal_pla`, 
		`readsysmasterclaim`.`tanggal_dla`, `readsysmasterclaim`.`refference_pla`, `readsysmasterclaim`.`refference_dla`, `readsysmasterclaim`.`estimasi_klaim_ceding`, `readsysmasterclaim`.`pla_original`, `readsysmasterclaim`.`pla_idr`, 
		`readsysmasterclaim`.`dla_original`, `readsysmasterclaim`.`dla_idr`, `readsysmasterclaim`.`litigation_cost_original`, `readsysmasterclaim`.`litigation_cost_idr`, `readsysmasterclaim`.`litigation_cost_dla_org`, `readsysmasterclaim`.`litigation_cost_dla_idr`, 
		`readsysmasterclaim`.`other_cost_original`, `readsysmasterclaim`.`other_cost_idr`, `readsysmasterclaim`.`other_cost_dla_org`, `readsysmasterclaim`.`other_cost_dla_idr`, `readsysmasterclaim`.`cashloss_org_intotal`, `readsysmasterclaim`.`cashloss_idr_intotal`, 
		`readsysmasterclaim`.`payment_method`, `readsysmasterclaim`.`installment_qty`, `readsysmasterclaim`.`remarks`, `readsysmasterclaim`.`underwriter_decision`, `readsysmasterclaim`.`division_decision`, `readsysmasterclaim`.`director_decision`, 
		`readsysmasterclaim`.`president_dir_decision`, `readsysmasterclaim`.`CLAIM_NO`, `readsysmasterclaim`.`divisi_keterangan`, `readsysmasterclaim`.`direktur_keterangan`, `readsysmasterclaim`.`president_keterangan`, `readsysmasterclaim`.`underwriting_keterangan`, 
		`readsysmasterclaim`.`premium_detail_code`, `readsysmasterclaim`.`no_dokumen_pla`, `readsysmasterclaim`.`no_dokumen_dla`, `readsysmasterclaim`.`no_dokumen_tehnik`, `readsysmasterclaim`.`no_voucher_tehnik`, `readsysmasterclaim`.`tgl_ekspektasi_bayar`, 
		`readsysmasterclaim`.`finansial_status`, `readsysmasterclaim`.`tgl_kejadian_klaim`, `readsysmasterclaim`.`approve_payment_infull`, `readsysmasterclaim`.`release_to_beneficiary`, `readsysmasterclaim`.`reserve_status`, `readsysmasterclaim`.`tgl_realisasi_bayar`, 
		`readsysmasterclaim`.`dibayar_lewat_bank`, `readsysmasterclaim`.`voucher_bank`, `readsysmasterclaim`.`approval_before_settlement`, `readsysmasterclaim`.`status_surat_konfirmasi`, `readsysmasterclaim`.`user_entry`, `readsysmasterclaim`.`related_document_need`, 
		`readsysmasterclaim`.`nomor_list`, `readsysmasterclaim`.`recovery_status`, `readsysmasterclaim`.`no_voucher_retro`, `readsysmasterclaim`.`tgl_ekspektasi_recovery_diterima`, `readsysmasterclaim`.`claim_accumulation_no`, `readsysmasterclaim`.`NOACCUM`, 
		`readsysmasterclaim`.`claim_status`, `readsysmasterclaim`.`audit`, `readsysmasterclaim`.`tgl_audit`, `readsysmasterclaim`.`catatan_audit`, `readsysmasterclaim`.`cheque_bilyet_ide`, `readsysmasterclaim`.`premiumdetail_code`, `readsysmasterclaim`.`pay_control1`, 
		`readsysmasterclaim`.`pay_control2`, `readsysmasterclaim`.`pay_control3`, `readsysmasterclaim`.`pay_control4`, `readsysmasterclaim`.`claimant_benefisiary`, `readsysmasterclaim`.`polis_1`, `readsysmasterclaim`.`polis_2`, `readsysmasterclaim`.`polis_3`, 
		`readsysmasterclaim`.`klaim_polis1`, `readsysmasterclaim`.`klaim_polis2`, `readsysmasterclaim`.`klaim_polis3`, `readsysmasterclaim`.`klaimpa_polis1`, `readsysmasterclaim`.`klaimpa_polis2`, `readsysmasterclaim`.`klaimpa_polis3`, `readsysmasterclaim`.`kode_fraud`,
        `readsysdetailcessieidentityingeneral`.`detail_objinsured_name`, `readsysdetailcessieidentityingeneral`.`detail_objinsured_backname`, `readsyscustomer`.`no_client`
		FROM `readsysmasterclaim` 
		INNER JOIN `readsysdetailcessieidentityingeneral` on `readsysdetailcessieidentityingeneral`.`reas_no` = `readsysmasterclaim`.`reas_no`
		INNER JOIN `readsyscustomer` on `readsyscustomer`.`no_client` = `readsysdetailcessieidentityingeneral`.`id_holder` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"ClaimID":"'. $rs["claim_code"].'",';
			$outp .= '"CedingClaimID":"'. $rs["CLAIM_NO"].'",';
			$outp .= '"ClaimPla":"'. $rs["pla_original"].'",';
			$outp .= '"FirstName":"'. $rs["detail_objinsured_name"].'",';
			$outp .= '"LastName":"'. $rs["detail_objinsured_backname"].'",';
			$outp .= '"EstimateClaim":"'. $rs["estimasi_klaim_ceding"].'",';
			$outp .= '"ClaimDla":"'. $rs["dla_original"].'",';
			$outp .= '"ReinsuranceNo":"'. $rs["reas_no"].'",';
			$outp .= '"ClaimStatus":"'. $rs["status"].'",';
			$outp .= '"DateOfEntry":"'. $rs["tgl_entry"].'",';
			$outp .= '"DateOfUpdate":"'. $rs["update_date"].'",';
			$outp .= '"DateOfPla":"'. $rs["tanggal_pla"].'",';
			$outp .= '"DateOfDla":"'. $rs["tanggal_dla"].'",';
			$outp .= '"ReferenceOfPla":"'. $rs["refference_pla"].'",';
			$outp .= '"ClaimPlaIdr":"'. $rs["pla_idr"].'",';
			$outp .= '"ClaimDlaIdr":"'. $rs["dla_idr"].'",';
			$outp .= '"LitigationOri":"'. $rs["litigation_cost_original"].'",';
			$outp .= '"LitigationIdr":"'. $rs["litigation_cost_idr"].'",';
			$outp .= '"LitigationDlaOri":"'. $rs["litigation_cost_dla_org"].'",';
			$outp .= '"LitigationDlaIdr":"'. $rs["litigation_cost_dla_idr"].'",';
			$outp .= '"OtherCostOri":"'. $rs["other_cost_original"].'",';
			$outp .= '"OtherCostIdr":"'. $rs["other_cost_idr"].'",';
			$outp .= '"OtherCostDlaOri":"'. $rs["other_cost_dla_org"].'",';
			$outp .= '"OtherCostDlaIdr":"'. $rs["other_cost_dla_idr"].'",';
			$outp .= '"CashLossIdr":"'. $rs["cashloss_idr_intotal"].'",';
			$outp .= '"CashLossOri":"'. $rs["cashloss_org_intotal"].'",';
		    $outp .= '"Payment Method":"'. $rs["payment_method"].'",';
			$outp .= '"InstalmentNumber":"'. $rs["installment_qty"].'",';
			$outp .= '"UnderwriterDecision":"'. $rs["underwriter_decision"].'",';
			$outp .= '"DivisionDecision":"'. $rs["division_decision"].'",';
			$outp .= '"DirectorDecision":"'. $rs["director_decision"].'",';
			$outp .= '"PresidentDirDecision":"'. $rs["president_dir_decision"].'",';
			$outp .= '"DivisiDescription":"'. $rs["divisi_keterangan"].'",';
			$outp .= '"DirectorDescription":"'. $rs["direktur_keterangan"].'",';
		    $outp .= '"PresidentDescription":"'. $rs["president_keterangan"].'",';
			$outp .= '"UnderwriterDescription":"'. $rs["underwriting_keterangan"].'",';
			$outp .= '"AuditingConfir":"'. $rs["catatan_audit"].'",';
			
			$outp .= '"BillingNumber":"'. $rs["premium_detail_code"].'",';
			$outp .= '"PLADocNumber":"'. $rs["no_dokumen_pla"].'",';
			$outp .= '"DLADocNumber":"'. $rs["no_dokumen_dla"].'",';
			$outp .= '"TechDocNumber":"'. $rs["no_dokumen_tehnik"].'",';
			$outp .= '"TechVoucherNumber":"'. $rs["no_voucher_tehnik"].'",';
			$outp .= '"ExpectedClaimPaid":"'. $rs["tgl_ekspektasi_bayar"].'",';
			$outp .= '"FinancialStatus":"'. $rs["finansial_status"].'",';
			$outp .= '"DateofCase":"'. $rs["tgl_kejadian_klaim"].'",';
			$outp .= '"ApprovePaymentInfull":"'. $rs["approve_payment_infull"].'",';
			$outp .= '"Benficiary":"'. $rs["release_to_beneficiary"].'",';
			$outp .= '"ReserveStatus":"'. $rs["reserve_status"].'",';
			$outp .= '"DueDate":"'. $rs["tgl_realisasi_bayar"].'",';
			$outp .= '"PaymentBankers":"'. $rs["dibayar_lewat_bank"].'",';
			$outp .= '"VoucherBank":"'. $rs["voucher_bank"].'",';
			$outp .= '"ApprovalBeforeSettlement":"'. $rs["approval_before_settlement"].'",';
			$outp .= '"UserEntry":"'. $rs["user_entry"].'",';
			$outp .= '"DocumentNeeded":"'. $rs["related_document_need"].'",';
			$outp .= '"DocumentConfir":"'. $rs["status_surat_konfirmasi"].'",';
			$outp .= '"TransactionList":"'. $rs["nomor_list"].'",';
			$outp .= '"RecoveryStatus":"'. $rs["recovery_status"].'",';
			$outp .= '"ExpectRecoveryDate":"'. $rs["tgl_ekspektasi_recovery_diterima"].'",';
			$outp .= '"VoucherRetro":"'. $rs["no_voucher_retro"].'",';
			$outp .= '"CedantAccumultion":"'. $rs["NOACCUM"].'",';
			$outp .= '"ClaimStatus":"'. $rs["claim_status"].'",';
			$outp .= '"Auditing":"'. $rs["audit"].'",';
			$outp .= '"AuditingDate":"'. $rs["tgl_audit"].'",';

			$outp .= '"IDECheque":"'. $rs["cheque_bilyet_ide"].'",';
			$outp .= '"PremiumDetailCode":"'. $rs["premiumdetail_code"].'",';
			$outp .= '"PayController1":"'. $rs["pay_control1"].'",';
			$outp .= '"PayController2":"'. $rs["pay_control2"].'",';
			$outp .= '"PayController3":"'. $rs["pay_control3"].'",';
			$outp .= '"PayController4":"'. $rs["pay_control4"].'",';
			$outp .= '"Code":"'.$rs["no_client"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);
		break;
	case "ProcessTotClaim":
		$result = $conn->query("SELECT SUM(`readsysmasterclaim`.`pla_original`) AS `pla_original`, SUM(`readsysmasterclaim`.`estimasi_klaim_ceding`) AS `estimasi_klaim_ceding`, SUM(`readsysmasterclaim`.`dla_original`) AS `dla_original`
		FROM `readsysmasterclaim` 
		INNER JOIN `readsysdetailcessieidentityingeneral` on `readsysdetailcessieidentityingeneral`.`reas_no` = `readsysmasterclaim`.`reas_no`
		INNER JOIN `readsyscustomer` on `readsyscustomer`.`no_client` = `readsysdetailcessieidentityingeneral`.`id_holder` ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}		
			$outp .= '{"ClaimPla":"'. $rs["pla_original"].'",';
			$outp .= '"EstimateClaim":"'. $rs["estimasi_klaim_ceding"].'",';
			$outp .= '"ClaimDla":"'. $rs["dla_original"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);
		break;
	case "TreatyAgreement":
		$result = $conn->query("SELECT id_treaty, KETERANGAN, TREATY_SHA, TREATY_KOM, TREATY_RET, TREATY_REK, TREATY_UND, TREATY_LIM, TREATY_LAY, TREATY_R1, TREATY_R2, TREATY_R3, TREATY_R4, TREATY_R5, TREATY_R6, TREATY_R7, TREATY_R8, TREATY_R9, TREATY_R10, TREATY_R11, 
		TGL_ISSUE, TGL_TERMINATE, KEY_KOMISI, KEY_UNDLIM, KEY_LAYER, KEY_RETENS, KEY_SHARE, KEY_COMR, METODE_REA, KEY_OVERRI, TREATY_OV, 
		TREATY_PC, TREATY_FD, struktur_reasuransi, tipe_proporsional, metode_administrasi_reasuransi, administrator, status_treaty, metode_proporsional, 
		TREATY_VD, Document, age_limits, joint_age_calculation, mortality_limit, automatic_binding_limit, direct_retro, jenis_produk_dicover, 
		teritory, age_limits_atas, catatan_negosiasi FROM readsysmastertreaty $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Code":"'. $rs["id_treaty"].'",';
			$outp .= '"TREATYLAYER":"'. $rs["TREATY_LAY"].'",';
			$outp .= '"TREATYSHARE":"'. $rs["TREATY_SHA"].'",';
			$outp .= '"TREATYCOMISSION":"'. $rs["TREATY_KOM"].'",';
			$outp .= '"TREATYRETENTION":"'. $rs["TREATY_RET"].'",';
			$outp .= '"TREATYRECAPTURE":"'. $rs["TREATY_REK"].'",';
			$outp .= '"TREATYUNDERWRITING":"'. $rs["TREATY_UND"].'",';
			$outp .= '"TREATY_LIMIT":"'. $rs["TREATY_LIM"].'",';
			$outp .= '"TREATYPROFITCOMMISSION":"'. $rs["TREATY_PC"].'",';
			$outp .= '"TREATYFLEEDDISCOUNT":"'. $rs["TREATY_FD"].'",';
			$outp .= '"TREATYVOLUMEDISCOUNT":"'. $rs["TREATY_VD"].'",';
			$outp .= '"TREATYOVERRIDING":"'. $rs["TREATY_OV"].'",';
			$outp .= '"TREATYR1":"'. $rs["TREATY_R1"].'",';
			$outp .= '"TREATYR2":"'. $rs["TREATY_R2"].'",';
			$outp .= '"TREATYR3":"'. $rs["TREATY_R3"].'",';
			$outp .= '"TREATYR4":"'. $rs["TREATY_R4"].'",';
			$outp .= '"TREATYR5":"'. $rs["TREATY_R5"].'",';
			$outp .= '"TREATYR6":"'. $rs["TREATY_R6"].'",';
			$outp .= '"TREATYR7":"'. $rs["TREATY_R7"].'",';
			$outp .= '"TREATYR8":"'. $rs["TREATY_R8"].'",';
			$outp .= '"TREATYR9":"'. $rs["TREATY_R9"].'",';
			$outp .= '"TREATYR10":"'. $rs["TREATY_R10"].'",';
			$outp .= '"TREATYR11":"'. $rs["TREATY_R11"].'",';
			$outp .= '"KEYKOMISI":"'. $rs["KEY_KOMISI"].'",';
			$outp .= '"KEYUNDLIMIT":"'. $rs["KEY_UNDLIM"].'",';
			$outp .= '"KEYLAYER":"'. $rs["KEY_LAYER"].'",';
			$outp .= '"KEYRETENSI":"'. $rs["KEY_RETENS"].'",';
			$outp .= '"KEYSHARE":"'. $rs["KEY_SHARE"].'",';
			$outp .= '"KEYRETROCOMMISSION":"'. $rs["KEY_COMR"].'",';
			$outp .= '"METODEREASURANSI":"'. $rs["METODE_REA"].'",';
			$outp .= '"KEY_OVERRIDING":"'. $rs["KEY_OVERRI"].'",';
 
			$outp .= '"TGLISSUE":"'. $rs["TGL_ISSUE"].'",';
			$outp .= '"TGLTERMINATE":"'. $rs["TGL_TERMINATE"].'",';
			$outp .= '"ReinsuranceStructures":"'. $rs["struktur_reasuransi"].'",';
			$outp .= '"TypeProporsional":"'. $rs["tipe_proporsional"].'",';
			$outp .= '"MetodeAdministrasiReasuransi":"'. $rs["metode_administrasi_reasuransi"].'",';
			$outp .= '"Administrator":"'. $rs["administrator"].'",';
			$outp .= '"StatusTreaty":"'. $rs["status_treaty"].'",';
			$outp .= '"MetodeProporsional":"'. $rs["metode_proporsional"].'",';
			$outp .= '"Document":"'. $rs["Document"].'",';
			$outp .= '"AgeLimits":"'. $rs["age_limits"].'",';
			$outp .= '"JointAgeCalculation":"'. $rs["joint_age_calculation"].'",';
			$outp .= '"MortalityLimit":"'. $rs["mortality_limit"].'",';
			$outp .= '"AutomaticBindingLimit":"'. $rs["automatic_binding_limit"].'",';
			$outp .= '"DirectRetro":"'. $rs["direct_retro"].'",';
			$outp .= '"JenisProdukDicover":"'. $rs["jenis_produk_dicover"].'",';
			$outp .= '"Teritory":"'. $rs["teritory"].'",';
			$outp .= '"AgeLimitsAtas":"'. $rs["age_limits_atas"].'",';
			$outp .= '"CatatanNegosiasi":"'. $rs["catatan_negosiasi"].'",';
			$outp .= '"Description":"'.$rs["KETERANGAN"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);
		break;
	case "TransactionsBiz":
		$result = $conn->query("SELECT readsyscustomer.ceding, ReadsYsBillingTransaction.no_client, COALESCE(SUM(ReadsYsBillingTransaction.transaksi_newbusiness + ReadsYsBillingTransaction.transaksi_renewal + ReadsYsBillingTransaction.transaksi_alterasi - ReadsYsBillingTransaction.transaksi_klaim ),0) AS transaksi,
		COALESCE(SUM(ReadsYsBillingTransaction.transaksi_newbusiness)) AS transaksi_newbusiness, COALESCE(SUM(ReadsYsBillingTransaction.transaksi_renewal)) AS transaksi_renewal, COALESCE(SUM(ReadsYsBillingTransaction.transaksi_alterasi)) AS transaksi_alterasi, COALESCE(SUM(transaksi_klaim)) AS transaksi_klaim
		FROM ReadsYsBillingTransaction 
		RIGHT OUTER JOIN readsyscustomer on readsyscustomer.no_client = ReadsYsBillingTransaction.no_client 
		$constrain GROUP BY readsyscustomer.ceding, ReadsYsBillingTransaction.no_client ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Customer":"'. $rs["ceding"].'",';
			$outp .= '"Code":"'. $rs["no_client"].'",';
			$outp .= '"NewBusiness":"'. $rs["transaksi_newbusiness"].'",';
			$outp .= '"Renewal":"'. $rs["transaksi_renewal"].'",';
			$outp .= '"Alteration":"'. $rs["transaksi_alterasi"].'",';
			$outp .= '"Claim":"'. $rs["transaksi_klaim"].'",';
			$outp .= '"Transaction":"'.$rs["transaksi"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);
		break; 
	case "TransactionsBiT":
		$result = $conn->query("SELECT readsyscustomer.ceding, ReadsYsBillingTransaction.no_client, COALESCE(SUM(ReadsYsBillingTransaction.transaksi_newbusiness + ReadsYsBillingTransaction.transaksi_renewal + ReadsYsBillingTransaction.transaksi_alterasi - ReadsYsBillingTransaction.transaksi_klaim ),0) AS transaksi,
		COALESCE(SUM(ReadsYsBillingTransaction.transaksi_newbusiness)) AS transaksi_newbusiness, COALESCE(SUM(ReadsYsBillingTransaction.transaksi_renewal)) AS transaksi_renewal, COALESCE(SUM(ReadsYsBillingTransaction.transaksi_alterasi)) AS transaksi_alterasi, COALESCE(SUM(transaksi_klaim)) AS transaksi_klaim
		FROM ReadsYsBillingTransaction 
		RIGHT OUTER JOIN readsyscustomer on readsyscustomer.no_client = ReadsYsBillingTransaction.no_client $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
			$outp .= '{"Customer":"'. $rs["ceding"].'",';
			$outp .= '"Code":"'. $rs["no_client"].'",';
			$outp .= '"NewBusiness":"'. $rs["transaksi_newbusiness"].'",';
			$outp .= '"Renewal":"'. $rs["transaksi_renewal"].'",';
			$outp .= '"Alteration":"'. $rs["transaksi_alterasi"].'",';
			$outp .= '"Claim":"'. $rs["transaksi_klaim"].'",';
			$outp .= '"Transaction":"'.$rs["transaksi"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);
		break;
	default:
		echo "Not part of allowable access!";
};
?>
