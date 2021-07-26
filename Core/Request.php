<?php

//this class contains methonds for requesting data from the client side
class Request {

    public static function getwishlist() {
      
            $wishlistArray = [
                'product_id' => $_SESSION['wishlist'][0]['product_id'],
                'product_size' => $_SESSION['wishlist'][0]['size'],
                'product_qty' => $_SESSION['wishlist'][0]['quantity'],
                'product_price' =>  $_SESSION['wishlist'][0]['price']
            ];
        return $wishlistArray;
        
    }
}
