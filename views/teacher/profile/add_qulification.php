
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
                            <div class="col-sm-12">
                              <div class="element-box lined-primary shadow" style="border-radius:10px;">
                                <form action="" enctype="multipart/form-data" method="post">
                                      <div class="row">  


                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">University Name</label>
                                        <input class="form-control" type="text" value="" name="university_name" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Degree</label>
                                        <input class="form-control" type="text" value="" name="degree" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>


                                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Start Year</label>
                                        <input type="text" class="datepicker-here" data-position="bottom left" data-language="en" value="" name="start_year" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">End Year</label>
                                        <input type="text" class="datepicker-here" data-position="bottom left" data-language="en" value="" name="end_year" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>


                               <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Major</label>
                                        <input class="form-control" type="text" value="" name="major" required="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>


                               <div class="col-sm-12">
                                    <label class="control-label">Description</label>
                                    <div class="form-group label-floating">
                                        <textarea class="form-control summernoteeditor" type="text"  name="description" ></textarea>
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="col-sm-12"> 
                                    <div>
                                        <button class="btn btn-primary" type="submit"> Submit</button>
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

      </div>


<?php 
    $this->load->view('teacher/header/footer');
?>
