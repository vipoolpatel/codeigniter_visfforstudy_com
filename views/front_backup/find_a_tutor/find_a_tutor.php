<?php
   $this->load->view('front/header/header.php');
   ?>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/findtutor.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/new_pagignation.css">
</head>
<body>
   <!-- Navbar -->
   <?php
      $this->load->view('front/header/menu.php');
      ?>
   <!-- Find-tutor -->
   <div class="jumbotron jumbo-css">
      <div class="  d-inline-block">
         <h1 class="d-inline-block">Find The Tutor That Best Match For You</h1>
      </div>
   </div>

   <div class="text-center set-background">
      <div class="search-select container mt-3">
         <span class="form-inline">
            <div class="col-lg-4">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" value="" placeholder="Try Search 'Math' or 'English' " id="category_value"/>
                  <div class="input-group-append">
                     <a class="btn" id="category_of_teacher" style="background-color: #F79663;">Go</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="input-group mb-3">
                  <select  class="form-control" id="level_of_teacher">
                     <option value="">Select Level</option>
                      <?php foreach ($level_of_student as $value2) { ?>
                          <option value="<?=$value2->id?>"><?=$value2->level_of_student_name?></option>
                      <?php } ?>
                  </select>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="input-group mb-3">
                  <select class="form-control" id="select_year">
                     <option value="">Select Year</option>
                     <?php
                        $currently_selected = date('Y'); 
                        $earliest_year = 2018; 
                        foreach ( range( $currently_selected, $earliest_year ) as $i ) {
                          print '<option value="'.$i.'">'.$i.'</option>';
                        }
                        ?>
                  </select>
               </div>
            </div>
         </span>
      </div>
   </div>

   <div class="container-fluid ">
      <div class="col-lg-12 b-bottom categories">
         <label class="mr-2">Categories: </label>
         <?php foreach ($category as $value1) { ?>
         <button type="button" class="btn m-1 teacher_cat_name" value="<?=$value1->category_name?>" ><?=$value1->category_name?></button>	
         <?php } ?>
      </div>
   </div>

   <div class="container-fluid pt-3 d-inline-block">
      <div class="col-lg-3 filter-l d-inline-block">
         <form class="form-inline mt-5 sort-by" >
            <label >Sort by</label>
            <select class="form-control ml-2" name="tutor_sort" id="tutor_sort">
               <option value="">Most Hired Tutor</option>
               <option value="1">New Tutor</option>
               <option value="2">Experienced Tutor</option>
            </select>
         </form>
         <div class="range-slider">
            <span>Prices</span>
            <form class="range-css">
               <label for="customRange">Range</label>
               <input type="range" class="custom-range" id="customRange" min="0" max="200">
            </form>
         </div>
         <div class="choose-date">
            <span>Choose your available time and date from
            the calendar to find right tutor for you.</span>
            <form>
               <input type="Date" name="" class="form-control">
            </form>
         </div>
      </div>
      
      
 	     <span id="ajax_table"> 	
      	<?php
      	$this->load->view('front/find_a_tutor/tutor_html');
      	?>
     </span>



   </div>

   <?php

if($this->pagination->create_links())
{

?>
   <div class="col-lg-12 d-inline-block text-center">
      <div class="container" style="text-align: center">
         <button class="btn btn-primary" id="load_more" data-val="<?=$per_page?>">Load more..<img style="display: none;width: 30px;" id="loader" src="assets/loading.gif"> 
         </button>
      </div>
   </div>
<?php }
?>



   <?php
      $this->load->view('front/header/footer.php');
      ?>
</body>


<script type="text/javascript">
   $(document).ready(function(){

          $('#customRange').click(function(){
            gettutor();
          });
       
          $("#load_more").click(function(){
              gettutor();
          });
   
         $("#select_year").change(function(){
	     		loaddata();
          });


         $("#level_of_teacher").change(function(){
     			loaddata();
          });


         $("#tutor_sort").change(function(){
          loaddata();
          });

         $("#category_of_teacher").click(function(){
          loaddata();
          });

         
          // $(".teacher_cat_name").click(function() {
          //     var page = $(this).attr('value');
          //     var aa = $(this).val('maths');
          //     console.log(aa);
          // });
   

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
           var tutor_sort = $('#tutor_sort').val();
           var category_of_teacher = $('#category_value').val();
           var custom_range = $('#customRange').val();


           

           var pagedata = "?page="+page+"&year="+year+"&level_of_teacher="+level_of_teacher+"&tutor_sort="+tutor_sort+"&category_of_teacher="+category_of_teacher+"&custom_range="+custom_range;
   
    	   $.ajax({
               url:"<?=base_url()?>findatutor/getLoaddata"+pagedata,
               type:'POST',
               data: {page:page,year:year,level_of_teacher:level_of_teacher},
               dataType: 'json',
	               success: function (data) {

	               if (data.count == 0) {
	               		$('#load_more').hide();
	               	}
            	  $("#ajax_table").append(data.success);
   	              $("#loader").hide();
              	  var total =  parseFloat(page) + <?=$per_page?>;
   	              $('#load_more').attr('data-val',total);
	   	            
	   		    }
           });
        };
  
   
   
     });
</script>
</html>
