<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value = $_POST['json-value'];
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
                <form class="listingbuybutton" action="">
                    <input type="hidden" name="json-value" value= "' . $item['Zip_code'] . '">
                    <button type="submit">buy listing</button>
                </form>
            </div>
            <table><tbody>
                <td>' . $lsting['Num_of_bedrooms'] . ' bedroom</td>
                <td>' . $lsting['Num_of_bedrooms'] . ' sq. feet</td>
                <td>' . $lsting['Square_footage'] . ' bathrooms</td>
                <td>' . $lsting['Num_of_full_bathrooms'] . ' bathrooms</td>
            </tbody></table>
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