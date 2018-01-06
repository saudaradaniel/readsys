 <?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "reasuransi");
$selectedProcessing = $_REQUEST["q"];
$mtahun = date("Y");
switch ($selectedProcessing) {
    case "Assets Valuation $mtahun":
        $queryConstrain = " WHERE tahun = $mtahun AND ApplicationIDD='Asset Valuation'"; 	
        break;
    case "Assets Valuation $mtahun-1": 
        $queryConstrain = " WHERE tahun = $mtahun-1 AND ApplicationIDD='Asset Valuation'";
        break;
    case "Assets Valuation $mtahun-2":
        $queryConstrain = " WHERE tahun = $mtahun-2 AND ApplicationIDD='Asset Valuation'";
        break;
	case "Assets Valuation $mtahun-3": 
        $queryConstrain = " WHERE tahun = $mtahun-3 AND ApplicationIDD='Asset Valuation'";
        break;
    case "Assets Valuation $mtahun-4":
        $queryConstrain = " WHERE tahun = $mtahun-4 AND ApplicationIDD='Asset Valuation'";
        break;
    case "Liabilities Valuation $mtahun":
        $queryConstrain = " WHERE tahun = $mtahun AND ApplicationIDD='Liabilities Valuation'"; 	
        break;
    case "Liabilities Valuation $mtahun-1": 
        $queryConstrain = " WHERE tahun = $mtahun-1 AND ApplicationIDD='Liabilities Valuation'";
        break;
    case "Liabilities Valuation $mtahun-2":
        $queryConstrain = " WHERE tahun = $mtahun-2 AND ApplicationIDD='Liabilities Valuation'";
        break;
	case "Liabilities Valuation $mtahun-3": 
        $queryConstrain = " WHERE tahun = $mtahun-3 AND ApplicationIDD='Liabilities Valuation'";
        break;
    case "Liabilities Valuation $mtahun-4":
        $queryConstrain = " WHERE tahun = $mtahun-4 AND ApplicationIDD='Liabilities Valuation'";
        break;
	    case "Liabilities Valuation $mtahun":
        $queryConstrain = " WHERE tahun = $mtahun AND ApplicationIDD='Liabilities Valuation'"; 	
        break;
    case "Premium Valuation $mtahun": 
        $queryConstrain = " WHERE tahun = $mtahun AND ApplicationIDD='Premium Valuation'";
        break;
    case "Premium Valuation $mtahun-1": 
        $queryConstrain = " WHERE tahun = $mtahun-1 AND ApplicationIDD='Premium Valuation'";
        break;
    case "Premium Valuation $mtahun-2":
        $queryConstrain = " WHERE tahun = $mtahun-2 AND ApplicationIDD='Premium Valuation'";
        break;
	case "Premium Valuation $mtahun-3": 
        $queryConstrain = " WHERE tahun = $mtahun-3 AND ApplicationIDD='Premium Valuation'";
        break;
    case "Premium Valuation $mtahun-4":
        $queryConstrain = " WHERE tahun = $mtahun-4 AND ApplicationIDD='Premium Valuation'";
        break;	
    default:
        $queryConstrain = " WHERE tahun = 0 ";
};

$result = $conn->query("SELECT penjelasan_analisis FROM readsysstatisticsdescription $queryConstrain ");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	if ($outp != "") {$outp .= ",";}
		$outp .= '{"Description":"'.  $rs["penjelasan_analisis"]. '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);

?>