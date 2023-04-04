<?php
    // parse input
    // first, divide input by spacebars (each division is referred to as a "token")
    // then, generate all houses
    // for all houses:
    // if each input token corresponds to one entry in the list generated

    // check 
    function comp_input_w_addrs($user_inpt, $db_addrs) {
        // create a copy
        $db_addrs_copy = array();

        foreach ($db_addrs as $row) {
            // form an "address" string
            $addr_string = $row['Zip_code'] . ' ' . $row['House_num']
                         . ' ' .  $row['Street'] . ' ' . $row['City']
                         . ' ' . $row['Province'] . ' ' . $row['Country'];
            if (strpos($addr_string, $user_inpt) !== false) {
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

        // for each string in house data, compare
        return json_encode(comp_input_w_addrs($query, $listing_array));
    }
?>