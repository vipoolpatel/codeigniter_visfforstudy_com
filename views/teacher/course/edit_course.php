
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
                  
                    <h3> <?=get_phrase('edit_course')?></h3>
                    <hr>
                       <form action="" enctype="multipart/form-data" method="post">
                        <input name="id" type="hidden" value="<?= $edit_data->id ?>" />
                        <div class="row">  
                                 <div class="col-sm-6">
                                  <div class="form-group label-floating">
                                    <label class="control-label">
                                    <?=get_phrase('title')?>
                                  </label>
                                    <input class="form-control" type="text" name="course_title" required="" value="<?=$edit_data->course_title?>">
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
                                           <option value="">
                                           <?=get_phrase('select_category')?>
                                         </option>
 
                                          <?php  foreach ($category as $value1) { ?>
                                            <option <?=($edit_data->category_id == $value1->id)?'selected':''?> value="<?=$value1->id?>"><?=ucfirst($value1->category_name)?></option>
                                          <?php } ?>
                                         
                                        </select>
                                      </div>
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <?php
                                foreach($subject as $key => $value_sub) {
                                ?>
                                <div class="col col-lg-4 col-md-6 col-sm-12 col-12 row_delete_subject<?=$value_sub->id?>">
                                  <div class="form-group label-floating">
                                     <label class="control-label"><?=get_phrase('subject')?></label>
                                     <input class="form-control" type="text" name="subject[]" required value="<?=$value_sub->subject_name?>">
                                     <input class="form-control" type="hidden" name="subject_id[]" required value="<?=$value_sub->id?>">
                                     <span class="material-input"></span>
                                  </div>
                                </div>

                                <div class="col col-lg-4 col-md-6 col-sm-12 col-12 row_delete_subject<?=$value_sub->id?>"">
                                  <div class="form-group label-floating">
                                     <label class="control-label"><?=get_phrase('level')?></label>
                                     <input class="form-control" type="text" name="level[]"  value="<?=$value_sub->level_name?>" required="">
                                     <span class="material-input"></span>
                                  </div>
                                </div>

                             

                                 <?php if($key == 0) { ?> 
                                     <div class="col col-lg-1 col-md-6 col-sm-12 col-12 row_delete_subject<?=$value_sub->id?>"">    
                                         <div><a class="btn btn-control btn-grey-lighter btn-purple AddNewSubject"  style="margin-top: 5px;"><i class="icon-feather-plus"></i></a></div>
                                     </div>

                                <?php }else{ ?>

                                   <div class="col col-lg-1 col-md-6 col-sm-12 col-12 row_delete_subject<?=$value_sub->id?>""><div><a class="btn btn-control btn-grey-lighter btn-danger"  onclick="delete_rows_subject(<?=$value_sub->id?>)"  action="<?=$value_sub->id?>" style="margin-top: 5px;"><i class="icon-feather-trash"></i></a></div></div>

                                <?php } ?>


                               <?php 
                              }
                               ?>

                                <div class="getSubjectRow" style="width: 100%;"></div>

<!-- 
                                <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">
                                      <?=get_phrase('class')?>
                                        </label>
                                        <div class="select">
                                        <select  name="class" required="">
                                           <option value="">
                                            <?=get_phrase('select_class')?>
                                         </option>
 
                                          <?php  foreach ($class as $value) { ?>
                                            <option <?=($edit_data->class_id == $value->id)?'selected':''?> value="<?=$value->id?>"><?=ucfirst($value->class_name)?></option>
                                          <?php } ?>
                                         
                                        </select>
                                      </div>
                                        <span class="material-input"></span>
                                    </div>
                                </div>   
 -->
                                 

                                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">
                                          <?=get_phrase('price_per_lesson')?>
                                         ($)</label>
                                        <input class="form-control" type="text" value="<?=$edit_data->hour_per_rate?>" name="hour_per_rate" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">
                                        <?=get_phrase('course_image')?>
                                       </label>
                                    <div class="form-group label-floating">
                                        <input class="form-control" type="file" name="image">
                                        <input type="hidden" value="<?=$edit_data->image?>" name="old_imagename">
                                        <span class="material-input"></span>
                                    </div>
                                    </div>
                                </div>



                                


                                <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                    <div class="form-group label-floating">
                                        
                                        <?php
                                         if (!empty($edit_data->image)) {
                                          ?>
                                            <img  width="90" height="90"  src="<?=base_url()?>backed/teacher/course/<?=$edit_data->image?>">
                                             <?php
                                        }
                                        ?>
                                         
                                        <span class="material-input"></span>
                                    </div>
                                    </div>
                                </div>


                                 <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                       <label class="control-label">
                                        <?=get_phrase('course_video')?>
                                       </label>
                                    <div class="form-group label-floating">
                                        <input class="form-control" type="file" name="course_video">
                                        <input type="hidden" value="<?=$edit_data->course_video?>" name="old_videoname">
                                        <span class="material-input"></span>
                                    </div>
                                    </div>
                                </div>

                                    <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                    <div class="form-group label-floating">
                                        
                                        <?php
                                         if (!empty($edit_data->course_video)) {
                                          ?>
                                               <iframe height="55" src="<?=base_url()?>backed/teacher/course/<?=$edit_data->course_video?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
                                             <?php
                                        }
                                        ?>
                                         
                                        <span class="material-input"></span>
                                    </div>
                                    </div>
                                </div>


            <div class="clonedata col-md-12">

              <?php foreach ($course_lesson as $key => $value ) { ?>
             
             


                            <div class="row" id="row_delete<?=$value->id?>">

                                <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">
                                         <?=get_phrase('available_date')?>
                                       </label>
                                        <input type="text" class="datepickerdata" required="" disabled="" data-position="bottom left" data-language="en" value="<?=date('d-m-Y',($value->lesson_date))?>" name=""  >
                                    </div>
                                </div>



                                <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">
                                             <?=get_phrase('start_time')?>
                                        </label>
                                        <input class="form-control" type="time" disabled="" value="<?=date('H:i',($value->lesson_time))?>" name="" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>


                                 <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">
                                         <?=get_phrase('duration')?>(Minutes)
                                       </label>
                                        <input class="form-control" type="text" disabled="" value="<?=$value->duration?>" name="" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>


                                <?php if($key == 0) { ?> 
                                     <div class="col col-lg-1 col-md-6 col-sm-12 col-12 removebut">    
                                         <div><a class="btn btn-control btn-grey-lighter btn-purple AddNewCourse"  style="margin-top: 5px;"><i class="icon-feather-plus"></i></a></div>
                                     </div>

                                <?php }else{ ?>

                                   <div class="col col-lg-1 col-md-6 col-sm-12 col-12 removebut"><div><a class="btn btn-control btn-grey-lighter btn-danger remove_field"  onclick="delete_rows(<?=$value->id?>)"  action="<?=$value->id?>" style="margin-top: 5px;"><i class="icon-feather-trash"></i></a></div></div>

                                <?php } ?>


                          </div>


                   <?php } ?>
                 </div>

                                <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                    <label class="control-label">
                                       <?=get_phrase('description')?>
                                     </label>
                                    <div class="form-group label-floating">
                                        <textarea class="form-control summernoteeditor" type="text" name="description"><?=$edit_data->description?></textarea>
                                        <span class="material-input"></span>
                                    </div>
                                </div>


                             <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <button class="btn btn-primary" type="submit" style="color: white"> 
                                     <?=get_phrase('update')?>
                                </button>
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
          $('.getSubjectRow').append('<div class="row" id="deleterows'+j+'" style="width: 100%;padding-left: 15px;padding-right: 15px;"><div class="col col-lg-4 col-md-6 col-sm-12 col-12" style="padding-right: 7px;"><div class="form-group label-floating"><label class="control-label"><?=get_phrase('subject')?></label><input class="form-control" type="text" name="subject[]" required> <input class="form-control" type="hidden" name="subject_id[]" value=""><span class="material-input"></span></div></div>  <div style="padding-right: 0px;padding-left: 24px;" class="col col-lg-4 col-md-6 col-sm-12 col-12"><div class="form-group label-floating"><label class="control-label"><?=get_phrase('level')?></label><input class="form-control" type="text" name="level[]" required=""><span class="material-input"></span></div></div><div class="col col-lg-4 col-md-4 col-sm-12 col-12 removebut" style="padding-left: 38px;"><div><a class="btn btn-control btn-grey-lighter btn-danger remove_field_data" action="'+j+'"  style="margin-top: 5px;"><i class="icon-feather-trash"></i></a></div></div></div>'); 
          j++;
     }); 


       $('body').delegate('.remove_field_data','click', function(e){
          e.preventDefault(); 
          var button_id = $(this).attr("action");
          $("#deleterows"+button_id+"").remove();
      });

 


   var maxField = 10; 
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
      //$(this).parent('div').remove(); 
      x--;
    
    });


});

</script>

<script type="text/javascript">
  
  function delete_rows(id){


         $.ajax({
                url: '<?=base_url()?>teacher/course/delete_course_lesson',
                type:'POST',
                data:{id:id},
                dataType:'json',
                success: function(data){

                    $("#row_delete"+id+"").remove();
              

                }
            });

  }

    function delete_rows_subject(id){


       $.ajax({
              url: '<?=base_url()?>teacher/course/delete_course_subject',
              type:'POST',
              data:{id:id},
              dataType:'json',
              success: function(data){

                  $(".row_delete_subject"+id+"").remove();
            

              }
          });

  }

  
</script>
