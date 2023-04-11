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
                <a href="contact-agent.php">Contact an Agent</a>
				<a href="auction.php">Bid in an Auction</a>
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
	<h1>BID IN AN AUCTION</h1>
	<p>Insert your information and proposing bid in the following fields.</p>
	
	<form method='post' action='auction.php'>
		First Name: <input type="text" name="fname"><br>
		Last Name: <input type="text" name="lname"><br>
		Email: <input type="text" name="email"><br>
		Phone Number: <input type="text" name="phone"><br>
		<br>
		Zipcode of listing: <input type="text" name="zipcode"><br>
		Bid: <input type="text" name="bid"><br>
		Date of placing bid: <input type="text" name="date"><br>
		Time of placing bid: <input type="text" name="time"><br>
		
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
	
	if(isset($_POST["fname"])) {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$zipcode = $_POST["zipcode"];
	$bid = $_POST["bid"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	
	//select from auction for auction name
	$auction = "SELECT A.Name 
				FROM auction AS A
				WHERE '". $zipcode."' = A.Zip_code";
	
	if(($result = mysqli_query($con,$auction)) == TRUE) {
		$row = mysqli_fetch_assoc($result);
		//echo $row["Name"];
		$auction_name = $row["Name"];
	} else {
		die('Error: ' . mysqli_error($con));
	}
	
	//buyer
	$buyer1 = "INSERT IGNORE INTO buyer (Email, FName, LName, Phone_num) 
	VALUES ('". $email."','". $fname."','". $lname."','". $phone."')";
	
	if(!mysqli_query($con,$buyer1)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	
	//auction_biddings
	$auction_bid = "INSERT IGNORE INTO auction_biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) 
	VALUES ('". $email."','". $zipcode."','". $auction_name."','". $bid."','". $date."','". $time."')";
	
	if(!mysqli_query($con,$auction_bid)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	
	echo "Your bid has been placed";
	
	}
	
	mysqli_close($con);
?>

</body>
</html>