<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <div class="login-page-body">
        <div class="signup-platform">
            <h1> Signup Page </h1>
            <form class="login-form" action="/check-login.php">
                <div class="login-form-field">
                    <label for="username">Username:</label>
                    <input type="text" name="username"><br>
                </div>
                <div class="login-form-field">
                    <label for="password">Password:</label>
                    <input type="text" name="password">
                </div>
                <button type="submit">Sign up</button>
            </form>
            <div class="signup-other-options">
                <p><a href="./">Login</a> as a customer</p>
                <p><a href="./">Login</a> as an agent</p>
            </div>
        </div>
    </div>
</body>
</html>