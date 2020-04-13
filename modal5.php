<div id="modal5" class="modal">
    <form action="userlog.php" method="post">
        <div class="modal-content">
            <h4>Enter Login Details</h4>
            <p>Please enter the following details to login your account. Forgot email address / password! View contact information.</p>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" name="email" type="email" class="validate" required>
                    <label for="email">Email Address</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="passwd" name="passwd" type="password" required>
                    <label for="passwd">Enter Password</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">I Fill Leter</a>
            <button type="submit" class="modal-action waves-effect waves-light btn">Submit</button>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
</script>