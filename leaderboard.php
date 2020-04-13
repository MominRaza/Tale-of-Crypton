<?php
    require './fb-init.php';
    include('db.php');

    if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
    } else {
        $pageno = 1;
    }
    $no_of_records_per_page = 20;
    $offset = ($pageno-1) * $no_of_records_per_page;

    $total_pages_sql = "SELECT COUNT(*) FROM user";
    $total_pages_result = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($total_pages_result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);


    if ($pageno > max(1,$total_pages)) {
        header('location:leaderboard.php');
    }

    $leaderq = "SELECT * FROM user ORDER BY level DESC , glevel DESC, status ASC LIMIT $offset, $no_of_records_per_page";

    $leaderr = mysqli_query($conn, $leaderq);
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

        <title>Leaderboard - Tale of Crypton - ISTE KNIT Sultanpur</title>
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
                    <li><a href="story.php">Story</a></li>
                    <li class="active"><a href="leaderboard.php">Leaderboard</a></li>

                    <?php include('nav.php');?>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="center"><h1><a class="black-text" href="index.php" style="font-size: 30px; font-weight:bold; min-width: fit-content;">Tale of Crypton</a></h1></li>
                    <li><a href="rules.php">Rules</a></li>
                    <li><a href="story.php">Story</a></li>
                    <li class="active"><a href="leaderboard.php">Leaderboard</a></li>

                    <?php include('nav.php');?>
                </ul>
                </div>
            </nav>
        </div>

        <div class="container">

            <h1 class="white-text">Leaderboard</h1>
            <p class="flow-text white-text">“Part of the journey is the end…  Everything’s going to work out exactly like it’s supposed to.  I love you 3000.”</p>
            <p class="white-text right">- Tony Stark (Iron Man)</p>

<p class="flow-text white-text">Gauntlet Winner</p>
            
            <div class="row center">
                <?php
                    $goum = mysqli_query($conn, "SELECT * FROM new");
                    while($goumr = mysqli_fetch_assoc($goum)):
                ?>
                <div class="col m2 s6">
                    <img src="images/gauntlet/level-<?php echo $goumr['id']; ?>.png" alt="" class="responsive-img">
                    <p class="white-text"><?php echo $goumr['name']; ?></p>
                </div>
                <?php endwhile;?>
            </div>

            <table class="striped highlight bordered white">
                <thead>
                  <tr>
                    <th>Position</th>
                      <th>Name</th>
                      <th>Year</th>
                      <th>College Name</th>
                      <th>Level</th>
			<th>Status</th>
                  </tr>
                </thead>
        
                <tbody>
                    <?php $i=1 + ($pageno-1)*20; while($row = mysqli_fetch_assoc($leaderr)): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['userName']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['college']; ?></td>
                        <td><?php if($row['level'] == 31 && $row['glevel'] == 6){echo 'You Win';}else{echo $row['level'] - 1;} ?></td>
                        <td><?php if($row['status'] == 4){echo '<span class="red-text">Blocked..!</span>';}else{echo'Smashing..!';} ?></td>
                    </tr>
                    <?php $i++; endwhile; mysqli_close($conn); ?>
                </tbody>
            </table>
            
            <div class="center">
                <ul class="pagination">
                    <li class="<?php if($pageno <= 1){ echo 'disabled'; }else{ echo 'waves-effect'; } ?>">
                        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">
                            <i class="material-icons">chevron_left</i>
                        </a>
                    </li>
                    <?php
                    $trick = 1;
                    while($trick<=$total_pages):
                    ?>
                    <li class="<?php if($pageno == $trick){ echo 'active'; } ?>"><a href="?pageno=<?php echo $trick?>"><?php echo $trick?></a></li>
                    <?php
                    $trick++;
                    endwhile;
                    ?>
                    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; }else{ echo 'waves-effect'; } ?>">
                        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </li>
                </ul>
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
                $(".button-collapse").sideNav();
            });
        </script>

        <?php include('modal5.php'); include('modal2.php');?>
    </body>
</html>
