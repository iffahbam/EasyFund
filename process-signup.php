<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if (empty($_POST["phone"])) {
    die("Phone Number is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (empty($_POST["username"])) {
    die("Username is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}


$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$username = $_POST["username"];
$password = md5($_POST["password"]);
                  
                  
include "connect.php";             

$sql = "INSERT INTO  donor (name,phone,email,username,password,usertype) VALUES 
            ('$name','$phone','$email','$username','$password','user')"; 

mysqli_query($conn, $sql) or die('Query failed. ' . mysqli_error());

print "<script>";
print "alert('User successfully registered'); self.location='index.php';"; 
print "</script>"; 

//$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

//$mysqli = require __DIR__ . "/database.php";

/*$sql = "INSERT INTO donor (name, phone, email, username, password)
        VALUES (?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssss",
                  $_POST["name"],
                  $_POST["phone"],
                  $_POST["email"],
                  $_POST["username"],
                  md5($password));
                  
if ($stmt->execute()) {

    header("Location: index.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}*/








