<head>INFO</head>

	<nav>
		<ul>
			<li>
				<a href="<?=URL?>authors/index">
					<button>
						Home
					</button>
				</a>
			</li>
		</ul>	
	</nav>

	<article>
		<table>
			<tr>
				<th>authorName</th>
				<th>bookTitle</th>
				<th>bookPublisher</th>
				<th>bookSummary</th>
			</tr>
			<?php foreach ($books as $book) { ?>
			<tr>
				<td><?= $book['author_name'];?></td>
			 	<td><?= $book['book_title'];?></td>
				<td><?= $book['book_publisher'];?></td>
				<td><?= $book['book_summary'];?></td>
			</tr>
			<?php } ?>
		</table>		
	</article>