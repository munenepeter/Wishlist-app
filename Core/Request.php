<?php

//this class contains methonds for requesting data from the client side
class Request {

    public static function wishlist() {
        //set & initialize the session['wishlist']
        $_SESSION['wishlist'] = [];

        if (isset($_POST['product_id'])) {

            array_push($_SESSION['wishlist'], $_POST['product_id']);
        }
        return  $_SESSION['wishlist'];
    }
}
