
<?php 
    $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
?>


 

     <div class="header-spacer"></div>
      <div class="conty">
<?php 
    $this->load->view('teacher/profile/sub_menu');
 ?>


          <div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
                <div class="content-w">
                    <div class="content-i">
                        <div class="container-fluid">
                            <div class="row">

                              <?php foreach ($qu_detail as $value) { ?>

                                <div class="col-sm-4">
                             <div class="element-box lined-primary shadow" style="border-radius:10px;">

                                 <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>University:</b> <span style="color: #0084ff;"><?=$value->university_name?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>Degree:</b><span style="color: #0084ff;"> <?=$value->degree?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>Start Year :</b><span style="color: #0084ff;">  <?=date('d/m/Y', strtotime($value->start_year));?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>End Year :</b><span style="color: #0084ff;">  <?=date('d/m/Y', strtotime($value->end_year));?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>Major:</b> <span style="color: #0084ff;">  <?=$value->major?></span></label>
                                    </div>
                                  </div> 

                                  <div class="col-sm-12"> 
                                    <div class="form-group label-floating">
                                      <label><b>Description:</b>  <?=$value->description?></label>
                                    </div>
                                  </div> 


                                   
                               
                                    <div class="col-sm-12"> 
                                        <div>
                                            <a class="btn btn-primary" href="<?=base_url()?>teacher/profile/edit_qulification/<?=$value->id?>"> Edit</a>
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure that you want to delete this record?')" href="<?=base_url()?>teacher/profile/delete_qulification/<?=$value->id?>"> Delete</a>
                                        </div>
                                    </div>
                              </div>
                            </div>
                                
                              <?php } ?>

                         <?php echo $this->pagination->create_links ();?>
                              
                          

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>






      </div>

<?php 
    $this->load->view('teacher/header/footer');
?>
