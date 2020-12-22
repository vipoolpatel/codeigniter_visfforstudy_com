<?php 
   $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
   ?>
<div class="header-spacer"></div>
<div class="conty">
   <div class="os-tabs-w menu-shad">
      <div class="os-tabs-controls">
         <ul class="navs navs-tabs upper">
            <li class="navs-item">
               <a class="navs-links active" href="<?=base_url()?>teacher/demand/demand_list"><i class="os-icon picons-thin-icon-thin-0017_office_archive"></i><span>Student Demand</span></a>
            </li>
         </ul>
      </div>
   </div>
   <br>
   <div class="all-wrapper no-padding-content solid-bg-all">
      <div class="layout-w">
         <div class="content-w">
            <div class="content-i">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ui-block paddingtel">
                           <article class="hentry post has-post-thumbnail thumb-full-width">
                              <div class="post__author author vcard inline-items">
                                 <?php
                                    $datas = 'backed/uploads/profile/'.$value->profile_pic;
                                    if (file_exists($datas) && !empty($value->profile_pic)) {
                                    ?>
                                 <img src="<?=base_url()?>backed/uploads/profile/<?=$value->profile_pic?>">  
                                 <?php } else { ?>
                                 <img src="<?=base_url()?>backed/uploads/user.jpg">  
                                 <?php } ?>
                                 <div class="author-date">
                                    <a class="h6 post__author-name fn" href="javascript:void(0);"><?=$value->first_name?> <?=$value->last_name?></a>
                                 </div>
                              </div>
                              <hr>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Title :</b>  <?=$value->demands_title?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Type:</b> <?=ucfirst($value->demand_type_name)?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Level of Student:</b> <?=$value->level_of_student_name?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Category Name:</b> <?=ucfirst($value->category_name)?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Lesson Date & Time:</b><span style="color: #0084ff;">  <?=date('d-m-Y', strtotime($value->required_date));?>; <?=date('h:i:A', strtotime($value->start_time));?> </span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Lesson duration (Minutes) : </b><span style="color: #0084ff;"> <?=$value->duration?>/Minutes</span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Price Per Lesson:</b> <span style="color: #0084ff;">$<?=$value->rate_per_hour?>/Lesson</span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <p><b>Created Date : </b><span style="color: #0084ff;">  <?=date('d-m-Y h:i:A', strtotime($value->created_date));?> </span></p>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Description :</b> <?=$value->demands_description?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12"> 
                                 <a class="btn btn-success" href="<?=base_url()?>teacher/demand/demand_list">Back</a>
                              </div>
                           </article>
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
<?php 
   $this->load->view('teacher/header/footer');
   ?>
