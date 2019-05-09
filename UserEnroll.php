<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="MainMenu.css" type="text/css" rel="stylesheet" />
<title>User Enroll Page</title>
</head>

<body>
<div class="container" style="background: #333; width: 400px; margin-top: 10%; color:#FF0">
	<h1 class="div_css_h">User Enroll Page</h1>
	<form action="UserInsert.php" method="post">
		<table align="center">
			<tr>
				<td>
					User Name
				</td>
				<td>
					<input type="text" name="name" />
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="text" name="email" />
				</td>
			</tr>
			<tr>
				<td>
					<input class="btn btn-primary" type="submit" value="submit" />
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>