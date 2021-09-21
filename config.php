<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('830260583315-195li5qu7gpga8hvsfdnntadst274mcq.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('0OS9dpkybswdo1yQjo62Jjdg');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/NEWS/sign_in.php');

// to get the email and profile
$google_client->addScope('email');

$google_client->addScope('profile');
?>