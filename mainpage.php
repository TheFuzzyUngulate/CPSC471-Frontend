<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="primary-header">
        <nav class="grid-container">
            <div class="gridblock header-seller-options left-elem">
                <a href="/create-listing">Sell</a>
                <a href="/contact-agent">Contact an Agent</a>
            </div>
            <div class="gridblock mainpage-link center-elem">
                <a href="/home">Pandora Real Estate</a>
            </div>
            <div class="gridblock user-perms right-elem">
                <a href="/admin-login">Admin</a>
                <a href="/agent-login">Agent</a>
                <a href="/login">User</a>
            </div>
        </nav>
    </div>

    <div class="searchbarbox">
        <form id="mainpage-searchbar-form" class="searchbar" action="/search">
            <input type="text" class="main-searchbar-input" placeholder="search listings..." name="q">
            <button class="main-searchbar-button" type="submit"></button>
        </form>
    </div>
</body>
</html>