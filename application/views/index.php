
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<style>
		table,tr,td
		{
			
			border-collapse: collapse;
			margin: 10px;
			padding: 20px;
			text-align: center;
		}
		fieldset
		{
			width: 500px;
			margin-left: 450px;
			background-color: rgba(0,0,0,0.5);
			margin-top: 10%;
		}
	</style>
</head>
<body>
	<a href="<?php echo base_url()?>main/login1">LOGIN</a>
	<form method="post" action="<?php echo base_url()?>main/insert">
		<fieldset>
			<legend>REGISTRATION FORM</legend>
		<table>
			<tr>
				<td>First name</td>
				<td><input type="text" name="fname" required></td>
			</tr>
			<tr>
				<td>last name</td>
				<td><input type="text" name="lname" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			
			<tr>
				<td>Phone Number</td>
				<td><input type="text" name="phone" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" required></td>
			</tr>
			
			<tr>
			
				<td><input type="submit" name="submit"></td>
			</tr>

		</table>
		</fieldset>
	</form>
</body>
</html>
