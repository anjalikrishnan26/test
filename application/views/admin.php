
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN HOME</title>
	<style>
		.menubar 
{
	background-color:rgba(0,0,0,0.7);
	text-align:center;	
}
.menubar ul
{
	list-style:none;
	display:inline-flex;
	
	padding:35px;
}
.menubar ul li a
{
	color:white;
	text-decoration:none;
	padding:10px;
}
.menubar ul li
{
	padding:15px;
	
}
	</style>
</head>
<body>
	<div><h1>ADMIN HOME</h1></div>
	<nav class="menubar">
		<ul>
			<li><a href="#">HOME</a>
			<li><a href="<?php echo base_url()?>main/show">VIEW REGISTRATION</a></li>
		</ul>
	</nav>
</body>
</html>