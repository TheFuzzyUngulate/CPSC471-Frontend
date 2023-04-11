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
	<h1>ASSIGNING AN AGENT</h1>
	<p>Insert the information in the following fields.</p>
	
	<form method='post' action='assigns.php'>
		Listing Agent's ID: <input type="text" name="lagent_id"><br>
		Zipcode of Listing: <input type="text" name="zipcode"><br>
		Admin ID: <input type="text" name="admin"><br>
		
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
	
	if(isset($_POST["lagent_id"])) {
	$lagent_id = $_POST["lagent_id"];
	$zipcode = $_POST["zipcode"];
	$admin = $_POST["admin"];
	
	//auction
	$assign1 = "INSERT IGNORE INTO assigns (LA_ID, Zip_code, Admin_ID) 
	VALUES ('". $lagent_id."','". $zipcode."','". $admin."')";
	
	if(!mysqli_query($con,$assign1)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	
	echo "You have assigned the agent to the listing. ";
	echo "Notified agent of new assignment.";
	
	}
	
	mysqli_close($con);
?>

</body>
</html>