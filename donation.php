<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "with = device-width, initial-scale = 1.0">
	<title> Donation Page </title>
<style>
    /* nav bar */
    h3 {
        margin-top: 80px;
        margin-left: 220px;
        letter-spacing: 1px;
    }

    .profile-icon {
        position: fixed;
        top: 10px;
        right: 40px;
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


  .box {
    background-color: white;
    width: 58%;
    height: 40%;
    padding: 40px;
    border: 1px solid black;
    border-radius: 4px;
    margin: 57px;
    text-align: center; 
  }


  /* progress bar */
  .loading-container {
    display: flex;
    flex-direction: column; /* Stack loading bars vertically */
    align-items: center; /* Center loading bars horizontally */
    justify-content: center; /* Center loading bars vertically */
}

.loading-bars {
    width: 90%;
    display: flex;
    flex-direction: column; /* Stack loading bars vertically */
    align-items: center; /* Center loading bars horizontally */
    justify-content: center; /* Center loading bars vertically */
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
    top: -25px; /* Adjust position */
    left: 0;
    width: 100%;
    text-align: center;
    font-size: 20px;
}

/* Style for the Enter Amount input field */
        .amount-input {
            width: 45%;
            padding: 10px;
            margin: 5px 10px; /* Adjust margin values */
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            float: left;
        }

        /* Style for the Donate button */
        .donate-button {
            background-color: rgb(24, 212, 24); /* Green color */
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 15px; /* Adjusted border-radius for consistency */
            cursor: pointer;
            margin: 5px 10px; /* Adjust margin values */
            margin-top: 20px;
        }

        /* Style for the Donate button on hover */
        .donate-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        /* Container for Enter Amount and Donate button */
        .donation-container {
            display: flex;
            gap: 1px; /* Add some space between the buttons */
            align-items: center; /* Center horizontally */
            flex-direction: column;
            justify-content: center; /* Center vertically */
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
                <a href="#About">About</a>
        </div>
</div>

<div class="content-container">
    <div class="box">
      
        <h2>Condelence For Imran Syakir</h2></br>
      <p> Assalamualaikum w.b.t, KICTSS would like to express our heartfelt condolences to our dear KICT member, Imran Syakir bin Isa, 
        student from KULLIYAH OF INFORMATION & COMMUNICATION TECHNOLOGY, whose mother has just passed away recently. 
        May Allah SWT bless his mother with His mercy and the highest of Jannah. </br></br></br>
        
        اَللَّهُمَّ اغْفِرْلَهَا وَارْحَمْهَا وَعَافِهَا وَاعْفُ عَنْهَا </br></br></br>
        
        Targeted amount: RM1000</br></p>
 </div>   
  </div>

  <div class="loading-container">
  <div class="loading-bars">
    <div class="loading-bar">
    <div class="loading-text">RM650 of RM1000</div>
      <div class="loading-fill"></div>
    </div>
  </div>
</div>

    <!-- Container for Enter Amount and Donate button -->
    <div class="donation-container">
    <form action="payment.php" method="POST">
            <!-- Enter Amount input field -->
            <input type="number" class="amount-input" placeholder="Enter Amount (RM)">
            <!-- Donate button -->
            <button class="donate-button">Donate</button>
        </div>

</body>
</html>
</head>

