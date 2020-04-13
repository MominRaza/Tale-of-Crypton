<?php if (isset($_SESSION['userID'])): 
    include('db.php');
    $fbID = $_SESSION['userID'];
    $userq = "select *from user where fbToken = '$fbID'";
    $userr = mysqli_fetch_assoc(mysqli_query($conn, $userq));
?>

<li><a class="waves-effect waves-light btn" href="logout.php">Logout</a></li>
    <li><a data-target="modal2" class="modal-trigger"><i class="material-icons left">perm_identity</i>
    <?php echo $userr['userName'];?></a></li>

<?php else: ?>

<li><a class="waves-effect waves-light btn pulse modal-trigger"  data-target="modal5">Login</a></li>

<?php endif; ?>