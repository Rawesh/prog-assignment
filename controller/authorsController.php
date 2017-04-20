<?php

require(ROOT . "model/authorsModel.php");

function index()
{
	render("authors/index", array("authors" => getAllAuthors()
		));
}



