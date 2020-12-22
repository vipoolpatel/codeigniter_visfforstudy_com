<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>
<div class="header-spacer"></div>
    <div class="conty">
<?php 
   $this->load->view('panel/email_subscribe/sub_menu');
?>
        <div class="content-box">
        
   
        <div class="tab-content ">
            <div class="tab-pane active" id="students">
            <div class="element-wrapper">
              
                <div class="element-box-tp">
                  <div class="table-responsive">
                    <table class="table table-padded">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Email</th>
                          <th>Created Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       

                  <?php 
                  if (!empty($list)) {
                  foreach ($list as  $value) {  ?>
                    <tr>

                        <td><?=$value->id?></td>
                     
                        <td><?=$value->email?></td>
                        <td><?=date('d-m-Y h:i A', strtotime($value->created_date));?></td>
                        
                         <td class="bolder">
                            
                            <a  onClick="return confirm('Do you want to delete the information?')" href="<?=base_url()?>panel/emailsubscribe/delete_email_subscribe/<?=$value->id?>" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0057_bin_trash_recycle_delete_garbage_full" data-toggle="tooltip" data-placement="top" data-original-title="Delete"></i></a>
                        </td>

                        </tr>
                          
                       <?php } } else{?>

                          <tr><td colspan="100%">No record found.</td></tr>

                       <?php }?>
                     
                      </tbody>
                    </table>

                    <?php echo $this->pagination->create_links(); ?>
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
    $this->load->view('panel/header/footer');
?>
