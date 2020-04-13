<?php
include './fb-init.php';
session_destroy();
unset($_SESSION['userID']);
header("Location:index.php");
?>