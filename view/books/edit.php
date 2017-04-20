<h1>EditBook</h1>



<form action="<?=URL?>books/editSave" method="post">
<input type="hidden" name="book_id" value="<?=$books['book_id']?>">
<label>Titel</label>
<br>
<input type="text" name="book_title" value="<?=$books['book_title']?>">
<br>
<label>Publisher</label>
<br>
<input type="text" name="book_publisher" value="<?=$books['book_publisher']?>">
<br>
<label>Summary</label>
<br>
<input type="text" name="book_summary" value="<?=$books['book_summary']?>">
<br>
<select name="author_id">
	<?php foreach ($authors as $author) { ?>
		<option value="<?=$author['author_id'] ?>">
		<?=$author['author_name']?>
		</option>							
	<?php } ?>
</select>
<input type="submit" value="submit">
</form>