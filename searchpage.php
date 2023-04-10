<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="listings.css">
</head>
<body>
    <div class="primary-header">
        <nav class="grid-container">
            <div class="gridblock header-seller-options left-elem">
                <a href="/home">Homepage</a>
                <a href="/create-listing">Sell</a>
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

    <div class="listing-list-box">
        <div id="searchpage-listing-container" class="listing-container">
        <?php 
            include 'search.php';
            // here, we would expect to get functions from search.php
            // these functions would allow us to parse the input given through the search bar
            if (isset($_GET['q']) && $_GET['q'] != '')
                create_res_objects(handle_query($_GET['q']));
        ?>
        </div>
    </div>
</body>
</html>