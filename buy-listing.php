<?php
    // connect to SQL server
    $con = mysqli_connect('localhost','root','What spreads down from a tree.','pandora_real_estate');
    // if not connecting, then kill
    if(!$con) {
        die('Could not connect: '. mysqli_connect_error());
    }

    // Zip_code given as argument
    $homezip = $_GET['json-value'];

    // find correct auction
    $row = null;
    $findauct_q = 'SELECT * FROM auction as A WHERE A.Zip_code = ' . $homezip;
    if (($result = mysqli_query($con, $home_q)) == TRUE) {
        $row = mysqli_fetch_assoc($result);
    }

    // add a bidding to that auction
    $addbid_q = 'INSERT IGNORE INTO auction_biddings (Buyer_email, Zip_code, Auction_name, Amount, Date, Time) 
    VALUES (\'alice.acrobat@gmail.com\', \'A2B3C1\', \'Auction for 471 Database St\', \'123300.00\', \'2023-04-09\', \'15:00\')';

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
?>