<?php
   foreach ($list as $key => $value) {
      ?>
<div class="row single-profile-list wow fadeInUp">
   <div class="col-lg-12 col-xl-8">
      <div class="profile-list-bio">
         <div class="bio-image">
            <div class="profile-image">
               <?php
                  $datas = 'backed/uploads/profile/'.$value->profile_pic;
                  if (!empty($value->profile_pic) && file_exists($datas)) 
                  {
                  ?>
               <img src="<?=base_url();?>backed/uploads/profile/<?=$value->profile_pic?>" alt="profile-picture">
               <?php } else { ?>
               <img src="<?=base_url();?>assets/img/tutor-profile/icon400400.jpg" alt="profile-picture">
               <?php
                  }
                  ?>
               <span class="online-status d-flex align-items-center">
               <span><i class="fas fa-circle"></i></span>
               Online
               </span>
               <?php
                  if(!empty($value->hour_per_rate))
                  {
                  ?>
               <span class="lesson-rate">
               <span class="price">&#36;<?=$value->hour_per_rate?></span>
               <span class="text">/Hour</span>
               </span>
               <?php }
                  ?>
            </div>
            <p class="local-time thin-colored-text">
               <span class="flag"><img src="<?=base_url()?>assets/img/iconic-flag-china.png" alt="flag-china"></span>
               <span class="date"><?=date('d-m-Y')?></span>
               <span class="time">&nbsp;<?=date('h:i A')?></span>
            </p>
         </div>
         <div class="bio-desc">
            <h3 class="profile-name"><?=ucwords($value->first_name)?> <?=ucwords($value->last_name)?></h3>
            <div class="rating justify-content-start">
               <span class="stars">
               <span><i class="fas fa-star"></i></span>
               <span><i class="fas fa-star"></i></span>
               <span><i class="fas fa-star"></i></span>
               <span><i class="fas fa-star"></i></span>
               <span><i class="fas fa-star"></i></span>
               </span>
               <span class="point">4.00</span>
               <span class="text">Rating</span>
            </div>
            <?php
               if(!empty($value->experience_of_teacher)) {
               ?>
            <h6 class="request-label"><?=$value->experience_of_teacher?> Years Experienced</h6>
            <?php }
               ?>
            <p class="request-desc">
               <?=strip_tags(substr($value->about_us,0,250))?>...
            </p>
            <a href="<?=base_url();?>tutor-profile/<?=$value->id?>" class="button view-bio-btn send-offer-btn deep-bg">View My Bio</a>
         </div>
      </div>
   </div>
   <div class="col-lg-12 col-xl-4 mt-3 mt-xl-0">
      <div class="lesson-history h-100 d-flex flex-column justify-content-between">
         <div class="lesson-history-items-box">
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="fas fa-envelope"></i>
               Average Reply Time
               </span>
               <span class="history-info"> 1 Hour</span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="fas fa-sync-alt"></i>
               Repeat tudent
               </span>
               <span class="history-info">-</span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
                  <i class="fas fa-list"></i>
                  Level
               </span>
               <span class="history-info"><?=!empty($value->level_of_student_name) ? ucwords($value->level_of_student_name) : '-' ?></span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="fas fa-list"></i>
               Category
               </span>
               <span class="history-info"><?=!empty($value->category_name) ? $value->category_name : '-' ?> </span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="far fa-edit"></i>
               Lesson Language
               </span>
               <span class="history-info"><?=!empty($value->language_name) ? $value->language_name : '-'?></span>
            </p>
         </div>
         <a href="<?=base_url();?>tutor-profile/<?=$value->id?>" class="button view-profile-btn thin-bg text-capitalize">View Profile</a>
      </div>
   </div>
</div>
<?php
   }
?>