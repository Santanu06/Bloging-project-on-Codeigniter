<?php 
  define('title','Search Articles');
  include_once('header.php'); ?>
  <div class="container mt-5">
  <div class="row">
    <div class="col-lg-4">
      <?php echo form_open('User/search',['class'=>'form-inline  my-lg-4']); ?>
      <?php  echo form_input(['type'=>'search','name'=>'search','placeholder'=>'Search Here','class'=>'form-control']);?>
      <?php echo form_error(); ?>
      <?php echo form_submit(['class'=>'btn btn-primary mx-2 my-sm-0','value'=>'Search']); ?>
      <?php echo form_close(); ?>
    </div>
  </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="panel panel-default">
           <div class="panel-heading">
             <h3>Search Results</h3>
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
                  <?php if(count($search_result)) { 
                  $count=$this->uri->segment(4,0);
                  
                  foreach($search_result as $view) { ?>
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
