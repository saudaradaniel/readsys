//window.location.reload();
var app = angular.module('underwritingMasterPolicyApp', []);
var d = new Date(), $mTahun, $whereClause, $mTahun = d.getFullYear();
app.filter('trustAsResourceUrl', ['$sce', function($sce) {
    return function(nomorReasuransi) {
        return $sce.trustAsResourceUrl(nomorReasuransi);
    };
}]);

app.controller("masterPolicyControl", ['$scope', '$http', function($scope, $http) {
	//const searchParams = new URLSearchParams(window.location.search);
	//$scope.nomorReasuransi=searchParams.get("nomorReasuransi");
	//if($scope.nomorReasuransi)
		//console.log($scope.nomorReasuransi);
	//else
	//console.log("fail to get params");
	$whereClause = " WHERE ((`readsysdetailcessieidentityingeneral`.`status_revenue_account` = 'Facultative Offer') AND (`readsysdetailcessieidentityingeneral`.`accept_code` = 'Reserved facilities')) OR ((`readsysdetailcessieidentityingeneral`.`status_revenue_account` = 'Facultative Offer') AND (`readsysdetailcessieidentityingeneral`.`accept_code` = 'New Offer')) ";
	$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.outstandingFacultative = response.data.records;});
	$scope.showMeMasterPolicy=false;
	$scope.showMeSearchBy=false;
	$scope.showMeTabelSearch=true;
	$scope.fungsiShowMeSearchTabelRecord=function() {
		if($scope.showMeSearchBy == false){
			$scope.showMeSearchBy = true;
			$scope.showMeTabelSearch=true;
		} else{
			$scope.showMeSearchBy = false;
		};
	};	$scope.fungsiSeekMasterPolicy = function(nomor_Reas) {
		$nomorReas=nomor_Reas
		$scope.showMeMasterPolicy = true;
        $whereClause = " WHERE (`readsysdetailcessieidentityingeneral`.`reas_no` = 3)";
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.cessieMainInformation = response.data.records;});
    };
	$scope.fungsiSeekCoverage = function(nomor_Reas) {
		$nomorReas=nomor_Reas
		$scope.showMeMasterPolicy = true;
        $whereClause = " WHERE (`readsysdetailcessieidentityingeneral`.`reas_no` = 3)";
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.cessieMainInformation = response.data.records;});
    };
	$scope.fungsiSeekBilling = function(nomor_Reas) {
		$nomorReas=nomor_Reas
		$scope.showMeMasterPolicy = true;
        $whereClause = " WHERE (`readsysdetailcessieidentityingeneral`.`reas_no` = 3)";
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.cessieMainInformation = response.data.records;});
    };
}]);

