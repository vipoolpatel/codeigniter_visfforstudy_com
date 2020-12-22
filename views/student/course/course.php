<?php 
    $this->load->view('student/header/header');
   $this->load->view('student/header/menu');
?>


 <div class="header-spacer"></div>
      <div class="conty">
         <?php 
   $this->load->view('student/course/sub_menu');
    ?>
        <div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
                <div class="content-w">
                    <div class="content-i">
                        <div class="container-fluid">
                            <div class="row">


         <?php foreach ($list as  $value) { ?>

              <div class="col col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="lined-primary shadow" style="border-radius:10px;">
                            <div class="ui-block" data-mh="friend-groups-item">        
                            <div class="friend-item friend-groups">
                              <br>
                              <h5 class="text-center"><?=$value->first_name?> <?=$value->last_name?></h5>
                              <hr>
                                <div class="friend-item-content">         
                                <div class="friend-avatar">
                                 
                                     <?php

                                      $datas = 'backed/teacher/course/'.$value->image;
                                      if (file_exists($datas) && !empty($value->image)) {
                                      ?>

                                      <img src="<?=base_url()?>backed/teacher/course/<?=$value->image?>" width="120px" style="background-color:#FF7F7F;height: 80px" >

                                      <?php } ?>

                                  
                                    <div class="author-content">
                                      <br>
                                       <h5><?=$value->course_title?></h5>
                          
                                      <a class="h5 author-name"><?=ucfirst($value->category_name)?></a><br><br>
                                     
                                      <h5>$<?=$value->hour_per_rate?>/Lesson</h5>

                                      <p>Created Date : <?=date('d-m-Y h:i A', strtotime($value->created_date));?></p>
                                    
                                     <!--  <hr/>
                                      <p>Available Time and Date</p>
                                      <h5><?=date('d/m/Y', strtotime($value->available_date));?>;  <?=date('h:i:A', strtotime($value->start_time));?> - <?=date('h:i:A', strtotime($value->end_time));?></h5> -->
                                    </div>    

                                    <div class="col-sm-12"> 
                    

                                       <a href="<?=base_url();?>student/course/view_course/<?=$value->id?>" class="send-btn btn btn-primary">View</a>
                                      </div>   

                                </div>                        
                            </div>
                          </div>        
                        </div>
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
                <div class="display-type"></div>
            </div>
        </div>
    </div>
</div>      </div>
      <div class="display-type"></div>
    </div>



<?php 
    $this->load->view('student/header/footer');
?>
