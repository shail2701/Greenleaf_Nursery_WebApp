<?php

include "db_conn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from shoppingcart where id = '$id'"); // delete query

if($del)
{
    //mysqli_close($db); // Close connection
    header("location:shoppingcart.php"); // redirects to all records page
    
    echo "delete hogya";
    //exit;	
}
else
{
    header("location:shoppingcart.php"); // redirects to all records page
    
    echo "Something went wrong ..."; // display error message if not delete
}
?>