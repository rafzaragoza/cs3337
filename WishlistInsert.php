<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	date_default_timezone_set("America/Los_Angeles");
	$currentTime = date("Y-m-d H:i:s");
	#print ($currentTime);
?>
<?php
	include("Connect_Database.php");
?>
<?php
	$wishlistInsert = 	"insert into wishlist values('" .
		$_POST["title"] .
		"', '" .
		$_POST["description"] .
		"')";
		
		$result = mysqli_query($connect, $wishlistInsert);
		
		header("Location: Wishlist.php?title=" . $_POST["title"])
?>
</body>
</html>