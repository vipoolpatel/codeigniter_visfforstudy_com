 <div class="post__author author vcard inline-items">
    <img src="<?=base_url()?>backed/uploads/user.jpg">                
    <div class="author-date">
        <a class="h6 post__author-name fn" href="javascript:void(0);"><?=$value->first_name?> <?=$value->last_name?></a>
    </div>                
</div>
<hr>

<div class="col-sm-12"> 
  <div class="form-group label-floating">
    <label><b>Title :</b>  <?=$value->demands_title?></label>
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
    <label><b>Language Name : </b> <?=$value->language_name?></label>
  </div>
</div> 

<div class="col-sm-12"> 
  <div class="form-group label-floating">
    <label><b>Lesson Date & Time : </b><span style="color: #0084ff;">  <?=date('d-m-Y', strtotime($value->required_date));?>; <?=date('h:i:A', strtotime($value->start_time));?></span></label>
  </div>
</div> 


<div class="col-sm-12"> 
  <div class="form-group label-floating">
    <label><b>Lesson duration (Minutes) : </b><span style="color: #0084ff;"> <?=$value->duration?>/Minutes</span></label>
  </div>
</div> 

<div class="col-sm-12"> 
  <div class="form-group label-floating">
    <label><b>Price for Lesson : </b> <span style="color: #0084ff;">$<?=$value->rate_per_hour?>/Lesson</span></label>
  </div>
</div> 

  <div class="col-sm-12"> 
    <div class="form-group label-floating">
     <p><b>Created Date : </b><span style="color: #0084ff;">  <?=date('d-m-Y h:i:A', strtotime($value->created_date));?> </span></p>
     
     </div>
   </div>


<div class="col-sm-12"> 
  <div class="form-group label-floating">
    <label><b>Status : </b> 
      <?php if ($value->status == '1') { ?>
          <b> <span style="color: blue;">Pending</span></b>
       <?php  }elseif ($value->status == '2') { ?>
           <b><span style="color: green;">Approved</span></b>
       <?php }elseif ($value->status == '3') { ?>
           <b><span style="color: red;">Reject</span></b>
        <?php }   ?>
    </label>
  </div>
</div> 

