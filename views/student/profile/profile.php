<?php 
   $this->load->view('student/header/header');
   $this->load->view('student/header/menu');
   ?>
<div class="header-spacer"></div>
<div class="conty">
   <?php 
      $this->load->view('student/profile/sub_menu');
      ?>
   <div class="all-wrapper no-padding-content solid-bg-all">
      <div class="layout-w">
         <div class="content-w">
            <div class="content-i">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                           <h4 class="form-header"><?=get_phrase('your_profile_setting')?></h4>
                           <br>
                           <form action="" enctype="multipart/form-data" method="post">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <center>
                                       <?php
                                          $datas = 'backed/uploads/profile/'.$getuser->profile_pic;
                                          if (file_exists($datas) && !empty($getuser->profile_pic)) {
                                          ?>
                                       <img src="<?=base_url()?>backed/uploads/profile/<?=$getuser->profile_pic?>" style="width:200px;">
                                       <?php } else {  ?>
                                       <img src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" style="width:200px;">
                                       <?php }?>
                                    </center>
                                 </div>
                                 <div class="col-sm-12" style="text-align:center;">
                                    <center>
                                       <br />
                                       <button id="OpenImgUpload" type="button" class="btn btn-primary"><?=get_phrase('browse')?></button>
                                       <input id="imgupload" style="border:none;width: auto;display: none;"  type="file" name="profile_pic">
                                       <input type="hidden" value="<?=$getuser->profile_pic?>" name="old_imagename">
                                       <hr>
                                    </center>
                                 </div>
                                 <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label"><?=get_phrase('first_name')?></label>
                                       <input class="form-control" type="text" value="<?=$getuser->first_name?>" name="first_name" required="">
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label"><?=get_phrase('last_name')?></label>
                                       <input class="form-control" type="text" value="<?=$getuser->last_name?>" name="last_name">
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label"><?=get_phrase('email')?></label>
                                       <input class="form-control" type="text" value="<?=$getuser->email?>" name="email" readonly>
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <label class="control-label"><?=get_phrase('about')?></label>
                                    <div class="form-group label-floating">
                                       <textarea class="form-control summernoteeditor" type="text"  name="about_us" ><?=$getuser->about_us?></textarea>
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div>
                                       <button class="btn btn-primary" type="submit"> <?=get_phrase('update')?></button>
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
<script type="text/javascript">
   $('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });
   
</script>
<?php 
   $this->load->view('student/header/footer');
   ?>