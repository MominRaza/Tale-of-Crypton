<?php 
      require './fb-init.php'; 
      $_SESSION['nothing'] = 'Game Is Ended';
      header("Location:index.php");
?><?php
  require './fb-init.php'; 
  include('db.php');
  
  $fbID = $_SESSION['userID'];
  $userq = "select *from user where fbToken = '$fbID'";
  $userr = mysqli_fetch_assoc(mysqli_query($conn, $userq));

    $user_level = $userr['level'];
    $user_glevel = $userr['glevel'];
    $_SESSION['level'] = $user_level;
    $_SESSION['glevel'] = $user_glevel;
    $_SESSION['status'] = $userr['status'];
    if($_SESSION['status'] >= 4):
      $_SESSION['nothing'] = 'You Are Blocked';
      header("Location:index.php");
    endif;

    if($user_level == 6 && $user_glevel == 0){
    }elseif ($user_level == 11 && $user_glevel == 1) {
    }elseif ($user_level == 16 && $user_glevel == 2) {
    }elseif ($user_level == 21 && $user_glevel == 3) {
    }elseif ($user_level ==  26 && $user_glevel == 4) {
    }elseif ($user_level == 31 && $user_glevel == 5) {
    }else{
      header('location:game.php');
    }

    $q = "select *from gquestions where id = $user_glevel + 1";
    $result =  mysqli_fetch_assoc(mysqli_query($conn, $q));
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Game - Tale of Crypton - ISTE KNIT Sultanpur</title>
        <link rel="stylesheet" href="css/custom.css">
    </head>

    <body>
        <div class="background-image g"></div>
        <div class="navbar-fixed" style="z-index:998;">
            <nav>
                <div class="nav-wrapper container">
                  <a href="index.php" class="brand-logo" style="min-width: fit-content;">Tale of Crypton</a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                      <li><a href="rules.php">Rules</a></li>
                      <li><a href="story.php">Story</a></li>
                      <li><a href="leaderboard.php">Leaderboard</a></li>

                      <?php if (isset($_SESSION['userID'])): ?>
                      <li><a class="waves-effect waves-light btn" href="logout.php">Logout</a></li>
                      <li><a data-target="modal2" class="modal-trigger"><i class="material-icons left">perm_identity</i><?php echo $userr['userName'];?></a></li>
                      <?php else: header("Location:index.php");
                      $_SESSION['nothing'] = 'Login First';
                      endif; ?>
                  </ul>
                  <ul class="side-nav" id="mobile-demo">
                      <li class="center"><h1><a class="black-text" href="index.php" style="font-size: 30px; font-weight:bold; min-width: fit-content;">Tale of Crypton</a></h1></li>
                      <li><a href="rules.php">Rules</a></li>
                      <li><a href="story.php">Story</a></li>
                      <li><a href="leaderboard.php">Leaderboard</a></li>

                      <?php if (isset($_SESSION['userID'])): ?>
                      <li><a class="waves-effect waves-light btn" href="logout.php">Logout</a></li>
                      <li><a data-target="modal2" class="modal-trigger"><i class="material-icons left">perm_identity</i><?php echo $userr['userName'];?></a></li>
                      <?php else: header("Location:index.php");
                      $_SESSION['nothing'] = 'Login First';
                      endif; ?>
                  </ul>
                </div>
            </nav>
        </div>

        <div class="container">
            <h1 class="white-text">Now Grab Your Stone</h1>
            <p class="flow-text white-text">"Whatever happens tomorrow you must promise me one thing. That you will stay who you are. Not a perfect soldier, but a good man."</p>
            <p class="flow-text right white-text">– Captain America</p>

            <div class="row">
                <div class="col s12 m8 offset-m2">
                  <div class="card">
                    <div class="card-image">
                      <img src="<?php echo $result['image']; ?>">
                      
                      <a class="btn-floating halfway-fab waves-effect waves-light red hoverable tooltipped" data-position="left" data-delay="50" data-tooltip="Hints on Facebook" href="https://www.facebook.com/isteknit/"><i class="material-icons">help_outline</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Get Your Stone:</span>
                      <p><?php echo $result['hint']; ?></p>

                      <div class="clearfix"></div>
                      <form action="gameVerig.php" method="post">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="answer" name="answer" type="text" class="validate" style="font-family: Arial;" required>
                            <label for="answer">Answer</label>
                          </div>
                          <div class="input-field col s12">
                              <button class="waves-effect waves-light btn right" type="submit">Submit</button>
                          </div>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
            </div>      
        </div>
        
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">add</i>
            </a>
            <ul>
                <li><a href="#" class="btn-floating green waves-effect waves-light red hoverable tooltipped" data-position="left" data-delay="50" data-tooltip="ISTE Website"><i class="material-icons">public</i></a></li>
                <li><a href="https://www.facebook.com/isteknit" class="btn-floating blue waves-effect waves-light red hoverable tooltipped" data-position="left" data-delay="50" data-tooltip="ISTE Facebook"><i class="material-icons">thumb_up</i></a></li>
                <li><a href="#modal4" class="btn-floating red waves-effect waves-light red hoverable tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="Contact Info"><i class="material-icons">bug_report</i></a></li>
            </ul>
        </div>
        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".button-collapse").sideNav();
            });
        </script>

        <script>
          <?php
          if(isset($_SESSION['answer'])){
          ?>
          Materialize.toast('<?php echo $_SESSION['answer'];?>', 4000)
            <?php
            $_SESSION['answer'] = '';
          }?>    
        </script>
        <?php include('modal2.php'); include('modal4.php');?>
    </body>
</html>
