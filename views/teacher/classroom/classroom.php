<?php 
    $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
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
                                                    <img src="http://localhost/Dropbox/visfforoom.com/uploads/bglogin.jpg" alt="nature" style="height:180px; object-fit:cover;">
                                                    <div class="top-header-author">
                                                        <div class="author-thumb">
                                                            <img src="<?=base_url()?>backed/uploads/logoicon.png" style="background-color: #fff; padding:10px;">
                                                        </div>
                                                        <div class="author-content">
                                                            <a href="javascript:void(0);" class="h3 author-name">Calassrooms</a>
                                                            <div class="country">VISFFORSTUDY  |  School Management System</div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="profile-section" style="background-color: #fff;">
                                                    <div class="control-block-button">
                                                         <a href="javascript:void(0);" class="btn btn-control bg-purple" style="background:#99bf2d; color: #fff;" data-toggle="modal" data-target="#crearadmin">
                                                            <i class="picons-thin-icon-thin-0001_compose_write_pencil_new" style="font-size:25px;" title="Add"></i>
                                                        <div class="ripple-container"></div></a>
                                                    </div>
                                                </div>
                                            </div>



        <div class="aec-full-message-w">
            <div class="aec-full-message">
                <div class="container-fluid" style="background-color: #f2f4f8;"><br>
                    <div class="col-sm-12">     
                        <div class="row">

                          <?php 
                               foreach ($class_list as $value) { 
                          ?>

                             <div class="col-sm-6">
                                  <div class="ui-block list">
                                    <div class="more" style="float:right; margin-right:15px; ">
                                        <i class="icon-options"></i>                                
                                        <ul class="more-dropdown" style="z-index:999">
                                          <li><a onclick="edit_data('<?=$value->id?>')" style="cursor: pointer;color: black;" >Edit</a></li>
                                            <li><a onClick="return confirm('Do you want to delete the information?')" href="<?=base_url()?>/teacher/classroom/class_delete/<?=$value->id?>">Delete</a></li>
                                        </ul>
                                    </div>
                                      <div class="birthday-item inline-items">
                                          <div class="circle blue">c</div>&nbsp;
                                             <div class="birthday-author-name">
                                                <!--  <a href="<?=base_url()?>teacher/classroom/classroom_list" class="h6 author-name"><?=$value->class_name?></a> -->
                                                 <a href="" class="h6 author-name"><?=$value->class_name?></a>
                                                 <div><b>Students:</b>2.</div>
                                         </div>
                                      </div>
                                  </div>
                              </div> 
                               
                          <?php } ?>
                          

                                                                                                                                                                          




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
          <div class="display-type"></div>
      </div>
  </div>


 
<div class="modal fade" id="crearadmin" tabindex="-1" role="dialog" aria-labelledby="crearadmin" aria-hidden="true" style="top:10%;">
  <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
    <div class="modal-content">
      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
      <div class="modal-body">
        <div class="modal-header" style="background-color:#00579c">
            <h6 class="title" style="color:white">Add Class</h6>
        </div>
        <div class="ui-block-content">
            <form action="<?=base_url()?>teacher/classroom/class_create"  method="post" accept-charset="utf-8">
                <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Class Name</label>
                            <input class="form-control" type="text" name="class_name" required="">
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </div>
            </form>          
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="editclass" tabindex="-1" role="dialog" aria-labelledby="editclass" aria-hidden="true" style="top:10%;">
  <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
    <div class="modal-content">
      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
      <div class="modal-body">
        <div class="modal-header" style="background-color:#00579c">
            <h6 class="title" style="color:white">Edit Class</h6>
        </div>
        <div class="ui-block-content">
            <form action="<?=base_url()?>teacher/classroom/class_update"  method="post" accept-charset="utf-8">
              <input type="hidden" name="id" id="class_id">
                <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <input class="form-control" type="text" name="class_name" id="class_name" required="" value="" placeholder="Name">
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </div>
            </form>          
        </div>
      </div>
    </div>
  </div>
</div>



 

</div>
<div class="display-type"></div>
</div>
<script type="text/javascript">

   function edit_data(id){

      $('#editclass').modal('show');
      
      var id = id;

        $.ajax({
          url: '<?=base_url()?>teacher/classroom/edit_class',
          type: 'POST',
          data: {id:id},
          dataType: 'json',
          success: function(data){
          
            $('#class_name').val(data.class_name);
            $('#class_id').val(data.id);
          }

        });

   }

</script>



<?php 
    $this->load->view('teacher/header/footer');
?>


