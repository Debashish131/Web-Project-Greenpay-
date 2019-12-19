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
    }</style>
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="Project.php"><img src="gpay.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" active href="Project.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Transaction.php">Transaction</a>
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
                <a class="dropdown-item" href="#">Mobile Topup</a>
                <a class="dropdown-item" href="#">Bil pay</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log out</a>
              </div>
            </li>
            <li class="nav-item"> 
                        <a class="nav-link" href="Login.php">Login</a>
                    </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </section>
    <br>
    <br>
    <br>
<div align="center">
<img src="frame.png" height="300px" width="300px">
<br>
<br>
<h4> Scan for smart transaction..</h4>

</div>



  </body>