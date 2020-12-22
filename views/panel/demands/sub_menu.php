<div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
              <ul class="navs navs-tabs upper">

              <?php
              $status = !empty($this->input->get('status'))? $this->input->get('status') :'';
              ?>

                <li class="navs-item">
                    <a class="navs-links <?=($status == '') ? 'active' : '' ?>" href="<?=base_url()?>panel/demands">
                      <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                    <span>Demand Lists</span></a>
                </li>

                <li class="navs-item">
                    <a class="navs-links <?=($status == '1') ? 'active' : '' ?>" href="<?=base_url()?>panel/demands/demand_list?status=1">
                      <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                    <span>Pending Demand</span></a>
                </li>

                <li class="navs-item">
                    <a class="navs-links <?=($status == '2') ? 'active' : '' ?>" href="<?=base_url()?>panel/demands/demand_list?status=2">
                      <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                    <span>Publish Demand</span></a>
                </li>


                <li class="navs-item">
                    <a class="navs-links <?=($status == '3') ? 'active' : '' ?>" href="<?=base_url()?>panel/demands/demand_list?status=3">
                      <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                    <span>Reject Demand</span></a>
                </li>





<!-- 
                <li class="navs-item">
                    <a class="navs-links <?=($status == 'add_demands') ? 'active' : '' ?>" href="<?=base_url()?>panel/demands/add_demands">
                      <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                    <span>Add Demand</span></a>
                </li> -->



              </ul>
          </div>
        </div><br>