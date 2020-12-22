<?php 
    $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?> 

 <div class="header-spacer"></div>
        <div class="conty">
          <div class="all-wrapper no-padding-content solid-bg-all">
              <div class="layout-w">
                  <div class="content-w">
                      <div class="content-i">
                        <div class="content-box">
                            <div class="app-email-w">
                            <div class="app-email-i">
                                <div class="ae-content-w" style="background-color: #f2f4f8;">

                      <div class="top-header top-header-favorit">
                        <div class="top-header-thumb">
                          <img src="<?=base_url()?>backed/uploads/bglogin.jpg" alt="nature" style="height:180px; object-fit:cover;">
                          <div class="top-header-author">
                            <div class="author-thumb">
                              <img src="<?=base_url()?>backed/uploads/logoicon.png" alt="author" style="background-color: #fff; padding:10px;">
                            </div>
                            <div class="author-content">
                              <a href="javascript:void(0);" class="h3 author-name">Users</a>
                              <div class="country">VISFFORSTUDY |  School Management System</div>
                            </div>
                          </div>
                        </div>
                        <div class="profile-section" style="background-color: #fff;">
                          <div class="control-block-button">                                    
                          </div>
                        </div>
                      </div>


                      <div class="aec-full-message-w">
                          <div class="aec-full-message">
                              <div class="container-fluid" style="background-color: #f2f4f8;"><br>
                                <div class="col-sm- 12">     
                                  <div class="row">


                                    <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                      <div class="ui-block" data-mh="friend-groups-item">
                                        <div class="friend-item friend-groups">
                                            <div class="friend-item-content">
                                              <div class="more">
                                                  <i class="icon-feather-more-horizontal"></i>
                                                  <ul class="more-dropdown">
                                                    <li><a data-toggle="modal" data-target="#permisosadmin" href="javascript:void(0);">Permissions</a></li>
                                                  </ul>
                                              </div>
                                              <div class="friend-avatar">
                                                  <div class="author-thumb">
                                                    <img src="<?=base_url()?>backed/uploads/icons/admins.svg" width="110px" style="background-color:#fff;padding:15px; border-radius:0px;">
                                                  </div>
                                                  <div class="author-content">
                                                    <a href="<?=base_url();?>panel/admin/admin_list" class="h5 author-name">Admins</a>
                                                    <div class="country"><?php echo $totalAdmin?> Admins</div>
                                                  </div>
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                  </div>                                                             

                          <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="ui-block" data-mh="friend-groups-item">        
                                  <div class="friend-item friend-groups">
                                      <div class="friend-item-content">
                                        <div class="friend-avatar">
                                            <div class="author-thumb">
                                              <img src="<?=base_url()?>backed/uploads/icons/teachers.svg" width="110px" style="background-color:#fff;padding:15px;border-radius:0px;">
                                            </div>
                                            <div class="author-content">
                                              <a href="<?=base_url();?>panel/teacher/teacher_list" class="h5 author-name">Teachers</a>
                                              <div class="country"><?php echo $totalTeacher?> Teachers</div>
                                            </div>
                                        </div>        
                                      </div>
                                  </div>        
                                </div>
                            </div>                                                             

                         <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="ui-block" data-mh="friend-groups-item">                
                                <div class="friend-item friend-groups">
                                    <div class="friend-item-content">        
                                      <div class="friend-avatar">
                                          <div class="author-thumb">
                                            <img src="<?=base_url()?>backed/uploads/icons/students.svg" width="110px" style="background-color:#fff;padding:15px; border-radius:0px;">
                                          </div>
                                          <div class="author-content">
                                            <a href="<?=base_url();?>panel/student/student_list" class="h5 author-name">Students</a>
                                            <div class="country"><?php echo $totalStudent?> Students</div>
                                          </div>
                                      </div>
                                    </div>
                                </div>        
                              </div>
                          </div>  
              <?php if($this->session->userdata('user_is_admin') == '4') { ?>

                          <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="ui-block" data-mh="friend-groups-item">                
                                <div class="friend-item friend-groups">
                                    <div class="friend-item-content">        
                                      <div class="friend-avatar">
                                          <div class="author-thumb">
                                            <img src="<?=base_url()?>backed/uploads/icons/accountant.svg" width="110px" style="background-color:#fff;padding:15px; border-radius:0px;">
                                          </div>
                                          <div class="author-content">
                                            <a href="<?=base_url();?>panel/staff/staff_list" class="h5 author-name">Staff</a>
                                            <div class="country"><?php echo $totalStaff?> Staff</div>
                                          </div>
                                      </div>
                                    </div>
                                </div>        
                              </div>
                          </div>  

            <?php } ?>                                        
 
                             <!--  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                  <div class="ui-block" data-mh="friend-groups-item">        
                                    <div class="friend-item friend-groups">        
                                        <div class="friend-item-content">        
                                          <div class="friend-avatar">
                                              <div class="author-thumb">
                                                <img src="<?=base_url()?>backed/uploads/icons/accountant.svg" width="110px" style="background-color:#fff;padding:15px; border-radius:0px;">
                                              </div>
                                              <div class="author-content">
                                                <a href="student.html" class="h5 author-name">Staff</a>
                                                <div class="country">
                                                  1 Staff</div>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                              </div>                                                       
 -->

                              


                                    </div>
                                  </div>
                                  </div>
                              </div>
                          </div>      
                      </div>  
                    </div>
                </div>  
              </div>
                      </div>
                  </div>
              </div>
            <div class="display-type"></div>
        </div>
    </div>



<?php 
    $this->load->view('panel/header/footer');
?>
