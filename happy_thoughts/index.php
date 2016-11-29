<?php
require('../models/database.php');
require('../models/thoughts_db.php');

if (isset($_POST['action'])) {
	$action = $_POST['action'];
} else if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = 'list_thoughts';
}

if ($action == 'list_thoughts') {

	$thoughts = get_thoughts();
	$thoughts2 = get_thoughts();
	$thoughts3 = get_thoughts();
	$thought = get_thought($people);


	include('thought_list.php');
} else if ($action == 'update_thought') {

	$thoughts = get_thoughts();
	$thoughts2 = get_thoughts();
	$thoughts3 = get_thoughts();
	$thought = get_thought($thought_id);


	include('thought_list.php');
}
 else if ($action == 'add_thought') {
	$author = $_POST['author'];
	$date = $_POST['date'];
	$thought = $_POST['thought'];


	if (empty($author) || empty($date) || empty($thought)) {
		echo '<script language="javascript">';
		echo "alert('You must fill out every field');";
		echo '</script>';
	} else {
		add_thought($author, $date, $thought);

	}


	$thoughts = get_thoughts();
	$thoughts2 = get_thoughts();
	$thoughts3 = get_thoughts();
	$thought = get_thought($thought);


	include('thought_list.php');

} else if ($action == 'delete_thought'){
	$thought_id = $_POST['thought_id'];

	delete_thought($thought_id);

	$thoughts = get_thoughts();
	$thoughts2 = get_thoughts();
	$thoughts3 = get_thoughts();
	$thought = get_thought($thought_id);


	include('thought_list.php');
}

?>
