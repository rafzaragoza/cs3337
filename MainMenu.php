
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
	<!--<li class="li_css">
		<a class="li_css_a" href="search.php?<?php print $name_email; ?>" > search
		</a>
	</li>-->
	<li class="li_css">
		<a class="li_css_a" href="wishlist.php?<?php print $name_email; ?>" > wish list
		</a>
	</li>
	<li class="li_css">
		<a class="li_css_a" href="forum.php?<?php print $name_email; ?>" > forum
		</a>
	</li>
	<li class="li_css">
		<form class="input-group mb-3" action="Search.php" method="post" style="margin-top: 6px">
			<input type="text" class="form-control" placeholder="Enter a Title or Name" name="info"/>
			<div class="input-group-append">
				<input class="btn btn-primary" type="submit" value="Search"/>
			</div>
		</form>
	</li>
</ul>