<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/webshop/webshop/stylesheets/base.css" charset="utf-8">
</head>
<body>
<!--Create header-->
    <div class="header">
<!--        Create the navigation bar-->
        <div class="nav">
            <ul>
                <li class="nav-button"><a href="/webshop/webshop/home.php">Home</a></li>
                <li class="nav-button"><a href="/webshop/webshop/cards.php">Graphics cards</a></li>
<!--                <li class="nav-button"><a href="/webshop/webshop/cooling.php">Cooling systems</a></li>-->
<!--                Hover dropdown section-->
                <div class="contact">
                    <li class="nav-contact"><a href="/webshop/webshop/contact.php">Contact</a></li>
                    <div class="contact-content">
                        <a href="/webshop/webshop/contact.php#repair">Reparation</a>
                        <a href="/webshop/webshop/contact.php#newsletter">Newsletter</a>
                        <a href="/webshop/webshop/contact.php#feedback">Feedback</a>
                    </div>
                </div>
            </ul>
            <div class="login-register">
<!--                Check if cookie 'currentUser' is set-->
            <?php if( !$_COOKIE[ 'currentUser' ] ): ?>
<!--                Show this <a> tag if cookie 'currentUser' is not set (AKA: if there is no one logged in)-->
                <a href="/webshop/webshop/account.php">Login or register</a>
            <?php else:  ?>
<!--                Show this <span> and <a> tag if cookie 'currentUser' is set (AKA: if someone is logged in)-->
                <span>Welcome <a href="/webshop/webshop/cart.php"><?php echo $_COOKIE[ 'currentUser' ] ?></a> -</span>
                <a href="/webshop/webshop/actions/logout.php">Logout</a>
            <?php endif; ?>
            </div>
        </div>
<!--        Display the title of the website-->
        <div class="title">
            Frame Upgrade
        </div>
    </div>
</body>
</html>
