<?php
session_start();
$mysqli=new mysqli('127.0.0.1','root', '', 'parking');
if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
}
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parking</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style>
    .left {
      float: left;
      padding-left:310px;
      padding-top: 50px;
      border-left: 300px;
    }

    .right {
      float: right;
     padding-right: 350px;
     padding-top: 50px;
     border-right:300px;}
  </style>
</head>

<body>
  <nav class="nav justify-content-center bg-dark height-50">
    <a class="navbar-brand text-light bg-dark font-weight-bolder m-auto">
      <img
        src="data:image/png;base64,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"
        width="30" height="30" class="d-inline-block align-top" alt="">
      PARKING LOT MANAGEMENT
    </a>
  <a class="text-light ml-auto font-weight-bolder" href="action.php">Parking List</a>
  </nav>
  <div class="">
    <form action="parking_list.php" method="POST">
    <div class="container mt-5">
      <div class="form-group">
        <strong><label for="">Owner:</label></strong>
        <input type="text" class="form-control" id="owner" placeholder="Owner" name="owner">
      </div>
      <div class="form-group">
        <strong><label for="">Car:</label></strong>
        <input type="text" class="form-control" id="car" placeholder="Car" name="car">
      </div>
      <div class="form-group">
        <strong><label for="">License Plate:</label></strong>
        <input type="text" class="form-control" id="licenseplate" placeholder="NN-NN-LL,NN-LL-NN,...etc" name="license">
      </div>
    
    <div class="form-group row">
      <div class="col">
          <strong><label class="col">Entry Date:</label></strong>
          <input class="col-12" type="date" id="entry" name="entrydate">
          <script>
            function myFunction() {
              var x = document.createElement("INPUT");
              x.setAttribute("type", "date");
              x.setAttribute("value", "2014-09-02");
              document.body.appendChild(x);
            }
          </script>
      </div>
      <div class="col">
          <strong><label class="col">Exit Date:</label></strong>
          <input type="date" class="col-12" id="exit" name="exitdate">
          <script>
            function myFunction() {
              var x = document.createElement("INPUT");
              x.setAttribute("type", "date");
              x.setAttribute("value", "2014-09-02");
              document.body.appendChild(x);
            }
          </script>
      </div>
    </div>
  
    </div>
      <div style="padding-top:90px; text-align:center;">
        <strong><input type="submit" class="btn btn-dark btn-lg" id="submit" name="addcar" value="Add Car"></strong>
      </div>
    </div>
  </form>
  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
</body>
</html>