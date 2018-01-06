<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "reasuransi");
$selectedProcessing = $_REQUEST["q"];
$mtahun = date("Y");

switch ($selectedProcessing) {
    case "Assets Valuation $mtahun":
        $queryConstrain = " WHERE tahun = $mtahun AND SUBSTRING(Kodasi,1,1)='1'"; 	
        break;
    case "Assets Valuation $mtahun-1": 
        $queryConstrain = " WHERE tahun = $mtahun-1 AND SUBSTRING(Kodasi,1,1)='1'";
        break;
    case "Assets Valuation $mtahun-2":
        $queryConstrain = " WHERE tahun = $mtahun-2 AND SUBSTRING(Kodasi,1,1)='1'";
        break;
	case "Assets Valuation $mtahun-3": 
        $queryConstrain = " WHERE tahun = $mtahun-3 AND SUBSTRING(Kodasi,1,1)='1'";
        break;
    case "Assets Valuation $mtahun-4":
        $queryConstrain = " WHERE tahun = $mtahun-4 AND SUBSTRING(Kodasi,1,1)='1'";
        break;
	case "Liabilities Valuation $mtahun":
        $queryConstrain = " WHERE tahun = $mtahun AND SUBSTRING(Kodasi,1,1)='2'"; 	
        break;
    case "Liabilities Valuation $mtahun-1": 
        $queryConstrain = " WHERE tahun = $mtahun-1 AND SUBSTRING(Kodasi,1,1)='2'";
        break;
    case "Liabilities Valuation $mtahun-2":
        $queryConstrain = " WHERE tahun = $mtahun-2 AND SUBSTRING(Kodasi,1,1)='2'";
        break;
	case "Liabilities Valuation $mtahun-3": 
        $queryConstrain = " WHERE tahun = $mtahun-3 AND SUBSTRING(Kodasi,1,1)='2'";
        break;
    case "Liabilities Valuation $mtahun-4":
        $queryConstrain = " WHERE tahun = $mtahun-4 AND SUBSTRING(Kodasi,1,1)='2'";
        break;
    case "Premium Valuation $mtahun":
        $queryConstrain = " WHERE tahun = $mtahun AND SUBSTRING(Kodasi,1,1)='3'"; 	
        break;
    case "Premium Valuation $mtahun-1": 
        $queryConstrain = " WHERE tahun = $mtahun-1 AND SUBSTRING(Kodasi,1,1)='3'";
        break;
    case "Premium Valuation $mtahun-2":
        $queryConstrain = " WHERE tahun = $mtahun-2 AND SUBSTRING(Kodasi,1,1)='3'";
        break;
	case "Premium Valuation $mtahun-3": 
        $queryConstrain = " WHERE tahun = $mtahun-3 AND SUBSTRING(Kodasi,1,1)='3'";
        break;
    case "Premium Valuation $mtahun-4":
        $queryConstrain = " WHERE tahun = $mtahun-4 AND SUBSTRING(Kodasi,1,1)='3'";
        break;

    default:
        $queryConstrain = " WHERE tahun = 0 ";
};

$result = $conn->query("SELECT `tahun`, SUM(`Opening` + `DOpening` + `Debit01`+ `Debit02` + `Debit03` + `Debit04` + `Debit05` + `Debit06` + `Debit07` + `Debit08`+ `Debit09` + `Debit10` + `Debit11` +  `Debit12`) AS debet, 
SUM(`COpening` + `Credit01` +  `Credit02` + `Credit03`+`Credit04` +`Credit05` + `Credit06` + `Credit07` + `Credit08` + `Credit09` + `Credit10` + `Credit11` + `Credit12`) AS kredit FROM `readsysgeneralledger` $queryConstrain GROUP BY `tahun` ");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	if ($outp != "") {$outp .= ",";}
	$outp .= '{"Debit":"'.    $rs["debet"]. '",';
	$outp .= '"Credit":"'.    $rs["kredit"]. '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);

?>