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
               <a class="navs-links active" href="<?=base_url()?>panel/offer/view_offer/<?=$value->id?>"><i class="os-icon picons-thin-icon-thin-0017_office_archive"></i><span>View Offer</span></a>
            </li>
         </ul>
      </div>
   </div>
   <br>
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
                                 <?php } else {  ?>
                                 <img src="<?=base_url()?>backed/uploads/user.jpg">  
                                 <?php  } ?>
                                 <div class="author-date">
                                    <a class="h6 post__author-name fn" href="javascript:void(0);"><?=$value->tf_name?> <?=$value->tl_name?></a>
                                 </div>
                              </div>
                              <hr>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Title : </b> <?=$value->title?></label>
                                 </div>
                              </div>
                              <?php if(!empty($value->demands_title)){ ?>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Demand Title : </b> <?=$value->demands_title?></label>
                                 </div>
                              </div>
                              <?php }?>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Category Name : </b> <?=$value->category_name?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Student Name : </b> <?=$value->sf_name?> <?=$value->sl_name?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Lesson Date & Time : </b> <span style="color: #0084ff;">  <?=date('d-m-Y', strtotime($value->required_date));?>; <?=date('h:i A', strtotime($value->start_time));?></span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Lesson duration (Minutes) : </b><span style="color: #0084ff;"> <?=$value->duration?>/Minutes</span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Price for Lesson : </b><span style="color: #0084ff;">  <?=$value->hour_per_rate?>$/Lesson  </span></label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b>Created Date :</b> <?=date('d-m-Y h:i A', strtotime($value->created_date));?> </label>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group label-floating">
                                    <label><b><?=get_phrase('status')?> : </b> 
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
                                    <label><b>Description : </b> <?=$value->description?></label>
                                 </div>
                              </div>
                              <div class="col-sm-12"> 
                                 <?php if ($value->status == '1') { ?>
                                 <a class="btn btn-success" href="<?=base_url()?>panel/offer/offer_list?status=1">Back</a>
                                 <?php  }elseif ($value->status == '2') { ?>
                                 <a class="btn btn-success" href="<?=base_url()?>panel/offer/offer_list?status=2">Back</a>
                                 <?php }elseif ($value->status == '3') { ?>
                                 <a class="btn btn-success" href="<?=base_url()?>panel/offer/offer_list?status=3">Back</a>
                                 <?php }   ?>
                                 <button class="send-btn btn btn-primary" onclick="status_chang('2_<?=$value->id?>')">Approve</button>
                                 <button class="send-btn btn btn-purple" onclick="status_chang('3_<?=$value->id?>')">Reject</button> 
                                 <a onClick="return confirm('Do you want to delete the information?')" href="<?=base_url()?>panel/offer/delete_offer/<?=$value->id?>">  <button class="send-btn btn btn-danger " >Delete</button></a>  
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
               url: '<?=base_url()?>panel/offer/change_status',
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
