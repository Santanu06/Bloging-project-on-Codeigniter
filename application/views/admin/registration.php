<?php include_once('header.php'); ?>
  <div class="container mt-5">
    <div class="col-lg-6">
      <?php if($this->session->flashdata('sm')) { ?>
          <div class="alert alert-success"><?php echo $this->session->flashdata('sm'); ?></div>
      <?php  } ?>
    </div>
    <div class="col-lg-6">
      <?php if($this->session->flashdata('em')) { ?>  
        <div class="alert alert-danger"><?php echo $this->session->flashdata('sm'); ?></div>
      <?php } ?>
    </div>
    <h2 class="pb-2">Registration Form</h2>
    <div class="row">
      <div class="col-lg-6">
        <?php echo form_open('Login/registration'); ?>
        <div class="form-group">
          <label for="name" class="font-weight-bold">User Name</label>
          <?php echo form_input(['type'=>'text','placeholder'=>'Enter Name','class'=>'form-control','name'=>'user_name']) ?>
        </div>
        </div>
        <div class="col-lg-6 ">
          <?php echo form_error('user_name'); ?>
        </div>
        <div class="col-lg-6">
         <div class="form-group">
            <label for="emaiid" class="font-weight-bold">Email Id</label>
           <?php echo form_input(['type'=>'text','placeholder'=>'Enter Email Id','class'=>'form-control','name'=>'email_id']) ?>
          </div>
        </div>
        <div class="col-lg-6 ">
          <?php echo form_error('email_id'); ?>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="password" class="font-weight-bold">Password</label>
            <?php echo form_password(['placeholder'=>'Enter Password','class'=>'form-control','name'=>'password']) ?>
          </div>
        </div>
        <div class="col-lg-6 ">
          <?php echo form_error('password'); ?>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <?php echo form_submit(['class'=>'btn btn-danger btn-sm','type'=>'submit','value'=>'submit']) ?>
            <?php echo anchor('Login/userlogin','Login');?>
          </div>
        </div>
        <?php echo form_close(); ?>
    </div>
  </div>
<?php include_once('footer.php'); ?>

