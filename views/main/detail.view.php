<?php if ($_SESSION['user'] == $user['username']) : ?>

<header>
	<h1><?= $user['name']; ?></h1>
</header>

<div class="container">
	<main>
		<h3>All My Posts</h3>

		<ul>
			<?php foreach($posts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</main>
</div>

<?php elseif ($_SESSION['user'] != $user['username'] && $pendingStatus['approved'] == 2) : ?>

<header>
	<h1><?= $user['name']; ?> - Pending <a href="unfollow.php?unfollow=<?= $user['id']; ?>&username=<?= $user['username']; ?>">(Cancel)</a></h1>
</header>

<div class="container">
	<main>
		<h3>Posts</h3>

		<ul>
			<?php foreach($publicPosts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</main>
</div>

<?php elseif ($_SESSION['user'] != $user['username'] && $pendingStatus['approved'] == 1) : ?>

<header>
	<h1><?= $user['name']; ?> - <a href="unfollow.php?unfollow=<?= $user['id']; ?>&username=<?= $user['username']; ?>">unfollow</a></h1>
</header>

<div class="container">
	<main>
		<h3>Posts</h3>

		<ul>
			<?php foreach($publicPosts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</main>
</div>

<?php else : ?>

<header>
	<h1><?= $user['name']; ?> - <a href="follow.php?follow=<?= $user['id']; ?>&username=<?= $user['username']; ?>">follow</a></h1>
</header>

<div class="container">
	<main>
		<h3>Posts</h3>

		<ul>
			<?php foreach($publicPosts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</main>
</div>

<?php endif; ?>
