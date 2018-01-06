var app = angular.module('myApp', []), d = new Date(), $mTahun, $gambarChart;
app.controller("stuffControl", function($scope,$http) {
	$http.get("StuffColectDataControl.php?q=").then(function (response) {$scope.customerData = response.data.records;});
	$scope.fungsiSeekSquawk = function($tahun) {
		$http.get("StuffColectDataControl.php?q="+ "ceding = '" + $tahun + "' ").then(function (response) {$scope.squawkData = response.data.records;});
		document.getElementById("fourthChart").innerHTML = $gambarChart;
	};	
});
