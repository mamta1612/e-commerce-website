<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Document</title>
</head>
<body>
    <div class="center">
        <img src="images/logo.png" alt="" width="150px" height="130px" style="padding-left: 110px;">
        <h1>Sign In</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>First Name</label>
            </div>
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Last Name</label>
            </div>
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label> Confirm Password</label>
            </div>
            <input type="submit" value="Sign In">
            <div class="signup_link">
               Already member? <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>