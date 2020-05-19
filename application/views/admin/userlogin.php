<?php include_once('header.php'); ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6">
        <?php if($this->session->flashdata('em')) { ?>
          <div class="alert alert-danger"><?php echo $this->session->flashdata('em');?></div>
        <?php } ?>
      </div>
    </div>
    <h2>User Login</h2>
    <div class="row">
      <div class="col-lg-6">
        <?php echo form_open('Login/userlogin'); ?>
          <div class="form-group">
            <label for="emailid" class="font-weight-bold">Email Id</label>
            <?php echo form_input(['type'=>'text','name'=>'email_id','placeholder'=>'Enter Email Id','class'=>'form-control']);?>
          </div>
      </div>
        <div class="col-lg-6 mt-5">
          <?php echo form_error('email_id'); ?>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="password" class="font-weight-bold">Password</label>
            <?php echo form_password(['name'=>'password','placeholder'=>'Enter Password','class'=>'form-control']); ?>
          </div>
        </div>
        <div class="col-lg-6 mt-5">
          <?php echo form_error('password'); ?>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <?php echo form_submit(['value'=>'Login','class'=>'btn btn-success btn-sm']) ?>
            <?php echo anchor('Login/register','Signup',['class'=>'link']) ?>
          </div>
        </div>
        <?php echo form_close(); ?>
    </div>
  </div>
<?php include_once('footer.php'); ?>