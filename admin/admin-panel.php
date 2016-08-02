<?php

// Admin panel for putting data in tables
// Author: Piyush Dangre

include '../db/db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel | Cutoff App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 145px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }

  </style>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin-panel.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out</a></li>  		
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">
	<div class="row  text-center">
		
			<strong><h1>ADMIN PANEL</h1></strong>	
			<span><h4>Enter data &amp; hit submit</h4></span>
	</div>
</div>
<br> <!--SPACING-->
	<!-- END ROW 1---->
	<div class="container">
		<ul class="nav nav-tabs">
			  <li role="presentation" class="active"><a href="#">Enter Data</a></li>
			  <li role="presentation"><a href="#">View Records</a></li>
		</ul>
		<br>
		<div class="col-md-8 col-sm-8">
			<form class="form-vertical" role="form">
				<div class="form-group">
					<label class="control-label" for="college">College:</label>
					<div>
						<select class="form-control" id="college">
							<option>GHRCE, Nagpur</option>
							<option>YCCE, Nagpur</option>
							<option>RCOEM, Nagpur</option>
							<option>KDKCE, Nagpur</option>
							<option>PCOE, Nagpur</option>
							<option>RGCER, Nagpur</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" for="branch">Branch:</label>
					<div> 
					  <select class="form-control" id="branch">
							<option>Civil Engineering</option>
							<option>Computer Science and Engineering</option>
							<option>Information Technology</option>
							<option>Electrical Engineering</option>
							<option>Electronics Design Technology</option>
							<option>Electronics and Communication Engineering</option>
							<option>Electronics Engineering</option>
							<option>Industrial Engineering</option>
							<option>Mechanical Engineering</option>
							<option>Computer Technology</option>
							<option>Bio Technology</option>
							<option>Chemical Engineering</option>
							<option>Power Engineering</option>
							<option>Mining Engineering</option>
						</select>
					</div>
				</div>
				<div class="row repeat-row">
					<div class="form-group col-md-6 col-sm-6 col-xs-6">
						<label class="control-label" for="quota">Quota</label>
						<div>  
							<select class="form-control" id="branch">
								<option>Civil Engineering</option>
								<option>Computer Science and Engineering</option>
								<option>Information Technology</option>
								<option>Electrical Engineering</option>
								<option>Electronics Design Technology</option>
								<option>Electronics and Communication Engineering</option>
								<option>Electronics Engineering</option>
								<option>Industrial Engineering</option>
								<option>Mechanical Engineering</option>
								<option>Computer Technology</option>
								<option>Bio Technology</option>
								<option>Chemical Engineering</option>
								<option>Power Engineering</option>
								<option>Mining Engineering</option>
							</select>
						</div>
					</div>
					
					<div class="form-group col-md-6 col-sm-6 col-xs-6">
						<label class="control-label" for="merit_no">Merit List No.</label>
						<div>  
							<input type="number" class="form-control" id="merit_no" placeholder="Enter Cutoff Merit No."></input>
						</div>
					</div>
					
				</div>		
				<div class="form-group"> 
					<div>
					  <button type="submit" class="btn btn-primary btn-block">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>


<br> <!--SPACING-->
<footer class="container-fluid text-center">
  <p>Developed by Weblance Media</p>
</footer>


</body>
</html>




