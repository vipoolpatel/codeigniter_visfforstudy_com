

     <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
            <ul class="navs navs-tabs upper">


                <?php
                $status = !empty($this->input->get('status'))? $this->input->get('status') : '';
                if(empty($status))
                {
                    if($this->uri->segment(3) != 'add_offer')
                    {
                         $status = 'teacher_offer_send';
                    }
                }
              ?>


              <li class="navs-item">

                <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'add_offer') ? 'active' : '' ?>" href="<?=base_url();?>teacher/offersent"><i class="os-icon picons-thin-icon-thin-0050_settings_panel_equalizer_preferences"></i><span>Add Offer</span></a>
             
              <li class="navs-item ">
                <a class="navs-links <?=($status == 'teacher_offer_send') ? 'active' : '' ?>" href="<?=base_url();?>teacher/offersent/teacher_offer_send"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Your Offer Sent</span></a>
              </li>

               <li class="navs-item ">
                <a class="navs-links <?=($status == '1') ? 'active' : '' ?>" href="<?=base_url();?>teacher/offersent/teacher_offer_send?status=1"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Pending Offer</span></a>
              </li>

               <li class="navs-item ">
                <a class="navs-links <?=($status == '2') ? 'active' : '' ?>" href="<?=base_url();?>teacher/offersent/teacher_offer_send?status=2"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Publish Offer</span></a>
              </li>

      

               <!-- </li>
                <a class="navs-links <?=($this->uri->segment(3) == 'student_demand') ? 'active' : '' ?>" href="<?=base_url();?>teacher/offersent/student_demand"><i class="os-icon picons-thin-icon-thin-0191_window_application_cursor"></i><span>Student Demand Detail</span></a>
              </li>
               -->
              
              
            </ul>
          </div>
        </div><br>