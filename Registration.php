
<!DOCTYPE html>
<html>

<head>
    <title>
        Registration

    </title>
    <link rel="sytlesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="sweetalert2.css">
    <script src="sweetalert2.js" type="text/javascript"></script>
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
                        <a class="nav-link"  href="Project.php">Home </a>
                    </li>
                      <li class="nnav-item">
                        <a class="nav-link" href="Transaction.php">Profile</a>
                    </li>
                     <li class="nav-item">
             <a class="nav-link" href="Mobile Topup.php">Mobile Topup</a>
            </li>
                    <li class="nav-item active"> 
                        <a class="nav-link" href="Registration.php">Registration<span class="sr-only">(current)</span></a>
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

                   <!--  <li class="nav-item"> 
                        <a class="nav-link" href="index.php">Login</a>
                    </li>
 -->
                </ul>
      
</div>

            </div>
        </nav>
    </section>


</body>

<body>
    <?php include_once 'CRUD.php'; ?>

    <?php if (isset($_SESSION['message'])):?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">

            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>



    <h1 style="color: green" align="center"> Registration form</h1>
     <div class="row justify-content-center">
            <form action="CRUD.php " method="POST" autocomplete="off" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
                    <div class="form-group">
                     <b> <label>Enter your First name :</label> </b>
                      <input type="text" class="form-control" id="fristname" name="firstname" placeholder="Enter your firstname" required>   
                    </div>
                    
                    <div class="form-group">
                          <b>  <label>Enter your Last name :</label></b>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your lastname" required>
                          </div>

                            <div class="form-group">
                           <b> <label>Enter your account number :</label></b>
                            <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Enter your account number" required>
                          </div>

                            <div class="form-group">
                          <b>  <label>Enter Money value :</label></b>
                            <input type="text" class="form-control" id="money" name="money" placeholder="Enter your money" required>
                          </div>


                          <div class="form-group">
                           <b> <label>Enter your email id :</label> </b>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email id"  required>
                          </div>



                          <div class="form-group">
                             <b>   <label>Enter your Phone number name :</label> </b>
                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your Phone number" required>
                              </div>

                              <div class="form-group">
                               <b>     <label>Enter your Password :</label> </b>
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter your Password" required>
                                  </div>


                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>

                  </form>
                     



             <!--   <?php 
                  if($_SERVER ["REQUEST_METHOD"]=="POST")

                  {
                    $fisrtname =$_POST["firstname"];
                    $lastname =$_POST["lastname"];
                    $phonenumber =$_POST["phonenumber"];
                   }

                    function validate($data)
                    {
                        $data=trim($data);
                        $data=stripcslashes($data);
                        $data=htmlspecialchars($data);
                        return $data;
                    }

                   ?> -->
               <?php

                  $firstname = $email = $lastname = $money = $phonenumber = "";

                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $firstname = test_input($_POST["firstname"]);
                    $email = test_input($_POST["email"]);
                    $lastname = test_input($_POST["lastname"]);
                    $money = test_input($_POST["money"]);
                    $phonenumber = test_input($_POST["phonenumber"]);
                  }

                  function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }
                  ?>

    </div>
    
    
          

</body>

</html>

