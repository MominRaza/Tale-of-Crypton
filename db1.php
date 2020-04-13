<?php
$conn = mysqli_connect('database end point', 'root', 'password','toc');
// // mysqli_select_db($conn, 'momin');
// $q = "select *from user";
// $results = mysqli_query($conn, $q);

// while($row = mysqli_fetch_assoc($results)) {
//     echo "id: " . $row['id'] . '<br/>'.
//          'Book Name : '. $row['book_name']."<br>".
//          'Author name : '. $row['author_name']."<br>";
// }

if(!$conn) {
    $_SESSION['nothing'] = "connection failed";
}
else {
//      echo "hello world";
}
?>
