<?php
    include('conn.php');
    
    $id_user = $_POST["id_user"];
  	
	$statement3 = "DELETE FROM user where id_user = '$id_user'";
    
    
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