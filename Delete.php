
<?php 
session_start();
if(isset($_POST['deleteButton']))
{
    $id = $_POST['id'];


    include "Connection.php";
    $session['message']="Record deleted !!!";
    $session['msg_type']="danger";

    $sql = "delete from registration where id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "
        <script>
                        
                    Swal.fire({
                          'Good job!',
                          'You clicked the button!',
                          'success'
                        })

                    </script>";
                  

        header('Refresh: 0; url=Transaction.php');
    }
    else{
        
           echo "<script>alert('There is some problem occur during deleting.');</script>";
    }

}

 ?>