<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="utf-8" />
      
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php include "nav.php" ?>
<div id="text" style="text-align:center;height:1000px;">
<br><br>
<?php
$database = "bank";
$con = mysqli_connect( "localhost", "home", "home125", "$database" );			// Connection to mysql server
if( mysqli_connect_errno() )
{
	echo "Failed to connect mysql: mysqli_connect( \"localhost\", \"home\", \"home125\", \"$database\" ) ";
}

$ref1 = $_POST['ref1'];
$ref2 = $_POST['ref2'];
$name = $_POST['name'];

$query = "select req_grant from customer where id = "."'$ref1'"." ";// echo $query;
	$result = mysqli_query( $con, $query );
	$row = mysqli_fetch_assoc($result);
	$req_grant1 = $row["req_grant"];
	//echo $req_grant1;

$query = "select req_grant from customer where id = "."'$ref2'"." ";//echo $query;
	$result = mysqli_query( $con, $query );
	$row = mysqli_fetch_assoc($result);
	$req_grant2 = $row["req_grant"];
	//echo $req_grant2;

//echo $ref2 . $ref1 . $name;

$query = "update customer set request = 1 where id= " ."'$ref1'". " ; " ;
//echo $query;
$result = mysqli_query( $con, $query );

$query = "update customer set request = 1 where id="."'$ref2'". " ; ";
//echo $query;
$result = mysqli_query( $con, $query );

$query = "update customer set ref_name ="."'$name'"." where id="."'$ref1'". " ; ";
//echo $query;
$result = mysqli_query( $con, $query );
$query = "update customer set ref_name ="."'$name'"." where id="."'$ref2'". " ; ";
//echo $query;
$result = mysqli_query( $con, $query );

echo "
<h3> Waiting for Referal Validation</h3><br><br>
<table style=\"margin-left:auto;margin-right:auto;width:500px\">
<tr>
<td><img src=\"friend.png\" style=\"width:50px;height:50px\"></td>
		<td>$ref1</td>";
		if($req_grant1==0)
		echo "<td><img src=\"wait.gif\" style=\"width:50px;height:50px\"></td>";
		else
		echo "<td><img src=\"tick.png\" style=\"width:50px;height:50px\"></td>";
		echo "</tr><tr>";
		echo "<td><img src=\"friend.png\" style=\"width:50px;height:50px\"></td>
		<td>$ref2</td>";
		if($req_grant2==0)
		echo "<td><img src=\"wait.gif\" style=\"width:50px;height:50px\"></td>";
		else
		echo "<td><img src=\"tick.png\" style=\"width:50px;height:50px\"></td>"; 
		?>
		
		
	

</tr>
</table>
<br>
<?php
if($req_grant2==1 && $req_grant1==1)
		{
		echo "<br><h3> Validation Completed!</h3>";
		}
?>
</div>

<?php include "foot.php" ?>
 
</body>
</html>
