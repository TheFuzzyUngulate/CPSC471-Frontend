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
	<h1>SELL A LISTING</h1>
	<p>Insert your details and the details of your listing in the following fields</p>
	<p>Please note all home details are required. If your home does not include something, please enter 0.</p>
	
	<form method='post' action='sellpage.php'>
		First Name: <input type="text" name="fname"><br>
		Last Name: <input type="text" name="lname"><br>
		Email: <input type="text" name="email"><br>
		Phone Number: <input type="text" name="phone"><br>
		<label for="categories">Please indicate the category you are representing when selling the listing:</label>
		<select name="categories" id="categories">
			<option value="Individual">Individual</option>
			<option value="Bank">Bank</option>
			<option value="Construction Company">Construction Company</option>
		</select>
		<p>If selected Bank, please specify the Bank name and branch number:</p>
		Bank Name: <input type="text" name="bank_name"><br>
		Branch Number: <input type="text" name="branch_num"><br>
		<p>If selected Construction Company, please specify the company name:</p>
		Construction Company Name: <input type="text" name="comp_name"><br>
		<br><br>
		Listing Address: <input type="text" name="listing_address"><br>
		<label for="type">Home Type:</label>
		<select name="type" id="type">
			<option value="Single-Family">Single-Family</option>
			<option value="Condo">Condo</option>
			<option value="Apartment">Apartment</option>
			<option value="Townhouse">Townhouse</option>
			<option value="Mobile Home">Mobile Home</option>
		</select>
		<br>
		Number of Bedrooms: <input type="text" name="bedrooms"><br>
		Number of Full Bathrooms: <input type="text" name="full_bathrooms"><br>
		Number of Half-Baths: <input type="text" name="half_bathrooms"><br>
		<br>
		Price: <input type="text" name="price"><br>
		
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
	$cat = $_POST["categories"];
	$bank_name = $_POST["bank_name"];
	$branch_num = $_POST["branch_num"];
	$comp_name = $_POST["comp_name"];
	$listing_address = $_POST["listing_address"];
	$type = $_POST["type"];
	$bedrooms = $_POST["bedrooms"];
	$full_bathrooms = $_POST["full_bathrooms"];
	$half_bathrooms = $_POST["half_bathrooms"];
	$price = $_POST["price"];
	$seller_id = rand(100000000,999999999);
	//echo $seller_id;
	
	//seller
	$seller1 = "INSERT IGNORE INTO seller (Seller_ID) 
	VALUES ('". $seller_id."')";
	
	if(!mysqli_query($con,$seller1)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	
	//seller categories
	if($cat == "Individual") {
		//individual
		$individual1 = "INSERT IGNORE INTO individual (Email, FName, LName, Phone_num, Seller_ID) 
		VALUES ('". $email."','". $fname."','". $lname."','". $phone."','". $seller_id."')";
		
		if(!mysqli_query($con,$individual1)) {
			die('Error: ' . mysqli_error($con));
		} else {
			//echo "1 record added";
		}
		
	} else if($cat == "Bank") {
		//bank
		$bank1 = "INSERT IGNORE INTO bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) 
		VALUES ('". $email."','". $fname."','". $lname."','". $phone."','". $bank_name."','". $branch_num."','". $seller_id."')";
		
		if(!mysqli_query($con,$bank1)) {
			die('Error: ' . mysqli_error($con));
		} else {
			//echo "1 record added";
		}
		
	} else if($cat == "Construction Company") {
		//construction company
		$comp1 = "INSERT IGNORE INTO construction_company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) 
		VALUES ('". $email."','". $fname."','". $lname."','". $phone."','". $comp_name."','". $seller_id."')";
		
		if(!mysqli_query($con,$comp1)) {
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