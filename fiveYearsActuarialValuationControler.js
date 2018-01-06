var app = angular.module('myApp', []), d = new Date(), $mTahun;
app.controller("valuationDataCtrl", function($scope,$http) {
	document.getElementById("queryCommand").innerHTML = "SELECT parameters, actual FROM readsysstatisticsexperience";
	$scope.orderByMe = function(x) {$scope.myOrderBy = x};
	$scope.mJudul = d.getFullYear() + " Increase 10%";
	$scope.mJudul2 = (d.getFullYear())-1 + " Increase 6%";
	$scope.mJudul3 = (d.getFullYear())-2 + " Increase 4%";
	$scope.mJudul4 = (d.getFullYear())-3 + " Decrease 5%";
	$scope.mJudul5 = (d.getFullYear())-4 + " Increase 10%";
	$scope.fungsiLegendSurplus = function(legendSurplus) {
		$mTahun = d.getFullYear();
		$scope.mSwitch7=true;
		$scope.mSwitch8=true;
		$scope.nomor_Akun = legendSurplus + " " + $mTahun;
		
		$http.get("ColectDetailDataAktuarialValuation.php?q="+ legendSurplus + " " + $mTahun)
		.then(function (response) {$scope.assetData = response.data.records;});
		
		$http.get("ActuarialValuationDetailDataTotal.php?q="+ legendSurplus + " " + $mTahun)
		.then(function (response) {$scope.totalData = response.data.records;});
		
		$http.get("ActuarialValuationDescriptionSeek.php?q="+ legendSurplus + " " + $mTahun)
		.then(function (response) {$scope.descriptionData = response.data.records;});
		mengaktifkanExecutiveSummary();
	};
	$scope.fungsiNomorAkun = function(nomor_Akun) {
		$mTahun = d.getFullYear();
		$scope.nomor_Akun = nomor_Akun;
	};
	$scope.fungsiColectSurplus = function() {
		$mTahun = d.getFullYear();
		document.getElementById("passingParameter").innerHTML = " WHERE (group_parameter='Five Years Valuation Development') and (tahun=" + $mTahun + ") ";
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
		$http.get("ColectDataAktuarialValuation.php?q=" + $mTahun)
		.then(function (response) {$scope.surplusData = response.data.records;});
	};
	$scope.fungsiColectSurplus2 = function() {
		$mTahun = d.getFullYear()-1
		document.getElementById('menu1').innerHTML = "Details of Supporting Data: Year " + $mTahun;
		document.getElementById("passingParameter").innerHTML = " WHERE (group_parameter='Five Years Valuation Development') and (tahun=" + $mTahun + ") ";
		$scope.mySwitch=false;
		$scope.mSwitch=false;
		$scope.mySwitch2=false;
		$scope.mSwitch2=true;
		$scope.mySwitch3=false;
		$scope.mSwitch3=false;
		$scope.mySwitch4=false;
		$scope.mSwitch4=false;
		$scope.mySwitch5=false;
		$scope.mSwitch5=false;
		$scope.mSwitch8=true;
		$http.get("ColectDataAktuarialValuation.php?q="+ $mTahun)
		.then(function (response) {$scope.surplusData = response.data.records;})
	};
	$scope.fungsiColectSurplus3 = function() {
		$mTahun = d.getFullYear()-2
		document.getElementById('menu1').innerHTML = "Details of Supporting Data: Year " + $mTahun;
		document.getElementById("passingParameter").innerHTML = " WHERE (group_parameter='Five Years Valuation Development') and (tahun=" + $mTahun + ") ";		
		$scope.mySwitch=false;
		$scope.mSwitch=false;
		$scope.mySwitch2=false;
		$scope.mSwitch2=false;
		$scope.mySwitch3=false;
		$scope.mSwitch3=true;
		$scope.mySwitch4=false;
		$scope.mSwitch4=false;
		$scope.mySwitch5=false;
		$scope.mSwitch5=false;
		$scope.mSwitch8=true;
		$http.get("ColectDataAktuarialValuation.php?q="+ $mTahun)
		.then(function (response) {$scope.surplusData = response.data.records;});
	};
	$scope.fungsiColectSurplus4 = function() {
		$mTahun = d.getFullYear()-3	
		document.getElementById('menu1').innerHTML = "Details of Supporting Data: Year " + $mTahun;
		document.getElementById("passingParameter").innerHTML = " WHERE (group_parameter='Five Years Valuation Development') and (tahun=" + $mTahun + ") ";		
		$scope.mySwitch=false;
		$scope.mSwitch=false;
		$scope.mySwitch2=false;
		$scope.mSwitch2=false;
		$scope.mySwitch3=false;
		$scope.mSwitch3=false;
		$scope.mySwitch4=false;
		$scope.mSwitch4=true;
		$scope.mySwitch5=false;
		$scope.mSwitch5=false;
		$scope.mSwitch8=true;
		$http.get("ColectDataAktuarialValuation.php?q="+ $mTahun)
		.then(function (response) {$scope.surplusData = response.data.records;})
	};
	$scope.fungsiColectSurplus5 = function() {
		$mTahun = d.getFullYear()-4
		document.getElementById('menu1').innerHTML = "Details of Supporting Data: Year " + $mTahun;
		document.getElementById("passingParameter").innerHTML = " WHERE (group_parameter='Five Years Valuation Development') and (tahun=" + $mTahun + ") ";
		$scope.mySwitch=false;
		$scope.mSwitch=false;
		$scope.mySwitch2=false;
		$scope.mSwitch2=false;
		$scope.mySwitch3=false;
		$scope.mSwitch3=false;
		$scope.mySwitch4=false;
		$scope.mSwitch4=false;
		$scope.mySwitch5=false;
		$scope.mSwitch5=true;
		$scope.mSwitch8=true;
		$http.get("ColectDataAktuarialValuation.php?q="+ $mTahun)
		.then(function (response) {$scope.surplusData = response.data.records;})
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
});										
app.controller('customersCtrl', function($scope, $http) {
	   $http.get("ColectDetailDataAktuarialValuation.php")
	   .then(function (response) {$scope.names = response.data.records;});
});


app.controller('generalLedgerCtrl', function($scope, $http) {
	$scope.fungsiNomorAkun = function(nomor_Akun) {
		$mTahun = d.getFullYear();
		$scope.nomor_Akun = nomor_Akun;
		$http.get("ActuarialValuationDetailDataTransaction.php?q="+ nomor_Akun + " " + $mTahun)
		.then(function (response) {$scope.transactionData = response.data.records;});
	};
});
