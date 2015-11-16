<?php if ($_SESSION['user']) : ?>

<header>
	<h1><a href="post.php">Post</a> Something</h1>
</header>

<main>
	<div class="container">
		<h3>Public Posts</h3>

		<ul>
			<?php foreach($publicPosts as $post) : ?>
				<li><?= $post['message']; ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</main>

<main>
	<div class="container">
		<ul>
			<?php foreach($followersFollowersArray as $pendingFollower) : ?>
				<li>
					<a href="profile.php?username=<?= $pendingFollower['username']; ?>"><?= $pendingFollower['name']; ?></a> wants to follow you,
					you can either <a href="accept.php?pendingID=<?= $pendingFollower['id']; ?>">accept</a> or <a href="deny.php?pendingID=<?= $pendingFollower['id']; ?>">deny</a> the request.
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</main>

<?php else : ?>

<header>
	<h1>Hello, Visitor!</h1>
</header>

<main>
	<div class="container">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</main>

<?php endif; ?>
