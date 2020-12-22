<?php 
   $this->load->view('student/header/header');
   $this->load->view('student/header/menu');
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
                     <div class="ui-block" data-mh="friend-groups-item" style="height: 266px;">
                        <div class="friend-item friend-groups">
                           <div class="friend-item-content">
                              <div class="friend-avatar">
                                 <div class="author-thumb">
                                    <img src="<?=base_url()?>backed/uploads/icons/txt.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>student/demands/demand_list" class="h5 author-name">Total Demand</a>
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
                                    <a href="<?=base_url()?>student/demands/demand_list?status=1" class="h5 author-name">Total Pending Demand</a>
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
                                    <a href="<?=base_url()?>student/demands/demand_list?status=2" class="h5 author-name">Total Approved Demand</a>
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
                                    <img src="<?=base_url()?>backed/uploads/icons/ai.svg" style="background-color:#fff;padding:15px; border-radius:0px;" width="110px">
                                 </div>
                                 <div class="author-content">
                                    <a href="<?=base_url()?>student/acceptedoffer/accepted_offer_list" class="h5 author-name">Total Booked Offer</a>
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
                                    <a href="<?=base_url()?>student/acceptedoffer/accepted_demand_offer_list" class="h5 author-name">Total Booked Demand</a>
                                    <div class="country"><?php echo $totalBookedDemand ?>  </div>
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
                                    <a href="<?=base_url()?>student/mybookcourse/my_book_course_list" class="h5 author-name">Total Booked Course</a>
                                    <div class="country"><?php echo $totalBookedCourse ?>  </div>
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
   $this->load->view('student/header/footer');
   ?>
