<?php

$database = "bank";
$con = mysqli_connect( "localhost", "home", "home125", "$database" );			// Connection to mysql server
if( mysqli_connect_errno() )
{
	echo "Failed to connect mysql: mysqli_connect( \"localhost\", \"home\", \"home125\", \"$database\" ) ";
}

echo "
	<form action=\"test1.php\" method=\"post\" > 
				Amount :
		<input id=\"amt\" type=\"text\" name=\"amt\">		</input>
		<br>
		Phone number<input id=\"acno\" type=\"text\" name=\"acc_no\">		</input>
		<br>
		<input type=\"submit\" value=\"Submit\">
	</form>
	";

?>
