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
    <div class="header">


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
                    <!-- <li><a href="login.php">Account</a></li> -->
                    <form>
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
          </form>
                    </ul>

                </nav>
                <!-- <a href="cart.html">
                    <img src="images/cart.jpg" alt="" width="30px" height="30px">
                </a> -->
                <img src="images/menu.png " alt="" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Baby A <br>New Style!</h1>
                    <p>The perfect style for your kids....<br>Make your child wardroble brighter<br>with us....Grow with
                        style </p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/bach.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="categories">
        <div class="small-conatiner">
            <div class="row">
                <div class="col-3">
                    <img src="images/start1.jpg" alt="" width="400px" height="400px" style="padding: 40px;">
                </div>
                <div class="col-3">
                    <img src="images/start2.jpg" alt="" width="400px" height="400px" style="padding: 40px;">
                </div>
                <div class="col-3">
                    <img src="images/start3.jpg" alt="" width="400px" height="400px" style="padding: 40px;">
                </div>
            </div>
        </div>
    </div>
    <!-------------FEATURED PRODUCTS------------>
    <div class="small-conatiner">
        <h2 class="title"> Featured Product</h2>
        <div class="row">
            <div class="col-4">
                <a href="productdetail.php">
                    <img src="images/product4.jpg" alt="">
                </a>
                <a href="productdetail.php">
                    <h4>HunyHuny party wear dress for baby girl</h4>
                </a>
               
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
    </div>

    <!----------LATEST PRODUCTS---------->
    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="images/cap.jpg" alt="" width="350px" height="350px">
            <h4>Stylish unisex cap</h4>
            <p>Rs.399</p>
        </div>
        <div class="col-4">
            <img src="images/baby socks.jpg" alt="" width="350px" height="350px">
            <h4>Adidas unisex socks</h4>
            <p>Rs.299</p>
        </div>
        <div class="col-4">
            <img src="images/bottle.jpg" alt="" width="350px" height="350px">
            <h4>Sucker bottles</h4>
            <p>Rs.499</p>
        </div>
        <div class="col-4">
            <img src="images/cate2.jpg" alt="" width="350px" height="350px">
            <h4>H&M Pinkish fork</h4>
            <p>Rs.1549</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="images/category6.jpg" alt="" width="350px" height="350px">
            <h4>Unisex nights suit </h4>
            <p>Rs.999</p>
        </div>
        <div class="col-4">
            <img src="images/category1.jpg" alt="" width="350px" height="350px">
            <h4>Flower pink fork</h4>
            <p>Rs.1999</p>
        </div>
        <div class="col-4">
            <img src="images/boy shoes.jpg" alt="" width="350px" height="350px">
            <h4>Adidas unisex shoes</h4>
            <p>Rs.1799</p>
        </div>
        <div class="col-4">
            <img src="images/short.jpg" alt="" width="350px" height="350px">
            <h4>Roadster girls shorts</h4>
            <p>Rs.800</p>
        </div>
    </div>

    <!------------OFFERS----------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/bed.jpg" alt="" class="offer-img" width="550px" height="450" style="padding-left: 200px;">
                </div>
                <div class="col-2">
                    <p>Exclusively Avaiable On Baby Store</p>
                    <h1>Mini Bed</h1>
                    <p>Mini bed for your babies...A good laugh and sleep this two is the best cures for anything...Give
                        your babies a comfortable and better sleep</p>
                    <a href="#" class="btn">Buy Now &#8594</a>
                </div>
            </div>
        </div>
    </div>

    <!----------------Brands---------------->
    <div class="brands">
        <div class="small-conatiner">
            <div class="row">
                <div class="col-5">
                    <img src="images/baby1.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/baby2.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/baby3.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/baby4.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/baby5.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!---------------FOOTER-------------->
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
   
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else{
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>  


  

</body>

</html>