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
	$forumInsert = 	"insert into forum values('" .
		$_POST["name"] .
		"', '" .
		$_POST["message"] .
		"', '" .
		$currentTime .
		"')";
		
		$result = mysqli_query($connect, $forumInsert);
		
		header("Location: forum.php?name=" . $_POST["name"])
?>
</body>
</html>