<?php if ($_SESSION['user']) : ?>

<header>
	<h1><a href="post.php">Post</a> Something</h1>
</header>

<div class="container">
	<aside>
		<h3><?php echo $userInfo['name'] ?></h3>

		<ul>
			<?php foreach($followersFollowersArray as $pendingFollower) : ?>
				<li>
					<a href="profile.php?username=<?= $pendingFollower['username']; ?>"><?= $pendingFollower['name']; ?></a> wants to follow you,
					you can either <a href="accept.php?pendingID=<?= $pendingFollower['id']; ?>">accept</a> or <a href="deny.php?pendingID=<?= $pendingFollower['id']; ?>">deny</a> the request.
				</li>
			<?php endforeach; ?>
		</ul>
	</aside>

	<main>
			<h3>News Feed</h3>

			<?php foreach($publicPosts as $post) : ?>
				<div class="media">
					<div class="media__figure">
						<?= $post['author']; ?>
					</div>
					<div class="media__body">
						<?= $post['message']; ?>
					</div>
				</div>
			<?php endforeach; ?>
	</main>
</div>

<?php else : ?>

<header>
	<h1>Hello, Visitor!</h1>
</header>

<div class="container">
	<main>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</main>
</div>

<?php endif; ?>
