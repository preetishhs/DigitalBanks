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
	$query2 = "update customer set balance = balance - giftamt, status = status - 1, otp = NULL where otp =  " . $new_otp . " ; " ;
	$result = mysqli_query( $con, $query2 );

	echo "Transaction successful\n";
}
?>
