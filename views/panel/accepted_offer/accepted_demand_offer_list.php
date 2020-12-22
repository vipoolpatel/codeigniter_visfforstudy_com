<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
   ?>
<div class="header-spacer"></div>
<div class="conty">

   <?php
      $this->load->view('panel/accepted_offer/_sub_menu');
   ?>


    <div class="all-wrapper no-padding-content solid-bg-all">
          <div class="layout-w">
              <div class="content-w">
                  <div class="content-i">
                      <div class="container-fluid">

             <div class="row">
                     <?php foreach ($list as $value) { ?>
                     <div class="col col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ui-block paddingtel">
                           <article class="hentry post has-post-thumbnail thumb-full-width">
                              <div class="post__author author vcard inline-items">
                                 <?php
                                    $datas = 'backed/uploads/profile/'.$value->profile_pic;
                                    if (file_exists($datas) && !empty($value->profile_pic)) {
                                    ?>
                                 <img src="<?=base_url()?>backed/uploads/profile/<?=$value->profile_pic?>">
                                 <?php } else{ ?>
                                 <img src="<?=base_url()?>backed/uploads/user.jpg"> 
                                 <?php }?>
                                 <div class="author-date">
                                    <a class="h6 post__author-name fn" href="javascript:void(0);"><?=$value->first_name?> <?=$value->last_name?></a>
                                 </div>
                              </div>
                              <hr>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Student Name :</b>
<?=$value->student_first_name?> <?=$value->student_last_name?>
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Teacher Name :</b> 
<?=$value->teacher_first_name?> <?=$value->teacher_last_name?>
                                    </label>
                                 </div>
                              </div>
                               <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Offer Title :</b> <?=$value->title?></label>
                                 </div>
                              </div>
                               <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b> Demand Title :</b>  <?=$value->demands_title?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b> Category Name :</b>  <?=$value->category_name?></label>
                                 </div>
                              </div>

                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Lesson Date & Time :</b><span style="color: #0084ff;"> <?=date('d-m-Y', $value->lesson_time);?>;  <?=date('h:i A', $value->lesson_time);?></span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Lesson duration (Minutes) : </b><span style="color: #0084ff;"> <?=$value->duration?>/Minutes</span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Price Per Lesson :</b> <span style="color: #0084ff;">$<?=$value->hour_per_rate?>/Lesson</span></label>
                                 </div>
                              </div>
                               <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Status :</b> 
                                    <?php if ($value->status == '1') { ?>
                                    <b> <span style="color: blue;">Panding</span></b>
                                    <?php  }elseif ($value->status == '2') { ?>
                                    <b><span style="color: green;">Approved</span></b>
                                    <?php }elseif ($value->status == '3') { ?>
                                    <b><span style="color: red;">Reject</span></b>
                                    <?php }   ?>
                                    </label>
                                 </div>
                              </div>
                           
                             
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <p><b>Created Date : </b><span style="color: #0084ff;">  <?=date('d-m-Y h:i:A', strtotime($value->created_date));?> </span></p>
                                 </div>
                              </div>
                              <div class="col-sm-12"> 
                                 <a class="btn btn-success " href="<?=base_url();?>panel/acceptedoffer/view_accepted_demand_offer/<?=$value->id?>">View</a> 

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

                                      if($date >= $ten_date_minus && $date <= $plus_date_minus) {   
                                    ?>
                                        
                             <a class="btn btn-primary" target="_blank" href="<?=$getbluebutton->url?>api/join?<?php echo $link;?>" >Join</a>           
                              <?php }
                              ?>                                      
                                 
                              </div>
                           </article>
                        </div>
                     </div>
                     <?php } ?>
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                        <?php echo $this->pagination->create_links ();?>
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
 $this->load->view('panel/header/footer');
 ?>
