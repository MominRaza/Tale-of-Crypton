<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Your Details</h4>
        
        <div class="row">
            <div class="col m4 s12 center">
                <img class="responsive-img" src="images/gauntlet/level-<?php echo $userr['glevel'];?>.png">
                <h5>Gauntlet Level:</h5>
                <p><?php echo $userr['glevel']; ?> Stone Colected</p>
            </div>
            <div class="col m8 s12">
                <div class="row">
                    <div class="col m6 s12">
                        <h5>Name</h5>
                        <p><?php echo $userr['userName']; ?></p>
                    </div>
                    <div class="col m6 s12">
                        <h5>Level</h5>
                        <p><?php echo $userr['level'] - 1; ?></p>
                    </div>
                    <div class="col m4 s12">
                        <h5>Year</h5>
                        <p><?php echo $userr['year']; ?></p>
                    </div>
                    <div class="col m8 s12">
                        <h5>College Name</h5>
                        <p><?php echo $userr['college']; ?></p>
                    </div>
                    <div class="col s12">
                        <h5>Email Address</h5>
                        <p><?php echo $userr['fbToken']; ?></p>
                    </div>
                    <div class="col s12">
                        <h5>Mobile Number</h5>
                        <p><?php echo $userr['number']; ?></p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>


<script>
    $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
</script>