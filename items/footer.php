<head>
    <link rel="stylesheet" href="/webshop/webshop/stylesheets/base.css" charset="utf-8">
</head>
<!--Create footer with a registration form-->
<div class="footer">
    <div class="newsletter">
        <legend>Create an account:</legend>
        <form action="/webshop/webshop/actions/register.php" method="post">
            <label for="email">E-mail address:</label>
            <input class="input-field" required type="email" id="email" name="email" placeholder="Someone@example.com*" />
            <label for="password">Password:</label>
            <input class="input-field" required type="password" id="password" name="password" placeholder="Password*" />
            <label for="password2">Repeat password:</label>
            <input class="input-field" required type="password" id="password2" name="password2" placeholder="Password*" />
            <label for="name">Full name:</label>
            <input class="input-field" required type="text" id="name" name="name" placeholder="Scott Sterling*" />
            <label for="country">Country:</label>
            <input class="input-field" type="text" id="country" name="country" placeholder="Holland" />
            <label for="zipcode">Zipcode:</label>
            <input class="input-field" type="text" id="zipcode" name="zipcode" placeholder="1234AA" />
            <label for="city">City:</label>
            <input class="input-field" type="text" id="city" name="city" placeholder="City" />
            <label for="address">Address:</label>
            <input class="input-field" type="text" id="address" name="address" placeholder="Examplestreet 101 (A)" />
            <input class="input-field" type="submit" id="submit" name="submit" value="Register" />
        </form>
<!--        Check if the passwords match with JavaScript-->
        <script type="text/javascript">
            var password1 = document.getElementById( "password" ),
                password2 = document.getElementById( "password2" );

            function validatePassword() {
                if( password.value != password2.value ) {
                    password2.setCustomValidity( "Passwods do not match" );
                } else {
                    password2.setCustomValidity( "" );
                }
            }
            password.onchange = validatePassword;
            password2.onkeyup = validatePassword;
        </script>
    </div>
<!--    Put some information besides the registration form-->
    <div class="info">
        <h2>Info</h2>
        <p>
            If you want to receive the newsletter, you simply have to create an account. New accounts are automatically signed up for our newsletter. If you'd like to cancel the newsletter, you can do so by contacting one of our staff members.
            <br>
            <br>
            Do you already have an account but not the newsletter yet? You can contact our staff about it and they will make sure you will also get to feel the great experience that is in our newsletter.
            <br>
            <br>
            <br>
            <br>
            <b>Frame Upgrade</b>
            <br>
            Warehouse Groen van Prinsterersingel 52
            <br>
            2805 GOUDA
            <div class="legal">
                Copyright &copy; 2016 Chiel B. V. All Rights Reserved.
            </div>
        </p>
    </div>
</div>