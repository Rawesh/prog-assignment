 <?php

 function getAllbooks()
 {
	$db = openDatabaseConnection();

	$sql = "SELECT `books`.`book_id`,`books`.`book_title`,`books`.`book_publisher`,`books`.`book_summary`,
				   `authors`.`author_id`,`authors`.`author_name`
			FROM books
			INNER JOIN authors ON `books`.`author_id` = `authors`.`author_id`" ;
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;
}

 function getAllBooksByAuthor($id)
 {
	$db = openDatabaseConnection();

	$sql = "SELECT `books`.`book_title`,`books`.`book_publisher`,`books`.`book_summary`,
				   `authors`.`author_id`,`authors`.`author_name`
			FROM books
			INNER JOIN authors ON `books`.`author_id` = `authors`.`author_id`
			WHERE `books`.`author_id` = :id" ;
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));

	return $query->fetchAll();

	$db = null;
}

function getBook($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books WHERE author_id = :author_id" ;
	$query = $db->prepare($sql);
	$query->execute(array(":author_id" => $id));

	return $query->fetch();

	$db = null;
}

function createBook()
{

	$db = openDatabaseConnection();

	$title = isset($_POST['book_title']) ? $_POST['book_title'] : null;
	$publisher = isset($_POST['book_publisher']) ? $_POST['book_publisher'] : null;
	$summary = isset($_POST['book_summary']) ? $_POST['book_summary'] : null;
	$author_id = isset($_POST['author_id']) ? $_POST['author_id'] : null;

	if (strlen($title) == 0 || strlen($publisher) == 0 || strlen($summary) == 0) {
		return false;
	}
	
	$sql = "INSERT INTO books (book_title, book_publisher, book_summary, author_id)
			VALUES (:title, :publisher, :summary, :author_id)";

	$query = $db->prepare($sql);

	$query->execute(array(
					":title" =>$title,
					":publisher" => $publisher,
					":summary" => $summary,
					":author_id" => $author_id));

	$db = null;

	return true;

}

function deleteBook($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM books WHERE author_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
			":id" => $id));

	$db = null;

	return true;
}

function editBook()
{
	$db = openDatabaseConnection();

	$sql = "UPDATE books
			SET book_title = :title, book_publisher = :publisher, book_summary = :summary
			WHERE author_id = :author_id";
	
	$query = $db->prepare($sql);
	$query->execute(array(
			":title" => $_POST['book_title'],
			":publisher" => $_POST['book_publisher'],
			":summary" => $_POST['book_summary'],
			":author_id" => $_POST['author_id']
			));

	$db = null;

	return true;
}
