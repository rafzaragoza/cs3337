<html>
<head>
<meta charset="utf-8">
<title>Main Page</title>
</head>

<body>
<?php
	include("Connect_Database.php");
	include("MainMenu.php");
?>
<h3 align="center"> No Result Found</h3>
<!--<?php
	$selectUsers = "select * from users";
	$results = mysqli_query($connect, $selectUsers);
?>

<table align="center" border="2" width="400">
	<tr>
		<th>Name</th>
		<th>Email</th>
	</tr>

<?php
/*	while($row = mysqli_fetch_assoc($results))
	{
		print "<tr>";
		print "<td>";
		print ($row["name"]);
		print "</td>";
		print "<td>";
		print ($row["email"]);
		print "</td>";
	}*/
?>-->

</table>
</body>
</html>