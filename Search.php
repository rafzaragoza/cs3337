<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>LoginVertify</title>
</head>

<body>
<?php
	include("Connect_Database.php");
	include("MainMenu.php");
?>

<?php
	$searchUser = "select * from books where " . "title like '%". $_POST["info"] . "%'" 
					. "or name like '%" . $_POST["info"]. "%'";

	$results = mysqli_query($connect, $searchUser);
	

	if(mysqli_num_rows($results) == 0){

		header("Location: NoResult.php");
		exit;
	}
?>

<table align="center" border="2" width="400">
	<tr>
		<th>Title</th>
		<th>Name</th>
		<th>Post Time</th>
		<th>Book Picture</th>
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
		print "<img scr ='";
		print $row["picpath"] . "' height=50 width=50 >";
		print "</td>";
		print "</tr>";
	}
?>
</body>
</html>