<?php
require './fb-init.php';
include('db.php');

    $answer = $_POST['answer'];
    $user_level = $_SESSION['level'];
    $q = "select answer from questions where id = $user_level";
    $rightAnswer =  mysqli_fetch_assoc(mysqli_query($conn, $q));
    $fbID = $_SESSION['userID'];
    if ($answer == $rightAnswer['answer']):
        $_SESSION['answer'] = 'Right Answer';
        $user_level++;
        $status = $_SESSION['status'] + 1;
        $update = "update user set level = '$user_level', status = $status where fbToken = '$fbID'";
        $result = mysqli_query($conn, $update);
        header("Location:game.php");
    else:
        $_SESSION['answer'] = 'Wrong Answer';
        $status = max(0,$_SESSION['status'] - 1);
        $update = "update user set status = $status where fbToken = '$fbID'";
        $result = mysqli_query($conn, $update);
        header("Location:game.php");
    endif;
    
?>