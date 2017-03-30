<?php

    session_start();
    //test session id
    //echo session_id();

    //test session domain
        echo ini_get('session.cookie_domain');


    //print all php session variables
    //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

/*    if(isset($_SESSION['authorized']) && $_SESSION['authorized'] === TRUE){
        echo "authorized to enter this page!";
        session_unset($_SESSION['authorized']);
    } else {
        echo "not authorized to enter this page";
        session_unset($_SESSION['authorized']);
        header('Location: login_page_with_session.php');
    }
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 15%;
    padding: 4px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 4px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 8%;
}

.imgcontainer {
    text-align: center;
	margin: 24px 0 12px 0;
}

.container {
    padding: 16px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f1f1f1;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: Blue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #e0e0e0;
}

li.dropdown {
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}

</style>

<body style="background-color:#F0EEEE;">
	
	<div class="imgcontainer">
		<img src="http://blogs.egusd.net/prairie/files/2013/07/priaire-header-1r736jq.jpg" alt="priarie logo">
	</div>
	
	<div class="container-fluid">	 
		<div class="container">
			
			<h3>Student Profile</h3>
		
			<ul class="list-inline">
				<li><a href="Faculty_Profile_Page.html">Home</a></li>
			</ul>
	
			<label><b>Search for student</b></label>
			<input type="text" placeholder="Search">
			
			<label><b>Search by: </b></label>
					<select id="search" name="search">
						<option value=""> </option>
						<option value="firstname">First Name</option>
						<option value="lastname">Last Name</option>
						<option value="idnumber">ID Number</option>
						<option value="gradelevel">Grade Level</option>
						<option value="readinglevel">Reading Level</option>
						<option value="mathlevel">Math Level</option>
						<option value="track">Track</option>
					</select>
		
			<button type="button" class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span> Search
			</button>
		
			<div class="row">
				<div class="col-sm-10"><h2>Student Name</h2></div>
			</div>
		
			<div class="row">
				<div class="col-sm-3"><!--left col-->
          			<div class="imgcontainer">
						<img src="https://rlv.zcache.com/little_girl_silhouette_5_x_7_photo_print-rb397f23ed99f480da092c7450a3a342e_fk95_8byvr_324.jpg" alt="girl">
						
						<ul class="list-group">
							<strong>Joined:</strong><br>
							<strong>Grade Level:</strong><br>
							<strong>Track:</strong>
						</ul> 
					</div>    
				</div><!--/col-3-->
			
				<div class="col-sm-9">
			  
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#home" data-toggle="tab">Assessments</a></li>
						<li><a href="#messages" data-toggle="tab">Upcoming Dates</a></li>
					</ul>
				  
					<div class="tab-content">
						<div class="tab-pane active" id="home">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Reading Level</th>
											<th>Math Level</th>
											<th>Behavioral</th>
											<th>Emotional</th>
											<th>Cognitive</th>
											<th>Speech/Language</th>
										</tr>
									</thead>
									<tbody id="items">
										<tr>
											<td>###</td>
											<td>###</td>
											<td>y/s</td>
											<td>y/s</td>
											<td>y/s</td>
											<td>y/s</td>
										</tr>
									</tbody>
								</table>
							
								<div class="row">
									<div class="col-md-4 col-md-offset-4 text-center">
										<ul class="pagination" id="myPager"></ul>
									</div>
								</div>
							</div><!--/table-resp-->

							<h4>Alerts</h4>
						  
								<div class="table-responsive">
									<div class="container">
										<div class="alert alert-success">
											<strong>Success!</strong> The student has taken all required assessments!
										</div>
										<div class="alert alert-info">
											<strong>Info!</strong> Updated the students info!
										</div>
										<div class="alert alert-warning">
											<strong>Warning!</strong> Assessments approaching within 2 weeks!
										</div>
										<div class="alert alert-danger">
											<strong>Danger!</strong> Assessments within 2 days!
										</div>
									</div>
								</div>

						</div><!--/tab-pane-->
						
						<div class="tab-pane" id="messages">
									 
							<ul class="list-group">
							  <li class="list-group-item text-right"><a class="pull-left">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>
							  <li class="list-group-item text-right"><a class="pull-left">Hi Joe, There has been a request on your account since that was..</a> 2.11.2014</li>
							  <li class="list-group-item text-right"><a class="pull-left">Nullam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
							  <li class="list-group-item text-right"><a class="pull-left">Thllam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
							  <li class="list-group-item text-right"><a class="pull-left">Wesm sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
							  <li class="list-group-item text-right"><a class="pull-left">For therepien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
							  <li class="list-group-item text-right"><a class="pull-left">Also we, havesapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
							  <li class="list-group-item text-right"><a class="pull-left">Swedish chef is assaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li> 
							</ul> 

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>