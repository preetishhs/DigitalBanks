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

$fr1 = $_POST['fr1'];
$fr2 = $_POST['fr2'];
$fr3 = $_POST['fr3'];


//echo $id;

$query = "update customer set status1 = 1 where accno = "."$fr1"." ";
$result = mysqli_query( $con, $query );

$query = "update customer set status1 = 1 where accno = "."$fr2"." ";
$result = mysqli_query( $con, $query );
$query = "update customer set status1 = 1 where accno = "."$fr3"." ";
$result = mysqli_query( $con, $query );

    
?>


<div id="text" style="height:700px;padding:10px">
<div style="width:200px;height:700px;float:left;background-color:white;border-radius:5px;">
<br>
	<img src="user.png" style="width:180px;height:200px;">
<br><br>
<hr>
</div>
	<div style="width:750px;height:700px;float:left;background-color:white;border-radius:5px;margin-left:10px;text-align:center">
	<br><h3>Sent request to your friends!</h3><br>
	

</div>
</div>
<?php include "foot.php" ?>
 
</body>
</html>
