<DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title> User Registeration</title>
</head>
<body>
<table border=1 width="300" cellspacing="1" cellpadding="1" align="center">
<tr> <td><form action="process.php" method="post" target="_blank">
	<input type="text", name="fullname", placeholder="Full Name" required><br/>
	<input type="email", name="email", placeholder="Email" required><br/>
	<input type="password", name="password", placeholder="Password" required><br/>
	</td><td><input type="submit" value="Add User">
</form></td></tr>
<tr> <td><form action="display.php" method="post" target="_blank">
</td><td><input type="submit" value="Display Users" name="">
</form></td>
</tr>

<tr> <td>	<form action="update.php" method="post" target="_blank">
		<input type="email" name="email_previous" placeholder="Old Email ?" required>
		<input type="text", name="fullname_updated", placeholder="Full Name" required><br/>
	    <input type="email", name="email_updated", placeholder="New Email" required><br/>
	    <input type="password", name="password_updated", placeholder="Password" required><br/>
		</td><td><input type="submit" value="Update" name="update">
	</form></td>
</tr>
<tr><td>
	<form action="delete.php" method="post" target="_blank">
		<input type="email" name="email_delete" placeholder="Email ?" required>
		</td><td><input type="submit" value="Delete" name="submit_delete">
	</form></td>
</tr>

</table>
</body>
</html>