
<?php 
    $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>

 <div class="header-spacer"></div>
    <div class="conty">
   <?php 
         $this->load->view('panel/demands/sub_menu');
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
                  </div>
                  <hr>
                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                     <label><b>Title : </b>  <?=$value->demands_title?></label>
                      </div>
                    </div> 

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Type : </b> <?=$value->demand_type_name?></label>
                      </div>
                    </div> 

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Level of Student : </b> <?=$value->level_of_student_name?></label>
                      </div>
                    </div> 

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Category Name : </b> <?=$value->category_name?></label>
                      </div>
                    </div> 

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                       <label><b>Lesson Date & Time : </b><span style="color: #0084ff;">  <?=date('d-m-Y', strtotime($value->required_date));?>; <?=date('h:i:A', strtotime($value->start_time));?>  </span></label>
                      </div>
                    </div> 

                     <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Lesson duration (Minutes) : </b><span style="color: #0084ff;"> <?=$value->duration?>/Minutes</span></label>
                      </div>
                    </div> 

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b><?=get_phrase('price_for_lesson')?> : </b> <span style="color: #0084ff;">$<?=$value->rate_per_hour?>/Lesson</span></label>
                      </div>
                    </div> 



                  

                    

                    <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Status : </b> 
                         <?php if ($value->status == '1') { ?>
                             <b> <span style="color: blue;">Pending</span></b>
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
                       <label><b>Created Date : </b><span style="color: #0084ff;">  <?=date('d-m-Y h:i:A', strtotime($value->created_date));?> </span></label>
                      </div>
                    </div> 

                     <div class="col-sm-12"> 
                      <div class="form-group label-floating">
                        <label><b>Description : </b> <?=$value->demands_description?></label>
                      </div>
                    </div> 

                 

                  <div class="col-sm-12"> 

                     <?php if ($value->status == '1') { ?>
                              <a class="btn btn-success" href="<?=base_url()?>panel/demands/demand_list?status=1">Back</a>
                     <?php  }elseif ($value->status == '2') { ?>
                         <a class="btn btn-success" href="<?=base_url()?>panel/demands/demand_list?status=2">Back</a>
                     <?php }elseif ($value->status == '3') { ?>
                         <a class="btn btn-success" href="<?=base_url()?>panel/demands/demand_list?status=3">Back</a>
                      <?php }   ?>
                     
                   <!-- <a href="<?=base_url();?>panel/demands/edit_demands/<?=$value->id?>"> <button class="send-btn btn btn-success " style="border-radius: 30px;padding: 6px 20px;font-size: 14px;">Edit</button>  </a> -->
                   
                   
                    <button class="send-btn btn btn-primary" onclick="status_chang('2_<?=$value->id?>')">Approve</button>
                    <button class="send-btn btn btn-purple" onclick="status_chang('3_<?=$value->id?>')">Reject</button> 
                  <!-- <a href="<?=base_url()?>student/demands/delete_demands/<?=$value->id?>">  <button class="send-btn btn btn-danger " style="border-radius: 30px;padding: 6px 20px;font-size: 14px;">Delete</button></a>   -->
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

<script type="text/javascript">
    function status_chang(sta){

         var res = sta.split("_");
         var status = res[0];
         var id = res[1];

         
            $.ajax({
                url: '<?=base_url()?>panel/demands/change_status',
                type:'POST',
                data:{status:status,id:id},
                dataType:'json',
                success: function(data){

                  if (status == '2') {
                     $('.msgs').css('display','block');
                      $('.msgs').html('<strong>Success!</strong> Data Approved successfully').fadeIn();
                  }else if(status == '3'){
                    $('.msgs').css('display','block');
                     $('.msgs').html('<strong>Success!</strong> Data Reject.').fadeIn();
                  }

                          setTimeout(function () {
                              $('.msgs').fadeOut();
                              window.location.reload();
                          }, 2000);

              //     window.location.reload();

                }
            });

  };


  
</script>

    <?php 
    $this->load->view('panel/header/footer');
?>