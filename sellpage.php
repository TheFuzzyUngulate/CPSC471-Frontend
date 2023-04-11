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
	/* $con = mysqli_connect('localhost', 'root', '');

	if(!$con) {
		echo 'Connection did not work...';
		die('Could not connect: '. mysql_error());
	} */

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validInput = preg_match("/^[0-9]+$/", $_POST['Price']) 
                  && preg_match("/^[0-9]+$/", $_POST['Bathrooms']) 
                  && preg_match("/^[0-9]+$/", $_POST['Halfbaths']) 
                  && preg_match("/^[0-9]+$/", $_POST['Bedrooms']) 
                  && $_POST['FirstName'] && $_POST['EmailAddress'] 
                  && preg_match("/^[0-9]+$/", $_POST['HouseNumber'])
		  && preg_match("/^[0-9]+$/", $_POST['SquareFootage'])
		  && preg_match("/^[0-9]+$/", $_POST['GarageCapacity'])
		  && $_POST['HouseRoad'] && $_POST['FlooringTypes']
		  && $_POST['HouseCity'] && $_POST['HouseProvince']
		  && $_POST['HouseCountry'] && $_POST['HousePostalCode']
		  && ($_POST['HomeType'] != "") 
		  && ($_POST['FireplaceType'] != "")
		  && ($_POST['GarageType'] != "")
	 	  && ($_POST['IsFrontFacing'] != "")
		  && ($_POST['HasHeating'] != "")
                  && $_POST['HouseCommunity'] && $_POST['NearbyRecreation']
		  && $_POST['NearbyTransportation'] && $_POST['NearbySchools']
		  && $_POST['Description'];
    if ($_POST['HomeType'] === "MF") {$multifloorValid = $_POST['FloorCount'] && $_POST['HasWalkoutBasement']
							 && $_POST['HasFinishedBasement'] && $_POST['HasBonusRoom']
							 && $_POST['RoofType'];
					}
    else {$multifloorValid = $validInput;}
    if ($validInput && $multifloorValid) {$_POST['formErrorMessage']="Form submitted successfully";
          // php comment: Put code to interact with Database here 
        }
    else {$_POST['formErrorMessage']="The form did not submit because there were errors. Please try again.";}
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
  <form class="multi-field" method ="POST" accept-charset="utf-8" action="./sellpage.php">
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
    <fieldset>Address
    <div class="field-wrapper error">
      <label>House No.*</label>
      <input id="HouseNumber" name="HouseNumber" type="text" class="required error" placeholder="Address of your listing">
    </div>
    <div class="field-wrapper error">
      <label>Road*</label>
      <input id="HouseRoad" name="HouseRoad" type="text" class="required error" placeholder="Address of your listing">
    </div>
    <div class="field-wrapper error">
      <label>City*</label>
      <input id="HouseCity" name="HouseCity" type="text" class="required error" placeholder="Address of your listing">
    </div>
    <div class="field-wrapper error">
      <label>Province*</label>
      <input id="HouseProvince" name="HouseProvince" type="text" class="required error" placeholder="Address of your listing">
    </div>
    <div class="field-wrapper error">
      <label>Country*</label>
      <input id="HouseCountry" name="HouseCountry" type="text" class="required error" placeholder="Address of your listing">
    </div>
    <div class="field-wrapper error">
      <label>Postal Code*</label>
      <input id="HousePostalCode" name="HousePostalCode" type="text" class="required error" placeholder="Address of your listing">
    </div>
  </fieldset>
  <fieldset>
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
    <div class="field-wrapper error">
      <label>Sq. Footage*</label>
      <input id="SquareFootage" name="SquareFootage" maxlength="5" type="num" class="required error">
    </div>
    <div class="field-wrapper error">
      <label>Flooring types*</label>
      <input id="FlooringTypes" name="FlooringTypes" type="text" maxlength="2000" class="required error" placeholder="Separate items with commas">
    </div>
    <div class="field-wrapper full select">
      <label>Fireplace Type*</label>
      <select class="required" name="FireplaceType" id="FireplaceType">
      <option value="">Select one...</option>
      <option value="NA">N/A</option>
      <option value="Gas">Gas-burning</option>
      <option value="Wood">Wood-burning</option>
    </select>
    </div>
    <div class="field-wrapper full select">
      <label>Garage Type*</label>
      <select class="required" name="GarageType" id="GarageType">
      <option value="">Select one...</option>
      <option value="NA">N/A</option>
      <option value="Gas">Attached</option>
      <option value="Wood">Detached</option>
    </select>
    </div>
    <div class="field-wrapper error">
      <label>Garage Capacity*</label>
      <input id="GarageCapacity" name="GarageCapacity" type="num" maxlength="3" class="required error" placeholder="">
    </div>
    <div class="field-wrapper full select">
      <label>Front Facing?*</label>
      <select class="required" name="IsFrontFacing" id="IsFrontFacing">
      <option value="">Select one...</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
    </div>
    <div class="field-wrapper full select">
      <label>Indoor Heating?*</label>
      <select class="required" name="HasHeating" id="HasHeating">
      <option value="">Select one...</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
    </div>
  </fieldset>
  <fieldset>**Only fill if home is Multi-floor**
    <div class="field-wrapper error">
      <label>No. of floors*</label>
      <input id="FloorCount" name="FloorCount" maxlength="4" type="num" class="required error" placeholder="">
    </div>
    <div class="field-wrapper full select">
      <label>Walkout Basement?*</label>
      <select class="required" name="HasWalkoutBasement" id="HasWalkoutBasement">
      <option value="">Select one...</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
    </div>
    <div class="field-wrapper full select">
      <label>Finished Basement?*</label>
      <select class="required" name="HasFinishedBasement" id="HasFinishedBasement">
      <option value="">Select one...</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
    </div>
    <div class="field-wrapper full select">
      <label>Bonus Room?*</label>
      <select class="required" name="HasBonusRoom" id="HasBonusRoom">
      <option value="">Select one...</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
    </div>
    <div class="field-wrapper error">
      <label>Roof Type*</label>
      <input id="RoofType" name="RoofType" maxlength="200" type="text" class="required error" placeholder="">
    </div>
  </fieldset>
  <fieldset>
    <div class="field-wrapper error">
      <label>Community*</label>
      <input id="HouseCommunity" name="HouseCommunity" maxlength="200" type="text" class="required error" placeholder="Community your listing is in">
    </div>
    <div class="field-wrapper error">
      <label>Nearby Recreations*</label>
      <input id="NearbyRecreation" name="NearbyRecreation" maxlength="2000" type="text" class="required error" placeholder="Separate items with commas">
    </div>
    <div class="field-wrapper error">
      <label>Nearby Public Transportations*</label>
      <input id="NearbyTransportation" name="NearbyTransportation" maxlength="2000" type="text" class="required error" placeholder="Separate items with commas">
    </div>
    <div class="field-wrapper error">
      <label>Nearby Schools*</label>
      <input id="NearbySchools" name="NearbySchools" maxlength="2000" type="text" class="required error" placeholder="Separate items with commas">
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
  <fieldset>
    <div class="field-wrapper error">
      <label>Listing Agent*</label>
      <select name="lagents" id="lagents">
        <?php
          	$con = mysqli_connect('localhost', 'root', 'tHisistheendd!!!&1', 'pandora_real_estate');

            if(!$con) {
              echo 'Connection did not work...';
              die('Could not connect: '. mysql_error());
            }

            $lagnts = array();
            $lagnts_q = 'SELECT E.Fname as fname, E.Lname as lname, E.EID as id FROM listing_agent as L, employee as E WHERE E.EID = L.EID';

            if ($result = mysqli_query($con, $lagnts_q)) {
              while($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row['id'] . '">' . $row['fname'] . ' ' . $row['lname'] . '</option>';
              }
            }
        ?>
      </select>
    </div>
  </fieldset>
    <div class="error-warning"><?php echo $_POST['formErrorMessage'] ?>
    </div>
  <button type="submit" class="submit">Submit</button>
</form>
</div>

	<!-- Access values of the form inputs using $_POST['{name}'] e.g., <?php echo $_POST['Description'] ?>
	     User must press submit before value is submitted, should check if value is empty/null before proceeding -->
</body>
</html>