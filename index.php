<?php
include 'config.php';
session_start();
if(isset($_SESSION["login"])){
  header("location:driver_pge.php");
}


if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['pwd']);
  $sql = "SELECT * FROM tbladmin WHERE userid = '$username' AND password = '$password' " ;
  $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                header("location:mainpages/manage_orders.php");

              }

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CatchIEcart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="jquery/bootstrap-3.4.1-dist/css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
  <style>
  .main{


  margin: auto; 
  margin-top: 200px;
  border: 1px solid #cccccc;
  width: 300px;
  height: 100%;
  padding: 20px;
}
.header{

  border: 1px solid #cccccc;
  margin-bottom: 10px;


}
  </style>
</head>
<body>
<div class="main">
 <div class="header" ><img style = 'width: 100%' src="image/logo.png"></div>
  
  <form action="index.php" method="POST">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" name="username" class="form-control" id="email" placeholder="Enter username" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter password" >
    </div>
  
    <button type="submit" name = 'submit' class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
