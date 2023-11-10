<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Details</title>
</head>

<style>
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

input[type="number"] {
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

.update {
    background-color: rgb(24, 212, 24);
    color: black;
    padding: 6px;
    border: 1px solid #000;
    border-radius: 8px;
    cursor: pointer;
    width: 20%;
}

input[type="button"] {
    background-color: rgb(211, 97, 97);
    color: black;
    padding: 6px;
    border: 1px solid #000;
    border-radius: 8px;
    cursor: pointer;
    width: 20%;
}

    </style>

<body>
<a href="adminProfile.php">
    <div class="profile-icon">
        <img src="profile.jpg" width="30" height="30" alt="Profile">
    </div>
    </a>
    
    <div class="topnav">
            <a class="back-button" href="javascript:history.back()"><b> < </b></a>
            <div style = "padding-left:40px">
                <a href="adminHome.php">Home</a>
                <a href="contact us page.php">Contact Us</a>
                <a href="#About">About</a>
        </div>
    </div>

    <div class="container">
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM news WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                <h4>Title</h4>
                <input type="text" id="title" name="title" placeholder="Fundraising Title" value="<?php echo $row["title"]; ?>">
                
                <h4>Description</h4>
                <textarea id="description" name="description" placeholder="Description details"><?php echo $row["description"]; ?></textarea>
                <br>
                <h4>Target Amount</h4>
                <input type="number" id="targetAmount" name="targetAmount" placeholder="RM" value="<?php echo $row["targetAmount"]; ?>">
          
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="button-container">
            <input type="button" value="Cancel" onclick="window.location.href='adminHome.php';">
                <input type="submit" name="edit" value="Update" class="update">
            </div>
                <?php
            }else{
                echo "<h3>News Does Not Exist</h3>";
            }
            ?>
           
        </form>
    </div><br><br><br>
    
</body>
</html>

