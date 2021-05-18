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
                </ul>
            </nav>
            <img src="images/cart.jpg" alt="" width="30px" height="30px">
            <img src="images/menu.png " alt="" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    </div>
<div class="small-container cart-page">

    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/product4.jpg" alt="" width="10%">
                    <div>
                        <p>H&M Blackish girls Fork</p>
                        <small>Rs.1100</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.1100</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/pro7.jpg" alt="" width="10%">
                    <div>
                        <p>H&M boys suit with tie nand white shoes</p>
                        <small>Rs.2299</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.2299</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/pro2.jpg" alt="" width="10%">
                    <div>
                        <p>H&M Designer Hoddie and jeans for boys</p>
                        <small>Rs.2099</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.2099</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/short.jpg" alt="" width="10%">
                    <div>
                        <p>Roadster girls shorts</p>
                        <small>Rs.800</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.800</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/category1.jpg" alt="" width="10%">
                    <div>
                        <p>Flower pink fork</p>
                        <small>Rs.1999</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.1999</td>
        </tr>
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>SUB Total</td>
                <td>Rs.8297</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>Rs.460.944</td>
            </tr>
            <tr>
                <td>Grand Total</td>
                <td>Rs.8757.944</td>
            </tr>
        </table>
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




</body>
</html>