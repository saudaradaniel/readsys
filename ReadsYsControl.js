//window.location.reload();
var app = angular.module("myReadsYsApp", []); myHeader=" "; 
var d = new Date(), $mTahun, $whereClause, $month, $customer, $task, $reasNumber, nomorReasuransi, $customers; 
	app.controller("myReadsYsAppCtrl", ['$scope', '$timeout', '$http', function($scope, $timeout, $http){
		$scope.showLeftGridHxs = true;
		$scope.showMeGambarAdministrasi=false;
		$scope.showMeGambarBilling=false;
		$scope.showMeGambarChart=false;
		$scope.showMeGambarInquery=false;
		$scope.showMeGambarPIndicators=false;
		$scope.showMeGambarSystem=true;
		$scope.showMeManualBook = true;
		$scope.showMePersonnalComputerWindow=false; 
		$scope.showMeOperatingProcedure=false;
		$scope.showMeMobileGetgedWindow=true; 
		$scope.showMePerformanceIndicatorExecutiveSummary=false;
		$scope.showmePengaturWindow=false; 
		$scope.showMeAccount=true; 
		$scope.showMeAccountActive=false; 
		$scope.showMeManagingBilling=false; 
		$scope.showMeFAS=false; 
		$scope.showMeAccountingFramework=false; 
		$scope.showMeManagingPayment=false; 
		$scope.showMeBudget=false; 
		$scope.showMeSquawkToggle=false; 
		$scope.showMeCarouselToggle=false; 
		$scope.showMeAllWindowsMobileToggle=false; 
		$scope.showMeChartToggle=false; 
		$scope.showMeDatabaseToggles=false; 
		$scope.showMeButton5=true; 
		$scope.showMeButton4=true; 
		$scope.showMeButton3=true; 
		$scope.showMeButton2=true; 
		$scope.showMeButton1=true; 
		$scope.showMeChartControl=true;		
		$scope.myHeader = "Hello! Welcome";
		$scope.myObj = {
		"color" : "white",
		"background-color" : "coral",
		"font-size" : "70px",
		"padding-top" : "200px",
		"height" : "800px"
		};
		$timeout(function () {
			$scope.myHeader = "";
			$scope.myObj = {"height" : "0px"};
			}, 1500);
		$scope.fungsiActivateManualBook = function(){
			$scope.showMeManualBook = true;
		};
		$scope.fungsiActivateOpen = function(){
			$scope.showmePengaturWindow = true;
			$scope.showMeMobileGetgedWindow=false;
			$scope.showMePersonnalComputerWindow=true			
		};
		$scope.fungsiChageJudulBilling = function() {
			document.getElementById('panelJudulMainWorksheet').innerHTML = "Worksheet: Account - Managing Billing";
			$scope.showMeGambarChart = false;
			$scope.showMeGambarInquery=false;
			$scope.showMeGambarSystem=false;
			$scope.showMeManualBook = false;
			$scope.showMeGambarAdministrasi=false;
			$scope.showMeGambarUnderwriting=false;	
			$scope.showMeGambarBilling=true;
		};
		$scope.fungsiChartActivateChart = function() {
			document.getElementById('panelJudulMainWorksheet').innerHTML = "Worksheet: Supporting Tools - Chart";
			$scope.showMeGambarInquery=false;
			$scope.showMeGambarSystem=false;
			$scope.showMeManualBook = false;
			$scope.showMeGambarAdministrasi=false;
			$scope.showMeGambarBilling=false;
			$scope.showMeGambarUnderwriting=false;
			$scope.showMeGambarChart = true;
		};
		$scope.fungsiDocumentBusinessAdministrationChangeJudul=function() {
			document.getElementById('panelJudulMainWorksheet').innerHTML = "Worksheet: Administration - Business Document";	
			$scope.showMeGambarChart = false;
			$scope.showMeGambarInquery=false;
			$scope.showMeGambarSystem=false;
			$scope.showMeManualBook = false;
			$scope.showMeGambarBilling=false;
			$scope.showMeGambarUnderwriting=false;
			$scope.showMeGambarAdministrasi=true;
		};
		$scope.fungsiAdministrationChangePlacingNewBusiness=function() {
			document.getElementById('panelJudulMainWorksheet').innerHTML = "Worksheet: Administration - Placing New Business";	
			$scope.showMeGambarChart = false;
			$scope.showMeGambarInquery=false;
			$scope.showMeGambarSystem=false;
			$scope.showMeManualBook = false;
			$scope.showMeGambarBilling=false;
			$scope.showMeGambarUnderwriting=false;
			$scope.showMeGambarAdministrasi=true;
		};
		$scope.fungsiUnderwritingManagingFacultativeOffer=function() {
			document.getElementById('panelJudulMainWorksheet').innerHTML = "Worksheet: Underwriting - Managing Facultative Offer";	
			$scope.showMeGambarChart = false;
			$scope.showMeGambarInquery=false;
			$scope.showMeGambarSystem=false;
			$scope.showMeManualBook = false;
			$scope.showMeGambarBilling=false;
			$scope.showMeGambarAdministrasi=false;
			$scope.showMeGambarUnderwriting=true;
		};
		$scope.fungsiSearchPanel = function() {
			$scope.searchingDetailOfBilling=true;
			document.getElementById('panelJudulMainWorksheet').innerHTML = "Worksheet: Account - Managing Billing Dikerjakan";
		};
		$scope.fungsiShowMeGambarInquery = function() {
			$scope.showMeGambarChart=false;			
			$scope.showMeGambarSystem=false;
			$scope.showMeManualBook = false;
			$scope.showMeGambarAdministrasi=false;
			$scope.showMeGambarPIndicators=false;
			$scope.showMeGambarInquery=true;
		};
		$scope.fungsiShowMePerformanceIndicator = function() {
			$scope.showMeGambarChart=false;			
			$scope.showMeGambarSystem=false;
			$scope.showMeManualBook = false;
			$scope.showMeGambarAdministrasi=false;
			$scope.showMeGambarInquery=false;
			$scope.showMeGambarPIndicators=true;
			$scope.showMePerformanceIndicatorExecutiveSummary=true;
			// if (showMePerformanceIndicatorExecutiveSummary=false) {
			// 	$scope.showMePerformanceIndicatorExecutiveSummary=true;
			// } else {
			// 	$scope.showMePerformanceIndicatorExecutiveSummary=false;
			// };	
		};
		$scope.removeTasksToArchive = function() {
			$whereClause=" WHERE `kd_divisi` = 1";	
			$http.get("ReadsYsColectDataControl.php?q="+ "ReadsysUserList" + $whereClause).then(function (response) {$scope.listUsersData = response.data.records;});

			$scope.disabled = false;
			$scope.showMeButton5 = false;
			$scope.showMeButton4 = false;
			$scope.showMeButton3 = false;
			$scope.showMeButton2 = false;
			$scope.showMeButton1 = false;
			$scope.showMeChartToggle=true;
			$scope.showMeDatabaseToggle=true;
			$scope.showMeAllWindowsMobileToggle=true
			$scope.showMeCarouselToggle=true
			$scope.showMeSquawkToggle=true
			$scope.showMeAccount=false; 
			$scope.showMeAccountActive=true;
			$scope.showMeManagingBilling=true;
			$scope.showMeManagingBilling=true; 
			$scope.showMeFAS=true; 
			$scope.showMeAccountingFramework=true; 
			$scope.showMeManagingPayment=true; 
			$scope.showMeBudget=true; 
		};
		$scope.removeTasksToArchive1 = function() {
			//document.getElementById('kerja').innerHTML = "Transactions Benar";
			$scope.showMeButton5 = false;
			
			$scope.disabled = false;
		};
		$scope.fungsiColectUserLife = function() {
			$whereClause=" WHERE `kd_divisi` = 1";	
			$http.get("ReadsYsColectDataControl.php?q="+ "ReadsysUserList" + $whereClause).then(function (response) {$scope.listUsersData = response.data.records;});
		};
		$scope.fungsiShowMeChartControl = function() {
			$scope.showMeChartControl = false;
		};
		$scope.fungsiMengaktifkanShowMeLeftGrid = function(){
			if ($scope.showLeftGridHxs == true) {
				$scope.showLeftGridHxs = false;
				} else {
						$scope.showLeftGridHxs = true;
				};
		};
	}]);
	app.controller('theTimeCtrl', function($scope, $interval) {
		$scope.theTime = new Date().toLocaleTimeString();
		$interval(function () {
		  $scope.theTime = new Date().toLocaleTimeString();
		}, 50);		
	});	
	app.controller("crManagingControl", function($scope, $http) {
		$scope.showMeADetailOfTreaty=false;
		$scope.fungsiAgendaCompanyAgenda = function() {
			$scope.showMeMyAgenda = false;
			$scope.showMeCompanyAgenda=true;
			$scope.showMeEntryNewAgenda=false;
			$scope.myAgendaTabel = false;
		};
		$scope.fungsiAgendaEntryAgenda = function() {
			$scope.showMeMyAgenda = false;
			$scope.showMeCompanyAgenda=false;
			$scope.showMeEntryNewAgenda=true;
			$scope.myAgendaTabel = false;
		};
		$scope.fungsiAgendaMyAgenda = function() {
			$scope.showMeMyAgenda = true;
			$scope.showMeCompanyAgenda=false;
			$scope.showMeEntryNewAgenda=false;
			$scope.myAgendaTabel = false;
		};
		$scope.fungsiAgendaActivateFormEntry = function() {
			$scope.showMeEntryNewAgenda=false
			$scope.myAgendaTabel=false;
			$scope.showMeSearchBy=false;
			$("#modalJudulTransactionDetail").click(function(){
				$("#myEntryNewAgendaModal").modal(); 
			});
		};
		$scope.fungsiAgendaColectMyAgenda = function() {
			$scope.showMeMyAgenda = false;
			$scope.myAgendaTabel=true;
			$scope.showMeMediaAgenda=false;
			$whereClause=" WHERE `NAMA` = 'Daniel' ORDER BY `TGL_AGENDA`, `WAKTU` ";	
			$http.get("StuffColectDataControl.php?q="+ "AgendaCurrentYe" + $whereClause).then(function (response) {$scope.listAgendaData = response.data.records;});
		};
		$scope.fungsiAgendaColectThisYear = function() {
			$scope.showMeCompanyAgenda=false
			$scope.myAgendaTabel=true;
			$scope.showMeMediaAgenda=false;
			$whereClause="ORDER BY `TGL_AGENDA`, `WAKTU` ";	
			$http.get("StuffColectDataControl.php?q="+ "AgendaCurrentYe" + $whereClause).then(function (response) {$scope.listAgendaData = response.data.records;});
		};
		$scope.fungsiAgendaDelete = function() {
			$customer = "Bambang"
			if ($customer == "Daniel") {
				$scope.showMeDeleteAgenda = true;
				$scope.hideMeDeleteAgenda = true;
				$whereClause = " WHERE `no_agenda` = " + document.getElementById('modalHeading').innerHTML;
				$http.get("StuffColectDataControl.php?q="+ "AgendaDeleteRec" + $whereClause);
				} else {
						$scope.showMeDeleteAgenda = false;
						$scope.hideMeDeleteAgenda = false;
				};
		};
		$scope.fungsiAgendaEntryNewAgenda = function() {
			$http.post("StuffColectDataControl.php?q=" + "AgendaInserting" , {
				'bowner':$scope.bowner,
				'bdate':$scope.bdate, 
				'btime':$scope.btime,
				'bplace':$scope.bplace,
				'broom':$scope.broom,
				'bstatus':$scope.bstatus});
		};
		$scope.fungsiAgendaEntryAndModifyCloseModal = function($scope) {
			$scope.showMeAgendaTabel = false;
		};
		$scope.fungsiAgendaShowAgendaDetail= function(nomorAgenda) {
			$scope.nomorUrutAgenda=nomorAgenda;
			$reasNumber=nomorAgenda;
			$whereClause = " WHERE `No_agenda` = " + $reasNumber;
			$http.get("StuffColectDataControl.php?q="+ "AgendaCurrentYe" + $whereClause).then(function (response) {$scope.anAgendaData = response.data.records;});
			$whereClause = " WHERE `no_agenda` = " + $reasNumber;
			$http.get("StuffColectDataControl.php?q="+ "AgendaAttention" + $whereClause).then(function (response) {$scope.listAttentionAgendaData = response.data.records;});									
		};
		$scope.fungsiAgendaShowMeSearchAgenda = function() {
			if($scope.showMeSearchBy == false){
				$scope.showMeSearchBy = true;
				$scope.showMeAgendaTabel=true;
				$scope.showMeJudulCompanyAgenda=false;
			} else{
				$scope.showMeSearchBy = false;
			};
		};
		$scope.fungsiColectCustomerClaim = function() {
			document.getElementById('titleRefCustomer').innerHTML = "Top 10 Claims Transaction";
			$scope.showMeSearchOfTheTable=true
			$scope.showMeTheTable=true;
			$scope.showMeAllCustomers=true;
			$scope.showMeCustomerClaim=true;
			$scope.showMeCustomerBusin=false;
			$scope.showMeCustomerLapses=false;
			$scope.showMeCustomerOther=false;
			$scope.showMeSelectedCustomer=false;
			$scope.modalBodyTransaction=false;
			$scope.modalBodyNewBusiness=false;
			$scope.modalBodyRenewal=false;
			$scope.modalAlteration=false;
			$scope.modalClaim=true;
			$mTahun = d.getFullYear();
			$whereClause = " WHERE ((readsyscustomer.klasifikasi = 'C') AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ")) OR ((readsyscustomer.klasifikasi = 'C') AND (COALESCE(ReadsYsBillingTransaction.tahun,0) = 0))";
			$http.get("StuffColectDataControl.php?q="+ "ClaimOfCustomer" + $whereClause).then(function (response) {$scope.listCustomerData = response.data.records;});
		};
		$scope.fungsiColectCustomerTop5 = function() {
			document.getElementById('titleRefCustomer').innerHTML = "Top Ten Bussiness";
			$scope.showMeCustomerBusin=false;
			$scope.showMeCustomerClaim=false;
			$scope.showMeCustomerLapses=false;
			$scope.showMeCustomerOther=false;
			$scope.showMeSearchOfTheTable=false;
			$scope.showMeTheTable=true;
			$scope.showMeAllCustomers=true;
			$scope.showMeSelectedCustomer=false;
			$scope.modalBodyTransaction=true;
			$scope.modalBodyNewBusiness=false;
			$scope.modalBodyRenewal=false;
			$scope.modalAlteration=false;
			$scope.modalClaim=false;
			$mTahun = d.getFullYear();
			$whereClause = " WHERE ((readsyscustomer.klasifikasi = 'C') AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ")) OR ((readsyscustomer.klasifikasi = 'C') AND (COALESCE(ReadsYsBillingTransaction.tahun,0) = 0))";
			$http.get("StuffColectDataControl.php?q="+ "ListOfCustomer5" + $whereClause).then(function (response) {$scope.listCustomerData = response.data.records;});
		};
		$scope.fungsiColectCustomer = function() {
			document.getElementById('titleRefCustomer').innerHTML = "Customer Performance";
			$scope.showMeSearchOfTheTable=false
			$scope.showMeTheTable=true;
			$scope.showMeAllCustomers=true;
			$scope.showMeCustomerBusin=false;
			$scope.showMeCustomerClaim=false;
			$scope.showMeCustomerLapses=false;
			$scope.showMeCustomerOther=false;		
			$scope.showMeSelectedCustomer=false;
			$scope.modalBodyTransaction=false;		
			$scope.modalBodyNewBusiness=true;
			$scope.modalBodyRenewal=true;
			$scope.modalAlteration=true;
			$scope.modalClaim=true;
			$mTahun = d.getFullYear();
			$whereClause = " WHERE ((readsyscustomer.klasifikasi = 'C') AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ")) OR ((readsyscustomer.klasifikasi = 'C') AND (COALESCE(ReadsYsBillingTransaction.tahun,0) = 0))";
			$http.get("StuffColectDataControl.php?q="+ "ListOfCustomer1" + $whereClause).then(function (response) {$scope.listCustomerData = response.data.records;});
		};
		$scope.fungsiColectCustomerCessie = function(noClient) {
			var $noClient = noClient;
			$whereClause = " WHERE  `id_holder` = " + noClient;
			$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.listCessieData = response.data.records;});
		};	
		$scope.fungsiColectCustomerLapse = function() {
			document.getElementById('titleRefCustomer').innerHTML = "Top 10 Lapse and Alteration";
			$scope.showMeSearchOfTheTable=false
			$scope.showMeTheTable=true;
			$scope.showMeAllCustomers=true;
			$scope.showMeCustomerClaim=false;
			$scope.showMeCustomerBusin=false;
			$scope.showMeCustomerLapses=true;
			$scope.showMeCustomerOther=false;
			$scope.showMeSelectedCustomer=false;
			$scope.modalBodyTransaction=false;
			$scope.modalBodyNewBusiness=false;
			$scope.modalBodyRenewal=false;
			$scope.modalAlteration=true;
			$scope.modalClaim=false;
			
			$mTahun = d.getFullYear();
			$whereClause = " WHERE ((readsyscustomer.klasifikasi = 'C') AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ")) OR ((readsyscustomer.klasifikasi = 'C') AND (COALESCE(ReadsYsBillingTransaction.tahun,0) = 0))";
			$http.get("StuffColectDataControl.php?q="+ "ListOfCustomer5" + $whereClause).then(function (response) {$scope.listCustomerData = response.data.records;});
		};
		$scope.fungsiColectCustomerOthers = function() {
			$scope.showMeSearchOfTheTable=true;
			$scope.showMeCustomerClaim=false;
			$scope.showMeCustomerLapses=false;
			$scope.showMeCustomerOther=true;
			$scope.showMeSelectedCustomer=false;	
			$scope.showMeAllCustomers=true;	
			$scope.showMeCustomerBusin=false
			$scope.modalBodyTransaction=false;		
			$scope.modalBodyNewBusiness=false;
			$scope.modalBodyRenewal=false;
			$scope.modalAlteration=false;
			$scope.modalClaim=false;
			
			$mTahun = d.getFullYear();
			$whereClause = " WHERE ((readsyscustomer.klasifikasi = 'C') AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ")) OR ((readsyscustomer.klasifikasi = 'C') AND (COALESCE(ReadsYsBillingTransaction.tahun,0) = 0))";
			$http.get("StuffColectDataControl.php?q="+ "ListOfCustomer1" + $whereClause).then(function (response) {$scope.listCustomerData = response.data.records;});
		};
		$scope.fungsiColectNews = function() {
			$scope.showMeNews=true;	
			$scope.showMeSearchOfTheTable=true;	
			$http.get("StuffColectDataControl.php?q="+ "ListOfNewsInsur" + " ").then(function (response) {$scope.listNewsData = response.data.records;});
		};
		$scope.fungsiColectNewsDetails = function(noNews) {	
			$reasNumber = noNews;
			$whereClause = " WHERE `no_berita` = " + $reasNumber;
			$http.get("StuffColectDataControl.php?q="+ "ListOfNewsInsur" + $whereClause).then(function (response) {$scope.detailsNewsData = response.data.records;});
		};
		$scope.fungsiCurrentAndFutureEconomicActivateBalanceSheetOfIndonesiasPayment = function() {
			$whereClause = " WHERE ((nama_subrutin = 'Balancesheet of Indonesia Payment') AND (jenis_routine = 'KPI Economics'))";
			$http.get("StuffColectDataControl.php?q="+ "FutureEconomics" + $whereClause).then(function (response) {$scope.balanceSheetOfIndonesiasPaymentData = response.data.records;});
			document.getElementById('masuk').innerHTML = "Information";
		};
		$scope.fungsiCurrentAndFutureEconomicActivateEconomicsGrowth = function() {
			$whereClause = " WHERE ((nama_subrutin = 'Economics Growth') AND (jenis_routine = 'KPI Economics'))";
			$http.get("StuffColectDataControl.php?q="+ "FutureEconomics" + $whereClause).then(function (response) {$scope.economicsGrowthData = response.data.records;});
			document.getElementById('masuk').innerHTML = "Information";
		};
		$scope.fungsiCurrentAndFutureEconomicActivateExchangeRates = function() {
			$whereClause = " WHERE ((nama_subrutin = 'Exchange Rates') AND (jenis_routine = 'KPI Economics'))";
			$http.get("StuffColectDataControl.php?q="+ "FutureEconomics" + $whereClause).then(function (response) {$scope.exchangeRatesData = response.data.records;});
			document.getElementById('masuk').innerHTML = "Information";
		};
		$scope.fungsiCurrentAndFutureEconomicActivateModalGlobalEconomics = function() {
			$whereClause = " WHERE ((nama_subrutin = 'Global Economics') AND (jenis_routine = 'KPI Economics'))";
			$http.get("StuffColectDataControl.php?q="+ "FutureEconomics" + $whereClause).then(function (response) {$scope.globalEconomicsData = response.data.records;});
			document.getElementById('masuk').innerHTML = "Information";
		};
		$scope.fungsiCurrentAndFutureEconomicActivateInflation = function() {
			$whereClause = " WHERE ((nama_subrutin = 'Inflation') AND (jenis_routine = 'KPI Economics'))";
			$http.get("StuffColectDataControl.php?q="+ "FutureEconomics" + $whereClause).then(function (response) {$scope.inflationData = response.data.records;});
			document.getElementById('masuk').innerHTML = "Information";
		};
		$scope.fungsiCurrentAndFutureEconomicActivateFinancialSystem = function() {
			$whereClause = " WHERE ((nama_subrutin = 'Exchange Rates') AND (jenis_routine = 'KPI Economics'))";
			$http.get("StuffColectDataControl.php?q="+ "FutureEconomics" + $whereClause).then(function (response) {$scope.financialSystemData = response.data.records;});
			document.getElementById('masuk').innerHTML = "Information";
		};
		$scope.fungsiCurrentAndFutureEconomicActivateFutureProspectAndRisk = function() {
			$whereClause = " WHERE ((nama_subrutin = 'Future Prospect and Risks') AND (jenis_routine = 'KPI Economics'))";
			$http.get("StuffColectDataControl.php?q="+ "FutureEconomics" + $whereClause).then(function (response) {$scope.futureProspectAndRiskData = response.data.records;});
			document.getElementById('masuk').innerHTML = "Information";
		};
		$scope.fungsiCurrentAndFutureEconomicActivatePolicyMix = function() {
			$whereClause = " WHERE ((nama_subrutin = 'Policy Mix') AND (jenis_routine = 'KPI Economics'))";
			$http.get("StuffColectDataControl.php?q="+ "FutureEconomics" + $whereClause).then(function (response) {$scope.policyMixData = response.data.records;});
			document.getElementById('masuk').innerHTML = "Information";
		};		
		$scope.fungsiCurrentAndFutureEconomicActivateCentralBankPolicyFocus = function() {			
			$whereClause = " WHERE ((nama_subrutin = 'Central Bank Policy and Focus') AND (jenis_routine = 'KPI Economics'))";
			$http.get("StuffColectDataControl.php?q="+ "FutureEconomics" + $whereClause).then(function (response) {$scope.centralBankPolicyFocusData = response.data.records;});
			document.getElementById('masuk').innerHTML = "Information";
		};
		$scope.fungsiDocumentActivateADetailTreatyOfCustomer=function() {
			$scope.showMeADetailOfTreaty=true;
			Document.getElementById(demo).innerHTML="Masuk"
		};
		$scope.fungsiDocumentColectCallsData=function() {
			$scope.showMeGambarDocument=false;
			$whereClause = " WHERE (`readsysmasterdocument`.`media_dokumen` = 'Calls')";
			$http.get("StuffColectDataControl.php?q="+ "ListOfDocumData" + $whereClause).then(function (response) {$scope.listCallData = response.data.records;});
		};
		$scope.fungsiDocumentColectBusinessLettersData=function() {
			$scope.showMeGambarDocument=false;
			$whereClause = " WHERE (`readsysmasterdocument`.`media_dokumen` = 'Email' OR `readsysmasterdocument`.`media_dokumen` = 'Proposal' OR `readsysmasterdocument`.`media_dokumen` = 'Quotation' )";
			$http.get("StuffColectDataControl.php?q="+ "ListOfDocumData" + $whereClause).then(function (response) {$scope.listBusinessLetterEmailData = response.data.records;});
		};
		$scope.fungsiDocumentColectAgreementData=function() {
			$scope.showMeGambarDocument=false;
			$whereClause = " WHERE (`readsysmasterdocument`.`media_dokumen` = 'Life Assurance')";
			$http.get("StuffColectDataControl.php?q="+ "ListOfDocumData" + $whereClause).then(function (response) {$scope.listAgreementData = response.data.records;});
		};
		$scope.DocumentColectPaperCessionFormData=function() {
			$scope.showMeGambarDocument=false;
			$whereClause = " WHERE (`readsysmasterdocument`.`media_dokumen` = 'Treaty Wordings')";
			$http.get("StuffColectDataControl.php?q="+ "ListOfDocumData" + $whereClause).then(function (response) {$scope.listTreatyAndWordingsData = response.data.records;});
		};
		$scope.fungsiDocumentColectTreatyAndWordingsData=function() {
			$scope.showMeGambarDocument=false;
			$whereClause = " ";
			$http.get("UnderwritingDataController.php?q="+ "CompanyTreatyDo " + $whereClause).then(function (response) {$scope.listTreatyAndWordingsData = response.data.records;});
			$http.get("UnderwritingDataController.php?q="+ "CompanyTreatyTo " + $whereClause).then(function (response) {$scope.totalyTreatiesAndWordings = response.data.records;});			
		};
		$scope.fungsiDocumentColectTreatyAndWordingsOfCustomer=function() {
			$scope.showMeGambarDocument=false;
			$whereClause = " WHERE ";
			$http.get("UnderwritingDataController.php?q="+ "TreatyOfCustome " + $whereClause).then(function (response) {$scope.listTreatyAndWordingsData = response.data.records;});
		};
		$scope.fungsiDocumentColectTreatyOfCustomer=function(noClient, customer) {
			$scope.showMeGambarDocument=false;
			$reasNumber=noClient;
			$scope.$customers=customer;
			$whereClause = " WHERE `no_client` = " + $reasNumber ;
			$http.get("UnderwritingDataController.php?q="+ "TreatyDocumData " + $whereClause).then(function (response) {$scope.listTreatyAndWording = response.data.records;});
		};
		$scope.fungsiDocumentShowTreatyAndWordingsOfCustomer=function() {
			$scope.showMeGambarDocument=false;
			$whereClause = " ";
			$http.get("UnderwritingDataController.php?q="+ "TreatyDocumData " + $whereClause).then(function (response) {$scope.listTreatyAndWordingsData = response.data.records;});
		};
		$scope.fungsiDocumentShowDetails=function(nomorDokumen) {
			$scope.$reasNumber=nomorDokumen;
			$whereClause = " WHERE (`readsysmasterdocument`.`no_mail_doc` = $reasNumber)";
			$http.get("StuffColectDataControl.php?q="+ "ListOfDocumData" + $whereClause).then(function (response) {$scope.oneDocument = response.data.records;});
		};
		$scope.fungsiDocumentShowTreatyDetails=function(nomorTreaty) {
			$scope.$reasNumber=nomorTreaty;
			$whereClause = " WHERE (`readsysmastertreaty`.`id_treaty` = 3)";
			$http.get("UnderwritingDataController.php?q="+ "TreatyDocumData" + $whereClause).then(function (response) {$scope.oneSelectedTreaty = response.data.records;});
		};
		$scope.fungsiInterconMyIntercon=function() {
			$scope.showMeMyIntercon=true;
			$scope.showMeCompanyIntercon=false;
			$scope.showMeEntryNewIntercon=false;
			$scope.myInterconTabel=false;
		};
		$scope.fungsiInterconActivateFormEntry=function() {
			$("#modalJudulTransactionDetailIntercon").click(function(){
				$("#myEntryNewInterconModal").modal(); 
			});
		};
		$scope.fungsiInterconColectMyIntercon = function() {
			$scope.showMeMyIntercon=false;
			$scope.myInterconTabel=true;
			$scope.showMeMediaInteron=false;
			$scope.myInterconTopics=true;
			$scope.coysInterconTopic=false;
			$whereClause=" WHERE `pengirim`= 'Daniel' ";	
			$http.get("StuffColectDataControl.php?q="+ "IntercCurrentYe" + $whereClause).then(function (response) {$scope.listInterconData = response.data.records;});
		};
		$scope.fungsiInterconColectThisYear = function() {
			$scope.showMeCompanyIntercon=false;
			$scope.myInterconTabel=true;
			$scope.showMeMediaInteron=false;
			$scope.myInterconTopics=false;
			$scope.coysInterconTopic=true;
			$whereClause=" ";	
			$http.get("StuffColectDataControl.php?q="+ "IntercCurrentYe" + $whereClause).then(function (response) {$scope.listInterconData = response.data.records;});
		};
		$scope.fungsiInterconDelete = function() {
			$customer = "Bambang"
			if ($customer == "Daniel") {
				$scope.showMeDeleteIntercon = true;
				$scope.hideMeDeleteIntercon = true;
				$whereClause = " WHERE `nomor_intercon` = " + document.getElementById('modalHeading').innerHTML;
				$http.get("StuffColectDataControl.php?q="+ "AgendaDeleteRec" + $whereClause);
				} else {
						$scope.sshowMeDeleteIntercon = false;
						$scope.hideMeDeleteIntercon = false;
				};
		};
		$scope.fungsiInterconDetailShow= function(nomorIntercon) {
			$scope.nomorUrutIntercon=nomorIntercon;
			$reasNumber=nomorIntercon;
			$whereClause = " WHERE `nomor_intercon` = " + $reasNumber;
			$http.get("StuffColectDataControl.php?q="+ "IntercCurrentYe" + $whereClause).then(function (response) {$scope.anInterconData = response.data.records;});
		};
		$scope.fungsiInterconShowMeSearchIntercon = function() {
			if($scope.showMeSearchByIntercon == false){
				$scope.showMeSearchByIntercon = true;
				$scope.showMeInterconTabel=true;
			} else{
				$scope.showMeSearchByIntercon = false;
			};
		};
		$scope.fungsiSearchCustomer = function() {
			$scope.showMeSearchOfTheTable=true
			$scope.showMeTheTable=true;
			$scope.showMeSelectedCustomer=false;	
			$scope.showMeAllCustomers=true;	
			$scope.modalBodyTransaction=true;		
			$scope.modalBodyNewBusiness=false;
			$scope.modalBodyRenewal=false;
			$scope.modalAlteration=false;
			$scope.modalClaim=false;
			
			$mTahun = d.getFullYear();
			$whereClause = " WHERE ((readsyscustomer.klasifikasi = 'C') AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ")) OR ((readsyscustomer.klasifikasi = 'C') AND (COALESCE(ReadsYsBillingTransaction.tahun,0) = 0))";
			$http.get("StuffColectDataControl.php?q="+ "ListOfCustomer1" + $whereClause).then(function (response) {$scope.listCustomerData = response.data.records;});
		};
		$scope.fungsiShowCPDetail= function(noCP) {
			if ($scope.contactPersonCustomer==true){
				$scope.contactPersonCustomer=false;
			} else {
				$scope.contactPersonCustomer=true;
			};	
			$noCP=noCP;
			$whereClause = " WHERE no_contact = " + $noCP;
			$http.get("StuffColectDataControl.php?q="+ "ContactPersonal" + $whereClause).then(function (response) {$scope.aCPData = response.data.records;});
		};
		$scope.fungsiShowDetailMasterClaim = function(noClaim) {
			$noClaim=noClaim;
			$whereClause = " WHERE `readsysmasterclaim`.`claim_code` = " + $noClaim;
			$http.get("StuffColectDataControl.php?q="+ "ProcessingClaim" + $whereClause).then(function (response) {$scope.aClaimsData = response.data.records;});									
		};
		$scope.fungsiShowDetailReinsurancePolicy = function(reasNumber) {
			$reasNumber=reasNumber;
			$scope.IframeSrcUrl = 'MasterPolicyView.html?nomorReasuransi = '  + $reasNumber;
			$whereClause = " WHERE `readsysdetailcessieidentityingeneral`.`reas_no` = " + $reasNumber;
			$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.aPolicyIdentityData = response.data.records;});
		};
		$scope.fungsiShowTransactionDetail= function(noClient,customer) {
			$mTahun = d.getFullYear()-1;
			$noClient=noClient;
			$customer=customer;
			$scope.nomorClient=noClient;
			$scope.customerName=customer;
			$whereClause = " WHERE (ReadsYsBillingTransaction.no_client = " + $noClient + ") AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ") ";
			$http.get("StuffColectDataControl.php?q="+ "TransactionsBiz" + $whereClause).then(function (response) {$scope.transactionData = response.data.records;});
			$whereClause = " WHERE ReadsYsBillingTransaction.tahun = " + $mTahun;
			$http.get("StuffColectDataControl.php?q="+ "TransactionsBiT" + $whereClause).then(function (response) {$scope.totalTransactionData = response.data.records;});
			$whereClause = " WHERE no_client = " + $noClient;
			//$http.get("StuffColectDataControl.php?q="+ "TreatyAgreement" + $whereClause).then(function (response) {$scope.listTreatyData = response.data.records;});
			$http.get("StuffColectDataControl.php?q="+ "CustomerInforma" + $whereClause).then(function (response) {$scope.aCustomerData = response.data.records;});
			$whereClause = " WHERE `no_client` = " + $noClient;
			$http.get("StuffColectDataControl.php?q="+ "ContactPersonal" + $whereClause).then(function (response) {$scope.listCPData = response.data.records;});
			
			$http.get("StuffColectDataControl.php?q="+ "ProcessingClaim" + $whereClause).then(function (response) {$scope.listRegisteredClaimData = response.data.records;});
			$http.get("StuffColectDataControl.php?q="+ "ProcessTotClaim" + $whereClause).then(function (response) {$scope.totalRegisteredClaimData = response.data.records;});
			
			$http.get("StuffColectDataControl.php?q="+ "ProcessingClaim" + $whereClause).then(function (response) {$scope.listProceededClaimsData = response.data.records;});
			$http.get("StuffColectDataControl.php?q="+ "ProcessTotClaim" + $whereClause).then(function (response) {$scope.totalProceededClaimData = response.data.records;});
			
			$http.get("StuffColectDataControl.php?q="+ "ProcessingClaim" + $whereClause).then(function (response) {$scope.listOutstandingClaimData = response.data.records;});
			$http.get("StuffColectDataControl.php?q="+ "ProcessTotClaim" + $whereClause).then(function (response) {$scope.totalOutstandingClaimData = response.data.records;});
			
			$http.get("StuffColectDataControl.php?q="+ "ProcessingClaim" + $whereClause).then(function (response) {$scope.listHaveBeenPaidClaimsData = response.data.records;});									
			$http.get("StuffColectDataControl.php?q="+ "ProcessTotClaim" + $whereClause).then(function (response) {$scope.totalPaidClaimsData = response.data.records;});
		};
	});