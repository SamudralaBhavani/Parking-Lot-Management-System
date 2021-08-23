<?php
session_start();
$mysqli=new mysqli('127.0.0.1','root', '', 'parking');
if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
}
$s="SELECT * FROM parking_list";
$result=mysqli_query($mysqli,$s);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="parking.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  
</nav>
    <div class="container">       
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Owner</th>
                <th scope="col">Car</th>
                <th scope="col">License Plate</th>
                <th scope="col">Entry</th>
                <th scope="col">Exit</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                <?php
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                    <td><?php echo $row['owner'];?></td>
                    <td><?php echo $row['car'];?></td>
                    <td><?php echo $row['license'];?></td>
                    <td><?php echo $row['entry'];?></td>
                    <td><?php echo $row['exit_date'];?></td>
                    <td><a href="delete.php?license=<?php echo $row['license']; ?>">Delete</a></td>
                </tr>  
                <?php
                }
                
                ?>
                
            </tbody>
        </table>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>



