<?php 
   $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
   ?>
<div class="header-spacer"></div>
<div class="conty">
   <?php 
      $this->load->view('teacher/course/sub_menu');
      ?>
   <div class="all-wrapper no-padding-content solid-bg-all">
      <div class="layout-w">
         <div class="content-w">
            <div class="content-i">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                           <h5><?=get_phrase('add_course')?></h5>
                           <br>
                           <form action="" enctype="multipart/form-data" method="post">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                       <label class="control-label"><?=get_phrase('title')?></label>
                                       <input class="form-control" type="text" name="course_title" required="">
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                       <label class="control-label">
                                       <?=get_phrase('category_name')?>
                                       </label>
                                       <div class="select">
                                          <select  name="category_id" required="">
                                             <option value=""><?=get_phrase('select_category')?></option>
                                             <?php  foreach ($category as $value1) { ?>
                                             <option value="<?=$value1->id?>"><?=ucfirst($value1->category_name)?></option>
                                             <?php } ?>
                                          </select>
                                       </div>
                                       <span class="material-input"></span>
                                    </div>
                                 </div>

                                  <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label"><?=get_phrase('subject')?></label>
                                       <input class="form-control" type="text" name="subject[]" required="">
                                       <span class="material-input"></span>
                                    </div>
                                  </div>

                                  <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label"><?=get_phrase('level')?></label>
                                       <input class="form-control" type="text" name="level[]" required="">
                                       <span class="material-input"></span>
                                    </div>
                                  </div>



                                   <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div><a class="btn btn-control btn-grey-lighter btn-purple AddNewSubject"  style="margin-top: 5px;"><i class="icon-feather-plus"></i></a></div>
                                   </div>

                                   <div class="getSubjectRow" style="width: 100%;"></div>

                                   

                                 <!-- <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                       <label class="control-label">
                                       <?=get_phrase('class')?></label>
                                       <div class="select">
                                          <select  name="class" required="">
                                             <option value="">
                                                <?=get_phrase('select_class')?>
                                             </option>
                                             <?php  foreach ($class as $value) { ?>
                                             <option value="<?=$value->id?>"><?=ucfirst($value->class_name)?></option>
                                             <?php } ?>
                                          </select>
                                       </div>
                                       <span class="material-input"></span>
                                    </div>
                                 </div> -->

                                 <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">
                                       <?=get_phrase('course_image')?></label>
                                       <div class="form-group label-floating">
                                          <input class="form-control" type="file" name="image">
                                          <span class="material-input"></span>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">
                                       <?=get_phrase('course_video')?></label>
                                       <div class="form-group label-floating">
                                          <input class="form-control" type="file" name="course_video">
                                          <span class="material-input"></span>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label"> <?=get_phrase('price_for_each_lesson')?> ($)</label>
                                       <input class="form-control" type="text" value="" name="hour_per_rate" required="">
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="clonedata col-md-12">
                                    <div class="row">
                                       <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                          <div class="form-group label-floating">
                                             <label class="control-label">
                                             <?=get_phrase('available_date')?>
                                             </label>
                                             <input type="text" class="datepickerdata" required="" data-position="bottom left" data-language="en" value="" name="lesson_date[]" >
                                          </div>
                                       </div>
                                       <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                          <div class="form-group label-floating">
                                             <label class="control-label">
                                             <?=get_phrase('start_time')?>
                                             </label>
                                             <input class="form-control" type="time" value="" name="lesson_time[]" required="">
                                             <span class="material-input"></span>
                                          </div>
                                       </div>
                                       <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                          <div class="form-group label-floating">
                                             <label class="control-label">Duration(Minutes) </label>
                                             <input class="form-control" type="text" value="" name="duration[]" required="">
                                             <span class="material-input"></span>
                                          </div>
                                       </div>
                                       <div class="col col-lg-1 col-md-6 col-sm-12 col-12 removebut">
                                          <div><a class="btn btn-control btn-grey-lighter btn-purple AddNewCourse"  style="margin-top: 5px;"><i class="icon-feather-plus"></i></a></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="getMultipleRow" style="width: 100%">
                                 </div>
                                 <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                    <label class="control-label"> <?=get_phrase('description')?></label>
                                    <div class="form-group label-floating">
                                       <textarea class="form-control summernoteeditor"  type="text" name="description"></textarea>
                                       <span class="material-input"></span>
                                    </div>
                                 </div>
                                 <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary" type="submit" style="color: white"><?=get_phrase('submit')?></button>
                                 </div>
                              </div>
                           </form>
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


<script src="<?=base_url()?>backed/style/js/picker.js"></script>
<script src="<?=base_url()?>backed/style/js/picker.en.js"></script>

<script type="text/javascript">
   $(document).ready(function(){

    var j = 1; 



     $('.AddNewSubject').click(function(){
          $('.getSubjectRow').append('<div class="row" id="deleterows'+j+'" style="width: 100%;padding-left: 15px;padding-right: 15px;"><div class="col col-lg-4 col-md-6 col-sm-12 col-12" style="padding-right: 7px;"><div class="form-group label-floating"><label class="control-label"><?=get_phrase('subject')?></label><input class="form-control" type="text" name="subject[]" required><span class="material-input"></span></div></div>  <div style="padding-right: 0px;padding-left: 24px;" class="col col-lg-4 col-md-6 col-sm-12 col-12"><div class="form-group label-floating"><label class="control-label"><?=get_phrase('level')?></label><input class="form-control" type="text" name="level[]" required=""><span class="material-input"></span></div></div><div class="col col-lg-4 col-md-4 col-sm-12 col-12 removebut" style="padding-left: 38px;"><div><a class="btn btn-control btn-grey-lighter btn-danger remove_field_data" action="'+j+'"  style="margin-top: 5px;"><i class="icon-feather-trash"></i></a></div></div></div>'); 
          j++;
     });  


     $('body').delegate('.remove_field_data','click', function(e){
          e.preventDefault(); 
          var button_id = $(this).attr("action");
          $("#deleterows"+button_id+"").remove();
      });


   
   
      var maxField = 1000; 
      var wrapper = $('.clonedata'); 
    

       var fieldHTML = '<div class="col col-lg-4 col-md-6 col-sm-12 col-12">\n\
        <div class="form-group label-floating">\n\
        <label class="control-label"><?=get_phrase('available_date')?></label>\n\
        <input type="text" class="datepickerdata" required="" data-position="bottom left" data-language="en" value="" name="lesson_date[]" >\n\
        </div>\n\
        </div>\n\
        <div class="col col-lg-4 col-md-6 col-sm-12 col-12">\n\
        <div class="form-group label-floating">\n\
        <label class="control-label"><?=get_phrase('start_time')?></label>\n\
        <input class="form-control" type="time" name="lesson_time[]" required="">\n\
        <span class="material-input"></span>\n\
         </div>\n\
         </div>\n\
         <div class="col col-lg-3 col-md-6 col-sm-12 col-12">\n\
         <div class="form-group label-floating">\n\
         <label class="control-label">Duration(Minutes)</label>\n\
         <input class="form-control" type="text"  name="duration[]" required=""><span class="material-input">\n\
         </span>\n\
         </div>\n\
         </div>';  

   
       var x = 1; 
       
       $('.AddNewCourse').click(function(){

           if(x < maxField){ 
               x++; 
               $(wrapper).append('<div class="row" id="rows'+x+'">'+fieldHTML+'<div class="col col-lg-1 col-md-6 col-sm-12 col-12 removebut"><div><a class="btn btn-control btn-grey-lighter btn-danger remove_field" action="'+x+'"  style="margin-top: 5px;"><i class="icon-feather-trash"></i></a></div></div></div>'); 

                  
                $('.datepickerdata').datepicker({
                        'dateFormat' : "dd-mm-yyyy"
                });

           }
       });
       
    
       $(wrapper).on("click",".remove_field", function(e){ 
       
          e.preventDefault(); 
             var button_id = $(this).attr("action");
               $("#rows"+button_id+"").remove();
                x--;
           
          });


     });
   

              
       
     
</script>
