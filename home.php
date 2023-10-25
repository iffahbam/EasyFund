<?php
session_start();
?>


<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "with = device-width, initial-scale = 1.0">
	<title> EasyFund </title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">

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

.box-container {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
    margin-bottom: 0px;
  }

  .box {
    background-color: white;
    width: 30%;
    min-height: 200px;
    padding: 60px;
    border: 1px solid black;
    margin: 60px;
    text-align: center; 
    border-radius: 15px;
    letter-spacing: 1px;
  }

a {
    color: black;
    text-decoration: none; /* Optional: Remove underlines from links */
}

  .box:nth-child(3) p {
    margin-bottom: 25px; /*space after the paragraph text in Box 3 */
  }

  .loading-container {
    display: flex;
    justify-content: center; /* Center loading bars horizontally */
    margin-right: 20px; /* Adjust margin*/
    margin-bottom: 60px;
}

.loading-bars {
    width: 90%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.loading-bar {
    width: calc(30% - 55px); /* Adjust margins and spacing */
    height: 25px;
    background-color: white;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    position: relative;
    border: 1px solid #000;
}

  .loading-fill {
    height: 100%;
    background-color: #DA3A3A;
    width: 50%; /* Adjust width for loading progress */
    border-radius: 10px;
  }

  .loading-text {
    position: absolute;
    bottom: 35px; /* Adjust the value to add more space */
    left: 0;
    width: 100%;
    text-align: center;
    font-size: 20px;
    letter-spacing: 1px;
}

</style>
</head>
<body>
<?php echo $_SESSION["username"]?>

<a href="profile.php"> 
<div class="profile-icon">
<img src="profile.jpg" width="30" height="30" alt="Profile">
</div></a>

<div class="topnav">
<div style = "padding-left:40px">
  <a class="active" href="#Home">Home</a>
  <a href="contact us page.php">Contact Us</a>
  <a href="#About">About</a>
  <a href=""></a>
</div>
</div>

<div class="box-container">
    <div class="box">
      <a href = "donation.php">
      <h2>Condelence For Imran Syakir</h2></br>
      <p>Heartfelt condolences to brother
        Imran, student from KICT whose mother has just passed away recently.</p></a>
    </div>
    
    <div class="box">
      <h2>Fire Relieve Fundraiser</h2></br>
      <p>Sister Humaira, student from AIKOL just lost her house due to fire 
          on May in Melaka. Lets donate to relieve her burden.</p>
    </div>
    <div class="box">
      <h2>Flood Victim</h2></br>
      <p>We regret to inform you that brother Afiq from IRKHS has been 
          caught in the devastating flood that has affected his home and belongings</p>
    </div>
  </div>

  <div class="loading-container">
  <div class="loading-bars">
    <div class="loading-bar">
    <div class="loading-text">RM650 of RM1000</div>
      <div class="loading-fill"></div>
    </div>
    <div class="loading-bar">
    <div class="loading-text">RM650 of RM1000</div>
      <div class="loading-fill"></div>
    </div>
    <div class="loading-bar">
    <div class="loading-text">RM650 of RM1000</div>
      <div class="loading-fill"></div>
    </div>
  </div>
</div>

<div class="box-container">
    <div class="box">
      <h2>Condelence For Imran Syakir</h2></br>
      <p>Heartfelt condolences to brother
        Imran, student from KICT whose mother has just passed away recently.</p>
    </div>
    
    <div class="box">
      <h2>Fire Relieve Fundraiser</h2></br>
      <p>Sister Humaira, student from AIKOL just lost her house due to fire 
          on May in Melaka. Lets donate to relieve her burden.</p>
    </div>
    <div class="box">
      <h2>Flood Victim</h2></br>
      <p>We regret to inform you that brother Afiq from IRKHS has been 
          caught in the devastating flood that has affected his home and belongings</p>
    </div>
  </div>

  <div class="loading-container">
  <div class="loading-bars">
    <div class="loading-bar">
    <div class="loading-text">RM650 of RM1000</div>
      <div class="loading-fill"></div>
    </div>
    <div class="loading-bar">
    <div class="loading-text">RM650 of RM1000</div>
      <div class="loading-fill"></div>
    </div>
    <div class="loading-bar">
    <div class="loading-text">RM650 of RM1000</div>
      <div class="loading-fill"></div>
    </div>
  </div>
</div>

</body>
</html>
</head>
