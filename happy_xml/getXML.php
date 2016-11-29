<?php
$happyThoughts = new stdClass();
foreach ($xml->thought as $thought) {
	$arrayString += "array('";
	$arrayString += $xml->thought['id'] . "', '";
	$arrayString += $xml->thought['author'] . "', '";
	$arrayString += $xml->thought . "'),";
}
$happyThoughts->label = "all of the thoughts";
$happyThoughts->data = array($arrayString);

echo json_encode($happyThoughts);
?>
