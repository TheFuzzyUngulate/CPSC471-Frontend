<html>
<body>
<?php
		
		//Create connection
		//Note: Insert your password in 3rd argument to connect
		$con_id=mysqli_connect('localhost','root','','pandora_real_estate');
		
		//Check connection
		if(mysqli_connect_errno($con_id)) {
			echo "Failed to connect to MySQL: ". mysqli_connect_error();
		}
		//echo "connected successfully";
		
		//Buyer
		$buyer1 = "INSERT IGNORE INTO buyer (Email, FName, LName, Phone_num) VALUES ('alice.acrobat@gmail.com', 'Alice', 'Acrobat', '4031234567')";
		if(!mysqli_query($con_id,$buyer1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$buyer2 = "INSERT IGNORE INTO buyer (Email, FName, LName, Phone_num) VALUES ('bob.emirates@gmail.com', 'Bob', 'Emirates', '4039615582')";
		if(!mysqli_query($con_id,$buyer2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$buyer3 = "INSERT IGNORE INTO buyer (Email, FName, LName, Phone_num) VALUES ('catherine.lambert@gmail.com', 'Catherine', 'Lambert', '4038724673')";
		if(!mysqli_query($con_id,$buyer3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Employee
		$employee1 = "INSERT IGNORE INTO employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('123456789', 'Evelyn', 'Host', '4036512683', 'evelyn.host@lstrealestate.com', 'Listing Agent')";
		if(!mysqli_query($con_id,$employee1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$employee2 = "INSERT IGNORE INTO employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('214365978', 'Ross', 'Code', '5878547853', 'ross.code@lstrealestate.com', 'Listing Agent')";
		if(!mysqli_query($con_id,$employee2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			echo "1 record added";
		}
		
		$employee3 = "INSERT IGNORE INTO employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('653589643', 'Danika', 'Butler', '5873546086', 'danika.butler@lstrealestate.com', 'Buyers Agent')";
		if(!mysqli_query($con_id,$employee3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$employee4 = "INSERT IGNORE INTO employee (EID, FName, LName, Phone_num, Email, Role) VALUES ('953580865', 'Alex', 'Moss', '4038754976', 'alex.moss@lstrealestate.com', 'Admin')";
		if(!mysqli_query($con_id,$employee4)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Agent
		$agent1 = "INSERT IGNORE INTO agent (EID, Rating) VALUES ('123456789', 5)";
		if(!mysqli_query($con_id,$agent1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$agent2 = "INSERT IGNORE INTO agent (EID) VALUES ('214365978')";
		if(!mysqli_query($con_id,$agent2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$agent3 = "INSERT IGNORE INTO agent (EID, Rating) VALUES ('653589643', 4)";
		if(!mysqli_query($con_id,$agent3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Buyers Agent
		$bagent1 = "INSERT IGNORE INTO buyers_agent (EID) VALUES ('653589643')";
		if(!mysqli_query($con_id,$bagent1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Listing Agent
		$lagent1 = "INSERT IGNORE INTO listing_agent (EID) VALUES ('123456789')";
		if(!mysqli_query($con_id,$lagent1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$lagent2 = "INSERT IGNORE INTO listing_agent (EID) VALUES ('214365978')";
		if(!mysqli_query($con_id,$lagent2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Listing
		$listing1 = "INSERT IGNORE INTO listing (Zip_code, House_num, Street, City, Province, Country, Price, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date)
		 VALUES ('A2B3C1', 471, 'Database Street NE', 'Vancouver', 'British Colombia', 'Canada', 123456.00, 2, 1, 2, 2500, 'Single-Family', 'N', 'Database', 'Natural gas central', 'Electric', 'Detached', 2, '123456789', '2023-03-25')";
		if(!mysqli_query($con_id,$listing1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$listing2 = "INSERT IGNORE INTO listing (Zip_code, House_num, Street, City, Province, Country, Price, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date)
		 VALUES ('B3C5A2', 231, 'Southern Lane SW', 'Calgary', 'Alberta', 'Canada', 92000.00, 1, 0, 1, 450, 'Apartment', 'N', 'Southern Hills', 'Natural gas forced', 'Electric', 'Detached', 1, '123456789', '2023-03-28')";
		if(!mysqli_query($con_id,$listing2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$listing3 = "INSERT IGNORE INTO listing (Zip_code, House_num, Street, City, Province, Country, Price, Num_of_bedrooms, Num_of_half_bathrooms, Num_of_full_bathrooms, Square_footage, Type, Front_facing, Community, Heating, Fireplace_type, Attached_Detached_garage, Garage_capacity, LAgent_ID, Add_date)
		 VALUES ('C5A1B3', 675, 'Amazon Drive NE', 'Calgary', 'Alberta', 'Canada', 675864.00, 3, 1, 2, 3000, 'Single-Family', 'W', 'Amazon Rivers', 'Natural gas central', 'Gas', 'Attached', 2, '214365978', '2023-04-02')";
		if(!mysqli_query($con_id,$listing3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Seller
		$seller1 = "INSERT IGNORE INTO seller (Seller_ID) VALUES ('987654321')";
		if(!mysqli_query($con_id,$seller1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$seller2 = "INSERT IGNORE INTO seller (Seller_ID) VALUES ('546964892')";
		if(!mysqli_query($con_id,$seller2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$seller3 = "INSERT IGNORE INTO seller (Seller_ID) VALUES ('379753689')";
		if(!mysqli_query($con_id,$seller3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Individual
		$individual1 = "INSERT IGNORE INTO individual (Email, FName, LName, Phone_num, Seller_ID) 
		VALUES ('sam.hash@gamil.com', 'Sam', 'Hash', '4038074689', '987654321')";
		if(!mysqli_query($con_id,$individual1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Bank
		$bank1 = "INSERT IGNORE INTO bank (Bank_rep_email, Bank_rep_FName, Bank_rep_LName, Bank_rep_phone_num, Bank_name, Branch_no, Seller_ID) 
		VALUES ('hash.brown@mybank.com', 'Hash', 'Brown', '4039864789', 'MY Bank', '1', '546964892')";
		if(!mysqli_query($con_id,$bank1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Contruction Company
		$company1 = "INSERT IGNORE INTO construction_company (Comp_rep_email, Comp_rep_FName, Comp_rep_LName, Comp_rep_phone_num, Comp_name, Seller_ID) 
		VALUES ('victoria.bec@mycompany.com', 'Victoria', 'Bec', '4037974797', 'MY Company', '379753689')";
		if(!mysqli_query($con_id,$company1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Auction
		$auction1 = "INSERT IGNORE INTO auction (Zip_code, Name, Closing_date, Closing_time) 
		VALUES ('A2B3C1', 'Auction for 471 Database St', '2023-05-01', '23:59')";
		if(!mysqli_query($con_id,$auction1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Showing
		$showing1 = "INSERT IGNORE INTO listing_showing (Buyer_email, BAgent_ID, Zip_code, Date, Time) 
		VALUES ('alice.acrobat@gmail.com', '653589643', 'A2B3C1', '2023-04-08', '15:00')";
		if(!mysqli_query($con_id,$showing1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//In Contact
		$incontact1 = "INSERT IGNORE INTO incontact (Buyer_email, BAgent_ID) 
		VALUES ('alice.acrobat@gmail.com', '653589643')";
		if(!mysqli_query($con_id,$incontact1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Admin
		$admin1 = "INSERT IGNORE INTO admin (EID) 
		VALUES ('953580865')";
		if(!mysqli_query($con_id,$admin1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Associated
		$associated1 = "INSERT IGNORE INTO associated (LA_ID, Zip_code) 
		VALUES ('123456789', 'A2B3C1')";
		if(!mysqli_query($con_id,$associated1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$associated2 = "INSERT IGNORE INTO associated (LA_ID, Zip_code) 
		VALUES ('123456789', 'B3C5A2')";
		if(!mysqli_query($con_id,$associated2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$associated3 = "INSERT IGNORE INTO associated (LA_ID, Zip_code) 
		VALUES ('214365978', 'C5A1B3')";
		if(!mysqli_query($con_id,$associated3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Nearby Recreations
		$rec3 = "INSERT IGNORE INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) 
		VALUES ('A2B3C1', 'YMCA')";
		if(!mysqli_query($con_id,$rec3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$rec2 = "INSERT IGNORE INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) 
		VALUES ('B3C5A2', 'YMCA')";
		if(!mysqli_query($con_id,$rec2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$rec1 = "INSERT IGNORE INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) 
		VALUES ('B3C5A2', 'The City Recreation')";
		if(!mysqli_query($con_id,$rec1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$rec4 = "INSERT IGNORE INTO Listing_Nearby_Recreations (Zip_code, Nearby_rec) 
		VALUES ('C5A1B3', 'The City Recreation')";
		if(!mysqli_query($con_id,$rec4)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Nearby PTS
		$pts1 = "INSERT IGNORE INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) 
		VALUES ('A2B3C1', 'Pacific Central Station')";
		if(!mysqli_query($con_id,$pts1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$pts2 = "INSERT IGNORE INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) 
		VALUES ('B3C5A2', 'Dalhousie Station')";
		if(!mysqli_query($con_id,$pts2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$pts3 = "INSERT IGNORE INTO Listing_Nearby_Public_Transport_Stations (Zip_code, Nearby_PTStation) 
		VALUES ('C5A1B3', 'Dalhousie Station')";
		if(!mysqli_query($con_id,$pts3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Nearby Schools
		$schools1 = "INSERT IGNORE INTO Listing_Nearby_Schools (Zip_code, Nearby_School) 
		VALUES ('A2B3C1', 'Pacific Central High School')";
		if(!mysqli_query($con_id,$schools1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$schools2 = "INSERT IGNORE INTO Listing_Nearby_Schools (Zip_code, Nearby_School) 
		VALUES ('B3C5A2', 'Dalhousie High School')";
		if(!mysqli_query($con_id,$schools2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$schools3 = "INSERT IGNORE INTO Listing_Nearby_Schools (Zip_code, Nearby_School) 
		VALUES ('C5A1B3', 'Dalhousie High School')";
		if(!mysqli_query($con_id,$schools3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$schools4 = "INSERT IGNORE INTO Listing_Nearby_Schools (Zip_code, Nearby_School) 
		VALUES ('C5A1B3', 'Sunshine Elementary School')";
		if(!mysqli_query($con_id,$schools4)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Flooring
		$flooring1 = "INSERT IGNORE INTO Listing_Flooring (Zip_code, Flooring) 
		VALUES ('A2B3C1', 'Hardwood')";
		if(!mysqli_query($con_id,$flooring1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$flooring12 = "INSERT IGNORE INTO Listing_Flooring (Zip_code, Flooring) 
		VALUES ('A2B3C1', 'Carpet')";
		if(!mysqli_query($con_id,$flooring12)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$flooring2 = "INSERT IGNORE INTO Listing_Flooring (Zip_code, Flooring) 
		VALUES ('B3C5A2', 'Lamination')";
		if(!mysqli_query($con_id,$flooring2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$flooring3 = "INSERT IGNORE INTO Listing_Flooring (Zip_code, Flooring) 
		VALUES ('C5A1B3', 'Hardwood')";
		if(!mysqli_query($con_id,$flooring3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Multi-floor
		$multi1 = "INSERT IGNORE INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) 
		VALUES ('A2B3C1', '2', 'Yes', 'Yes', 'No', 'Asphalt Roof', 'Single-Family')";
		if(!mysqli_query($con_id,$multi1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$multi3 = "INSERT IGNORE INTO Multi_Floor (Zip_code, Num_of_levels, Walkout_basement, Finished_basement, Bonus_room, Roof, Home_type) 
		VALUES ('C5A1B3', '3', 'Yes', 'Yes', 'Yes', 'Asphalt Roof', 'Single-Family')";
		if(!mysqli_query($con_id,$multi3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Single-Floor
		$single2 = "INSERT IGNORE INTO Single_Floor (Zip_code, Home_type) 
		VALUES ('B3C5A2', 'Apartment')";
		if(!mysqli_query($con_id,$single2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Auction Biddings
		$auctionbid1 = "INSERT IGNORE INTO auction_biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) 
		VALUES ('alice.acrobat@gmail.com', 'A2B3C1', 'Auction for 471 Database St', '123300.00', '2023-04-09', '15:00')";
		if(!mysqli_query($con_id,$auctionbid1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$auctionbid2 = "INSERT IGNORE INTO auction_biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) 
		VALUES ('bob.emirates@gmail.com', 'A2B3C1', 'Auction for 471 Database St', '123350.00', '2023-04-10', '9:00')";
		if(!mysqli_query($con_id,$auctionbid2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		//Photos
		$photo1 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('A2B3C1', 'images/471 Database Street - 1.jpg')";
		if(!mysqli_query($con_id,$photo1)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo12 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('A2B3C1', 'images/471 Database Street - 2.jpg')";
		if(!mysqli_query($con_id,$photo12)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo13 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('A2B3C1', 'images/471 Database Street - 3.jpg')";
		if(!mysqli_query($con_id,$photo13)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo14 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('A2B3C1', 'images/471 Database Street - 4.jpg')";
		if(!mysqli_query($con_id,$photo14)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo15 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('A2B3C1', 'images/471 Database Street - 5.jpg')";
		if(!mysqli_query($con_id,$photo15)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo16 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('A2B3C1', 'images/471 Database Street - 6.jpg')";
		if(!mysqli_query($con_id,$photo16)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo2 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('B3C5A2', 'images/231 Southern Lane - 1.jpg')";
		if(!mysqli_query($con_id,$photo2)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo22 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('B3C5A2', 'images/231 Southern Lane - 2.jpg')";
		if(!mysqli_query($con_id,$photo22)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo23 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('B3C5A2', 'images/231 Southern Lane - 3.jpg')";
		if(!mysqli_query($con_id,$photo23)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo24 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('B3C5A2', 'images/231 Southern Lane - 4.jpg')";
		if(!mysqli_query($con_id,$photo24)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo25 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('B3C5A2', 'images/231 Southern Lane - 5.jpg')";
		if(!mysqli_query($con_id,$photo25)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo3 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('C5A1B3', 'images/675 Amazon Drive - 1.jpg')";
		if(!mysqli_query($con_id,$photo3)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo32 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('C5A1B3', 'images/675 Amazon Drive - 2.jpg')";
		if(!mysqli_query($con_id,$photo32)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo33 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('C5A1B3', 'images/675 Amazon Drive - 3.jpg')";
		if(!mysqli_query($con_id,$photo33)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo34 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('C5A1B3', 'images/675 Amazon Drive - 4.jpg')";
		if(!mysqli_query($con_id,$photo34)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo35 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('C5A1B3', 'images/675 Amazon Drive - 5.jpg')";
		if(!mysqli_query($con_id,$photo35)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo36 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('C5A1B3', 'images/675 Amazon Drive - 6.jpg')";
		if(!mysqli_query($con_id,$photo36)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		$photo37 = "INSERT IGNORE INTO listing_photos (Zip_code, Photo) 
		VALUES ('C5A1B3', 'images/675 Amazon Drive - 7.jpg')";
		if(!mysqli_query($con_id,$photo37)) {
			die('Error: ' . mysqli_error($con_id));
		} else {
			//echo "1 record added";
		}
		
		mysqli_close($con_id);
		
		//https://tableplus.com/blog/2018/11/how-to-insert-if-not-exist-mysql.html
		//471 database street
		//https://www.istockphoto.com/photos/single-family-home-exterior
		//https://www.pinterest.ca/pin/89368373838616482/
		//https://blog.kitchenmagic.com/blog/kitchen-design-on-a-budget-take-the-phased-approach
		//https://www.thespruce.com/small-master-bedroom-ideas-tips-and-photos-4121678
		//https://www.realtor.com/advice/buy/what-is-a-half-bath/
		
		//Southern Lane - apartment
		//https://www.dreamstime.com/photos-images/apartment.html
		//https://www.pexels.com/search/living%20room/
		//https://www.homedit.com/single-family-home-gets-a-timeless-decor/
		//https://www.thespruce.com/simple-apartment-kitchen-ideas-4176808
		//https://www.squareone.ca/resource-centres/interior-design/small-kitchen-design-ideas
		
		//Amazon Drive
		//https://www.istockphoto.com/photo/single-family-house-two-storys-with-driveway-gm136376125-18763121
		//https://www.publicdomainpictures.net/en/view-image.php?image=210317&picture=living-room
		//https://listwithclever.com/real-estate-blog/what-is-a-half-bathroom/
		//https://www.pexels.com/search/apartment/
		//https://www.irvinecompanyapartments.com/rental-living/apartment-kitchen-ideas/
		

?>
</body>
</html>