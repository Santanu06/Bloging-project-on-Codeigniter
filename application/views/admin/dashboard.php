<?php include_once('header.php'); ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6">
        <?php if($this->session->flashdata('sm')){?>
          <div class="alert alert-success"><?php echo $this->session->flashdata('sm') ?></div>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <?php echo anchor('Admin/add_article','Addarticle',['class'=>'btn btn-primary']) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 mt-3">
        <div class="table-responsive">
          <table class="table table-hover"> 
            <thead>
              <th>Sr.No.</th>
              <th>Article Title</th>
              <th>Edit</th>
              <th>Delete</th>
           </thead>
            <tbody>
            <?php if(count($view_article)) { 
              $count=0;?>
             <?php foreach($view_article as $view) { ?>
              <tr>
                <td><?php echo ++$count; ?></td>
                <td><?php echo $view->article_title; ?></td>
                <td><?php echo anchor("Admin/edit_article/{$view->article_id}",'Edit',['class'=>'btn btn-success btn-sm']); ?></td>
                <td><?php echo anchor("Admin/deletearticle/{$view->article_id}",'Delete',['class'=>'btn btn-danger btn-sm']); ?></td>
              </tr>
              <?php } ?>
              <?php }else{ ?>
                <tr>
                  <th >No data Available</th>
                </tr>
               <?php } ?>
            </tbody>
         </table>
         <?php echo $this->pagination->create_links(); ?>
        </div>
      </div>
    </div>
  </div>
<?php include_once('footer.php'); ?>