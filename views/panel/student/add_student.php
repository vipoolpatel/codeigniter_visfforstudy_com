<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>

 <div class="header-spacer"></div>
      <div class="conty">
        <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
            
             <ul class="navs navs-tabs upper">
                 
                  <li class="navs-item">
                    <a class="navs-links active" href="<?=base_url()?>panel/student/add_student">
                        <i class="os-icon picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
                        <span>Add Student</span></a>
                 </li>
                
                

              </ul>
          </div>
        </div><br>
        <div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
              <div class="content-w">
                  <div class="content-i">
                    <div class="content-box">
                      <form action="" method="post" enctype="multipart/form-data">
                      <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                          <h4 class="form-header">Add Student</h4><br>
                          <div class="row">   
                            
                            
                       
                            

                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">First Name</label>
                                <input class="form-control" type="text" name="first_name" required="" value="<?=set_value('first_name')?>">
                              <span class="text-danger">  <?php echo form_error('first_name') ?></span>
                                <span class="material-input"></span>
                              </div>
                            </div>

                             <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Last Name</label>
                                <input class="form-control" value="<?=set_value('last_name')?>" type="text" name="last_name">
                                 <span class="text-danger">  <?php echo form_error('last_name') ?></span>
                                <span class="material-input"></span>
                              </div>
                            </div>
                             <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input class="form-control" value="<?=set_value('email')?>" type="email" name="email" required="">
                                <span class="text-danger"> <?php echo form_error('email') ?></span>
                                <span class="material-input"></span>
                              </div>
                            </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Profile Photo</label>
                                    <input class="form-control" type="file" name="profile_pic">
                                    
                                    <span class="material-input"></span>
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
