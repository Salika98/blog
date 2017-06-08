<?php $this->title = 'Create a new post'; ?>
<link rel="stylesheet" type="text/css" href="<?=APP_ROOT?>/content/styles.css">
<form id="specialform" method="post">
	<h1><?=htmlspecialchars($this->title)?></h1>
	<div>Title: </div>
	<input type="text" name="post_title">
	<div>Content: </div>
	<textarea rows="10" cols="60" name="post_content"></textarea>
	<div><input class="myButton" type="submit" value="Create">
		 <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>
