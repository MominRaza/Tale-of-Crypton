<?php
    require './fb-init.php'; 
    include('db1.php');
    $id = $_POST['id'];
    $image = $_POST['image'];
    $answer = $_POST['answer'];

    $add = "insert into gquestions(id, image, answer) values($id, '$image', '$answer')";
    //$add = "UPDATE questions SET image = '$image' WHERE id = $id";
    //$add = "DELETE FROM questions WHERE id = $image";
    $result = mysqli_query($conn, $add);
    
    if($result):
        header("Location:qstn.php");
    else: 
        echo "Something Wrong!";
    endif;
?>