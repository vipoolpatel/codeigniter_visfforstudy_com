<?php $this->load->view('front/header/header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pagignation.css">
<?php $this->load->view('front/header/menu.php'); ?>

<!-- start: hero area -->
<section class="hero-area">
   <div class="hero-bg" style="background-image: url(assets/img/banner-bg/banner-bg-4.jpg);"></div>
   <div class="hero-overlay"></div>
   <div class="container h-100">
      <div class="row justify-content-center align-items-lg-center h-100">
         <!-- hero main content -->
         <div class="col-12 h-100">
            <!-- hero main content -->
            <div class="hero-main-content">
               <h2 class="hero-title text-capitalize">Find your students here</h2>
               <div class="find-multi-search-box">
                  <form action="<?=base_url()?>find-student" class="multi-search-form d-flex align-items-end" method="get">
                     <div class="input-group">
                        <div class="form-group">
                           <label for="subject-multi">Select Language</label>
                           <?php
                              $language_id = !empty($this->input->get('language_id')) ? $this->input->get('language_id') : '';
                                                         ?>
                           <select name="language_id" class="subject-multi form-control">
                              <option value="">Select Language</option>
                              <?php
                                 foreach ($getLanguage as $keya) {
                                  ?>
                              <option <?=($language_id == $keya->id) ? 'selected' : '' ?> value="<?=$keya->id?>"><?=$keya->language_name?></option>
                              <?php
                                 }
                                                            ?>   
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="level-multi">Select Level</label>
                           <?php
                              $level_of_student_id = !empty($this->input->get('level_of_student_id')) ? $this->input->get('level_of_student_id') : '';
                              ?>
                           <select name="level_of_student_id" class="level-multi form-control">
                              <option value="">Select Level</option>
                              <?php
                                 foreach ($level as $key) { 
                                 ?>
                              <option <?=($level_of_student_id == $key->id) ? 'selected' : ''?> value="<?=$key->id?>"><?=$key->level_of_student_name?></option>
                              <?php
                                 }
                                 ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="lang-multi">Select Request Type</label>
                           <?php
                              $demand_type_id = !empty($this->input->get('request_type_id')) ? $this->input->get('request_type_id') : '';
                                                         ?>
                           <select name="request_type_id" class="lang-multi form-control">
                              <option value="">Select Request Type</option>
                              <?php
                                 foreach ($getDemandType as $ky) {
                                    ?>
                              <option <?=($demand_type_id == $ky->id)? 'selected' : '' ?> value="<?=$ky->id?>"><?=$ky->demand_type_name?></option>
                              <?php
                                 }
                                 ?>
                           </select>
                        </div>
                     </div>
                     <button type="submit" class="multi-search-submit d-inline-flex align-items-center justify-content-between">
                     <span class="btn-text">Search</span>
                     <i class="fas fa-search"></i>
                     </button>
                     <a href="<?=base_url()?>find-student" style="color: #fff;" class="multi-search-submit d-inline-flex align-items-center justify-content-between">Reset</a>

                  </form>
               </div>
               <!-- status search -->
               <div class="status-search">
                  <p class="status-text">
                     Click Here to See Online and Available Students
                  </p>
                  <a href="#" class="button online-check-btn">Online</a>
                  <a href="#" class="button available-check-btn">Available</a>
               </div>
               <!-- student count filter -->
               <div class="search-count-filter-box">
                  <form action="index.html" class="search-count-filter d-flex">
                     <div class="form-group">
                        <label for="price-count">Price</label>
                        <select name="price-count" id="price-count" class="price-count form-control">
                           <option selected>15&#36;-50&#36;</option>
                           <option>51&#36;-80&#36;</option>
                           <option>81&#36;-100&#36;</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="name-sort">Sort by</label>
                        <select name="name-sort" id="name-sort" class="name-sort form-control">
                           <option selected>Latest published</option>
                           <option>Most reviews</option>
                           <option>High price</option>
                        </select>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end: hero area -->
<!-- start: main content -->
<div id="main-content" class="main-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <!-- start: all students -->
            <section class="morestudents all-students">
               <div class="section-content">
                  <!-- profile list -->
                  <div class="profile-list">
                     <?php
                        $this->load->view('front/find_student/_find_student_html');
                     ?>
                  </div>

                   <div class="all-profile-link-box text-right">
                     <br />
                     <?php echo $this->pagination->create_links(); ?>
                  </div>

               </div>
            </section>
            <!-- end: all students -->
         </div>
      </div>
   </div>
</div>

<div class="modal fade getSetudentData" id="getSetudentData" tabindex="-1" role="dialog" aria-labelledby="studentPop1Title" aria-hidden="true"></div>


<?php
   $this->load->view('front/header/footer.php');
   ?>
<script type="text/javascript">
   $('body').delegate('.SendofferStudent','click',function(){
         var id = $(this).attr('id');
         $.ajax({
            url:"<?=base_url()?>findstudent/getPopupLoaddata",
            type:'POST',
            data: {id:id},
            dataType: 'json',
            success: function (data) {
               $('.getSetudentData').html(data.success);
               $('#getSetudentData').modal('show');
            }
        });
   });  
</script>