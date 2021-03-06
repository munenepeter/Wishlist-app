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
    <div class="navigation">
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

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <?php foreach ($products as $product) : ?>
                        <div class="p-4 md:w-1/3">
                            <div class="h-full  rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 mx-auto rounded-md  object-cover object-center" src="<?= $product['product_img'] ?>" alt="blog">
                                <div class="p-6 border-r-2 border-b-2  border-l-2 ">
                                    <h2 class="tracking-widest text-xs text-center title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                    <div class="flex items-center justify-between ">
                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?= $product['product_name'] ?></h1>

                                        <p>ksh.<?= $product['product_price'] ?>.00</p>
                                    </div>
                                    <div class="flex items-center justify-between flex-wrap ">
                                        <a href="productdetail.php?product=<?= $product['product_id'] ?>" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">View Product

                                        </a>
                                        <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>

                                        </span>
                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
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