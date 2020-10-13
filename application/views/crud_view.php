<div class="crud-area text-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="crud-title text-center">
            <h4>Registered New Born Baby Document</h4>
        </div>
      </div>
    </div>
     <div class="crud-tbl">
     <div class="insert float-left">
         <a  class="btn" href="<?php echo site_url('Pages/regi') ?>">Insert </a>
     </div>
     <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Si</th>
                <th>Full_name</th>
                <th>Date_O_Birth</th>
                <th>Father_name</th>
                <th>Mother_name</th>
                <th>P_of_Birth</th>
                <th>Pre_add</th>
                <th>Per_Add</th>
                <th>Full_name</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($reg_data as $r_data): ?>
        <tr>
          <td> <?php  echo  $r_data->si; ?> </td>
          <td><?php  echo  $r_data->f_name; ?></td>
          <td><?php  echo  $r_data->dob; ?></td>
          <td><?php  echo  $r_data->fa_name; ?></td>
          <td><?php  echo  $r_data->mo_name; ?></td>
          <td><?php  echo  $r_data->pob; ?></td>
          <td><?php  echo  $r_data->pre_add; ?></td>
          <td><?php  echo  $r_data->per_add; ?></td>
          <td><?php  echo  $r_data->mob_num; ?></td>
          <td>
          <a  class="btn" href="<?php echo base_url(); ?>crud/editData/<?php echo $r_data->si; ?>">Edit </a>
          <a  class="btn" href="<?php echo base_url(); ?>crud/deleteData/<?php echo $r_data->si; ?>">Delete </a>
          </td>
          
        </tr>
       <?php endforeach;  ?>
        </tbody>
      </table>
      </table>
         <?php if($this->session->flashdata('error')): ?>
            <div  style="color:#FFF;align:center;" class="bg-danger">
            <?php echo $this->session->flashdata('error'); ?>
            </div>
         <?php endif; ?>


        <?php if($this->session->flashdata('inserted')): ?>
            <div style="color:#FFF;align:center;" class="bg-success">
            <?php echo $this->session->flashdata('inserted'); ?>
            </div>
      <?php endif; ?>

            <?php if($this->session->flashdata('deleted')): ?>
            <div style="color:#FFF;align:center;" class="bg-danger">
            <?php echo $this->session->flashdata('deleted'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('updated')): ?>
            <div style="color:#FFF;align:center;" class="bg-success">
            <?php echo $this->session->flashdata('updated'); ?>
            </div>
       <?php endif; ?>
     </div>
  </div>
</div>