//window.location.reload();
var app = angular.module('accountBillingApp', []);
var d = new Date(), $mTahun, $whereClause, $month, $customer, nomorBilling=0, showMeNewBusiness=false, showMeDefaultTabelBody=true, showMeRenewalBusiness=false, showMeAlteration=false, showMeTermination=false, showMeRelatedCessie=false, showme2=false, showme3=false, showme4=false;
var months = ["January","February","March","April","May","June","July","August","September","October", "November", "December"];
$mTahun = d.getFullYear();

app.controller("accountControl", ['$scope', '$http', function($scope, $http) {
	const searchParams = new URLSearchParams(window.location.search);
	$scope.searchingDetailOfBilling=searchParams.get("searchingDetailOfBilling");
	if($scope.searchingDetailOfBilling)
		console.log($scope.searchingDetailOfBilling);
	//else
	//	console.log("its string");
	$scope.showMe1=false; 
	$scope.showMe2=false; 
	$scope.showMeTabelBillingJobs=true; 
	$scope.howMeTabelCountingBillingJobs=false;
	$scope.reverse = true;
	$scope.showMeNewBusiness=false;
	$scope.showMeRenewal=false;
	$scope.showMeAlteration=false;
	$scope.showMeClaim=false;
	$scope.showMeBillingTable=false;
	$scope.showMeJobCalculatingTable=false;
	$mTahun = d.getFullYear()-4;
	$whereClause = " WHERE tahun > " + $mTahun;
	$http.get("AccountBillingMySqlCommand.php?q="+ "Years5CustomerA" + $whereClause).then(function (response) {$scope.billingData = response.data.records;});
	$http.get("AccountBillingMySqlCommand.php?q="+ "Years5CustomerT" + $whereClause).then(function (response) {$scope.billingTData = response.data.records;});	
    $scope.fungsiBillingActivateMasterPolicyModal = function(nomorReas) {    
        angular.element(masterPolicyModal).modal("show");
	};
	$scope.fungsiAlteration = function() {
		$mTahun = d.getFullYear()-4;
		document.getElementById("topikMyJobs").innerHTML = "Alteration Topic";
		document.getElementById("topikMyBillingJobs").innerHTML = "";
		$whereClause = " WHERE (ReadsYsJobs.ditujukan_untuk='Alteration Reinsurance') AND (ReadsYsJobs.status_kontrol = 'On Going Process')" + " AND (Year(ReadsYsJobs.tgl_buat)> " + $mTahun + ") ";
		$http.get("AccountMySqlCommand.php?q="+ "AlterationBills" + $whereClause).then(function (response) {$scope.listTransactionData = response.data.records;});
	};
	$scope.fungsiCalculateBillingTransaction = function() {
		angular.element(billingProcessingModal).modal("show");
	};
	$scope.fungsiCalculatingJobsToBeBilling = function() {
		$mTahun = d.getFullYear();
		$scope.showMeJobCalculatingTable=true;
		$whereClause = " WHERE (ReadsYsJobs.field_multi_fungsi3 = 'Billing " + months[d.getMonth()] + " " + $mTahun + "') AND (ReadsYsJobs.status_kontrol = 'On Going Process') ";
		$http.get("AccountMySqlCommand.php?q="+ "CustomerBilling" + $whereClause).then(function (response) {$scope.countCustomerBillingData = response.data.records;});
		$http.get("AccountMySqlCommand.php?q="+ "TotCustomerBill" + $whereClause).then(function (response) {$scope.countCustomerBillingTData = response.data.records;});
		document.getElementById("panelCountingJobs").innerHTML = "Period: " + months[d.getMonth()] + " " + $mTahun ;
	};

	$scope.fungsiClaimTransactions = function() {
		$mTahun = d.getFullYear()-4;
		document.getElementById("topikMyJobs").innerHTML = "Claim Topic";
		document.getElementById("topikMyBillingJobs").innerHTML = "";
		$whereClause = " WHERE (ReadsYsJobs.ditujukan_untuk='Claim Reinsurance') AND (ReadsYsJobs.status_kontrol = 'On Going Process')" + " AND (Year(ReadsYsJobs.tgl_buat)> " + $mTahun + ") ";
		$http.get("AccountMySqlCommand.php?q="+ "ClaBusinesBills" + $whereClause).then(function (response) {$scope.listTransactionData = response.data.records;});
	};
	$scope.fungsiColectAndShowCustomer = function() {
		$http.get("CustomerMySqlCommand.php?q=").then(function (response) {$scope.listCustomerData = response.data.records;});
	};
	$scope.fungsiColectCessieAlterations = function(nomorBilling) {
		$whereClause = " WHERE (`readsyswarehousetransaksipremi`.`billing_no` =" + nomorBilling + ") AND (`readsyswarehousetransaksipremi`.`type_of_transaction` = 'AlterationTrans')" ;
		$http.get("AccountBillingMySqlCommand.php?q="+ "BillingTransact" + $whereClause).then(function (response) {$scope.alterationData = response.data.records;});
		$http.get("AccountBillingMySqlCommand.php?q="+ "TotalBillingRow" + $whereClause).then(function (response) {$scope.alterationTData = response.data.records;});
	};
	$scope.fungsiColectCessieClaims = function(nomorBilling) {
		$whereClause = " WHERE (`readsyswarehousetransaksipremi`.`billing_no` =" + nomorBilling + ") AND (`readsyswarehousetransaksipremi`.`type_of_transaction` = 'ClaimTransactio')" ;
		$http.get("AccountBillingMySqlCommand.php?q="+ "BillingTransact" + $whereClause).then(function (response) {$scope.claimData = response.data.records;});
		$http.get("AccountBillingMySqlCommand.php?q="+ "TotalBillingRow" + $whereClause).then(function (response) {$scope.claimsTData = response.data.records;});
	};
	$scope.fungsiColectCessieForBilling = function(nomorJob) {
		document.getElementById("panelCountingJobs").innerHTML = nomorJob;
		$whereClause = " WHERE `readsysdetailcessieidentityingeneral`.`nomor_job` =" + nomorJob 
		$http.get("AccountBillingMySqlCommand.php?q="+ "BillingTransact" + $whereClause).then(function (response) {$scope.cessieRelatedBillingData = response.data.records;});
		$http.get("AccountBillingMySqlCommand.php?q="+ "TotalBillingRow" + $whereClause).then(function (response) {$scope.newBusinessTData = response.data.records;});
		
	};
	$scope.fungsiColectCessieNewBusiness = function(nomorBilling) {
		$whereClause = " WHERE (`readsyswarehousetransaksipremi`.`billing_no` =" + nomorBilling + ") AND (`readsyswarehousetransaksipremi`.`type_of_transaction` = 'New Business')" ;
		$http.get("AccountBillingMySqlCommand.php?q="+ "BillingTransact" + $whereClause).then(function (response) {$scope.newBusinessData = response.data.records;});
		$http.get("AccountBillingMySqlCommand.php?q="+ "TotalBillingRow" + $whereClause).then(function (response) {$scope.newBusinessTData = response.data.records;});
	};
	$scope.fungsiColectCessieRenewal = function(nomorBilling,index) {
		var set='renewalData' + index;
		$scope.dataset=set
		document.getElementById("kendali").innerHTML = dataset
		$whereClause = " WHERE (`readsyswarehousetransaksipremi`.`billing_no` =" + nomorBilling + ") AND (`readsyswarehousetransaksipremi`.`type_of_transaction` = 'RenewalBusiness')" ;
		$http.get("AccountBillingMySqlCommand.php?q="+ "BillingTransact" + $whereClause).then(function (response) {$scope.dataset = response.data.records;});
		$http.get("AccountBillingMySqlCommand.php?q="+ "TotalBillingRow" + $whereClause).then(function (response) {$scope.renewalTData = response.data.records;});
	};
	$scope.fungsiCountingJob = function(noCustomer,noJob) {
		$mTahun = d.getFullYear()-4;
		$whereClause = " WHERE (tahun > " + $mTahun + ") AND (no_client = " + noCustomer + ") ";
		$http.get("AccountBillingMySqlCommand.php?q="+ "Years5Customer1" + $whereClause).then(function (response) {$scope.billing2Data = response.data.records;});	
		$http.get("AccountBillingMySqlCommand.php?q="+ "Years5CustomerT" + $whereClause).then(function (response) {$scope.billingTData = response.data.records;});	
	};
	$scope.fungsiCountingJobs = function(noCustomer,mCustomer) {
		$mTahun = d.getFullYear()-4;
		$whereClause = " WHERE (tahun > " + $mTahun + ") AND (no_client = " + noCustomer + ") ";
		$http.get("AccountBillingMySqlCommand.php?q="+ "Years5Customer1" + $whereClause).then(function (response) {$scope.billing2Data = response.data.records;});	
		$http.get("AccountBillingMySqlCommand.php?q="+ "Years5CustomerT" + $whereClause).then(function (response) {$scope.billingTData = response.data.records;});	
	};
	$scope.fungsiCustomerSubLedger = function() {
		$mTahun = d.getFullYear();
		$scope.customerSubLedger=true; 
		$scope.listOfFas=false;
		$scope.listOfCsl=true;
		$customer=document.getElementById("panelCountingJobs").innerHTML;
		$whereClause = " WHERE (tahun = " + $mTahun + ") AND (customer = '" + $customer + "') ";
		$http.get("AccountBillingMySqlCommand.php?q="+ "CustomerSubledg" + $whereClause).then(function (response) {$scope.cslData = response.data.records;});
	};
	$scope.fungsiListOfFAS = function() {
		$mTahun = d.getFullYear();
		$scope.listOfFas=true;
		$scope.listOfCsl=false;
		$whereClause = " WHERE ReadsYsBillingTransaction.`tahun` = " + $mTahun;
		$http.get("AccountMySqlCommand.php?q="+ "ListOfFinanceAS" + $whereClause).then(function (response) {$scope.listFasData = response.data.records;});
		$http.get("AccountMySqlCommand.php?q="+ "ListOfFinanceAT" + $whereClause).then(function (response) {$scope.listFasTotalData = response.data.records;});
	};
	$scope.fungsiNewBusiness = function() {	
		$scope.showMeNewBusiness=true;
		$scope.showMeRenewal=false;
		$scope.showMeAlteration=false;
		$scope.showMeClaim=false;
		$scope.showMeBillingTable=true;
		document.getElementById("topikMyJobs").innerHTML = "New Biz Topic";
		$whereClause = " WHERE (ReadsYsJobs.ditujukan_untuk='New Business') AND (ReadsYsJobs.status_kontrol = 'On Going Process')" + " AND (Year(ReadsYsJobs.tgl_buat)> " + $mTahun + ") ";
		$http.get("AccountMySqlCommand.php?q="+ "NewBusinesBills" + $whereClause).then(function (response) {$scope.listTransactionData = response.data.records;});
	};	
	$scope.fungsiOrderByBillingDataField = function(y) {
        $scope.billingOrderBy = y;
    };
	$scope.fungsiOrderByNewBusinesDataField = function(ny) {
        $scope.newBusinessOrderBy = ny;
    };
	$scope.fungsiOrderByRenewalDataField = function(ry) {
        $scope.myOrderBy = ry;
    };
	$scope.fungsiRenewal = function() {
		$mTahun = d.getFullYear()-4;
		document.getElementById("topikMyJobs").innerHTML = "Renewal Topic";
		$whereClause = " WHERE (ReadsYsJobs.ditujukan_untuk='Inforce Reinsurance') AND (ReadsYsJobs.status_kontrol = 'On Going Process')" + " AND (Year(ReadsYsJobs.tgl_buat)> " + $mTahun + ") ";
		$http.get("AccountMySqlCommand.php?q="+ "RenewalBizBills" + $whereClause).then(function (response) {$scope.listTransactionData = response.data.records;});
	};
	$scope.fungsiSetClickedRow = function(index){
		$scope.selectedRow = index;
	};
	$scope.fungsiSetClickedRowN = function(index1){
		$scope.selectedRow = index1;
	};
	$scope.fungsiShowBillingJobDetail = function(noJob) {
		document.getElementById("modalBillingDetail").innerHTML = document.getElementById("topikMyJobs").innerHTML + " Job#" + noJob;
		document.getElementById("modalBillingDetailDate").innerHTML = "Date: " + document.getElementById("jobDate").innerHTML;
		document.getElementById("modalBillingDetailTopik").innerHTML = "Topic: " + document.getElementById("jobTopik").innerHTML;
		document.getElementById("modalBillingDetailCustomer").innerHTML = "Customer: " + document.getElementById("jobCustomer").innerHTML;
		document.getElementById("modalBillingDetailFileName").innerHTML = "File Name: " + document.getElementById("jobFileName").innerHTML;
		document.getElementById("modalBillingDetailSOAPL").innerHTML = "SOA-PL#: " + document.getElementById("jobSOAPL").innerHTML;
	};
	$scope.fungsiShowCustomer = function(customer) {
		document.getElementById("panelCountingJobs").innerHTML	= customer
		document.getElementById("judulCsl").innerHTML = "CSL: " + customer
	};
	$scope.fungsiShowFASDetail = function() {
		document.getElementById("modalfasCustomer").innerHTML = "FAS: " + document.getElementById("fasCustomer").innerHTML;
		document.getElementById("modalfasBeginingBalance").innerHTML = "Begining Balance" + document.getElementById("fasBeginingBalance").innerHTML;
		document.getElementById("modalfasNewBusinesFas").innerHTML = "New Business Transaction: " + document.getElementById("fasNewBusinesFas").innerHTML;
		document.getElementById("modalfasRenewalFas").innerHTML = "Renewal Transaction: " + document.getElementById("fasRenewalFas").innerHTML;
		document.getElementById("modalfasAlterationFas").innerHTML = "Alteration  Transaction: " + document.getElementById("fasAlterationFas").innerHTML;
		document.getElementById("modalfasClaimFas").innerHTML = "Claim Transaction: " + document.getElementById("fasClaimFas").innerHTML;
		document.getElementById("modalfasYourPayment").innerHTML = "Your Payment: " + document.getElementById("fasYourPayment").innerHTML;
		document.getElementById("modalfasOurPayment").innerHTML = "Our Payment: " + document.getElementById("fasOurPayment").innerHTML;
		document.getElementById("modalfasEndingBalance").innerHTML = "Ending Balance: " + document.getElementById("fasEndingBalance").innerHTML;
	};
	$scope.fungsiTermination = function() {
		$mTahun = d.getFullYear()-4;
		document.getElementById("topikMyJobs").innerHTML = "Termination Topic"
		document.getElementById("topikMyBillingJobs").innerHTML = "";
		$whereClause = "WHERE (ReadsYsJobs.ditujukan_untuk='Automatic T. Reinsurance' OR ReadsYsJobs.ditujukan_untuk='EDT Terminate Reinsurance')" + " AND (ReadsYsJobs.status_kontrol='Terminated') " + " AND (Year(ReadsYsJobs.tgl_buat)> " + $mTahun + ") ";
		$http.get("AccountMySqlCommand.php?q="+ "TerminationBill" + $whereClause).then(function (response) {$scope.listTransactionData = response.data.records;});
	};
}]);

