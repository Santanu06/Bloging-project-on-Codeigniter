<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6">
        <?php echo form_open(); ?>
          <div class="form-group">
            <label for="country">Country</label>
            <select name="country" id="country" class="form-control">
              <option value="">Select Country</option>
              <?php if(isset($country)) { 
                foreach($country as $view) { ?>
                  <option value="<?php echo $view->country_id; ?>"><?php echo $view->country_name;?></option>
                <?php } } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="state">State</label>
            <select name="state" id="state" class="form-control">
                  <option value="">Select State</option>
            </select>
          </div>
          <div class="form-group">
            <label for="city ">City</label>
            <select name="city" id="city" class="form-control">
                  <option value="">Select City</option>
            </select>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>

  <script src="<?php  echo base_url('assets/js/jquery.min.js');  ?>"></script> 
  <script src="<?php  echo base_url('assets/js/bootstrap.min.js');  ?>"></script> 
  <script>
    $(document).ready(function(){
      
      $('#country').change(function(){
        var country_id = $('#country').val();
        
          if(country_id != "")
          {
            $.ajax({
              url:"<?php echo base_url('ajax/fetch_state'); ?>",
              method:"POST",
              data:{country_id:country_id},
              success:function(data)
              {
                $('#state').html(data);
                $('#city').html('<option value="">Select City</option>');
              }
            });
          }else{
            $('#state').html('<option value="">Select state</option>');
            $('#city').html('<option value="">Select City</option>');
          }
      });
      $('#state').change(function(){
        var state_id = $('#state').val();
        if(state_id != ''){
          $.ajax({
            url:'<?php echo base_url('ajax/fetch_city'); ?>',
            method:"post",
            data:{state_id:state_id},
            success:function(data){
              $('#city').html(data);
            }
          });
        }else{
          $('#city').html('<option value="">Select City</option>');
        }
      });
    });
  </script>
</body>
</html>