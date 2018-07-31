<?php if ($_POST["text"]) {
	$myfile = fopen("/tmp/".uniqid().".printy", 'w') or die("Can't create /tmp/".uniqid().".printy");
	fwrite($myfile, $_POST["text"]);
	fclose($myfile);
} ?>
<html>
	<body>
		<form action="<?php print $_SERVER[REQUEST_URI]; ?>" method="post">
			<textarea name="text" cols="30" rows="20" wrap="hard" style="font-family: monospace,monospace; overflow: hidden"><?php echo htmlspecialchars($_POST["text"]); ?></textarea><br />
			<input type="submit" value="Printy!">
		</form>
	</body>
</html>
