<?php include_once('header.php'); ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6">
        <?php if($this->session->flashdata('sm')) { ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('sm'); ?></div>
        <?php } ?>
      </div>
      <div class="col-lg-6">
        <?php if($this->session->flashdata('em')) { ?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('em'); ?></div>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <?php echo form_open_multipart("Admin/update_article/{$articledata->article_id}"); ?>
        <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
        <?php echo form_hidden('publish_on',date('Y-m-d H:i:s')); ?>
        <div class="form-group">
          <label for="articletitle" class="font-weight-bold">Article Title</label>
          <?php echo form_input(['type'=>'text','placeholder'=>'Enter Article Title','name'=>'article_title','class'=>'form-control','value'=>set_value('article_title',$articledata->article_title)]); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <?php echo form_error('article_title'); ?>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label for="articlebody" class="font-weight-bold">Article Body</label>
          <?php echo form_textarea(['placeholder'=>'Enter Article Body','name'=>'article_body','class'=>'form-control','value'=>set_value('article_body',$articledata->article_body)]); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <?php echo form_error('article_body'); ?>
      </div>
      <div class="col-lg-6">
        <?php echo form_submit(['value'=>"Update",'class'=>'btn btn-primary']); ?>
      </div>
        <?php echo form_close(); ?>

    </div>
  </div>
<?php include_once('footer.php'); ?>