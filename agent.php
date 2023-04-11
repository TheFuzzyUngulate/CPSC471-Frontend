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
	<h1>AGENT PORTAL</h1>
	<p>Insert new listing information in the following fields</p>
	
	<form method='post' action='agent.php'>
		<h3>Location</h3>
		House Number: <input type="text" name="listing_house_number"><br>
		Street: <input type="text" name="listing_street"><br>
		Postal Code: <input type="text" name="listing_postal_code"><br>
		City: <input type="text" name="listing_city"><br>
		Province: <input type="text" name="listing_province"><br>
		Country: <input type="text" name="listing_country"><br><br>
		
		<h3>Price</h3>
		Price: <input type="text" name="listing_price"><br><br>
		
		<h3>House Attributes</h3>
		Number of Bedrooms: <input type="text" name="listing_bedrooms"><br>
		Number of Half Bathrooms: <input type="text" name="listing_half_bathrooms"><br>
		Number of Full Bathrooms: <input type="text" name="listing_full_bathrooms"><br>
		Square Footage: <input type="text" name="listing_square_footage"><br>
		<label for="listing_type">Type:</label>
		<select name="listing_type" id="listing_type">
			<option value="Single-Family">Single-Family</option>
			<option value="Condo">Condo</option>
			<option value="Apartment">Apartment</option>
			<option value="Townhouse">Townhouse</option>
			<option value="Mobile Home">Mobile Home</option>
		</select>
		<p>If selected Single-Family or Townhouse, specify the following attributes of the listing:</p>
		Number of Levels: <input type="text" name="levels"><br>
		<label for="walkout">Walkout Basement?</label>
		<select name="walkout" id="walkout">
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select><br>
		<label for="finished">Fully Developed Basement?</label>
		<select name="finished" id="finished">
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select><br>
		<label for="bonus_room">Bonus Room?</label>
		<select name="bonus_room" id="bonus_room">
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select><br>
		Roof Type: <input type="text" name="roof"><br>
		<br><br>
		
		<h3>Additional Information</h3>
		Front Facing: <input type="text" name="listing_front_facing"><br>
		Community: <input type="text" name="listing_community"><br>
		Heating: <input type="text" name="listing_heating"><br>
		Fireplace Type: <input type="text" name="listing_fireplace_type"><br>
		Attached/Detached Garage: <input type="text" name="listing_ad_garage"><br>
		Garage Capacity: <input type="text" name="listing_garage_capacity"><br>
		Flooring Type: <input type="text" name="flooring_type"><br><br>
		
		Any Nearby Recreations? <input type="text" name="rec"><br>
		Any Nearby Public Transportation Stations? <input type="text" name="pts"><br>
		Any Nearby Schools? <input type="text" name="schools"><br><br>
		
		<h3>Listing Agent Information</h3>
		Listing Agent ID: <input type="text" name="listing_lagent_id"><br>
		Date Added: <input type="text" name="listing_add_date"><br><br>
		
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
	
	if(isset($_POST["listing_house_number"])) {
	$house_number = $_POST["listing_house_number"];
	$street = $_POST["listing_street"];
	$postal_code = $_POST["listing_postal_code"];
	$city = $_POST["listing_city"];
	$province = $_POST["listing_province"];
	$country = $_POST["listing_country"];
	
	$price = $_POST["listing_price"];
	
	$bedrooms = $_POST["listing_bedrooms"];
	$half_baths = $_POST["listing_half_bathrooms"];
	$full_baths = $_POST["listing_full_bathrooms"];
	$square_footage = $_POST["listing_square_footage"];
	$type = $_POST["listing_type"];
	$levels = $_POST["levels"];
	$walkout = $_POST["walkout"];
	$finished = $_POST["finished"];
	$bonus_room = $_POST["bonus_room"];
	$roof = $_POST["roof"];
	
	$front_facing = $_POST["listing_front_facing"];
	$community = $_POST["listing_community"];
	$heating = $_POST["listing_heating"];
	$fire_place = $_POST["listing_fireplace_type"];
	$ad_garage = $_POST["listing_ad_garage"];
	$garage_capacity = $_POST["listing_garage_capacity"];
	
	$flooring_type = $_POST["flooring_type"];
	$rec = $_POST["rec"];
	$pts = $_POST["pts"];
	$schools = $_POST["schools"];
	
	$lagent_id = $_POST["listing_lagent_id"];
	$add_date = $_POST["listing_add_date"];
	
	$sql_listing = "INSERT IGNORE INTO listing (Zip_code, House_num, Street, City, Province, Country, Price, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date) 
	VALUES ('". $postal_code."','". $house_number."','". $street."','". $city."','". $province."','". $country."','". $price."','". $bedrooms."','". $half_baths."','". $full_baths."','". $square_footage."','". $type."','". $front_facing."','". $community."','". $heating."','". $fire_place."','". $ad_garage."','". $garage_capacity."','". $lagent_id."','". $add_date."')";
	$sql_associated = "INSERT IGNORE INTO associated (LA_ID, Zip_code) VALUES ('". $lagent_id."','". $postal_code."')";
	
	if(!mysqli_query($con,$sql_listing)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "1 record added";
	}
	if(!mysqli_query($con,$sql_associated)) {
		die('Error: ' . mysqli_error($con));
	} else {
		//echo "Another record added";
	}
	
	if($type == "Single-Family" || $type == "Townhouse") {
		$multi_floor1 = "INSERT IGNORE INTO multi_floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) 
		VALUES ('". $postal_code."','". $levels."','". $walkout."','". $finished."','". $bonus_room."','". $roof."','". $type."')";
		
		if(!mysqli_query($con,$multi_floor1)) {
			die('Error: ' . mysqli_error($con));
		} else {
			//echo "1 record added";
		}
	} else {
		$single_floor1 = "INSERT IGNORE INTO single_floor (Zip_code, Home_type) 
		VALUES ('". $postal_code."','". $type."')";
		
		if(!mysqli_query($con,$single_floor1)) {
			die('Error: ' . mysqli_error($con));
		} else {
			//echo "1 record added";
		}
	}
	
	$flooring_type_arr = explode(",", $flooring_type);
	$rec_arr = explode(",", $rec);
	$pts_arr = explode(",", $pts);
	$schools_arr = explode(",", $schools);
	
	if(!empty($flooring_type)) {
		foreach ($flooring_type_arr as $floor) {
			$floor1 = "INSERT IGNORE INTO listing_flooring (Zip_code, Flooring) 
			VALUES ('". $postal_code."','". $floor."')";
			
			if(!mysqli_query($con,$floor1)) {
				die('Error: ' . mysqli_error($con));
			} else {
				//echo "1 record added";
			}
		}
	}
	
	if(!empty($rec)) {
		foreach ($rec_arr as $recreation) {
			$recreation1 = "INSERT IGNORE INTO listing_nearby_recreations (Zip_code, Nearby_rec) 
			VALUES ('". $postal_code."','". $recreation."')";
			
			if(!mysqli_query($con,$recreation1)) {
				die('Error: ' . mysqli_error($con));
			} else {
				//echo "1 record added";
			}
		}
	}
	
	if(!empty($pts)) {
		foreach ($pts_arr as $station) {
			$station1 = "INSERT IGNORE INTO listing_nearby_public_transport_stations (Zip_code, Nearby_PTStation) 
			VALUES ('". $postal_code."','". $station."')";
			
			if(!mysqli_query($con,$station1)) {
				die('Error: ' . mysqli_error($con));
			} else {
				//echo "1 record added";
			}
		}
	}
	
	if(!empty($schools)) {
		foreach ($schools_arr as $school) {
			$school1 = "INSERT IGNORE INTO listing_nearby_schools (Zip_code, Nearby_School) 
			VALUES ('". $postal_code."','". $school."')";
			
			if(!mysqli_query($con,$school1)) {
				die('Error: ' . mysqli_error($con));
			} else {
				//echo "1 record added";
			}
		}
	}
	
	}
	
	mysqli_close($con);
?>
</body>
</html>