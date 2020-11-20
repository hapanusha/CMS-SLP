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
                    <div class="form-group col-md-12" >
                        <input type="hidden" name="stf_id" id="stf_id">
                        <label for="name" class="col-md-2 control-label">Title:</label>
                        <div class="col-md-6">
                            <table id="staff_look" style="width:70%" cellspacing="0">
                                <tr>
                                    <?php
                                    //print_r($title_new);
                                    $i = 1;
                                    foreach ($title_new as $row) {
                                        if ($i == 1) {
                                            ?>
                                            <td><input type="radio" name="tit_name" value="<?php echo $row['id'] ?>" checked=""> <?php echo $row['title_name'] ?></td>
                                        <?php } else { ?>
                                            <td><input type="radio" name="tit_name" value="<?php echo $row['id'] ?>"> <?php echo $row['title_name'] ?></td>
                                        <?php }
                                        ?>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name" class="col-md-2 control-label">Employee Name:</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="First_name" data-validation="required" data-validation-error-msg-required="Field can not be empty" name="stf_fname" id="stf_fname">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="last_name" name="stf_lname">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">Address:</label>
                        <div class="col-md-4">
                            <textarea  rows="4" class="form-control" placeholder="Personal Adderss" data-validation="required" data-validation-error-msg-required="Field can not be empty" name="stf_address"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-4">
                            <label for="stf_acc"></label>
                            <label class="col-md-5 control-label">Academic</label>
                            <input type="radio" data-validation="required" data-validation-error-msg-required="Empty" name="stf_acc" class="col-md-1" value="1">

                            <label class="col-md-5 control-label">Non-Academic</label>
                            <input type="radio" data-validation="required" name="stf_acc" class="col-md-1" value="2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Faculty:</label>
                        <div class="col-md-4">
                            <?php 
                                global $facultydrop;
                                global $selectedfac;
                                $facextraattrs = 'id="stf_faculty" class="form-control" data-validation="required" data-validation-error-msg-required="Field can not be empty"';
                                echo form_dropdown('stf_faculty',$facultydrop,$selectedfac, $facextraattrs); 
                            ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">Mobile No:</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="stf_mobi" data-validation=" required number length" data-validation-error-msg-required="field can not be empty" data-validation-length="10-10" data-validation-error-msg-number="Invalid. Please Try Again. ex: 0111234567" data-validation-error-msg-length="Must be 10 characters long">
                        </div>
                        <label class="col-md-1 control-label">Home No:</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="stf_home" data-validation=" required number length" data-validation-error-msg-required="field can not be empty" data-validation-length="10-10" data-validation-error-msg-number="Invalid. Please Try Again. ex: 0111234567" data-validation-error-msg-length="Must be 10 characters long">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">Email:</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="stf_email" data-validation="required email" data-validation-error-msg-required="Field can not be empty" data-validation-error-msg-email="Invalid E-mail">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">Nationality:</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="stf_national">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="stf_marital" class="col-sm-5 control-label">Marital Status:</label>
                            <div class="col-sm-7">
                                <label class="col-md-3 control-label">Married</label>
                                <input type="radio" data-validation="required" data-validation-error-msg-required="Empty" name="stf_marital" class="col-md-2" id="stf_maritalstat1" value="1">

                                <label class="col-md-3 control-label">Unmarried</label>
                                <input type="radio" data validation="required" name="stf_marital" id="stf_maritalstat2" class="col-md-3" value="2">
                            </div>
                        </div>
                    </div><hr><hr>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">Achievements:</label>
                        <div class="col-md-4">
                            <textarea  title="Research Interest" rows="4" class="form-control" placeholder="Research Interest" name="research_interest"></textarea>
                        </div>
                        <div class="col-md-4">
                            <textarea  title="Publications" rows="4" class="form-control" placeholder="Publications" name="publications_achive"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-4">
                            <textarea title="Awards" rows="4" class="form-control" placeholder="Awards" name="awards_achive"></textarea>
                        </div>
                        <div class="col-md-4">
                            <textarea title="Memberships" rows="4" class="form-control" placeholder="Memberships" name="memberships_achive"></textarea>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group">
                        <label for="public_achievements" class="col-sm-5 control-lable">Publish all lecturing qualifications with achievements in the web site :</label>
                        <input type="radio" name="public_achievements" value="1" checked=""> Yes <br>
                        <input type="radio" name="public_achievements" value="2"> No
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
