<header>
	<h1>Express Yourself</h1>
</header>

<div class="container">
	<main>
		<div class="centered">
			<form method='post' action='post.php' autocomplete='off'>
				<input type="text" name="message" placeholder="Message">
				<br>
				<select name="visible">
					<option value="2">Public</option>
					<option value="1">Followers</option>
					<option value="0">Private</option>
				</select>
				<br><br>
				<button type="submit" name="post">Make a Post</button>
			</form>
		</div>
	</main>
</div>
