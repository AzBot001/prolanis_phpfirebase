<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$factory = (new Factory())
->withServiceAccount('prolanisapp-firebase-adminsdk-iwlk9-c05ce08ab0.json')
->withDatabaseUri('https://prolanisapp-default-rtdb.firebaseio.com/');
$database = $factory->createDatabase();


?>
