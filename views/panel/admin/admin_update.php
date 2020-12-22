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

$datas = 'backed/uploads/profile/'.$edit_data->profile_pic;
if (file_exists($datas) && !empty($edit_data->profile_pic)) {
?>
                                    <img alt="" src="<?=base_url()?>backed/uploads/profile/<?=$edit_data->profile_pic?>" style="background-color:#fff;">
                                    <?php } else {

   ?>
   <img alt="" src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" style="background-color:#fff;">
     <?php }?>
                                  </div>
                              </div>
                             <h3 class="text-white"><?=$edit_data->first_name?> <?=$edit_data->last_name?></h3>
                              <h5 class="up-sub-header">@Admin</h5>
                          </div>
                          <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="" xmlns:xlink=""><g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF"><path class="decor-path" d=""></path></g>
                          </svg>
                        </div>

                        <div class="up-controls">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="value-pair">
                                      <div>Account type:</div>
                                      <div class="value badge badge-pill badge-success">Admin</div>
                                  </div>
                                  <div class="value-pair">
                                      <div>Member since:</div>
                                   <div class="value"> <?=date('d M, Y', strtotime($edit_data->created_date));?></div>
                                  </div>
                              </div>
                          </div>

                        </div>

<div class="ui-block">

            <div class="ui-block-title">    
                <h6 class="title">Personal information</h6>
            </div>

          <div class="ui-block-content">
                        <form action="" enctype="multipart/form-data" method="post">

                          <input name="id" type="hidden" value="<?= $edit_data->id ?>" />

                                      <div class="row">   
                                        <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">First name</label>
                                                <input class="form-control" type="text" name="first_name" required="" value="<?= set_value('first_name',$edit_data->first_name); ?>">
                                                <span class="material-input"></span>
                                              <span class="material-input"></span>
                                            </div>
                                        </div>
                                
                                        <div class="col-sm-6"> 
                                            <div class="form-group label-floating">
                                                <label class="control-label">Last name</label>
                                                <input class="form-control" type="text" value="<?= set_value('last_name',$edit_data->last_name); ?>" name="last_name">
                                                <span class="material-input"></span>
                                              <span class="material-input"></span>
                                            </div>
                                        </div>

                                     
                                        <div class="col-sm-6"> 
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email</label>
                                                <input class="form-control" type="email" value="<?= set_value('email',$edit_data->email)?>" name="email" readonly>
                                                <span class="material-input"></span>
                                              <span class="material-input"></span>
                                            </div>
                                        </div>


                                     

                                      
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label"></label>
                                           
                                            <span class="material-input"></span>
                                          <span class="material-input"></span>
                                        </div>
                                        </div>


                             
                                
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Profile Image</label>
                                            <input class="form-control" type="file" name="profile_pic">
                                             <input type="hidden" value="<?=$edit_data->profile_pic?>" name="old_imagename">
                                            <span class="material-input"></span>
                                          <span class="material-input"></span>
                                        </div>
                                        </div>

                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label"></label>
                                           
                                                   <?php

$datas = 'backed/uploads/profile/'.$edit_data->profile_pic;
if (file_exists($datas) && !empty($edit_data->profile_pic)) {
?>
                                    <img alt="" width="100px" src="<?=base_url()?>backed/uploads/profile/<?=$edit_data->profile_pic?>" style="background-color:#fff;">
                                    <?php } else {

   ?>
   <img alt="" width="100px" src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" style="background-color:#fff;">
     <?php }?>
                                            <span class="material-input"></span>
                                          <span class="material-input"></span>
                                        </div>
                                        </div>

                                      
                                
                                        <div class="col-sm-12">
                                            <div style="float:right;">
                                                <button class="btn btn-success btn-rounded pull-right" type="submit"> Update</button>
                                            </div>
                                        </div>
                                  </div>
                              </form>                    
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
                          <a href="<?=base_url()?>panel/admin/admin_profile/<?=$edit_data->id?>">Personal information</a>
                        </li>
                        <li>
                          <i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
                          <a href="<?=base_url()?>panel/admin/admin_update/<?=$edit_data->id?>">Update information</a>
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




<?php 
    $this->load->view('panel/header/footer');
?>
