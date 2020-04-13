<?php require './fb-init.php';?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <meta property="og:site_name" content="Tale of Crypton" />
        <link rel="mask-icon" sizes="any" href="images/logo.png" color="#1da1f2">
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="192x192" href="images/logo.png" />


        <title>Tale of Crypton - ISTE KNIT Sultanpur</title>
        <link rel="stylesheet" href="css/custom.css">
    </head>

    <body style="overflow:hidden;">
        <div class="navbar-fixed" style="z-index:998;">
            <nav>
                <div class="nav-wrapper container">
                    <a href="index.php" class="brand-logo" style="min-width: fit-content;">Tale of Crypton</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="rules.php">Rules</a></li>
                        <li><a href="story.php">Story</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>
                        
                        <?php include('nav.php');?>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li class="center"><h1><a class="black-text" href="index.php" style="font-size: 30px; font-weight:bold; min-width: fit-content;">Tale of Crypton</a></h1></li>
                        <li><a href="rules.php">Rules</a></li>
                        <li><a href="story.php">Story</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>

                        <?php include('nav.php');?>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="navbar-fixed" style=" position: absolute; bottom: 250px; text-align: center; width: 100%;">
            <h4 class="white-text light text-lighten-3" style="text-shadow: 2px 2px 3px black;">ISTE KNIT Sultanpur Presents</h4>
            <h1 class="white-text hide-on-small-only" style="text-shadow: 4px 4px 3px black;">Tale of Crypton</h1>
            <h2 class="white-text hide-on-med-and-up	" style="text-shadow: 4px 4px 3px black;">Tale of Crypton</h2>

            <?php if (isset($_SESSION['userID'])): ?>
            <a class="waves-effect waves-light btn pulse" href="game.php">Let's Play</a>
            <?php else: ?>
            <a class="waves-effect waves-light btn pulse modal-trigger" data-target="modal1">Create New Account</a>
            <?php endif; ?>
            <div style="margin-bottom: 50px;"></div>
        </div>

        <div class="slider fullscreen">
            <ul class="slides">
                <li>
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="background-image: url('./images/slider/slide-01.jpg');">
                    <div class="caption left-align">
                    <h3>"If we can't protect the Earth, you can be damn sure we'll avenge it"</h3>
                    <h5 class="light grey-text text-lighten-3 right">- Tony Stark</h5>
                    </div>
                </li>
                <li>
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="background-image: url('./images/slider/slide-02.jpg');">
                    <div class="caption right-align">
                    <h3>"I CAN DO THIS ALL DAY"</h3>
                    <h5 class="light grey-text text-lighten-3">- Captain America</h5>
                    </div>
                </li>
                <li>
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="background-image: url('./images/slider/slide-03.jpg');">
                    <div class="caption left-align">
                    <h3>"THE CITY IS FLYING AND WE’RE FIGHTING AN ARMY OF ROBOTS..."</h3>
                    <h5 class="light grey-text text-lighten-3 right">- Hawkeye</h5>
                    </div>
                </li>
                <li>
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="background-image: url('./images/slider/slide-04.jpg');">
                    <div class="caption right-align">
                    <h3>"These guys come from legend, Captain. They're basically Gods."</h3>
                    <h5 class="light grey-text text-lighten-3">- Black Widow</h5>
                    </div>
                </li>
                <li>
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="background-image: url('./images/slider/slide-05.jpg');">
                    <div class="caption left-align">
                    <h3>"There was an idea to bring together a group of remarkable people"</h3>
                    <h5 class="light grey-text text-lighten-3 right">- Nick Fury</h5>
                    </div>
                </li>
            </ul>
        </div>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">add</i>
            </a>
            <ul>
                <li><a href="https://isteknit.org" class="btn-floating green waves-effect waves-light red hoverable tooltipped" data-position="left" data-delay="50" data-tooltip="ISTE Website"><i class="material-icons">public</i></a></li>
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
                $('.slider').slider({transition: 1000, interval: 4000});
            });
        </script>   

        <?php include('model.php'); include('modal2.php'); include('modal3.php'); include('modal4.php'); include('modal5.php');?>

        <script>
            <?php
                if(isset($_SESSION['nothing']))
                {
            ?>
                Materialize.toast('<?php echo $_SESSION['nothing'];?>', 4000)
            <?php
                $_SESSION['nothing'] = '';
                }
            ?>
        </script>
        <?php if (isset($_SESSION['userID'])): ?>
        <?php else: ?>
            <script>
                $(document).ready(function(){
                    $('#modal3').modal('open');
                });
            </script>
        <?php endif; ?>
    </body>
</html>
