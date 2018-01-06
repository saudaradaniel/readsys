<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
session_start();
$constrain="TreatyOfCustome WHERE no_client = 26 "; 
$conn = mysqli_connect("localhost", "root", "", "reasuransi");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
};
$constrain=$_REQUEST["q"];
$swiching=substr($constrain,0,15);
$constrain=substr($constrain,15);
switch ($swiching) {
	case "CompanyTreatyDo":
		$result = $conn->query("SELECT COUNT(`readsysmastertreaty`.`id_treaty`) AS banyakTreaty, `readsyscustomer`.`ceding`, `readsysmastertreaty`.`no_client`  
		FROM `readsysmastertreaty` 
		INNER JOIN `readsyscustomer` on `readsyscustomer`.`no_client` = `readsysmastertreaty`.no_client GROUP BY `readsyscustomer`.`ceding`, `readsysmastertreaty`.`no_client` ORDER BY `readsyscustomer`.`ceding` ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
				$outp .= '{"Customers":"'. $rs["ceding"].'",';
				$outp .= '"CustomerCode":"'.$rs["no_client"].'",';													
				$outp .= '"NumbersOfTreaty":"'.$rs["banyakTreaty"].'"}';
		};						
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break;
	case "CompanyTreatyTo":
		$result = $conn->query("SELECT COUNT(`readsysmastertreaty`.`id_treaty`) AS banyakTreaty  
		FROM `readsysmastertreaty` ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}													
				$outp .= '{"NumbersOfTreaties":"'.$rs["banyakTreaty"].'"}';
		};						
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break;
	case "TreatyDocumData":
		$result = $conn->query("SELECT `id_treaty`, `no_client`, `KETERANGAN`, `TREATY_SHA`, `TREATY_KOM`, `TREATY_RET`, `TREATY_REK`, `TREATY_UND`, `TREATY_LIM`, `TREATY_LAY`, `TREATY_R1`, `TREATY_R2`, `TREATY_R3`, `TREATY_R4`, `TREATY_R5`, `TREATY_R6`, `TREATY_R7`, `TREATY_R8`, `TREATY_R9`, `TREATY_R10`, `TREATY_R11`, `TGL_ISSUE`, `TGL_TERMINATE`, `KEY_KOMISI`, `KEY_UNDLIM`, `KEY_LAYER`, `KEY_RETENS`, `KEY_SHARE`, `KEY_COMR`, `METODE_REA`, `KEY_OVERRI`, `TREATY_OV`, `TREATY_PC`, `TREATY_FD`, `struktur_reasuransi`, `tipe_proporsional`, `metode_administrasi_reasuransi`, `administrator`, `status_treaty`, `metode_proporsional`, `TREATY_VD`, `Document`, `age_limits`, `joint_age_calculation`, `mortality_limit`, `automatic_binding_limit`, `direct_retro`, `jenis_produk_dicover`, `teritory`, `age_limits_atas`, `catatan_negosiasi` FROM `readsysmastertreaty` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
				$outp .= '{"Administrator":"'. $rs["administrator"].'",';
				$outp .= '"AdministrationMethodOfReinsurance":"'.$rs["metode_administrasi_reasuransi"].'",';
				$outp .= '"AutomaticBindingLimit":"'. $rs["automatic_binding_limit"].'",';												
				$outp .= '"Customer":"'.$rs["no_client"].'",';
				$outp .= '"DirectRetrocession":"'. $rs["direct_retro"].'",';				
				$outp .= '"Document":"'.$rs["Document"].'",';	
				$outp .= '"ExtraMortalityLimit":"'. $rs["mortality_limit"].'",';							
				$outp .= '"IssueDate":"'.$rs["TGL_ISSUE"].'",';	
				$outp .= '"JoinLifeCalculation":"'.$rs["joint_age_calculation"].'",';					
				$outp .= '"KeyCommissionRetention":"'.$rs["KEY_COMR"].'",';	
				$outp .= '"KeyLayer":"'.$rs["KEY_LAYER"].'",';
				$outp .= '"KeyOverriding":"'. $rs["KEY_OVERRI"].'",';					
				$outp .= '"KeyRetention":"'.$rs["KEY_RETENS"].'",';				
				$outp .= '"KeyShare":"'.$rs["KEY_SHARE"].'",';							
				$outp .= '"KeyUnderwritingLimit":"'.$rs["KEY_UNDLIM"].'",';	
				$outp .= '"MaximumAge":"'. $rs["age_limits_atas"].'",';											
				$outp .= '"MethodReinsurance":"'.$rs["METODE_REA"].'",';
				$outp .= '"MinimumAge":"'.$rs["age_limits"].'",';
				$outp .= '"Notes":"'. $rs["catatan_negosiasi"].'",';				
				$outp .= '"ProductToCover":"'. $rs["jenis_produk_dicover"].'",';									
				$outp .= '"ProportionalMethod":"'.$rs["metode_proporsional"].'",';					
				$outp .= '"ReinsuranceStructure":"'.$rs["struktur_reasuransi"].'",';
				$outp .= '"StatusOfTreaty":"'. $rs["status_treaty"].'",';																
				$outp .= '"TerminationDate":"'.$rs["TGL_TERMINATE"].'",';
				$outp .= '"Teritory":"'. $rs["teritory"].'",';
				$outp .= '"Topics":"'.$rs["KETERANGAN"].'",';																				
				$outp .= '"TreatyCommission":"'.$rs["TREATY_KOM"].'",';
				$outp .= '"TreatyFleedDiscount":"'.$rs["TREATY_FD"].'",';				
				$outp .= '"TreatyLayer":"'.$rs["TREATY_LAY"].'",';
				$outp .= '"TreatyNumber":"'.$rs["id_treaty"].'",';								
				$outp .= '"TreatyOverriding":"'.$rs["TREATY_OV"].'",';
				$outp .= '"TreatyProfitCommission":"'. $rs["TREATY_PC"].'",';								
				$outp .= '"TreatyR1":"'.$rs["TREATY_R1"].'",';
				$outp .= '"TreatyR2":"'.$rs["TREATY_R2"].'",';
				$outp .= '"TreatyR3":"'.$rs["TREATY_R3"].'",';				
				$outp .= '"TreatyR4":"'.$rs["TREATY_R4"].'",';
				$outp .= '"TreatyR5":"'.$rs["TREATY_R5"].'",';
				$outp .= '"TreatyR6":"'.$rs["TREATY_R6"].'",';				
				$outp .= '"TreatyR7":"'.$rs["TREATY_R7"].'",';
				$outp .= '"TreatyR8":"'.$rs["TREATY_R8"].'",';
				$outp .= '"TreatyR9":"'.$rs["TREATY_R9"].'",';
				$outp .= '"TreatyR10":"'.$rs["TREATY_R10"].'",';				
				$outp .= '"TreatyR11":"'.$rs["TREATY_R11"].'",';								
				$outp .= '"TreatyRecapture":"'.$rs["TREATY_REK"].'",';				
				$outp .= '"TreatyRetention":"'.$rs["TREATY_RET"].'",';								
				$outp .= '"TreatyUnderwritingLimit":"'.$rs["TREATY_LIM"].'",';	
				$outp .= '"TreatyUnderwritingRequirement":"'.$rs["TREATY_UND"].'",';
				$outp .= '"TreatyVolumeDiscount":"'. $rs["TREATY_VD"].'",';				
				$outp .= '"TypeOfProportional":"'. $rs["tipe_proporsional"].'"}';
		};
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break;
	case "TreatyOfCustome":	
		$result = $conn->query("SELECT `id_treaty`, `no_client`, `KETERANGAN`, `TGL_TERMINATE`, `TGL_ISSUE` FROM `readsysmastertreaty` $constrain ");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			if ($outp != "") {$outp .= ",";}
				$outp .= '{"TreatyNumber":"'. $rs["id_treaty"].'",';
				$outp .= '"Topics":"'.$rs["KETERANGAN"].'",';					
				$outp .= '"CustomerCode":"'.$rs["no_client"].'",';
				$outp .= '"IssueDate":"'.$rs["TGL_ISSUE"].'",';																	
				$outp .= '"TerminationDate":"'.$rs["TGL_TERMINATE"].'"}';
		};						
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		echo($outp);		
		break;
	default:
			echo "Not part of allowable access!";
};
?>
