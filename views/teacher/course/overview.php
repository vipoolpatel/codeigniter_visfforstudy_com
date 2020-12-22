<?php 

    $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
?>


  <div class="header-spacer"></div>
      <div class="conty">
<?php 
    $this->load->view('teacher/course/sub_menu');

?>


     <div class="content-box">
        <div class="row">


		<div class="col col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="ui-block list" data-mh="friend-groups-item" style="">
				<div class="friend-item friend-groups">
					<div class="friend-item-content">
						<div class="friend-avatar">
						    <br><br>
						    <i class="picons-thin-icon-thin-0073_documents_files_paper_text_archive_copy" style="font-size:45px; color: #dd2979;"></i>
							<h1 style="font-weight:bold;"><?=$course?></h1>
							<div class="author-content">
								<div class="country"><b>Number of Courses</b></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div class="col col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="ui-block list" data-mh="friend-groups-item" style="">
				<div class="friend-item friend-groups">
					<div class="friend-item-content">
						<div class="friend-avatar">
						    <br><br>
						    <i class="picons-thin-icon-thin-0073_documents_files_paper_text_archive_copy" style="font-size:45px; color: #dd2979;"></i>
							<h1 style="font-weight:bold;"><?=$pending_course?></h1>
							<div class="author-content">
								<div class="country"><b>Total Pending Course</b></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="ui-block list" data-mh="friend-groups-item" style="">
				<div class="friend-item friend-groups">
					<div class="friend-item-content">
						<div class="friend-avatar">
						    <br><br>
						    <i class="picons-thin-icon-thin-0073_documents_files_paper_text_archive_copy" style="font-size:45px; color: #dd2979;"></i>
							<h1 style="font-weight:bold;"><?=$publish_course?></h1>
							<div class="author-content">
								<div class="country"><b>Total Publish Course</b></div>
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
    $this->load->view('teacher/header/footer');
?>
