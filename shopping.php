<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sorting Page</title>

</head>

<body>
<?php
		include("MainMenu.php");
?>

<?php
	include("Connect_Database.php");
?>

<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
?>
<div class="div_css">
	<?php
		include("ShoppingMenu.php");
	?>	
	<table align="center" border="2" width="400">
		<tr>
			<th>
				Title
			</th>
			<th>
				Name
			</th>
			<th>
				Post Time
			</th>
			<th>
				Book Picture
			</th>
		</tr>
		
	<?php
		while($row = mysqli_fetch_assoc($results))
		{
			print "<tr>";
			print "<td>";
			print ($row["title"]);
			print "</td>";
			print "<td>";
			print ($row["name"]);
			print "</td>";
			print "<td>";
			print ($row["posttime"]);
			print "</td>";
			
			print "<td>";
			print "<img src='";
			print $row["picpath"] . "' height=50 width=50>";
			print "</td>";
			
			/*print "<td>";
			print "<a href='UserDelete.php?";
			print "email=" . $row["email"] . "'>";
			print "DELETE";
			print "</a";
			print "</td>";*/
			print "</tr>";
		}
	?>
	</table>
</div>
</body>
</html>