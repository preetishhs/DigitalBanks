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

<?php

$database = "bank";
$con = mysqli_connect( "localhost", "home", "home125", "$database" );			// Connection to mysql server
if( mysqli_connect_errno() )
{
	echo "Failed to connect mysql: mysqli_connect( \"localhost\", \"home\", \"home125\", \"$database\" ) ";
}

$id = $_POST['id'];
$old_pwd = $_POST['old_pwd'];


//echo $id . $acc;

$query = "select * from customer where " . "id='$id'; ";
//echo $query;

$result = mysqli_query( $con, $query );
if ( $result === 0 )
	echo "Error in executing the query: $query <br>" ;

$row = mysqli_fetch_array( $result );

$pwd = $row['pwd'];
$acc_no = $row['accno'];
$name = $row['name'];
$balance = $row['balance'];
$phone = $row['phone'];
$stat = $row['status1'];
$request = $row['request'];
$refname = $row['ref_name'];
if( strcmp( $pwd, $old_pwd ) == 0 )
	echo "";
else
	die();

echo "
<div id=\"text\" style=\"height:700px;padding:10px\">
<div style=\"width:200px;height:700px;float:left;background-color:white;border-radius:5px;\">
<br>
	<img src=\"user.png\" style=\"width:180px;height:200px;\">
<br><br>
<hr>";
if($stat == 1)
{
echo " <p style=\"font-size:16px\">You have Payment request</p>
<form action=\"ded.php\" method=\"POST\">
<input name=\"acc\" value=$acc_no type=\"text\" style=\"display:none\">
<input type=\"submit\" value=\"Accept\" style=\"width:100px;height:30px;background-color:green;color:white;font-size:20px\"><hr>"
;
}

if($request == 1)
{
echo " <p style=\"font-size:16px\">$refname Wants your refereal to create a new account!</p>
<form action=\"val.php\" method=\"POST\">
<input name=\"acc\" value=$acc_no type=\"text\" style=\"display:none\">
<input type=\"submit\" value=\"Accept\" style=\"width:100px;height:30px;background-color:green;color:white;font-size:20px\"><hr>"
;
}


echo"
</div>
<div style=\"width:750px;height:700px;float:left;background-color:white;border-radius:5px;margin-left:10px;text-align:center\">
<div style=\"float:right;margin-right:10px;margin-top:5px;font-size:18px;color:black\"><span><a href=\"logged.php\">$id</a></span><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><a href=\"login.php\">Logout</a></span></div>
<br>
<h3> Welcome $name!</h3>
<br>
<table style=\"margin-left:180px;\">
<tr>
<td><form action=\"pay1.php\" method=\"POST\">
<input name=\"id\" value=$id type=\"text\" style=\"display:none\">
<input type=\"submit\" class=\"btn\" value=\"Payment\"></input>
</form></td>
<td><form action=\"cardless.php\" method=\"POST\">
<input name=\"id\" value=$id type=\"text\" style=\"display:none\">
<input type=\"submit\" class=\"btn\" value=\"Cardless ATM\"></input>
</form></td>
</tr>
</table>
";

//$query = "select * from customer where id=" .  " ; ";

echo "
<br><br>
<h3 style=\"text-align:center\">Customer details</h3>
<br>
<table style=\"text-align:right;font-size:20px;margin-left:250px\">
<tr>
	<td>AccNo: </td>
	<td>$acc_no</td>
</tr>
<tr>
	<td>Name: </td>
	<td>$name</td>
</tr>
<tr>
	<td>Balance: </td>
	<td>$balance</td>
</tr>
<tr>
	<td>Phone No: </td>
	<td>$phone</td>
</tr>
<tr>
	<td>User Id: </td>
	<td>$id</td>
</tr>
</table>




</div>
</div>
";
?>
<?php include "foot.php" ?>
 
</body>
</html>
