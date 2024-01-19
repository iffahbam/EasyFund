<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us Page</title>
  <style>
    /* nav bar */
    h3 {
        margin-top: 80px;
        margin-left: 220px;
        letter-spacing: 1px;
    }

    .profile-icon {
            position: absolute;
            display: flex;
            align-items: center;
            top: 10px;
            right: 40px;
            cursor: pointer;
        }

    body {
        background-color: rgb(241, 228, 231);
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


    .content-container {
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        align-items: center; /* Center content horizontally */
        justify-content: center; /* Center content vertically */
    }


p.solid {
  font-size: 22px;
  line-height: 2;
  border-style: solid;
  border: 1px;
  border-radius: 17px;
  background-color: #DEC5C5;
  margin-top: 100px;
  margin-left: 300px;
  margin-right: 300px;
  padding: 50px;
  padding-left: 70px;
  padding-right: 70px;
  text-align: center;
}


table {
  border: transparent;
  margin: 0 auto;
  padding-left: 70px;
  
}
  </style> 
  </head>
</html>


<html>
<head>


</head>
<body>

<a href="profile.php"> 
<div class="profile-icon">
<img src="profile.jpg" width="30" height="30" alt="Profile">
</div></a>

<div class="topnav">
            <a class="back-button" href="javascript:history.back()"><b> < </b></a>
            <div style = "padding-left: 40px">
                <a href="adminHome.php">Home</a>
                <a href="contactAdmin.php">Contact Us</a>
                <a href="aboutAdmin.php">About</a>
        </div>
</div>


<p class="solid">Your charity can help others. Your donation has the power 
to transform lives and make a lasting impact. Be the change you want to see in the world by giving generously.</p><br>

<center><p style="font-size:20px;">Have enquires? Feel free to contact us on</p></center> <br><br>

<table style="width:50%">
  <tr>
    <td><img src="email.png" alt="contactemail" width="50" height="50"></td>
    <td> <p style="font-size:20px;" class="register"> <a href="#"  style="color: black;">easyfund@gmail.com</a></p></td>
    <td><img src="phone.png" alt="phonenumber" width="50" height="50"></td>
    <td> <p style="font-size:20px;" class="register">  <a href="#"  style="color: black;">+6 03 4621 2323</a></p></td>
  </tr>
 
  </tr>
</table>



</body>
</html>


