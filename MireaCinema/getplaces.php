<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$places_db = $client -> cinema -> fool_1;

$input = json_decode(file_get_contents("php://input"), true);
$show_id = $input['show_id'];
$taken_doc = $places_db -> find(array('taken' => true, 'show_id' => $show_id));

$response = array();
$response['taken_num'] = array();
foreach ($taken_doc as $place) {
	array_push($response['taken_num'], $place["place"]);
}

echo json_encode($response)
?>
