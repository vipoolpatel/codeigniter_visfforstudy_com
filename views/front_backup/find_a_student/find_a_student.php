<?php
$this->load->view('front/header/header.php');
?>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pagignation.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/findastudent.css">
	
  </head>
  <body>
 <!-- Navbar -->

	<!-- Small screen Navbar-->
<?php
	  $this->load->view('front/header/menu.php');
	?>
<!-- Find-tutor -->
<div class="jumbotron jumbo-css">
	<div class="  d-inline-block"> 
		<h1 class="d-inline-block"><?=get_phrase('find_the_tutor_that_best_match_for_you')?></h1>
	</div>
</div>
<div class="text-center set-background">
	<div class="search-select container mt-3">
		<span class="form-inline">
            <div class="col-lg-4">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" value="" placeholder="Try Search 'Math' or 'English' " id="category_value"/>
                  <div class="input-group-append">
                     <a class="btn " id="category_id" style="background-color: #F79663;"><?=get_phrase('go')?></a>
                  </div>
               </div>
            </div>
			<div class="col-lg-4">
         <div class="input-group mb-3">
                        <?php
                $level_of_student_id = !empty($this->input->get('level_of_student_id')) ? $this->input->get('level_of_student_id') : '';
                ?>
            <select name="level_of_student_id" class="form-control" id="level_of_teacher">
              <option value="">Select Level</option>
            <?php
            foreach ($level as $row) {
            ?>
                              
              <option <?=($level_of_student_id == $row->id) ? 'selected' : ''?> value="<?=$row->id?>"><?=$row->level_of_student_name?></option>
            <?php 
            }
            ?>
            </select>
         </div>
      </div>
				  <div class="col-lg-4">
               <div class="input-group mb-3">
                  <select class="form-control" name="year" id="select_year">
                     <option value="0">Select Year</option>
                     <?php
                        $selected = '';
                        if(!empty($this->input->get('year')))
                        {
                            $selected = $this->input->get('year');
                        }
                        ?>
                     <?php
                        $currently_selected = date('Y'); 
                        $earliest_year = 2018; 
                        foreach ( range( $currently_selected, $earliest_year ) as $i ) {
                          print '<option value="'.$i.'"'.($selected == $i ? ' selected="selected"' : '').'>'.$i.'</option>';
                        }
                        ?>
                  </select>
               </div>
            </div>
		</span>
	</div>
</div>
<div class="col-lg-12 d-inline-block s-online pt-5 pb-5">
	<ul class="list-inline">
		<li class="s-o"><a href="#">Students Online</a></li>
		<li class="s-a"><a href="#">Students Avilable</a></li>
	</ul>
</div>
<div class="container-fluid students-online">
	<div class="row" id="ajax_table">
		
	<!-- <span id="ajax_table">    -->
        <?php
        $this->load->view('front/find_a_student/student_html');
        ?> 
    <!-- </span>  -->

		
	</div>
	<!-- <div style="clear: both;"></div> -->
	 <?php

if($this->pagination->create_links())
{

?>
	<div class="col text-center mt-3 mb-3 d-block">
		<button class="btn load-m" id="load_more" data-val="3">Load More..<img style="display: none;width: 30px;" id="loader" src="assets/loading.gif"> </button>
	</div>
	<?php }
?>
</div>
<!-- Footer -->
<?php
$this->load->view('front/header/footer.php');
?>
  </body>
  <script type="text/javascript">
   $(document).ready(function(){
       
          $("#load_more").click(function(){
              gettutor();
          });
   
         $("#select_year").change(function(){
	     		loaddata();
          });


         $("#level_of_teacher").change(function(){
     			loaddata();
          });
         $("#category_id").click(function(){
          loaddata();
          });



         function loaddata()
         {
     			 $("#ajax_table").html('');
             	 $('#load_more').attr('data-val',0);
             	 $('#load_more').show();
             	  gettutor();
             }
       
   

   
         function gettutor() {
	       $("#loader").show();
           var page = $('#load_more').attr('data-val');
           var year = $('#select_year').val();
           var level_of_teacher = $('#level_of_teacher').val();
           var category_id = $('#category_value').val();
           var pagedata = "?page="+page+"&year="+year+"&level_of_teacher="+level_of_teacher+"&category_id="+category_id;
   
    	   $.ajax({
               url:"<?=base_url()?>findastudent/getLoaddata"+pagedata,
               type:'POST',
               data: {page:page,year:year,level_of_teacher:level_of_teacher},
               dataType: 'json',
	               success: function (data) {

	               if (data.count == 0) {
	               		$('#load_more').hide();
	               	}
            	  $("#ajax_table").append(data.success);
   	              $("#loader").hide();
              	  var total =  parseFloat(page) + 3;
   	              $('#load_more').attr('data-val',total);
	   	            
	   		    }
           });
        };
  
   
   
     });
</script>
</html>