<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Agile Project Management Software</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "C:/xampp/htdocs/SEP/application/views/css/bootstrap.min.css" rel = "stylesheet">
		<link href = "C:/xampp/htdocs/SEP/application/views/css/styles.css" rel = "stylesheet">
		<link href = "C:/xampp/htdocs/SEP/application/views/css/dashboardNew.css" rel = "stylesheet">
		<link href = "C:/xampp/htdocs/SEP/application/views/css/bootstrap.css" rel = "stylesheet">
	</head>
	
	<body>
	<!--Navigation bar-->
		<div class = "navbar navbar-inverse navbar-static-top ">
			<div class = "container">
					
					<div class = "navbar-brand">Agile Project Management Software</div>
					<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
						<span class = "icon-bar"></span> 
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
					</button>
										
					<div class = "collapse navbar-collapse navHeaderCollapse">
					
					<ul class = "nav navbar-nav navbar-right">
					
						<li class = "active"><a href = "#projects" data-toggle="modal"><span class="glyphicon glyphicon-th-large"></span> Projects</a></li>						
						<li><a href = "#teams" data-toggle="modal"><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user"></span> Teams</a></li>
						<li><a href = "#"><span class="glyphicon glyphicon-stats"></span> Project Progress</a></li>
						<li><a href = "#"><span class="glyphicon glyphicon-bell"></span> Notifications</a></li>
						<li><a href = "#"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
						<li class = "dropdown">
						
							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><b class = "caret"></b><span class="glyphicon glyphicon-user"></span></a>
							<ul class = "dropdown-menu">
								<li><a href = "#">My Profile</a></li> 
								<li><a href = "#">Sign Off</a></li>
							</ul>				
						</li>
					</ul>
					</div>
				</div>
			</div>	
	
		<!--Left side menu-->
		<div class="container-fluid">
					<div class="row">
						<div class="col-sm-5 col-md-2 sidebar">
							<ul class="nav nav-sidebar">
									<li class="active"><a href="#">My work</a></li>
									<li><a href="#">Backlog</a></li>
									<li><a href="#">User Stories</a></li>
									<li><a href="#">Iteration Plan</a></li>
									<li><a href="#">Release Plan</a></li>
									<li><a href="#">Task Board</a></li>
									<li><a href="#">User Story Progress</a></li>
									<li><a href="#">Team Members</a></li>
							</ul>
						</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Dashboard</h1>
			</div>
			</div>
			</div>
		
	





		<!--Footer-->
		<div class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container">
					<p class = "navbar-text pull-left">Site Built by Curtin SEP-004</p> 
					<a class = "navbar-btn btn-info btn pull-right">Sign Off</a>
			</div>			
		</div>	
			
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src = "js/bootstrap.js"></script>	
	</body>
	
</html>