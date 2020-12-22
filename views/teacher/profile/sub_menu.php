        <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
            <ul class="navs navs-tabs upper">
              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'profile_list') ? 'active' : '' ?>" href="<?=base_url();?>teacher/profile"><i class="os-icon picons-thin-icon-thin-0050_settings_panel_equalizer_preferences"></i><span>Profile Settings</span></a>
              </li>
              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'change_password') ? 'active' : '' ?>" href="<?=base_url();?>teacher/profile/change_password"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Change Password</span></a>
              </li>

              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'add_qulification') ? 'active' : '' ?>" href="<?=base_url();?>teacher/profile/add_qulification"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Add Qulification</span></a>
              </li>

              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'qulification_detail') ? 'active' : '' ?>" href="<?=base_url();?>teacher/profile/qulification_detail"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Qulification List</span></a>
              </li>
             </ul>
          </div>
        </div><br>
