<?php 

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'websiteuserdata');

if(isset($_POST['insertdata']))
{

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " INSERT INTO userdata (user, email, mobile, comments)
values ('$user', '$email', '$mobile', '$comments') ";
$query_run = mysqli_query($connection, $query);

if($query_run){
	echo '<script> alert("data saved");</script>';
	header('location: index.php');
}
else
{
	echo '<script> alert("data not saved");</script>';
}
}

?>
