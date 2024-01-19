<?php session_start(); 
include "database.php";
?>

<?php

    $id = $_SESSION['id'];
    if( $id!=""){

         $sql = "SELECT *    
              FROM donor
              where id = '$id'";
         $result = mysqli_query($mysqli, $sql) or die('Query failed. ' . mysqli_error());
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

?>


<?php

    if(isset($_POST['btn_submit'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = trim($_POST['password']);

        if($password!=""){
           $password = md5($password);
        }else{
           $password = trim($_POST['password']);
        }

        if($password!=""){
            $sql = "UPDATE donor SET  name ='$name', email ='$email', phone = '$phone', username ='$username', password = '$password' WHERE id = '$id'"; 
        }else{
            $sql = "UPDATE donor SET  name ='$name', email ='$email', phone = '$phone', username ='$username' WHERE id = '$id'"; 
        }

        mysqli_query($mysqli, $sql) or die('Query failed. ' . mysqli_error());
          
        print "<script>";
        print "alert('User profile updated successfully'); self.location='profile.php';"; 
        print "</script>"; 

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyFund</title>
    <link rel="stylesheet" type="text/css" href="profile.css">

    <style>
        .profile-icon {
            position: fixed;
            top: 10px;
            right: 40px;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #DEC5C5;
        }

        .topnav a {
            float: left;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #DCA9A9;
            color: black;
        }

        .topnav a.active {
            background-color: #DCA9A9;
            color: black;
        }

        .container {
            display: flex;
            align-items: center;
        }

        form {
		        display: flex;
            flex-direction: column;
            gap: 20px;
	      }


        .edit-icon {
            position: relative;
            bottom: 110px;
            left: 1065px;
            font-size: 40px;
            cursor: pointer;
            transform: scaleX(-1);
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        body {
    background-color:rgb(241, 228, 231);
}

h2 {
    margin-top: 1px;
    letter-spacing: 1px;
}

#form {
    background-color:#DEC5C5;
    border-radius: 18px;
    width: 45%;
    margin: 0 auto;
    margin-top: 120px;
    padding: 30px;
}

#name {
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
}

#email {
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
}

#number {
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
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
    color: black;
    background-color: rgb(211, 97, 97);
    padding: 6px;
    border-radius: 8px;
    width: 30%;
    border: 1px solid #000;
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
</head>

<body>
<div class="profile-icon">
    <img src="profile.jpg" width="30" height="30" alt="Profile">
</div>

<div class="topnav">
    <a class="back-button" href="javascript:history.back()"><b> &lt; </b></a>
    <div style="padding-left:40px">
        <a href="home.php">Home</a>
        <a href="contact us page.php">Contact Us</a>
        <a href="about.php">About</a>
    </div>
</div>

<div class="container">
    <div class="edit-icon">&#9998;</div>
    <div id="form">
    <h2>My Profile</h2>

    <form name="form" method="POST" action="">
    <input type="hidden" name="id"  value="<?php echo $row['id'] ?>">
    <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $row['name'] ?>">
    <input type="text" name="phone" id="number" placeholder="Phone Number" value="<?php echo $row['phone'] ?>">
    <input type="email" name="email" id="email" placeholder="Email Address" value="<?php echo $row['email'] ?>">
    <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $row['username'] ?>">
    

    <div class="button-container">
        <button type="submit" id="btn" name="btn_submit">
            <span class="button-text">Save Changes</span>
        </button>

        <button type="button" id="btn2">
            <span class="button-text">Sign Out</span>
        </button>
        
    </div>
    </form>
    </div>
</div>

<script>
    // Handle Cancel button click
    document.getElementById("btn").addEventListener("click", function () {
        window.location.href = "home.php"; // Redirect to home.php
    });

    // Handle Sign Out button click
    document.getElementById("btn2").addEventListener("click", function () {
        alert('Logging out...'); // Display an alert as a simple loading indicator

        // Simulate a 2-second delay before redirecting to index.php
        setTimeout(function () {
            window.location.href = "index.php"; // Redirect to index.php
        }, 1000); // 2000 milliseconds = 2 seconds
    });
</script>

</body>
</html>
</head>
