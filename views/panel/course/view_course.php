
<?php 
    $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>

 <div class="header-spacer"></div>
    <div class="conty">
      <?php 
   $this->load->view('panel/course/sub_menu');
?>

        <div class="content-box">
        


    <div class="all-wrapper no-padding-content solid-bg-all">
                <div class="layout-w">
                    <div class="content-w">
                        <div class="content-i">
                            <div class="container-fluid">
     
<span class="alert alert-success msgs" style="display: none;"></span>
              
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

                         <?php } else {   ?>

 
                               <img src="<?=base_url()?>backed/uploads/user.jpg">  
      
                         <?php   }  ?>
                                                    
                                                    

                      <div class="author-date">
                          <a class="h6 post__author-name fn" href="javascript:void(0);"><?=$value->first_name?> <?=$value->last_name?></a>
                      </div>                
                  </div><hr>

                    
                     <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Title : </b> <?=$value->course_title?></label>
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
                        <label><b>Available Date, Time and Duration(Minutes) </b>   </label>
            
                          <table class="table table-striped table-bordered table-hover" style="width: 50%">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Time</th>
                                  <th>Duration(Minutes)</th>
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
                                  </tr>

                                <?php } ?>


                              </tbody>
                            </table>
                      
                      </div>
                    </div> 
                     

   

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Price Per Lesson : </b><span style="color: #0084ff;">$<?=$value->hour_per_rate?>/Lesson </span></label>
                      </div>
                    </div> 

                  



                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Status : </b>  
                          <?php if ($value->status == '1') { ?>
                              <b><span style="color: blue;">Pending</span></b>
                           <?php  }elseif ($value->status == '2') { ?>
                             <b>  <span style="color: green;">Approved</span></b>
                           <?php }elseif ($value->status == '3') { ?>
                              <b> <span style="color: red;">Reject</span></b>
                            <?php }   ?>
                        </label>
                      </div>
                    </div> 
                     <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>User Status : </b> 
                          <?php
                          if ($value->user_status == '1') {
                            echo "Active";
                          }elseif($value->user_status == '2')
                          {
                            echo "Inactive";
                          }
                          ?>
                        </label>
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

                    <?php if ($value->status == '1') { ?>
                              <a class="btn btn-primary" href="<?=base_url()?>panel/course/course_list?status=1">Back</a>
                     <?php  }elseif ($value->status == '2') { ?>
                         <a class="btn btn-primary" href="<?=base_url()?>panel/course/course_list?status=2">Back</a>
                     <?php }elseif ($value->status == '3') { ?>
                         <a class="btn btn-primary" href="<?=base_url()?>panel/course/course_list?status=3">Back</a>
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







<?php 
    $this->load->view('panel/header/footer');
?>


