<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign.css">
    <title>Document</title>
</head>
<body>
    <div class="center">
        <img src="images/logo.png" alt="" width="150px" height="130px" style="padding-left: 110px;">
        <h1>Login</h1>
        <form method="post">
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
            <div class="pass">Forgot password?</div>
            <input type="submit" value="Login">
            <div class="signup_link">
               Not a member? <a href="signup.php">SignUp</a>
            </div>
            <?php
                         if(isSet($_SESSION["isError"]) and $_SESSION["isError"]){
                      echo "Wrong email or Password";
			}?>
        </form>
    </div>
</body>
</html>