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
                     <form action="" enctype="multipart/form-data" method="post">
                      <input name="id" type="hidden" value="<?= $edit_data->id ?>" />
                      <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                          <h4 class="form-header">Edit Course</h4><br>
                          <div class="row">   
                            
                            
                       
                            

                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Course Title</label>
                                <input class="form-control" type="text" name="course_title" required="" value="<?=$edit_data->course_title?>">
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
                                            <option <?=($edit_data->category_id == $value1->id)?'selected':''?> value="<?=$value1->id?>"><?=$value1->category_name?></option>
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
                                            <option <?=($edit_data->class_id == $value->id)?'selected':''?> value="<?=$value->id?>"><?=$value->class_name?></option>
                                          <?php } ?>
                                         
                                        </select>
                                      </div>
                                        <span class="material-input"></span>
                                    </div>
                                </div>   

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Hour Per Rate ($)</label>
                                        <input class="form-control" type="text" value="<?=$edit_data->hour_per_rate?>" name="hour_per_rate" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>


                                 <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">Course Image</label>
                                    <div class="form-group label-floating">
                                        <input class="form-control" type="file" name="image">
                                        <input type="hidden" value="<?=$edit_data->image?>" name="old_imagename">
                                        <span class="material-input"></span>
                                    </div>
                                    </div>
                                </div>


                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                    <div class="form-group label-floating">
                                        
                                        <?php
                                         if (!empty($edit_data->image)) {
                                          ?>
                                            <img  width="90" height="90"  src="<?=base_url()?>backed/teacher/course/<?=$edit_data->image?>">
                                             <?php
                                        }
                                        ?>
                                         
                                        <span class="material-input"></span>
                                    </div>
                                    </div>
                                </div>


                                 

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Available Date</label>
                                        <input type="text" class="datepicker-here" required="" data-position="bottom left" data-language="en" value="<?=$edit_data->available_date?>" name="available_date" >
                                    </div>
                                </div>

                               
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Start Time</label>
                                        <input class="form-control" type="time" value="<?=$edit_data->start_time?>" name="start_time" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                 <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">End Time</label>
                                        <input class="form-control" type="time" value="<?=$edit_data->end_time?>" name="end_time" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>


                                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Status</label>
                                        <div class="select">
                                        <select  name="user_status" >
                                           <option <?=($edit_data->user_status == '1')?'selected':''?> value="1">Active</option>
                                            <option <?=($edit_data->user_status == '2')?'selected':''?> value="2">Inactive</option>
                                        </select>
                                      </div>
                                        <span class="material-input"></span>
                                    </div>
                                </div>  



                                

                                <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Course Description</label>
                                        <textarea class="form-control" type="text" name="description"><?=$edit_data->description?></textarea>
                                        <span class="material-input"></span>
                                    </div>
                                </div>


                             
                           
                           
                            <div class="col-sm-12">
                              <div style="float:right;">
                                <button class="btn btn-primary btn-rounded pull-right" type="submit"> Update</button>
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
