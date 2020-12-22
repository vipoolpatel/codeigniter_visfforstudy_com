<?php 
    $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>

<div class="header-spacer"></div>
  <div class="content-i">
    <div class="content-box">
      <div class="conty">
<!-- 
          <div class="back" style="margin-top:-20px;margin-bottom:10px">    
              <a title="Return" href="#"><i class="picons-thin-icon-thin-0131_arrow_back_undo"></i></a> 
          </div> -->

          <div class="row">
              <main class="col col-xl-9 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">                
              <div id="newsfeed-items-grid">
                <div class="ui-block paddingtel">
                      <div class="user-profile">
                        <div class="up-head-w" style="background-image:url(<?=base_url()?>backed/uploads/bglogin.jpg)">
                          <div class="up-main-info">
                              <div class="user-avatar-w">
                                 <div class="user-avatar">
                                  <?php

                                    $datas = 'backed/uploads/profile/'.$list->profile_pic;
                                    if (file_exists($datas) && !empty($list->profile_pic)) {
                                    ?>
                                    <img alt="" src="<?=base_url()?>backed/uploads/profile/<?=$list->profile_pic?>" style="background-color:#fff;">
                                    <?php } else {   ?>

                                    <img src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" style="background-color:#fff;">
                                         <?php } ?>
                            
                                  </div>
                              </div>
                              <h3 class="text-white"><?=$list->first_name?> <?=$list->last_name?></h3>
                               <?php
                              if($this->session->userdata('user_is_admin') == 4)
                              {
                              ?>
                              <h5 class="up-sub-header">@Super Admin</h5>
                              <?php } else{ ?>
                               <h5 class="up-sub-header">@Admin</h5>
                              <?php } ?>
                          </div>
                          <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="" xmlns:xlink=""><g transform="" fill="#FFFFFF"><path class="decor-path" d=""></path></g>
                          </svg>
                        </div>

                        <div class="up-controls">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="value-pair">
                                      <div>Account type:</div>
                                      <?php
                                      if($this->session->userdata('user_is_admin') == 4)
                                      {
                                      ?>
                                       <div class="value badge badge-pill badge-success">super admin</div>
                                      <?php } else{ ?>
                                      <div class="value badge badge-pill badge-success">admin</div>
                                      <?php } ?>
                                  
                                  </div>
                                  <div class="value-pair">
                                      <div>Member since:</div>
                                      <div class="value">
                                          <?=date('d M, Y', strtotime($list->created_date));?>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>


          <div class="ui-block">

            <div class="ui-block-title">    
                <h6 class="title">Personal information</h6>
            </div>

            <div class="ui-block-content">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="widget w-personal-info item-block">

                    <li>
                      <span class="title">First Name:</span>
                      <span class="text"><?=$list->first_name?></span>
                    </li>

                    <li>
                      <span class="title">Email:</span>
                      <span class="text"><?=$list->email?></span>
                    </li>

                  </ul>
                </div>


                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="widget w-personal-info item-block">
                     <li>
                      <span class="title">Last Name:</span>
                      <span class="text"><?=$list->last_name?></span>
                    </li>
                     <li>
                      <span class="title">Profile Image:</span>
                      <span class="">
                        <?php

                          $datas = 'backed/uploads/profile/'.$list->profile_pic;
                          if (file_exists($datas) && !empty($list->profile_pic)) {
                          ?>

                          <img alt="" src="<?=base_url()?>backed/uploads/profile/<?=$list->profile_pic?>" style="width: 80px;">
                          
                          <?php } else { ?>

                          <img src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" style="width: 80px;">
                        <?php  } ?>
                      </span>
                    </li>
                    
                  </ul>
                </div>

                </div>
              </div>
            </div>
          </div>
          </div>
      </div>
  </main>





              <div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">
                  <div class="crumina-sticky-sidebar">
                      <div class="sidebar__inner">
                      
                        <div class="ui-block paddingtel">
                          <div class="ui-block-content">
                            <div class="help-support-block">
                      <h3 class="title">Quick links</h3>
                      <ul class="help-support-list">
                        <li>
                          <i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
                          <a href="<?=base_url()?>panel/myaccount">Personal information</a>
                        </li>
                        <li>
                          <i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
                          <a href="<?=base_url();?>panel/admin/admin_list">Update information</a>
                        </li>
                      </ul>
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

  


  

<?php 
    $this->load->view('panel/header/footer');
?>