<?php
  session_start();

  if(isset($_POST['signin']))
  {
      
    $username = trim(addslashes($_POST['username']));
    $password = md5(trim(addslashes($_POST['password'])));
    
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
            print "window.alert('Login successful, Welcome!');self.location='adminHome.php';"; 
            print "</script>"; 
          }  
          elseif($_SESSION['usertype']=='user')
          {
            print "<script>";
            print "window.alert('Login successful, Welcome!');self.location='home.php';"; 
            print "</script>"; 
          }                 
      } 
      else
      {
        $errorMessage = 'Invalid username or password';
      }   
    }
    else
    {

      $errorMessage = 'Invalid username or password';
    }       
  }
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "with = device-width, initial-scale = 1.0">
	<title> EasyFund Login</title>
</head>

<style>
	.container {
    	display: flex;
    	align-items: center;
    }

	img {
  		border-radius: 50%;
		  width: 340px;
      height: 340px;
		  margin-left: 200px;
	}

	form {
		display: flex;
      	flex-direction: column;
      	gap: 20px;
	}

	#error-message {
        color: #EB4852;
        text-align: center; /* Center the error message */
        margin-bottom: 3px; /* Add some space below the error message */
    }


    body {
    background-color:rgb(241, 228, 231);
}

h3 {
    margin-top: 80px;
    margin-left: 220px;
    letter-spacing: 1px;
}

#form {
    background-color:#DEC5C5;
    border-radius: 18px;
    width: 25%;
    margin-left: 280px;
    padding: 30px;
}

#username {
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
}

#password{
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
}

#btn {
    color: white;
    background-color: black;
    padding: 6px;
    border-radius: 8px;
    width: 30%;
    border: 0;
}

#btn2 {
    color: white;
    background-color: black;
    padding: 6px;
    border-radius: 8px;
    width: 30%;
    border: 0;
}



</style>

<body>
	
	<h3>WELCOME TO EASYFUND!</h3>
	<p><span style = "margin: 120px"><span style = "font-size: 16px"><span style = "letter-spacing: 1px">
		Our mission is to facilitate 
		and simplify the process of fundraising</br><span style = "margin: 180px">
		for charitable causes within the IIUM community.</p></br>

<div class="container">
	<img src="Logo.jpg" alt="Logo">

    <div id = "form">
		<form name="form" method="POST" action="">

			<div id="error-message">
        	<?php if (!empty($errorMessage)):?>

        	<?php echo $errorMessage?>

            <?php endif?>
    		</div> <!-- Error message container -->

			<input type = "text" id = "username" name="username" placeholder = "Username" required >
			<input type = "password" id = "password" name="password" placeholder = "Password" required>
			
			<div class="button-container">
          			<button type="submit" id="btn" name="signin" action="">
            			<span class="button-text">Sign In</span>
          			</button>
			<p style = "font-size: 11px"><u>Do not have an account?</u></p>
		</form>
          	

		<form name = "signup_form" method = "POST" action="signup.php">
			<button type="submit" id="btn">
    			<span class="button-text">Sign Up</span>
  			</button>
        	</div>
		</form>
	</div> 
</div>

<p></br><span style = "margin: 120px"><span style = "font-size: 16px"><span style = "letter-spacing: 1px">
		Join us today and be part of a compassionate community dedicated</br><span style = "margin: 150px">
		to making a meaningful impact in the lives of those in need.</p></br>


</body>
</html>




