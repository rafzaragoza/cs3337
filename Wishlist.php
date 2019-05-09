<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Your Wishlist</title>
</head>

<body>
<?php
	include("MainMenu.php");
?>

<?php
	include("Connect_Database.php");
?>

<?php
	$selectWishlist = "select * from wishlist";
	$results = mysqli_query($connect, $selectWishlist);
?>
	
<h1 align="center">Forum</h1>

<?php
	while($row = mysqli_fetch_assoc($results))
	{
		print "<div style='border-bottom-style: solid;width: 300px;'>";
		print "<h5>";
		print ($row["title"]);
		print "</h5>";
		print "<p>";
		print ($row["description"]);
		print "</p>";
		print "</div>";
	}
?>
<form action="WishlistInsert.php" enctype="multipart/form-data" method="post">
	<table align="center">
		<tr>
			<td>
				Title
			</td>
			<td>
				<input type="text" name="title" />
			</td>
		</tr>
		<tr>
			<td>
				Description
			</td>
			<td>
				<input type="text" name="description" />
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="submit" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>