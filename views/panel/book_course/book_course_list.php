
<?php 
    $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>

 <div class="header-spacer"></div>
    <div class="conty">
        <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
              <ul class="navs navs-tabs upper">
                <li class="navs-item">
                    <a class="navs-links active" href="">
                        <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                        <span>Book Course List</span></a>
                </li>
              </ul>
          </div>
        </div>
        <div class="content-box">
       <div class="os-tabs-w">
     
      </div>
      <br>
        <div class="tab-content ">
            <div class="tab-pane active" id="students">
            <div class="element-wrapper">
               
                <div class="element-box-tp">
                  <div class="table-responsive">
                    <table class="table table-padded">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Student Name</th>
                          <th>Teacher Name</th>
                          <th>Course Title</th>
                          <th>Available Date</th>
                          <th style="width:9%">Time</th>
                          <th style="width:10%">Duration(Minutes)</th>
                          <th>Course Price</th>
                          <th>Created Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>


                        <?php if(!empty($list)){ 
                        foreach ($list as $value) { ?>


                          <tr>

                             <td><?=$value->id?></td>
                             <td><?=$value->sf_name?> <?=$value->sl_name?></td>
                             <td><?=$value->tf_name?> <?=$value->tl_name?></td>
                             <td><?=$value->course_title?></td>
                             <td><?=date('d-m-Y',$value->lesson_date)?></td>
                             <td><?=date('h:i A',$value->lesson_time)?></td>
                             <td><?=$value->duration?> Minutes</td>
                             <td>$<?=$value->course_price?>/Lesson</td>
                             <td><?=date('d-m-Y h:i A', strtotime($value->created_date));?></td>
                          
                            <td class="bolder">
                                  <a href="<?=base_url()?>panel/course/view_course/<?=$value->course_id?>" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0012_notebook_paper_certificate" data-toggle="tooltip" data-placement="top" data-original-title="View details"></i></a>

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
                                      
                                     <a class="btn btn-primary" style="margin-top: -10px;" target="_blank" href="<?=$getbluebutton->url?>api/join?<?php echo $link;?>">Join</a>
                                   <?php }
                                   ?>
                                
                            </td>

                        </tr>

                                            
                        <?php } }else{ ?>

                           <tr><td colspan="100%">No record found.</td></tr>

                        <?php }?>

                      </tbody>
                    </table>

                              <?php echo $this->pagination->create_links ();?>
                 
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
