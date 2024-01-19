<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Page</title>
  <style>
    .page-heading {
            text-align: center;
            margin-top: 60px;
            font-size: 22px;
    }

    h4 {
        font-weight: normal; /* Set font weight to normal */
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

    .boxes-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 50px;
    }

    .box {
        display: flex;
        align-items: center; 
        justify-content: center; 
        width: 40%;
        height: 170px;
        margin: 10px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        text-align: center;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 17px;
    }

    .box:nth-child(1) {
        background-color: #FAF6E6; /* First box background color */
    }

    .box:nth-child(2) {
        background-color: #DEC89A; /* Second box background color */
    }

    .box:nth-child(3) {
        background-color: #DEC89A; /* Third box background color */
    }

    .box:nth-child(4) {
        background-color: #FAF6E6; /* Fourth box background color */
    }


  </style> 
  </head>

<body>

<a href="profile.php"> 
<div class="profile-icon">
<img src="profile.jpg" width="30" height="30" alt="Profile">
</div></a>

<div class="topnav">
            <a class="back-button" href="javascript:history.back()"><b> < </b></a>
            <div style = "padding-left: 40px">
                <a href="home.php">Home</a>
                <a href="contact us page.php">Contact Us</a>
                <a href="about.php">About</a>
        </div>
</div>

<h4 class="page-heading">EasyFund is All About Helping Others</h4>
<div class="boxes-container">
    <div class="box">
        <p>Kindness is the language which the deaf can hear and the blind can see.</p>
    </div>
    <div class="box">
        <p>Small acts, when multiplied by millions of people, can transform the world.</p>
    </div>
    <div class="box">
        <p>The best way to find yourself is to lose yourself in the service of others.</p>
    </div>
    <div class="box">
        <p>No one has ever become poor by giving.</p>
    </div>
</div>

<br><br><br>


</body>
</html>
