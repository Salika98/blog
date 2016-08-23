<?php $this->title = 'Login'; ?>

<form id="specialform" method="post">
<h1><?= htmlspecialchars($this->title) ?></h1>
	<div>Username: <input type="text" name="username"></div>
	<div>Password: <input type="password" name="password"></div>
	<div><input type="submit" class="myButton" name="login" value="go"></div>
</form>