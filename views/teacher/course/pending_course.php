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

                 <?php foreach ($pending_course as $value) { ?>
                
                 
                     <div class="col col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                       <div class="lined-primary shadow" style="border-radius:10px;">
                          <div class="ui-block" data-mh="friend-groups-item">        
                          <div class="friend-item friend-groups">
                              <div class="friend-item-content">         
                              <div class="more">
                                  <i class="icon-feather-more-horizontal"></i>
                                  <ul class="more-dropdown">
                                      <li><a href="<?=base_url()?>teacher/course/view_course/<?=$value->id?>">View</a></li>
                                      <li><a href="<?=base_url()?>teacher/course/edit_course/<?=$value->id?>">Edit</a></li>
                                      <li><a onClick="return confirm('Do you want to delete the information?')" href="<?=base_url()?>teacher/course/delete_course/<?=$value->id?>">Delete</a></li>
                                  </ul>
                              </div>
                              <div class="friend-item-content">
                                  <div class="friend-avatar">

                                    <?php

                                      $datas = 'backed/teacher/course/'.$value->image;
                                      if (file_exists($datas) && !empty($value->image)) {
                                      ?>

                                      <img src="<?=base_url()?>backed/teacher/course/<?=$value->image?>" width="120px" style="background-color:#FF7F7F;height: 80px">

                                      <?php } else{ ?>

                                      <img src="<?=base_url()?>backed/uploads/subject_icon/aff444a82c7c89ba3dac8b13e418146ecount_icon-3.png" width="120px" style="background-color:#FF7F7F;padding:20px;height: 80px;">

                                    <?php }?>

                                  </div>
                                  <div class="author-content">
                                     <h4><?=ucfirst($value->course_title)?></h4>
                                      <a class="h5 author-name"><?=ucfirst($value->category_name)?></a><br><br>
                                      <h5><?=$value->hour_per_rate?>$/hour</h5>
                                      <hr/>
                                      <p>Available Time and Date</p>
                                      <h5><?=date('d/m/Y', strtotime($value->available_date));?> - <?=date('h:i a', strtotime($value->start_time));?> to <?=date('h:i a', strtotime($value->end_time));?></h5>
                                  </div> 
                              </div>   
                          </div>
                        </div>        
                      </div>
                    </div>
                    </div>


                    <?php } ?>

                      <?php echo $this->pagination->create_links ();?>


              
<!-- END LIST OF SUBJECT -->

                 </div>
              </div>                                     

            </div>  
          </div>
         </div>
        </div>  









<?php 
    $this->load->view('teacher/header/footer');
?>
