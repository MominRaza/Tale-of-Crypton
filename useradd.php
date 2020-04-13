<?php
    require './fb-init.php'; 
    include('db.php');
    $name = $_POST['name'];
    $fbID = $_POST['email'];
    $year = $_POST['year'];
    $college = $_POST['college'];
    $number = $_POST['number'];
    $passwd = $_POST['passwd'];

    $chkemail = mysqli_query($conn, "SELECT * FROM user where fbToken='$fbID'");
    $num_rows = mysqli_num_rows($chkemail);
    if($num_rows >= 1){
        $_SESSION['nothing'] = "Email is already registered!";
        header("Location:index.php");
    }else{
        $add = "insert into user(fbToken, userName, year, college, number, passwd) values('$fbID', '$name', '$year', '$college', $number, '$passwd')";
        $result = mysqli_query($conn, $add);
        
        if($result):
            $_SESSION['userID'] = $fbID;
            $_SESSION['nothing'] = "Welcome!";
            header("Location:index.php");
        else: 
            $_SESSION['nothing'] = "Something Wrong!";
            header("Location:index.php");
        endif;   
    }
?>