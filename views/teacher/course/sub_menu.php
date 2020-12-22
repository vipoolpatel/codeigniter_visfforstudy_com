

  <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
            <ul class="navs navs-tabs upper">
             <?php
                $status = !empty($this->input->get('status'))? $this->input->get('status') : '';
                if(empty($status))
                {
                    if($this->uri->segment(3) != 'add_course' && $this->uri->segment(3) != 'overview')
                    {
                         $status = 'course_list';
                    }
                }
              ?>




              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'overview') ? 'active' : '' ?>" href="<?=base_url();?>teacher/course"><i class="os-icon picons-thin-icon-thin-0050_settings_panel_equalizer_preferences"></i><span>Overview</span></a>
              </li>
              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'add_course') ? 'active' : '' ?>" href="<?=base_url();?>teacher/course/add_course"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Add Course</span></a>
              </li>

              <li class="navs-item">
                <a class="navs-links <?=($status == 'course_list') ? 'active' : '' ?>" href="<?=base_url();?>teacher/course/course_list"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Course List</span></a>
              </li>
             
              <li class="navs-item">
                <a class="navs-links <?=($status == '1') ? 'active' : '' ?>" href="<?=base_url();?>teacher/course/course_list?status=1"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Pending Course</span></a>
              </li>
               <li class="navs-item">
                <a class="navs-links <?=($status == '2') ? 'active' : '' ?>" href="<?=base_url();?>teacher/course/course_list?status=2"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Publish Course</span></a>
              </li>
            </ul>
          </div>
        </div><br>
