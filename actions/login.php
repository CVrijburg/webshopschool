<?php

//Create '$connection' so that it can access the functions from 'DatabaseAPI.php'
require_once("../DatabaseAPI.php");
$connection = new DatabaseAPI();

//Initialize '$user' as a new empty class and fill with user-inserted variables
$user = new stdClass();
$user->email = $_POST[ 'email' ];
$user->password = $_POST[ 'password' ];

$connection->loginUser( $user );

$connection->closeConnection();

//Navigate to 'home.php'
header( "Location: ../home.php" );