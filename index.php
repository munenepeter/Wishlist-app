<?php include_once 'Core/bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="product.html">Products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="account.html">Account</a></li>
                    </ul>
                </nav>
                <a href="productdetails.html" href="cart.html"><img src="assets/images/CART.png" width="20px" height="20px"></a>
                <img src="assets/images/menu33.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
        <div class="small-container">
            <div class="row row-2">
                <h2>All Products</h2>
                <select>
                    <option>Deafault Sorting</option>
                    <option>Sort by Price</option>
                    <option>Sort by Popularity</option>
                    <option>Sort by Rating</option>
                    <option>Sort by Sale</option>
                </select>
            </div>
            <?php

            //   Her i get the products in the Database

            $products = App::get('database')->selectAll('products');

            ?>
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-4">
                        <img src="<?= $product['product_img'] ?>">
                        <div class="flex">
                            <div class="text">
                                <h4><?= $product['product_name'] ?></h4>
                                <p>ksh.<?= $product['product_price'] ?>.00</p>

                                <a href="productdetail.php?product=<?= $product['product_id'] ?>">View Product</a>
                            </div>
                            <div class="buttons">
                                <button>Wishlist</button>
                                <button>Cart</button>
                            </div>
                        </div>


                    </div>
                <?php endforeach ?>

            </div>
            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594</span>
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
                    <img src="https://via.placeholder.com/150">
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
</body>

</html>