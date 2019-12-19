
<?php
session_start();

if(!isset($_SESSION['loggedin'])){
  header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
		Green Pay Website
		</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="sytlesheet" href="sweetalert2.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</head>
	<body>
		<style>
		img {
		max-width: 50%;
		height: auto;
		}
		body {
		background-image: url(e.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: center;
		font-family: Arial, Helvetica, sans-serif;
		}
		</style>
	</body>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			 <a class="navbar-brand" href="Project.php"><img src="gpay.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link"  href="Project.php">Home </a>
					</li>
					<li class="nnav-item">
						<a class="nav-link" href="Transaction.php">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Registration.php">Registration</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							More
						</a>
						 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="Send.php">Send money</a>
                <a class="dropdown-item" href="#">Bil pay</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Log out</a>
              </div>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Login<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</section>



<style>
  h1 {
  color: black;
  }
  span{
  color:green
  }
  </style>
  <h1 style="color: black" align="center"> Wellcome to<span> Green</span> pay</h1>
  <br>

<h1 style="color: black" align="center"> Send Money</h1>
     <div class="row justify-content-center">
            <form action="Mobile Topup2.php" method="POST" autocomplete="off">
                    <div class="form-group">
                     <b> <label>Enter Send Money Number :</label> </b>
                      <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter phone number" required>   
                    </div>
                    
                    <div class="form-group">
                          <b>  <label>Enter money :</label></b>
                            <input type="text" class="form-control" id="money1" name="money1" placeholder="Enter money" required>
                          </div>


                    <button  type="submit" id="submit" name="Send"  class="btn btn-primary">Send</button>
                    <?php  


                      if(isset($_POST['Send']))
                    {
                      
                      $id=$_POST['id'];


                        $mysqli->query("UPDATE registration SET money='$money' -'$money1' WHERE id=$id") or die ($mysqli->error);
                        header("location:Send.php");

                        $_SESSION['message']="Record Has been saved !!";
                        $_SESSION['msg_type']="success";
                    } ?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
                    <script type="text/javascript">
                    $(function()
                    {
				    Swal.fire({
				  'Good job!',
				  'You clicked the button!',
				  'success'})
				});
			</script>	
				
				                   


</body>
</html>




	
</html>