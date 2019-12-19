<?php
include_once "Connection.php";
if(isset($_POST['update']))
{
$id=$_POST['Update'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phonenumber=$_POST['phonenumber'];
$password1=$_POST['password1'];
$sql="update registration set firstname='$firstname' ,lastname='$lastname',phonenumber='$phonenumber' where id=$id";
if(mysqli_query ($conn,$sql))
{
	echo "update Successfully....";
}
else
{
		echo "Erroorrrrrr";
}
		mysqli_close();
		
		header("location:Registration.php");
}
?>