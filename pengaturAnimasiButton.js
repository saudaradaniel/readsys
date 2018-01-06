	$(document).ready(function(){
			$("#chart").on({
				mouseenter: function(){
					$("#chart").animate({
					opacity: '0.9',
					width: '105px'
					});
					$("#parameter").animate({
					width: '95px'
					});
					$("#database").animate({
					width: '95px'
					});
				},
				mouseleave: function(){
					$("#chart").animate({
					opacity: '1',
					width: '90px'
					});
					$("#parameter").animate({
					width: '105px'
					});
					$("#database").animate({
					width: '105px'
					});
				}
			});
			$("#database").on({
				mouseenter: function(){
					$("#database").animate({
					opacity: '0.9',
					width: '105px'
					});
					$("#chart").animate({
					width: '95px'
					});
					$("#parameter").animate({
					width: '95px'
					});
				},
				mouseleave: function(){
					$("#database").animate({
					opacity: '1',
					width: '90px'
					});
					$("#chart").animate({
					width: '105px'
					});
					$("#parameter").animate({
					width: '105px'
					});
				}
			});
			$("#parameter").on({
				mouseenter: function(){
					$("#parameter").animate({
					opacity: '0.9',
					width: '105px'
					});
					$("#chart").animate({
					width: '95px'
					});
					$("#database").animate({
					width: '95px'
					});
				},
				mouseleave: function(){
					$("#parameter").animate({
					opacity: '1',
					width: '90px'
					});
					$("#chart").animate({
					width: '105px'
					});
					$("#database").animate({
					width: '105px'
					});
				}
			});
			$("#steps").mouseenter(function(){
				alert("[1] Click Five Years Valuation Development button [2] Select a year of panel Development Indicators [3] Click the selected year or click icon or click description [4] Click bottom glyph icon [5] Expand panels of Details of Supporting Data [6] Expand panels of Executive Summary [7] Click Value Base, Determination, and Resources of Free Asset.");
			});
			$("#judulButtonPerformance").on({
				mouseenter: function(){
					$(this).css("background-color", "lightgray");
				}, 
				mouseleave: function(){
					$(this).css("background-color", "green");
					$(this).css("color", "white");
				}, 
				click: function(){
					$(this).css("background-color", "yellow");
					$(this).css("color", "green");
				}  
			});
			$('[data-toggle="popover"]').popover();
			$('[data-toggle="tooltip"]').tooltip();
		});		