<div id="modal1" class="modal modal-fixed-footer">
    <form action="useradd.php" method="post">
            <div class="modal-content">
                <h4>Enter Your Details</h4>
                <p>Please fill the following details very carefully! Details are not editable after submission.<br>Your contact number must have UPI ID(GPay/PhonePe) to avail Cash Prizes.</p>            
      <div class="row">
        <div class="input-field col s12">
          <input id="full_name" name="name" type="text" class="validate" required>
          <label for="full_name">Full Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate" required>
          <label for="email">Email Address</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m6 s12">
            <select name="year" required>
            <option value="" disabled selected>Choose your option</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="Final Year">Final Year</option>
            </select>
            <label>Year</label>
        </div>
        <div class="input-field col m6 s12">
          <input id="college_name" name="college" type="text" class="validate" required>
          <label for="college_name">College Name</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <input id="input_text" name="number" type="number" min="10" data-length="10" required>
            <label for="input_text">Mobile Number</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="passwd" name="passwd" type="password" required>
            <label for="passwd">Create Password</label>
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
            $(document).ready(function() {
                $('select').material_select();
            });
            $(document).ready(function() {
                $('input#input_text').characterCounter();
            });
        </script>