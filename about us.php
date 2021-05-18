<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about us.css">
    <title>Document</title>
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

    <div class="team-section">
        <h1>Our Team</h1>
        <span class="border"></span>
        <div class="ps">
           <a href="#p1"><img src="images/anita.jpeg" alt="" width="190px" height="190px" style="padding: 5px;"></a>
           <a href="#p2"><img src="images/sana.jpeg" alt="" width="190px" height="190px"  style="padding: 5px;"></a>
           <a href="#p3"><img src="images/mohin.jpeg" alt="" width="190px" height="190px" style="padding: 5px;"></a> 
        </div>
        <div class="section" id="p1">
            <span class="name">Anita Mitharwal</span>
            <span class="border"></span>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>
        <div class="section" id="p2">
            <span class="name">Sana Ansari</span>
            <span class="border"></span>
            <p>
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
            </p>
        </div>
        <div class="section" id="p3">
            <span class="name">Mohin Patel</span>
            <span class="border"></span>
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
        </div>
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