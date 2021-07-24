<?php

//this class contains methonds for requesting data from the client side
class Request {

    public static function getwishlist() { 

        $wishlist = $_SESSION['wishlist']; 
        return  $wishlist;
    }
}
