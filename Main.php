<!doctype html>
<html>
<head>
	<!-- <link href="MainMenu.css" type="text/css" rel="stylesheet"/> -->
	<meta charset="utf-8">
	<title>main</title>
</head>
<body>
	<?php
		include("MainMenu.php");
	?>
	<div class="div_css">
		<h1 class="div_css_h">Welcome to The Cal State LA Book Exchange</h1>
		<p>Would you like to:</p>
		<a class="btn btn-primary" href="shopping.php?<?php print $name_email; ?>">Buy a book</a><br/><br/>
		<a class="btn btn-primary" href="selling.php?<?php print $name_email; ?>">Sell a book</a><br/><br/>
		<a class="btn btn-primary" href="forum.php?<?php print $name_email; ?>">Talk on the forum</a><br/><br/>
		<a class="btn btn-primary" href="wishlist.php?<?php print $name_email; ?>">View your wish list</a><br/><br/>
	</div>
</body>
</html>