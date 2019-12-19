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
            <a class="navbar-brand" href="#"><img src="gpay.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="Project.html">Home </a>
                    </li>
                    <li class="nnav-item active">
                        <a class="nav-link" href="Transaction.php">Transaction<span
                                class="sr-only">(current)</span></a>
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
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
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
   <div class="row justify-content-center">
    <div class="view-&-delete">
         <div class="col-md-5">
           <table class="table">          
              <thead>
                <tr class="Registration">
                    <th>ID</th>
                  <th>Name</th>
                  <th>Lastname</th>
                  <th>phone</th>

                  <th>action</th>
                </tr>
              </thead>
              <tbody>
           <?php

               include_once "Connection.php";
                 $sql = "SELECT * FROM Registration order by id asc";

                   $result = mysqli_query($conn, $sql);
                     $total_id=0;
                    if (mysqli_num_rows($result) > 0) {

                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                         $total_id=$total_id+$row['id'];
                         echo '<tr class="danger">';
                         echo '<td>'.$row['id'].'</td>';
                         echo '<td>'.$row['firstname'].'</td>';
                         echo '<td>'.$row['lastname'].'</td>';
                         echo '<td>'.$row['phonenumber'].'</td>';

                         echo '<td>
                                <a href="Transacton.php?id='.$row['id'].'" class="btn btn-danger btn-xs">
                                  <span class="glyphicon glyphicon-remove"></span> Remove
                                </a>
                         
                               </td>';

                         echo '<td> 
                                <a href="Transacton.php?id='.$row['id'].'" class="btn btn-primary btn-xs">
                                  <span class="glyphicon glyphicon-remove"></span> Update
                                </a>
                                </td>';
                        }

                    } else {
                        echo "0 results";
                    }
                    ?>

                    
          </tbody>
        </table>
        
 
         </div>
       </div>
     </div>

    
 <div class="row justify-content-center">
        <form action="Delete.php" method="post" autocomplete="off">
            <input type="text" name="id" placeholder="Enter id..." required><br><br>
            <button class="btn btn-danger btn-xs" type="submit" name="deleteButton" value="Delete">Delete</button> <br>
        </form>
    </div>

 <div class="row justify-content-center">
        <form action="Update.php" method="post" autocomplete="off">
            <input type="text" name="id" placeholder="Enter id..." required><br><br>
            <button class="btn btn-danger btn-xs" type="submit" name="Update" value="Update">Update</button> <br>
        </form>
    </div>

</body>

</html>