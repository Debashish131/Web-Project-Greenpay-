<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert2.css">
    <script src="sweetalert2.js" type="text/javascript"></script>


    <?php
 include_once "Connection.php";


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phonenumber=$_POST['phonenumber'];
$password1=$_POST['password1'];

$sql="INSERT INTO registration (firstname,lastname,phonenumber,password1) VALUES ('$firstname','$lastname','$phonenumber','$password1')";

if(mysqli_query ($conn,$sql))

{
	echo "
                <script > ('#submit').click(function(e)
            {
                swal({
                      Swal.fire({
                          'Good job!',
                          'You clicked the button!',
                          'success'
                        })
                  });
            }
        </script>";
}
else

{
echo "Erroorrrrrr";
}
mysqli_close();

header("location:Registration.php");

?>
