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
    if (image.src.match("grid")) {
        image.src = "qr.png";
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

$database = "bank";
$con = mysqli_connect( "localhost", "home", "home125", "$database" );			// Connection to mysql server
if( mysqli_connect_errno() )
{
	echo "Failed to connect mysql: mysqli_connect( \"localhost\", \"home\", \"home125\", \"$database\" ) ";
}

$id = $_POST['id'];

//echo $id;

$query = "select accno from customer where id = "."'$id'"." ";
//echo $query;
$result = mysqli_query( $con, $query );

    while($row = mysqli_fetch_assoc($result)) {
        $acc = $row["accno"];
    }

    
?>


<div id="text" style="height:700px;padding:10px">
<div style="width:200px;height:700px;float:left;background-color:white;border-radius:5px;">
<br>
	<img src="user.png" style="width:180px;height:200px;">
<br><br>
<hr>
</div>
	<div style="width:750px;height:700px;float:left;background-color:white;border-radius:5px;margin-left:10px;text-align:center">
	<?php echo"<div style=\"float:right;margin-right:10px;margin-top:5px;font-size:18px;color:black\"><span><a href=\"logged.php\">$id</a></span><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><a href=\"login.php\">Logout</a></span></div>"; ?>
	<br><h3>Share payment</h3><br>
	<?php
	echo "<form target=\"_blank\" action=\"share_pay1.php\" method=\"POST\">	
	<table border=\"1\" style=\"margin-left:50px;width:640px;text-align:center;font-size:18px\"> ";
	$query = "select frndname,flag,frndacc from friends where acc = "."'$acc'"." ";
	
	$result = mysqli_query( $con, $query );

    	
	
	$row = mysqli_fetch_assoc($result);
        //$acc = $row["accno"];
	
	$frnd1 = $row["frndname"];
	$flag1 = $row["flag"];
	$fr1 = $row["frndacc"];
	
	$row = mysqli_fetch_assoc($result);
        //$acc = $row["accno"];
	$frnd2 = $row["frndname"];
	$flag2 = $row["flag"];
	$fr2 = $row["frndacc"];

	$row = mysqli_fetch_assoc($result);
        //$acc = $row["accno"];
	$frnd3 = $row["frndname"];
	$flag3 = $row["flag"];
	$fr3 = $row["frndacc"];
	

    
    
	echo "
	<th>
		<td><b>User</b></td>
		<td><b>Name</b></td>
		<td><b>Amount</b></td>
		<td><b>Status</b></td>
		
	</th>	
	<tr>
		<td><input type=\"checkbox\" value=$fr1 name=\"fr1\"></td>
		<td><img src=\"friend.png\" style=\"width:50px;height:50px\"></td>
		<td>$frnd1</td>
		<td><input type=\"text\" name=\"amt1\" style=\"width:100px;height:30px;vertical-align:middle;font-size:22px\"></td>
		";
		if($flag1==0)
		echo "<td><img src=\"wait.gif\" style=\"width:50px;height:50px\"></td>";
		else
		echo "<td><img src=\"tick.png\" style=\"width:50px;height:50px\"></td>";
	echo "
		
	</tr>	
	<tr>
		<td><input type=\"checkbox\" value=$fr2 name=\"fr2\"></td>
		<td><img src=\"friend.png\" style=\"width:50px;height:50px\"></td>
		<td>$frnd2</td>
		<td><input type=\"text\" name=\"amt2\" style=\"width:100px;height:30px;vertical-align:middle;font-size:22px\"></td>";
		if($flag2==0)
		echo "<td><img src=\"wait.gif\" style=\"width:50px;height:50px\"></td>";
		else
		echo "<td><img src=\"tick.png\" style=\"width:50px;height:50px\"></td>";
	echo "
	</tr>	
	<tr>
		<td><input type=\"checkbox\" value=$fr3 name=\"fr3\"></td>
		<td><img src=\"friend.png\" style=\"width:50px;height:50px\"></td>
		<td>$frnd3</td>
		<td><input type=\"text\" name=\"amt3\" style=\"width:100px;height:30px;vertical-align:middle;font-size:22px\"></td>";
		if($flag3==0)
		echo "<td><img src=\"wait.gif\" style=\"width:50px;height:50px\"></td>";
		else
		echo "<td><img src=\"tick.png\" style=\"width:50px;height:50px\"></td>";
?>	
	</tr>	


	
	</table>	
	<br><br>
	<input type="submit" class="btn" value="Request Sharing" style="vertical-align:center"></input>
	</form>
	<br>
	<form action="share_final.php" method="POST">
	<?php echo"<input type=\"text\" name=\"acc\" value=$id style=\"display:none\">"; ?>
	<input type="submit" class="btn" value="         Pay          " style="vertical-align:center"></input>
	</form>

</div>
</div>
<?php include "foot.php" ?>
 
</body>
</html>
