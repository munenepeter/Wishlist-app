<?php

//this class contains methonds for requesting data from the client side
class Request {

    public static function CheckifProductIsInWishlist($product_id) {
        
        $wishlistArray_id = array_column($_SESSION['wishlist'], 'product_id');

        if (in_array($product_id, $wishlistArray_id)) {
            return true;
        } else {
            return false;
        }
    }
}
