<?php include_once 'Core/bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details</title>
    <link rel="Home" href="index.html">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css" />
    <!-- Get JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Run The AJAX calls to add items into the wishlist -->
    <script>
        $(document).ready(function() {
            $("#wishlist").click(function(e) {

                $.post("wishlist.php", {

                    product_id: $("#product_id").val(),
                    size: $("#size option:selected").text(),
                    qty: $("#qty").val(),
                    price: $("#qty").val() * $("#price").val()

                }, function(data, status) {
                    $("#wishlist").addClass("bg-blue-800").removeClass("bg-gray-200");
                    $("#svg").addClass("text-red-400");
                    $("#test").html(data);
                });
            });
        });
    </script>

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
                        <li><a href="wishlistshow.php">Wishlist</a><sup class="text-red-800"><?=count($_SESSION['wishlist']);?></sup></li>
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
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">
                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <img alt="ecommerce" class="lg:w-1/2 w-full  object-cover object-center rounded" src="<?= $product['product_img'] ?>">
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mb-6 lg:mb-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest"> <a href="index.php">Home</a> / <a href="productdetail.php?product=<?= $product['product_id'] ?>"><?= $product['product_name'] ?></a> </h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4"><?= $product['product_name'] ?></h1>
                        <div class="flex mb-4">
                            <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Description</a>

                        </div>

                        <p class="leading-relaxed mb-4"><?= $product['product_desc'] ?></p>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Quantity</span>
                            <span class="ml-auto text-gray-900"><?= $product['product_qty'] ?></span>
                        </div>
                        <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                            <span class="text-gray-500">Price</span>
                            <span class="ml-auto text-gray-900">Ksh <?= $product['product_price'] ?></span>
                        </div>
                        <div class="flex">
                            <select id="size" class="text-center w-28 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500">
                                <option>0.5 litre</option>
                                <option>1 litre</option>
                                <option>5 litre</option>
                            </select>
                            <input id="qty" class=" text-center w-28 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4" placeholder="QTY" type="number" value="0">

                            <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Add To Cart</button>
                            <input type="hidden" class="hidden" id="price" value="<?= $product['product_price'] ?>">
                            <input type="hidden" class="hidden" id="product_id" value="<?= $product['product_id'] ?>">
                            <button id="wishlist" class="bg-<?= (Request::CheckifProductIsInWishlist($product['product_id'])) ? 'blue-800' : 'gray-200'; ?> rounded-full w-10 h-10  p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                <svg id="svg" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="<?= (Request::CheckifProductIsInWishlist($product['product_id'])) ? 'text-red-400 opacity-50 cursor-not-allowed' : ''; ?> w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                                </svg>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------title-->
        <div class="small-container">
            <div class="bg-white">
                <p class="text-red-500" id="test"></p>
            </div>
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
                    <!-- <img src="assets/images/altonslogo.jpg"> -->
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
        // var menuitems = document.getElementById("menuitems");
        // menuitems.style.maxHeight = "0px";

        // function menutoggle() {
        //     if (menuitems.style.maxHeight == "0px") {
        //         menuitems.style.maxHeight = "200px";
        //     } else {
        //         menuitems.style.maxHeight = "0px";
        //     }
        // }
    </script>

    <!------js for product details-->
    <script>
        // var ProductImg = document.getElementById("ProductImg");
        // var SmallImg = document.getElementsByClassName("small-img");
        // SmallImg[0].onclick = function() {
        //     ProductImg.src = SmallImg[0].src;
        // }
        // SmallImg[1].onclick = function() {
        //     ProductImg.src = SmallImg[1].src;
        // }
        // SmallImg[2].onclick = function() {
        //     ProductImg.src = SmallImg[2].src;
        // }
        // SmallImg[3].onclick = function() {
        //     ProductImg.src = SmallImg[3].src;
        // }
    </script>
</body>

</html>