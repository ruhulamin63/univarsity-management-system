<html>
<head>
	<title>Login form</title>
</head>
<body>
	<form method="POST" action="controllers/loginCheck.php" >
		<h1>Student Management</h1>
	<h2> Login:</h2>
			
		<table>
			<tr>
				<td><b>Username:</b></td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td><b>Password:</b></td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>	
			</tr>

			<tr>
				
				<td><h3><button><a href="Views/Register.php">Register</a></button></h3></td>
			</tr>
			
		</table>
	</form>
</body>

</html>

<!--test-->