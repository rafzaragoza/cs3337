
<link href="MainMenu.css" type="text/css" rel="stylesheet" />

<?php
	session_start();
	$name_email = 'name=' . $_SESSION['name'] .
				'&email=' . $_SESSION['email'];
 #	print $name_email;
?>
<h1> STUDENT BOOK EXCHANGE </h1>
    <body>
<ul class="ul_css">
<li class="li_css">
	<a class="li_css_a" href="shopping.php?<?php print $name_email; ?>" > shopping
	</a>
</li>
<li class="li_css">
	<a class="li_css_a" href="selling.php?<?php print $name_email; ?>" > selling
	</a>
</li>
<li class="li_css">
	<a class="li_css_a" href="profile.php?<?php print $name_email; ?>" > profile
	</a>
</li>
<li class="li_css">
	<a class="li_css_a" href="forum.php?<?php print $name_email; ?>" > forum
	</a>
</li>
</ul>
</body>