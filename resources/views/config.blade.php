<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once '/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('885004805547-j20v9jsmabkqgjl6quid3pvdog8do5sr.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('LF7qpTSwgPSU3xSYg9xEnWWh');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://127.0.0.1:8000/login');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>