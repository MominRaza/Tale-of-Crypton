<?php
    require './fb-init.php'; 
    include('db1.php');
    $email = $_GET['email'];

    $add = "UPDATE user SET status = 4 WHERE fbToken = '$email'";
    $result = mysqli_query($conn, $add);
    
    if($result):
        header("Location:members.php");
    else: 
        echo "Something Wrong!";
    endif;
?>