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
	<h1>ADDING A PAYMENT</h1>
	<p>Insert the payment information in the following fields.</p>
	
	<form method='post' action='payment.php'>
		Zipcode of Listing: <input type="text" name="zipcode"><br>
		Agent's ID: <input type="text" name="agent_id"><br>
		Date: <input type="text" name="date"><br>
		Amount Earned: <input type="text" name="amount1"><br>
		<label for="pay">Payment Method</label>
		<select name="pay" id="pay">
			<option value="Commission Percentage">Commission Percentage</option>
			<option value="Flat Fee">Flat Fee</option>
		</select><br>
		<p>(Note: If selected 'Commission Percentage', specify the received percentage <br>
		 If selected 'Flat Fee', specify the fee amount)</p>
		Payment Method Amount Received: <input type="text" name="pay_amount"><br>
		
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
	$agent_id = $_POST["agent_id"];
	$date = $_POST["date"];
	$amount1 = $_POST["amount1"];
	$pay = $_POST["pay"];
	$pay_amount = $_POST["pay_amount"];
	
	if($pay == "Commission Percentage") {
		//auction
		$payment = "INSERT IGNORE INTO payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) 
		VALUES ('". $zipcode."','". $agent_id."','". $date."','". $amount1."','". $pay_amount."','0')";
		
		if(!mysqli_query($con,$payment)) {
			die('Error: ' . mysqli_error($con));
		} else {
			//echo "1 record added";
		}
	} else {
		//auction
		$payment = "INSERT IGNORE INTO payment (Zip_code, Agent_ID, Date, Amount, Commission_percentage, Flat_fee) 
		VALUES ('". $zipcode."','". $agent_id."','". $date."','". $amount1."','0','". $pay_amount."')";
		
		if(!mysqli_query($con,$payment)) {
			die('Error: ' . mysqli_error($con));
		} else {
			//echo "1 record added";
		}
	}
	
	echo "You have added a payment";
	
	}
	
	mysqli_close($con);
?>

</body>
</html>