<link rel="stylesheet" type="text/css" href="<?=APP_ROOT?>/content/styles.css">
<main>
	<table>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Content</th>
			<th>Date</th>
			<th>Author</th>
			<th>Action</th>
		</tr>
	<?php foreach ($this->posts as $post) : ?>

		<tr>
				<td><?=htmlspecialchars($post['id'])?></td>
				<td><?=htmlspecialchars($post['title'])?></td>
				<td><?=cutLongText($post['content'])?></td>
				<td><?=htmlspecialchars($post['date'])?></td>
				<td><?=htmlspecialchars($post['full_name'])?></td>
				<td>
				<a href="<?=APP_ROOT?>/posts/edit/<?=$post['id']?>">edit</a>
				<a href="<?=APP_ROOT?>/posts/delete/<?=$post['id']?>">delete</a>
				</td>
		</tr>
	<?php endforeach ?>	
	</table>
</main>
