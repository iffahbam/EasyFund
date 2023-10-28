<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    
    <style>    
    
    /* navbar */     

            body {
                background-color: rgb(241, 228, 231);
            }

            h2 {
                margin-top: auto;
                letter-spacing: 1px;
            }

            .profile-icon {
                position: absolute;
                display: flex;
                align-items: center;
                top: 10px; /* Adjust the top position as needed */
                right: 40px; /* Adjust the right position as needed */
                cursor: pointer; /* Add a pointer cursor on hover */
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

  /* style for othert details */         
           
.container {
    margin-bottom: 0 auto;
    background-color:#DEC5C5;
    border-radius: 18px;
    width: 45%;
    margin: 0 auto;
    margin-top: 90px;
    padding: 35px; /* Add padding to the form */
}

.button-container {
    display: flex;
    justify-content: center; /* Center horizontally */
    gap: 30px; /* Add some space between the buttons */
    margin-top: 20px; /* Add space above the buttons */
    margin-bottom: 20px; /* Add space below the buttons */
}

input[type="text"] {
    background-color: white;
    width: 95%;
    padding: 10px;
    border: 0;
    border-radius: 8px;
    margin-bottom: 20px; /* Add space below the buttons */
}

textarea {
    background-color: white;
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: 0;
    border-radius: 8px;
    font-family: Arial, Helvetica, sans-serif;
    min-height: 200px; /* Minimum height for the textarea */
    overflow: auto; /* Add a scrollbar if content exceeds the textarea height */
    resize: none;
}


input[type="submit"] {
    background-color: rgb(24, 212, 24);
    color: black;
    padding: 6px;
    border: 1px solid #000;
    border-radius: 8px;
    cursor: pointer;
    width: 10%;
}
    </style>
</head>

<body>
 
    <div class="profile-icon"> 
        <img src="profile.jpg" width="30" height="30" alt="Profile">
    </div>

    <div class="topnav">
            <a class="back-button" href="javascript:history.back()"><b> < </b></a>
            <div style = "padding-left:40px">
                <a href="home.php">Home</a>
                <a href="contact us page.php">Contact Us</a>
                <a href="#About">About</a>
        </div>
    </div>


     <div class="container">
        <form action="home.php" method="POST">
            
            <h2>Title</h2>
                <input type="text" id="title" name="title" placeholder="Fundraising Title">
          
            <h2>Description</h2>
                <textarea id="description" name="description" placeholder= "Description details of the receiver's situation" contentEditable="true"></textarea>
     </div>
        </form>

    <div class="button-container">
                <input type="submit" value="Add" onclick="window.location.href='adminHome.php';">
	</div>
</body>
</html>
