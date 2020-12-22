<?php 
    $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
?>


  <div class="header-spacer"></div>
      <div class="conty">
<?php 
    $this->load->view('teacher/course/sub_menu');
?>


         <div class="aec-full-message-w">
              <div class="aec-full-message">
                <div class="container-fluid" style="background-color: #f2f4f8;">
                  <div class="tab-content">
                       <div class="tab-pane active" id="tab2">
                        <div class="row">


<!-- START LIST OF SUBJECT -->

          <?php foreach ($publish_course as $value) { ?>
  


                      <div class="col col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                         <div class="lined-primary shadow" style="border-radius:10px;">
                            <div class="ui-block" data-mh="friend-groups-item">        
                            <div class="friend-item friend-groups">
                                <div class="friend-item-content">         
                            
                                <div class="friend-item-content">
                                    <div class="friend-avatar">

                                    <?php

                                      $datas = 'backed/teacher/course/'.$value->image;
                                      if (file_exists($datas) && !empty($value->image)) {
                                      ?>

                                      <img src="<?=base_url()?>backed/teacher/course/<?=$value->image?>" width="120px" style="background-color:#FF7F7F;height: 80px;">

                                      <?php } ?>
                                    </div>

                                    <div class="author-content">

                                      <br>
                                       <h5><?=$value->course_title?></h5>
                          
                                      <a class="h5 author-name"><?=ucfirst($value->category_name)?></a><br><br>
                                     
                                      <h5>$<?=$value->hour_per_rate?>/Lesson</h5>


                                      <p>Created Date : </b><?=date('d-m-Y h:i A', strtotime($value->created_date));?></p>
                                    
                                      <!-- <hr/>
                                      <p>Available Time and Date</p>
                                      <h5><?=date('d/m/Y', strtotime($value->available_date));?>; <?=date('h:i:A', strtotime($value->start_time));?> - <?=date('h:i:A', strtotime($value->end_time));?></h5> -->
                                    </div>    

                                    <div class="col-sm-12"> 
                                         <a href="<?=base_url()?>teacher/course/view_course/<?=$value->id?>"><button class="btn btn-success" style="margin:5px">View</button></a>

                                         <a href="<?=base_url()?>teacher/course/edit_course/<?=$value->id?>"><button class="btn btn-primary" style="margin:5px">Edit</button></a>

                                        <a onClick="return confirm('Do you want to delete the information?')" href="<?=base_url()?>teacher/course/delete_course/<?=$value->id?>"><button class="btn btn-danger" style="margin:5px">Delete</button></a>


                                     </div>







                                </div>  
                            </div>
                          </div>        
                        </div>
                      </div>
                    </div>

             <?php } ?>


<!-- END LIST OF SUBJECT -->

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






<?php 
    $this->load->view('teacher/header/footer');
?>
