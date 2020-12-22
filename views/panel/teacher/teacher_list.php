<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>

<div class="header-spacer"></div>
        <div class="conty">
            <div class="all-wrapper no-padding-content solid-bg-all">
                <div class="layout-w">
                    <div class="content-w">
                        <div class="content-i">
                            <div class="content-box">
                                <div class="app-email-w">
                                    <div class="app-email-i">
<div class="ae-content-w" style="background-color: #f2f4f8;">
<div class="top-header top-header-favorit">
    <div class="top-header-thumb">
        <img src="<?=base_url()?>backed/uploads/users/admin/ee.jpg" alt="nature" style="height:180px; object-fit:cover;">
        <div class="top-header-author">
            <div class="author-thumb">
                <img src="<?=base_url()?>backed/uploads/users/admin/loho.png" style="background-color: #fff;padding:10px;">
            </div>
            <div class="author-content">
                <a href="javascript:void(0);" class="h3 author-name">Teachers</a>
                <div class="country">VISFFOROOM  |  School Management System</div>
            </div>
        </div>
    </div>
    <div class="profile-section" style="background-color: #fff;">
        <div class="control-block-button">
            <a href="<?=base_url()?>panel/teacher/add_teacher" class="btn btn-control bg-purple" style="background:#0084ff; color: #fff;">
                <i class="icon-feather-plus" title="New account"></i>
            </a>
        </div>
    </div>
</div>
<div class="aec-full-message-w">
    <div class="aec-full-message">
        <div class="container-fluid" style="background-color: #f2f4f8;"><br>
            <div class="col-sm-12">   
                <div class="row">
              <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group label-floating" style="background-color: #fff;">
                        <label class="control-label">Search</label>
                        <input class="form-control" id="filter" type="text" required="">
                    </div>
                  </div>
          </div>
                            
        <div class="row" id="results">
<?php
foreach ($list as $value) {
    # code...

?>
             <div class="col-xl-4 col-md-6 results">
                <div class="card-box widget-user ui-block list">
                    <div class="more" style="float:right;">
                            <i class="icon-options"></i>                                
                            <ul class="more-dropdown">
                                <li><a href="<?=base_url()?>panel/teacher/teacher_update/<?=$value->id?>">Edit</a></li>
                                <li><a onClick="return confirm('Do you want to delete the information?')" href="<?=base_url();?>panel/teacher/detele_teacher/<?=$value->id?>">Delete</a></li>
                            </ul>
                        </div>
                    <div>
                        
 <?php

$datas = 'backed/uploads/profile/'.$value->profile_pic;
if (file_exists($datas) && !empty($value->profile_pic)) {
?>
                                    <img src="<?=base_url()?>backed/uploads/profile/<?=$value->profile_pic?>" class="img-responsive rounded-circle" alt="user">
                                    <?php } else {

   ?>
   <img src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" class="img-responsive rounded-circle" alt="user">
                                                       <?php 
                                                     }
                                                     ?>

                        <div class="wid-u-info">
                            <a href="<?=base_url()?>panel/teacher/teacher_profile/<?=$value->id?>" class="h6 author-name"><h5 class="mt-0 m-b-5">  <?=$value->first_name?> <?=$value->last_name?></h5></a>
                            <p class="text-muted m-b-5 font-13">
                               <!--  <b><i class="picons-thin-icon-thin-0291_phone_mobile_contact"></i></b> 44885544<br> -->
                           <b><i class="picons-thin-icon-thin-0321_email_mail_post_at"></i></b>  <?=$value->email?><br>
                                <!-- <b><i class="picons-thin-icon-thin-0701_user_profile_avatar_man_male"></i></b> marcos<br> -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php

}
?>

        
            
            
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
         
      </div>
  </div>

 







     


<?php 
    $this->load->view('panel/header/footer');
?>
