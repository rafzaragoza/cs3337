
<link href="ShoppingMenu.css" type="text/css" rel="stylesheet" />

<?php
	session_start();
	$name_email = 'name=' . $_SESSION['name'] .
				'&email=' . $_SESSION['email'];
 #	print $name_email;
?>

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
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Order By</a>
    <div class="dropdown-content">
      <a href="SortbyTitle.php">Title </a>
      <a href="SortbyName.php">Name</a>
      <a href="SortbyPostime.php">Post Time</a>
    </div>
 </li>
</ul>