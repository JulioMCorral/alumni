<?php if (isset($_SESSION['user'])) : ?>

<nav>
	<ul>
		<li><a href="index.php">News Feed</a></li>
		<li><a href="#">Store</a></li>
		<li><a href="user.php">Alumni</a></li>
		<li><a href="profile.php?username=<?php echo $_SESSION['user']; ?>">Profile</a></li>
		<li><a href="logout.php">Log Out</a></li>
	</ul>
</nav>

<?php else : ?>

<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">Store</a></li>
		<li><a href="user.php">Alumni</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="authenticate.php">Sign In</a></li>
	</ul>
</nav>

<?php endif; ?>
