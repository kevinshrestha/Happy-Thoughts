<?php
	function get_thoughts(){
		global $db;
		$query = "SELECT * FROM happyThoughts ORDER BY thoughtID";
		$thoughts = $db->query($query);
		return $thoughts;
	}
	function get_thought($thought_id){
		global $db;
		$query = "SELECT * FROM happyThoughts WHERE thoughtID = '$thought_id'";
		$thought = $db->query($query);
		$thought = $thought->fetch();
		return $thought;
	}
	function add_thought($author, $date, $thought){
		global $db;
		$query = "INSERT INTO happyThoughts(author, date, thought) VALUES('$author','$date','$thought')";
		$db->exec($query);
	}
	function delete_thought($thought_id){
		global $db;
		$query = "DELETE FROM happyThoughts WHERE thoughtID = '$thought_id'";
		$db->exec($query);
	}
	function update_thought($thought_id, $author, $date, $thought){
		global $db;
		$query = "UPDATE happyThoughts SET author='$author', date='$date', thought='$thought' WHERE thoughtID = '$thought_id'";
		$db->exec($query);
	}
?>
