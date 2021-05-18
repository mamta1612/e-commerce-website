<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Baby Store E-Commerce Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>

<body>
<?php
session_start();

?>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" alt="" width="250px" height="250px">
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
            <img src="images/menu.png " alt="" class="menu-icon" onclick="menutoggle()">
        </div>

    </div>

    <!-------------FEATURED PRODUCTS------------>
    <div class="small-conatiner">
        <div class="row row-2">
            <h2>All Product</h2>
            <select>
                <option>Default Sorting</option>
                <option>Price Low To High</option>
                <option>Price High To Low</option>
                <option>By Popularity</option>
                <option>By Rating</option>
                <option>By Sale</option>
            </select>
        </div>
   
        <div class="row">
            <div class="col-4">
                <img src="images/product4.jpg" alt="">
                <h4>HunyHuny party wear dress for baby girl</h4>
                <p>Rs.1100</p>
            </div>
            <div class="col-4">
                <img src="images/product1.jpg" alt="">
                <h4>H&M brownish jacket with tshirt & pant </h4>
                <p>Rs.2199</p>
            </div>
            <div class="col-4">
                <img src="images/product2.jpg" alt="">
                <h4>ginimini blue & white fork for baby girl</h4>
                <p>Rs.1299</p>
            </div>
            <div class="col-4">
                <img src="images/product6.jpg" alt="">
                <h4>Black and white suit from fashion trends</h4>
                <p>Rs.1499</p>
            </div>
        </div>     
        <div class="row">
            <div class="col-4">
                <img src="images/pro1.jpg" alt="">
                <h4>HunyHuny White short fork for girs</h4>
                <p>Rs.999</p>
            </div>
            <div class="col-4">
                <img src="images/pro2.jpg" alt="">
                <h4>H&M Designer hoodie with jeans for boys </h4>
                <p>Rs.2099</p>
            </div>
            <div class="col-4">
                <img src="images/pro3.jpg" alt="">
                <h4>ginimini redish Tshirts for girls and boys </h4>
                <p>Rs.1199</p>
            </div>
            <div class="col-4">
                <img src="images/pro5.jpg" alt="">
                <h4>Trending orange top with multicolor skirt </h4>
                <p>Rs.1049</p>
            </div>
        </div>     
        <div class="row">
            <div class="col-4">
                <img src="images/pro6.jpg" alt="">
                <h4>HunyHuny yellow blue tshirt pant </h4>
                <p>Rs.1299</p>
            </div>
            <div class="col-4">
                <img src="images/pro7.jpg" alt="">
                <h4>H&M boy Suit with tie with white shoes </h4>
                <p>Rs.2299</p>
            </div>
            <div class="col-4">
                <img src="images/pro8.jpg" alt="">
                <h4>ginimini Pinkish gown for baby girl</h4>
                <p>Rs.2499</p>
            </div>
            <div class="col-4">
                <img src="images/pro9.jpg" alt="">
                <h4>Greysih and White suit for boys</h4>
                <p>Rs.1999</p>
            </div>
        </div>     
        <div class="row">
            <div class="col-4">
                <img src="images/pro10.jpg" alt="">
                <h4>HunyHuny red color dress for girl</h4>
                <p>Rs.1299</p>
            </div>
            <div class="col-4">
                <img src="images/pro11.jpg" alt="">
                <h4>HunnyHunny Hairbands For Baby Girl </h4>
                <p>Rs.599</p>
            </div>
            <div class="col-4">
                <img src="images/pro12.jpg" alt="">
                <h4>H&M pinkish Fork For Girls </h4>
                <p>Rs.2299</p>
            </div>
            <div class="col-4">
                <img src="images/pro13.jpg" alt="">
                <h4>Classic Blue Color Shoes For Boys</h4>
                <p>Rs.1599</p>
            </div>
            <div class="page-btn">
               <a href="product1.php"><span>1</span></a>
               <a href="product2.php"><span>2</span></a>
               <a href="product3.php"><span>3</span></a>
               <a href="product4.php"><span>4</span></a>
               <a href="product5.php"><span>5</span></a>
               <span>&#8594</span>
            </div>
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

    <script>
        var MenuItems = document.getElementById(MenuItems);

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>




</body>

</html>