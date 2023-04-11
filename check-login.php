<?php
    $username = $_GET['username'];
    $password = $_GET['password'];

    // each user has a:
    //  username
    //  password
    //  status
    // a user can also create new cookies from themselves by maintaining

    setcookie($username, $password, time() + (86400 * 30), "./");
?>