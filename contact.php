<html>
<head>
    <title> Contact Form</title>
    <link rel="stylesheet" type="text/css" href="css/contact1.css">
</head>

<body>
<?php
session_start();

?>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html">
                <img src="images/logo.png" alt="" width="250px" height="250px">
            </a>
            </div>
            <nav>
                <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="about us.php">About</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="login.php">Account</a></li>
                    <!-- <form>
            <?php 
              if(isSet($_SESSION["isSignedIn"]) and $_SESSION["isSignedIn"]){
            ?>
              <a href="logout.php" class="mx-2">
                <button type="button" class="btn btn-secondary rounded-pill">SignOut</button>
              </a>
              <button type="button" class="btn btn-secondary rounded-pill"><?php echo $_SESSION["username"]; ?></button> 
            <?php
              }
              else{
            ?>
              <a href="login.php" class="mx-2">
                <button type="button" class="btn btn-secondary rounded-pill">Login</button>
              </a>
            <?php } ?>
          </form> -->
                </ul>
            </nav>
            <!-- <a href="cart.html">
                <img src="images/cart.jpg" alt="" width="30px" height="30px">
            </a> -->
        </div>
    </div>

    <div class="contact-title">
        <h1>Say Hello!</h1>
        <h2>We are always ready to serve you!</h2>
    </div>

    <div class="contact-form">
        <form action="contact1.php" id="contact-form" method="POST">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="email" type="email" class="form-control" placeholder="Your Email" required>
            <br>
            <textarea name="message" class="form-control" placeholder="Message" rows="4" required>

            </textarea><br>
            <input type="submit" class="form-control submit" value="Send Message">
        </form>
    </div>


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Downlaod Our App </h3>
                    <p>Download App For Android And Ios Mobile</p>
                    <div class="app-logo">
                        <!-- <img src="images/google play.png" alt="" > -->
                        <img src="images/app store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.png" alt="" width="250px" height="250px">
                    <p>Our Purpose Is To Give A Best Quality Product To Our Customer</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Blog Post</li>
                        <li>Coupons</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Instagram</li>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
           <p class="copyrights">Copyrights &copy; 2021. All Rights Are Reserved.</p>
        </div>
    </div> 
</body>


</html>