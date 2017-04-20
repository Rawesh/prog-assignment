 <?php

 function getAllAuthors()
 {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM authors";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;
}