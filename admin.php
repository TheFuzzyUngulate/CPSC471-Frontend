<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="main.css">
</head>
<body>

	<div class="primary-header">
        <nav class="grid-container">
            <div class="gridblock header-seller-options left-elem">
                <a href="mainpage.php">Homepage</a>
				<a href="assigns.php">Assign Agent</a>
            </div>
            <form id="mainpage-searchbar-form" class="searchbar" action="searchpage.php">
                <input type="text" class="main-searchbar-input" placeholder="search listings..." name="q">
                <button class="main-searchbar-button" type="submit"></button>
            </form>
            <div class="gridblock user-perms right-elem">
                <a href="admin.php">Admin</a>
                <a href="agent.php">Agent</a>
                <a href="mainpage.php">User</a>
            </div>
        </nav>
    </div>
	
	<br><br><br>
	<h1>ADMIN PORTAL</h1>
    <form method='post' action='admin.php'>
		<p>Insert new employee information in the following fields</p>
		First Name: <input type="text" name="emp_fname"><br>
		Last Name: <input type="text" name="emp_lname"><br>
		Phone Number: <input type="text" name="emp_phone_num"><br>
		Email: <input type="text" name="emp_email"><br>
		Role: <input type="text" name="emp_role"><br><br>
		Employee ID: <input type="text" name="emp_id"><br>
		Rating: <input type="text" name="emp_rating"><br>
		
		<input type="submit">
	</form>
	
<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	//Create connection
	//NOTE: Need to enter your web server password in 3rd argument for mysqli_connect()
	//in order to connect to mysql database. Intructions for downloading 'appserv' which
	//is a compatible web server with PHP and MySQL are in the PHP document on D2L
	$con = mysqli_connect('localhost', 'root', '','pandora_real_estate');

	if(!$con) {
		echo 'Connection did not work...';
		die('Could not connect: '. mysql_error());
	}
	
	if(isset($_POST["emp_fname"])) {
		$fname = $_POST["emp_fname"];
		$lname = $_POST["emp_lname"];
		$phone_num = $_POST["emp_phone_num"];
		$email = $_POST["emp_email"];
		$role = $_POST["emp_role"];
		$emp_id = $_POST["emp_id"];
		$rating = $_POST["emp_rating"];
	
	$sql_emp = "INSERT IGNORE INTO employee (EID, FName, LName, Phone_num, Email, Role) 
	VALUES ('". $emp_id."','". $fname."','". $lname."','". $phone_num."','". $email."','". $role."')";
	
	if(!mysqli_query($con,$sql_emp)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	
	$sql_agent = "INSERT IGNORE INTO agent (EID, Rating) 
	VALUES ('". $emp_id."','". $rating."')";
	
	if(!mysqli_query($con,$sql_agent)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	
	if($role == "Listing Agent") {
		$sql_agent1 = "INSERT IGNORE INTO listing_agent (EID) 
		VALUES ('". $emp_id."')";
	
		if(!mysqli_query($con,$sql_agent1)) {
			die('Error: ' . mysqli_error($con));
		} else {
			//echo "1 record added";
		}
	} else {
		$sql_agent2 = "INSERT IGNORE INTO buyers_agent (EID) 
		VALUES ('". $emp_id."')";
		
		if(!mysqli_query($con,$sql_agent2)) {
			die('Error: ' . mysqli_error($con));
		} else {
			//echo "1 record added";
		}
	}
	
	}
	
	mysqli_close($con);
	
	
?>
    
</body>
</html>