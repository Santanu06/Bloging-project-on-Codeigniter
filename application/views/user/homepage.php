<?php 
  define('title','Home');
  include_once('header.php'); ?>
  <div class="container mt-5">
  <div class="row">
    <div class="col-lg-4">
    <div class="form-group">
    <?php echo form_open('User/search',['class'=>'form-inline  my-lg-4']); 
             echo form_input(['type'=>'search','name'=>'search','placeholder'=>'Search Here','class'=>'form-control']);
             echo form_submit(['class'=>'btn btn-primary mx-2 my-sm-0','value'=>'Search']); 
             echo form_close(); ?>
      <?php echo form_error('search'); ?>
    </div>
    </div>
  </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="panel panel-default">
           <div class="panel-heading">
             <h3>Article List</h3>
           </div>
           <div class="panel-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                 <tr>
                  <th>Sr.No</th>
                    <th>Article Image</th>
                    <th>Article Title</th>
                    <th>Publish On</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(count($view_article)) { 
                  $count=$this->uri->segment(3,0);
                  foreach($view_article as $view) { ?>
                  <tr>
                    <td><?php echo ++$count; ?></td>
                    <td><img src="<?php echo base_url($view->article_image); ?>" alt="Article Image" class="img-thumbnail" width="120px" ></td>
                    <td><?php echo anchor("user/viewpage/{$view->article_id}",$view->article_title);  ?></td>
                    <td><?php echo date('d M y H:i:m A',strtotime($view->publish_on)); ?></td>
                  </tr>
                   <?php } ?>
                   <?php }else{ ?>
                  <tr>
                  <th>No Article Available</th>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <?php echo $this->pagination->create_links(); ?>
            </div>
          </div>
        </div>
     </div>
    </div>
  </div>
<?php include_once('footer.php'); ?>
