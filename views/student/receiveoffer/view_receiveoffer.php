<?php 
   $this->load->view('student/header/header');
   $this->load->view('student/header/menu');
   ?>
<div class="header-spacer"></div>
<div class="conty">
   <?php  
      $this->load->view('student/receiveoffer/_sub_menu');
      ?>
   <br />
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
                                 <?php } else {  ?>
                                 <img src="<?=base_url()?>backed/uploads/user.jpg">  
                                 <?php  } ?>
                                 <div class="author-date">
                                    <a class="h6 post__author-name fn" href="javascript:void(0);"><?=$value->first_name?> <?=$value->last_name?></a>
                                 </div>
                              </div>
                              <hr>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>
                                    <?=get_phrase('title')?>
                                    : </b> <?=$value->title?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b><?=get_phrase('category_name')?> : </b> <?=$value->category_name?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b><?=get_phrase('lesson_date_&_time')?> : </b>
                                    <span style="color: #0084ff;">  <?=date('d-m-Y', $value->lesson_time);?>; <?=date('h:i:A', $value->lesson_time);?>  </span>
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Lesson duration (Minutes) : </b><span style="color: #0084ff;"> <?=$value->duration?>/Minutes</span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b><?=get_phrase('price_for_lesson')?> : </b><span style="color: #0084ff;">  $<?=$value->hour_per_rate?>/Lesson  </span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Created Date :</b> <?=date('d-m-Y h:i A', strtotime($value->created_date));?> </label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b><?=get_phrase('description')?> : </b> <?=$value->description?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12"> 
                                 <a href="<?=base_url();?>student/receiveoffer/receiveoffer_list"> <button class="send-btn btn btn-success "><?=get_phrase('back')?></button>  </a>
                                 <?php
                                    if($value->is_student == 1)
                                    { ?>
                                 <button class="send-btn btn btn-primary" disabled>Accepted</button>
                                 <?php
                                    $getbluebutton = $this->db->where('id',1);
                                    $getbluebutton = $this->db->get('bigbluebutton')->row();
                                    $full_name = urlencode($getuser->first_name);
                                    $string = "joinfullName=".$full_name."&meetingID=".$value->meeting_id."&password=".$value->meeting_password."";
                                    $salt = $getbluebutton->salt;
                                    $sha = sha1($string.$salt);
                                    $link = "fullName=".$full_name."&meetingID=".$value->meeting_id."&password=".$value->meeting_password."&checksum=".$sha;
                                    
                                     $ten_date_minus = date("Y-m-d H:i", strtotime("-10 minutes", $value->lesson_time));

                                    $duration = $value->duration + 10;
                                    $plus_date_minus = date("Y-m-d H:i", strtotime("".$duration." minutes", $value->lesson_time));


                                    $date = date('Y-m-d H:i');
                                    if($date >= $ten_date_minus && $date <= $plus_date_minus)
                                    {
                                    ?>
                                 <a class="btn btn-primary" target="_blank" href="<?=$getbluebutton->url?>api/join?<?php echo $link;?>">Join</a>
                                    <?php }
                                    ?>
                                 <?php } 
                                    else if($value->is_student == 2)
                                    { ?>
                                 <button class="send-btn btn btn-danger" disabled >Rejected</button>
                                 <?php }
                                    else
                                    { ?>
                                 <a class="send-btn btn btn-primary" href="<?=base_url()?>student/receiveoffer/accept_offer/<?=$value->id?>">Accept & Pay Now</a>
                                 <button class="send-btn btn btn-danger" onclick="status_chang('2_<?=$value->id?>')">Reject</button>
                                 <?php }
                                    ?>
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
   $this->load->view('student/header/footer');
   ?>
<script type="text/javascript">
   function status_chang(sta){
   
        var res = sta.split("_");
        var is_student = res[0];
        var id = res[1];
   
        
           $.ajax({
               url: '<?=base_url()?>student/demands/is_student_status',
               type:'POST',
               data:{is_student:is_student,id:id},
               dataType:'json',
               success: function(data){
   
                  window.location.reload();
   
               }
           });
   
   };
</script>
