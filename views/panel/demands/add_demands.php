<?php 
    $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>

 <div class="header-spacer"></div>
    <div class="conty">
      <?php 
         $this->load->view('panel/demands/sub_menu');
         ?>

<div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
              <div class="content-w">
                  <div class="content-i">
                    <div class="content-box">
                      <form action="" method="post">
                      <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                          <h4 class="form-header">Add Demand</h4><br>
                          <div class="row">   
                            
                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Demands Title</label>
                                <input class="form-control" type="text" name="demands_title" required="">
                                <span class="material-input"></span>
                              </div>
                            </div>
                       
                            <div class="col-sm-6">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Demand Type</label>
                                <div class="select">
                                  <select name="demand_type_id" required="">
                                    <option value="">Select</option>
                                   <?php
                                      foreach ($demandsTypeList as $rows) {
                                       ?>
                                        <option value="<?=$rows->id?>"><?=$rows->demand_type_name?> </option>
                                       <?php } ?>
                                     
                                  </select>
            
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Level of Student</label>
                                <div class="select">
                                  <select name="level_of_student_id" required="">
                                    <option value="">Select</option>
                                    <?php
                                      foreach ($LevelofStudent as $key) { 
                                        ?>
                                        <option value="<?=$key->id?>"><?=$key->level_of_student_name?></option>
                                        <?php
                                      }
                                    ?>
                                   
                                  </select>
                                </div>
                              </div>
                            </div>
                           
                            <div class="col-sm-6">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Category</label>
                                <div class="select">
                                  <select name="category_id" required="">
                                    <option value="">Select</option>
                                    <?php
                                      foreach ($DemandSubject as $val) {
                                        ?>
                                        <option value="<?=$val->id?>"><?=$val->category_name?></option>
                                        <?php
                                      }
                                    ?>
                                  </select>
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Required Lesson Date</label>
                                 <input type="text" class="datepicker-here" data-position="bottom left" data-language="en" name="required_date" >
                                <span class="material-input"></span>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Required Lesson Time</label>
                                 <input type="time" class="form-control" name="required_time" >
                                <span class="material-input"></span>
                              </div>
                            </div>

                            

                             <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Rate per Hour ($)</label>
                                <input class="form-control" type="text" name="rate_per_hour" required="">
                                <span class="material-input"></span>
                              </div>
                            </div>


                 
                          <!--   <div class="col-sm-6">
                                                   
                                  <label class="control-label">Image</label>
                                  <div class="form-group label-floating">
                                      <input class="form-control" type="file" name="profile_pic">
                                      <input type="hidden" name="old_imagename">
                                      <span class="material-input"></span>
                                  </div>
                              </div> -->
                              <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Demand Description</label>
                                <textarea class="form-control" type="text" name="demands_description" required=""></textarea>
                                <span class="material-input"></span>
                              </div>
                            </div>

                           
                           
                            <div class="col-sm-12">
                              <div style="float:right;">
                                <button class="btn btn-primary btn-rounded pull-right" type="submit"> Submit</button>
                              </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    

                  
                </div>
              </div>
            </div>
       
        </div>
    </div>
  </div>      
</div>
      
    </div>

    <?php 
    $this->load->view('panel/header/footer');
?>