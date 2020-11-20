<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="content-wrapper">
    <section class="content">
    
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Personal Details of Applicant</h5>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                   
 	

           <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('staff/save_staff'); ?>" id="stf_reg" enctype="multipart/form-data" autocomplete="off" novalidate>
                    
               <div class="form-group col-md-12">
                        <label for="staffprof_pic" class="col-md-2 control-label">Profile Picture:</label>
                        <div class="col-md-4">
                            <input id="staffprof_pic" name="staffprof_pic" type="file">
                        </div>
                    </div>
               
               
               
               
               
               
               
                    
                    </div>
                   
                    
                    <hr>
                    <br>
                    <div class="form-group">
                        <div class="col-md-2">
                        </div>
                        <button type="submit" class="btn btn-info btn-md" name="submit">Submit</button>
                        <button onclick="event.preventDefault();$('#stf_reg').trigger('reset');$('#stf_id').val('');" class="btn btn-default">Reset</button>
                    </div>     
                </form>
            
                      
                      
                      
                      
                  <!-- /.col -->
                  

                </div>
                
              </div>
              <!-- ./card-body -->
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
    
        
        
        
        
    </section>
</div>
