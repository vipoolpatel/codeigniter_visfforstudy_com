<?php 
    $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>


 <div class="header-spacer"></div>
    <div class="conte nt-i">
                    		<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<img src="<?=base_url()?>backed/uploads/bglogin.jpg" alt="nature" style="height:180px; object-fit:cover;">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="<?=base_url()?>backed/uploads/logoicon.png" style="background-color: #fff; padding:10px;">
							</div>
							<div class="author-content">
								<a href="javascript:void(0);" class="h3 author-name">Notifications center</a>
								<div class="country">VISFFORSTUDY  |  School Management System</div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="control-block-button">
						</div>
					</div>
				</div>
			</div>
      <div class="content-box">
        <div class="conty">
          <div class="row">
            <div class="col col-sm-6">
              <div class="ui-block" data-mh="friend-groups-item">
                <div class="friend-item friend-groups">
                  <div class="friend-item-content">
                    <div class="friend-avatar">
                      <div class="author-thumb">
                        <img src="<?=base_url()?>backed/uploads/icons/sms.svg" width="110px" style="background-color:#fff;padding:15px; border-radius:0px;">
                      </div>
                      <div class="author-content">
                        <a href="javascript:void(0);" class="h5 author-name">Send SMS</a>
                        <div class="country">Available for all users</div>
                      </div>
                    </div>
                    <div class="control-block-button">
                      <a data-toggle="modal" data-target="#sendsms" href="javascript:void(0);" class="btn btn-control bg-success text-white"><i class="picons-thin-icon-thin-0287_mobile_message_sms"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="ui-block" data-mh="friend-groups-item">
                <div class="friend-item friend-groups">
                  <div class="friend-item-content">
                    <div class="friend-avatar">
                      <div class="author-thumb">
                        <img src="<?=base_url()?>backed/uploads/icons/emails.svg" width="110px" style="background-color:#fff;padding:15px; border-radius:0px;">
                      </div>
                      <div class="author-content">
                        <a href="javascript:void(0);" class="h5 author-name">Send emails</a>
                        <div class="country">Available for all users</div>
                      </div>
                    </div>
                    <div class="control-block-button">
                      <a data-toggle="modal" data-target="#sendemails" href="javascript:void(0);" class="btn btn-control bg-success text-white"><i class="picons-thin-icon-thin-0315_email_mail_post_send"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="sendemails" tabindex="-1" role="dialog" aria-labelledby="sendemails" aria-hidden="true">
    <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
        <div class="modal-content">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
        <div class="modal-body">
            <div class="ui-block-title" style="background-color:#00579c">
            <h6 class="title" style="color:white">Send emails</h6>
            </div>
        <div class="ui-block-content">
        	<form action="http://localhost/Dropbox/visfforoom.com/admin/notify/send_emails" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	            <div class="row">
	                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
              			<div class="form-group label-floating is-select">
                            <label class="control-label">Receiver</label>
                            <div class="select">
                                 <select required name="type" required="">
							        <option value="">Select</option>
                            		 <option value="admin">Admins</option>
                            		 <option value="teacher">Teachers</option>
                            		 <option value="student">Students</option>
                            		 <option value="parent">Parents</option>
                            		 <option value="accountant">Accountants</option>
                            		 <option value="librarian">Librarians</option>
						        </select>
                            </div>
                        </div>
                    </div>
              		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
	                	<div class="form-group label-floating">
                  			<label class="control-label">Email subject</label>
                  			<input class="form-control" name="subject" type="text" required="">
	                	</div>
            		</div>
              		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">          
                		<div class="form-group">
                  			<label class="control-label">Message</label>
                  			<textarea id="ckeditor1" name="content" required=""></textarea>
                		</div>        
              		</div>                
            	</div>
          		<div class="form-buttons-w text-right">
	             	<center><button class="btn btn-rounded btn-success btn-lg" type="submit">Send</button></center>
          		</div>
          	</form>        
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ... end Crear Accountant -->


  <div class="modal fade" id="sendsms" tabindex="-1" role="dialog" aria-labelledby="sendsms" aria-hidden="true">
      <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
        <div class="modal-content">
        <form action="http://localhost/Dropbox/visfforoom.com/admin/notify/sms" enctype="multipart/form-data" method="post" accept-charset="utf-8">
          <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
          <div class="modal-header">
            <h6 class="title">Send SMS</h6>
          </div>
          <div class="modal-body">
            <div class="form-group label-floating is-select">
                <label class="control-label">Receiver</label>
                <div class="select">
                    <select required name="receiver" id="type" required="">
						<option value="">Select</option>
                        <option value="admin">Admins</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Students</option>
                        <option value="parent">Parents</option>
                        <option value="accountant">Accountants</option>
                        <option value="librarian">Librarians</option>
				    </select>
                </div>
            </div>
                    
              <div class="form-group label-floating is-select" id="class">
                <label class="control-label">Class</label>
                <div class="select">
                    <select name="class_id" onchange="get_class_sections2(this.value);">
                        <option value="">Select</option>
                                                    <option value="2">Class 6</option>
                                                    <option value="3">Class 7</option>
                                                    <option value="4">Class 8</option>
                                                    <option value="5">Class 9</option>
                                                    <option value="9">MAMALOOK</option>
                                                    <option value="10">3333</option>
                                                    <option value="11">课程1</option>
                                            </select>
                </div>
            </div>
            <div class="form-group">
              <textarea rows="3" class="form-control" name="msg" required="" placeholder="Message..."></textarea>
            </div>        
            <button type="submit" class="btn btn-rounded btn-success btn-lg full-width">Send</button>
          </div>
          </form>        </div>
      </div>
    </div>
    
        </div>
      <div class="display-type"></div>
    </div>
   <script type="text/javascript">
    function showAjaxModal(url)
    {
        jQuery('#exampleModal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="<?=base_url()?>backed/assets/images/preloader.gif" /></div>');
        jQuery('#exampleModal').modal('show', {backdrop: 'true'});
        $.ajax({
            url: url,
            success: function(response)
            {
                jQuery('#exampleModal .modal-body').html(response);
            }
        });
    }
</script>
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="crearadmin" aria-hidden="true">
  <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
    <div class="modal-content" style="margin-top:50px;">
      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
      <div class="modal-body">
        <div class="modal-header" style="background-color:#00579c">
            <h6 class="title" style="color:white">VISFFOROOM</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function confirm_modal(delete_url)
    {
        jQuery('#modal_delete').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

    <script type="text/javascript">
        $('.clockpicker').clockpicker({
            placement: 'top',
            align: 'left',
            donetext: 'Done'
        });
    </script>

    
     <script>
    $(document).ready(function() {
        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    </script>

<?php 
    $this->load->view('panel/header/footer');
?>
