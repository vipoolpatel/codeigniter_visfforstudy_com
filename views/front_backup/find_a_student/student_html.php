<?php
  foreach ($list as $value) {
?>

<div class="col-lg-4 col-12 col-sm-6 col-sm-6  mt-3 mb-3  d-inline-block">
			<div class="col-lg-12 student-info d-inline-block float-right m-0 p-0">
				<div class=" user-online">
					<?php

        $datas = 'backed/uploads/profile/'.$value->profile_pic;
        if (file_exists($datas) && !empty($value->profile_pic)) {
        ?>
<img class="img-fluid" style="width: 100%;" src="<?=base_url()?>backed/uploads/profile/<?=$value->profile_pic?>">

        <?php } else{ ?>

          <img style="width: 100%;" class="img-fluid" src="<?=base_url();?>assets/assets/image_stdnt1.png">
           <?php }?>

				
				</div>
				<div class="backgd-white">
					<h1 class="d-inline-block"><?=$value->first_name?> <?=$value->last_name?></h1>
				
				<div class="custom-css-form">
					<div class="form-group">
						<img src="<?=base_url()?>assets/assets/user.png"><label>Type:</label><span><?=$value->demand_type_name?></span>
					</div>
					<div class="form-group">
						<img src="<?=base_url()?>assets/assets/ranking.png"><label>Level of Student:</label><span><?=$value->level_of_student_name?></span> 
					</div>
					<div class="form-group">
						<img src="<?=base_url()?>assets/assets/graduation-cap.png"><label>Category:</label><span><?=$value->category_name?></span>

					</div>
					<div class="form-group">
						<img src="<?=base_url()?>assets/assets/clock.png"><label>Published Date Joined: <?=date('d M, Y', strtotime($value->required_date));?> <?=date('h:i:A', strtotime($value->required_time));?> </label>
					</div>
				</div>
				<div class="demand-info">
					<label for="pwd" class="mr-sm-2 custom-family d-inline-block">Rate per Hour</label>
					<h3 class="d-inline-block">$<?=$value->rate_per_hour?></h3>
					</form>
				</div>
				<div class="demand-description d-inline-block p-0">
					<h4>Demands :</h4>
					<p></p>
				</div>
				<div class=" btn-custom text-center ">
					<button>Send a Offert</button>
					<button>View Profile</button>
				</div>
				</div>
			</div>
		</div>

<?php
}
?>
