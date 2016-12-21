<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="utf-8" />
      
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include "nav.php" ?>
<div id="text" style="text-align:center;height:500px;">
<br><br>
<h3> Login</h3>
<br>
<form action="logged.php" method="POST">
<table style="margin-left:200px;font-size:20px;text-align:right">
<tr>
	<td>Username/Email:</td>
	<td><input type="text" name="id" style="height:30px;font-size:20px"></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" name="old_pwd" style="height:30px;font-size:20px"></td>
</tr>

</table>

	<input type="submit" value="Login" style="height:40px;width:120px;font-size:22px;	" >
</form>
</div>

<?php include "foot.php" ?>
 
</body>
</html>
