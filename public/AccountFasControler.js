//window.location.reload();
var app = angular.module('accountFasApp', []);
var d = new Date(), $mTahun, $whereClause, $month, $customer,  showMeTable=false, showme=true, showme1=false, showme2=false, showme3=false, showme4=false;
var months = ["January","February","March","April","May","June","July","August","September","October", "November", "December"];
$mTahun = d.getFullYear();
app.controller("accountFasControl", function($scope,$http) {
	$mTahun = d.getFullYear();
	$scope.mJudul = d.getFullYear() + " Increase 10%";
	$scope.mJudul2 = (d.getFullYear())-1 + " Increase 6%";
	$scope.mJudul3 = (d.getFullYear())-2 + " Increase 4%";
	$scope.mJudul4 = (d.getFullYear())-3 + " Decrease 5%";
	$scope.mJudul5 = (d.getFullYear())-4 + " Increase 10%";
	$whereClause = " WHERE ReadsYsJobs.status_kontrol = 'On Going Process' ";
	//document.getElementById("panelCountingJobs").innerHTML = "CustomerBilling" + $whereClause;
	$http.get("AccountMySqlCommand.php?q="+ "CustomerBilling" + $whereClause).then(function (response) {$scope.countCustomerBillingData = response.data.records;});
	$http.get("AccountMySqlCommand.php?q="+ "TotCustomerBill" + $whereClause).then(function (response) {$scope.totalCustomerBillingTData = response.data.records;});

	$scope.fungsi1Years1Customer = function() {
		$scope.showMeAllCustomers=false; 
		$scope.showMeOneCustomer=false; 
		$scope.showMeCurrentOneCu=true;
		$scope.showMeTable=true;
		$mTahun = d.getFullYear();
		$customer=document.getElementById("panelCountingJobs").innerHTML;
		$whereClause = " WHERE (tahun = " + $mTahun + ") AND (customer = '" + $customer + "') ";
		$http.get("AccountBillingMySqlCommand.php?q="+ "Years1Customer1" + $whereClause).then(function (response) {$scope.billing1Data = response.data.records;});
	};
	$scope.fungsi5Years1Customer = function() {
		$scope.showMeAllCustomers=false; 
		$scope.showMeOneCustomer=true;
		$scope.showMeTable=true;		
		$scope.showMeCurrentOneCu=false;
		$mTahun = d.getFullYear()-4;
		$customer=document.getElementById("panelCountingJobs").innerHTML;
		$whereClause = " WHERE (tahun > " + $mTahun + ") AND (customer = '" + $customer + "') ";
		$http.get("AccountBillingMySqlCommand.php?q="+ "Years5Customer1" + $whereClause).then(function (response) {$scope.billing2Data = response.data.records;});
	};
	$scope.fungsiActivateFASButton = function() {
		$scope.customerSubLedger=true
	};
	$scope.fungsiDeactivateFASButton = function() {
		$scope.customerSubLedger=false
	};

	$scope.fungsiDevelopmentIndicator = function() {
		$scope.mySwitch=true;
		$scope.mSwitch=false;
		$scope.mySwitch2=true;
		$scope.mSwitch2=false;
		$scope.mySwitch3=true;
		$scope.mSwitch3=false;
		$scope.mySwitch4=true;
		$scope.mSwitch4=false;
		$scope.mySwitch5=true;
		$scope.mSwitch5=false;
		$scope.mSwitch7=false;
		$scope.mSwitch8=false;
	};
	$scope.fungsiColectFas = function() {
		$scope.mySwitch=false;
		$scope.mSwitch=true;
		$scope.mySwitch2=false;
		$scope.mSwitch2=false;
		$scope.mySwitch3=false;
		$scope.mSwitch3=false;
		$scope.mySwitch4=false;
		$scope.mSwitch4=false;
		$scope.mySwitch5=false;
		$scope.mSwitch5=false;
		$scope.mSwitch8=false;
		$mTahun = d.getFullYear();
		$whereClause = " ";
		$http.get("AccountMySqlCommand.php?q="+ "ListOfFinanceAS" + $whereClause).then(function (response) {$scope.listFasData = response.data.records;});
	};
	$scope.fungsiShowBillingDetail = function() {
		$whereClause = " WHERE (billing_no = " + document.getElementById("billingNumber").innerHTML + ") ";
		$http.get("AccountBillingMySqlCommand.php?q="+ "Years5CustomerT" + $whereClause).then(function (response) {$scope.billing2Data = response.data.records;});
		
		document.getElementById("modalBillingDetail").innerHTML = "BILL#: " + document.getElementById("billingNumber").innerHTML;
		document.getElementById("modalBillingDetailNewBusines").innerHTML = "New Business Transaction: " + document.getElementById("billingNewBusinesFas").innerHTML;
		document.getElementById("modalBillingDetailRenewal").innerHTML = "Renewal Transaction: " + document.getElementById("billingRenewalFas").innerHTML;
		document.getElementById("modalBillingDetailAlteration").innerHTML = "Alteration  Transaction: " + document.getElementById("billingAlterationFas").innerHTML;
		document.getElementById("modalBillingDetailClaim").innerHTML = "Claim Transaction: " + document.getElementById("billingClaimFas").innerHTML;
		document.getElementById("modalBillingDetailPeriod").innerHTML = "Accounting Period: " + document.getElementById("billingPeriod").innerHTML;
		document.getElementById("modalBillingDetailTotal").innerHTML = "Total Transaction: " + document.getElementById("billingTotalFas").innerHTML;
	};
});



