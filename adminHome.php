
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

.new-button {
    position: fixed;
    top: 80px;
    left: 60px;
}

.text {
    display: inline-block;
    vertical-align: middle;
    margin-left: 10px;
    margin-bottom: 20px;
    font-size: 20px; 
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
    height: 40%;
    padding: 60px;
    border: 1px solid black;
    margin: 60px;
    text-align: center; 
  }

  .box:nth-child(3) p {
    margin-bottom: 25px; /* Add space after the paragraph text in Box 3 */
  }

  .loading-container {
  display: flex;
  justify-content: center; /* Center the loading bars horizontally */
  margin-right: 20px; /* Adjust the margin as needed */
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
    width: 50%; /* Adjust the width as needed for the loading progress */
    border-radius: 10px;
  }

  .loading-text {
  position: absolute;
  top: -25px; /* Adjust the position as needed */
  left: 0;
  width: 100%;
  text-align: center;
  font-size: 20px;
}

.edit-icon {
            position: relative;
            bottom: 80px; 
            left: 175px;
            font-size: 40px;
            cursor: pointer;
            transform: scaleX(-1); 
        }

</style>
</head>
<body>

<div class="profile-icon">
<img src="profile.jpg" width="30" height="30" alt="Profile">
</div>

<div class="topnav">
<div style = "padding-left:40px">
  <a class="active" href="#Home">Home</a>
  <a href="#ContactUs">Contact Us</a>
  <a href="#About">About</a>
</div>
</div>

<div class ="new-button" onclick="addNewAnnouncement()">
    <img src ="plus.jpg" width="30" height="30" alt="Plus Icon">
    <span class ="text">NEW</span>
</div>

<div class="box-container">
    <div class="box">
    <div class="edit-icon">&#9998;</div>
      <h2>Condelence For Imran Syakir</h2></br>
      <p>Heartfelt condolences to brother
        Imran, student from KICT whose mother has just passed away recently.</p>
    </div>
    
    <div class="box">
    <div class="edit-icon">&#9998;</div>
      <h2>Fire Relieve Fundraiser</h2></br>
      <p>Sister Humaira, student from AIKOL just lost her house due to fire 
          on May in Melaka. Lets donate to relieve her burden.</p>
    </div>
    <div class="box">
    <div class="edit-icon">&#9998;</div>
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

