<?php if ($_SESSION['user'] == $user['username']) : ?>

<header>
	<h1><?= $user['name']; ?></h1>
</header>

<main>
	<div class="container">
		<h3>All My Posts</h3>

		<ul>
			<?php foreach($posts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</div>
</main>

<?php elseif ($_SESSION['user'] != $user['username'] && $pendingStatus['approved'] == 2) : ?>

<header>
	<h1><?= $user['name']; ?> - Pending <a href="unfollow.php?unfollow=<?= $user['id']; ?>&username=<?= $user['username']; ?>">(Cancel)</a></h1>
</header>

<main>
	<div class="container">
		<h3>Posts</h3>

		<ul>
			<?php foreach($publicPosts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</div>
</main>

<?php elseif ($_SESSION['user'] != $user['username'] && $pendingStatus['approved'] == 1) : ?>

<header>
	<h1><?= $user['name']; ?> - <a href="unfollow.php?unfollow=<?= $user['id']; ?>&username=<?= $user['username']; ?>">unfollow</a></h1>
</header>

<main>
	<div class="container">
		<h3>Posts</h3>

		<ul>
			<?php foreach($publicPosts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</div>
</main>

<?php else : ?>

<header>
	<h1><?= $user['name']; ?> - <a href="follow.php?follow=<?= $user['id']; ?>&username=<?= $user['username']; ?>">follow</a></h1>
</header>

<main>
	<div class="container">
		<h3>Posts</h3>

		<ul>
			<?php foreach($publicPosts as $post) : ?>
				<li><?= $post['message']; ?> <em>- <?= $post['visible']; ?></em></li>
			<?php endforeach; ?>
		</ul>
	</div>
</main>

<?php endif; ?>
