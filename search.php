<?php
    // parse input
    // first, divide input by spacebars (each division is referred to as a "token")
    // then, generate all houses
    // for all houses:
    // if each input token corresponds to one entry in the list generated
    error_reporting(E_ALL);
	ini_set("display_errors", 1);

    // check 
    function comp_input_w_addrs($user_inpt, $db_addrs) {
        // create a copy
        $db_addrs_copy = array();

        //
        if ($user_inpt == '') return;

        foreach ($db_addrs as $row) {
            // form an "address" string
            $addr_string = $row['Zip_code'] . ' ' . $row['House_num']
                         . ' ' .  $row['Street'] . ' ' . $row['City']
                         . ' ' . $row['Province'] . ' ' . $row['Country'];
            if (strpos(strtolower($addr_string), strtolower($user_inpt)) !== false) {
                array_push($db_addrs_copy, $row);
            }
        }

        return $db_addrs_copy;
   }

    function parse_input($raw_input) {
        $ret_array = explode(' ', $raw_input);
        return $ret_array;
    }

    function handle_query($query) {
        // connect to SQL server
        $con = mysqli_connect('localhost','root','What spreads down from a tree.','pandora_real_estate');
        // if not connecting, then kill
	    if(!$con) {
            die('Could not connect: '. mysqli_connect_error());
        }

        // initialize array
        $listing_array = array();

        // get all house data
        $home_q = 'SELECT * FROM listing';
        if (($result = mysqli_query($con, $home_q)) == TRUE) {
            while($row = mysqli_fetch_assoc($result)) {
                $listing_array[] = $row;
            }
        } else {
            die('Query failed: ' . mysqli_error($con));
        }

        mysqli_close($con);

        // for each string in house data, compare
        return json_encode(comp_input_w_addrs($query, $listing_array));
    }

    function create_res_objects($query) {
        // create resultant objects in HTML file
        // assume $query is a json encoded object
        $arr = json_decode($query, true);
        $result = '';

        // connect to SQL server
        $con = mysqli_connect('localhost','root','What spreads down from a tree.','pandora_real_estate');
        // if not connecting, then kill
	    if(!$con) {
            die('Could not connect: '. mysqli_connect_error());
        }

        foreach ($arr as $item) {

            $photo = null;
            $pic_q = 'SELECT * FROM listing_photos AS k WHERE k.Zip_code = \'' . $item['Zip_code'] . '\'';

            if ($result = mysqli_query($con, $pic_q)) {
                $photo = mysqli_fetch_assoc($result);
            } else {
                die('Query failed: ' . mysqli_error($con));
            }

            echo '
                <div class="listing-div" onclick>
                    <div class="picture-container">
                        <img class="listing-pic" src="' . $photo['Photo']. '" onerror="this.onerror = null; this.src = \'images/default.jpg\'">
                    </div>
                    <div class="info-container">
                        <h1 class="price-tag">$' . $item['Price'] . '</h1>
                        <p>' . $item['House_num'] . ' ' .  $item['Street']
                             . ', ' . $item['City'] . ', ' . $item['Province'] . ', ' . $item['Country']
                             . '; ' . $item['Zip_code'] . '</p>
                        <ul class="basic-info-list">
                            <li><span>' . $item['Num_of_bedrooms'] . '</span> bedrooms </li>
                            <li><span>' . $item['Num_of_half_bathrooms'] . '</span> half bathrooms</li>
                            <li><span>' . $item['Num_of_full_bathrooms'] . '</span> full bathrooms</li>
                        </ul>
                        <div class="description-container">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse tempus leo vel justo porttitor, non cursus lorem
                                faucibus. Nam aliquet nulla lorem, ac venenatis quam 
                                vestibulum quis. Phasellus ultricies dui a dui porta, maximus 
                                condimentum magna lacinia
                            </p>
                        </div>
                        <form action="/get-website.php" class="listing-div-form" method="post">
                            <input type="hidden" name="json-value" value= "' . $item['Zip_code'] . '">
                            <input type="submit" value="See more" class="listing-div-form-submit">
                        </form>
                    </div>
                </div>
            '; 
        }

        mysqli_close($con);
    }
?>