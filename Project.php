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
    }
    .flip-card {
    background-color: transparent;
    width: 300px;
    height: 300px;
    perspective: 1000px;
    }
    .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
    .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
    }
    .flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    }
    .flip-card-front {
    background-color: #bbb;
    color: black;
    }
    .flip-card-back {
    background-color: #2980b9;
    color: white;
    transform: rotateY(180deg);
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
            <li class="nav-item active">
              <a class="nav-link" active href="Project.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Transaction.php">Profile</a>
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
            <!-- <li class="nav-item"> 
                       <a class="nav-link" href="index.php">Login</a>
                    </li> -->
          </ul>
          
        </div>
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
  
  
  <!-- <div class="flip-card" >
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="ATM CARD4.png" alt="Avatar" style="width:auto;height:auto;">
      </div>
      <div class="flip-card-back">
        <p>Trust is our vison..</p>
        <p>www.gpay.com</p>
      </div>
    </div>
  </div> -->
  <div align="center" class="card" style="height: 600px; width: 446px">
    <img class="card-img-top" src="ATM CARD4.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Green pay card</h5>
      <p class="card-text">Trust is our base...</p>
      <a href="Card page.php" class="btn btn-success">Wellcome</a>
    </div>
  </div>
</body>
</html>