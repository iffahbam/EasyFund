<?php
include('connect.php');
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $targetAmount = mysqli_real_escape_string($conn, $_POST["targetAmount"]);
    $accountNumber = mysqli_real_escape_string($conn, $_POST["accountNumber"]);
    // Hash the account number before inserting it into the database
    $hashedAccountNumber = password_hash($accountNumber, PASSWORD_DEFAULT);
    
    $sqlInsert = "INSERT INTO news(title , description , targetAmount , accountNumber) VALUES ('$title','$description','$targetAmount', '$hashedAccountNumber')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "New Fundraising Added Successfully!";
        header("Location:adminHome.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $targetAmount = mysqli_real_escape_string($conn, $_POST["targetAmount"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE news SET title = '$title', description = '$description', targetAmount = '$targetAmount' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Fundraising Updated Successfully!";
        header("Location:adminHome.php");
    }else{
        die("Something went wrong");
    }
}
?>

