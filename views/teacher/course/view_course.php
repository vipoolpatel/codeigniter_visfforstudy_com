<?php 
   $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
   ?>
<div class="header-spacer"></div>
<div class="conty">
   <?php 
      $this->load->view('teacher/course/sub_menu');
      ?>
   <div class="all-wrapper no-padding-content solid-bg-all">
      <div class="layout-w">
         <div class="content-w">
            <div class="content-i">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ui-block paddingtel">
                           <article class="hentry post has-post-thumbnail thumb-full-width">
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Title : </b> <?=ucfirst($value->course_title)?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Category Name : </b> <?=ucfirst($value->category_name)?></label>
                                 </div>
                              </div>
                              <?php
                                 if (!empty($value->image) && file_exists('backed/teacher/course/'.$value->image)) {
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
                                    <label><b>Available Date, Time and Duration(Minutes) </b>       </label>
                                    <table class="table table-striped table-bordered table-hover" style="width: 50%">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Date</th>
                                             <th>Time</th>
                                             <th>Duration(Minutes)</th>
                                             <th>Join Class Room</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php 
                                             $i = 0;
                                             foreach ($course_lesson as $value1) {
                                               $i++
                                              ?>
                                          <tr>
                                             <td><?=$i?></td>
                                             <td><?=date('d-m-Y',$value1->lesson_date)?></td>
                                             <td><?=date('h:i A',$value1->lesson_time)?></td>
                                             <td><?=$value1->duration?>/Minutes</td>
                                             <td>
                                                <?php
                                                   $getbluebutton = $this->db->where('id',1);
                                                   $getbluebutton = $this->db->get('bigbluebutton')->row();
                                                   $full_name = urlencode($getuser->first_name);
                                                   $string = "joinfullName=".$full_name."&meetingID=".$value1->meeting_id."&password=".$value1->meeting_id."";
                                                   $salt = $getbluebutton->salt;
                                                   $sha = sha1($string.$salt);
                                                   $link = "fullName=".$full_name."&meetingID=".$value1->meeting_id."&password=".$value1->meeting_id."&checksum=".$sha;

                                                  $ten_date_minus = date("Y-m-d H:i", strtotime("-10 minutes", $value1->lesson_time));

                                                  $duration = $value1->duration + 10;

                                                  $plus_date_minus = date("Y-m-d H:i", strtotime("".$duration." minutes", $value1->lesson_time));

                                                  $date = date('Y-m-d H:i');

                                                  if($date >= $ten_date_minus && $date <= $plus_date_minus) { ?>
                                                <a class="btn btn-primary" target="_blank" href="<?=$getbluebutton->url?>api/join?<?php echo $link;?>">Join</a>
                                                
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
                                    <label><b>Price Per Lesson : </b> <span style="color: #0084ff;">$<?=$value->hour_per_rate?>/Lesson</span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Status : </b> 
                                    <?php if ($value->status == '1') { ?>
                                    <b><span style="color: blue;">Pending</span></b>
                                    <?php  }elseif ($value->status == '2') { ?>
                                    <b><span style="color: green;">Approved</span></b>
                                    <?php }elseif ($value->status == '3') { ?>
                                    <b><span style="color: red;">Reject</span></b>
                                    <?php }   ?>
                                    </label>
                                 </div>
                              </div>
                              <!--     <div class="col-sm-12"> 
                                 <div class="form-group label-floating">
                                   <label><b>Live Status : </b> 
                                       <?php if ($value->user_status == '1') { ?>
                                         <span style="color: blue;">Active</span>
                                      <?php  }elseif ($value->user_status == '2') { ?>
                                          <span style="color: green;">Inactive</span>
                                      <?php }  ?>
                                 
                                     
                                   </label>
                                 </div>
                                 </div>  --> 
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Created Date : </b><?=date('d-m-Y h:i A', strtotime($value->created_date));?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Description:</b>  <?=$value->description?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12"> 
                                 <a class="btn btn-primary" href="<?=base_url()?>teacher/course/edit_course/<?=$value->id?>">Edit</a>
                                 <?php if ($value->status == '1') { ?>
                                 <a class="btn btn-success" href="<?=base_url()?>teacher/course/course_list?status=1">Back</a>
                                 <?php  }elseif ($value->status == '2') { ?>
                                 <a class="btn btn-success" href="<?=base_url()?>teacher/course/course_list?status=2">Back</a>
                                 <?php }elseif ($value->status == '3') { ?>
                                 <a class="btn btn-success" href="<?=base_url()?>teacher/course/course_list">Back</a>
                                 <?php }   ?>
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
