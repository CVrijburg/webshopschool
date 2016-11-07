<?php

//Create '$connection' so that it can access the functions from 'DatabaseAPI.php'
require_once ( "../DatabaseAPI.php" );
$connection = new DatabaseAPI();

//Get contents of array cookie with key 'cart', put it in '$IDlist' and make it a string so that it is readable with SQL queries
$cart = json_decode( $_COOKIE[ 'cart' ] );
$IDlist = implode( ", " , $cart );

//Check if '$cart' has contents
if( !$cart ) {
    echo "You do not have any items in your cart, please select one or more items first before you finish your order.";
    exit;
    
} else {
//    Get contents of array cookie with key 'cart', put it in '$arrayProductID'
    $arrayProductID = json_decode( $_COOKIE[ 'cart' ] );
//    echo "array get";
//    Initialize '$successCheck' to check if all products in the array have a valid amount available
    $successCheck = 0;
//    Get all data from the associate rows
    for( $i = 0; $i < count( $arrayProductID ); $i++ ) {
        $whereClause = "WHERE ID = $arrayProductID[$i]";
        $result = $connection->getTableData( 'product', $whereClause );

//        Check products for valid amount
        if( $result[ 0 ][ "amount" ] > 0 ) {
            $successCheck++;
        }
    }

//    Check if all the items in the cart have a valid amount
    if( $successCheck === count( $arrayProductID ) ) {
//        If true, reduce amount in DB with amount of the contents of the cart
//        echo($connection->checkOut($arrayProductID));
//        var_dump( $arrayProductID );
//        exit;
        $connection->checkOut( $arrayProductID );

        echo "Congratulations! You have successfully bought your product(s)!";
//        Clear cart
        $connection->clearCookie();
        
    } else {
        echo "One or more items could not be bought. Please check the product availability and try again.";
    }

    $connection->closeConnection();
    exit;
}