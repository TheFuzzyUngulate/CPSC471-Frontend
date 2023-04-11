<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $value = $_GET['zipcode'];
        $con = mysqli_connect('localhost','root','What spreads down from a tree.','pandora_real_estate');
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

        $addr_string = $lsting['Zip_code'] . '_' . $lsting['House_num']
        . '_' .  $lsting['Street'] . '_' . $lsting['City']
        . '_' . $lsting['Province'] . '_' . $lsting['Country'] . '.php';

        $filename =  getcwd() . '\property' . '\\' . $addr_string;

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
                <a href="/search">Search</a>
                <a href="/contact-agent">Contact an Agent</a>
                <a href="/home">Homepage</a>
            </div>
            <div class="gridblock user-perms right-elem">
                <a href="/admin-login">Admin</a>
                <a href="/agent-login">Agent</a>
                <a href="/login">User</a>
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
                <div class="listingbuybutton">
                    <button type="submit" onclick="create_popup()">buy listing</button>
                </div>
            </div>
            <table><tbody>
                <td>' . $lsting['Num_of_bedrooms'] . ' bedroom</td>
                <td>' . $lsting['Num_of_bedrooms'] . ' sq. feet</td>
                <td>' . $lsting['Square_footage'] . ' bathrooms</td>
                <td>' . $lsting['Num_of_full_bathrooms'] . ' bathrooms</td>
            </tbody></table>
        </div>
        <div class="email-asking-popup-div">
            <div class="close-icon-holder">
                <button onclick="hide_popup()"><img src="../project-icons/x_icon.png"></button>
            </div>
            <form class="listingbuybutton" action="../get-website.php" id="emailpopup" method="POST">
                <label for="email">Email:</label>
                <input type="text" name="email"><br>
                <label for="amount">Amount:</label>
                <input type="text" name="amount">
                <input type="hidden" name="zipcode" value= "' . $lsting['Zip_code'] . '">
                <div class="submit-holder"><button type="submit">submit email</button></div>
            </form>
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

        function create_popup() {
            var pop = document.getElementsByClassName("email-asking-popup-div")[0];
            pop.style.visibility = "visible";
        }

        function hide_popup() {
            var pop = document.getElementsByClassName("email-asking-popup-div")[0];
            pop.style.visibility = "hidden";
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

    else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mail = $_POST['email'];
        $zipcode = $_POST['zipcode'];
        $offer = $_POST['amount'];
        $previous = $_SERVER['HTTP_REFERER'];

        $con = mysqli_connect('localhost','root','What spreads down from a tree.','pandora_real_estate');
        // if not connecting, then kill
	    if(!$con) {
            die('Could not connect: '. mysqli_connect_error());
        }

        // find correct auction
        $row = null;
        $findauct_q = 'SELECT * FROM auction as A WHERE A.Zip_code = \'' . $zipcode . '\'';

        if (($result = mysqli_query($con, $findauct_q)) == TRUE) {
            if (mysqli_num_rows($result) == 0)
                die('<h1>No auction for this listing!</h1><p>Try again at some other time...</p>');
            $row = mysqli_fetch_assoc($result);
        } else {
            die('<h1>SQL Query Failed</h1><p>Try again at some other time...</p>');
        }

        $curr_date = date("Y-m-d");
        $curr_time = date("H:i");
        $pic_q = "INSERT IGNORE INTO auction_biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) 
		VALUES ('{$mail}', '{$zipcode}', '{$row['Name']}', '{$offer}', '{$curr_date}', '{$curr_time}')";

        if (($result = mysqli_query($con, $pic_q)) == TRUE) {
            echo "<h1>Bid placed</h1><p>Redirecting you back to page...</h1>";
            sleep(1);
            header("Location: {$previous}");
        }

    }
?>