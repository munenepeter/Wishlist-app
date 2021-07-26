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

</head>

<body>


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
                    <li><a href="wishlistshow.php">Wishlist</a><sup class="text-red-800"><?= count($_SESSION['wishlist']); ?></sup></li>
                </ul>
            </nav>
            <a href="cart.html"> <img src="assets/images/CART.png" width="20px" height="20px"></a>
            <img src="assets/images/menu33.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>


    <div class=" mx-auto flex flex-col max-w-3xl p-6 space-y-4 sm:p-10 bg-gray-50 text-gray-800">
        <h2 class="text-xl font-semibold">Your Wishlist</h2>
        <ul class="flex flex-col divide-y divide-gray-300">
            <?php if (count($_SESSION['wishlist']) > 0) : ?>
                <?php foreach ($_SESSION['wishlist'] as $wishlist) : ?>
                    <?php $product = App::get('database')->selectWhere('products', 'product_id', $wishlist['product_id']); ?>
                    <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                        <div class="flex w-full space-x-2 sm:space-x-4">
                            <img class="flex-shrink-0 object-cover w-20 h-20 border-transparent rounded outline-none sm:w-32 sm:h-32" src="<?= $product['product_img'] ?>" alt="Polaroid camera">
                            <div class="flex flex-col justify-between w-full pb-4">
                                <div class="flex justify-between w-full pb-2 space-x-2">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-semibold leading-snug sm:pr-8"><?= $product['product_name'] ?></h3>
                                        <p class="text-sm text-gray-600">Quantity: <?= $wishlist['quantity'] ?></p>
                                        <p class="text-sm text-gray-600">Product Price: <?= $product['product_price'] ?></p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-semibold"><?= $wishlist['price'] ?></p>

                                    </div>
                                </div>
                                <div class="flex text-sm divide-x">
                                    <button class="flex items-center px-2 py-1 pl-0 space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        <span>Remove</span>
                                    </button>
                                    <button class="flex px-2 py-1 space-x-1 border rounded-md border-purple-600">

                                        <span>Add to Cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                    </li>

        </ul>
        <div class="space-y-1 text-right">
            <p>Total amount:
                <span class="font-semibold"> 357 €</span>
            </p>
            <p class="text-sm text-gray-600">Not including taxes and shipping costs</p>
        </div>
        <div class="flex justify-end space-x-4">
            <button class="px-6 py-2 border rounded-md border-green-200">Back
                <span class="sr-only sm:not-sr-only">to shop</span>
            </button>

        </div>
    </div>


</body>

</html>