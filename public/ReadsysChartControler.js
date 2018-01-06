var app = angular.module('myChartApp', []), d = new Date(), $mTahun, $gambarChart;
app.controller("chartControl", function($scope,$http) {
	$http.get("ReadsysChartControl.php?q="+ "TRIM(jenis_routine) = 'ReadsYs Chart Task'").then(function (response) {$scope.chartTask = response.data.records;});
	$http.get("ReadsysChartControl.php?q="+ "TRIM(jenis_routine) = 'Chart Size Customization'").then(function (response) {$scope.chartSizeCustomization = response.data.records;});
	$scope.jenisChart=" ";
	$scope.mainChartTitle=" ";
	$scope.mainChartSubTitle=" ";
	$scope.showMe=false;
	$scope.showMe1=false;
	$scope.showMe2=false;
	$scope.showMe3=false;
	$scope.showMe4=false;
	$scope.showMe5=false;
	$scope.showMe8=false;
	$scope.showme9=true;
	$scope.showMe10=false;
	$scope.showMe11=true;
	$scope.showMe12=false; 
	$scope.showMe13=false; 
	$scope.showMe14=false; 
	$scope.showMe15=false; 
	$scope.showMe16=false; 
	$scope.showMe17=false; 
	$scope.showMe18=false; 
	$scope.showMe19=false; 
	$scope.showMe20=false;
	$scope.showMe30=true;
	$scope.fungsiArrangeChartView = function() {
		$scope.showMe15=true;
	};
	$scope.fungsiChartIntroduction = function() {
		$scope.showMe11=true;
		$scope.showMe12=false;
	};
	$scope.fungsiActivateChart = function($tahun) {
		switch($tahun) {
			case "Main":
				$scope.showMe30=true;
				break;
			case "1":
				$scope.showMe31=true;
			case "2":
				$scope.showMe32=true;
				break;
			case "3":
				$scope.showMe33=true;
			case "4":
				$scope.showMe34=true;
				break;
			default:
		};
	};
	$scope.fungsiDeactivateChart = function($tahun) {
		switch($tahun) {
			case "Main":
				$scope.showMe30=false;
				break;
			case "1":
				$scope.showMe31=false;
			case "2":
				$scope.showMe32=false;
				break;
			case "3":
				$scope.showMe33=false;
			case "4":
				$scope.showMe34=false;
				break;
			default:
		};
	};
	$scope.fungsiSettingSelectedChart = function($tahun) {
		$tahun=$tahun
		$scope.showMe12=false;
		$scope.showMe14=true;
		$scope.showMe50=false;
		document.getElementById("variabelTerkirim").innerHTML = $tahun;
	};
	$scope.fungsiManagingChartsTitle = function(managingChartsTitle) {
		$scope.showMe16=false;		
		$scope.showMe17=false;
		$scope.showMe18=false;
		$scope.showMe19=false;
		$scope.showMe20=false;
		$gambarChart=managingChartsTitle;
		switch($tahun) {
			case "Setting Main Chart's Size":
				$scope.showMe16=true;
				break;
			case "Setting Chart #One's Size":
				$scope.showMe17=true;
			case "Setting Chart #Two's Size":
				$scope.showMe18=true;
				break;
			case "Setting Chart Three's Size":
				$scope.showMe19=true;
			case "Setting Chart Four's Size":
				$scope.showMe20=true;
				break;
			case "Setting All Charts":
				$scope.showMe16=true;		
				$scope.showMe17=true;
				$scope.showMe18=true;
				$scope.showMe19=true;
				$scope.showMe20=true;
				break;
			default:
		};
	};
	$scope.fungsiManagingChartsSize = function(managingChartsSize) {
		$scope.showMe40=false;		
		$scope.showMe41=false;
		$scope.showMe42=false;
		$scope.showMe43=false;
		$scope.showMe44=false;
		$tahun=managingChartsSize
		switch($tahun) {
			case "Main":
				$scope.showMe40=true;
				break;
			case "1":
				$scope.showMe41=true;
			case "2":
				$scope.showMe42=true;
				break;
			case "3":
				$scope.showMe43=true;
			case "4":
				$scope.showMe44=true;
				break;
			default:
		};
	};	
	$scope.fungsiPlacingMainChart = function() {
		//$tahun=document.getElementById("variabelTerkirim").innerHTML;
		//$gambarChart = "<img src='/img/" + $tahun + ".png' style = 'width:100%; height:400px;'>";
		//document.getElementById("mainChart").innerHTML = $gambarChart;
		//$http.get("ColectDataAktuarialValuation.php?q="+ legendSurplus + " " + $mTahun).then(function (response) {
			
			 
		
		//});
		$scope.funf = function(data, chart_type){
			console.log(data);
			var ctx = document.getElementById('myMainChart').getContext('2d');
			var chart = new Chart(ctx, {
				// The type of chart we want to create
				type: chart_type,

				// The data for our dataset
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July"],
					datasets: [{
						label: "Asset",
						backgroundColor: 'rgb(255, 99, 132)',
						borderColor: 'rgb(255, 99, 132)',
						data: data.set1,
						fill: false,
					}, {
						label: "Liability",
						fill: false,
						backgroundColor: 'blue',
						borderColor: 'blue',
						data: data.set2,
						fill: false,
					}, {
						label: "Surplus",
						fill: false,
						backgroundColor: 'black',
						borderColor: 'black',
						data: data.set3,
					}],
				},

				// Configuration options go here
				options: {
					tooltips: {
								mode: 'point'
							}
				}
			});
		};
		
		var data = {
				set1:[0, 10, 5, 2, 20, 30, 45],
				set2:[10, 110, 15, 12, 120, 130, 145],
				set3:[100, 150,15,15,70,35,137]
			};
		$scope.funf(data, 'bar');
		
		/* var ctx = document.getElementById('myMainChart').getContext('2d');
		var chart = new Chart(ctx, {
			// The type of chart we want to create
			type: 'line',

			// The data for our dataset
			data: {
				labels: ["January", "February", "March", "April", "May", "June", "July"],
				datasets: [{
					label: "Asset",
					backgroundColor: 'rgb(255, 99, 132)',
					borderColor: 'rgb(255, 99, 132)',
					data: [0, 10, 5, 2, 20, 30, 45],
					fill: false,
				}, {
					label: "Liability",
                    fill: false,
                    backgroundColor: 'blue',
                    borderColor: 'blue',
                    data: [10, 110, 15, 12, 120, 130, 145],
					fill: false,
				}, {
					label: "Surplus",
                    fill: false,
                    backgroundColor: 'black',
                    borderColor: 'black',
                    data: [110, 1110, 115, 112, 1120, 1130, 1145],
				}],
			},

			// Configuration options go here
			options: {
				tooltips: {
							mode: 'point'
						}
			}
		}); */
	};
	$scope.fungsiPlacingMainChartTitle = function() {
		$scope.showMe16=true;
	}
	$scope.fungsiPlacingChartOne = function($tahun) {
		$tahun=document.getElementById("variabelTerkirim").innerHTML;
		$gambarChart = "<img src='/img/" + $tahun + ".png' style = 'width:100%; height:200px;'>";
		document.getElementById("firstChart").innerHTML = $gambarChart;
	};
	$scope.fungsiPlacingChartOneTitle = function($tahun) {
		$scope.showMe17=true;
	}
	$scope.fungsiPlacingChartTwo = function($tahun) {
		$tahun=document.getElementById("variabelTerkirim").innerHTML;
		$gambarChart = "<img src='/img/" + $tahun + ".png' style = 'width:100%; height:200px;'>";
		document.getElementById("secondChart").innerHTML = $gambarChart;
	};
	$scope.fungsiPlacingChartTwoTitle = function($tahun) {
		$scope.showMe18=true;
	};
	$scope.fungsiPlacingChartThree = function($tahun) {
		$tahun=document.getElementById("variabelTerkirim").innerHTML;
		$gambarChart = "<img src='/img/" + $tahun + ".png' style = 'width:100%; height:200px;'>";
		document.getElementById("thirtChart").innerHTML = $gambarChart;
	};
	$scope.fungsiPlacingChartThreeTitle = function($tahun) {
		$scope.showMe19=true;
	};
	$scope.fungsiPlacingChartFour = function($tahun) {
		$tahun=document.getElementById("variabelTerkirim").innerHTML;
		$gambarChart = "<img src='/img/" + $tahun + ".png' style = 'width:100%; height:200px;'>";
		document.getElementById("fourthChart").innerHTML = $gambarChart;
	};
	$scope.fungsiPlacingChartFourTitle = function($tahun) {
		$scope.showMe20=true;
	};
	$scope.fungsiListed = function() {
		$scope.showMe=true;
		$scope.showMe1=false;
		$scope.showMe2=false;
		$scope.showMe3=false;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$scope.showMe6=true;
		$scope.showMe7=true;
		$scope.showMe8=true;
		$scope.showMe12=true;
		$scope.showMe13=false;
		$scope.showMe14=false;
		$scope.showMe15=false;
		$http.get("ReadsysChartControl.php?q="+ "TRIM(jenis_routine) = 'ReadsYs Chart Task'").then(function (response) {$scope.chartTask = response.data.records;});	
	};
	$scope.fungsiCreate = function() {
		$scope.showMe=false;
		$scope.showMe1=false;
		$scope.showMe2=false;
		$scope.showMe3=true;
		$scope.showMe4=false;
		$scope.showMe5=false;
	};
	$scope.fungsiRelated = function() {
		$scope.showMe=true;
		$scope.showMe1=false;
		$scope.showMe2=false;
		$scope.showMe3=false;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$http.get("ReadsysChartControl.php?q="+ "TRIM(jenis_routine) = 'ReadsYs Chart Task'").then(function (response) {$scope.chartTask1 = response.data.records;});	
	};
	
	$scope.fungsiRestarting = function() {
		$scope.showMe=false;
		$scope.showMe1=false;
		$scope.showMe2=false;
		$scope.showMe3=false;
		$scope.showMe4=false;
		$scope.showMe5=false;
		$scope.showMe6=true;
		$scope.showMe7=false;
	};

	$scope.fungsiSelectTask = function($tahun) {
		$scope.showMe1=true;
		$tahun = $tahun;
		$http.get("ReadsysChartControl.php?q="+ "(TRIM(jenis_routine) = 'ReadsYs Chart SubTask') AND (TRIM(keterangan) = '" + $tahun  + "')").then(function (response) {$scope.chartTask2 = response.data.records;});	
	};
	
	$scope.fungsiSelectTask1 = function($tahun) {
		$scope.showMe4=true;
		$tahun = $tahun;
		$http.get("ReadsysChartControl.php?q="+ "(TRIM(jenis_routine) = 'ReadsYs Chart SubTask') AND (TRIM(keterangan) = '" + $tahun  + "')").then(function (response) {$scope.chartTask2 = response.data.records;});	
	};
	
$scope.fungsiSelectTask2 = function($tahun) {
		$scope.showMe11=false;
	    $scope.showMe14=true;
		$scope.showMe50=true;
		$tahun = $tahun;
		$http.get("ReadsysChartControlView.php?q="+ " ").then(function (response) {$scope.chartTask3 = response.data.records;});
		$http.get("ReadsysChartControl.php?q="+ "TRIM(jenis_routine) = 'Managing Chart View'").then(function (response) {$scope.managingViewTask = response.data.records;});	
	};
$scope.fungsiDisplayChart = function() {
		$scope.showMe2=false;
		$scope.showMe6=false;
		$scope.showMe8=false;
		$scope.showMe9=false;
		$scope.showMe10=true;
	};
});




