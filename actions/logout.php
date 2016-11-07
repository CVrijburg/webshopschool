<?php

//Clear cookie 'currenUser'
setcookie( "currentUser", null, -1, "/" );
unset( $_COOKIE[ "currentUser" ] );
//Navigate to 'home.php'
header( "Location: ../home.php" );