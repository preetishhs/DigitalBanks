<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="utf-8" />
      
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />

</head>
<script>
function changeImage() {
    var image = document.getElementById('myImage');
	var image2 = document.getElementById('myImage2');
    if (image.src.match("grid")) {
        image.src = "qr.png";
	image2.src = "untitled.png";
	
    } 
}
</script>
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
<?php include "nav.php" ?>
<?php 
$id = $_POST['id'];

?>
<div id="text" style="height:700px;padding:10px">
<div style="width:200px;height:700px;float:left;background-color:white;border-radius:5px;">
<br>
	<img src="user.png" style="width:180px;height:200px;">
<br><br>
<hr>
</div>
<div style="width:750px;height:700px;float:left;background-color:white;border-radius:5px;margin-left:10px;text-align:center">
<?php echo"<div style=\"float:right;margin-right:10px;margin-top:5px;font-size:18px;color:black\"><span><a href=\"logged.php\">$id</a></span><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><a href=\"login.php\">Logout</a></span></div>"; ?><br>
	<h3>Payment</h3>	
	<br>
	<div style="float:left;width:230px;height:230px;margin-left:15px">
	<img src="grid.jpg" style="width:230px;height:230px" id="myImage"></div>
	<div style="float:left;width:230px;height:230px;margin-left:15px" >
	<form ><br><br>
	<input type="button" class="btn" value="Scan QR Code" style="vertical-align:center" onclick="changeImage()" ></input>
	</form>	
	</div>
	<div style="float:left;width:230px;height:230px;margin-left:15px;border:1px solid black" ><img src="" style="width:230px;height:230px" id="myImage2"></div>
<br><br><br><br><br><br><br><br><br><br><br>
	<table style="margin-left:200px">
	<tr>
	<td><form action="bill.php" method="POST">
<?php echo "<input name=\"id\" value=\"$id\" type=\"text\" style=\"display:none\">";
echo "<input name=\"id2\" value=0 type=\"text\" style=\"display:none\">"; ?>
	<input type="submit" class="btn" value="Pay Bill" style="vertical-align:center"></input>
	</form></td>
	<td><form action="share_pay.php" method="POST">
	<?php echo "<input name=\"id\" value=$id type=\"text\" style=\"display:none\">"; ?>
	<input type="submit" class="btn" value="Share Pay" style="vertical-align:center"></input>
	</form></td>
	<tr>
	</table>



</div>
</div>
<?php include "foot.php" ?>
 
</body>
</html>
