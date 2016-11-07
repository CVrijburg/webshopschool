<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheets/base.css" charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="pictures/favicon.ico"/>
    <meta charset="utf-8">
    <title>Webshop - home</title>

    <?php
//    Create '$connection' so that it can access the functions from 'DatabaseAPI.php'
    require_once ("DatabaseAPI.php");
    $connection = new DatabaseAPI();
//    Create '$whereClause' so that it can be used in the 'getTableData()' function
    $whereClause = "WHERE ID > 2";
    $gpuArray = $connection->getTableData( 'product', $whereClause );
    $connection->closeConnection();
    ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="cart.js"></script>
</head>
<body>
<div class="home">
<!--    Add the page 'header.php' to this page-->
    <?php include 'items/header.php' ?>
    <div class="content">
        <div class="subcontent1">
            <h2>Newest additions:</h2>
            <?php
            $index = 3;
            foreach( $gpuArray as $index => $gpu) { ?>
<!--                Show graphics cards number 3 to 6-->
                    <div class="items">
                        <h3><?php echo $gpu['name'] ?></h3>
                        <a href=""><img src="<?php echo $gpu['image']; ?>" alt="GraphicsCard.jpg" title="<?php echo $gpu['name']; ?>" /></a>
                        <ul>
                            <li><?php echo $gpu['description'] ?></li>
<!--                            <li>--><?php //echo $gpu['specifications'] ?><!--</li>-->
                            <li id="button-spacing">&euro; <?php echo $gpu['price'] ?></li>
                        </ul>
<!--                    Give the gpuID to button so that it can be used in the JavaScript file-->
                        <button id="<?php echo $gpu[ 'ID' ] ?>" class="in-cart js-addToCart">Add to cart</button>
                    </div>
                <?php

//                Make sure that there are only 3 graphics cards displayed
                $index++;
                if( $index >= 3 ){
                    break;
                }
            }; ?>
        </div>
    </div>
</div>
<!--    Add the page 'footer.php' to this page-->
    <?php include 'items/footer.php' ?>
</body>
</html>
