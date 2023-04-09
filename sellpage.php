<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	//Create connection
	//NOTE: Need to enter your web server password in 3rd argument for mysqli_connect()
	//in order to connect to mysql database. Intructions for downloading 'appserv' which
	//is a compatible web server with PHP and MySQL are in the PHP document on D2L
	$con = mysqli_connect('localhost', 'root', 'tHisistheendd!!!&1');

	if(!$con) {
		echo 'Connection did not work...';
		die('Could not connect: '. mysql_error());
	}
?>
    <div class="primary-header">
        <nav class="grid-container">
            <div class="gridblock header-seller-options left-elem">
                <a href="/home">Homepage</a>
                <a href="/contact-agent">Contact an Agent</a>
            </div>
            <form id="mainpage-searchbar-form" class="searchbar" action="searchpage.php">
                <input type="text" class="main-searchbar-input" placeholder="search listings..." name="q">
                <button class="main-searchbar-button" type="submit"></button>
            </form>
            <div class="gridblock user-perms right-elem">
                <a href="/admin-login">Admin</a>
                <a href="/agent-login">Agent</a>
                <a href="/login">User</a>
            </div>
        </nav>
    </div>
    
    <div class="sellpagebox">
	<div class="sellpageforms">
	    "Please enter details of your listing:"
            <form id="sellpage-sellhome-form" class="sellform" action="" method ="POST" accept-charset="utf-8">
                <input type="text" class="main-searchbar-input" placeholder="Address" name="address">
                <button class="submit-sellform-button" type="submit" value="submit">Submit</button>
            </form>
       	    <form id="sellpage-sellhome-form2" class="sellform" action="" method ="POST" accept-charset="utf-8">
                <input type="text" class="main-searchbar-input" placeholder="Price" name="price">
                <button class="submit-sellform-button" type="submit" value="submit">Submit</button>
            </form>
 	    <form id="sellpage-sellhome-form3" class="sellform" action="" method ="POST" accept-charset="utf-8">
                <input type="text" class="main-searchbar-input" placeholder="No. of full bathrooms" name="baths">
                <button class="submit-sellform-button" type="submit" value="submit">Submit</button>
            </form>
	    <form id="sellpage-sellhome-form3" class="sellform" action="" method ="POST" accept-charset="utf-8">
                <input type="text" class="main-searchbar-input" placeholder="No. of half baths" name="halfbaths">
                <button class="submit-sellform-button" type="submit" value="submit">Submit</button>
            </form>
	    <form id="sellpage-sellhome-form4" class="sellform" action="" method ="POST" accept-charset="utf-8">
                <input type="text" class="main-searchbar-input" placeholder="No. of bedrooms" name="bedrooms">
                <button class="submit-sellform-button" type="submit" value="submit">Submit</button>
            </form>
	    <form id="sellpage-sellhome-form5" class="sellform" action="" method ="POST" accept-charset="utf-8">
                <input type="text" class="main-searchbar-input" placeholder="Description" name="description">
                <button class="submit-sellform-button" type="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>
	// Access values of the form inputs using $_POST['{name}'] e.g., <?php echo $_POST['description'] ?>
	// User must press submit before value is submitted, should check if value is empty/null before proceeding
</body>
</html>