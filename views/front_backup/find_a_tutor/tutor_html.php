<?php
   foreach ($list as $key => $value) {

   ?>
   <div class="col-lg-9 find-tutors mt-3  d-inline-block float-right">     
      <div class="col-lg-12">
      <div class="tutor-background row p-2">
      <div class="col-lg-2 identity d-inline-block text-center">
         <?php
            $datas = 'backed/uploads/profile/'.$value->profile_pic;
            if (file_exists($datas) && !empty($value->profile_pic)) {
            ?>
            <img class="img-fluid" src="<?=base_url()?>backed/uploads/profile/<?=$value->profile_pic?>">
            <?php } else{ ?>
            <img class="img-fluid" src="<?=base_url();?>backed/uploads/user.jpg">
            <?php }?>

      </div>
      <div class="col-lg-10 d-inline-block tutor-info float-right">
         <div class="d-inline-block align-top span-css m-3">
            <h4><?=$value->first_name?> <?=$value->last_name?></h4>
            <span class="d-block"><?=$value->category_of_teacher?> Teacher</span>
            <span class="d-block">Qualification:  <?=$value->degree?>.<?=$value->category_of_teacher?></span>
            <span class="d-block">
               <?php if (!empty($value->experience_of_teacher)) {
                  echo ($value->experience_of_teacher.' '.'Year Experience');
                  } ?>
               </span>
         </div>
          <div class="d-inline-block span-css m-3">
               <span class="d-block">Rating</span>
               <li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
               <li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
               <li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
               <li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
               <li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/star11.png"></li>
            </div>
         <div class="d-inline-block span-css-custom m-3">
            <span class="d-inline-block">Average Reply Time: </span><span class="d-inline-block">1 Hour</span>
            <span class="d-block">Repeat Students: 15 </span>
         </div>
         <div class="d-inline-block time-t m-3">
            <img class="img-fluid" src="<?=base_url();?>assets/assets/success.png">
            <span> <?=date('H:i', strtotime($value->created_date));?></span>
            <small class="d-block"><?=date('l,d M', strtotime($value->created_date));?></small>
         </div>
         <div class="d-inline-block rate-per m-3">
            <h5>Hourly Rate: <span><?=$value->hour_per_rate?>$/hour</span></h5>
         </div>
         <p class="text-justify"><?=$value->about_us?></p>
         <a href="<?=base_url();?>course-detail/<?=$value->id?>"><button class="btn d-inline-block">View Profile</button></a>
      </div>
      </div>
      </div>
   </div>

<?php } ?>