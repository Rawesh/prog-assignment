
<main>
	
	<header>
		<h1>Authors</h1>
	</header>

	<nav><a href="<?= URL?> books/index">Show all Books</a></nav>

	<table>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Zipcode</th>
			<th>City</th>
			<th>Books</th>
			<th>option</th>
		</tr>

		<?php foreach ($authors as $author) { ?>
		<tr>
			<td><?=$author['author_name']?></td>
			<td><?=$author['author_address']?></td>
			<td><?=$author['author_zipcode']?></td>
			<td><?=$author['author_city']?></td>
			<td><a href="<?= URL . "books/read/" . $author['author_id']; ?>">Show</a></td>
			<td><a href="<?= URL . "authors/read/" . $author['author_id']; ?>">INFO</a></td>
		</tr>
		<?php } ?>
	</table>
	<footer>&copy; by Da Vinci College</footer>
</main>
