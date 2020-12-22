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
                           <h4 class="form-header">Your Profile Setting</h4>
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
                                       <?php } else {
                                          ?>
                                       <img src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" style="width:200px;">
                                       <?php }?>
                                    </center>
                                 </div>
                                 <div class="col-sm-12" style="text-align:center;">
                                    <center>
                                       <br />
                                       <button id="OpenImgUpload" type="button" class="btn btn-primary">Browse</button>
                                       <input id="imgupload" style="border:none;width: auto;display: none;" type="file" name="profile_pic" >
                                       <input type="hidden" value="<?=$getuser->profile_pic?>" name="old_imagename">
                                       <hr>
                                    </center>
                                 </div>
                                 <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">First Name</label>
                                       <input class="form-control" type="text" value="<?=$getuser->first_name?>" name="first_name" required="">
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">Last Name</label>
                                       <input class="form-control" type="text" value="<?=$getuser->last_name?>" name="last_name">
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">Email ID</label>
                                       <input class="form-control" type="text" value="<?=$getuser->email?>" name="email" readonly>
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                       <label class="control-label">Category Name</label>
                                       <div class="select">
                                          <select name="category_id" required>
                                             <?php
                                              foreach ($getCategory as $vala) {
                                                 ?>
                                             <option <?=($vala->id == $getuser->category_id) ? 'selected' : '' ?> value="<?=$vala->id?>"><?=$vala->category_name?></option>
                                             <?php }
                                                ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                       <label class="control-label">Language Name</label>
                                       <div class="select">
                                          <select name="language_id[]" style="height: 300px;" required multiple >
                                             <?php
                                             foreach ($getLanguage as $vals) {
                                                  $selected = '';
                                                  foreach ($getUserLanguage as $valued) {
                                                      if($valued->language_id == $vals->id) {
                                                          $selected = 'selected';
                                                      }
                                                  }
                                                 ?>
                                                  <option <?=$selected?> value="<?=$vals->id?>"><?=$vals->language_name?></option>
                                             <?php 
                                            }
                                                ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                       <label class="control-label">Level</label>
                                       <div class="select">
                                          <select name="level_of_teacher" required="">
                                             <?php
                                                foreach ($level_of_teacher as $key) {
                                                ?>
                                             <option <?=($key->id == $getuser->level_of_teacher) ? 'selected' : ''?>  value="<?=$key->id?>"><?=$key->level_of_student_name?></option>
                                             <?php }?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                       <label class="control-label">Your Experience</label>
                                       <div class="select">
                                          <select name="experience_of_teacher" >
                                             <option value="0">Select Your Experience</option>
                                             <option <?=($getuser->experience_of_teacher == '1')?'selected':''?> value="1">1 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '2')?'selected':''?> value="2">2 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '3')?'selected':''?> value="3">3 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '4')?'selected':''?> value="4">4 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '5')?'selected':''?> value="5">5 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '6')?'selected':''?> value="6">6 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '7')?'selected':''?> value="7">7 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '8')?'selected':''?> value="8">8 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '9')?'selected':''?> value="9">9 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '10')?'selected':''?> value="10">10 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '11')?'selected':''?> value="11">11 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '12')?'selected':''?> value="12">12 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '13')?'selected':''?> value="13">13 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '14')?'selected':''?> value="14">14 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '15')?'selected':''?> value="15">15 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '16')?'selected':''?> value="16">16 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '17')?'selected':''?> value="17">17 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '18')?'selected':''?> value="18">18 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '19')?'selected':''?> value="19">19 Year</option>
                                             <option <?=($getuser->experience_of_teacher == '20')?'selected':''?> value="20">20 Year</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">Hour Per Rate ($)</label>
                                       <input class="form-control" type="text" value="<?=$getuser->hour_per_rate?>" name="hour_per_rate" required="" id="num">
                                       <span id="error2" class="text-danger clear"></span>
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <label class="control-label">About us</label>
                                    <div class="form-group label-floating">
                                       <textarea class="form-control summernoteeditor" type="text" name="about_us"><?=$getuser->about_us?></textarea>
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div>
                                       <button class="btn btn-primary" type="submit"> Update</button>
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
   
   $("#num").keypress(function (evt) {
   var charCode = (evt.which) ? evt.which : evt.keyCode;
   if (charCode != 46 &&  charCode > 31 &&  (charCode < 48 || charCode > 57)) {
          $('#error2').text('Only Numeric value Insert');
          return false;
   }
   $('#error2').text('');
   return true;
   });
   
   
</script>
<?php 
   $this->load->view('teacher/header/footer');
   ?>
<script type="text/javascript">
   $(document).ready(function(){
     $('#langOpt2').multiselect({
       nonSelectedText: 'Select Framwork',
       enableFiltering:true,
       enableCaseInsensitiveFiltering:true,
       buttonWidth:'400px',
      });
   });
</script>