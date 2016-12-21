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
$database = "bank";
$con = mysqli_connect( "localhost", "home", "home125", "$database" );			// Connection to mysql server
if( mysqli_connect_errno() )
{
	echo "Failed to connect mysql: mysqli_connect( \"localhost\", \"home\", \"home125\", \"$database\" ) ";
}

$id = $_POST['id'];
$amt = $_POST['amt'];
$ph = $_POST['phno'];

$query = "select * from customer where " . "id='$id'; ";
//echo $query;

$result = mysqli_query( $con, $query );
if ( $result === 0 )
	echo "Error in executing the query: $query <br>" ;

$row = mysqli_fetch_array( $result );
$acc_no = $row['accno'];
//echo $amt . "<br>" . $ph . "<br>";

$rand1 = rand(100000, 999999);
$rand2 = rand(100000, 999999);

$query = "update customer SET otp = " . $rand1 . $rand2 . " , giftamt = " . $amt . " where accno = " . $acc_no . " ; ";
//echo $query;

echo"<div style=\"float:right;margin-right:10px;margin-top:5px;font-size:18px;color:black\"><span><a href=\"logged.php\">$id</a></span><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><a href=\"login.php\">Logout</a></span></div>
<br><br>";
$result = mysqli_query( $con, $query );
if ( $result == 0 )
	echo "Error in executing the query: $query <br>" ;

$query = "select balance, giftamt from customer where accno=" . $acc_no . " ; ";
$result = mysqli_query( $con, $query );
if ( $result === 0 )
	echo "Error in executing the query: $query <br>" ;

$row = mysqli_fetch_array( $result );

$bal = $row['balance'];
$gift = $row['giftamt'];

if( $bal >= $gift )
{
	$query = "update customer set status=status+1 where accno=" .  $acc_no . " ; ";
	$result = mysqli_query( $con, $query );
	if ( $result == 0 )
		echo "Error in executing the query: $query <br>" ;	
	echo "<h2>PINs sent successfully!</h2><br><img src=\"acc.jpg\" style=\"width:500px;height:200px\">";
}

else
	echo "<img src=\"fail.jpg\" style=\"width:500px;height:200px\">";

//echo "<br> " . rand(100000, 999999);

?>

</div>
</div>





