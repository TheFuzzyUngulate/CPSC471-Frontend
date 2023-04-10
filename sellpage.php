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
	$con = mysqli_connect('localhost', 'root', 'What spreads down from a tree.');

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
    
    <!-- Following code largely adapted from https://codepen.io/andmiriam/pen/YweYQP -->
    <div class="multi-field-form-modal border">
  <button aria-label="Close Account Info Modal Box" class="btn-close-modal">&times;</button>
  <div class="form-description">
    <h2>Please enter your details and the details of your listing:</h2>
  </div>
  <form class="multi-field" method ="POST" accept-charset="utf-8">
    <legend>Please note all home details are required. If your home does not include something, please enter 0.</legend>
  <fieldset>
    <div class="field-wrapper error">
      <label>First Name*</label>
      <input id="FirstName" name="FirstName" type="text" class="required error">
    </div>
    <div class="field-wrapper">
      <label>Last Name</label>
      <input id="LastName" name="LastName" type="text">
    </div>
  </fieldset>
  <fieldset>
    <div class="field-wrapper error">
      <label>Email*</label>
      <input id="EmailAddress" name="EmailAddress" maxlength="200" type="email" class="required error">
    </div>
    <div class="field-wrapper">
      <label>Phone</label>
      <input id="PhoneNumber" name="PhoneNumber" maxlength="200" type="num">
    </div>
  </fieldset>
    <fieldset>
    <div class="field-wrapper error">
      <label>Address*</label>
      <input id="Address" name="Address" type="text" class="required error" placeholder="Address of your listing">
    </div>
    <div class="field-wrapper full select">
      <label>Home Type*</label>
      <select class="required" name="HomeType" id="HomeType">
      <option value="">Select one...</option>
      <option value="SF">Single Floor</option>
      <option value="MF">Multi-floor</option>
    </select>
    </div>
    <div class="field-wrapper error">
      <label>No. of Full Bathrooms*</label>
      <input id="Bathrooms" name="Bathrooms" maxlength="4" type="num" class="required error">
    </div>
    <div class="field-wrapper error">
      <label>No. of Half-baths*</label>
      <input id="Halfbaths" name="Halfbaths" maxlength="4" type="num" class="required error">
    </div>
    <div class="field-wrapper error">
      <label>No. of Bedrooms*</label>
      <input id="Bedrooms" name="Bedrooms" maxlength="4" type="num" class="required error">
    </div>
  </fieldset>
  <fieldset>
    <div class="field-wrapper error">
      <label>Price*</label>
      <input id="Price" name="Price" maxlength="12" type="num" class="required error" placeholder="Price of your listing">
    </div>
    <div class="field-wrapper error">
      <label>Description*</label>
      <input id="Description" name="Description" type="text" class="required error" placeholder="Description of your home">
    </div>
  </fieldset>
    <div class="error-warning">
	<?php 
	    $validInput = preg_match("/^[0-9]+$/", $_POST['Price']) 
			&& preg_match("/^[0-9]+$/", $_POST['Bathrooms']) 
			&& preg_match("/^[0-9]+$/", $_POST['Halfbaths']) 
			&& preg_match("/^[0-9]+$/", $_POST['Bedrooms']) 
			&& $_POST['FirstName'] && $_POST['EmailAddress'] 
			&& $_POST['Address'] && ($_POST['HomeType'] != "") 
			&& $_POST['Description'];
	    if ($validInput) {echo "Form submitted successfully";
			      // php comment: Put code to interact with Database here 
			     }
	    else {echo "The form did not submit because there were errors. Please try again.";}
	?>
    </div>
  <button type="submit" class="submit">Submit</button>
</form>
</div>

	<!-- Access values of the form inputs using $_POST['{name}'] e.g., <?php echo $_POST['Description'] ?>
	     User must press submit before value is submitted, should check if value is empty/null before proceeding -->
</body>
</html>