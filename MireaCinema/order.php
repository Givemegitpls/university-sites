<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$places_db = $client -> cinema -> fool_1;

$input = json_decode(file_get_contents("php://input"), true);
$places = $input['places'];
$show_id = $input['show_id'];
if ($places != null) {
	foreach ($places as $place_num) {
		$places_db -> updateOne(array('place' => $place_num, 'show_id' => $show_id), array('$set' => array('taken' => true)));
	}
}

echo 0
?>
