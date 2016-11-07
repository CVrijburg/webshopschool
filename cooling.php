<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheets/base.css" charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="pictures/favicon.ico"/>
    <meta charset="utf-8">
    <title>Webshop - cooling</title>
</head>
<body>
<div class="cooling">
    <?php include 'items/header.php' ?>
    <div class="content">
        <div class="subcontent1">
            <h2>Onze tablets:</h2>
            <?php foreach ($_SESSION['tablets'] as $tablet) { ?>
            <div class="item">
                <h3><?php echo $tablet['Name'] ?></h3>
                <a href=""><img src="<?php echo $tablet['Image']; ?>" alt="Tablet.jpg" title="<?php echo $tablet['Name']; ?>" /></a>
                <ul>
                    <li><?php echo $tablet['Brand'] ?></li>
                    <li><?php echo $tablet['Screen'] ?>" scherm</li>
                    <li><?php echo $tablet['InternalStorage'] ?> GB</li>
                    <li><?php echo $tablet['ExternalStorage'] ?> GB</li>
                    <li><?php echo $tablet['Processor'] ?></li>
                    <li>batterijduurduur tot maximaal <?php echo $tablet['Battery'] ?> uur</li>
                    <li>Android <?php echo $tablet['System'] ?></li>
                    <li>&euro; <?php echo $tablet['Price'] ?></li>
                </ul>
            </div>
            <?php } ?>
        </div>
        <div class="subcontent1">
            <h2>accessories:</h2>
            <div class="accessory" id="less-width">
                <h3>Beschermhoezen</h3>
                <img src="pictures/accessories/bookcover.jpg" alt="Bookcover.jpg" />
                <ul>
                    <li><a href="">&nbsp;Samsung Galaxy Tab A&nbsp;</a></li>
                    <li><a href="">&nbsp;Samsung Galaxy Tab 4&nbsp;</a></li>
                    <li><a href="">&nbsp;Samsung Galaxy View&nbsp;</a></li>
                    <li>&euro; 49,99 per stuk</li>
                </ul>
            </div>
            <div class="accessory" id="less-width2">
                <h3>Anti-kras folie</h3>
                <img src="pictures/accessories/screenprotector.jpg" alt="Screenprotector.jpg" />
                <ul>
                    <li><a href="">&nbsp;Samsung Galaxy Tab A&nbsp;</a></li>
                    <li><a href="">&nbsp;Samsung Galaxy Tab 4&nbsp;</a></li>
                    <li><a href="">&nbsp;Samsung Galaxy View&nbsp;</a></li>
                    <li>&euro; 19,99 per stuk</li>
                </ul>
            </div>
            <div class="accessory" id="less-width2">
                <h3>Draadloze toetsenboorden</h3>
                <img src="pictures/accessories/keyboard.jpg" alt="Toetsenbord.jpg" />
                <ul>
                    <li><a href="">&nbsp;Samsung Galaxy Tab A&nbsp;</a></li>
                    <li><a href="">&nbsp;Samsung Galaxy Tab 4&nbsp;</a></li>
                    <li><a href="">&nbsp;Samsung Galaxy View&nbsp;</a></li>
                    <li>&euro; 99,99 per stuk</li>
                </ul>
            </div>
        </div>
    </div>
    <?php include 'items/footer.php' ?>
</div>
</body>
</html>
