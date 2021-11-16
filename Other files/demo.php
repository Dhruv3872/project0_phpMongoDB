<?php
require 'vendor/autoload.php';
//$client = new MongoDB\Client("mongodb://localhost:27017");
$client = new MongoDB\Client;
$companydb = $client->companydb;
$result1 = $companydb->createCollection('emp1');
var_dump($result1);
?>