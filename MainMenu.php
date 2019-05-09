
<link href="MainMenu.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
	session_start();
	$name_email = 'name=' . $_SESSION['name'] .
				'&email=' . $_SESSION['email'];
 #	print $name_email;
?>

<ul class="ul_css">
	<li class="li_css">
		<h5 class="li_css_h">STUDENT BOOK EXCHANGE</h5>
	</li>
	<li class="li_css">
		<a class="li_css_a" href="main.php?<?php print $name_email; ?>" > home
		</a>
	</li>
	<li class="li_css">
		<a class="li_css_a" href="shopping.php?<?php print $name_email; ?>" > shopping
		</a>
	</li>
	<li class="li_css">
		<a class="li_css_a" href="selling.php?<?php print $name_email; ?>" > selling
		</a>
	</li>
	<li class="li_css">
		<a class="li_css_a" href="forum.php?<?php print $name_email; ?>" > forum
		</a>
	</li>
</ul>