<h1>ADD Book</h1>
<form action="<?=URL?>books/createSave" method="post">
<label>Titel</label>
<br>
<input type="text" name="book_title">
<br>
<label>Publisher</label>
<br>
<input type="text" name="book_publisher">
<br>
<label>Summary</label>
<br>
<input type="text" name="book_summary">
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