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

function getAuthor($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM authors WHERE author_id = :author_id";

	$query = $db->prepare($sql);
	$query->execute(array(":author_id" => $id));

	return $query->fetch();

	$db = null;
}