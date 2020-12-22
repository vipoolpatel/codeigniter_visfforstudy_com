<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>


<div class="header-spacer"></div>
    <div class="conty">
<?php 
   $this->load->view('panel/course/sub_menu');
?>

         <div class="aec-full-message-w">
              <div class="aec-full-message">
                <div class="container-fluid" style="background-color: #f2f4f8;">
                  <div class="tab-content">
                       <div class="tab-pane active" id="tab2">
                        <div class="row">


<!-- START LIST OF SUBJECT -->

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

                                      <?php } 
                                      ?>

                                  
                                    <div class="author-content">
                                           <br>
                                       <h5><?=$value->course_title?></h5>
                                 
                                      <a class="h5 author-name"><?=ucfirst($value->category_name)?></a><br><br>

                                      <h5>$<?=$value->hour_per_rate?>/Lesson</h5>

                                      <p>Created Date : <?=date('d-m-Y h:i A', strtotime($value->created_date));?></p>


                                      <p><b>Status : 
                                              <?php if ($value->status == '1') { ?>
                                                <span style="color: blue;">Pending</span>
                                             <?php  }elseif ($value->status == '2') { ?>
                                                 <span style="color: green;">Approved</span>
                                             <?php }elseif ($value->status == '3') { ?>
                                                 <span style="color: red;">Reject</span>
                                              <?php }   ?>

                                              </b>
                                             
                                      </p>

                                      <!-- <hr/>
                                      <p>Available Time and Date</p>
                                      <h5><?=date('d/m/Y', strtotime($value->available_date));?>; <?=date('h:i A', strtotime($value->start_time));?> - <?=date('h:i:A', strtotime($value->end_time));?></h5> -->
                                    </div>    
                                    <br />

                                    <div class="col-sm-12"> 
                        <a href="<?=base_url();?>panel/course/view_course/<?=$value->id?>"><button class="btn btn-warning" style="margin:5px">View</button></a>

                                       <?php if ($value->user_status == '1') { ?>

                                         <button class="btn btn-default" id="status" value="2_<?=$value->id?>" onclick="user_status('2_<?=$value->id?>')"
                                          style="margin:5px">Active</button></td>

                                        <?php }else { ?>

                                         <button class="btn btn-default" id="status" value="1_<?=$value->id?>" onclick="user_status('1_<?=$value->id?>')" style="margin:5px">Inactive</button></td>

                                      <?php }?>
                                  
                     
                     <!--                   <a href="<?=base_url()?>panel/course/edit_course/<?=$value->id?>"> <button class="send-btn btn btn-success " style="margin:5px">Edit</button>  </a> -->

                                        <button class="send-btn btn btn-primary " style="margin:5px"  onclick="status_chang('2_<?=$value->id?>')">Approve</button>

                                        <button class="send-btn btn btn-purple" style="margin:5px"  onclick="status_chang('3_<?=$value->id?>')">Reject</button> 


                                      <a onClick="return confirm('Do you want to delete the information?')" href="<?=base_url()?>panel/course/delete_course/<?=$value->id?>">  <button class="send-btn btn btn-danger " style="margin:5px">Delete</button></a>  
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
 


<script type="text/javascript">
    function status_chang(sta){

         var res = sta.split("_");
         var status = res[0];
         var id = res[1];

         
            $.ajax({
                url: '<?=base_url()?>panel/course/change_status',
                type:'POST',
                data:{status:status,id:id},
                dataType:'json',
                success: function(data){

                   window.location.reload();

                }
            });

  };


  
</script>

<script type="text/javascript">
    function user_status(sta){

         var res = sta.split("_");
         var status = res[0];
         var id = res[1];

         
            $.ajax({
                url: '<?=base_url()?>panel/course/user_status',
                type:'POST',
                data:{status:status,id:id},
                dataType:'json',
                success: function(data){

                   window.location.reload();

                }
            });

  };
</script>






<?php 
    $this->load->view('panel/header/footer');
?>
