<?php
	session_start();
	$name_email = 'name=' . $_SESSION['name'] . '&email=' . $_SESSION['email'];
	#print $name_email;
?>

<ul class="ul_css">
<li class="li_css">
	<a class="li_css_a" href="shopping.php?<?php print $name_email; ?>"> shopping
	</a>
</li>
<li class="li_css">
	<a class="li_css_a" href="setting.php?<?php print $name_email; ?>"> setting
	</a>
</li>
<li class="li_css">
	<a class="li_css_a" href="profile.php?<?php print $name_email; ?>"> profile
	</a>
</li>
</ul>