<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$places_db = $client -> cinema -> fool_1;

$places_db -> drop();
for ($show_id = 1; $show_id < 16; $show_id++)
	for ($i = 1; $i <= 72; $i++) {
		$places_db -> insertOne(array('place' => $i, 'taken' => false, 'show_id' => $show_id));
	}

echo 0
?>
