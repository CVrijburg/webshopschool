<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheets/base.css" charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="pictures/favicon.ico"/>
    <meta charset="utf-8">
    <title>Webshop - account</title>
    <script type="text/javascript">
        // Form validation code will come here.
        function validate() {
            if ( document.registration.Name.value == "" ) {
                alert( "Please provide your name!" );
                document.registration.Name.focus();
                return false;
            }

            if ( document.registration.email.value == "" ) {
                alert( "Please provide your Email!" );
                document.registration.email.focus();
                return false;
            }

            if ( document.registration.zipcode.value == "" ||
                isNaN( document.registration.zipcode.value ) ||
                document.registration.zipcode.value.length != 6) {
                alert( "Please provide a zip in the format 1234AA." );
                document.registration.zipcode.focus();
                return false;
            }

            if ( document.registration.country.value == "-1" ) {
                alert( "Please provide your country!" );
                return false;
            }
            return ( true );
        }
    </script>
</head>
<body>
<div class="account">
<!--    Add the page 'header.php' to this page-->
    <?php include 'items/header.php' ?>
    <div class="content">
        <div class="subcontent1">
<!--            Create the form to let users register-->
            <div class="register">
                <form action="actions/register.php" method="post" name="registration">
                    <h2>Create an account:</h2>
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
                <script type="text/javascript">

//                Check if passwords match

                    var password1 = document.getElementById( "password" ),
                    password2 = document.getElementById( "password2" );

                    function validatePassword() {
                        if( password.value != password2.value ) {
                            password2.setCustomValidity( "Passwords do not match" );
                        } else {
                            password2.setCustomValidity( "" );
                        }
                    }

                    password.onchange = validatePassword;
                    password2.onkeyup = validatePassword;

//                Check if zipcode is valid

                    var zipcode = document.getElementById( "zipcode" );
                    function validateZipcode() {
                        if ( zipcode.value.length != 6 ) {
                            zipcode.setCustomValidity( "Please provide a six-character zipcode" )
                        } else {
                            zipcode.setCustomValidity( "" );
                        }
                    }

                    zipcode.onchange = validateZipcode;
                </script>
            </div>
        </div>
        <div class="subcontent2">
<!--            Create the login form-->
            <div class="login">
                <form action="actions/login.php" method="post">
                    <h2>Login with an account:</h2>
                    <label for="email">E-mailadres:</label>
                    <input class="input-field" required type="email" id="email" name="email" placeholder="Someone@example.com*" />
                    <label for="email">Password:</label>
                    <input class="input-field" required type="password" id="password" name="password" placeholder="Password*" />
                    <input class="input-field" type="submit" id="submit" name="submit" value="Login" />
                </form>
            </div>
        </div>
        <div class="subcontent3">
<!--            Create the notice at the bottom of the login form-->
            <h3><b><i>Take care!</i></b></h3>
            <p>
                In this point of time, it is impossible to recover your personal lost login data. We are currently doing the best we can to make a recovery system.
                <br>
                In case you do lose your login data, we strongly recommend creating a new account.
            </p>
        </div>
    </div>
</div>
</body>
</html>
