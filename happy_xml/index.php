<?php
if (isset($_POST['action'])) {
  $action = $_POST['action'];
} else if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'list_xml_thoughts';
}

if ($action == 'list_xml_thoughts') {

  $xml=simplexml_load_file("../XML/happyThoughts.xml") or die("Error: Cannot create object");

  
  include('display_xml.php');
}
?>
