<?php
session_start();
$mysqli=new mysqli('127.0.0.1','root', '', 'parking');
if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
}

$license = $_GET['license']; // get id through query string

$del = mysqli_query($mysqli,"delete from parking_list where license = '$license'"); // delete query

if($del)
{
    mysqli_close($mysqli); // Close connection
    header("location:action.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>