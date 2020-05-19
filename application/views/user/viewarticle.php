<?php 
  define('title','View Article');
  include_once('header.php'); ?>
  <div class="container mt-5">
    
        <div class="card mb-3">
           <h3 class="card-header">Article Details</h3>
             <div class="card-body">
                <?php 
                  if(isset($view_page)) { 
                  foreach($view_page as $view) { 
                ?>
                  <h4 class="card-title"><?php echo $view->article_title;?></h4>
              </div>
                <img class="image-thumbnail w-50 p-3" src="<?php echo base_url($view->article_image); ?>" alt="Article image">
              <div class="card-body">
                 <p class="card-text"><?php echo $view->article_body; ?></p>
                <?php } } ?>
             </div>
  
              <div class="card-body">
                 <?php echo anchor('User/index','Home'); ?>
              </div>
              <div class="card-footer text-muted">
                 <?php echo date('d M Y H:i:m A',strtotime($view->publish_on)); ?>
              </div>
          </div>
        
  </div>
<?php include_once('footer.php'); ?>
