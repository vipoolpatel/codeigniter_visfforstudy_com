
<?php
$this->load->view('front/header/header.php');
?>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/auth/register.css">

  </head>
  <body>
 <!-- Navbar -->
<?php
$this->load->view('front/header/menu.php');
?>


<div class="lg-none mt-2 mb-2">
  	<button type="button" class="ml-4 button-s" data-toggle="collapse" data-target="#demo"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="	http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
					<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
					</svg>
	</button>
	<div id="demo" class="collapse mt-4">
  		<div class="input-group col-lg-3 col-xs-2">
			<input type="text" class="form-control" placeholder="<?=get_phrase('try_search_math')?>" aria-label="Recipient's username" aria-describedby="button-addon2">
			<div class="input-group-append">
				<button class="btn btn-default" type="button" id="button-addon2"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="	http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
					<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
					</svg>
				</button>
			</div>
		</div>
	<div class="input-group col-lg-2 col-xs-12 select-drop mt-4">
		<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="<?=get_phrase('select_level_primary')?>">
		<div class="input-group-append">
			<div class="dropdown">
				<button class="btn btn-default" type="button" data-toggle="dropdown">
					<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
					</svg>
				</button>
				<ul class="dropdown-menu list-inline">
					<li><a href="#"><?=get_phrase('primary')?></a></li>
					<li><a href="#"><?=get_phrase('secondary')?></a></li>
					<li><a href="#"><?=get_phrase('intermediate')?></a></li>
				</ul>
			</div>
		</div>
	</div>
  </div>
</div>
<!-- Regisration -->
<div class="container text-center registration">
	<h1><?=get_phrase('registration')?></h1>
	<span class="d-block mb-4"><?=get_phrase('please_choose_the_role')?></span>
	<div class="d-inline-block student p-5">
		<a href="<?=base_url()?>register/student"><img class="img-fuild" src="<?=base_url()?>assets/assets/study.png">
		<h1 class="mt-3"><?=get_phrase('student')?></h1></a>
	</div>
	<div class="d-inline-block teacher p-5">
		<a href="<?=base_url()?>register/teacher"><img class="img-fuild" src="<?=base_url()?>assets/assets/teacher_big.png">
		<h1 class="mt-3"><?=get_phrase('teacher')?></h1></a>
	</div>
</div>




<?php
$this->load->view('front/header/footer.php');
?>

  </body>
</html>