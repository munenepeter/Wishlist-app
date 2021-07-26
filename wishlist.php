<?php
   include_once 'Core/bootstrap.php'; 
//set & initialize the session['wishlist']


if (isset($_POST['product_id'])) {

    if (isset($_SESSION['wishlist'])) {

        $wishlistArray_id = array_column($_SESSION['wishlist'], 'product_id');
        //check if the product already exists in the wishlist if not add it
        if (!in_array($_POST['product_id'], $wishlistArray_id)) {

            $count = count($_SESSION['wishlist']);

            $wishlistArray = [
                'product_id' => $_POST['product_id'],
                'size' => $_POST['size'],
                'quantity' => $_POST['qty'],
                'price' =>  $_POST['price']
            ];

            $_SESSION['wishlist'][$count] = $wishlistArray;

            echo "Item was added to the wishlist";
        } else {

            echo  "Item is already in the wishlist";
        }
    } else {
        //if there is no session of wishlist create the item array and create the session 
        $wishlistArray = [
            'product_id' => $_POST['product_id'],
            'size' => $_POST['size'],
            'quantity' => $_POST['qty'],
            'price' =>  $_POST['price']
        ];
        //create session variable
        $_SESSION['wishlist'][0] = $wishlistArray;
    }
    //store the wishlist int the database

    var_dump($_SESSION['wishlist']);

     //App::get('database')->insert('wishlist', Request::getwishlist());

   
}
