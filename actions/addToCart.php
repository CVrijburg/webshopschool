<?php

//Get the product ID and put it in '$addProductID' variable
$addProductID = $_GET['productID'];

//Get the contents of the cookie array with key 'cart' and put it in '$cartArray' variable
$cartArray = json_decode( $_COOKIE[ 'cart' ] );

//Check if the variable '$cartArray' has content
if( !$cartArray ) {
    $cartArray = [];
}

//Put the contents of '$addProductID' variable inside '$cartArray' variable
array_push( $cartArray, $addProductID );
//Create the cookie with key 'cart' with value '$cartArray'
setcookie( "cart", json_encode( $cartArray ), time() + (3600 * 24), "/" );

exit;