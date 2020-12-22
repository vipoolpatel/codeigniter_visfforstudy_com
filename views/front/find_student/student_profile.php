
<?php
$this->load->view('front/header/header.php');
?>


<?php
$this->load->view('front/header/menu.php');
?>
<!-- start: hero area -->
<section class="hero-area">
<div class="hero-bg" style="background-image: url(<?=base_url();?>assets/img/banner-bg/banner-bg-3.jpg);"></div>
<div class="hero-overlay"></div>
<div class="container h-100">
<div class="row justify-content-center align-items-lg-center h-100">
<!-- user profile summery -->
<div class="col-12 col-lg-4 profile-summary order-2 order-lg-1">
<div class="user-profile text-center text-capitalize">
<div class="profile-image">
	<?php
	$datas = 'backed/uploads/profile/'.$getDemand->profile_pic;
	if (file_exists($datas) && !empty($getDemand->profile_pic)){
	?>
		<img src="<?=base_url();?>backed/uploads/profile/<?=$getDemand->profile_pic?>" alt="profile-picture">
    <?php } else { ?>
		<img src="<?=base_url();?>assets/img/tutor-profile/icon400400.jpg" alt="profile-picture">
		
	<?php
	}
	?>

<span class="lesson-rate">
<span class="price"><?=$getDemand->rate_per_hour?>&#36;</span>
<span class="text">/Hour</span>
</span>
</div>

<h3 class="profile-name"><?=ucwords($getDemand->first_name)?> <?=ucwords($getDemand->last_name)?></h3>
<p class="local-time thin-colored-text">
<span class="flag"><img src="<?=base_url();?>assets/img/iconic-flag-china.png" alt="flag-china"></span>
<span class="time"><?=date('h:i:A');?></span>
<span class="date"><?=date('d-m-Y');?></span>
</p>

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

<div class="lesson-history">
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-user"></i>Request Type
</span>
<span class="history-info"><?=$getDemand->demand_type_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-signal"></i>Level of Student
</span>
<span class="history-info"><?=$getDemand->level_of_student_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-list"></i>Category
</span>
<span class="history-info"><?=$getDemand->category_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-clipboard-list"></i>Lesson Date
</span>
<span class="history-info"><?=date('d M, Y', strtotime($getDemand->required_date));?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="far fa-calendar-alt"></i>Lesson Start Time
</span>
<span class="history-info"><?=date('h:i:A', strtotime($getDemand->start_time));?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="far fa-calendar-minus"></i>Lesson Duration
</span>
<span class="history-info"><?=$getDemand->duration?> munites</span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">	
<i class="fas fa-calendar-alt"></i>Published Date
</span>
<span class="history-info"><?=date('d-m-Y h:i A', strtotime($getDemand->created_date));?></span>
</p>
</div>
<a href="#" class="button send-offer deep-bg" data-toggle="modal" data-target="#studentPopX">Send Offer</a>
</div>
<!-- send offer popup -->
<div class="modal fade" id="studentPopX" tabindex="-1" role="dialog" aria-labelledby="studentPopXTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h2 class="modal-title send-offer-main-title" id="studentPopXTitle">Send offer</h2>
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
<img src="<?=base_url();?>assets/img/student-profile/student-profile-1.jpg" alt="profile-picture">
<span class="online-status d-flex align-items-center">
<span><i class="fas fa-circle"></i></span>
Online
</span>
<span class="lesson-rate">
<span class="price">15&#36;</span>
<span class="text">/Lesson</span>
</span>
</div>
<p class="local-time thin-colored-text">
<span class="flag"><img src="<?=base_url();?>assets/img/iconic-flag-china.png" alt="flag-china"></span>
<span class="time">14:00</span>
<span class="date">02/06/2020</span>
</p>
</div>
<div class="bio-desc">
<h3 class="profile-name">Alicia Martin</h3>
<h5 class="subtitle">I want to learn English grammar</h5>
<h6 class="request-label">Request Description</h6>
<p class="request-desc">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.
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
<span class="history-info">Regular</span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-signal"></i>
Level of Student
</span>
<span class="history-info">Primary</span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-list"></i>
Category
</span>
<span class="history-info">English</span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-clipboard-list"></i>
Lesson Date
</span>
<span class="history-info">02/06/2020</span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="far fa-calendar-alt"></i>
Lesson Start Time
</span>
<span class="history-info">14:30</span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="far fa-calendar-minus"></i>
Lesson Duration
</span>
<span class="history-info">60 munites</span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">	
<i class="fas fa-calendar-alt"></i>
Published Date
</span>
<span class="history-info">14:30 02/06/2020</span>
</p>
</div>
<a href="student-profile.html" class="button view-profile-btn thin-bg text-capitalize">View Profile</a>
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
<img src="<?=base_url();?>assets/img/tutor-profile/tutor-profile-1.jpg" alt="profile-picture">
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
</div>
</div>

<!-- hero main content -->
<div class="col-12 col-lg-8 ml-lg-auto order-1 order-lg-2 h-100">
<!-- hero main content -->
<div class="hero-main-content">
<h1 class="hero-title-name text-capitalize"><?=ucwords($getDemand->first_name)?> <?=ucwords($getDemand->last_name)?></h1>
<h3 class="hero-subtitle text-capitalize"><?=$getDemand->rate_per_hour?>&#36; Hour</h3>
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
<h3 class="hero-subtitle text-capitalize">I want to learn English grammar</h3>
<p class="local-time thin-colored-text">
<span class="flag"><img src="<?=base_url();?>assets/img/iconic-flag-china.png" alt="flag-china"></span>
<span class="time">14:00</span>
<span class="date">02/06/2020</span>
</p>               
</div>

<!-- profile hero menu -->
<nav class="hero-menu-tabs-container">
<a class="hero-menu-tab" href="#bio">Bio</a>
<a class="hero-menu-tab" href="#description">Description</a>
<a class="hero-menu-tab" href="#subjects">Subjects</a>
<a class="hero-menu-tab" href="#rating">Rating</a>
<a class="hero-menu-tab" href="#reviews">Reviews</a>
<a class="hero-menu-tab" href="#morestudents">More Students</a>
<span class="hero-menu-tab-slider"></span>
<button type="button" id="mobile-menu-closer">x</button>
</nav>

<!-- mobile menu button -->
<span class="mobile-menu-button sticky-head">
<button type="button" id="mobile-menu-opener">
<span class="icon"><i class="fas fa-bars"></i></span>
<span class="text ml-1">Menu</span>
</button>
</span> 
</div>
</div>
</div>
</section>
<!-- end: hero area -->



<!-- start: main content -->
<div id="main-content" class="main-content">
<div class="container">
<div class="row">
<div class="col-lg-8 ml-lg-auto pl-lg-0">
<!-- start: bio -->
<section id="bio" class="bio wow fadeInUp">
<div class="section-content">
<!-- section heading -->
<div class="section-heading">
<span class="iconic-image">

	<?php
	$datas = 'backed/uploads/profile/'.$getDemand->profile_pic;
	if (file_exists($datas) && !empty($getDemand->profile_pic)){
	?>
		<img src="<?=base_url();?>backed/uploads/profile/<?=$getDemand->profile_pic?>" alt="profile-picture">
    <?php } else { ?>
		<img src="<?=base_url();?>assets/img/tutor-profile/icon400400.jpg" alt="profile-picture">
		
	<?php
	}
	?>

</span>
<h2 class="section-title">Bio</h2>
</div>

<!-- inner content -->
<div class="inner-content">
<h4 class="bio-subtitle text-capitalize">Experienced Math Teacher</h4>
<p><?=$getDemand->demands_description?></p>
</div>
</div>
</section>
<!-- end: bio -->



<!-- start: description -->
<section id="description" class="description wow fadeInUp">
<div class="section-content">
<!-- section heading -->
<div class="section-heading">
<span class="iconic-image">
<img src="<?=base_url();?>assets/img/iconic-description.png" alt="description">
</span>
<h2 class="section-title">Request Description</h2>
</div>

<!-- inner content -->
<div class="inner-content">
<h4 class="bio-subtitle text-capitalize mb-3">I want to learn English grammar</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</div>
</section>
<!-- end: description -->



<!-- start: subjects -->
<section id="subjects" class="subjects wow fadeInUp">
<div class="section-content">
<!-- section heading -->
<div class="section-heading">
<span class="iconic-image">
<img src="<?=base_url();?>assets/img/iconic-book.png" alt="subject">
</span>
<h2 class="section-title">My Subject</h2>
</div>

<!-- inner content -->
<div class="inner-content">
<p class="subjects-desc">My Subjects and my level Following levels</p>
<div class="subject-detail">
<div class="single-subject-detail d-flex">
<div class="detail-column one">
<h5 class="label">Subject</h5>
<p class="desc">Math</p>
</div>
<div class="detail-column two">
<h5 class="label">Levels</h5>
<p class="desc">Primary, KS3, GCSE</p>
</div>
<div class="detail-column three">
<h5 class="label">Institution</h5>
<p class="desc">School of Leeds</p>
<p class="desc">Session : 2012.01- 2015.03</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- end: subjects -->



<!-- start: rating -->
<section id="rating" class="rating-sec wow fadeInUp">
<div class="section-content">
<!-- section heading -->
<div class="section-heading">
<span class="iconic-image">
<img src="<?=base_url();?>assets/img/iconic-register.png" alt="rating">
</span>
<h2 class="section-title">Teachers Feedback</h2>
</div>

<!-- inner content -->
<div class="inner-content">
<div class="rating">
<span class="point">4.00</span>
<span class="stars">
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="fas fa-star"></i></span>
<span><i class="far fa-star"></i></span>
</span>
</div>
<div class="rating-bars">
<div class="single-rating-bar d-flex align-items-center mb-3">
<span class="star-label">5 Stars</span>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span class="star-count">(100)</span>
</div>
<div class="single-rating-bar d-flex align-items-center mb-3">
<span class="star-label">4 Stars</span>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span class="star-count">(10)</span>
</div>
<div class="single-rating-bar d-flex align-items-center mb-3">
<span class="star-label">3 Stars</span>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span class="star-count">(8)</span>
</div>
<div class="single-rating-bar d-flex align-items-center mb-3">
<span class="star-label">2 Stars</span>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span class="star-count">(8)</span>
</div>
<div class="single-rating-bar d-flex align-items-center mb-3">
<span class="star-label">1 Stars</span>
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span class="star-count">(0)</span>
</div>
</div>
</div>
</div>
</section>
<!-- end: rating -->



<!-- start: reviews -->
<section id="reviews" class="reviews wow fadeInUp">
<div class="section-content">
<!-- section heading -->
<div class="section-heading">
<span class="iconic-image">
<img src="<?=base_url()?>assets/img/iconic-review.png" alt="review">
</span>
<h2 class="section-title">Teachers Reviews</h2>
</div>

<!-- inner content -->
<div class="inner-content">
<div class="single-review">
<div class="student-img">
<img src="<?=base_url()?>assets/img/testimonial/review-testimonial-1.jpg" alt="student-review">
</div>
<div class="review-info">
<h4 class="student-name">Sahed ui</h4>
<p class="review-text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
</p>
<p class="review-meta">
<span class="review-date">7 Aug 2020</span>
<a href="#" class="review-btn reply">Reply</a>
<a href="#" class="review-btn like">Like</a>
</p>
</div>
</div>

<div class="single-review">
<div class="student-img">
<img src="<?=base_url()?>assets/img/testimonial/review-testimonial-1.jpg" alt="student-review">
</div>
<div class="review-info">
<h4 class="student-name">Sahed ui</h4>
<p class="review-text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
</p>
<p class="review-meta">
<span class="review-date">7 Aug 2020</span>
<a href="#" class="review-btn reply">Reply</a>
<a href="#" class="review-btn like">Like</a>
</p>
</div>
</div>

<div class="single-review">
<div class="student-img">
<img src="<?=base_url()?>assets/img/testimonial/review-testimonial-1.jpg" alt="student-review">
</div>
<div class="review-info">
<h4 class="student-name">Sahed ui</h4>
<p class="review-text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
</p>
<p class="review-meta">
<span class="review-date">7 Aug 2020</span>
<a href="#" class="review-btn reply">Reply</a>
<a href="#" class="review-btn like">Like</a>
</p>
</div>
</div>
</div>
<a href="#" class="more-review-btn">
More reviews
<i class="fas fa-angle-double-right"></i>
</a>
</div>
</section>
<!-- end: reviews -->



<!-- start: more students -->
<section id="morestudents" class="morestudents">
<div class="section-content">
<!-- section heading -->
<div class="section-heading">
<h2 class="section-title">More Students</h2>
</div>

<!-- inner content -->
<div class="inner-content">
<!-- profile list -->
<div class="profile-list">
<?php
foreach ($getOtherstudent as $value4) {
	
?>

<div class="row single-profile-list wow fadeInUp">
<div class="col-lg-12 col-xl-8">
<div class="profile-list-bio">
<div class="bio-image">
<div class="profile-image">

<?php
	$datas = 'backed/uploads/profile/'.$value4->profile_pic;
	if (file_exists($datas) && !empty($value4->profile_pic)){
	?>
		<img src="<?=base_url();?>backed/uploads/profile/<?=$value4->profile_pic?>" alt="profile-picture">
    <?php } else { ?>
		<img src="<?=base_url();?>assets/img/tutor-profile/icon400400.jpg" alt="profile-picture">
		
	<?php
	}
	?>



<span class="online-status d-flex align-items-center">
<span><i class="fas fa-circle"></i></span>
Online
</span>
<span class="lesson-rate">
<span class="price">&#36;<?=$value4->rate_per_hour?></span>
<span class="text">/Lesson</span>
</span>
</div>
<p class="local-time thin-colored-text">
<span class="flag"><img src="<?=base_url()?>assets/img/iconic-flag-china.png" alt="flag-china"></span>
<span class="time"><?=date('h:i A')?></span>
<span class="date"><?=date('d-m-Y')?></span>
</p>
</div>
<div class="bio-desc">
<h3 class="profile-name"><?=ucwords($value4->first_name)?> <?=ucwords($value4->last_name)?></h3>
<h5 class="subtitle"><?=$value4->demands_title?></h5>
<h6 class="request-label">Request Description</h6>
		<p class="request-desc">
		 <?=$value4->demands_description?>
		</p>
<a href="#" class="button send-offer-btn deep-bg"  data-toggle="modal" data-target="#studentPop1">Send offer</a>
</div>
<!-- send offer popup -->
<div class="modal fade" id="studentPop1" tabindex="-1" role="dialog" aria-labelledby="studentPop1Title" aria-hidden="true">
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
	$datas = 'backed/uploads/profile/'.$value4->profile_pic;
	if (file_exists($datas) && !empty($value4->profile_pic)){
	?>
		<img src="<?=base_url();?>backed/uploads/profile/<?=$value4->profile_pic?>" alt="profile-picture">
    <?php } else { ?>
		<img src="<?=base_url();?>assets/img/tutor-profile/icon400400.jpg" alt="profile-picture">
		
	<?php
	}
	?>

<span class="online-status d-flex align-items-center">
<span><i class="fas fa-circle"></i></span>
Online
</span>
<span class="lesson-rate">
<span class="price">&#36;<?=$value4->rate_per_hour?></span>
<span class="text">/Lesson</span>
</span>
</div>
<p class="local-time thin-colored-text">
<span class="flag"><img src="<?=base_url()?>assets/img/iconic-flag-china.png" alt="flag-china"></span>
<span class="time"><?=date('h:i:A');?></span>
<span class="date"><?=date('d-m-Y');?></span>
</p>
</div>
<div class="bio-desc">
<h3 class="profile-name"><?=ucwords($value4->first_name)?> <?=ucwords($value4->last_name)?></h3>
<h5 class="subtitle"><?=$value4->demands_title?></h5>
<h6 class="request-label">Request Description</h6>
<p class="request-desc">
 <?=$value4->demands_description?>
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
<span class="history-info"><?=$value4->demand_type_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-signal"></i>
Level of Student
</span>
<span class="history-info"><?=$value4->level_of_student_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-list"></i>
Category
</span>
<span class="history-info"><?=$value4->category_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-clipboard-list"></i>
Lesson Date
</span>
<span class="history-info"><?=date('d M, Y', strtotime($value4->required_date));?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="far fa-calendar-alt"></i>
Lesson Start Time
</span>
<span class="history-info"><?=date('h:i:A', strtotime($value4->start_time));?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="far fa-calendar-minus"></i>
Lesson Duration
</span>
<span class="history-info"><?=$value4->duration?> munites</span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">	
<i class="fas fa-calendar-alt"></i>
Published Date
</span>
<span class="history-info"><?=date('d-m-Y h:i A', strtotime($value4->created_date));?></span>
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
<form action="" class="send-offer-form">
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

<a href="book-lesson.html" class="button book-lesson deep-bg">Book a Lesson</a>
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
<span class="history-info"><?=$value4->language_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-user"></i>
Request Type
</span>
<span class="history-info"><?=$value4->demand_type_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-signal"></i>
Level of Student
</span>
<span class="history-info"><?=$value4->level_of_student_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-list"></i>
Category
</span>
<span class="history-info"><?=$value4->category_name?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="fas fa-clipboard-list"></i>
Lesson Date
</span>
<span class="history-info"><?=date('d M, Y', strtotime($value4->required_date));?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="far fa-calendar-alt"></i>
Lesson Start Time
</span>
<span class="history-info"><?=date('h:i:A', strtotime($value4->start_time));?></span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">
<i class="far fa-calendar-minus"></i>
Lesson Duration
</span>
<span class="history-info"><?=$value4->duration?> munites</span>
</p>
<p class="lesson-history-item">
<span class="history-label text-capitalize d-flex align-items-center">	
<i class="fas fa-calendar-alt"></i>
Published Date
</span>
<span class="history-info"><?=date('d-m-Y h:i A', strtotime($value4->created_date));?></span>
</p>
</div>
<a href="" class="button view-profile-btn thin-bg text-capitalize">View Profile</a>
</div>
</div>
</div>
<?php
}
?>

</div>
</div>

<div class="more-student-link text-right">
<a href="<?=base_url()?>find-student" class="button more-student-btn deep-bg">View more</a>
</div>
</div>
</section>
<!-- end: more students -->
</div>
</div>
</div>


</div>
<!-- end: main content -->

<?php
$this->load->view('front/header/footer.php');
?>
