<header>
	<h1>Alumni</h1>
</header>

<div class="container">
	<main>
		<ol>
			<?php foreach($users as $user) : ?>
				<?php if($_SESSION['user'] == $user['username']) : continue ?>
				<?php endif; ?>
				<li>
					<a href="profile.php?username=<?= $user['username']; ?>">
						<?= $user['name']; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ol>
	</main>
</div>
