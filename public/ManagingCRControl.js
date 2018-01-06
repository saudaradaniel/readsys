//window.location.reload();
var app = angular.module('myApp', []);
var months = ["January","February","March","April","May","June","July","August","September","October", "November", "December"];
var d = new Date(), $mTahun, $whereClause, $month, $customer, $task, $reasNumber
$mTahun = d.getFullYear();

app.controller("crManagingControl", function($scope,$http) {
	$scope.fungsiAgendaCloseModal = function() {
		$scope.showMeDeleteAgenda = false;
		$scope.hideMeDeleteAgenda = true;
	};
	$scope.fungsiAgendaActivateFormEntry = function() {
		document.getElementById('judul').innerHTML = "Customer Transactions";
		$("#modalJudulTransactionDetail").click(function(){
			$("#myEntryNewAgendaModal").modal(); 
		});
	};
	$scope.fungsiAgendaColectMyAgenda = function() {
		$whereClause=" WHERE `NAMA` = 'Daniel' ORDER BY `TGL_AGENDA`, `WAKTU` ";	
		$http.get("StuffColectDataControl.php?q="+ "AgendaCurrentYe" + $whereClause).then(function (response) {$scope.listAgendaData = response.data.records;});
	};
	$scope.fungsiAgendaColectThisYear = function() {
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
	$scope.fungsiAgendaEntryAndModifyCloseModal = function($scope) {
		$scope.showMeAgendaTabel = false;
	};
	$scope.fungsiColectClaim = function(mTask) {
		$task = mTask;
		$whereClause = " WHERE ((readsyscustomer.klasifikasi = 'C') AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ")) OR ((readsyscustomer.klasifikasi = 'C') AND (COALESCE(ReadsYsBillingTransaction.tahun,0) = 0))";
		$http.get("StuffColectDataControl.php?q="+ $task + $whereClause).then(function (response) {$scope.listClaimData = response.data.records;});
	};
	$scope.fungsiColectCustomer = function() {
		document.getElementById('titleRefCustomer').innerHTML = "Customer Transactions";
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
		document.getElementById('titleRefCustomer').innerHTML = "Top 10 Transaction";
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
	$scope.fungsiColectCustomerBusiness = function() {
		document.getElementById('titleRefCustomer').innerHTML = "Top 10 Business Transaction";
		$scope.showMeSearchOfTheTable=false
		$scope.showMeTheTable=true;
		$scope.showMeAllCustomers=true;
		$scope.showMeCustomerClaim=false;
		$scope.showMeCustomerBusin=true;
		$scope.showMeCustomerLapses=false;
		$scope.showMeCustomerOther=false;
		$scope.showMeSelectedCustomer=false;
		$scope.modalBodyTransaction=false;
		$scope.modalBodyNewBusiness=true;
		$scope.modalBodyRenewal=false;
		$scope.modalAlteration=false;
		$scope.modalClaim=false;
		$mTahun = d.getFullYear();
		$whereClause = " WHERE ((readsyscustomer.klasifikasi = 'C') AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ")) OR ((readsyscustomer.klasifikasi = 'C') AND (COALESCE(ReadsYsBillingTransaction.tahun,0) = 0))";
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustomer5" + $whereClause).then(function (response) {$scope.listCustomerData = response.data.records;});
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
	$scope.fungsiHideIcon = function() {
		$scope.showMeIconIntercon=false;
	};
	$scope.fungsiHideLookup = function() {
		$scope.showMeSearchOfTheTable=false;
	};
	$scope.fungsiInterconActivateFormEntry = function() {
		$("#modalJudulTransactionDetail").click(function(){
			$("#myEntryNewInterconModal").modal(); 
		});
	};
	$scope.fungsiInterconColectMyIntercon = function() {
		$whereClause=" WHERE `pengirim`= 'Daniel' ";	
		$http.get("StuffColectDataControl.php?q="+ "IntercCurrentYe" + $whereClause).then(function (response) {$scope.listInterconData = response.data.records;});
	};
	$scope.fungsiInterconColectThisYear = function() {
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
	$scope.fungsiShowAgendaDetail= function(nomorAgenda) {
		$scope.nomorUrutAgenda=nomorAgenda;
		$reasNumber=nomorAgenda;
		$whereClause = " WHERE `No_agenda` = " + $reasNumber;
		$http.get("StuffColectDataControl.php?q="+ "AgendaCurrentYe" + $whereClause).then(function (response) {$scope.anAgendaData = response.data.records;});
		$whereClause = " WHERE `no_agenda` = " + $reasNumber;
		$http.get("StuffColectDataControl.php?q="+ "AgendaAttention" + $whereClause).then(function (response) {$scope.listAttentionAgendaData = response.data.records;});									
	};
	$scope.fungsiShowCPDetail= function(noCP) {
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
		//$scope.$reasNumber=reasNumber;
		$whereClause = " WHERE `reas_no` = 2" //+ $reasNumber;
		$http.get("StuffColectDataControl.php?q="+ "ListOfCustCesie" + $whereClause).then(function (response) {$scope.aPolicyIdentityData = response.data.records;});
		//$http.get("StuffColectDataControl.php?q="+ "ReinsurancePoli" + $whereClause).then(function (response) {$scope.aPolicyData = response.data.records;});									
	};
	$scope.fungsiShowTransactionDetail= function(noClient,customer) {
		$mTahun = d.getFullYear();
		$noClient=noClient;
		$customer=customer;
		$scope.nomorClient=noClient;
		$scope.customerName=customer;
		$whereClause = " WHERE (ReadsYsBillingTransaction.no_client = " + $noClient + ") AND (ReadsYsBillingTransaction.tahun = " + $mTahun + ") ";
		$http.get("StuffColectDataControl.php?q="+ "TransactionsBiz" + $whereClause).then(function (response) {$scope.transactionData = response.data.records;});
		$whereClause = " WHERE ReadsYsBillingTransaction.tahun = " + $mTahun;
		$http.get("StuffColectDataControl.php?q="+ "TransactionsBiT" + $whereClause).then(function (response) {$scope.totalTransactionData = response.data.records;});
		$whereClause = " WHERE no_client = " + $noClient;
		$http.get("StuffColectDataControl.php?q="+ "TreatyAgreement" + $whereClause).then(function (response) {$scope.listTreatyData = response.data.records;});
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
	$scope.fungsiShowTreatyDetail= function(noTreaty) {
		$noTreaty=noTreaty;
		$whereClause = " WHERE id_treaty = " + $noTreaty;
		$http.get("StuffColectDataControl.php?q="+ "TreatyAgreement" + $whereClause).then(function (response) {$scope.aTreatyData = response.data.records;});
	};
	$scope.fungsiActivateAgenda = function() {
		$scope.showMe1=true;
		$scope.showMe2=false;
		$scope.showMe3=false;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$scope.showMe6=false;
		$scope.showMe7=false;
		$scope.mSwitch=true;
		$scope.mSwitch2=false;
		$scope.mSwitch3=false;
		$scope.mSwitch4=false;
		$scope.mSwitch5=false;
		$scope.mSwitch6=false;
		$scope.mSwitch7=false;
		$scope.showMeAllCustomers=true;
		
	};
	$scope.fungsiActivateClaim = function() {
		$scope.showMe1=false; 
		$scope.showMe2=true;
		$scope.showMe3=false;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$scope.showMe6=false;
		$scope.showMe7=false;
		$scope.mSwitch=false;
		$scope.mSwitch2=true;
		$scope.mSwitch3=false;
		$scope.mSwitch4=false;
		$scope.mSwitch5=false;
		$scope.mSwitch6=false;
		$scope.mSwitch7=false;
	};
	$scope.fungsiActivateBusiness = function() {
		$scope.showMe1=false; 
		$scope.showMe2=false;
		$scope.showMe3=true;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$scope.showMe6=false;
		$scope.showMe7=false;
		$scope.mSwitch=false;
		$scope.mSwitch2=false;
		$scope.mSwitch3=true;
		$scope.mSwitch4=false;
		$scope.mSwitch5=false;
		$scope.mSwitch6=false;
		$scope.mSwitch7=false;
	};
	$scope.fungsiActivateIntercom = function() {
		$scope.showMe1=false; 
		$scope.showMe2=false;
		$scope.showMe3=true;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$scope.showMe6=false;
		$scope.showMe7=false;
		$scope.mSwitch=false;
		$scope.mSwitch2=false;
		$scope.mSwitch3=true;
		$scope.mSwitch4=false;
		$scope.mSwitch5=false;
		$scope.mSwitch6=false;
		$scope.mSwitch7=false;
	};
	$scope.fungsiActivateRequisition = function() {
		$scope.showMe1=false; 
		$scope.showMe2=false;
		$scope.showMe3=true;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$scope.showMe6=false;
		$scope.showMe7=false;
		$scope.mSwitch=false;
		$scope.mSwitch2=false;
		$scope.mSwitch3=true;
		$scope.mSwitch4=false;
		$scope.mSwitch5=false;
		$scope.mSwitch6=false;
		$scope.mSwitch7=false;
	};
	$scope.fungsiActivateSquawk = function() {
		$scope.showMe1=false; 
		$scope.showMe2=false;
		$scope.showMe3=true;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$scope.showMe6=false;
		$scope.showMe7=false;
		$scope.mSwitch=false;
		$scope.mSwitch2=false;
		$scope.mSwitch3=true;
		$scope.mSwitch4=false;
		$scope.mSwitch5=false;
		$scope.mSwitch6=false;
		$scope.mSwitch7=false;
	};
	$scope.fungsiActivateThreat = function() {
		$scope.showMe1=false; 
		$scope.showMe2=false;
		$scope.showMe3=true;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$scope.showMe6=false;
		$scope.showMe7=false;
		$scope.mSwitch=false;
		$scope.mSwitch2=false;
		$scope.mSwitch3=false;
		$scope.mSwitch4=false;
		$scope.mSwitch5=false;
		$scope.mSwitch6=false;
		$scope.mSwitch7=true;
	};     
    $scope.fungsiShowCustomerTable = function() {
			if ($scope.showMeCustomerTable=true) {
				$scope.showMeCustomerTable=false;
			} else {
				$scope.showMeCustomerTable=true;
			}
	};
});
app.controller("crEntryIntercon", function($scope,$http) {
	$scope.InterconDate = d;
    $scope.Sender = '';
	$scope.Receiver = '';
	$scope.Topic = 'Topic';
});


