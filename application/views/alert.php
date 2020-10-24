<div class="alert-area text-center mb">
    <div class="container">
        <div class="alert-form">
          <form method="POST" action="<?php echo base_url();?>Message/send_sms">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputText" name="dob" aria-describedby="emailHelp" placeholder="Date of Birth">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" name="monumber" placeholder="mobile number">
            </div>
            <button type="submit" class="btn">Send Alert</button>
            </form>
        </div>
    </div>
</div>