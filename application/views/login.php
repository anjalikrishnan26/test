<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<style>
		table,tr,td
		{
			text-align:center;
			padding: 20px;
			margin:10px;
			font-size: 20px;
			color: white;



		}
		fieldset
		{
			background-color: rgba(0,0,0,0.7);
			width:300px;
			height: 230px;
			margin-left: 35%;
			margin-top: 10%;
			font-size: 20px;
		}
	</style>
</head>
<body>
<form action="<?php echo base_url()?>main/loginvalid" method="POST">
		<fieldset>
			<legend style="color: white; text-align: center; font-size: 25px">login</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</fieldset>
</form>
</body>
</html>

</body>
</html>