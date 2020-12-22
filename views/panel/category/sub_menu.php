    <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
            
             <ul class="navs navs-tabs upper">
                 <li class="navs-item">
                    <a class="navs-links <?=($this->uri->segment(3) == 'category_list') ? 'active' : '' ?>" href="<?=base_url()?>panel/category/category_list">
                        <i class="picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
                        <span>Category List</span></a>
                 </li>
                  <li class="navs-item">
                    <a class="navs-links <?=($this->uri->segment(3) == 'add_category') ? 'active' : '' ?>" href="<?=base_url()?>panel/category/add_category">
                        <i class="os-icon picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
                        <span>Add Category</span></a>
                 </li>
                
                

              </ul>
          </div>
        </div><br>