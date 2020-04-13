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

        <title>Rules - Tale of Crypton - ISTE KNIT Sultanpur</title>
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
                        <li class="active"><a href="rules.php">Rules</a></li>
                        <li><a href="story.php">Story</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>
                        
                        <?php include('nav.php');?>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li class="center"><h1><a class="black-text" href="index.php" style="font-size: 30px; font-weight:bold; min-width: fit-content;">Tale of Crypton</a></h1></li>
                        <li class="active"><a href="rules.php">Rules</a></li>
                        <li><a href="story.php">Story</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>
                        
                        <?php include('nav.php');?>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container">

            <h1 class="white-text">Rules</h1>
            <p class="flow-text white-text">Steve Rogers: The rules have changed.</p>
            <p class="flow-text white-text">Tony Stark: We’re dealing with something new.</p>

            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header active"><i class="material-icons">menu_book</i>First Rule</div>
                    <div class="collapsible-body white-text"><span>You have to enter the answer with space and in small letters and spellings must be in accordance with WIKIPEDIA. For example if the answer is Rahul Gandhi,the correct format is rahul gandhi.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">menu_book</i>Second Rule</div>
                    <div class="collapsible-body white-text"><span>Google and Wikipedia are your best mates.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">menu_book</i>Third Rule</div>
                    <div class="collapsible-body white-text"><span>Hints would be posted on the Facebook page and keep visiting the storyline. Check the hints tab and let the will to collect all Infinity Stones guide you through.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">menu_book</i>Fourth Rule</div>
                    <div class="collapsible-body white-text"><span>We will be checking your clicks per answer, so any hornswoggle may result in a sweet kickout. Cheaters be ready to dance the hempen jig.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">menu_book</i>Fifth Rule</div>
                    <div class="collapsible-body white-text"><span>Most important rule-<br>Admin is the BOSS! He is right up there so follow the rules or he can kick you out with a snap.</span></div>
                </li>
            </ul>
        </div>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light red hoverable tooltipped" data-position="left" data-delay="50" data-tooltip="Let's Play" href="game.php"><i class="material-icons">image_search</i></a>
        </div>

        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        
        <script>
            $(document).ready(function(){
                $('.collapsible').collapsible();
                $(".button-collapse").sideNav();
            });
        </script>

        <?php include('modal5.php'); include('modal2.php');?>
    </body>
</html>