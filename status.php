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
<?php include "nav.php" ?>
<div id="text" style="height:700px;padding:10px">
<div style="width:200px;height:700px;float:left;background-color:white;border-radius:5px;">
<br>
	<img src="user.png" style="width:180px;height:200px;">
<br><br>
<hr>
</div>
<div style="width:750px;height:700px;float:left;background-color:white;border-radius:5px;margin-left:10px;text-align:center">


<?php

$id = $_POST['id'];
$database = "bank";
$con = mysqli_connect( "localhost", "home", "home125", "$database" );			// Connection to mysql server
if( mysqli_connect_errno() )
{
	echo "Failed to connect mysql: mysqli_connect( \"localhost\", \"home\", \"home125\", \"$database\" ) ";
}

$query = "select status from customer where id = '" . $id . "' ; ";


$result = mysqli_query( $con, $query );
$row = mysqli_fetch_array( $result );

$status = $row['status'];

echo"<div style=\"float:right;margin-right:10px;margin-top:5px;font-size:18px;color:black\"><span><a href=\"logged.php\">$id</a></span><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><a href=\"login.php\">Logout</a></span></div><br><br>";
echo "
<h1 style=\"text-align:center\">Transaction Pending: $status</h1>
</div>
</div>
";

?>
<?php include "foot.php" ?>
 
</body>
</html>
