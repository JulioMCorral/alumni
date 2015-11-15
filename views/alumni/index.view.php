<header>
	<h1>List of Alumni</h1>
</header>

<div class="container">
	<main>
		<ol>
			<?php foreach($alumnis as $alumni) : ?>
				<li>
					<a href="profile.php?username=<?= $alumni['username']; ?>">
						<?= $alumni['name']; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ol>
	</main>
</div>
