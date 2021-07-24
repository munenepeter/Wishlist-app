<?php

//set & initialize the session['wishlist']


if (isset($_POST['product_id'])) {

    if (isset($_SESSION['wishlist'])) {

        $item_array_id = array_column($_SESSION['wishlist'], 'product_id');
        //check if the product already exists in the wishlist if not add it
        if (!in_array($_POST['product_id'], $item_array_id)) {

            $count = count($_SESSION['wishlist']);

            $item_array = [
                'product_id' => $_POST['product_id'],
                'quantity' => $_POST['quantity']
            ];

            $_SESSION['wishlist'][$count] = $item_array;

            echo "Item was added to the wishlist";
        } else {

            echo  "Item is already in the wishlist";
        }
    } else {
        //if there is no session of wishlist create the item array and create the session 
        $item_array = [
            'product_id' => $_POST['product_id'],
            'size' => $_POST['size'],
            'quantity' => $_POST['qty'],
            'price' =>  $_POST['price']
        ];
        //create session variable
        $_SESSION['wishlist'][0] = $item_array;
    }
    var_dump($_SESSION['wishlist']); 
    // echo $_SESSION['wishlist'][0]['product_id'];
 
}
