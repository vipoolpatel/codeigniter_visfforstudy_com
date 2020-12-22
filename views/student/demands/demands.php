
<?php 
    $this->load->view('student/header/header');
   $this->load->view('student/header/menu');
?>

 <div class="header-spacer"></div>
    <div class="conty">
   <?php 
   $this->load->view('student/demands/sub_menu');
    ?>

     
  <div class="all-wrapper no-padding-content solid-bg-all">
                <div class="layout-w">
                    <div class="content-w">
                        <div class="content-i">
                            <div class="container-fluid">
     

              
                <div class="row">
            <?php
            foreach ($list as $value) {
            ?>

          <div class="col col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block paddingtel">    
              <article class="hentry post has-post-thumbnail thumb-full-width">

                
                  <?php 
                  require '_common_demand.php';
                  ?>


                  <div class="col-sm-12"> 
                     <a href="<?=base_url();?>student/demands/view_demands/<?=$value->id?>"> <button class="send-btn btn btn-info " >View</button>  </a>
                     
                   <a href="<?=base_url();?>student/demands/edit_demands/<?=$value->id?>"> <button class="send-btn btn btn-success ">Edit</button>  </a>

                  <a onClick="return confirm('Do you want to delete the information?')" href="<?=base_url()?>student/demands/delete_demands/<?=$value->id?>">  <button class="send-btn btn btn-danger ">Delete</button></a>  
                  </div>   


              </article>
             </div>
          </div>

<?php
}
?>
         






     
            </div>

            
              <div class="row">
                        <div class="col-md-12">
                              <?php echo $this->pagination->create_links ();?>
                       </div>
                  </div>


          </div>
          </div>
        </div>
      </div>      
      </div>
   


  </div>
</div>
<div class="display-type"></div>



<?php 
    $this->load->view('student/header/footer');
?>
