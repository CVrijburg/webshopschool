<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheets/base.css" charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="pictures/favicon.ico"/>
    <meta charset="utf-8">
    <title>Webshop - cards</title>

    <?php 
    
//    Create '$connection' so that it can access the functions from 'DatabaseAPI.php'
    require_once ("DatabaseAPI.php");
    $connection = new DatabaseAPI();
//    Create '$whereClause' so that it can be used in the 'getTableData()' function
    $gpuArray = $connection->getTableData( 'product' );
    $connection->closeConnection();
    ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="cart.js"></script>
</head>
<body>
<div class="cards">
<!--    Add the page 'header.php' to this page-->
    <?php include 'items/header.php' ?>
    <div class="content">
        <div class="subcontent1">
            <h2>Our Graphics Cards:</h2>
            <?php foreach( $gpuArray as $index => $gpu ) { ?>
<!--                $gpu = $gpuArray[$index];-->
<!--                Show all the graphics cards-->
                <div class="items1" id="less-width">
                    <h3><?php echo $gpu['name'] ?></h3>
                    <a href=""><img src="<?php echo $gpu['image'] ?>" alt="GraphicsCard.jpg" title="<?php echo $gpu['name'] ?>" /></a>
                    <ul>
                        <li><?php echo $gpu['description'] ?></li> 
<!--                        <li>--><?php //echo $gpu['specifications'] ?><!--</li>-->
                        <li>&euro; <?php echo $gpu['price'] ?></li>
                    </ul>
<!--                    Give the gpuID to button so that it can be used in the JavaScript file-->
                    <button id="<?php echo $gpu[ 'ID' ] ?>" class="in-cart js-addToCart">Add to cart</button>
                </div>
            <?php } ?>
        </div>
    </div>
<!--    Add the page 'footer.php' to this page-->
    <?php include 'items/footer.php' ?>
</div>
</body>
</html>