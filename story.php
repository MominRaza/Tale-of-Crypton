<?php require './fb-init.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Story - Tale of Crypton - ISTE KNIT Sultanpur</title>
        <link rel="stylesheet" href="css/custom.css">
    </head>

    <body>
        <div class="background-image"></div>
        <div class="navbar-fixed" style="z-index:998;">
            <nav>
                <div class="nav-wrapper container">
                    <a href="index.php" class="brand-logo" style="min-width: fit-content;">Tale of Crypton</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        
                    <ul class="right hide-on-med-and-down">
                        <li><a href="rules.php">Rules</a></li>
                        <li class="active"><a href="story.php">Story</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>
                        
                        <?php include('nav.php');?>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li class="center"><h1><a class="black-text" href="index.php" style="font-size: 30px; font-weight:bold; min-width: fit-content;">Tale of Crypton</a></h1></li>
                        <li><a href="rules.php">Rules</a></li>
                        <li class="active"><a href="story.php">Story</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>
                        
                        <?php include('nav.php');?>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container">

            <h1 class="white-text">Story</h1>
            <p class="flow-text white-text">From the dawn of the universe, there was nothing. Then the Big Bang sent six elemental crystals, hurtling across the virgin universe. These Infinity Stones each control an essential aspect of existence.
            <br>
            <br>    The 6 Infinity Stones are:
            <br>    The Space Stone: That creates wormholes in space
            <br>    The Power Stone: That bestows immense power
            <br>    The Mind Stone: That can control minds
            <br>    The Soul Stone: That can control the soul and resurrect the dead
            <br>    The Time Stone: That can control time
            <br>    The Reality Stone: That can alter realities

            </p>

            <div class="row">
                <div class="col s12">
                    <ul  id="tabs-swipe-demo" class="tabs z-depth-1 tabs-fixed-width">
                        <li class="tab col"><a class="active" href="#test1">Power Stone</a></li>
                        <li class="tab col"><a href="#test2">Space Stone</a></li>
                        <li class="tab col"><a href="#test3">Reality Stone</a></li>
                        <li class="tab col"><a href="#test4">Soul Stone</a></li>
                        <li class="tab col"><a href="#test5">Time Stone</a></li>
                        <li class="tab col"><a href="#test6">Mind Stone</a></li>
                    </ul>
                    <div id="test1" class="col s12">
                        <img class="materialboxed" width="100%" src="images/story/story-1.jpeg">
                    </div>
                    <div id="test2" class="col s12">
                        <img class="materialboxed" width="100%" src="images/story/story-2.jpeg">
                    </div>
                    <div id="test3" class="col s12">
                        <img class="materialboxed" width="100%" src="images/story/story-3.jpg">
                    </div>
                    <div id="test4" class="col s12">
                        <img class="materialboxed" width="100%" src="images/story/story-4.jpeg">
                    </div>
                    <div id="test5" class="col s12">
                        <img class="materialboxed" width="100%" src="images/story/story-5.jpeg">
                    </div>
                    <div id="test6" class="col s12">
                        <img class="materialboxed" width="100%" src="images/story/story-6.jpeg">
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light red hoverable tooltipped" data-position="left" data-delay="50" data-tooltip="Let's Play" href="game.php">
                <i class="material-icons">image_search</i>
            </a>
        </div>

        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
           $(document).ready(function(){
                $('ul.tabs').tabs({swipeable:true});
                $(".button-collapse").sideNav();
                $('.materialboxed').materialbox();
            });
        </script>

        <?php include('modal5.php'); include('modal2.php');?>
    </body>
</html>