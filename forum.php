<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Forum</title>
</head>

<body>
<?php
	include("MainMenu.php");
?>

<?php
	include("Connect_Database.php");
?>

<?php
	$selectForum = "select * from forum";
	$results = mysqli_query($connect, $selectForum);
?>
<div class="div_css">	
	<h1 class="div_css_h">Forum</h1>

	<?php
		while($row = mysqli_fetch_assoc($results))
		{
			print "<div style='border-bottom-style: solid;width: 300px;'>";
			print "<h5>";
			print ($row["name"]);
			print "~";
			print ($row["posttime"]);
			print "</h5>";
			print "<p>";
			print ($row["message"]);
			print "</p>";
			print "</div>";
		}
	?>
	<form action="forumInsert.php" enctype="multipart/form-data" method="post">
		<table align="center">
			<tr>
				<td>
					User Name
				</td>
				<td>
					<input type="text" name="name" value="<?php print $_GET['name'];?>"/>
				</td>
			</tr>
			<tr>
				<td>
					Message
				</td>
				<td>
					<input type="text" name="message" />
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="submit" />
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>