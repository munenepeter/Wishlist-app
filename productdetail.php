<?php include_once 'Core/bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="Home" href="index.html">
</head>

<body>

    <div class="body">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="menuitems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.html">Products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="account.html">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.html"> <img src="assets/images/CART.png" width="20px" height="20px"></a>
                <img src="assets/images/menu33.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
        <!-- Get product_id from url -->
        <?php
        // Get product_id from url
        $product_id = (int)$_GET['product'];
        //Query the database to get the product info
        $product = App::get('database')->selectWhere('products', 'product_id', $product_id);
        ?>

        <!--  -->
        <!----single product details---->
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="<?= $product['product_img'] ?>" width="100%" id="ProductImg">
                </div>
                <div class="col-2">
                    <p>Home/<?= $product['product_name'] ?></p>
                    <h1><?= $product['product_name'] ?></h1>
                    <h4>ksh.<?= $product['product_price'] ?>.00</h4>
                    <select>
                        <option>0.5 litre litre</option>
                        <option>1 litre</option>
                        <option>5 litre</option>
                    </select>
                    <input type="number" value="0">
                    <a href="" class="btn">Add To Cart</a>
                    <h3>Product Details</h3><br>
                    <p><?= $product['product_desc'] ?></p>
                </div>
            </div>

        </div>

        <!------title-->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p>View More</p>
            </div>
        </div>


        <!------products-->
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <img src="assets/images/pro.jpg">
                    <h4>Hand Wash</h4>
                    <p>ksh.130.00</p>
                </div>
                <div class="col-4">
                    <img src="assets/images/pro1.jpg">
                    <h4>Hand Wash</h4>
                    <p>ksh.130.00</p>
                </div>
                <div class="col-4">
                    <img src="assets/images/pro2.jpg">
                    <h4>Hand Wash</h4>
                    <p>ksh.130.00</p>
                </div>
                <div class="col-4">
                    <img src="assets/images/pro3.jpg">
                    <h4>Hand Wash</h4>
                    <p>ksh.130.00</p>
                </div>
            </div>



        </div>
    </div>
    <!-----footer-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download our App on Android or ios phone.</p>
                    <div class="app-logo">
                        <img src="assets/images/google-play.png">
                        <img src="assets/images/ios2.jpeg">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="assets/images/altonslogo.jpg">
                    <p>Available on Android and iphones.</p>

                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h3>Follow us</h3>
                    <ul>
                        <li><a href="https://web.facebook.com/altonsoaps" class="som">Facebook</a></li>
                        <li><a href="" class="som">Twitter</a></li>
                        <li><a href="" class="som">YouTube</a></li>
                        <li><a href="https://Instagram.com/altonsoaps" class="som">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p>Copyright@2021 Altonsoaps</p>
        </div>
    </div>
    <!-----js for toggle menu---->
    <script>
        var menuitems = document.getElementById("menuitems");
        menuitems.style.maxHeight = "0px";

        function menutoggle() {
            if (menuitems.style.maxHeight == "0px") {
                menuitems.style.maxHeight = "200px";
            } else {
                menuitems.style.maxHeight = "0px";
            }
        }
    </script>

    <!------js for product details-->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function() {
            ProductImg.src = SmallImg[3].src;
        }
    </script>
</body>

</html>