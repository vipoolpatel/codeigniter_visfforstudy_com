<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="<?=base_url()?>">
		<img src="<?=base_url()?>assets/assets/Edu_logo.png"></a>
	<button class="menus">
	
	</button>

	<form action="<?=base_url()?>find-a-tutor" method="get" style="display: contents;">
	<div class="input-group col-lg-3 col-xs-2 small-none">
    
     	<input type="text" class="form-control" placeholder="<?=get_phrase('try_search_math')?>" aria-label="Recipient's username" aria-describedby="button-addon2" name="category_of_teacher" value="<?=!empty($this->input->get('category_of_teacher')) ? $this->input->get('category_of_teacher') : ''?>">
		<div class="input-group-append">
			<button class="btn btn-default" type="submit" id="button-addon2">
				<svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>

			<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
			</svg></button>
		</div>
      
	</div>
</form>

	<!-- <div class="input-group col-lg-2 col-xs-12 select-drop small-none">
		<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Select level : Primary">
		<div class="input-group-append">
			<div class="dropdown">
				<button class="btn btn-default" type="button" data-toggle="dropdown">
					<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
					</svg>
				</button>
				<ul class="dropdown-menu list-inline">
					<li><a href="#">Primary</a></li>
					<li><a href="#">Secondary</a></li>
					<li><a href="#">Intermediate</a></li>
				</ul>
			</div>
		</div>
	</div> -->

   <?php 
	     $level = $this->db->get('level_of_student')->result();
	?>

	<form action="<?=base_url()?>find-a-tutor" method="get" style="display: contents;" name="submitforms">
		
        <div class="col-lg-2 col-xs-12 small-none input-group select-drop">
           <div class="input-group">
              <select  class="form-control ChangeGroups"  name="level_of_teacher" >
                 <option value=""><?=get_phrase('select_level')?></option>
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
        </div>
	</form>


	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<ul class="navbar-nav mt-2 mt-lg-0 pl-3">
			<li class="nav-item">
				<?php
				$headerlanguage = '';
				if(!empty($_COOKIE['language'])) {
					$headerlanguage = $_COOKIE['language'];
				}
				?>
				<select id="<?=base_url()?>" class="language_picker" style="width: 100px;padding: 7px;border: 1px solid #d1d1d1;margin-right: 10px;">
					<option <?=($headerlanguage == 'english') ? 'selected' : '' ?> value="english"><?=get_phrase('english')?></option>
					<option <?=($headerlanguage == 'chinese') ? 'selected' : '' ?> value="chinese"><?=get_phrase('chinese')?></option>
				</select>
			</li>
			<li class="nav-item">
			<a class="nav-link btn btn-default white" href="<?=base_url();?>find-a-student"> <?=get_phrase('find_a_student')?> <span class="sr-only"><?=get_phrase('find_a_student')?></span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link black" href="<?=base_url();?>find-a-tutor"><?=get_phrase('find_a_tutor')?></a>
			</li>
			<li class="nav-item">
			   <a class="nav-link black" href="<?=base_url()?>register/teacher"><?=get_phrase('become_a_tutor')?></a>
			</li>
			<?php if(!empty($this->session->userdata('user_logged_in'))) { ?>
	         	
		 <li class="ml-5 dropdown icon-profile">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
		          <ul class="dropdown-menu pt-4 pb-4 pr-0 pl-0 custom-dropdown notify-drop">
		            <div class="notify-drop-title">
		            		<div class="text-center">
			            		<h5><?=get_phrase('notifications')?></h5>            			
		            		</div>
		            </div>
            <!-- end notify title -->
            <!-- notify content -->
            <div class="drop-content">
            	<div class="col-lg-12">
            	    <li>
            	    	<a href="#"><h4 style="font-size: 16px;">David Lee</h4>
            	    	<p>Hey, I just read your message. How are you?</p></a>
            	    </li>
            	    <li>
            	    	<a href="#"><h4 style="font-size: 16px;">David Lee</h4>
            	    	<p>Hey, I just read your message. How are you?</p></a>
            	    </li>
            	    <li>
            	    	<a href="#"><h4 style="font-size: 16px;">David Lee</h4>
            	    	<p>Hey, I just read your message. How are you?</p></a>
            	    </li>
            	    <li>
            	    	<a href="#"><h4 style="font-size: 16px;">David Lee</h4>
            	    	<p>Hey, I just read your message. How are you?</p></a>
            	    </li>  
            	    </div>         	                	                	    
            </div>
            <h5 class="text-center mt-3 "><a href="#">See All</a></h5> 
        </ul>
    </li>


    	 <li class="ml-5 dropdown icon-profile">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
		          <ul class="dropdown-menu pt-4 pb-4 pr-0 pl-0 custom-dropdown notify-drop">
		         
            <div class="drop-content">
            	<div class="col-lg-12">
            	    <li>
            	    	<?php if ($this->session->userdata('user_is_admin') == '1'){?>
            	    	       <a href="<?=base_url()?>panel/dashboard"><h4 style="font-size: 16px;"><?=get_phrase('dashboard')?></h4></a>
            	    	<?php } else if($this->session->userdata('user_is_admin') == '2'){?>
            	    		<a href="<?=base_url()?>teacher/dashboard"><h4 style="font-size: 16px;"><?=get_phrase('dashboard')?></h4></a>
            	    	<?php }
            	    	 else if($this->session->userdata('user_is_admin') == '3'){?>
            	    		<a href="<?=base_url()?>student/dashboard"><h4 style="font-size: 16px;"><?=get_phrase('dashboard')?></h4></a>
            	    	<?php }?>
            	    	
            	    </li>
            	    <li>
            	    	<a href="<?=base_url()?>logout"><h4 style="font-size: 16px;"><?=get_phrase('logout')?></h4></a>
            	    </li>

            	    </div>         	                	                	    
            </div>
          
        </ul>
    </li>





        
	        <?php }else{?>

	        	<a class="btn btn-primary" href="<?=base_url();?>register"><?=get_phrase('sign_up')?></a>
	        	<a style="margin-left: 10px;" class="btn btn-primary" href="<?=base_url();?>login"><?=get_phrase('login')?></a>

	        <?php }?>

	</ul>
	</div>	
</nav>

