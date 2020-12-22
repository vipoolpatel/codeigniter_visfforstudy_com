 <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h2 class="modal-title send-offer-main-title" id="studentPop1Title">Send offer</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body send-offer-wrapper main-content profile">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <!-- start: student profile summary -->
                     <section class="morestudents all-students">
                        <div class="section-content">
                           <!-- profile list -->
                           <div class="profile-list">
                              <div class="row single-profile-list">
                                 <div class="col-lg-12 col-xl-8">
                                    <div class="profile-list-bio">
                                       <div class="bio-image">
         <div class="profile-image">
<?php
 $datas = 'backed/uploads/profile/'.$value->profile_pic;
 if (file_exists($datas) && !empty($value->profile_pic)){
?>
<img src="<?=base_url();?>backed/uploads/profile/<?=$value->profile_pic?>" alt="profile-picture">
<?php } else { ?>
           <img src="<?=base_url();?>assets/img/tutor-profile/icon400400.jpg" alt="profile-picture">
<?php } 
?>
            <span class="online-status d-flex align-items-center">
            <span><i class="fas fa-circle"></i></span>
            Online
            </span>
            <span class="lesson-rate">
            <span class="price">&#36;<?=$value->rate_per_hour?></span>
            <span class="text">/Hour</span>
            </span>
         </div>
               <p class="local-time thin-colored-text">
                  <span class="flag"><img src="assets/img/iconic-flag-china.png" alt="flag-china"></span>
                  <span class="time"><?=date('h:i:A');?></span>
                  <span class="date"><?=date('d-m-Y');?></span>
               </p>
            </div>
            <div class="bio-desc">
               <h3 class="profile-name">
                  <?=ucwords($value->first_name)?> <?=ucwords($value->last_name)?>
               </h3>
               <h5 class="subtitle"><?=$value->demands_title?></h5>
               <h6 class="request-label">Request Description</h6>
               <p class="request-desc">
                 <?=$value->demands_description?>
               </p>
               <a href="#" class="button send-offer-btn deep-bg">Send offer</a>
            </div>
         </div>
      </div>
      <div class="col-lg-12 col-xl-4 mt-3 mt-xl-0">
         <div class="lesson-history h-100 d-flex flex-column justify-content-between">
            <div class="lesson-history-items-box">
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
                  <span class="history-info"><?=date('d M, Y', strtotime($value->required_date)); ?></span>
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
            <a href="#" class="button view-profile-btn thin-bg text-capitalize">View Profile</a>
         </div>
      </div>
   </div>
</div>
</div>
</section>
                     <!-- end: student profile summary -->
                     <!-- start: send offer form box -->
                     <section class="send-offer-form-box">
                        <div class="student-breif d-flex flex-wrap justify-content-between ">
                           <p class="offer single-item w-100 course-title">
                              <span class="label">Course title:</span>
                              <span class="desc">I want to learn English grammar</span>
                           </p>
                           <p class="offer single-item">
                              <span class="label">Category:</span>
                              <span class="desc">English</span>
                           </p>
                           <p class="offer single-item">
                              <span class="label">Lesson start time:</span>
                              <span class="desc">14:30</span>
                           </p>
                           <p class="offer single-item">
                              <span class="label">Lesson date:</span>
                              <span class="desc">02/06/2020</span>
                           </p>
                           <p class="offer single-item">
                              <span class="label">Lesson duration:</span>
                              <span class="desc">60 minutes</span>
                           </p>
                        </div>
                        <!-- send offer form -->
                        <form action="index.html" class="send-offer-form">
                           <div class="form-check-inline offer single-item reg-form-check custom">
                              <input type="checkbox" name="reg-check" id="offer-first-fee-free" class="offer-first-fee-free">
                              <label for="offer-first-fee-free" class="form-check-label">First Lesson Free:</label>
                              <span class="desc">(If not, please set up your own rate according to student's request.)</span>
                           </div>
                           <div class="form-check-inline offer single-item offer-price">
                              <label for="offer-first-fee-amount">Set up your offer Price:</label>
                              <span class="currency-sign ml-2">&#36;</span>
                              <input type="number" name="offer-first-fee-amount" id="offer-first-fee-amount" class="offer-first-fee-amount">
                              <span class="per-lesson">/Lesson</span>
                           </div>
                           <div class="form-group offer single-item text-message">
                              <label for="offer-text-message">Leave message to this student:</label>
                              <textarea name="booking-message" id="offer-text-message" class="offer-text-message form-control" cols="10" rows="5"></textarea>
                           </div>
                           <!-- offer tutor info -->
                           <div class="offer-tutor-info offer single-item">
                              <div class="row">
                                 <div class="col-xl-5 profile-summary">
                                    <div class="user-profile text-center text-capitalize">
                                       <div class="profile-image">
                                          <img src="assets/img/tutor-profile/tutor-profile-1.jpg" alt="profile-picture">
                                          <span class="online-status d-flex align-items-center">
                                          <span><i class="fas fa-circle"></i></span>
                                          Online
                                          </span>
                                          <span class="lesson-rate">
                                          <span class="price">15$</span>
                                          <span class="text">/Lesson</span>
                                          </span>
                                       </div>
                                       <h3 class="profile-name">Tim Barton</h3>
                                       <p class="profile-designation">Math Teacher</p>
                                       <div class="rating">
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
                                       <a href="#bio" class="button scrolls view-bio thin-bg">View my bio</a>
                                       <div class="short-info">
                                          <p class="d-flex justify-content-between">
                                             <span class="label">Repeat student</span>
                                             <span class="value">15</span>
                                          </p>
                                          <p class="d-flex justify-content-between">
                                             <span class="label">Average reply time</span>
                                             <span class="value">1 Hour</span>
                                          </p>
                                          <p class="d-flex justify-content-between">
                                             <span class="label">Local time</span>
                                             <span class="value">14:30 02/06/2020</span>
                                          </p>
                                       </div>
                                       <a href="<?=base_url();?>book-lesson" class="button book-lesson deep-bg">Book a Lesson</a>
                                    </div>
                                 </div>
                                 <div class="col-xl-7">
                                    <div class="current-lecture">
                                       <div class="current-lecture-player">
                                          <iframe width="500" height="300" src="https://www.youtube.com/embed/MxjZ0ggysLU" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                       </div>
                                       <div class="lecture-info d-flex justify-content-between">
                                          <h4 class="lecture-title">How to Solve Complex Math Problems ?</h4>
                                          <span class="lecture-date">Aug 7, 2019</span>
                                       </div>
                                       <div class="offer-video-check book-form-check custom">
                                          <div class="form-group d-inline-flex align-items-center mb-0 mr-4">
                                             <input type="radio" name="offer-video-check" id="offer-video-default" class="reg-check form-check-input" value="default" checked="">
                                             <label for="offer-video-default" class="form-check-label">Use default video</label>
                                          </div>
                                          <div class="form-group d-inline-flex align-items-center mb-0">
                                             <input type="radio" name="offer-video-check" id="offer-video-upload" class="reg-check form-check-input" value="upload">
                                             <label for="offer-video-upload" class="form-check-label">Upload new video</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- offer submit button -->
                           <div class="offer-submit-btn-box text-right">
                              <button type="submit" class="booking-submit-btn reg-signup-btn text-capitalize">Send Offer</button>
                           </div>
                        </form>
                     </section>
                     <!-- end: send offer form box -->
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
      </div>
   </div>