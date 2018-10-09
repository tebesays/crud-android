<?php
 include('conn.php');
    
    $username = $_POST["username"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE username = ? ");
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID, $name, $email, $username, $password, $phone);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;
        $response["id_user"] = $userID;
        $response["name"] = $name;
        $response["email"] = $email;
        $response["username"] = $username;        
        $response["password"] = $password;
    }
    
    echo json_encode($response);
?>