 <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@8'></script>

<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>
<?php
session_start();




$conn=mysqli_connect("localhost","root","","greenpay");



if(isset($_POST['firstname']))
{
	$firstname=$_POST['firstname'];
	$password1=$_POST['password1'];
	$sql="SELECT * FROM registration WHERE firstname ='".$firstname."' AND password1='".$password1."' LIMIT 1";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['loggedin']=$firstname;
		echo "<a href='Project.php'></a>";

		header("location:Project.php");
		echo "<script> alert('Successfull log in!!!');</script>";

 		 exit();

	}
	else
	{
		//echo "<a href='Login.php'> </a>";
		echo "<script> alert('Invalid Username or Password');</script>";
		echo '<script language="javascript">';
		echo 'alert("Invalid username or password")';
		echo '</script>';
		header("location:index.php");
		
		
	}
}

?>