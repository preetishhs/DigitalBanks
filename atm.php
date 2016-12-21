<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="utf-8" />
      
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />

</head>
<style>
.btn {
  background: #d9344a;
  background-image: -webkit-linear-gradient(top, #d9344a, #b82b3d);
  background-image: -moz-linear-gradient(top, #d9344a, #b82b3d);
  background-image: -ms-linear-gradient(top, #d9344a, #b82b3d);
  background-image: -o-linear-gradient(top, #d9344a, #b82b3d);
  background-image: linear-gradient(to bottom, #d9344a, #b82b3d);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  font-family: Arial;
  color: #ffffff;
  font-size: 22px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>

<body>
<br><br>
<div id="text" style="height:700px;padding:10px">
<div style="width:150px;height:700px;float:left;background-color:white;border-radius:5px;">
<br><br><br><br><br>
<input type="submit" class="btn" value="    >    "></input><br><br><br>
<input type="submit" class="btn" value="    >    "></input><br><br><br>
<input type="submit" class="btn" value="    >    "></input><br><br><br>
<input type="submit" class="btn" value="    >    "></input><br><br><br>
</div>
<div style="width:640px;height:700px;float:left;background-color:white;border-radius:5px;margin-left:10px;text-align:center">
<br>
<h2 style="text-align:center">ATM</h2>
<br>
<hr>
<br><br><br>
<form action="final_atm.php" method="POST">
<table style="margin-left:130px;font-size:20px;text-align:right">
<tr>
	<td>PIN 1:</td>
	<td><input type="text" name="pin1" style="height:30px;font-size:20px"></td>
</tr>
<tr>
	<td>PIN 2:</td>
	<td><input type="text" name="pin2" style="height:30px;font-size:20px"></td>
</tr>

</table>

	<input type="submit" value="Withdraw" style="height:50px;width:120px;margin-left:00px;font-size:22px;" >
</form>
<br>
<img src="numpad.jpg" >
</div>
<div style="width:150px;height:700px;float:right;background-color:white;border-radius:5px;">
<br><br><br><br><br>
<input type="submit" class="btn" value="    <    "></input><br><br><br>
<input type="submit" class="btn" value="    <    "></input><br><br><br>
<input type="submit" class="btn" value="    <    "></input><br><br><br>
<input type="submit" class="btn" value="    <    "></input><br><br><br>
</div>
</div>

 
</body>
</html>
