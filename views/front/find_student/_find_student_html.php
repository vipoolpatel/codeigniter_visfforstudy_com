<?php
   foreach ($list as $value) {
   ?>
<div class="row single-profile-list wow fadeInUp">
   <div class="col-lg-12 col-xl-8">
      <div class="profile-list-bio">
         <div class="bio-image">
            <div class="profile-image">
               <?php
                  $datas = 'backed/uploads/profile/'.$value->profile_pic;
                  if(file_exists($datas) && !empty($value->profile_pic)){
                  ?>
                     <img src="<?=base_url()?>backed/uploads/profile/<?=$value->profile_pic?>" alt="profile-picture">
               <?php } else { ?>
                     <img src="<?=base_url()?>assets/img/tutor-profile/icon400400.jpg" alt="profile-picture">
               <?php
                  }
                  ?>
               <span class="lesson-rate">
               <span class="price">$<?=$value->rate_per_hour?></span>
               <span class="text">/Hour</span>
               </span>
            </div>
            <p class="local-time thin-colored-text">
               <span class="flag"><img src="assets/img/iconic-flag-china.png" alt="flag-china"></span>
               <span class="date"><?=date('d-m-Y');?></span>
               <span class="time">&nbsp;<?=date('h:i:A');?></span>
            </p>
         </div>
         <div class="bio-desc">
            <h3 class="profile-name"><?=ucwords($value->first_name)?> <?=ucwords($value->last_name)?></h3>
            <h5 class="subtitle"><?=$value->demands_title?></h5>
            <h6 class="request-label">Request Description</h6>
            <p class="request-desc">
               <?=$value->demands_description?>
            </p>
            <a href="#" class="button send-offer-btn deep-bg SendofferStudent" id="<?=$value->id?>">Send offer</a>

         </div>
      </div>
   </div>
   <div class="col-lg-12 col-xl-4 mt-3 mt-xl-0">
      <div class="lesson-history h-100 d-flex flex-column justify-content-between">
         <div class="lesson-history-items-box">
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="far fa-edit"></i>
               Lesson Language
               </span>
               <span class="history-info"><?=$value->language_name?></span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="fas fa-user"></i>
               Request Type
               </span>
               <span class="history-info"><?=$value->demand_type_name?></span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="fas fa-signal"></i>
               Level of Student
               </span>
               <span class="history-info"><?=$value->level_of_student_name?></span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="fas fa-list"></i>
               Category
               </span>
               <span class="history-info"><?=$value->category_name?></span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="fas fa-clipboard-list"></i>
               Lesson Date
               </span>
               <span class="history-info"><?=date('d M, Y', strtotime($value->required_date));?></span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="far fa-calendar-alt"></i>
               Lesson Start Time
               </span>
               <span class="history-info"><?=date('h:i:A', strtotime($value->start_time));?></span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">
               <i class="far fa-calendar-minus"></i>
               Lesson Duration
               </span>
               <span class="history-info"><?=$value->duration?> munites</span>
            </p>
            <p class="lesson-history-item">
               <span class="history-label text-capitalize d-flex align-items-center">  
               <i class="fas fa-calendar-alt"></i>
               Published Date
               </span>
               <span class="history-info"><?=date('d-m-Y h:i A', strtotime($value->created_date));?></span>
            </p>
         </div>
         <a href="<?=base_url();?>student-profile/<?=$value->id?>" class="button view-profile-btn thin-bg text-capitalize">View Profile</a>
      </div>
   </div>
</div>
<?php
}
?>