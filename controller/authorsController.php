<?php

require(ROOT . "model/authorsModel.php");

function index()
{
	render("authors/index", array("authors" => getAllAuthors()
		));
}

function read($id)
{
	render("authors/read", array("authors" => getAuthor($id)));
}





