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
				<a href="auction-create.php">Create an Auction</a>
				<a href="showing.php">Schedule a Showing</a>
            </div>
            <form id="mainpage-searchbar-form" class="searchbar" action="searchpage.php">
                <input type="text" class="main-searchbar-input" placeholder="search listings..." name="q">
                <button class="main-searchbar-button" type="submit"></button>
            </form>
            <div class="gridblock user-perms right-elem">
				<a href="payment.php">Add Payment</a>
				<a href="transaction.php">Add Transaction</a>
                <a href="admin.php">Admin</a>
                <a href="agent.php">Agent</a>
                <a href="mainpage.php">User</a>
            </div>
        </nav>
    </div>
	
	<br><br><br>
	<h1>SCHEDULE A SHOWING</h1>
	<p>Insert the information in the following fields.</p>
	
	<form method='post' action='showing.php'>
		Buyer's email: <input type="text" name="bemail"><br>
		Buyer's Agent ID: <input type="text" name="agent_id"><br>
		Zipcode of Listing: <input type="text" name="zipcode"><br>
		Date of Showing: <input type="text" name="date"><br>
		Time of Showing: <input type="text" name="time"><br>
		
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
	
	if(isset($_POST["bemail"])) {
	$bemail = $_POST["bemail"];
	$agent_id = $_POST["agent_id"];
	$zipcode = $_POST["zipcode"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	
	//auction
	$showing = "INSERT IGNORE INTO listing_showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) 
	VALUES ('". $bemail."','". $agent_id."','". $zipcode."','". $date."','". $time."')";
	
	if(!mysqli_query($con,$showing)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	
	echo "You have scheduled a showing";
	
	}
	
	mysqli_close($con);
?>
	
</body>
</html>