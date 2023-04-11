<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="primary-header">
        <nav class="grid-container">
            <div class="gridblock header-seller-options left-elem">
                <a href="sellpage.php">Sell</a>
                <a href="contact-agent.php">Contact an Agent</a>
				<a href="auction.php">Bid in an Auction</a>
            </div>
            <div class="gridblock mainpage-link center-elem">
                <a href="mainpage.php">LST Real Estate</a>
            </div>
            <div class="gridblock user-perms right-elem">
                <a href="admin.php">Admin</a>
                <a href="agent.php">Agent</a>
                <a href="mainpage.php">User</a>
            </div>
        </nav>
    </div>
    
	
    </div>
    <div class ="searchbarbox">
	<div class="center-img">
	    <img src="./images/home.jpg" alt="home logo">
        </div>
        <div class="searchbarbox">
            <form id="mainpage-searchbar-form" class="searchbar" action="searchpage.php">
            	<input type="text" class="main-searchbar-input" placeholder="search listings..." name="q">
            	<button class="main-searchbar-button" type="submit"></button>
            </form>
        </div>
    </div>
	<?php 
        //include 'database.php';
        //include 'initial_data.php';
    ?>

</body>
</html>