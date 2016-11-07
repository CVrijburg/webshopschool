<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheets/base.css" charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="pictures/favicon.ico"/>
    <meta charset="utf-8">
    <title>Webshop - contact</title>
</head>
<body>
<div class="contact-php">
<!--    Add the page 'header.php' to this page-->
    <?php include 'items/header.php' ?>
<!--    Display all the general information on this page-->
    <div class="content">
        <div class="content-header">
            <h2>On this page you can find all the information you may need to get in touch with us.</h2>
            <p>
                Always make sure you keep the original packaging safe. Whenever you have to return something to us or the original manufacturer, it is best to re-use the original packaging. You will also be judged more easily and be more likely to receive a return.
            </p>
        </div>
        <div class="content-block">
            <h3>Questions</h3>
            <p>
                Do you have a question about one of our products? Do you have a question about a product that is not ordered at our store but is in our offer? Then do not hesitate to ask us for advice / help! You can call and mail us 24/7 because we think it is important to get help as fast as possible when you need it.
            </p>
        </div>
        <div class="content-block">
            <h3 id="repair">Reparation</h3>
            <p>
                In case one of our fantastic products breaks, stops working correctly or does not function as expected, you may always call or email one of our staff members.
                <br>
                Did you not order in our store but is it part of our offer? We will help you with those products too! Do, however, include this information in your email / phone call please.
            </p>
        </div>
        <div class="content-block">
            <h3 id="feedback">Feedback</h3>
            <p>
                We here at Frame Upgrade are taking our costumers seriously. We are also always looking to improve ourselves. And we made a solution for both subjects at once. A feedback form. We ask <i>you</i> to fill our form and give us the opportunity to improve.
            </p>
            <form action="" method="post">
            <textarea class="feedback-text" id="signup" name="feedback" rows="10" cols="150" placeholder="Send us your feedback"></textarea>
            <input class="feedback-submit" type="submit" id="submit" name="submit" value="Send" />
            </form>
        </div>
        <div class="content-block">
            <h3 id="newsletter">Newsletter</h3>
            <p>
                Do you want to keep up with the latest news and offers from Frame Upgrade? Then do not miss a thing by signing up for our news letter! When you sign up you will receive the following;
            </p>
            <ul>
                <li>News about Frame Upgrade,</li>
                <li>Messages when there are new products in our store,</li>
                <li>Messages when items go on sale.</li>
            </ul>
            <p>
                This way you never have to miss anything from Frame Upgrade ever again!
            </p>
            <div id="button">
                <a href="#signup">Sign up</a>
            </div>
        </div>
    </div>
<!--    Add the page 'footer.php' to this page-->
    <?php include 'items/footer.php' ?>
</div>
</body>
</html>
