<?php if ($_SESSION['user'] == $alumni['username']) : ?>

<header>
	<h1><?= $alumni['name']; ?></h1>
</header>

<main>
	<div class="container">
		<h1>All My Posts</h1>

		<ul>
			<?php foreach($userPosts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</div>
</main>

<?php else : ?>

<header>
	<h1><?= $alumni['name']; ?> - <a href="#">follow</a></h1>
</header>

<main>
	<div class="container">
		<h1>Posts</h1>

		<ul>
			<?php foreach($sharedPosts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</div>
</main>

<?php endif; ?>
