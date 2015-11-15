<header>
	<h1>Posting</h1>
</header>

<main>
	<div class="centered">
		<form method='post' action='post.php' autocomplete='off'>
			<input type="text" name="message" placeholder="Message">
			<br>
			<select name="visible">
				<option value="1">Public</option>
				<option value="0">Private</option>
			</select>
			<br><br>
			<button type="submit" name="authForm">Make a Post</button>
		</form>
	</div>
</main>
