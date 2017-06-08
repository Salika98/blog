<?php $this->title = 'Register'; ?>
<link rel="stylesheet" type="text/css" href="<?=APP_ROOT?>/content/styles.css">
<form id="specialform" method="post">
	<h1><?= htmlspecialchars($this->title) ?></h1>
	<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username: <input type="text" name="username"></div>
	<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password: <input type="password" name="password"></div>
	<div>Password confirm: <input type="password" name="password_confirm"></div>
	<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full name: <input type="text" name="full_name"></div>
	<div><input type="submit" class="myButton" name="register" value="submit"></div>
	
</form>
