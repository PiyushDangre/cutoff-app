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
        <li class="active"><a href="admin-panel.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Users</a></li>
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
		<div class="col-md-8 col-sm-8">
			<form class="form-vertical" role="form">
				<div class="form-group">
					<label class="control-label" for="college">College:</label>
					<div>
						<select class="form-control" id="sel1" name="college">
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
					<label class="control-label" for="pwd">Password:</label>
					<div> 
					  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
					</div>
				</div>
				<div class="form-group"> 
					<div>
					  <div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
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




