
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
<?php

$database = "bank";
$con = mysqli_connect( "localhost", "home", "home125", "$database" );			// Connection to mysql server
if( mysqli_connect_errno() )
{
	echo "Failed to connect mysql: mysqli_connect( \"localhost\", \"home\", \"home125\", \"$database\" ) ";
}

$pin1 = $_POST['pin1'];
$pin2 = $_POST['pin2'];

$new_otp = $pin1 . $pin2;
$query = "select * from customer where otp = " . $new_otp . " ; ";

$result = mysqli_query( $con, $query );
if ( $result == 0 )
	echo "Error in executing the query: $query <br>" ;

if( mysqli_num_rows($result) == NULL )
	echo "Incorrect pin ";
else
{ 
	$query2 = "update customer set balance = balance - giftamt, status = status - 1, otp = NULL, giftamt = 0 where otp =  " . $new_otp . " ; " ;
	$result = mysqli_query( $con, $query2 );

	echo "Transaction successful\n";
}
?>
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
