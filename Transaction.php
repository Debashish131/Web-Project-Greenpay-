
<!-- 

<?php 

//if(!isset($_SESSION['firstname']))
{
//   header('Location:Transaction.php');
}
//else
{
//   header('Location:index.php');
}

 ?> -->

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
    Project
    </title>
    <link rel="sytlesheet" href="style.css">
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
              <a class="nav-link" href="Project.php">Home </a>
            </li>
            <li class="nnav-item active">
              <a class="nav-link" href="Transaction.php">Profile<span
              class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                     <a class="nav-link" href="Mobile Topup.php">Mobile Topup</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Send.php">Send Money</a>
                <a class="dropdown-item" href="#">Bil pay</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Log out</a>
              </div>
            </li>
         <!--    <li class="nav-item">
              <a class="nav-link" href="index.php">Login</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <?php  include_once "CRUD.php" ; ?>
  <h1 style="color: black" align="center">Transaction List</h1>
  <br>
  <?php if (isset($_SESSION['message'])):?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
  </div>
  <?php endif ?>
  <div class="container">
    <?php
    $mysqli=mysqli_connect('localhost','root','','greenpay') or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM registration") or die ($mysqli->error);
    ?>
    
    <div class ="row justify-content-center">
      <div class= "row justify-content-center">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Account number</th>
            <th>Money</th>
            <th colspan="2"> Action</th>
          </tr>
        </thead>
        <?php
        while ($row= $result-> fetch_assoc()):
        ?>
        <tr>
          <td><?php echo $row['firstname'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['phonenumber'];?></td>
          <td><?php echo $row['account_number'];?></td>
          <td><?php echo $row['money'];?></td>


          <td>
            
            <a href="Transaction.php?edit=<?php echo $row['id']; ?>" class ="btn btn-info" >Edit</a>
            <a href="CRUD.php?delete=<?php echo $row['id']; ?>" class ="btn btn-danger" >Delete</a>
          </td>
        </tr>
        <?php endwhile ; ?>
      </table>
    </div>
  </div>
  </div>
  <?php
  function pre_r($array)
  {
        echo '<pre>';
              print_r($array);
  echo '</pre>';
  }
  ?>
   <div class="row justify-content-center">
            <form action="CRUD.php " method="POST" autocomplete="off"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>

              <input type="hidden" name="id" value="<?php echo $id ?>">

                          <div class="form-group">
                            <label>Enter your email id :</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>"  required>
                          </div>



                          <div class="form-group">
                                <label>Enter your Phone number name :</label>
                                <input type="text" class="form-control" id="phonenumber" value="<?php echo $phonenumber ?>" name="phonenumber"  required>
                              </div>

                              <div class="form-group">
                                    <label>Enter your Password :</label>
                                    <input type="password" class="form-control" id="password1" name="password1" value="<?php echo $password1 ?>" required>
                                  </div>


                                  <?php

                                  if($update==true):
                                  ?>
                                  <button type="submit" id="update" name="update" class="btn btn-primary">Update</button>

                                  <?php else:  ?>






                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                    <?php endif ?>

              
    </div>
    
  
  
</table>
</div>
</body>
</html>