<?php
    include('conn.php');
    
    $nama = $_POST["nama"];
    $phone = $_POST["notlp"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    
    $statement = mysqli_prepare($con, "INSERT INTO user (name, email, username, password, phone) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, 'sssss', $nama, $email, $username, $password, $phone);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>