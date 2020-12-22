
<?php 
    $this->load->view('student/header/header');
   $this->load->view('student/header/menu');
?>

 <div class="header-spacer"></div>
    <div class="conty">
   <?php 
   $this->load->view('student/demands/sub_menu');
    ?>


        
  <div class="all-wrapper no-padding-content solid-bg-all">
                <div class="layout-w">
                    <div class="content-w">
                        <div class="content-i">
                            <div class="container-fluid">
     

              
                <div class="row">
            <?php
            foreach ($list as $value) {
            ?>

          <div class="col col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block paddingtel">    
              <article class="hentry post has-post-thumbnail thumb-full-width">
                  <div class="post__author author vcard inline-items">
                                 <?php

$datas = 'backed/uploads/profile/'.$value->profile_pic;
if (file_exists($datas) && !empty($value->profile_pic)) {
?>

                      <img src="<?=base_url()?>backed/uploads/profile/<?=$value->profile_pic?>">  

                       <?php } else {

   ?>
      <img src="<?=base_url()?>backed/uploads/user.jpg">  
      
                                                       <?php 
                                                     }
                                                     ?>            
                      <div class="author-date">
                          <a class="h6 post__author-name fn" href="javascript:void(0);"><?=$value->first_name?> <?=$value->last_name?></a>
                      </div>                
                  </div><hr>

                    

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b><?=get_phrase('type')?>:</b> <?=$value->demand_type_name?></label>
                      </div>
                    </div> 

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b><?=get_phrase('level_of_student')?>:</b> <?=$value->level_of_student_name?></label>
                      </div>
                    </div> 

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b><?=get_phrase('subject_name')?>:</b> <?=$value->category_name?></label>
                      </div>
                    </div> 

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b><?=get_phrase('lesson_date_&_time')?>:</b><span style="color: #0084ff;">  <?=date('d M, Y', strtotime($value->required_date));?> & <?=date('h:i:A', strtotime($value->required_time));?>  </span></label>
                      </div>
                    </div> 

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b><?=get_phrase('price_per_hour')?>:</b> <span style="color: #0084ff;">$<?=$value->rate_per_hour?></span></label>
                      </div>
                    </div> 

                    
                    <!-- <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Demands Title:</b>  <?=$value->demands_title?></label>
                      </div>
                    </div> 
 -->

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b><?=get_phrase('status')?>:</b> 
                          <?php if ($value->status == '1') { ?>
                           <b>   <span style="color: blue;">Pending</span></b>
                           <?php  }elseif ($value->status == '2') { ?>
                             <b>  <span style="color: green;">Approve</span></b>
                           <?php }elseif ($value->status == '3') { ?>
                              <b> <span style="color: red;">Reject</span></b>
                            <?php }   ?>
                        </label>
                      </div>
                    </div> 

                  <!--   <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Demands:</b> <?=$value->demands_description?></label>
                      </div>
                    </div>  -->


                  <div class="col-sm-12"> 
                     <a href="<?=base_url();?>student/demands/view_demands/<?=$value->id?>"> <button class="send-btn btn btn-info " style="border-radius: 30px;padding: 6px 20px;font-size: 14px;"><?=get_phrase('view')?></button>  </a>
                     
                   <a href="<?=base_url();?>student/demands/edit_demands/<?=$value->id?>"> <button class="send-btn btn btn-success " style="border-radius: 30px;padding: 6px 20px;font-size: 14px;"><?=get_phrase('edit')?></button>  </a>
                   
                  
                   <!--  <button class="send-btn btn btn-primary " style="border-radius: 30px;padding: 6px 20px;font-size: 14 px;">Approve</button>
                    <button class="send-btn btn btn-purple" style="border-radius: 30px;padding: 6px 20px;font-size: 14px;">Reject</button>  -->
                  <a href="<?=base_url()?>student/demands/delete_demands/<?=$value->id?>">  <button class="send-btn btn btn-danger " style="border-radius: 30px;padding: 6px 20px;font-size: 14px;"><?=get_phrase('delete')?></button></a>  
                  </div>   


              </article>
             </div>
          </div>

<?php
}
?>
         






     
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
