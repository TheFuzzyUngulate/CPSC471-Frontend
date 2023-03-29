<html>
<body>

<?php
		echo "Hello World!";
		//Create connection
		//NOTE: Need to enter your web server password in 3rd argument for mysqli_connect()
		//in order to connect to mysql database. Intructions for downloading 'appserv' which
		//is a compatible web server with PHP and MySQL are in the PHP document on D2L
		$con=mysqli_connect('localhost','root','');
		
		if(! $con) {
			echo 'Connection did not work...';
			die('Could not connect: '. mysql_error());
		}
		
		echo "Connected successfully";
		
		$sql = 'CREATE DATABASE IF NOT EXISTS pandora_real_estate';
		if(!mysqli_query($con,$sql)) {
			die('Could not create database: ' . mysqli_error($con));
		} else
			echo "Database pandora_real_estate created successfully";
		
		//NOTE: Need to enter your web server password in 3rd argument for mysqli_connect()
		//in order to connect to mysql database
		$conn=mysqli_connect('localhost','root','','pandora_real_estate');
		
		//Check connection
		if (mysqli_connect_errno($conn)) {
			echo "Couldn't connect to MySQL: " . mysqli_connect_errno();
		}
		
		echo "Connected to database successfully";
		
		$buyertable = 'CREATE TABLE IF NOT EXISTS Buyer 
		(
		Email VARCHAR(50) NOT NULL,
		FName VARCHAR(15) NOT NULL,
		LName VARCHAR(15) NOT NULL,
		Phone_num CHAR(10),
		CONSTRAINT Buyer_PK PRIMARY KEY(Email)
		)';
		
		if(!mysqli_query($conn,$buyertable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Buyer table created successfully";
		
		$emptable = 'CREATE TABLE IF NOT EXISTS Employee
		(
		EID CHAR(9) NOT NULL,
		FName VARCHAR(15) NOT NULL,
		LName VARCHAR(15) NOT NULL,
		Phone_num CHAR(10),
		Email VARCHAR(50),
		Role VARCHAR(15),
		CONSTRAINT Employee_PK PRIMARY KEY(EID)
		)';
		
		if(!mysqli_query($conn,$emptable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Employee table created successfully";
		
		$agenttable = 'CREATE TABLE IF NOT EXISTS Agent
		(
		EID CHAR(9) NOT NULL,
		Rating INT,
		CONSTRAINT Agent_PK PRIMARY KEY(EID)
		)';
		
		if(!mysqli_query($conn,$agenttable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Agent table created successfully";
		
		$buyersagenttable = 'CREATE TABLE IF NOT EXISTS Buyers_Agent
		(
		EID CHAR(9) NOT NULL,
		CONSTRAINT Buyers_Agent_PK PRIMARY KEY(EID),
		CONSTRAINT Buyers_Agent_FK FOREIGN KEY(EID) REFERENCES Agent(EID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$buyersagenttable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Buyers_Agent table created successfully";
		
		$listingagenttable = 'CREATE TABLE IF NOT EXISTS Listing_Agent
		(
		EID CHAR(9) NOT NULL,
		CONSTRAINT Listing_Agent_PK PRIMARY KEY(EID),
		CONSTRAINT Listing_Agent_FK FOREIGN KEY(EID) REFERENCES Agent(EID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$listingagenttable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Listing_Agent table created successfully";
		
		$listingtable = 'CREATE TABLE IF NOT EXISTS Listing
		(
		Zip_code CHAR(6) NOT NULL,
		House_num INT,
		Street VARCHAR(30),
		City VARCHAR(30),
		Province VARCHAR(15),
		Country VARCHAR(15),
		Price DECIMAL(8,2),
		Photos BLOB,
		Num_of_bedrooms INT,
		Num_of_half_bathrooms INT,
		Num_of_full_bathrooms INT,
		Square_footage INT,
		Type VARCHAR(15),
		Front_facing CHAR(4),
		Community VARCHAR(30),
		Heating VARCHAR(20),
		Fireplace_type VARCHAR(20),
		Attached_Detached_garage VARCHAR(8),
		Garage_capacity INT,
		LAgent_ID CHAR(9),
		Add_date DATE,
		CONSTRAINT Listing_PK PRIMARY KEY(Zip_code),
		CONSTRAINT Listing_FK FOREIGN KEY(LAgent_ID) REFERENCES Listing_Agent(EID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$listingtable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Listing table created successfully";
		
		$sellertable = 'CREATE TABLE IF NOT EXISTS Seller
		(
		Seller_ID CHAR(9) NOT NULL,
		CONSTRAINT Seller_PK PRIMARY KEY(Seller_ID)
		)';
		
		if(!mysqli_query($conn,$sellertable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Seller table created successfully";
		
		$individualtable = 'CREATE TABLE IF NOT EXISTS Individual 
		(
		Email VARCHAR(50) NOT NULL,
		FName VARCHAR(15) NOT NULL,
		LName VARCHAR(15) NOT NULL,
		Phone_num CHAR(10),
		Seller_ID CHAR(9),
		CONSTRAINT Individual_PK PRIMARY KEY(Email),
		CONSTRAINT Individual_FK FOREIGN KEY(Seller_ID) REFERENCES Seller(Seller_ID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$individualtable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Individual table created successfully";
		
		$banktable = 'CREATE TABLE IF NOT EXISTS Bank 
		(
		Bank_rep_email VARCHAR(50) NOT NULL,
		Bank_rep_FName VARCHAR(15) NOT NULL,
		Bank_rep_LName VARCHAR(15) NOT NULL,
		Bank_rep_phone_num CHAR(10) NOT NULL,
		Bank_name VARCHAR(30) NOT NULL,
		Branch_no INT NOT NULL,
		Seller_ID CHAR(9),
		CONSTRAINT Bank_PK PRIMARY KEY(Bank_rep_email,Bank_rep_FName,Bank_rep_LName,Bank_rep_phone_num),
		CONSTRAINT Bank_FK FOREIGN KEY(Seller_ID) REFERENCES Seller(Seller_ID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$banktable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Bank table created successfully";
		
		$constructioncompanytable = 'CREATE TABLE IF NOT EXISTS Construction_Company 
		(
		Comp_rep_email VARCHAR(50) NOT NULL,
		Comp_rep_FName VARCHAR(15) NOT NULL,
		Comp_rep_LName VARCHAR(15) NOT NULL,
		Comp_rep_phone_num CHAR(10) NOT NULL,
		Comp_name VARCHAR(30) NOT NULL,
		Seller_ID CHAR(9),
		CONSTRAINT Comp_PK PRIMARY KEY(Comp_rep_email,Comp_rep_FName,Comp_rep_LName,Comp_rep_phone_num),
		CONSTRAINT Comp_FK FOREIGN KEY(Seller_ID) REFERENCES Seller(Seller_ID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$constructioncompanytable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Construction_Company table created successfully";
		
		$auctiontable = 'CREATE TABLE IF NOT EXISTS Auction 
		(
		Zip_code CHAR(6) NOT NULL,
		Name VARCHAR(30) NOT NULL,
		Closing_date DATE,
		Closing_time CHAR(5),
		CONSTRAINT Auction_PK PRIMARY KEY(Zip_code,Name),
		CONSTRAINT Auction_FK FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$auctiontable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Auction table created successfully";
		
		$listingshowingtable = 'CREATE TABLE IF NOT EXISTS Listing_Showing 
		(
		Buyer_email VARCHAR(50) NOT NULL,
		BAgent_ID CHAR(9) NOT NULL,
		Zip_code CHAR(6) NOT NULL,
		Date DATE,
		Time CHAR(5),
		CONSTRAINT Listing_Showing_PK PRIMARY KEY(Buyer_email,BAgent_ID,Zip_code),
		CONSTRAINT Listing_Showing_FK_BEmail FOREIGN KEY(Buyer_email) REFERENCES Buyer(Email) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT Listing_Showing_FK_BAID FOREIGN KEY(BAgent_ID) REFERENCES Buyers_Agent(EID) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT Listing_Showing_FK_Zip FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$listingshowingtable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Listing_Showing table created successfully";
		
		$incontacttable = 'CREATE TABLE IF NOT EXISTS InContact 
		(
		Buyer_email VARCHAR(50) NOT NULL,
		BAgent_ID CHAR(9) NOT NULL,
		CONSTRAINT InContact_PK PRIMARY KEY(Buyer_email,BAgent_ID),
		CONSTRAINT InContact_FK_BEmail FOREIGN KEY(Buyer_email) REFERENCES Buyer(Email) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT InContact_FK_BAID FOREIGN KEY(BAgent_ID) REFERENCES Buyers_Agent(EID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$incontacttable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "InContact table created successfully";
		
		$admintable = 'CREATE TABLE IF NOT EXISTS Admin 
		(
		EID CHAR(9) NOT NULL,
		CONSTRAINT Admin_PK PRIMARY KEY(EID),
		CONSTRAINT Admin_FK FOREIGN KEY(EID) REFERENCES Employee(EID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$admintable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Admin table created successfully";
		
		$transactiontable = 'CREATE TABLE IF NOT EXISTS Transaction 
		(
		Buyer_email VARCHAR(50) NOT NULL,
		Seller_ID CHAR(9) NOT NULL,
		Zip_code CHAR(6) NOT NULL,
		Amount DECIMAL(8,2),
		Date DATE,
		Time CHAR(5),
		CONSTRAINT Transaction_PK PRIMARY KEY(Buyer_email,Seller_ID,Zip_code),
		CONSTRAINT Transaction_FK_BEmail FOREIGN KEY(Buyer_email) REFERENCES Buyer(Email) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT Transaction_FK_SID FOREIGN KEY(Seller_ID) REFERENCES Seller(Seller_ID) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT Transaction_FK_Zip FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$transactiontable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Transaction table created successfully";
		
		$paymenttable = 'CREATE TABLE IF NOT EXISTS Payment 
		(
		Zip_code CHAR(6) NOT NULL,
		Agent_ID CHAR(9) NOT NULL,
		Date DATE NOT NULL,
		Amount DECIMAL(6,2),
		Commission_percentage DECIMAL(3,1),
		Flat_fee DECIMAL(6,2),
		CONSTRAINT Payment_PK PRIMARY KEY(Zip_code,Agent_ID,Date),
		CONSTRAINT Payment_FK_Zip FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT Payment_FK_AID FOREIGN KEY(Agent_ID) REFERENCES Agent(EID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$paymenttable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Payment table created successfully";
		
		$associatedtable = 'CREATE TABLE IF NOT EXISTS Associated 
		(
		LA_ID CHAR(9) NOT NULL,
		Zip_code CHAR(6) NOT NULL,
		CONSTRAINT Associated_PK PRIMARY KEY(LA_ID,Zip_code),
		CONSTRAINT Associated_FK_LAID FOREIGN KEY(LA_ID) REFERENCES Listing_Agent(EID) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT Associated_FK_Zip FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$associatedtable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Associated table created successfully";
		
		$listingnearbyrecreationstable = 'CREATE TABLE IF NOT EXISTS Listing_Nearby_Recreations 
		(
		Zip_code CHAR(6) NOT NULL,
		Nearby_rec VARCHAR(30) NOT NULL,
		CONSTRAINT Nearby_rec_PK PRIMARY KEY(Zip_code,Nearby_rec),
		CONSTRAINT Nearby_rec_FK FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$listingnearbyrecreationstable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Listing_Nearby_Recreations table created successfully";
		
		$listingnearbypublictransportstationstable = 'CREATE TABLE IF NOT EXISTS Listing_Nearby_Public_Transport_Stations 
		(
		Zip_code CHAR(6) NOT NULL,
		Nearby_PTStation VARCHAR(30) NOT NULL,
		CONSTRAINT Nearby_PTStation_PK PRIMARY KEY(Zip_code,Nearby_PTStation),
		CONSTRAINT Nearby_PTStation_FK FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$listingnearbypublictransportstationstable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Listing_Nearby_Public_Transport_Stations table created successfully";
		
		$listingnearbyschoolstable = 'CREATE TABLE IF NOT EXISTS Listing_Nearby_Schools 
		(
		Zip_code CHAR(6) NOT NULL,
		Nearby_School VARCHAR(30) NOT NULL,
		CONSTRAINT Nearby_Schools_PK PRIMARY KEY(Zip_code,Nearby_School),
		CONSTRAINT Nearby_Schools_FK FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$listingnearbyschoolstable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Listing_Nearby_Schools table created successfully";
		
		$listingflooringtable = 'CREATE TABLE IF NOT EXISTS Listing_Flooring 
		(
		Zip_code CHAR(6) NOT NULL,
		Flooring VARCHAR(30) NOT NULL,
		CONSTRAINT Listing_Flooring_PK PRIMARY KEY(Zip_code,Flooring),
		CONSTRAINT Listing_Flooring_FK FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$listingflooringtable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Listing_Flooring table created successfully";
		
		$multifloortable = 'CREATE TABLE IF NOT EXISTS Multi_Floor 
		(
		Zip_code CHAR(6) NOT NULL,
		Num_of_levels INT,
		Walkout_basement VARCHAR(3),
		Finished_basement VARCHAR(3),
		Bonus_room VARCHAR(3),
		Roof VARCHAR(30),
		Home_type VARCHAR(30),
		CONSTRAINT Multi_Floor_PK PRIMARY KEY(Zip_code),
		CONSTRAINT Multi_Floor_FK FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$multifloortable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Multi_Floor table created successfully";
		
		$singlefloortable = 'CREATE TABLE IF NOT EXISTS Single_Floor 
		(
		Zip_code CHAR(6) NOT NULL,
		Home_type VARCHAR(30),
		CONSTRAINT Single_Floor_PK PRIMARY KEY(Zip_code),
		CONSTRAINT Single_Floor_FK FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$singlefloortable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Single_Floor table created successfully";
		
		$assignstable = 'CREATE TABLE IF NOT EXISTS Assigns 
		(
		LA_ID CHAR(9) NOT NULL,
		Zip_code CHAR(6) NOT NULL,
		Admin_ID CHAR(9) NOT NULL,
		CONSTRAINT Assigns_PK PRIMARY KEY(LA_ID,Zip_code),
		CONSTRAINT Assigns_FK_LAID FOREIGN KEY(LA_ID) REFERENCES Listing_Agent(EID) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT Assigns_FK_Zip FOREIGN KEY(Zip_code) REFERENCES Listing(Zip_code) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT Assigns_FK_AdminID FOREIGN KEY(Admin_ID) REFERENCES Admin(EID) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$assignstable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Assigns table created successfully";
		
		$auctionbiddingstable = 'CREATE TABLE IF NOT EXISTS Auction_Biddings 
		(
		Buyer_email VARCHAR(50) NOT NULL,
		Zip_code CHAR(6) NOT NULL,
		Auction_name VARCHAR(30) NOT NULL,
		Amount DECIMAL(8,2),
		Date DATE,
		Time CHAR(5),
		CONSTRAINT Auction_Biddings_PK PRIMARY KEY(Buyer_email,Zip_code,Auction_name),
		CONSTRAINT Auction_Biddings_FK_BEmail FOREIGN KEY(Buyer_email) REFERENCES Buyer(Email) ON DELETE CASCADE ON UPDATE CASCADE,
		CONSTRAINT Auction_Biddings_FK_Zip FOREIGN KEY(Zip_code,Auction_name) REFERENCES Auction(Zip_code,Name) ON DELETE CASCADE ON UPDATE CASCADE
		)';
		
		if(!mysqli_query($conn,$auctionbiddingstable)) {
			die('Could not create table: ' . mysqli_error($conn));
		} else
			echo "Auction_Biddings table created successfully";
		
		mysql_close($conn);
		mysql_close($con);
		
		//https://www.youtube.com/watch?v=zYNAfEHGXAg
		//
?>
</body>
</html>