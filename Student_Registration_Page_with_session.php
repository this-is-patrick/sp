
<?php
	//start session
    session_start();

    //echo $_SESSION['authorized'];

    //check whether user is authorized to enter this page
    if(isset($_SESSION['authorized']) && $_SESSION['authorized'] === TRUE){
        //echo "authorized to enter this page!";
    } else {
        echo "not authorized to enter this page";
        session_unset($_SESSION['authorized']);
        header('Location: login_page_with_session.php');
    }

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
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 450px;
    border: none;
    cursor: pointer;
    width: 10%;
}

button2 {
    background-color: #4CAF50;
    color: white;
    padding: 4px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 6%;
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
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

</style>
<body style="background-color:#F0EEEE;">
	
	<div class="imgcontainer">
		<img src="http://blogs.egusd.net/prairie/files/2013/07/priaire-header-1r736jq.jpg" alt="priarie logo">
	</div>
	
	<div class="container-fluid">	 
		<div class="container">
			
			<h3>Register New Student</h3>
		
			<div class="row">
				<ul class="list-inline">
					<li><a href="Faculty_Profile_Page_with_session.php">Home</a></li>		
					<button2 class="btn btn-default pull-right" type="button" id="logoff">Logoff</button2>
				</ul>	
			</div>

			<form action="action_page.php">
				<div class="container">
					<label><b>First Name</b></label>
					<input type="text" placeholder="Enter first name" required>
					
					<label><b>Middle Name</b></label>
					<input type="text" placeholder="Enter middle name" required>
					
					<label><b>Last Name</b></label>
					<input type="text" placeholder="Enter last name" required>

					<label><b>ID Number</b></label>
					<input type="text" placeholder="Enter ID number" required>
					
					<label><b>Phone Number</b></label>
					<input type="text" placeholder="Enter phone number" required>
					
					<label><b>Address</b></label>
					<input type="text" placeholder="Enter address" required>
					
					<div class="row">
						<div class="col-sm-3">
							<label><b>Gender<b></label><br>
							<select id="gender" name="gender">
								<option value="">M/F</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
						<div class="col-sm-3">
							<label><b>Grade Level<b></label><br>
							<select name="gradelevel">
								<option value="grade">Grade</option>
								<option value="k">Kindergarten</option>
								<option value="1">1st grade</option>
								<option value="2">2nd grade</option>
								<option value="3">3rd grade</option>
								<option value="4">4th grade</option>
								<option value="5">5th grade</option>
								<option value="6">6th grade</option>
							</select>
						</div>
						<div class="col-sm-3">
							<label><b>Reading Level<b></label><br>
							<select name="readinglevel">
								<option value="grade">Grade</option>
								<option value="k">Kindergarten</option>
								<option value="1">1st grade</option>
								<option value="2">2nd grade</option>
								<option value="3">3rd grade</option>
								<option value="4">4th grade</option>
								<option value="5">5th grade</option>
								<option value="6">6th grade</option>
							</select>
						</div>
						<div class="col-sm-3">
							<label><b>Math Level<b></label><br>
							<select name="mathlevel">
								<option value="grade">Grade</option>
								<option value="k">Kindergarten</option>
								<option value="1">1st grade</option>
								<option value="2">2nd grade</option>
								<option value="3">3rd grade</option>
								<option value="4">4th grade</option>
								<option value="5">5th grade</option>
								<option value="6">6th grade</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-1">
							<label><b>Behavioral<b></label><br>
							<select id="behavioral" name="behavioral">
								<option value="">Y/N</option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select><br><br>
						</div>
						<div class="col-sm-1">
							<label><b>Emotional<b></label><br>
							<select id="emotional" name="emotional">
								<option value="">Y/N</option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select><br><br>	
						</div>
						<div class="col-sm-1">
							<label><b>Cognitive<b></label><br>
							<select id="cognitive" name="cognitive">
								<option value="">Y/N</option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select><br><br>
						</div>
						<div class="col-sm-1">
							<label><b>Speech/Language<b></label><br>
							<select id="speech/language" name="speech/language">
								<option value="">Y/N</option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select><br><br>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-3">
							<label><b>Date of Birth<b></label><br>
							<select name="months">
								<option value="">Month</option>
								<option value="Jan">January</option>
								<option value="Feb">February</option>
								<option value="Mar">March</option>
								<option value="Apr">April</option>
								<option value="May">May</option>
								<option value="Jun">June</option>
								<option value="Jul">July</option>
								<option value="Aug">August</option>
								<option value="Sept">September</option>
								<option value="Oct">October</option>
								<option value="Nov">November</option>
								<option value="Dec">December</option>
							</select>
				  
							<select name="days">
								<option>Day</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>

							<select name="year">
								<option>Year</option>
								<option value="2011">2018</option>
								<option value="2004">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
							</select>
						</div>
						<div class="col-sm-1">
							<label><b>Track<b></label>
							<select id="track" name="track">
								<option value=""></option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
							</select>
						</div>
					</div>
			  	  <button type="submit" value="Submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
</body>
	<!--script for logoff operation -->
	<script type="text/javascript">

		$('#logoff').click(function(){
			$.ajax({
				type: 'POST',
				url: 'logoff.php',
				data: '',
				success: function(response){
							var trim = $.trim(response);
							if(trim == 'ok'){
								//window.alert(response);
								window.location.href = "login_page_with_session.php";
							} else {
								//console.log(response);
								console.log("unable to logout!");
							}
						},
				error: function(a,b,c){
						console.log(a);
						console.log(b);
						console.log(c);
					}
			});
		});
	</script>

</html>

