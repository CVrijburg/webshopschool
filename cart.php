<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheets/base.css" charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="pictures/favicon.ico"/>
    <meta charset="utf-8">
    <title>Webshop - shoppingCart</title>

    <?php require_once ( "DatabaseAPI.php" );
    $connection = new DatabaseAPI();

    $userName = $_COOKIE[ 'currentUser' ];
    $whereClause = "WHERE userName = '$userName'";
    $memberArray = $connection->getTableData( 'member', $whereClause );
    ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="cart.js"></script>
</head>
<body>
<?php include 'items/header.php' ?>
<div class="cart">
    <div class="content">
        <div class="profile">
            <span class="title">Profile</span>
            <?php foreach( $memberArray as $member) ?>
            <ul>
                <li class="li-title">Personal data</li>
                <hr>
                <br>
                <li>Name: <?php echo $member["userName"]; ?></li>
                <li>Email: <?php echo $member["email"]; ?></li>
                <li>Country: <?php echo $member["country"]; ?></li>
                <li>Zipcode: <?php echo $member["zipcode"]; ?></li>
                <li>City: <?php echo $member["city"]; ?></li>
                <li>Address: <?php echo $member["address"]; ?></li>
                <hr>
            </ul>
            <br>
        </div>
        <div class="titles">
            <span id="order-history">Order history</span>
            <span id="shopping-cart">Shopping cart</span>
        </div>
        <div class="order-history">
            <table>
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Ordered product(s)</th>
                    <th>Order price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>00001</td>
                    <td>31 - 05 - 2016</td>
                    <td>
                        GTX Titan X
                        <br>
                        GTX 970
                    </td>
                    <td>€1400,--</td>
                </tr>
                <tr>
                    <td>00002</td>
                    <td>1 - 06 - 2016</td>
                    <td>
                        GTX Titan X
                        <br>
                        GTX 970 (2x)
                        <br>
                        GTX 980
                        <br>
                        GTX 1070
                        <br>
                        GTX 1080
                    </td>
                    <td>€3500,--</td>
                </tr>
                <tr>
                    <td>00003</td>
                    <td>1 - 06 - 2016</td>
                    <td>
                        GTX Titan X
                        <br>
                        GTX 970
                        <br>
                        GTX 980 (5x)
                        <br>
                        GTX 1070
                        <br>
                        GTX 1080
                    </td>
                    <td>€6300,--</td>
                </tr><tr>
                    <td>00004</td>
                    <td>1 - 06 - 2016</td>
                    <td>
                        GTX Titan X
                        <br>
                        GTX 970
                    </td>
                    <td>€1400,--</td>
                </tr>
                <tr>
                    <td>00005</td>
                    <td>1 - 06 - 2016</td>
                    <td>
                        GTX Titan X
                        <br>
                        GTX 970 (2x)
                        <br>
                        GTX 980
                        <br>
                        GTX 1070
                        <br>
                        GTX 1080
                    </td>
                    <td>€3500,--</td>
                </tr>
                <tr>
                    <td>00006</td>
                    <td>2 - 06 - 2016</td>
                    <td>
                        GTX Titan X
                        <br>
                        GTX 970
                        <br>
                        GTX 980 (5x)
                        <br>
                        GTX 1070
                        <br>
                        GTX 1080
                    </td>
                    <td>€6300,--</td>
                </tr><tr>
                    <td>00007</td>
                    <td>2 - 06 - 2016</td>
                    <td>
                        GTX Titan X
                        <br>
                        GTX 970
                    </td>
                    <td>€1400,--</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="shopping-cart">
            <div class="shopping-cart-list">
                <table>
                    <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Product availability</th>
                        <th>Price</th>
                        <th>VAT</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $totalPrice = 0;
                    $arrayProductID = json_decode( $_COOKIE[ 'cart' ] );
                    for( $i = 0; $i < count( $arrayProductID ); $i++ ):
//                        echo '<pre>';
//                        var_dump( $productID );
//                        exit;
                        $whereClause = " WHERE ID = '$arrayProductID[$i]'";
                        $cartArray = $connection->getTableData( 'product', $whereClause );
                        $includeVat = $cartArray[ 0 ][ 'price' ] * 1.21;
                        $vat = $cartArray[ 0 ][ 'price' ] * 0.21;
                        $totalPrice += $includeVat;
                        ?>
                        <tr>
                            <td><?php echo $cartArray[ 0 ][ 'name' ]; ?></td>
                            <td><?php echo $cartArray[ 0 ][ 'amount' ]; ?></td>
                            <td>&euro; <?php echo $cartArray[ 0 ][ 'price' ]; ?></td>
                            <td>&euro; <?php echo $vat; ?></td>
                        </tr>
                        <?php
                    endfor;
                    $connection->closeConnection();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="cart-buttons">
            <div id="clear">
                <button class="button js-clearCart"><span>Clear cart</span></button>
            </div>
            <div class="price">
                <span>Total&nbsp;price:&nbsp;&euro;&nbsp;<?php echo $totalPrice;?></span>
            </div>
            <div id="checkout">
                <button class="button js-checkout"><span>To checkout</span></button>
            </div>
        </div>
    </div>
</div>
<?php include "items/footer.php" ?>
</body>
</html>
