<?php
    include('conn.php');
    
    $id_user = $_POST["id_user"];
    
    $username = $_POST["username"];
    $nama = $_POST["nama"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    
	
	$statement3 = "UPDATE user SET username = '$username', name = '$nama', password ='$password', email = '$email' WHERE id_user = '$id_user'";
    
    
    $response = array();
    
    if(mysqli_query($con, $statement3))
    {
        $response["success"] = true;
    }
    else
    {
         $response["success"] = false;   
    }
  
    echo json_encode($response);
	
?>