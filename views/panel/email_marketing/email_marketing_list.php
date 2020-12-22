<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>
 <div class="header-spacer"></div>
      <div class="conty">
   
        <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
              <ul class="navs navs-tabs upper">
                 <li class="navs-item">
                    <a class="navs-links active" href="">
                        <i class="picons-thin-icon-thin-0051_settings_gear_preferences"></i>
                        <span>Email Marketing</span></a>
                 </li>
              </ul>
          </div>
        </div>
        <br>
        <div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
              <div class="content-w">
                  <div class="content-i">
                    <div class="content-box">
                      <form action="" method="post">
                      <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                      
                          <div class="row">   
                            
                            <div class="col-sm-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Subject</label>
                                <input class="form-control" type="text" name="subject" required="" value="">
                                <span class="material-input"></span>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Type</label>
                                    <div class="select">
                                        <select  name="type" required="" id="SelectType">
                                           <option value="">Select Type</option>
                                           <option value="2">Teacher</option>
                                           <option value="3">Student</option>
                                        </select>
                                    </div>
                                <span class="material-input"></span>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Email</label>
                                    <div class="select">
                                        <select  name="email" required="" id="email_id">
                                           <option value="">All</option>
                                        </select>
                                    </div>
                                <span class="material-input"></span>
                              </div>
                            </div>

                            <div class="col-sm-12">
                                <label class="control-label"> Body</label>
                                <div class="form-group label-floating">
                                   
                                    <textarea class="form-control summernoteeditor" id=""  type="text" name="body"></textarea>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                           
                            <div class="col-sm-12">
                              <div style="float:right;">
                                <button class="btn btn-primary btn-rounded pull-right" type="submit"> Send Email</button>
                              </div>
                            </div>
                        </div>
                      </div>
                    </form>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    
 

<?php 
  $this->load->view('panel/header/footer');
?>

<script type="text/javascript">
  $(document).ready(function(){

    $('#SelectType').change(function(){
        var type = $(this).val();   

        $.ajax({
            url:"<?php echo base_url();?>panel/emailmarketing/user_all",
            method: "POST",
            data:{type:type},
            dataType:'json',
            success:function(data)
            {
                $('#email_id').html(data.success);
            }
        })

    });

  });
</script>
