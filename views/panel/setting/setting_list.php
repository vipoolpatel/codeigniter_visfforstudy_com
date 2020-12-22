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
                        <span>Setting</span></a>
                 </li>
                 
                

              </ul>
          </div>
        </div><br>
        <div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
              <div class="content-w">
                  <div class="content-i">
                    <div class="content-box">
                      <form action="" method="post">
                      <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                          <h4 class="form-header">Update Setting</h4><br>
                          <div class="row">   
                            
                            
                       
                         <input type="hidden" name="id" value="<?=$update->id?>">

                        

                          
                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Paypal Email</label>
                                <input class="form-control" type="email" name="paypal_email" required="" value="<?= set_value('paypal_email',$update->paypal_email); ?>">
                                <span class="material-input"></span>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">System Email</label>
                                <input class="form-control" type="email" name="system_email" required="" value="<?= set_value('system_email',$update->system_email); ?>">
                                <span class="material-input"></span>
                              </div>
                            </div>


                             
                        
                           
                           
                            <div class="col-sm-12">
                              <div style="float:right;">
                                <button class="btn btn-primary btn-rounded pull-right" type="submit"> Update</button>
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
  </div>      </div>
      
    </div>

<?php 
    $this->load->view('panel/header/footer');
?>
