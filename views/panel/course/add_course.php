<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>

 <div class="header-spacer"></div>
      <div class="conty">

<?php 
   $this->load->view('panel/course/sub_menu');
?>

        <div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
              <div class="content-w">
                  <div class="content-i">
                    <div class="content-box">
                      <form action="" method="post" enctype="multipart/form-data">
                      <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                          <h4 class="form-header">Add Course</h4><br>
                          <div class="row">   
                            
                            
                       
                            

                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Course Title</label>
                                <input class="form-control" type="text" name="course_title" required="">
                                <span class="material-input"></span>
                              </div>
                            </div>

                           <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Category Name</label>
                                        <div class="select">
                                        <select  name="category_id" required="">
                                           <option value="">Select Category</option>
 
                                          <?php  foreach ($category as $value1) { ?>
                                            <option value="<?=$value1->id?>"><?=$value1->category_name?></option>
                                          <?php } ?>
                                         
                                        </select>
                                      </div>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Class</label>
                                        <div class="select">
                                        <select  name="class" required="">
                                           <option value="">Select Class</option>
 
                                          <?php  foreach ($class as $value) { ?>
                                            <option value="<?=$value->id?>"><?=$value->class_name?></option>
                                          <?php } ?>
                                         
                                        </select>
                                      </div>
                                        <span class="material-input"></span>
                                    </div>
                                </div>   


                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">Course Image Or Video</label>
                                    <div class="form-group label-floating">
                                        <input  type="file" name="image" class="form-control">
                                        <span class="material-input"></span>
                                    </div>
                                    </div>
                                </div>

                         

                                   <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Hour Per Rate ($)</label>
                                        <input class="form-control" type="text" value="" name="hour_per_rate" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Available Date</label>
                                        <input type="text" class="datepicker-here" required="" data-position="bottom left" data-language="en" value="" name="available_date" >
                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Start Time</label>
                                        <input class="form-control" type="time" value="" name="start_time" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                 <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">End Time</label>
                                        <input class="form-control" type="time" value="" name="end_time" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Status</label>
                                        <div class="select">
                                        <select  name="user_status" >
                                           <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                      </div>
                                        <span class="material-input"></span>
                                    </div>
                                </div>  
                                 

                                <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Course Description</label>
                                        <textarea class="form-control" type="text" name="description"></textarea>
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
  </div>      </div>
      
    </div>

<?php 
    $this->load->view('panel/header/footer');
?>
