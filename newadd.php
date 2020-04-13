<?php
    require './fb-init.php'; 
    include('db1.php');
    $id = $_POST['id'];
    $name = $_POST['name'];

    //$add = "insert into questions(image, answer) values('$image', '$answer')";
    $add = "UPDATE new SET name = '$name' WHERE id = $id";
    $result = mysqli_query($conn, $add);
    
    if($result):
        header("Location:new.php");
    else: 
        echo "Something Wrong!";
    endif;
?>