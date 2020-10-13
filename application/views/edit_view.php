<div class="reg-area text-center ">
  <div class="container ">
    <div class="row">
      <div class="col-xl-12">
        <div class="reg-title text-center">
            <h3>Edit Birth Register</h3>
        </div>
      </div>
    </div>
     <div class="reg-form">
        <form method="post" action="<?php echo base_url(); ?>crud/update/<?php echo $singleData->si; ?>">
            <div class="row">
                <div class="col-xl-6">
                <input type="text" class="form-control" name="fname" placeholder="Full name" value="<?php echo $singleData->f_name; ?>">
                <input type="text" class="form-control" name="faname" placeholder="Father name" value="<?php echo $singleData->fa_name; ?>">
                <input type="text" class="form-control" name="pob"  placeholder="Place of Birth" value="<?php echo $singleData->pob; ?>">
                <input type="text" class="form-control" name="peradd" placeholder="Permanent Address" value="<?php echo $singleData->per_add; ?>">
                </div>
                <div class="col-xl-6">
                <input type="text" class="form-control" name="dob"  placeholder="Date Of Birth" value="<?php echo $singleData->dob; ?>">
                <input type="text" class="form-control" name="moname"  placeholder="Mother name" value="<?php echo $singleData->mo_name; ?>">
                <input type="text" class="form-control" name="preadd" placeholder="Present Address" value="<?php echo $singleData->pre_add; ?>">
                <input type="text" class="form-control" name="monum" placeholder="Mobile Number" value="<?php echo $singleData->mob_num; ?>">
                </div>
                  <button type="submit" name="edit" value="update" class="btn reg-btn" >Update</button>
            </div>
        </form>
     </div>
  </div>
</div>