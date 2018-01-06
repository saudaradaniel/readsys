//window.location.reload();
var $whereClause = "", $nomorReas;
var app = angular.module("myAdministrationApp", []); 
	app.controller("administrationControl", ['$scope', '$timeout', '$http', function($scope, $timeout, $http){
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
	};
	$scope.fungsiOrderByDataField = function(ny) {
        $scope.outstandingOrderBy = ny;
    };
	$scope.fungsiSeekMasterPolicy = function(nomor_Reas) {
		$nomorReas=nomor_Reas
		$scope.showMeMasterPolicy = true;
        $whereClause = " WHERE (`readsysdetailcessieidentityingeneral`.`reas_no` = 3)";
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.cessieMainInformation = response.data.records;});
    };
	$scope.fungsiColectNewOffer = function() {
        $whereClause = " WHERE ((`readsysdetailcessieidentityingeneral`.`status_revenue_account` = 'Facultative Offer') AND (`readsysdetailcessieidentityingeneral`.`accept_code` = 'Reserved facilities')) OR ((`readsysdetailcessieidentityingeneral`.`status_revenue_account` = 'Facultative Offer') AND (`readsysdetailcessieidentityingeneral`.`accept_code` = 'New Offer')) ";
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.outstandingFacultative = response.data.records;});
    };
	$scope.fungsiColectAcceptedFacultative = function() {
        $whereClause = " WHERE ((`readsysdetailcessieidentityingeneral`.`status_revenue_account` = 'Facultative Offer') AND (`readsysdetailcessieidentityingeneral`.`accept_code` = 'Accept Offer')) ";
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.outstandingFacultative = response.data.records;});
    };
	$scope.fungsiColectProceedFacultative = function() {
        $whereClause = " WHERE ((`readsysdetailcessieidentityingeneral`.`status_revenue_account` = 'Facultative Offer') AND (`readsysdetailcessieidentityingeneral`.`accept_code` = 'Proceed Offer')) ";
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.outstandingFacultative = response.data.records;});
    };
	$scope.fungsiColectRegisterTreatyBusiness = function() {
        $whereClause = " WHERE ((`readsysdetailcessieidentityingeneral`.`status_revenue_account` = 'Treaty Offer') AND (`readsysdetailcessieidentityingeneral`.`accept_code` = 'Register Treaty')) ";
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.outstandingFacultative = response.data.records;});
    };
}]);