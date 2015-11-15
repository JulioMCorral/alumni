<header>
	<h1>List of Alumni</h1>
</header>

<main>
	<div class="container">
		<ol>
			<?php foreach($alumnis as $alumni) : ?>
				<li>
					<a href="profile.php?username=<?= $alumni['username']; ?>">
						<?= $alumni['name']; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ol>
	</div>
</main>
