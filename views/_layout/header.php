<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/girl.gif" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header id="header">
    <a href="<?=APP_ROOT?>/">Home</a>
    <a href="<?=APP_ROOT?>/users/about">About</a>
    <?php if ($this->isLoggedIn) : ?>
        <?php if ($_SESSION['username'] == 'zori') : ?>
        <a href="<?=APP_ROOT?>/posts">Posts</a>
        <a href="<?=APP_ROOT?>/posts/create">Create Post</a>
        <a href="<?=APP_ROOT?>/users">Users</a>
        <?php endif; ?>

    <?php else : ?>
        <a href="<?=APP_ROOT?>/users/login">Login</a>
        <a href="<?=APP_ROOT?>/users/register">Register</a>
    <?php endif; ?>


    <?php if ($this->isLoggedIn) : ?>
        <div id="logged-in-info">
            <form method="post" action="<?=APP_ROOT?>/users/logout">
            Welcome, <b><?=htmlspecialchars($_SESSION['username'])?></b></span>
                <input type="submit" value="Logout"/>
            </form>

        </div>
    <?php endif; ?>

</header>

<?php require_once('show-notify-messages.php'); ?>