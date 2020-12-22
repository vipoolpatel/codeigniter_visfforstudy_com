<?php 
	  $level = $this->db->get('level_of_student')->result();

?>

	<!-- start: header -->
	<header class="header-area">
		<div class="container-fluid">
			<div class="row align-items-xl-end justify-content-xl-between">
				<div class="col-lg-6 col-xl-5">
					<div class="logo-and-search">
						<div class="logo">
							<a href="<?=base_url();?>">
								<img src="<?=base_url();?>assets/img/logo-2x.png" alt="visffor-logo">
							</a>
						</div>

						<form action="<?=base_url();?>find-tutor" class="math-search d-flex align-items-center" method="get" name="submitforms">
							<div class="input-group input-group-sm">
								 <input type="text" name="category_of_teacher" class="math form-control" placeholder="Try Search Math or English" value="<?=!empty($this->input->get('category_of_teacher')) ? $this->input->get('category_of_teacher') : ''?>"> 
								<select name="level_of_teacher" class="math-level form-control ChangeGroups">

									<option value="">Select Level</option>
									 <?php
		                      $selected = '';
		                        if(!empty($this->input->get('level_of_teacher')))
		                        {
		                            $selected = $this->input->get('level_of_teacher');
		                        }

			                 ?>
						    <?php foreach ($level as $value2) { ?>
		                      <option <?=($selected == $value2->id) ? 'selected' : ''?> value="<?=$value2->id?>"><?=$value2->level_of_student_name?></option>
		                  <?php } ?> 
									
								</select>
							</div>
							<button type="submit" class="math-search-submit">
								<i class="fas fa-search"></i>
							</button>
							
						</form>
					</div>
				</div>

				<div class="col-lg-6 col-xl-7">
					<div class="menu-and-reg d-flex align-items-center justify-content-between justify-content-md-between justify-content-lg-end">
						<ul class="main-menu d-flex flex-grow-1 align-items-center justify-content-lg-end justify-content-xl-center">
							<li class="<?php if ($this->uri->segment(1) == "") echo "current-page";?>"><a href="<?=base_url()?>">Home</a></li>
							<li class="<?php if ($this->uri->segment(1) == "find-student") echo "current-page";?>"><a href="<?=base_url()?>find-student">Find a Student</a></li>
							<li class="<?php if ($this->uri->segment(1) == "find-tutor") echo "current-page";?>"><a href="<?=base_url();?>find-tutor">Find a Tutor</a></li>
							<li class="<?php if ($this->uri->segment(1) == "become-tutor") echo "current-page";?>"><a href="<?=base_url();?>become-tutor">Become a Tutor</a></li>
						</ul>

						<div class="language-search">
							<button class="language-search-btn dropdown-toggle" type="button" id="language-search-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Select language
							</button>
							<div class="dropdown-menu" aria-labelledby="language-search-btn">
								<a class="dropdown-item" href="#">English</a>
								<a class="dropdown-item" href="#">Chinese</a>
								<a class="dropdown-item" href="#">Spanish</a>
							</div>
						</div>

						<div class="user-access d-flex">
							<a href="<?=base_url();?>signup" class="reg-btn signup">Sign Up</a>
							<a href="<?=base_url();?>login" class="reg-btn login">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end: header -->
