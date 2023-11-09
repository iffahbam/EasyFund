<?php
function encrypt($data, $key, $iv) {
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($encrypted);
}

function decrypt($data, $key, $iv) {
    $data = base64_decode($data);
    return openssl_decrypt($data, 'aes-256-cbc', $key, 0, $iv);
}

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$error = '';

if(isset($_POST["add"])) {
    if (empty($_POST["title"]) || empty($_POST["description"] ) || empty($_POST["targetAmount"] ) || empty($_POST["accountNumber"])) {
        $error = '<label class="text-danger">Title and Description are required</label>';
    } else {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $targetAmount = $_POST["targetAmount"];
        $accountNumber = $_POST["accountNumber"];

        // Define your encryption key and IV
        $encryptionKey = random_bytes(32);// Replace with your secret key
        $iv = random_bytes(16);; // Replace with your initialization vector

        // Encrypt the Account Number
        $encryptedAccountNumber = encrypt($accountNumber, $encryptionKey, $iv);

        $query = "INSERT INTO news (title, description, targetAmount, accountNumber) VALUES (:title, :description, :targetAmount, :accountNumber)";
        $statement = $connect->prepare($query);

        $data = array(
            ':title' => $title,
            ':description' => $description,
            ':targetAmount' => $targetAmount,
            ':accountNumber' => $encryptedAccountNumber
        );

        if ($statement->execute($data)) {
            $error = '<label class="text-success">Data Inserted Successfully</label>';

            header("Location: adminHome.php");
            exit();
        } 
        
        else {
            $error = '<label class="text-danger">Data Insertion Failed</label>';
        }
    }
}
?>

<html>
    <head>
        <title>Insert multiple data to mysql using single textarea in PHP</title>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>  

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
  
  .box {
        background-color: white;
        width: calc(33.33% - 55px); /* 3 columns with gap between them */
        padding: 90px;
        border: 1px solid #000;
        border-radius: 8px;
        text-align: center;
    }

    .column-container {
        display: flex;
        gap: 20px; /* Adjust the gap between boxes */
        justify-content: space-between; /* Distribute boxes evenly in 3 columns */
        flex-wrap: wrap; /* Wrap to the next line if there are more than 3 boxes */
        padding: 20px;
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

textarea[name="description"] {
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

.add {
    background-color: rgb(24, 212, 24);
    color: black;
    padding: 6px;
    border: 1px solid #000;
    border-radius: 8px;
    cursor: pointer;
    width: 12%;
}
    </style>


    <body>
    <?php echo $_SESSION["username"] ?>
    <a href ="adminProfile.php">
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
    <form method="POST" enctype="multipart/form-data">
        <h4>Title</h4>
        <input type="text" id="title" name="title" placeholder="Fundraising Title">
          
        <h4>Description</h4>
        <textarea id="description" name="description" placeholder="Description details of the receiver's situation"></textarea>

        <h4>Target Amount</h4>
        <input type="number" name="targetAmount" placeholder="RM">

        <h4>Account Number</h4>
        <input type="text" id="accountNumber" name="accountNumber" placeholder="Account Number">

        
        <div class="button-container">
            <input class="add" type="submit" name = "add" value="Add">
        </div>
    </form>
    </div>
        <br><br><br>

    </body>  
</html>
