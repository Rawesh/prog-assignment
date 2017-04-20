<?php

require(ROOT . "model/booksModel.php");
require(ROOT . "model/authorsModel.php");

function index()
{
	render("books/index", array("books" => getAllbooks()
		));
}

function read($id)
{
	render("books/read", array("books" => getAllBooksByAuthor($id)
		));
}

function create()
{
	render("books/create", array(
							"authors" => getAllAuthors()
							));
}

function createSave()
{	

	if (!createBook()) {
		header("Location:" . URL . "error/index");
		exit(); 
	}

	header("Location:" . URL . "books/index");
}

function delete($id)
{
	if (deleteBook($id) == true) {
		header("Location:" . URL . "books/index");
		exit(); 
	}
}

function edit($id)
{
	render("books/edit",array("books" => getBook($id),
							"authors" => getAllAuthors($id)));
}

function editSave()
{
	if (editBook() == true) {
		header("Location:" . URL . "books/index");
		exit(); 
	}	
}


