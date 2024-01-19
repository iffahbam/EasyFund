<?php
  session_start();

  if(isset($_POST['btn_login']))
  {
      
    $username = trim(addslashes($_POST['username']));
    $password = trim(addslashes($_POST['password']));
    
    if($username != '' && $password != '') 
    {   
      include 'database.php'; 

      $sql = "SELECT *    
              FROM admin
              WHERE username = '$username' AND password = '$password'
              UNION
              SELECT * 
              FROM donor
              WHERE username = '$username' AND password = '$password' ";

      $result = mysqli_query($mysqli, $sql) or die('Query failed. ' . mysqli_error());
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      
      if(mysqli_num_rows($result) != 0) 
      {
          $_SESSION['id'] = $row['id'];
          $_SESSION['usertype'] = $row['usertype'];
          $_SESSION['username'] = $row['name'];

          
          if($_SESSION['usertype']=='admin')
          {
            print "<script>";
            print "window.alert('Login successfull, Welcome!!');self.location='adminHome.php';"; 
            print "</script>"; 
          }  
          elseif($_SESSION['usertype']=='user')
          {
            print "<script>";
            print "window.alert('Login successfull, Welcome!!');self.location='home.php';"; 
            print "</script>"; 
          }                 
      } 
      else
      {
        print "<script>";
        print "window.alert('Please check your Username and Password');self.location='index.php';"; 
        print "</script>";
      }   
    }
    else
    {
      print "<script>";
      print "window.alert('Please fill in your Username and Password');self.location='index.php';"; 
      print "</script>";
    }       
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fonts/style.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<title>Login</title>
</head>

<body>
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-6">
<img src="img/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
</div>
<div class="col-md-6 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<h3>Login</h3>
</div>

<form action="" method="post">

<div class="form-group first">
<label for="username">Username</label>
<input type="text" class="form-control" id="username" name="username">
</div>
<div class="form-group last mb-4">
<label for="password">Password</label>
<input type="password" class="form-control" id="password" name="password">
</div>
<input type="submit" value="Log In" name="btn_login" class="btn btn-block btn-primary">

</form>

</div>
</div>
</div>
</div>
</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>