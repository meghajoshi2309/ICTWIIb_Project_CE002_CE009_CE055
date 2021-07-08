<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('678015958222-nbf278fird85i85104cqgfdqa6dd0qb8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('nz-qf6Qqa1iaYhfiFQL3IUae');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/php12/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>  