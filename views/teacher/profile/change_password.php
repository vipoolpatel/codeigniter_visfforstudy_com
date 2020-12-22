
<?php 
    $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
?>


 

     <div class="header-spacer"></div>
      <div class="conty">
<?php 
    $this->load->view('teacher/profile/sub_menu');
 ?>

        <div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
                <div class="content-w">
                    <div class="content-i">
                        <div class="container-fluid">

                             <div class="row">
                            <div class="col-sm-12">
                                    <div class="element-box lined-primary shadow" style="border-radius:10px;">
                                        <h4 class="form-header">Change Password</h4><br>
                                        <form action="" enctype="multipart/form-data" method="post">
                                            <div class="row">  
                                                
                                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Current Password</label>
                                                        <input class="form-control" type="password" value="" name="oldpass" required="">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                                 <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">New Password</label>
                                                        <input class="form-control" type="password" value="" name="newpass">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>

                                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Confirm New Password</label>
                                                        <input class="form-control" type="password" value="" name="passconf">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                              
                                              
                                                
                                          
                                                <div class="col-sm-12"> 
                                                    <div>
                                                        <button class="btn btn-primary " type="submit"> Update</button>
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

    </div>


<?php 
    $this->load->view('teacher/header/footer');
?>
