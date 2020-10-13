<div class="reg-area text-center mb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="reg-title text-center">
            <h3>Birth Register</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.  Vel mollitia ipsum quis <br>cumque quos sunt voluptates non, quaerat accusamus ipsam </p>
        </div>
      </div>
    </div>
     <div class="reg-form">
        <form method="post" action="<?php echo base_url();?>crud/insertData">
            <div class="row">
                <div class="col-xl-6">
                <input type="text" class="form-control" name="fname" placeholder="Full name">
                <input type="text" class="form-control" name="faname" placeholder="Father name">
                <input type="text" class="form-control" name="pob"  placeholder="Place of Birth">
                <input type="text" class="form-control" name="peradd" placeholder="Permanent Address">
                </div>
                <div class="col-xl-6">
                <input type="text" class="form-control" name="dob"  placeholder="Date Of Birth">
                <input type="text" class="form-control" name="moname"  placeholder="Mother name">
                <input type="text" class="form-control" name="preadd" placeholder="Present Address">
                <input type="text" class="form-control" name="monum" placeholder="Mobile Number">
                </div>
                  <button type="submit" name ="insert" value="Add Data" class="btn reg-btn" >Register Now</button>
            </div>
        </form>
     </div>
  </div>
</div>