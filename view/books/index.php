<main>
	
	<header>
		<h1>Books</h1>
		<h3>Ernest Cline</h3>
	</header>
	<nav>
		<ul>
			<li><a href="index.html"><h4>Home</h4></a></li>
			<li><a href="<?=URL?>books/create"><h4>Add book</h4></a></li>
		</ul>
	</nav>
	<table>
		<tr>
			<th>Title</th>
			<th>Publisher</th>
			<th>Summary</th>
			<th colspan="3">Action</th>
		</tr>

		<?php foreach ($books as $book) { ?>
		
		<tr>	
			<td nowrap="true"><?=$book['book_title']?></td>
			<td nowrap="true"><?=$book['book_publisher']?></td>
			<td><?=$book['book_summary']?></td>
			<td><?=$book['author_name']?></td>
			<td><a href="<?= URL?>books/read/<?=$book['author_id']?>">INFO</a></td>
			<td><a href="<?= URL?>books/edit/<?=$book['book_id']?>/<?=$book['author_id']?>">EDIT</a></td>
			<td><a href="<?= URL?>books/delete/<?=$book['author_id']?>">DELETE</a></td>
		</tr>
		<?php } ?>

	</table>
	<footer>&copy; by Da Vinci College</footer>
</main>