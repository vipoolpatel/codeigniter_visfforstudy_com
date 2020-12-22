<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>


 <div class="header-spacer"></div>
      <div class="conty">
<?php 
   $this->load->view('panel/category/sub_menu');
?>
        <div class="all-wrapper no-padding-content solid-bg-all">
            <div class="layout-w">
              <div class="content-w">
                  <div class="content-i">
                    <div class="content-box">
                      <form action="" method="post">
                            <input name="id" type="hidden" value="<?=$edit_list->id?>" />
                      <div class="col-sm-12">
                        <div class="element-box lined-primary shadow" style="border-radius:10px;">
                          <h4 class="form-header">Edit Category</h4><br>
                          <div class="row">   
                            
                            
                       
                             <div class="col-sm-6">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Category Type</label>
                                <div class="select">
                                  <select name="parent_id">
                                      <option value="0">Select Parent Category</option>
                                      <?php
                                          foreach ($getCategory as  $value) {
                                            ?>
                                            <option <?=($edit_list->parent_id ==  $value->id) ? 'selected' : ''?> value="<?=$value->id?>"><?=$value->category_name?></option> 
                                          
                                          <?php }   ?>
                                  </select>
                                </div>
                              </div>
                            </div>

                        

                          
                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Category Name</label>
                                <input class="form-control" type="text" name="category_name" required="" value="<?=$edit_list->category_name?>">
                                <span class="material-input"></span>
                              </div>
                            </div>

                             
                              <div class="col-sm-6">
                              <div class="form-group label-floating is-select">
                                <label class="control-label">Status</label>
                                <div class="select">
                                  <select name="status" required="">
                                    <option <?=($edit_list->status == '1')?'selected':''?> value="1"> Active </option>
                                    <option <?=($edit_list->status == '2')?'selected':''?> value="2"> Inactive </option>
                                  </select>
                                </div>
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
  </div>      
</div>
      
    </div>
    


<?php 
    $this->load->view('panel/header/footer');
?>
