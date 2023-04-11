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
	<h1>ADDING A TRANSACTION</h1>
	<p>Insert the transaction information in the following fields.</p>
	
	<form method='post' action='transaction.php'>
		Buyer's email: <input type="text" name="bemail"><br>
		Seller's ID: <input type="text" name="seller_id"><br>
		Zipcode of Listing: <input type="text" name="zipcode"><br>
		Amount Listing Sold For: <input type="text" name="amount"><br>
		Date of Transaction: <input type="text" name="date"><br>
		Time of Transaction: <input type="text" name="time"><br>
		
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
	$seller_id = $_POST["seller_id"];
	$zipcode = $_POST["zipcode"];
	$amount = $_POST["amount"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	
	//auction
	$transaction = "INSERT IGNORE INTO transaction (Buyer_email, Seller_ID, Zip_code, Amount, Date, Time) 
	VALUES ('". $bemail."','". $seller_id."','". $zipcode."','". $amount."','". $date."','". $time."')";
	
	if(!mysqli_query($con,$transaction)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	
	echo "You have added a transaction";
	
	}
	
	mysqli_close($con);
?>

</body>
</html>