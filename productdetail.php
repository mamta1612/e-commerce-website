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
    <div class="small-conatiner single-product">
       <div class="row">
           <div class="col-2">
               <img src="images/product4.jpg" alt="" width="450px" height="450px" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/fork1.jpg" alt="" width="100%" class="small-img" >
                    </div>
                    <div class="small-img-col">
                        <img src="images/fork2.jpg" alt="" width="100" class="small-img"  >
                    </div>
                    <div class="small-img-col">
                        <img src="images/fork3.jpg" alt="" width="100%" class="small-img"  >
                    </div>
                    <div class="small-img-col">
                        <img src="images/fork4.jpg" alt="" width="100%" class="small-img" >
                    </div>
                        
                    
                </div>

           </div>
           <div class="col-2">
               <p>Party Wear Fork</p>
               <h1>H&M Blackish Girls Fork</h1>
               <h4>Rs.1100</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>
                <input type="number" value="1">
                <a href=" " class="btn">Add to Cart</a>
                <h3>Product Details </h3>
                <p>Dress in soft, printed sweatshirt fabric with a rib-trimmed neckline, dropped shoulders and long sleeves with ribbed cuffs. Gathered seam at the hips and a flared skirt. Unlined</p>
           </div>
       </div>
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Product</h2>
            <p>View More</p>
        </div>
    </div>

    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="images/product4.jpg" alt="" width="350px" height="350px">
                <h4>HunyHuny party wear dress for baby girl</h4>
                <p>Rs.1100</p>
            </div>
            <div class="col-4">
                <img src="images/product1.jpg" alt="" width="350px" height="350px">
                <h4>H&M brownish jacket with tshirt & pant </h4>
                <p>Rs.2199</p>
            </div>
            <div class="col-4">
                <img src="images/product2.jpg" alt="" width="350px" height="350px">
                <h4>ginimini blue & white fork for baby girl</h4>
                <p>Rs.1299</p>
            </div>
            <div class="col-4">
                <img src="images/product6.jpg" alt="" width="350px" height="350px">
                <h4>Black and white suit from fashion trends</h4>
                <p>Rs.1499</p>
            </div>
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
        var MenuItems = document.getElementById("MenuItems");

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

<script>

    var ProductImg = document.getElementById("ProductImg");
    var Smallimg = document.getElementsByClassName("small-img");

    Smallimg[0].onclick = function()
    {
        ProductImg.src = Smallimg[0].src;
    }
    Smallimg[1].onclick = function()
    {
        ProductImg.src = Smallimg[1].src;
    }
    Smallimg[2].onclick = function()
    {
        ProductImg.src = Smallimg[2].src;
    }
    Smallimg[3].onclick = function()
    {
        ProductImg.src = Smallimg[3].src;
    }
</script>


</body>
 
</html>