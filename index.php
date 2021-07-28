<?php include_once 'Core/bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="Home" href="index.html">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css" />
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
            // var_dump($_SESSION['wishlist']);
            //  var_dump(Request::getwishlist());

            //   Her i get the products in the Database

            $products = App::get('database')->selectAll('products');





            ?>












            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        <?php foreach ($products as $product) : ?>
                            <div class="p-4 md:w-1/3">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?= $product['product_img'] ?>" alt="blog">
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?= $product['product_name'] ?></h1>

                                        <p>ksh.<?= $product['product_price'] ?>.00</p>
                                        <div class="flex items-center flex-wrap ">
                                            <a href="productdetail.php?product=<?= $product['product_id'] ?>" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">View Product

                                            </a>
                                            <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>

















        
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