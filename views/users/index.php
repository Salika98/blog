<link rel="stylesheet" type="text/css" href="<?=APP_ROOT?>/content/styles.css">
<main id="specialmain">
	<table align="center">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Full name</th>
		</tr>
	<?php foreach ($this->users as $user) :?>

		<tr>
			<td><?= $user['id'] ?></td>
			<td><?= htmlspecialchars($user['username']) ?></td>
			<td><?= htmlspecialchars($user['full_name']) ?></td>
		</tr>
	<?php endforeach ?>	
	</table>
</main>
