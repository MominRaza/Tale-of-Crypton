<?php
    require './fb-init.php'; 
    include('db.php');
    $fbID = $_POST['email'];
    $passwd = $_POST['passwd'];

    $chkemail = mysqli_query($conn, "SELECT * FROM user where fbToken='$fbID'");
    $num_rows = mysqli_fetch_assoc($chkemail);
    if(!$num_rows == ''){
        if($num_rows['passwd'] == $passwd){
            $_SESSION['userID'] = $fbID;
            $_SESSION['nothing'] = "Welcome Back!";
            header("Location:index.php");
        }else{
            $_SESSION['nothing'] = "Password did not match!";
            header("Location:index.php");
        }
    }else{
        $_SESSION['nothing'] = "Email not registered!";
        header("Location:index.php");
    }
?>