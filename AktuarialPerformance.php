<!DOCTYPE html>
<html lang="en">
<head>
  <title>Actuarial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    h2   {color: green;font-family: verdana;font-size: 300%;}
	h4   {color: blue;font-family: verdana;font-size: 100%;}
    h5   {color: green;font-family: verdana;font-size: 100%;}
    li a {display: block;background-color: black;color: white;padding: 8px 16px;text-decoration: none;}
	li a.active {background-color: #4CAF50;color: white;}
	li a:hover:not(.active) {background-color: lightgreen;color: white;}
	ul {background-color: green;color: blue;}
	
  </style>
  
</head>
<body>

    <div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top">		
                <div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand active" data-toggle="collapse" data-target="#viewprocedureshelpataglance">Performance</a> 
				</div>

				<div class="collapse navbar-collapse" id="myNavbar"  style="padding-left=5px; padding-left=5px;">
                    <ul class="nav navbar-nav">
                        <li><a href="Aktuaria.html">Home</a></li>
						<li><a onclick="mengaktifkanInfoRequiredbySA()">Info Required by S.A</a></li> 
						<li><a onclick="mengaktifkanActValuation()">Act. Valuation</a></li> 
						<li><a onclick="mengaktifkanCPlanning()">C. Planning</a></li> 
						<li><a onclick="mengaktifkanNetWorth()">Net Worth</a></li> 
						<li><a onclick="mengaktifkanGoodwill()">Goodwill</a></li>
                        <li><a onclick="mengaktifkanVStudy()">V. Study</a></li> 
                        <li><a onclick="mengaktifkanMonitoring()">Monitoring</a></li> 						
                    </ul>
					<a class="btn btn-primary navbar-btn  navbar-right" data-toggle="collapse" data-target="#"></a>
					<a class="btn btn-primary navbar-btn  navbar-right glyphicon glyphicon-stats" data-toggle="collapse" data-target="#displayChartControl">Chart</a>
					<a class="btn btn-danger navbar-btn  navbar-right glyphicon glyphicon-cd" data-toggle="collapse" data-target="#databaseManagement">Database</a>
					<a class="btn btn-success navbar-btn  navbar-right glyphicon glyphicon-random" data-toggle="collapse" data-target="#KeyPerformanceParameter">Parameter</a>
				</div>
        </nav>
	</div><br><br>
   
    <div id="Procedure" class="container-fluid" style="padding-top:15px; padding-right:5px; padding-left:5px">	
		<div id="viewprocedureshelpataglance" class="collapse">
			<div class="panel-group" id="accordionataglance">
				<div class="panel panel-success" id="procedureAtagalance">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseataglance">Steps procedure at aglance</a>
                        </h4>
                    </div>
                    <div id="collapseataglance" class="panel-collapse collapse in">
                        <div class="panel-body"> 
							<div class="panel-group" id="accordionataglance1">
								<div class="panel panel-danger">
								    <div class="panel-heading">
                                        <h4 class="panel-title">
                                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseataglance1">Basic Information Requirements</a>
                                        </h4>
                                    </div>
									<div id="collapseataglance1" class="panel-collapse collapse in">
										<div class="panel-body"> 
											 Default active page of performance is Basic Information Requirements, so no need to select and activate this menu.
									         <p></p>
									         1. Click Basic Information Requirements button to activate/deactivate processing procedures.
									         <p></p>
									         2. Select a row of column required information and click it.
									         <p></p>
									         3. Click buttons consecutively from view data, chart control, and display chart.
										</div>
									</div>
								</div>
							</div>
							<div class="panel-group" id="accordionataglance2">
								<div class="panel panel-danger">
								    <div class="panel-heading">
                                        <h4 class="panel-title">
                                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseataglance2">Information Required by Supervisory Authority</a>
                                        </h4>
                                    </div>
									<div id="collapseataglance2" class="panel-collapse collapse in">
										<div class="panel-body">
									        1. Click menu Information Required by Supervisory Authority.
									        <p></p>												
									        2. Click Information Required by Supervisory Authority button to activate/deactivate processing procedures.
									        <p></p>Information Required by Supervisory Authority
									        3. Information Required by Supervisory Authority.
									        <p></p>
									        4. Click buttons consecutively from view data, chart control, and display chart.
										</div>
									</div>
								</div>
						     </div>
							<div class="panel-group" id="accordionataglance3">
								<div class="panel panel-danger">
								    <div class="panel-heading">
                                        <h4 class="panel-title">
                                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseataglance3">Actuarial Valuation</a>
                                        </h4>
                                    </div>
									<div id="collapseataglance3" class="panel-collapse collapse in">
										<div class="panel-body"> 
									        1. Click Basic Information Requirements button to activate/deactivate processing procedurres.
									        <p></p>
									        2. Select a row of column required information and click it.
									        <p></p>
									        3. Click buttons consecutively from view data, chart control, and display chart.
										</div>
									</div>
								</div>
							</div>
							<div class="panel-group" id="accordionataglance4">
								<div class="panel panel-danger">
								    <div class="panel-heading">
                                        <h4 class="panel-title">
                                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseataglance4">Corporate Planning</a>
                                        </h4>
                                    </div>
									<div id="collapseataglance4" class="panel-collapse collapse in">
										<div class="panel-body"> 
									        1. Click Basic Information Requirements button to activate/deactivate processing procedurres.
									        <p></p>
									        2. Select a row of column required information and click it.
									        <p></p>
									        3. Click buttons consecutively from view data, chart control, and display chart.
										</div>
									</div>
								</div>
						    </div>
						    <div class="panel-group" id="accordionataglance5">
									    <div class="panel panel-default">
								            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseataglance5">Net Worth</a>
                                                </h4>
                                            </div>
									        <div id="collapseataglance5" class="panel-collapse collapse in">
											    <div class="panel-body"> 
									                1. Click Basic Information Requirements button to activate/deactivate processing procedurres.
									                <p></p>
									                2. Select a row of column required information and click it.
									                <p></p>
									                3. Click buttons consecutively from view data, chart control, and display chart.
												</div>
											</div>
								        </div>
									</div>
							<div class="panel-group" id="accordionataglance6">
									<div class="panel panel-danger">
								        <div class="panel-heading">
                                            <h4 class="panel-title">
                                               <a data-toggle="collapse" data-parent="#accordion" href="#collapseataglance6">Goodwill</a>
                                            </h4>
                                        </div>
									    <div id="collapseataglance6" class="panel-collapse collapse in">
											<div class="panel-body"> 
									            1. Click Basic Information Requirements button to activate/deactivate processing procedurres.
									            <p></p>
									            2. Select a row of column required information and click it.
									            <p></p>
									            3. Click buttons consecutively from view data, chart control, and display chart.
											</div>
										</div>
								    </div>
							</div>
							<div class="panel-group" id="accordionataglance7">
								<div class="panel panel-danger">
								    <div class="panel-heading">
                                        <h4 class="panel-title">
                                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseataglance7">Viability Study</a>
                                        </h4>
                                    </div>
									<div id="collapseataglance7" class="panel-collapse collapse in">
										<div class="panel-body"> 
									        1. Click Basic Information Requirements button to activate/deactivate processing procedurres.
									        <p></p>
									        2. Select a row of column required information and click it.
									        <p></p>
									        3. Click buttons consecutively from view data, chart control, and display chart.
										</div>
									</div>
							   </div>
							</div>
						</div>
                    </div>
                </div>
                <div class="panel panel-success" id="procedureAccessMainMenu">
					<div class="panel-heading">
						<h4 class="panel-title">
						   <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Procedure to access Main Menu</a>
						</h4>
					</div>
                    <div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">
							<h3>Main Menu</h3>
							Performance has six informations category, each category is represented by a menu, it control many tasks as well as many references. The default informations category is Basic Information Requirements. Every selected menu will activated a button which has caption represent the menu's element.
							<h3>Procedures</h3>
							1. Select an available menu, and then click it to activate process. 
							<p></p>
							2. Click button which has caption represent the menu's element to see processing procedure.
							<p></p>
							3. Click a selected Required Information to start working with details information and it various support elements.
						</div>
                    </div>
                </div>
				<div class="panel panel-success" id="procedureAccessBIR">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseBIR">Basic Information Requirements</a>
						</h4>
					</div>				
					<div id="collapseBIR" class="panel-collapse collapse in">
						<div class="panel-body">
							<div class="panel-group" id="accordionaBIR">
								<div class="panel panel-danger">
									<div class="panel-heading">
										<h4 class="panel-title">
										   <a data-toggle="collapse" data-parent="#accordion" href="#collapseaccordionaBIR">Procedure to access Indicators and R.I</a>
										</h4>
									</div>	
									<div id="collapseaccordionaBIR" class="panel-collapse collapse in">
										<div class="panel-body"> 
											<h3>Indicators</h3>
											They are icons. It is a progress representation at a glance of a required information, they are increase, decrease, stable, unstable, or stagnant. It will change according to the values of a 3 consecutive time series of the current year.
											<h3>Required Information</h3>
											These are group of information that will tell the condition of the company's operational progress. Click it to upadate the details of basic required Information, firstly it will change the title of the panel and at last passing the control to buttons on that panel.
											<h3>Procedures</h3>
											1. Select one of four required information available.
											<p></p>
											2. Goto Details of Required Information.
										</div>
									</div>
								</div>
								
								<div class="panel panel-danger">
									<div class="panel-heading">
										<h4 class="panel-title">
										   <a data-toggle="collapse" data-parent="#accordion" href="#collapseaccordionaBIR1">Details of Required Information</a>
										</h4>
									</div>	
									<div id="collapseaccordionaBIR1" class="panel-collapse collapse in">
										<div class="panel-body"> 
										    <h3>The Title of the Panel</h3>
										    This is the title of a panel which is setting to manage the details information of a selected required information. It will change accordingly. In the Panel there is a collapsed panel that fasilitate a grid and its data control tools.
										    <h3>The Buttons</h3>
										    View Data: This button will control tasks to colect data and show them in a collapse panel where grid and data control tools is shown. 
										    <p></p>
										    Chart Control: This button will control tasks of type of chart, the X-axis, the Y-Axis, the series, and chart's title.
										    <p></p>
										    Display Chart: This button will control tasks that activate chart and it can simplify user in understanding the meaning of data colected using sql query command together with passing parameters. 
										    <p></p>
										    Time Series: This dropdown button will be used to set up a passing parameter that control the time interval or time series and sending it to sql query command.
										    <h3>Procedures</h3>
										    1. Click view data button to show a view Panel that consist of a grid and Data Parameter.
										    <p></p>
										    2. Click Time Series (dropdown button) and select an available time series. System will search and colect data accordingly.
										    <p></p>
										    3. Click Control Chart button to show panel of chart. 
										    <p></p>
										    4. Click Display Chart button to show panel of chart. 
										    <p></p>
										    5. Manage the controls of the chart: type of chart, the X-axis, the Y-Axis, the series, and chart's title.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-success" id="procedureInformationRequiredbySA">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Information Required by S.A</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">
						   
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
	
    <div id="LayoutWindow" class="container-fluid" style="padding-top:5px; padding-right:5px; padding-left:5px">
		<button id="judulButtonPerformance" type="button" class="btn btn btn-success btn-block" style="padding-top:5px; padding-right:5px; padding-left:5px" data-toggle="collapse" data-target="#basicinformationrequirements"><a data-toggle="collapse tooltip" title="Click to activate processing procedures, click once again to deactivate" style="color:white;">Basic Information Requirements</a></button>
        <div id="basicinformationrequirements" class="collapse">  
		    <div class="row" style="padding-top:5px; padding-right:5px; padding-left:5px">
			    <div id="Indicator" class="col-lg-4" style="padding-top:0px; padding-right:5px; padding-left:5px">			
					<div id="indicatorUtama"class="table-responsive" style="padding-top:0px; padding-right:5px; padding-left:5px">				
						<table class="table table-hover table-bordered">
							<thead style="background-color:rgb(107, 126, 105); color:white;">
								<tr>
									<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;">Indicator</button></th>
									<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;">Required Information</button></th>
								</tr>
							</thead>
							<tbody style="background-color:lightgreen">
								<tr>
									<td>
									<img src="/Gambar/graph-3.png" class="media-object" style="width:70%">
									</td>
									<td id ="officesolvent" onclick = "mPilihOffiveSolvent()">Is the office solvent?</td>
								</tr>
								<tr>
									<td>
									<img src="/Gambar/graph-4.png" class="media-object" style="width:70%">
									</td>
									<td id ="officelongtermobjective" onclick = "mPilihLongTermObjective()">Is the office still in a position to fulfil its long term objectives regarding capital requirement and profit?</td>   
								</tr>
								<tr>
									<td>
									<img src="/Gambar/crest-icon-64.png" class="media-object" style="width:70%">
									</td>
									<td id ="officeperformingwell" onclick = "mPilihPerformingWell()">Is the office performing well or badly compareed to targets the management has set the office for the foreseeable future?</td>
								</tr>
								<tr>
									<td>
									<img src="/Gambar/graph-8.png" class="media-object" style="width:70%">
									</td>
									<td id ="officedaytodayperformance" onclick = "mPilihDaytodayPerformance()">Is the day to day performance satisfactory and what are the trend?</td>   
								</tr>
							</tbody>
						</table>
					</div>
					<div id="indicatorUtama1" class="table-responsive" style="padding-top:0px; padding-right:5px; padding-left:5px">				
						<table class="table table-hover table-bordered">
							<thead style="background-color:rgb(107, 126, 105); color:white;">
								<tr>
									<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;">Indicator</button></th>
									<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;">Required Information</button></th>
								</tr>
							</thead>
							<tbody style="background-color:lightgreen">
								<tr>
									<td>
									<img src="C:/xampp/htdocs/Gambar/graph-3.png" class="media-object" style="width:70%">
									</td>
									<td id ="officesolvent" onclick = "mPilihOffiveSolvent()">Is the office solvent?</td>
								</tr>
								<tr>
									<td>
									<img src="C:/xampp/htdocs/Gambar/graph-4.png" class="media-object" style="width:70%">
									</td>
									<td id ="officelongtermobjective" onclick = "mPilihLongTermObjective()">Is the office still in a position to fulfil its long term objectives regarding capital requirement and profit?</td>   
								</tr>
								<tr>
									<td>
									<img src="C:/xampp/htdocs/Gambar/crest-icon-64.png" class="media-object" style="width:70%">
									</td>
									<td id ="officeperformingwell" onclick = "mPilihPerformingWell()">Is the office performing well or badly compareed to targets the management has set the office for the foreseeable future?</td>
								</tr>
								<tr>
									<td>
									<img src="C:/xampp/htdocs/Gambar/graph-8.png" class="media-object" style="width:70%">
									</td>
									<td id ="officedaytodayperformance" onclick = "mPilihDaytodayPerformance()">Is the day to day performance satisfactory and what are the trend?</td>   
								</tr>
								<tr>
									<td>
									<img src="C:/xampp/htdocs/Gambar/graph-3.png" class="media-object" style="width:70%">
									</td>
									<td id ="officesolvent1" onclick = "mPilihOffiveSolvent()">The Corporate Plan would be Considered</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div id="indicatorUtama4" class="table-responsive" style="padding-top:0px; padding-right:5px; padding-left:5px">				
						<table class="table table-hover table-bordered">
							<thead style="background-color:rgb(107, 126, 105); color:white;">
								<tr>
									<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;">Indicator</button></th>
									<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;">Required Information</button></th>
								</tr>
							</thead>
							<tbody style="background-color:lightgreen">
								<tr>
									<td>
									<img src="/Gambar/graph-3.png" class="media-object" style="width:70%">
									</td>
									<td id ="officesolvent" onclick = "mPilihOffiveSolvent()">Whether the Proposed Plan Makes the Office More Vulnarable</td>
								</tr>
								<tr>
									<td>
									<img src="/Gambar/graph-4.png" class="media-object" style="width:70%">
									</td>
									<td id ="officelongtermobjective" onclick = "mPilihLongTermObjective()">What Financing is Required?</td>   
								</tr>
									</td>
									<td id ="officeperformingwell" onclick = "mPilihPerformingWell()">The First Step in Viability Study</td>
								<tr>
									<td>
									<img src="/Gambar/crest-icon-64.png" class="media-object" style="width:70%">
								</tr>
								<tr>
									<td>
									<img src="/Gambar/graph-8.png" class="media-object" style="width:70%">
									</td>
									<td id ="officedaytodayperformance" onclick = "mPilihDaytodayPerformance()">The Corporate Plan would be Considered</td>   
								</tr>
								<tr>
									<td>
									<img src="/Gambar/graph-4.png" class="media-object" style="width:70%">
									</td>
									<td id ="officelongtermobjective1" onclick = "mPilihLongTermObjective4()">Project Revenue Account for Each of the Next Five Years</td>   
								</tr>
								<tr>
									<td>
									<img src="/Gambar/crest-icon-64.png" class="media-object" style="width:70%">
									</td>
									<td id ="officeperformingwell1" onclick = "mPilihPerformingWell4()">Is it worthwhile to Delay the Emergence of Profit?</td>
								</tr>
								<tr>
									<td>
									<img src="/Gambar/graph-8.png" class="media-object" style="width:70%">
									</td>
									<td id ="officedaytodayperformance1" onclick = "mPilihDaytodayPerformance4()">Is it better to Close the Fund or to Continue to Write New Business?</td>   
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			    <div id="DetailsofRequiredInformation" class="col-lg-4" style="padding-top:0px; padding-right:5px; padding-left:5px">
					<div id="kontrolpanel" class="panel panel-success" style="padding-top:0px; padding-right:5px; padding-left:5px">
						<div class="panel-heading" id="menu1"><center>Details of Required Information</center></div>
						<div class="panel-body" id="panelDetailsRequiredInformation">		
							<div id="th11" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon11()"><span class="glyphicon glyphicon-triangle-top">#</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th12" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon12()"><span class="glyphicon glyphicon-triangle-bottom">#</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th13" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()">#</button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th21" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon glyphicon-triangle-top">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th22" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
										   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon glyphicon-triangle-bottom">Year</span></button></th>
										   <th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
										   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th23" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon-triangle-bottom">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon"></span>Month</button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th31" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon glyphicon-triangle-top">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th32" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											<th style="padding:0px;">
											<button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()">
											<span class="glyphicon">Year</span>
											</button>
											</th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon glyphicon-triangle-bottom">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th33" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th41" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon glyphicon-triangle-top">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th42" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon glyphicon-triangle-bottom">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="th43" class="table-responsive">
								<table class="table table-hover">
									<thead style="background-color:rgb(107, 126, 105); color:white">
										<tr>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
											<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
										</tr>
									</thead>
									<tbody style="background-color:rgba(255,0,255,0.3)">
										<tr>
											<td>1</td>
											<td>.01234</td>
											<td>123.556.890,50</td>
											<td>123.556.890,50</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div id="groupingbyYear" class="collapse">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th>#</th>
												<th>Year</th>
												<th>Month</th>
												<th>Valuation</th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>2017</td>
												<td>January</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="groupingbyMonth" class="collapse">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th>#</th>
												<th>Year</th>
												<th>Month</th>
												<th>Valuation</th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>2017</td>
												<td>January</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>	
					</div>	
				</div>

			    <div id="ExecutiveSummary" class="col-lg-4" style="padding-top:0px; padding-right:5px; padding-left:5px">
					<div  id="keteranganExecutiveSummaryUtama" class="panel panel-primary">
						<div class="panel-heading"><center>Executive Summary</center></div>
						<div class="panel-body" id="keteranganExecutiveSummary" style="padding-right:0px; padding-left:0px">
							<div class="panel-group">
								<div class="panel panel-success">
								  <div class="panel-heading" id="judulKeteranganOfficeSolvency">Office Solvency</div>
								  <div class="panel-body" id="keteranganOfficeSolvency">
									 This is a description that explain, what making data gathering meaning of increasing, decreasing, or stagnant during a period of time.
								  </div>
								</div>

								<div class="panel panel-info">
								  <div class="panel-heading" id="judulKeteranganLongtermObjective">Longterm Objective</div>
								  <div class="panel-body" id="keteranganLongtermObjective">
								  </div>
								</div>

								<div class="panel panel-warning">
								  <div class="panel-heading" id="judulKeteranganManagementTarget">Management Target</div>
								  <div class="panel-body" id="keteranganManagementTarget">
								  </div>
								</div>

								<div class="panel panel-danger">
								  <div class="panel-heading" id="judulKeteranganDaytoDayPerformance">Day to Day Performance</div>
								  <div class="panel-body" id="keteranganDaytoDayPerformance">
								  </div>
								</div>
							</div>
						</div>	
					</div>	
					<div  id="keteranganExecutiveSummaryUtama1" class="panel panel-primary">
						<div class="panel-heading"><center>Executive Summary</center></div>
						<div class="panel-body" id="keteranganExecutiveSummary" style="padding-right:0px; padding-left:0px">
							<div class="panel-group">
								<div class="panel panel-success">
								  <div class="panel-heading" id="judulKeteranganOfficeSolvency">Office Solvency</div>
								  <div class="panel-body" id="keteranganOfficeSolvency">
									 This is a description that explain, what making data gathering meaning of increasing, decreasing, or stagnant during a period of time.
								  </div>
								</div>

								<div class="panel panel-info">
								  <div class="panel-heading" id="judulKeteranganLongtermObjective">Longterm Objective</div>
								  <div class="panel-body" id="keteranganLongtermObjective">
								  </div>
								</div>

								<div class="panel panel-warning">
								  <div class="panel-heading" id="judulKeteranganManagementTarget">Management Target</div>
								  <div class="panel-body" id="keteranganManagementTarget">
								  </div>
								</div>

								<div class="panel panel-danger">
								  <div class="panel-heading" id="judulKeteranganDaytoDayPerformance">Day to Day Performance</div>
								  <div class="panel-body" id="keteranganDaytoDayPerformance">
								  </div>
								</div>
								
								<div class="panel panel-success" id="panelTambahanOfficeSolvency">
								  <div class="panel-heading" id="judulKeteranganOfficeSolvency1">1</div>
								  <div class="panel-body" id="keteranganOfficeSolvency">
									 This is a description that explain, what making data gathering meaning of increasing, decreasing, or stagnant during a period of time.
								  </div>
								</div>
							</div>
						</div>	
					</div>
					<div  id="keteranganExecutiveSummaryUtama4" class="panel panel-primary">
						<div class="panel-heading"><center>Executive Summary</center></div>
						<div class="panel-body" id="keteranganExecutiveSummary" style="padding-right:0px; padding-left:0px">
							<div class="panel-group">
								<div class="panel panel-success">
								  <div class="panel-heading" id="judulKeteranganOfficeSolvency">Proposed Plan that Makes the Office More Vulnarable</div>
								  <div class="panel-body" id="keteranganOfficeSolvency">
									 This is a description that explain, what making data gathering meaning of increasing, decreasing, or stagnant during a period of time.
								  </div>
								</div>

								<div class="panel panel-info">
								  <div class="panel-heading" id="judulKeteranganLongtermObjective">Required Financing</div>
								  <div class="panel-body" id="keteranganLongtermObjective">
								  </div>
								</div>

								<div class="panel panel-warning">
								  <div class="panel-heading" id="judulKeteranganManagementTarget">First Step in Viability Study</div>
								  <div class="panel-body" id="keteranganManagementTarget">
								  </div>
								</div>

								<div class="panel panel-danger">
								  <div class="panel-heading" id="judulKeteranganDaytoDayPerformance">The Corporate Plan</div>
								  <div class="panel-body" id="keteranganDaytoDayPerformance">
								  </div>
								</div>
								
								<div class="panel panel-success" id="panelTambahanOfficeSolvency">
								  <div class="panel-heading" id="judulKeteranganOfficeSolvency1">Project Revenue Account</div>
								  <div class="panel-body" id="keteranganOfficeSolvency">
									 This is a description that explain, what making data gathering meaning of increasing, decreasing, or stagnant during a period of time.
								  </div>
								</div>

								<div class="panel panel-info" id="panelTambahanLongtermObjective">
								  <div class="panel-heading" id="judulKeteranganLongtermObjective1">The worthwhile to Delay the Emergence of Profit</div>
								  <div class="panel-body" id="keteranganLongtermObjective">
								  </div>
								</div>

								<div class="panel panel-warning" id="panelTambahanManagementTarget">
								  <div class="panel-heading" id="judulKeteranganManagementTarget1">Fund of to Continue to Write New Business</div>
								  <div class="panel-body" id="keteranganManagementTarget">
								  </div>
								</div>
							</div>
						</div>	
					</div>
				</div>
            </div>
	    </div>
	</div>
	
	<div id="displayChartControl" class="collapse">
	    <div class="panel-group" id="accordionBasicInformationRequirements" style="padding-top:5px; padding-right:5px; padding-left:5px;">
		    <div class="panel panel-success">
			    <div class="panel-heading">
                    <h4 class="panel-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapsedisplayChartControl">Chart Control</a>
                    </h4>
                </div>
				<div id="collapsedisplayChartControl" class="panel-collapse collapse in">
					<div class="row">
			            <div class="col-lg-6" style="padding-top:5px; padding-right:15px; padding-left:15px;">
							<div class="panel panel-danger" style="background-color:rgba(192,192,192,0.3);">
								<div class="panel-heading">
									<h4 class="panel-title">
									   <a data-toggle="collapse" data-parent="#accordion" href="#collapseDisplayChartTypeAndSeries">Type of Chart and Series Column</a>
									</h4>
								</div>
								<div id="collapseDisplayChartTypeAndSeries" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">
									<form style="padding-top:5px; padding-right:5px; padding-left:20px">
										<label class="radio-inline"><input type="radio" name="optradio">Bar</label>
										<label class="radio-inline"><input type="radio" name="optradio" onchange="membuatChartColumn()">Column</label>
										<label class="radio-inline"><input type="radio" name="optradio">Line</label>
										<label class="radio-inline"><input type="radio" name="optradio">Sp Line</label>
										<label class="radio-inline"><input type="radio" name="optradio">Area</label>
										<label class="radio-inline"><input type="radio" name="optradio">Scatter</label>
										<label class="radio-inline"><input type="radio" name="optradio">Pie</label>
										<label class="radio-inline"><input type="radio" name="optradio">Doughnut</label>
										<p></p>
										<label class="checkbox-inline">
											  <input type="checkbox" value="" data-toggle="collapse" data-target="#displayPassingParameter">Series names are in column
										</label>
										<p></p>
										<div class="form-group">
											<label for="sel1">Series column:</label>
											<select class="form-control" id="sel1" style="background-color:rgba(255,0,0,0.3); color:white;">
												   <option>Month</option>
												   <option>Year</option>
												   <option>Sequence</option>
												   <option>4</option>
											</select>
										</div>		
									</form>
								</div>	
								<div class="panel-footer">
								<a data-toggle="collapse" data-target="#displaychart" class="btn btn-danger" role="button">Display Chart</a>
								</div>
							</div>
						</div>
				        <div class="col-lg-3" style="padding-top:5px; padding-right:15px; padding-left:15px">
						    <div class="panel panel-danger" style="background-color:rgba(192,192,192,0.3);">
								<div class="panel-heading">
									<h4 class="panel-title">
									   <a data-toggle="collapse" data-parent="#accordion" href="#collapseDisplayAxisSeriesValues">Axis, Series, and Values</a>
									</h4>
								</div>
								<div id="collapseDisplayAxisSeriesValues" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">
									<form style="padding-top:5px; padding-right:5px; padding-left:20px">
										<div class="form-group">
											<label for="sel4">X-Axis:</label>
											<select class="form-control" id="sel4" style="background-color:rgba(255,0,0,0.3); color:white;">
												   <option>Month</option>
												   <option>Year</option>
												   <option>Sequence</option>
												   <option>4</option>
											</select>
										
											<label for="sel5">Series:</label>
											<select class="form-control" id="sel5" style="background-color:rgba(255,0,0,0.3); color:white;">
												   <option>Month</option>
												   <option>Year</option>
												   <option>Sequence</option>
												   <option>4</option>
											</select>
										
											<label for="sel6">Values:</label>
											<select class="form-control" id="sel6" style="background-color:rgba(255,0,0,0.3); color:white;">
												   <option>Month</option>
												   <option>Year</option>
												   <option>Sequence</option>
												   <option>4</option>
											</select>
										</div>
									</form>
								</div>
							</div>
						</div>
				        <div class="col-lg-3" style="padding-top:5px; padding-right:15px; padding-left:15px">
							<div class="panel panel-danger" style="background-color:rgba(192,192,192,0.3);">
								<div class="panel-heading">
									<h4 class="panel-title">
									   <a data-toggle="collapse" data-parent="#accordion" href="#collapseDisplayLabelAndTitle">Label and Chart's Title</a>
									</h4>
								</div>
								<div id="collapseDisplayAxisSeriesValues" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">						
									<form  style="padding-top:10px; padding-right:0px; padding-left:0px">
									   <div class="form-group">
										   <label for="usr">X-Axis label:</label>
										   <input type="text" class="form-control" id="usr">
										   <label for="usr1">Y-Axis label:</label>
										   <input type="text" class="form-control" id="usr1">
										   <label for="judul">Chart title:</label>
										   <input type="text" class="form-control" id="judul" onchange="memberiJudulPadaChart()">
										   <input type="text" class="form-control" id="judul1" onchange="memberiJudulPadaChart1()">
									   </div>
									</form>
								</div>
							</div>	
						</div>
					</div>
			    </div>
	        </div>
	    </div>
	</div>	
	
	<div id="displaychart" class="collapse">
		<div class="panel-group" id="accordiondisplaychart" style="padding-top:0px; padding-right:5px; padding-left:5px;">
		    <div class="panel panel-success">
			    <div class="panel-heading">
                    <h4 class="panel-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapsedisplayChart">Display Chart</a>
                    </h4>
				</div>
				<div id="collapsedisplayChart" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">
					<div class="row">
						<div class="col-lg-12">
							<h1 id="judulChart" class="text-center"></h1>
							<h3 id="judulChart1" class="text-center"></h3>
							<img id="myImage" src="">
							
						</div>
						<div class="chart" id="chartColumn">
							<svg width="800" height="500">
								<rect x="50" y="150" width="200" height="340" style="fill:blue;stroke:pink;stroke-width:0;fill-opacity:0.1;stroke-opacity:0.9" />
								<text x="50" y="500" fill="red" transform="rotate(30 20,40)" >Term Life</text>

								<rect x="140" y="350" width="200" height="140" style="fill:green;stroke:pink;stroke-width:0;fill-opacity:0.1;stroke-opacity:0.9" />
								<text x="140" y="500" fill="red">ADDB</text>

								<rect x="230" y="250" width="200" height="240" style="fill:red;stroke:pink;stroke-width:0;fill-opacity:0.1;stroke-opacity:0.9" />
								<text x="230" y="500" fill="red">PA</text>

								<rect x="320" y="50" width="200" height="440" style="fill:blue;stroke:yellow;stroke-width:0;fill-opacity:0.1;stroke-opacity:0.9" /> " />
								<text x="320" y="500" fill="red">WOP</text>
							
								<line x1="90" y1="150" x2="180" y2="350" style="stroke:rgb(255,0,0);stroke-width:5" /> 
								<line x1="180" y1="350" x2="270" y2="250" style="stroke:rgb(255,0,0);stroke-width:5" /> 
								<line x1="270" y1="250" x2="360" y2="50" style="stroke:rgb(255,0,0);stroke-width:5" /> 
							</svg>
						</div>
					</div>   
				</div>  
		    </div>
		</div>
	</div>

	<div id="databaseManagement" class="collapse">
		<div class="panel-group" id="accordiondatabasemanagement" style="padding-top:0px; padding-right:5px; padding-left:5px;">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 class="panel-title">
					   <a data-toggle="collapse" data-parent="#accordionDatabase" href="#collapseDatabasemanagement">Database</a>
					</h4>
				</div>
				<div id="collapseDatabasemanagement" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">
					<div class="panel panel-danger">
						<div class="panel-heading">
							<h4 class="panel-title">
							   <a data-toggle="collapse" data-parent="#accordionDatamart" href="#collapseDatamart">Datamart</a>
							</h4>
						</div>
						<div id="collapseDatamart" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">
							<div id="datamart" class="panel panel-warning">		
								<div id="th11" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon11()"><span class="glyphicon glyphicon-triangle-top">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th12" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon12()"><span class="glyphicon glyphicon-triangle-bottom">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th13" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()">#</button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th21" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon glyphicon-triangle-top">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th22" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon glyphicon-triangle-bottom">Year</span></button></th>
											   <th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th23" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon-triangle-bottom">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon"></span>Month</button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th31" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon glyphicon-triangle-top">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th32" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;">
												<button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()">
												<span class="glyphicon">Year</span>
												</button>
												</th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon glyphicon-triangle-bottom">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th33" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th41" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon glyphicon-triangle-top">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th42" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon glyphicon-triangle-bottom">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th43" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>

						</div>
						</div>
					</div>
					
					<div class="panel panel-danger">
						<div class="panel-heading">
							<h4 class="panel-title">
							   <a data-toggle="collapse" data-parent="#accordionDatawharehousing" href="#collapseDatawharehousing">Datawharehousing</a>
							</h4>
						</div>
						<div id="collapseDatawharehousing" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">
							<div id="datamart" class="panel panel-warning">		
								<div id="th11" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon11()"><span class="glyphicon glyphicon-triangle-top">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th12" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon12()"><span class="glyphicon glyphicon-triangle-bottom">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th13" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()">#</button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th21" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon glyphicon-triangle-top">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th22" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon glyphicon-triangle-bottom">Year</span></button></th>
											   <th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th23" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon-triangle-bottom">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon"></span>Month</button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th31" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon glyphicon-triangle-top">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th32" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;">
												<button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()">
												<span class="glyphicon">Year</span>
												</button>
												</th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon glyphicon-triangle-bottom">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th33" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th41" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon glyphicon-triangle-top">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th42" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon glyphicon-triangle-bottom">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th43" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div  id="KeyPerformanceParameter" class="collapse">
		<div class="panel panel-success">			
			<div class="panel-heading">
				<h4 class="panel-title">
				   <a data-toggle="collapse" data-parent="#accordionDatabase" href="#collapseKeyPerformanceParameter">Key Performance Parameter</a>
				</h4>
			</div>
			<div id="collapseKeyPerformanceParameter" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">
				<div class="row" style="padding-top:5px; padding-right:15px; padding-left:15px">
					<div id="parameterIndicator" class="col-lg-4" style="padding-top:0px; padding-right:5px; padding-left:5px">
						<h4>Define Query:</h4>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div><br>
				
						<div class="btn-group">
							<button class="btn btn-danger btn-block dropdown-toggle" type="button" id="datatimeseries" data-toggle="dropdown">Time Series<span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="DarkCyan">
								<li role="presentation"><a role="menuitem" tabindex="-1" style="background-color:DarkCyan" id="menu2" onclick="mPilihCurrentMethodYearMonth()">Current - Year - Month</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" style="background-color:DarkCyan" id="menu3" onclick="mPilih3ConsecutiveYear()">3 Consecutive Year</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" style="background-color:DarkCyan" id="menu4" onclick="mPilih3ConsecutiveYearMonthly()">3 Consecutive Year - Monthly</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" style="background-color:DarkCyan" id="menu5" onclick="mPilih5ConsecutiveYear()">5 Consecutive Year</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" style="background-color:DarkCyan" id="menu6" onclick="mPilih5ConsecutiveYearMonthly()">5 Consecutive Year - Monthly</a></li>
							</ul>
						</div>
						<p></p>
						<label class="checkbox-inline">
							<input type="checkbox" value="" data-toggle="collapse" data-target="#displayPassingParameter">Change Passing.P
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" data-toggle="collapse" data-target="#sqlQueryCommand">Sql query command
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" data-toggle="collapse" data-target="#transformQueryResult">Transform query result
						</label>
						<label class="checkbox-inline">
						   <input type="checkbox" value="" data-toggle="collapse" data-target="#groupingGrid" onclick="mMerubahGlyphicon13()">Managing Parameter
						</label>
				
						<div id="displayPassingParameter" class="collapse">
						   <div class="form-group">
							  <label for="comment">Passing Parameter</label>
							  <textarea class="form-control" rows="5" id="passingParameter"></textarea>
						   </div>
						</div>
						
						<div id="sqlQueryCommand" class="collapse">
						   <div class="form-group">
							  <label for="comment">Sql Query Command</label>
							  <textarea class="form-control" rows="5" id="queryCommand"></textarea>
						   </div>
						</div>
						
						<div id="transformQueryResult" class="collapse">
						   <div class="form-group">
							  <label for="comment">Transform Query Result</label>
							  <textarea class="form-control" rows="5" id="transformQueryResult"></textarea>
						   </div>
						</div>

						<p></p>
					</div>
					
					<div id="breakdownIndicator" class="col-lg-4" style="padding-top:0px; padding-right:15px; padding-left:15px">
						<div id="groupingGrid" class="collapse">
						    <h4>Managing Parameter by:</h4>
						    <div class="dropdown">
							  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="judulPilihan">Bussiness Parameter<span class="caret"></span></button>
							  <ul class="dropdown-menu">
								<li class="dropdown-header">KPI Parameter</li>
								<li><a  data-toggle="collapse" data-target="#detailDataParameter" id="pilihanSalesAndCommission" onclick="menggantiJudulSalesCommission()">Sales and Commission</a></li>
								<li><a href="#">Expence</a></li>
								<li class="dropdown-header">Actuarial Analytical Parameter</li>
								<li><a href="#">New Bussiness</a></li>
								<li><a href="#">Inforce Bussiness</a></li>
								<li><a href="#">Liability</a></li>
								<li><a href="#">Accounting</a></li>
								<li><a href="#">Investment</a></li>
								<li><a href="#">Others</a></li>
							  </ul>
							</div>
							<p></p>
							<div class="dropdown">
							  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="judulpilihanBreakdownParameter">Breakdown Parameter<span class="caret"></span></button>
							  <ul class="dropdown-menu">
								<li><a data-toggle="collapse" data-target="#volumeBreakdownParameter" id="pilihanVolumeBreakdownParameter" onclick="menggantiJudulVolume()">Volume</a></li>
								<li><a href="#">Productline</a></li>
								<li><a href="#">Distribution Channel</a></li>
								<li><a href="#">Region</a></li>
								<li><a href="#">Individual Producer</a></li>
								<li><a href="#">Group Producer</a></li>
							  </ul>
							</div>
						</div>
					</div>
				
					<div id="groupingDataGrid" class="col-lg-4" style="padding-top:0px; padding-right:15px; padding-left:15px">
						<div id="volumeBreakdownParameter" class="collapse">
							<h4>Grouping Parameter by:</h4>
							<ul class="list-group">
								<li class="list-group-item list-group-item-success">First item</li>
								<li class="list-group-item list-group-item-info">Second item</li>
								<li class="list-group-item list-group-item-warning">Third item</li>
								<li class="list-group-item list-group-item-danger">Fourth item</li>
								<li class="list-group-item list-group-item-success">First item</li>
								<li class="list-group-item list-group-item-info">Second item</li>
								<li class="list-group-item list-group-item-warning">Third item</li>
								<li class="list-group-item list-group-item-danger">Fourth item</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div id="detailDataParameter" class="collapse">
					<div id="salesAndCommission" class="panel panel-danger">
						<div class="panel-heading">
							<h4 class="panel-title">
							   <a data-toggle="collapse" data-parent="#accordionDatamart" href="#collapseSalesandCommission">Sales and Commission</a>
							</h4>
						</div>
						<div id="collapseSalesandCommission" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">
							<div id="datamart" class="panel panel-warning">		
								<div id="th11" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon11()"><span class="glyphicon glyphicon-triangle-top">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th12" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon12()"><span class="glyphicon glyphicon-triangle-bottom">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th13" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()">#</button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th21" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon glyphicon-triangle-top">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th22" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon glyphicon-triangle-bottom">Year</span></button></th>
											   <th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th23" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon-triangle-bottom">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon"></span>Month</button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th31" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon glyphicon-triangle-top">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th32" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;">
												<button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()">
												<span class="glyphicon">Year</span>
												</button>
												</th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon glyphicon-triangle-bottom">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th33" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th41" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon glyphicon-triangle-top">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th42" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon glyphicon-triangle-bottom">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th43" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					<div id="expences" class="panel panel-danger">
						<div class="panel-heading">
							<h4 class="panel-title">
							   <a data-toggle="collapse" data-parent="#accordionExpances" href="#collapseExpances">Expances</a>
							</h4>
						</div>
						<div id="collapseExpances" class="panel-collapse collapse in" style="background-color:rgba(192,192,192,0.3);">
							<div id="datamart" class="panel panel-warning">		
								<div id="th11" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon11()"><span class="glyphicon glyphicon-triangle-top">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th12" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon12()"><span class="glyphicon glyphicon-triangle-bottom">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th13" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()">#</button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th21" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon21()"><span class="glyphicon glyphicon-triangle-top">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th22" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
											   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon22()"><span class="glyphicon glyphicon-triangle-bottom">Year</span></button></th>
											   <th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
											   <th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th23" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon-triangle-bottom">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon"></span>Month</button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th31" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon31()"><span class="glyphicon glyphicon-triangle-top">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th32" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;">
												<button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()">
												<span class="glyphicon">Year</span>
												</button>
												</th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon32()"><span class="glyphicon glyphicon-triangle-bottom">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th33" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105; padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th41" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon41()"><span class="glyphicon glyphicon-triangle-top">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th42" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon42()"><span class="glyphicon glyphicon-triangle-bottom">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="th43" class="table-responsive">
									<table class="table table-hover">
										<thead style="background-color:rgb(107, 126, 105); color:white">
											<tr>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon13()"><span class="glyphicon">#</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon23()"><span class="glyphicon">Year</span></button></th>
												<th style="padding:0px;"><button type="button" class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon33()"><span class="glyphicon">Month</span></button></th>
												<th style="padding:0px;"><button type="button"  class="btn-block" style="background-color:rgb(107, 126, 105); color:white; border-color:rgb(107, 126, 105); padding:0px;" onclick="mMerubahGlyphicon43()"><span class="glyphicon">Valuation</span></button></th>
											</tr>
										</thead>
										<tbody style="background-color:rgba(255,0,255,0.3)">
											<tr>
												<td>1</td>
												<td>.01234</td>
												<td>123.556.890,50</td>
												<td>123.556.890,50</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
  
	<script> 
        mMenghapusButtonPadaGrid();
		mMenghapusRecordPadaGridIndicator()
		document.getElementById('indicatorUtama').style.display='block';
		document.getElementById('keteranganExecutiveSummaryUtama').style.display='block';
		document.getElementById('th11').style.display='block';
		$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});
		function helpprocedures() {
		
		}
		$(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
		
		$(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
        });
		
		function memberiJudulPadaChart() {
				var myElement = document.getElementById("judul");
				myElement=myElement.value;
				myElement=myElement.trim();
				document.getElementById("judulChart").innerHTML = myElement;
				}
		function memberiJudulPadaChart1() {
				var myElement = document.getElementById("judul1");
				myElement=myElement.value;
				myElement=myElement.trim();
				document.getElementById("judulChart1").innerHTML = myElement;
				}	
		function membuatChartColumn() {
				document.getElementById("myImage").src = "/Gambar/images13.jpg";
				}					
		function mMenghapusButtonPadaGrid() {
		        document.getElementById('th11').style.display='none';
			    document.getElementById('th12').style.display='none';
		        document.getElementById('th13').style.display='none';
	            document.getElementById('th21').style.display='none';
		        document.getElementById('th22').style.display='none';
				document.getElementById('th23').style.display='none';
		        document.getElementById('th31').style.display='none';
		        document.getElementById('th32').style.display='none';
				document.getElementById('th33').style.display='none';
    	        document.getElementById('th41').style.display='none';
		        document.getElementById('th42').style.display='none';
				document.getElementById('th43').style.display='none';
				document.getElementById('groupingbyYear').style.display='none';
				document.getElementById('groupingbyMonth').style.display='none';
				document.getElementById('keteranganExecutiveSummary').style.display='none';
				document.getElementById('panelDetailsRequiredInformation').style.display='none';
				}
	function mMenghapusRecordPadaGridIndicator() {
				document.getElementById('indicatorUtama').style.display='none';
				document.getElementById('indicatorUtama1').style.display='none';
				document.getElementById('indicatorUtama4').style.display='none';
				document.getElementById('keteranganExecutiveSummaryUtama').style.display='none';
				document.getElementById('keteranganExecutiveSummaryUtama1').style.display='none';
				document.getElementById('keteranganExecutiveSummaryUtama4').style.display='none';
				}
	    
		function mengaktifkanInfoRequiredbySA() {
				mMenghapusRecordPadaGridIndicator()
				document.getElementById('indicatorUtama').style.display='block';
				document.getElementById('keteranganExecutiveSummaryUtama').style.display='block';
				document.getElementById("judulButtonPerformance").innerHTML = "Information Required by Supervisory Authority";
				document.getElementById("officesolvent").innerHTML ='Insurance Return in the Prescribe Format for the Supervisory';
				document.getElementById("officelongtermobjective").innerHTML ='Information for the Tax Authority';
				document.getElementById("officeperformingwell").innerHTML ='Information for the Internal Management Purposes'; 
			 	document.getElementById("officedaytodayperformance").innerHTML ='Company Act Statistics for the Published at The End of Year Account';
				document.getElementById("menu1").innerHTML = 'Details of Required Information by Supervisory Authority';
				document.getElementById("judulKeteranganOfficeSolvency").innerHTML = 'Required Information by Supervisory Authority';						
				document.getElementById("judulKeteranganLongtermObjective").innerHTML = 'Required Information by Tax Authority';
				document.getElementById("judulKeteranganManagementTarget").innerHTML ='Required Information by Internal Management';
				document.getElementById("judulKeteranganDaytoDayPerformance").innerHTML ='Required Information by Company Act Statistics';
			}
		function mengaktifkanActValuation() {
			mMenghapusRecordPadaGridIndicator()
			document.getElementById('indicatorUtama').style.display='block';
			document.getElementById('keteranganExecutiveSummaryUtama').style.display='block';
			document.getElementById("judulButtonPerformance").innerHTML = "Actuarial Valuation";
			document.getElementById("officesolvent").innerHTML ='The Solvency of the Office at the Valuation Date';
			document.getElementById("officelongtermobjective").innerHTML ='The Exsisting Investment and Matching Requirement';
			document.getElementById("officeperformingwell").innerHTML ='An Outline of the Factors Affecting the Office'; 
			document.getElementById("officedaytodayperformance").innerHTML ='An Analysis of the Causes of the Surplus Deficiency';
			document.getElementById("menu1").innerHTML = 'Details of the Solvency of the Office';
			document.getElementById("judulKeteranganOfficeSolvency").innerHTML = 'The Solvency of the Office';						
			document.getElementById("judulKeteranganLongtermObjective").innerHTML = 'Exsisting Investment and Matching Requirement';
			document.getElementById("judulKeteranganManagementTarget").innerHTML ='Factors Affecting the Office';
			document.getElementById("judulKeteranganDaytoDayPerformance").innerHTML ='Causes of the Surplus Deficiency';

		}
		function mengaktifkanCPlanning() {
			mMenghapusRecordPadaGridIndicator()
			document.getElementById('indicatorUtama4').style.display='block';
			document.getElementById('keteranganExecutiveSummaryUtama4').style.display='block';
			document.getElementById("judulButtonPerformance").innerHTML = "Corporate Planning";
			document.getElementById("menu1").innerHTML = 'Details of Information on Short Term Targets for Day to Day Activities Both in Volume and  Time Scale';
		}		 
		function mengaktifkanNetWorth() {
			mMenghapusRecordPadaGridIndicator()
			document.getElementById('indicatorUtama').style.display='block';
			document.getElementById('keteranganExecutiveSummaryUtama').style.display='block';
			document.getElementById("judulButtonPerformance").innerHTML = "Net Worth";
			document.getElementById("officesolvent").innerHTML ='Insurance Return in the Prescribe Format for the Supervisory';
			document.getElementById("officelongtermobjective").innerHTML ='Information for the Tax Authority';
			document.getElementById("officeperformingwell").innerHTML ='Information for the Internal Management Purposes'; 
			document.getElementById("officedaytodayperformance").innerHTML ='Company Act Statistics for the Published at The End of Year Account';
		}
		function mengaktifkanGoodwill() {
			mMenghapusRecordPadaGridIndicator()
			document.getElementById('indicatorUtama').style.display='block';
			document.getElementById('keteranganExecutiveSummaryUtama').style.display='block';
			document.getElementById("judulButtonPerformance").innerHTML = "Goodwill";
			document.getElementById("officesolvent").innerHTML ='Insurance Return in the Prescribe Format for the Supervisory';
			document.getElementById("officelongtermobjective").innerHTML ='Information for the Tax Authority';
			document.getElementById("officeperformingwell").innerHTML ='Information for the Internal Management Purposes'; 
			document.getElementById("officedaytodayperformance").innerHTML ='Company Act Statistics for the Published at The End of Year Account';
		}
		function mengaktifkanMonitoring() {
			mMenghapusRecordPadaGridIndicator()
			document.getElementById('indicatorUtama').style.display='block';
			document.getElementById('keteranganExecutiveSummaryUtama').style.display='block';
			document.getElementById("judulButtonPerformance").innerHTML = "Monitoring";
			document.getElementById("officesolvent").innerHTML ='Short Term Targets for Day to Day Activities Both in Volume and  Time Scale';
			document.getElementById("officelongtermobjective").innerHTML ='Risks which should Minimized or Avoided';
			document.getElementById("officeperformingwell").innerHTML ='Longterm Financial Target Both in Volume and  Time Scale'; 
			document.getElementById("officedaytodayperformance").innerHTML ='Critical Objective that the Office will Endeavour to Achieve';
			document.getElementById("menu1").innerHTML = 'Details of Information on Short Term Targets for Day to Day Activities Both in Volume and  Time Scale';
			document.getElementById("judulKeteranganOfficeSolvency").innerHTML = 'Short Term Targets for Day to Day Activities';						
			document.getElementById("judulKeteranganLongtermObjective").innerHTML = 'Risks which should Minimized or Avoided';
			document.getElementById("judulKeteranganManagementTarget").innerHTML ='Longterm Financial Target Both in Volume and  Time Scale';
			document.getElementById("judulKeteranganDaytoDayPerformance").innerHTML ='Critical Objective';
							
		}

		function mMerubahGlyphicon11() {
		        mMenghapusButtonPadaGrid();
				document.getElementById('th12').style.display='block';
		        }
		function mMerubahGlyphicon12() {
		        mMenghapusButtonPadaGrid();
				document.getElementById('th11').style.display='block';
		        }
		function mMerubahGlyphicon13() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th11').style.display='block';
				document.getElementById('groupingbyYear').style.display='block';
				document.getElementById('groupingbyMonth').style.display='block';
		        }
		function mMerubahGlyphicon21() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th22').style.display='block';
		        }
		function mMerubahGlyphicon22() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th21').style.display='block';
		        }
		function mMerubahGlyphicon23() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th21').style.display='block';
		        }
	    function mMerubahGlyphicon31() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th32').style.display='block';
		        }
		function mMerubahGlyphicon32() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th31').style.display='block';
		        }
		function mMerubahGlyphicon33() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th31').style.display='block';
		        }
	    function mMerubahGlyphicon41() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th42').style.display='block';
		        }
		function mMerubahGlyphicon42() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th41').style.display='block';
		        }
		function mMerubahGlyphicon43() {
                mMenghapusButtonPadaGrid();
				document.getElementById('th41').style.display='block';
		        }
		function menampilkanChart() {
                var myElement = document.getElementById('buttonChart');
				if (myElement = 'Chart') {
                   document.getElementById("buttonChart").innerHTML = "Chart.";
				   document.getElementById('displaychart').style.display='block';
                    } else {
					document.getElementById("buttonChart").innerHTML = "Chart";
					document.getElementById('displaychart').style.display='collapse';
					}
		        }
		function menampilkanmenampilkanParameter() {
                var myElement = document.getElementById('buttonParameter');
				if (myElement = 'Parameter') {
                   document.getElementById("buttonParameter").innerHTML = "Parameter.";
				   document.getElementById('databaseManagement').style.display='block';
                    } else {
					document.getElementById("buttonParameter").innerHTML = "Parameter";
					document.getElementById('databaseManagement').style.display='none';
					}
		        }
		function menggantiJudulSalesCommission() {
				var myElement = document.getElementById("pilihanSalesAndCommission");
				document.getElementById("judulPilihan").innerHTML = "Bussiness Parameter: " +myElement.innerHTML;
				}
		function menggantiJudulVolume() {
				var myElement = document.getElementById("pilihanVolumeBreakdownParameter");
				document.getElementById("judulpilihanBreakdownParameter").innerHTML = "Breakdown Parameter: " +myElement.innerHTML;
				}
	    function mPilihOffiveSolvent() {
				var myElement = document.getElementById("officesolvent").innerHTML;
				document.getElementById('keteranganExecutiveSummary').style.display='block';
				document.getElementById('panelDetailsRequiredInformation').style.display='block';
				switch(myElement) {
					case 'Is the office solvent?':
						document.getElementById("menu1").innerHTML = "Details of Required Information: Office's Solvency";
						break;
					case 'The Solvency of the Office at the Valuation Date':
						document.getElementById("menu1").innerHTML = 'Details of the Solvency of the Office';
						break;
					case 'Insurance Return in the Prescribe Format for the Supervisory':
						document.getElementById("menu1").innerHTML = 'Details of Required Information by Supervisory Authority';
						break;
					case 'Whether the Proposed Plan Makes the Office More Vulnarable':
						document.getElementById("menu1").innerHTML = 'Details of Proposed Plan that Makes the Office More Vulnarable';
						break;

					case 'Short Term Targets for Day to Day Activities Both in Volume and  Time Scale':
						document.getElementById("menu1").innerHTML = 'Details of Information on Short Term Targets for Day to Day Activities Both in Volume and  Time Scale';
						break;						
					default:
						
					}
                }
		function mPilihLongTermObjective() {
		        var myElement = document.getElementById("officelongtermobjective").innerHTML;
				switch(myElement) {
					case 'Is the office still in a position to fulfil its long term objectives regarding capital requirement and profit?':
						document.getElementById("menu1").innerHTML = "Details of Required Information: Long Term Objective";
						break;
					case 'Information for the Tax Authority':
						document.getElementById("menu1").innerHTML = 'Details of Required Information by Tax Authority';
						break;	
					case 'The Exsisting Investment and Matching Requirement':
						document.getElementById("menu1").innerHTML = 'Details of Information on Exsisting Investment and Matching Requirement';
						break;						
					case 'Risks which should Minimized or Avoided':
						document.getElementById("menu1").innerHTML = 'Risks which should Minimized or Avoided';
						break;
						
					default:
						
					}						
		        
				}
		function mPilihPerformingWell() {
				var myElement = document.getElementById("officeperformingwell").innerHTML;
				switch(myElement) {
				case 'Is the office performing well or badly compareed to targets the management has set the office for the foreseeable future?':
					document.getElementById("menu1").innerHTML = "Details of Required Information: Management's Target";
					break;
				case 'Information for the Internal Management Purposes':
					document.getElementById("menu1").innerHTML = 'Details of Required Information by Internal Management';
					break;
				case 'An Outline of the Factors Affecting the Office':
					document.getElementById("menu1").innerHTML = 'Details of Required Information Factors that Affecting the Office';
					break;
				case 'Longterm Financial Target Both in Volume and  Time Scale':
					document.getElementById("menu1").innerHTML ='Details of Information on Longterm Financial Target Both in Volume and  Time Scale';
					break;
				case 'What Financing is Required?':
					document.getElementById("menu1").innerHTML ='Details of What Financing is Required?';
					break;	
				default:
					
				}					
			}
		function mPilihDaytodayPerformance() {
				var myElement = document.getElementById("officedaytodayperformance").innerHTML;
				switch(myElement) {
				case 'Is the day to day performance satisfactory and what are the trend?':
					document.getElementById("menu1").innerHTML = "Details of Required Information: Day to Day Performance";
					break;
				case 'Company Act Statistics for the Published at The End of Year Account':
					document.getElementById("menu1").innerHTML ='Details of Required Information by Company Act Statistics';
					break;				
				case 'An Analysis of the Causes of the Surplus Deficiency':
					document.getElementById("menu1").innerHTML ='Details Information of the Causes of the Surplus Deficiency';
					break;	
				case 'Critical Objective that the Office will Endeavour to Achieve':
					document.getElementById("menu1").innerHTML ='Details of Information on Critical Objective that the Office will Endeavour to Achieve';
					break;	
				case 'The First Step in Viability Study':
					document.getElementById("menu1").innerHTML ='Details of the First Step in Viability Study';
					break;					
				default:
				}
			console.log(myElement)}
		function mPilihCurrentMethodYearMonth() {
				var myElement = document.getElementById("menu2");
				document.getElementById("datatimeseries").innerHTML = "Time Series: " +myElement.innerHTML;
			}
		function mPilihLongTermObjective4() {
		        var myElement = document.getElementById("officelongtermobjective1").innerHTML;
				switch(myElement) {
					case 'Project Revenue Account for Each of the Next Five Years':
						document.getElementById("menu1").innerHTML = "Details of Project Revenue Account for Each of the Next Five Years";
						break;						
					default:
						
					}						
				}
		function mPilihPerformingWell4() {
				var myElement = document.getElementById("officeperformingwell1").innerHTML;
				switch(myElement) {
				case 'Is it worthwhile to Delay the Emergence of Profit?':
					document.getElementById("menu1").innerHTML = "Details of Emergence of Profit";
					break;					
				default:
					
				}					
			}
		function mPilihDaytodayPerformance4() {
				var myElement = document.getElementById("officedaytodayperformance1").innerHTML;
				switch(myElement) {
				case 'Is it better to Close the Fund or to Continue to Write New Business?':
					document.getElementById("menu1").innerHTML = "Details of Information to Close the Fund or to Continue to Write New Business?";
					break;					
				default:
				
				}
			}	
		function mPilihCurrentMethodYearMonth() {
				var myElement = document.getElementById("menu2");
				document.getElementById("datatimeseries").innerHTML = "Time Series: " +myElement.innerHTML;
				}
         
		function mPilih3ConsecutiveYear() {
				var myElement = document.getElementById("menu3");
				document.getElementById("datatimeseries").innerHTML = "Time Series: " +myElement.innerHTML;
				}
		function mPilih3ConsecutiveYearMonthly() {
				var myElement = document.getElementById("menu4");
				document.getElementById("datatimeseries").innerHTML = "Time Series: " +myElement.innerHTML;
				}
		function mPilih5ConsecutiveYear() {
				var myElement = document.getElementById("menu5");
				document.getElementById("datatimeseries").innerHTML = "Time Series: " +myElement.innerHTML;
				}
		function mPilih5ConsecutiveYearMonthly() {
				var myElement = document.getElementById("menu6");
				document.getElementById("datatimeseries").innerHTML = "Time Series: " +myElement.innerHTML;
				}
    </script>	

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "reasuransi";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT nomor_urut, parameters, exposure FROM readsysstatisticsexperience";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$statisticsExperience->nomor_urut = $row["nomor_urut"];
				$statisticsExperience->parameters = $row["parameters"];
				$statisticsExperience->exposure = $row["exposure"];
				echo "<br> id: ". $row["nomor_urut"]. " - Parameter: ". $row["parameters"]. " " . $row["exposure"] . "<br>";
			}
		} else {
			echo "0 results";
		}
		$myJSON = json_encode($statisticsExperience);

echo $myJSON;
		$conn->close();

	?>
	</body>
</html>