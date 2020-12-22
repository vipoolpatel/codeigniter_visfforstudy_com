
<?php 
    $this->load->view('teacher/header/header');
   $this->load->view('teacher/header/menu');
?>

 <div class="header-spacer"></div>
    <div class="conty">
        <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
              <ul class="navs navs-tabs upper">
                <li class="navs-item">
                    <a class="navs-links active" href="">
                        <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                        <span>Teacher List</span></a>
                </li>
                

              </ul>
          </div>
        </div>
        <div class="content-box">
        <div class="os-tabs-w">
      <div class="os-tabs-controls">
        <ul class="navs navs-tabs upper">
        <li class="navs-item">
          <a class="navs-links active" data-toggle="tab" href="#teacher">Teacher </a>
        </li>
        
        </ul>
      </div>
      </div>
      <br>
        <div class="tab-content ">
            <div class="tab-pane active" id="students">
            <div class="element-wrapper">
                <h6 class="element-header">
                  Teacher List                 
                   <div style="margin-top:auto;text-align:right;"><a href="#" data-target="#addroutine" data-toggle="modal" class="btn btn-control btn-grey-lighter btn-purple"><i class="icon-feather-plus"></i><div class="ripple-container"></div></a></div>
                </h6>
                <div class="element-box-tp">
                  <div class="table-responsive">
                    <table class="table table-padded">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Profile Image</th>
                          <th>Created Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>
                          <span class="status-pill red"></span><span>High</span>
                             <td><span>29 Apr, 2019</span></td>
                            <td class="cell-with-media">
                                <img alt="" src="<?=base_url()?>backed/uploads/user.jpg" style="height: 25px;"><span> </span>
                            </td>
                            <td class="cell-with-media">
                                <img alt="" src="<?=base_url()?>backed/uploads/user.jpg" style="height: 25px;"><span>  </span>
                            </td>
                            <td><a class="badge badge-primary" href="javascript:void(0);"></a></td>
                            
                            <td>Demo report</td>
                            <td class="bolder">
                                  <a href="" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0012_notebook_paper_certificate" data-toggle="tooltip" data-placement="top" data-original-title="View details"></i></a>
                                <a href="" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0001_compose_write_pencil_new" data-toggle="tooltip" data-placement="top" data-original-title="View details"></i></a>
                                <a  onClick="return confirm('Do you want to delete the information?')" href="" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0057_bin_trash_recycle_delete_garbage_full" data-toggle="tooltip" data-placement="top" data-original-title="Delete"></i></a>
                            </td>

                        </tr>

                          <tr>
                            <td>
                          <span class="status-pill red"></span><span>High</span>
                             <td><span>29 Apr, 2019</span></td>
                            <td class="cell-with-media">
                                <img alt="" src="<?=base_url()?>backed/uploads/user.jpg" style="height: 25px;"><span> </span>
                            </td>
                            <td class="cell-with-media">
                                <img alt="" src="<?=base_url()?>backed/uploads/user.jpg" style="height: 25px;"><span>  </span>
                            </td>
                            <td><a class="badge badge-primary" href="javascript:void(0);"></a></td>
                         
                            <td>Demo report</td>
                            <td class="bolder">
                                <a href="" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0012_notebook_paper_certificate" data-toggle="tooltip" data-placement="top" data-original-title="View details"></i></a>
                                <a href="" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0012_notebook_paper_certificate" data-toggle="tooltip" data-placement="top" data-original-title="View details"></i></a>
                                <a  onClick="return confirm('Do you want to delete the information?')" href="" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0057_bin_trash_recycle_delete_garbage_full" data-toggle="tooltip" data-placement="top" data-original-title="Delete"></i></a>
                            </td>
                        </tr>

                      </tbody>
                    </table>
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

<div class="modal fade" id="addroutine" tabindex="-1" role="dialog" aria-labelledby="addroutine" aria-hidden="true">
  <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
    <div class="modal-content">
      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      </a>
      <div class="modal-body">
        <div class="ui-block-title" style="background-color:#00579c">
          <h6 class="title" style="color:white">Add Teacher</h6>
        </div>
        <div class="ui-block-content">
           <form action="" enctype="multipart/form-data" method="post">
              <div class="row">
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Full Name</label>
                          <input class="form-control" placeholder="" type="text" name="title">
                        <span class="material-input"></span>
                      </div>
                    </div>
                    
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label">Class</label>
                            <div class="select">
                                <select name="class_id" onchange="get_class_sections(this.value); get_class_subject(this.value);">
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
                    </div>
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label">Section</label>
                            <div class="select">
                                <select name="section_id" id="section_selector_holder" onchange="get_class_students(this.value);">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label">Student</label>
                            <div class="select">
                                <select name="student_id" id="students_holder">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating is-select">
                                <label class="control-label">Priority</label>
                                <div class="select">
                                    <select name="priority" required="">
                                        <option value="">Select</option>
                            <option value="baja">Low</option>
                            <option value="media">Medium</option>
                            <option value="alta">High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="control-label">File</label>
                          <input class="form-control" placeholder="" type="file" name="file">
                        <span class="material-input"></span>
                      </div>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                                <textarea class="form-control" rows="6" placeholder="Description..." name="description" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-buttons-w text-right">
                        <center><button class="btn btn-rounded btn-success" type="submit">Save</button></center>
                    </div>
                </form>        
            </div>
        </div>
        </div>
    </div>
</div>


  

<?php 
    $this->load->view('teacher/header/footer');
?>
