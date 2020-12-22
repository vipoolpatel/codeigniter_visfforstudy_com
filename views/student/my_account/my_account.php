<?php 
    $this->load->view('student/header/header');
   $this->load->view('student/header/menu');
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
                                    <?php } else {

   ?>
   <img src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" style="background-color:#fff;">
                                                       <?php 
                                                     }
                                                     ?>

                                  </div>
                              </div>
                              <h3 class="text-white"><?=$list->first_name?> <?=$list->last_name?></h3>
                              <h5 class="up-sub-header">@Student</h5>
                          </div>
                          <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="" xmlns:xlink=""><g transform="" fill="#FFFFFF"><path class="decor-path" d=""></path></g>
                          </svg>
                        </div>

                        <div class="up-controls">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="value-pair">
                                      <div><?=get_phrase('account_type')?>:</div>
                                      <div class="value badge badge-pill badge-success"><?=get_phrase('student')?></div>
                                  </div>
                                  <div class="value-pair">
                                      <div><?=get_phrase('member_since')?>:</div>
                                      <div class="value">
                                          <?=date('d/m/Y', strtotime($list->created_date));?>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>


          <div class="ui-block">

            <div class="ui-block-title">    
                <h6 class="title"><?=get_phrase('personal_information')?></h6>
            </div>

            <div class="ui-block-content">
              <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="widget w-personal-info item-block">

                    <li>
                      <span class="title"><?=get_phrase('first_name')?>:</span>
                      <span class="text"><?=$list->first_name?></span>
                    </li>

                    <li>
                      <span class="title"><?=get_phrase('email')?>:</span>
                      <span class="text"><?=$list->email?></span>
                    </li>

                  </ul>
                </div>


                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="widget w-personal-info item-block">
                     <li>
                      <span class="title"><?=get_phrase('last_name')?>:</span>
                      <span class="text"><?=$list->last_name?></span>
                    </li>

                     <li>
                      <span class="title"><?=get_phrase('about')?> :</span>
                      <span class="">
                        <?=$list->about_us?>
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
                      <h3 class="title"><?=get_phrase('quick_links')?></h3>
                      <ul class="help-support-list">
                        <li>
                          <i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
                          <a href="<?=base_url()?>student/myaccount">
                            <?=get_phrase('personal_information')?></a>
                        </li>
                        <li>
                          <i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
                          <a href="<?=base_url();?>student/profile">
                            <?=get_phrase('update_information')?></a>
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
    $this->load->view('student/header/footer');
?>