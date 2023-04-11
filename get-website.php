<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value = $_POST['json-value'];
        $con = mysqli_connect('localhost','root','','pandora_real_estate');
        // if not connecting, then kill
	    if(!$con) {
            die('Could not connect: '. mysqli_connect_error());
        }

        // initialize array
        $lsting = array();

        // get all house data
        $home_q = 'SELECT * FROM listing AS L WHERE L.Zip_code = "' . $value . '"';
        if (($result = mysqli_query($con, $home_q)) == TRUE) {
            $lsting = mysqli_fetch_assoc($result);
        } else {
            die('Query failed: ' . mysqli_error($con));
        }
		
		$multi = array();
		if($lsting["Type"] == "Single-Family" || $lsting["Type"] == "Townhouse") {
			// get all multi-floor house data
			$home_q4 = 'SELECT * FROM multi_floor AS L WHERE L.Zip_code = "' . $value . '"';
			if (($result4 = mysqli_query($con, $home_q4)) == TRUE) {
				$multi = mysqli_fetch_assoc($result4);
			} else {
				die('Query failed: ' . mysqli_error($con));
			}
		}
		
		// initialize array
        //$lsting1 = array();
		$flooring = "";
        // get all flooring data
        $home_q1 = 'SELECT Flooring FROM listing_flooring AS L WHERE L.Zip_code = "' . $value . '"';
        if (($result1 = mysqli_query($con, $home_q1)) == TRUE) {
			while($row = mysqli_fetch_assoc($result1)) {
                //$lsting1[] = $row;
				$flooring .= $row['Flooring'];
				$flooring .= ", ";
            }
            //$lsting1 = mysqli_fetch_assoc($result1);
        } else {
            die('Query failed: ' . mysqli_error($con));
        }
		
		$rec = "";
        // get all nearby recreations data
        $home_q2 = 'SELECT Nearby_rec FROM listing_nearby_recreations AS L WHERE L.Zip_code = "' . $value . '"';
        if (($result2 = mysqli_query($con, $home_q2)) == TRUE) {
			while($row = mysqli_fetch_assoc($result2)) {
				$rec .= $row['Nearby_rec'];
				$rec .= ", ";
            }
        } else {
            die('Query failed: ' . mysqli_error($con));
        }
		
		$pts = "";
        // get all nearby public transit stations data
        $home_q2 = 'SELECT Nearby_PTStation FROM listing_nearby_public_transport_stations AS L WHERE L.Zip_code = "' . $value . '"';
        if (($result2 = mysqli_query($con, $home_q2)) == TRUE) {
			while($row = mysqli_fetch_assoc($result2)) {
				$pts .= $row['Nearby_PTStation'];
				$pts .= ", ";
            }
        } else {
            die('Query failed: ' . mysqli_error($con));
        }
		
		$school = "";
        // get all nearby schools data
        $home_q3 = 'SELECT Nearby_School FROM listing_nearby_schools AS L WHERE L.Zip_code = "' . $value . '"';
        if (($result3 = mysqli_query($con, $home_q3)) == TRUE) {
			while($row = mysqli_fetch_assoc($result3)) {
				$school .= $row['Nearby_School'];
				$school .= ", ";
            }
        } else {
            die('Query failed: ' . mysqli_error($con));
        }
		
		/*$imgs = array();
		$imgs_q = 'SELECT Photo FROM listing_photos AS P WHERE P.Zip_code = "' . $value . '"';
		if(($img_result = mysqli_query($con, $imgs_q)) == TRUE) {
			$imgs = mysqli_fetch_assoc($result);
		} else {
			die('Query failed: ' . mysqli_error($con));
		}*/

        $addr_string = $lsting['Zip_code'] . '_' . $lsting['House_num']
        . '_' .  $lsting['Street'] . '_' . $lsting['City']
        . '_' . $lsting['Province'] . '_' . $lsting['Country'] . '.php';

        $filename =  getcwd() . '\property' . '\\' . $addr_string;
        //echo $filename;
		
		// get all photos
        $photos = array();
        $pic_q = 'SELECT * FROM listing_photos AS k WHERE k.Zip_code = \'' . $lsting['Zip_code'] . '\'';

        if (($result = mysqli_query($con, $pic_q)) == TRUE) {
            while($row = mysqli_fetch_assoc($result)) {
                $photos[] = $row;
            }
        } else {
            die('Query failed: ' . mysqli_error($con));
        }

        $photostring = null;
        foreach($photos as $ph) {
            $photostring = $photostring . '<img src="../' . $ph['Photo'] . '">';
        }

        $content = '
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../listings.css">
    <link rel="stylesheet" href="../listing_result.css">
</head>
<body>
    <div class="primary-header">
        <nav class="grid-container">
            <div class="gridblock header-seller-options left-elem">
                <a href="../searchpage.php">Search</a>
                <a href="../contact-agent.php">Contact an Agent</a>
                <a href="../mainpage.php">Homepage</a>
            </div>
            <div class="gridblock user-perms right-elem">
                <a href="../admin.php">Admin</a>
                <a href="../agent.php">Agent</a>
                <a href="../mainpage.php">User</a>
            </div>
        </nav>
    </div>
    <div class="listingdisplay-holder">
        <div class="listingdisplay-body">   
            <div class="listingdisplay-image-div">
                <div class="listingdisplay-image-left" onclick="goleft()">
                    <img src="../project-icons/leftarrow.png">
                </div>
                <div class="listingdisplay-image-holder" data-currindex=0>' . $photostring . '</div>
                <div class="listingdisplay-image-right" onclick="goright()">
                    <img src="../project-icons/rightarrow.png">
                </div>
            </div>
            <div class="listingdisplay-body-header">
                <div class="listingaddressinfo">
                    <h1>$' . $lsting['Price'] . '</h1>
                    <p>' . $lsting['House_num'] . ' ' .  $lsting['Street']
                    . '<br>' . $lsting['City'] . ', ' . $lsting['Province'] . ', ' . $lsting['Country']
                    . '; ' . $lsting['Zip_code'] . '</p>
                </div>
                <form class="listingbuybutton" action="../auction.php">
                    <input type="hidden" name="json-value" value= "' . $item['Zip_code'] . '">
                    <button type="submit">buy listing</button>
                </form>
            </div>
            <table><tbody>
                <td>' . $lsting['Num_of_bedrooms'] . ' Bedroom</td>
                <td>' . $lsting['Num_of_half_bathrooms'] . ' Half baths</td>
                <td>' . $lsting['Num_of_full_bathrooms'] . ' Full baths</td>
                <td>' . $lsting['Square_footage'] . ' Sq. feet</td>
            </tbody></table>
			<h3>House Attributes:</h3>
			<p>House Type: '. $lsting['Type'] . '<br>
			   Front Facing: ' . $lsting['Front_facing'] .'<br>
			   Community: ' . $lsting['Community'] .'<br>
			   Heating Type Used: ' . $lsting['Heating'] .'<br>
			   Fireplace Type: ' . $lsting['Fireplace_type'] .'<br>
			   Garage Type: ' . $lsting['Attached_Detached_garage'] .'<br>
			   Garage Capacity: ' . $lsting['Garage_capacity'] .'<br>
			   Flooring: ' . $flooring .'<br><br></p>
			<h3>Additional Features:</h3>
			<p>Number of Levels: ' . $multi['Num_of_levels'] .'<br>
			   Walkout Basement: ' . $multi['Walkout_basement'] .'<br>
			   Fully Developed Basement: ' . $multi['Finished_basement'] .'<br>
			   Bonus Room: ' . $multi['Bonus_room'] .'<br>
			   Roof Type: ' . $multi['Roof'] .'<br><br></p>
			<h3>Nearby Facilities:</h3>
			<p>Nearby Recreation Facilities: ' . $rec .'<br>
			   Nearby Public Transportation Stations: ' . $pts .'<br>
			   Nearby Schools: ' . $school .'</p>
        </div>
    </div>
	<script>
        var slideholder = document.getElementsByClassName("listingdisplay-image-holder")[0];
        var slideindex = 0;
        var slidelist = slideholder.getElementsByTagName("img");
        var photocount = slidelist.length;
        
        // initialization
        slidelist[0].classList.add("current");
        function goright() {
            move_slideshow(slideindex = (slideindex + 1) % photocount);
        }
        function goleft() {
            move_slideshow(slideindex = (slideindex - 1) % photocount);
        }
        function move_slideshow(index) {
            if (photocount == 0) return;
            for (var slide of slidelist) {
                slide.classList.remove("current");
            }
            slidelist[index].classList.add("current");
        }
    </script>
</body>
</html>        
        ';

        if (!file_exists($addr_string)) {
            $handle = fopen($filename, 'w+');
            fwrite($handle, $content);
            fclose($handle);
        }

        header('Location: property\\' . $addr_string);

    }
?>