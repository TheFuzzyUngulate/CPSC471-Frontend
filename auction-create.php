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
	<h1>CREATE AN AUCTION</h1>
	<p>Insert the auction information in the following fields.</p>
	
	<form method='post' action='auction-create.php'>
		Zipcode of listing: <input type="text" name="zipcode"><br>
		Name of Auction: <input type="text" name="auction_name"><br>
		Closing Date: <input type="text" name="date"><br>
		Closing Time: <input type="text" name="time"><br>
		
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
	
	if(isset($_POST["zipcode"])) {
	$zipcode = $_POST["zipcode"];
	$auction_name = $_POST["auction_name"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	
	//auction
	$auction = "INSERT IGNORE INTO auction (Zip_code, Name, Closing_date, Closing_time) 
	VALUES ('". $zipcode."','". $auction_name."','". $date."','". $time."')";
	
	if(!mysqli_query($con,$auction)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	
	echo "You have created an auction";
	
	}
	
	mysqli_close($con);
?>

</body>
</html>