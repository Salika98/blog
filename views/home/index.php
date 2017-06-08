<?php $this->title = 'home'; ?>

<header id="logo">
	<link rel="stylesheet" type="text/css" href="<?=APP_ROOT?>/content/styles.css">
	<div>
		<a href="<?=APP_ROOT?>/users/about"><img src="<?=APP_ROOT?>/content/images/girl.gif" height=200px; ></a>
		<h1 id="retro">Just another white girl's blog</h1>
	</div>
</header>

<aside>
	<h2>Recent posts: </h2>
	<?php foreach ($this->postsSidebar as $post) : ?>
		<a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?=htmlentities($post['title'])?></a><br>
	<?php endforeach ?>	
</aside>


<main id="special">
	<?php foreach ($this->posts as $post) : ?>
		<h2><?=htmlentities($post['title'])?></h2>
		<p>
		<i>Posted on </i>
		<?=htmlentities($post['date'])?>
		<i>by </i>
		<?=htmlentities($post['full_name'])?>
		</p>
		<p><?=$post['content']?></p>
		<br>
	<?php endforeach ?>	
</main>
