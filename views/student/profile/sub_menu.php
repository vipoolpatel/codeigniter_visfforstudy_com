    <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
            <ul class="navs navs-tabs upper">
              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'profile_setting') ? 'active' : '' ?>" href="<?=base_url();?>student/profile"><i class="os-icon picons-thin-icon-thin-0050_settings_panel_equalizer_preferences"></i><span><?=get_phrase('profile_settings')?></span></a>
              </li>
              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'change_password') ? 'active' : '' ?>" href="<?=base_url();?>student/profile/change_password"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span><?=get_phrase('change_password')?></span></a>
              </li>
            
            
            </ul>
          </div>
        </div><br>