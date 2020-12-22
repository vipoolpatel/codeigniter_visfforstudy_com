 <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
            
             <ul class="navs navs-tabs upper">
              <?php
                $status = !empty($this->input->get('status'))? $this->input->get('status') : '';
                if(empty($status))
                {
                    if($this->uri->segment(3) != 'add_demands' && $this->uri->segment(3) != 'received_offer')
                    {
                         $status = 'demand_list';
                    }
                }
              ?>


                  <li class="navs-item">
                    <a class="navs-links <?=($this->uri->segment(3) == 'add_demands') ? 'active' : '' ?>" href="<?=base_url()?>student/demands/add_demands">
                        <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                        <span>Add Demand</span></a>
                  </li>


                  <li class="navs-item">
                    <a class="navs-links <?=($status == 'demand_list') ? 'active' : '' ?>" href="<?=base_url()?>student/demands/demand_list">
                        <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                        <span>Demand List</span></a>
                  </li>


                   <li class="navs-item ">
                    <a class="navs-links <?=($status == '1') ? 'active' : '' ?>"" href="<?=base_url()?>student/demands/demand_list?status=1">
                        <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                        <span>Pending Demand</span></a>
                  </li>

                  <li class="navs-item ">
                    <a class="navs-links <?=($status == '2') ? 'active' : '' ?>"" href="<?=base_url()?>student/demands/demand_list?status=2">
                        <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                        <span>Publish Demand</span></a>
                  </li>
                  

              </ul>
          </div>
        </div><br>