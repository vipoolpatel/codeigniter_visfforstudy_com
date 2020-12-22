<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
   ?>

   <style type="text/css">
      .country {
         font-size: 26px !important;
      }
   </style>
   
<!-- code start  -->
<div class="header-spacer"></div>
<div class="content-i">
   <div class="content-box">
      <div class="conty">
         <div class="row">
            <div class="col-sm- 12">
               <div class="row">
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/admins.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/admin/admin_list" class="h5 author-name">Total Admin</a>
                                    <div class="country"><?php echo $totalAdmin ?> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/teachers.svg" style="background-color:#fff;padding:15px;border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url();?>panel/teacher/teacher_list" class="h5 author-name">Total Teachers</a>
                                    <div class="country"><?php echo $totalTeacher ?> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/students.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url();?>panel/student/student_list" class="h5 author-name">Total Students</a>
                                    <div class="country">
                                       <?php echo $totalStudent ?> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/parents.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/course/course_list" class="h5 author-name">Total Course</a>
                                    <div class="country">
                                       <?php echo $totalCourse ?> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/accountant.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/course/course_list?status=1" class="h5 author-name">Total Pending Course</a>
                                    <div class="country">
                                       <?php echo $totalPendingCourse ?>  
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/librarian.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/course/course_list?status=2" class="h5 author-name">Total Approved Course</a>
                                    <div class="country">
                                       <?php echo $totalApprovedCourse ?>  
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/pendings.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/offer/offer_list" class="h5 author-name">Total Offer</a>
                                    <div class="country"><?php echo $totalOffer ?> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/norecent.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/offer/offer_list?status=1" class="h5 author-name">Total Pending Offer</a>
                                    <div class="country"><?php echo $totalPendingOffer ?>  </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/ppt.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/offer/offer_list?status=2" class="h5 author-name">Total Approved Offer</a>
                                    <div class="country"><?php echo $totalApprovedOffer ?>  </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/txt.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/demands/demand_list" class="h5 author-name">Total Demand</a>
                                    <div class="country"><?php echo $totalDemand ?> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/sms.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/demands/demand_list?status=1" class="h5 author-name">Total Pending Demand</a>
                                    <div class="country"><?php echo $totalPendingDemand ?>  </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/img.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/demands/demand_list?status=2" class="h5 author-name">Total Approved Demand</a>
                                    <div class="country"><?php echo $totalApprovedDemand ?>  </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/backup.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/bookcourse/book_course_list" class="h5 author-name">Total Booked Course</a>
                                    <div class="country"><?php echo $totalBookedCourse ?>  </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/ai.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/acceptedoffer/accepted_offer_list" class="h5 author-name">Total Booked Offer</a>
                                    <div class="country"><?php echo $totalBookedOffer ?>  </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/mp3.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>panel/acceptedoffer/accepted_demand_offer_list" class="h5 author-name">Total Booked Demand</a>
                                    <div class="country"><?php echo $totalBookedDemand ?>  </div>
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
   </div>
</div>
<?php 
   $this->load->view('panel/header/footer');
   ?>
