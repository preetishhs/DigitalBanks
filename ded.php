<?php
$database = "bank";
$con = mysqli_connect( "localhost", "home", "home125", "$database" );			// Connection to mysql server
if( mysqli_connect_errno() )
{
	echo "Failed to connect mysql: mysqli_connect( \"localhost\", \"home\", \"home125\", \"$database\" ) ";
}

$accno = $_POST['acc'];
echo $accno;
$query = "update friends set flag = 1 where frndacc=$accno; ";
echo $query;

$result = mysqli_query( $con, $query );
$query = "update customer set balance = balance-100 where accno=$accno; ";
echo $query;

$result = mysqli_query( $con, $query );
?>
<?php header("Location:login.php");?>

