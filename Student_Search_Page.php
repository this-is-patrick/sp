<?php

	static $connection;

	if(!isset($connection)){
	   $config = parse_ini_file('./config.ini');
	   $connection = mysqli_connect('athena.ecs.csus.edu', $config['username'], $config['password'], $config['dbname']);
	}
	
	if(mysqli_connect_errno()){
		echo "failed to connect to MYSQL: " . mysqli_connect_error();
	}
	
	$sql = "SELECT sid, fname, lname FROM student";
	$result = $connection->query($sql);

	if($result->num_rows > 0)
	   while($row =$result->fetch_assoc()){
	   	echo "<br> id: ". $row["sid"]. " - First Name: ". $row["fname"]. " Last Name: ". $row["lname"]. "<br>";
	}else {
	   echo "0 results";
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
    width: 100%;
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
