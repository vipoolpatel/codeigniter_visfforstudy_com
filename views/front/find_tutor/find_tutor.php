<?php $this->load->view('front/header/header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pagignation.css">
<?php $this->load->view('front/header/menu.php'); ?>

<!-- start: hero area -->
<section class="hero-area">
   <div class="hero-bg" style="background-image: url(assets/img/banner-bg/banner-bg-6.jpg);"></div>
   <div class="hero-overlay"></div>
   <div class="container h-100">
      <div class="row justify-content-center align-items-lg-center h-100">
         <!-- hero main content -->
         <div class="col-12 h-100">
            <!-- hero main content -->
            <div class="hero-main-content">
               <h2 class="hero-title text-capitalize">Find The Tutor That Best Match For You</h2>
               <!-- find multi search form -->
               <div class="find-multi-search-box">
                  <form action="<?=base_url()?>find-tutor" class="multi-search-form d-flex align-items-end">
                     <div class="input-group">
                        <div class="form-group">
                           <label for="subject-multi">Subject</label>
                           <?php
                              $category_id = !empty($this->input->get('category_id')) ? $this->input->get('category_id') : '';
                              ?>
                           <select name="category_id" id="subject-multi" class="subject-multi form-control">
                              <option value="">Select Subject</option>
                              <?php
                                 foreach ($category as $value) {
                                 	?>
                              <option <?=($value->id == $category_id) ? 'selected' : '' ?> value="<?=$value->id?>"><?=$value->category_name?></option>
                              <?php
                                 }
                                 ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <?php
                              $level_id = !empty($this->input->get('level_id')) ? $this->input->get('level_id') : '';
                              ?>
                           <label for="level-multi">Select Level</label>
                           <select name="level_id" id="level-multi" class="level-multi form-control">
                              <option value="">Select Level</option>
                              <?php foreach ($level as $value) { ?>
                              <option <?=($value->id == $level_id) ? 'selected' : '' ?> value="<?=$value->id?>"><?=$value->level_of_student_name?></option>
                              <?php
                                 }
                                 ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <?php
                              $language_id = !empty($this->input->get('language_id')) ? $this->input->get('language_id') : '';
                              ?>
                           <label for="lang-multi">Lesson Language</label>
                           <select name="language_id" id="lang-multi" class="lang-multi form-control">
                              <option value="">Select Language</option>
                              <?php foreach ($language as $value) { ?>
                              <option <?=($value->id == $language_id) ? 'selected' : '' ?> value="<?=$value->id?>"><?=$value->language_name?></option>
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
                     <a href="<?=base_url()?>find-tutor" style="color: #fff;" class="multi-search-submit d-inline-flex align-items-center justify-content-between">Reset</a>
                  </form>
               </div>
               <!-- status search -->
               <div class="category-search status-search">
                  <p class="category-text status-text">
                     Click Here to Select Categories
                  </p>
                  <?php
                     foreach ($category as $value) {
                     ?>
                  <a href="<?=base_url()?>find-tutor?category_id=<?=$value->id?>" class="button category-btn"><?=ucwords($value->category_name)?></a>
                  <?php }
                     ?>
               </div>
               <!-- date selection and count filter -->
               <div class="advaned-filter-box d-flex justify-content-between align-items-end">
                  <!-- date selection -->
                  <div class="date-selection status-search">
                     <p class="date-select-text status-text">
                        Choose your available time and date from the calendar to find right tutor for you.
                     </p>
                     <form action="index.html" class="date-select-form">
                        <input type="date" style="padding: 0px;padding-left: 10px;" name="find-by-date" id="find-by-date" class="find-by-date form-control">
                     </form>
                  </div>
                  <!-- tutor count filter -->
                  <div class="search-count-filter-box">
                     <form action="" class="search-count-filter d-flex">
                        <div class="form-group">
                           <label for="price-count">Price</label>
                           <select name="price-count" id="price-count" class="price-count form-control">
                              <option>&#36;15-&#36;50</option>
                              <option>&#36;51-&#36;80</option>
                              <option>&#36;81-&#36;100</option>
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
   </div>
</section>
<!-- end: hero area -->
<!-- start: main content -->
<div id="main-content" class="main-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <!-- start: all teachers -->
            <section class="morestudents all-students all-teachers">
               <div class="section-content">
                  <!-- profile list -->
                  <div class="profile-list">
                     <span id="ajax_table">
                     <?php
                        $this->load->view('front/find_tutor/_find_tutor_html');
                        ?>
                     </span>
                  </div>
                  <div class="all-profile-link-box text-right">
                     <br />
                     <?php echo $this->pagination->create_links(); ?>
                  </div>
               </div>
            </section>
            <!-- end: all teachers -->
         </div>
      </div>
   </div>
</div>
<!-- end: main content -->
<?php
   $this->load->view('front/header/footer.php');
   ?>