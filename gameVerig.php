<?php
require './fb-init.php';
include('db.php');

    $answer = $_POST['answer'];
    $user_glevel = $_SESSION['glevel'];
    $q = "select answer from gquestions where id = $user_glevel + 1";
    $rightAnswer =  mysqli_fetch_assoc(mysqli_query($conn, $q));
    $fbID = $_SESSION['userID'];
    if ($answer == $rightAnswer['answer']):
        $_SESSION['answer'] = 'You got a stone.';
        $user_glevel++;
        $status = $_SESSION['status'] + 1;
        $update = "update user set status = $status, glevel = $user_glevel where fbToken = '$fbID' ";
        $result = mysqli_query($conn, $update);
        header("Location:game.php");
    else:
        $_SESSION['answer'] = 'Wrong Answer';
        $status = max(0,$_SESSION['status'] - 1);
        $update = "update user set status = $status where fbToken = '$fbID'";
        $result = mysqli_query($conn, $update);
        header("Location:gameg.php");
    endif;
?>