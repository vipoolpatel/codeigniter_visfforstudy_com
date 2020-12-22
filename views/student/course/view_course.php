<?php 
   $this->load->view('student/header/header');
   $this->load->view('student/header/menu');
   ?>
<div class="header-spacer"></div>
<div class="conty">
   <div class="os-tabs-w menu-shad">
      <div class="os-tabs-controls">
         <ul class="navs navs-tabs upper">
            <li class="navs-item">
               <a class="navs-links active" href="<?=base_url()?>student/course/view_course/<?=$value->id?>"><i class="os-icon picons-thin-icon-thin-0017_office_archive"></i><span>View List</span></a>
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
                                 <?php } ?>
                                 <div class="author-date">
                                    <a class="h6 post__author-name fn" href="javascript:void(0);"><?=$value->first_name?> <?=$value->last_name?></a>
                                 </div>
                              </div>
                              <hr>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Title : </b> <?=ucfirst($value->course_title)?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Category Name : </b> <?=$value->category_name?></label>
                                 </div>
                              </div>
                              <?php
                                 if(!empty($value->image) && file_exists('backed/teacher/course/'.$value->image)){
                                 ?>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label  style="width: 100%"><b>Image</b>  </label>
                                    <img  height="200"  src="<?=base_url()?>backed/teacher/course/<?=$value->image?>">
                                 </div>
                              </div>
                              <?php
                                 }
                                 ?>
                              <?php
                                 if (!empty($value->course_video) && file_exists('backed/teacher/course/'.$value->course_video)) {
                                 ?>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label style="width: 100%"><b>Video</b> </label>
                                    <iframe height="200" src="<?=base_url()?>backed/teacher/course/<?=$value->course_video?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
                                 </div>
                              </div>
                              <?php
                                 }
                                 ?>  
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Subject </b></label>
                                    <table class="table table-striped table-bordered table-hover" style="width: 50%">
                                       <thead>
                                          <tr>
                                             <th>Subject Name</th>
                                             <th>Level</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php 
                                             $i = 0;
                                             foreach ($subject as $values) {
                                               $i++
                                              ?>
                                          <tr>
                                             <td><?=$values->subject_name?></td>
                                             <td><?=$values->level_name?></td>
                                          </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Available Date, Time and Duration(Minutes) </b>  </label>
                                    <table class="table table-striped table-bordered table-hover" style="width: 50%">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Date</th>
                                             <th>Time</th>
                                             <th>Duration(Minutes)</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php 
                                             $i = 0;
                                             foreach ($course_lesson as $value1) {
                                               $getbookedcourse = $this->db->where('student_id',$this->session->userdata('user_id'));
                                               $getbookedcourse = $this->db->where('lesson_id',$value1->id);
                                               $getbookedcourse = $this->db->get('order_course')->num_rows();
                                             
                                               $i++
                                              ?>
                                          <tr>
                                             <td><?=$i?></td>
                                             <td><?=date('d-m-Y',$value1->lesson_date)?></td>
                                             <td><?=date('h:i A',$value1->lesson_time)?></td>
                                             <td><?=$value1->duration?>/Minutes</td>
                                             <td>
                                                <?php
                                                  if(!empty($getbookedcourse)) { 

                                                    ?>
                                                <a target="_blank" href="<?=base_url()?>student/mybookcourse/my_book_course_list" class="btn btn-success">Booked</a>
                                                <?php
                                                    $ten_date_minus = date("Y-m-d H:i", strtotime("-10 minutes", $value1->lesson_time));

                                                    $duration = $value1->duration + 10;
                                                    $plus_date_minus = date("Y-m-d H:i", strtotime("".$duration." minutes", $value1->lesson_time));

                                                    $date = date('Y-m-d H:i');
                                                    if($date >= $ten_date_minus && $date <= $plus_date_minus)
                                                    {

                                                         $getbluebutton = $this->db->where('id',1);
                                                         $getbluebutton = $this->db->get('bigbluebutton')->row();
                                                         $full_name = urlencode($getuser->first_name);
                                                         $string = "joinfullName=".$full_name."&meetingID=".$value1->meeting_id."&password=".$value1->meeting_password."";
                                                         $salt = $getbluebutton->salt;
                                                         $sha = sha1($string.$salt);
                                                         $link = "fullName=".$full_name."&meetingID=".$value1->meeting_id."&password=".$value1->meeting_password."&checksum=".$sha;

                                                      ?>
                                                        <a class="btn btn-primary" target="_blank" href="<?=$getbluebutton->url?>api/join?<?php echo $link;?>">Join</a>
                                                        
                                                      <?php
                                                    }
                                                   ?>
                                                <?php }
                                                   else
                                                   { 
                                                    ?>
                                                <a class="btn btn-primary" href="<?=base_url()?>student/course/pay_now_course/<?=$value1->id?>">Book Lesson & Pay Now</a>
                                                <?php }
                                                   ?>
                                             </td>
                                          </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Price Per Lesson : </b><span style="color: #0084ff;">$<?=$value->hour_per_rate?>/Lesson  </span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Created Date : </b><?=date('d-m-Y h:i A', strtotime($value->created_date));?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Description : </b> <?=$value->description?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12"> 
                                 <a href="<?=base_url();?>student/course/course_list" class="send-btn btn btn-success">Back</a>
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
