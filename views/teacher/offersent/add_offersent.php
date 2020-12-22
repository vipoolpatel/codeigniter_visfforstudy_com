
<?php 
    $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
?>


 

      
  <div class="header-spacer"></div>
      <div class="conty">

<?php 
    $this->load->view('teacher/offersent/sub_menu');
 
?>



        <div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
              <div class="content-w">
                  <div class="content-i">
                    <div class="content-box">
                      <form action="" method="post">
                      <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                          <div class="row">   
                              

                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Title </label>
                                <input class="form-control" required type="text" name="title">
                                <span class="material-input"></span>
                              </div>
                            </div>
                            
                           
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Category Name</label>
                                <div class="select">
                                 <select  name="category_id" required="">
                                       <option value="">Select Category</option>
                                      <?php  foreach ($category as $value1) { ?>
                                        <option value="<?=$value1->id?>"><?=ucfirst($value1->category_name)?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                              </div>
                            </div>

                            <?php   if (!empty($this->uri->segment('4'))) { ?>

                              <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Student Name</label>
                                <div class="select">
                                 <select  name="student_id" disabled>
                                       <option value="<?=$student1->id?>" ><?=$student1->first_name?> <?=$student1->last_name?></option>
                                      
                                </select>
                                </div>
                              </div>
                            </div>
                            
                            <?php } else { ?>

                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Student Name</label>
                                <div class="select">
                                 <select  name="student_id" required>
                                       <option value="">Select Student</option>
                                      <?php  foreach ($student as $value2) { ?>
                                        <option value="<?=$value2->id?>"><?=ucfirst($value2->first_name)?> <?=ucfirst($value2->last_name)?></option>
                                      <?php } ?>
                                     
                                    </select>
                                </div>
                              </div>
                            </div>

                          <?php }?>


                            <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Lesson Date</label>
                                 <input type="text" class="datepickerdata" data-position="bottom left" data-language="en" name="required_date" required="">
                                <span class="material-input"></span>
                              </div>
                            </div>

                             <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Lesson Start time</label>
                                 <input type="time" class="form-control"  name="start_time" required="">
                                <span class="material-input"></span>
                              </div>
                            </div>


                             <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Lesson duration (Minutes)</label>
                                 <input type="text" class="form-control num" name="duration" id="num">
                                  <span id="error2" class="text-danger clear error2"></span>
                                <span class="material-input"></span>
                              </div>
                            </div>

                         
                            

                             <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Price per Lesson ($)</label>
                                <input class="form-control" type="text" name="hour_per_rate" required="">
                                <span class="material-input"></span>
                              </div>
                            </div>
 



                              <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                               <label class="control-label">Description</label>
                              <div class="form-group">
                                <textarea class="form-control summernoteeditor" type="text"  name="description" ></textarea>
                              </div>
                            </div>
                           
                           
                           
                            <div class="col-sm-12">
                              <div style="float:right;">
                                <button class="btn btn-primary pull-right" type="submit"> Submit</button>
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



<?php 
    $this->load->view('teacher/header/footer');
?>

