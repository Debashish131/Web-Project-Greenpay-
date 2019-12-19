<?php


$mysqli=new mysqli('localhost','root','','greenpay') or die(mysqli_error($mysqli));


				$id=0;
				$email='';
				$phonenumber='';
				$password1='';
				$update=false;


				if(isset($_POST['submit']))
{
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$account_number=$_POST['account_number'];
					$money=$_POST['money'];
					$email=$_POST['email'];
					$phonenumber=$_POST['phonenumber'];
					$password1=$_POST['password1'];

					$mysqli->query("Insert into registration (firstname,lastname,account_number,money,email,phonenumber,password1)values ('$firstname','$lastname','$account_number','$money','$email','$phonenumber','$password1')") or die ($mysqli->error);

					header("location:Registration.php");
					$_SESSION['message']="Record Has been saved !!";
						$_SESSION['msg_type']="success";
}



			if (isset($_GET['delete'])) {
				$id =$_GET['delete'];

				$mysqli->query("DELETE FROM registration Where id=$id") or die ($mysqli->error());

				header("location:Transaction.php");
				header('Refresh: 0; url=Transaction.php');

				$_SESSION['message']="Record Has been deleted !!";
					$_SESSION['msg_type']="danger";
			}



			if (isset($_GET['edit'])) {
				$id =$_GET['edit'];
				$update=true;

				$result=$mysqli->query("SELECT * FROM registration Where id=$id") or die ($mysqli->error());
				// if(count($result)==1)
				{
				$row=$result->fetch_array();
					
					$email=$row['email'];
					$phonenumber=$row['phonenumber'];
					$password1=$row['password1'];
				}
							// 	$_SESSION['message']="Record Has been updated !!";
											//   	 	$_SESSION['msg_type']="success";
			// }
			}


			if (isset($_POST['update'])) {
				$id =$_POST['id'];
				$email=$_POST['email'];
				$phonenumber=$_POST['phonenumber'];
				$password1=$_POST['password1'];

				$mysqli->query("UPDATE registration SET email='$email', phonenumber='$phonenumber', password1='$password1' WHERE id='$id'") or die ($mysqli->error);
				
				header("location:Transaction.php");
				header('Refresh: 0; url=Transaction.php');
				$_SESSION['message']="Record Has been updated !!";
					$_SESSION['msg_type']="success";
			}



				if(isset($_POST['topup']))
				{
					
					$money=$_POST['update'];
					$mysqli->query("UPDATE registration SET money='$money'- '$money1' WHERE id=$id") or die ($mysqli->error);
					header("location:Mobile Topup2.php");
					$_SESSION['message']="Record Has been saved !!";
						$_SESSION['msg_type']="success";
				}
?>