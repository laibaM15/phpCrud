<?php
require 'vendor/autoload.php'; // Include Composer's autoloader

use MongoDB\Client;

$client = new Client("mongodb+srv://Test_Username:xyz@cluster0.x4ixm6x.mongodb.net/");
$db = $client->selectDatabase("Dictionary.somali-somali");
