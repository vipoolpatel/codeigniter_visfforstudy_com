<?php 
    $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
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
                                    
                                    <?php } else { ?>

                                    <img src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" style="background-color:#fff;">
                                    <?php  } ?>
                                      
                                       

                                  </div>
                              </div>
                              <h3 class="text-white"><?=$list->first_name?> <?=$list->last_name?></h3>
                              <h5 class="up-sub-header">@Teacher</h5>
                          </div>
                          <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="" xmlns:xlink=""><g transform="" fill="#FFFFFF"><path class="decor-path" d=""></path></g>
                          </svg>
                        </div>

                        <div class="up-controls">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="value-pair">
                                      <div>Account type:</div>
                                      <div class="value badge badge-pill badge-success">Teacher admin</div>
                                  </div>
                                  <div class="value-pair">
                                      <div>Member since:</div>
                                      <div class="value">
                                          <?=date('d/m/Y', strtotime($list->created_date));?>
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

                    <li>
                      <span class="title">Subject:</span>
                      <span class="text"><?=$list->category_of_teacher?></span>
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

                     <li>
                      <span class="title">Experience:</span>
                      <span class="text"><?=$list->experience_of_teacher?> Year</span>
                    </li>
                    
                  </ul>
                </div>

                </div>
              </div>
            </div>


<!-- qulification start -->





              <div class="ui-block">
              <div class="ui-block-title">    
                  <h6 class="title">Qulification Detail</h6>
              </div>
              <hr>

          


          <div class="all-wrapper no-padding-content solid-bg-all">
                    <div class="layout-w">
                        <div class="content-w">
                            <div class="content-i">
                                <div class="container-fluid">
                                    <div class="row">

                                      <?php foreach ($qulification_list as $value) { ?>

                                        <div class="col-sm-6">
                                     <div class="element-box lined-primary shadow" style="border-radius:10px;">


                                           <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>University:</b> <span style="color: #0084ff;"><?=$value->university_name?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>Degree:</b><span style="color: #0084ff;"> <?=$value->degree?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>Start Year :</b><span style="color: #0084ff;">  <?=date('d/m/Y', strtotime($value->start_year));?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>End Year :</b><span style="color: #0084ff;">  <?=date('d/m/Y', strtotime($value->end_year));?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>Major:</b> <span style="color: #0084ff;">  <?=$value->major?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>Description:</b>  <?=$value->description?></label>
                                    </div>
                                  </div> 

                                           
                                       
                                            <div class="col-sm-12"> 
                                                <div>
                                                    <a class="btn btn-primary" href="<?=base_url()?>teacher/profile/edit_qulification/<?=$value->id?>"> Edit</a>
                                                 </div>
                                            </div>
                                      </div>
                                    </div>
                                        
                              <?php } ?>

                              
                          

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

             


              </div>


<!-- qulification end -->

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
                          <a href="<?=base_url()?>teacher/myaccount">Personal information</a>
                        </li>
                        <li>
                          <i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
                          <a href="<?=base_url();?>teacher/profile">Update information</a>
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
    $this->load->view('teacher/header/footer');
?>