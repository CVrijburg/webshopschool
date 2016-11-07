<?php

//Clear the cookie 'cart'
setcookie( "cart", null, -1, "/" );
unset( $_COOKIE[ 'cart' ] );

$return = "Shopping cart has been successfully cleared";
echo ( $return );
exit;