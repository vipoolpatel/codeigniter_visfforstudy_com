<?php 
   $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>
<div class="header-spacer"></div>
    <div class="conty">
<?php 
   $this->load->view('panel/category/sub_menu');
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
                          <th>Parent Category</th>
                          <th>Category</th>
                          <th>Created Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       

                  <?php 
                  if (!empty($list)) {
                  foreach ($list as  $value) {  ?>
                    <tr>

                        <td><?=$value->id?></td>
                        <td><?=$value->parent_category_name?></td>
                        <td><?=$value->category_name?></td>
                        <td><?=date('d-m-Y h:i A', strtotime($value->created_date));?></td>
                        <td>
                          <?php if ($value->status == '1') { ?>
                           <button class="btn btn-success" id="status" value="2_<?=$value->id?>" onclick="status_chang('2_<?=$value->id?>')">Active</button></td>
                          <?php }else { ?>
                           <button class="btn btn-danger" id="status" value="1_<?=$value->id?>" onclick="status_chang('1_<?=$value->id?>')">Inactive</button></td>
                        <?php }?>
                        </td>
                         <td class="bolder">
                            <a href="<?=base_url()?>panel/category/edit_category/<?=$value->id?>" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0001_compose_write_pencil_new" data-toggle="tooltip" data-placement="top" data-original-title="Edit"></i></a>
                            <a  onClick="return confirm('Do you want to delete the information?')" href="<?=base_url()?>panel/category/delete_category/<?=$value->id?>" style="color:grey;"><i style="font-size:20px;" class="picons-thin-icon-thin-0057_bin_trash_recycle_delete_garbage_full" data-toggle="tooltip" data-placement="top" data-original-title="Delete"></i></a>
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



<script type="text/javascript">

  function status_chang(sta){

         var res = sta.split("_");
         var status = res[0];
         var id = res[1];

         
            $.ajax({
                url: '<?=base_url()?>panel/category/change_status',
                type:'POST',
                data:{status:status,id:id},
                dataType:'json',
                success: function(data){

                   window.location.reload();

                }
            });

  };
</script>


<?php 
    $this->load->view('panel/header/footer');
?>
