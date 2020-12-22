<?php 
    $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
?>


 <div class="header-spacer"></div>
    <div class="conty">


<?php 
    $this->load->view('teacher/offersent/sub_menu');
 
?>





<div class="all-wrapper no-padding-content solid-bg-all">
  <div class="layout-w">
      <div class="content-w">
          <div class="content-i">
              <div class="container-fluid">

              <div class="row">


            <?php foreach ($teacher_offer_send as  $value) { ?>

               <div class="col col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ui-block paddingtel">    
                          <article class="hentry post has-post-thumbnail thumb-full-width">

                              <div class="col-sm-12"> 
                                <div class="form-group label-floating">
                                  <label><b>Title : </b> <?=ucfirst($value->title)?></label>
                                </div>
                              </div> 

                              
                                <div class="col-sm-12"> 
                                  <div class="form-group label-floating">
                                    <label><b>Category Name : </b> <?=ucfirst($value->category_name)?></label>
                                  </div>
                                </div> 

                                 <div class="col-sm-12"> 
                                  <div class="form-group label-floating">
                                    <label><b>Student Name : </b> <?=$value->first_name?> <?=$value->last_name?></label>
                                  </div>
                                </div> 

                                <div class="col-sm-12"> 
                                  <div class="form-group label-floating">
                                    <label><b>Price Per Lesson : </b> <span style="color: #0084ff;">$<?=$value->hour_per_rate?>/Lesson</span></label>
                                  </div>
                                </div> 

                                
                                <div class="col-sm-12"> 
                                  <div class="form-group label-floating">
                                    <label><b>Lesson Date & Time : </b><span style="color: #0084ff;"> <?=date('d-m-Y', strtotime($value->required_date));?>; <?=date('h:i A', strtotime($value->start_time));?></span></label>
                                  </div>
                                </div> 


                                <div class="col-sm-12"> 
                                  <div class="form-group label-floating">
                                    <label><b>Lesson duration (Minutes) : </b><span style="color: #0084ff;"> <?=$value->duration?>/Minutes</span></label>
                                  </div>
                                </div>
                                
                                <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <p><b>Created Date : </b><span style="color: #0084ff;">  <?=date('d-m-Y h:i:A', strtotime($value->created_date));?> </span></p>
                                 </div>
                              </div> 

                                <div class="col-sm-12"> 
                                  <div class="form-group label-floating">
                                    <label><b>Status : </b> <?php if ($value->status == '1') { ?>
                                              <b><span style="color: blue;"> Pending</span></b>
                                           <?php  }elseif ($value->status == '2') { ?>
                                               <b><span style="color: green;"> Approved</span></b>
                                           <?php }elseif ($value->status == '3') { ?>
                                               <b><span style="color: red;"> Reject</span></b>
                                            <?php }   ?></label>
                                          </div>
                                </div> 

                                <div class="col-sm-12"> 
                                   <a class="btn btn-success " href="<?=base_url()?>teacher/offersent/view_teacher_offer_send/<?=$value->id?>">View</a> 
                                  <a class=" btn btn-primary" href="<?=base_url()?>teacher/offersent/edit_teacher_offer/<?=$value->id?>">Edit</a>
                                  <a class="btn btn-danger " onClick="return confirm('Do you want to delete the information?')" href="<?=base_url()?>teacher/offersent/delete_teacher_offer/<?=$value->id?>">Delete</a>

                                </div>   

                  
                          </article>
                         </div>
                      </div>

              
            <?php } ?>

         

     
      </div>
    </div>
    </div>
  </div>
</div>      </div>
      <div class="display-type"></div>
    </div>


<?php 
    $this->load->view('teacher/header/footer');
?>