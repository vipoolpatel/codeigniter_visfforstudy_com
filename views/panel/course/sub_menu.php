    <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
              
              <?php
              $status = !empty($this->input->get('status'))? $this->input->get('status') :'';
              ?>

             <ul class="navs navs-tabs upper">
                 <li class="navs-item ">
                    <a class="navs-links <?=($status == '') ? 'active' : '' ?>" href="<?=base_url()?>panel/course/course_list">
                          <i class="os-icon picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
                        <span>Course List</span></a>
                 </li>

                 <li class="navs-item ">
                    <a class="navs-links <?=($status == '1') ? 'active' : '' ?>" href="<?=base_url()?>panel/course/course_list?status=1">
                        <i class="os-icon picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
                        <span>Pending Course</span></a>
                 </li>

                 <li class="navs-item ">
                    <a class="navs-links <?=($status == '2') ? 'active' : '' ?>" href="<?=base_url()?>panel/course/course_list?status=2">
                        <i class="os-icon picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
                        <span>Publish Course</span></a>
                 </li>

                  <li class="navs-item ">
                    <a class="navs-links <?=($status == '3') ? 'active' : '' ?>" href="<?=base_url()?>panel/course/course_list?status=3">
                        <i class="os-icon picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
                        <span>Reject Course</span></a>
                 </li>

               <!--    <li class="navs-item ">
                    <a class="navs-links <?=($this->uri->segment(3) == 'add_course') ? 'active' : '' ?>" href="<?=base_url()?>panel/course/add_course">
                        <i class="os-icon picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
                        <span>Add Course</span></a>
                 </li> -->
                
                

              </ul>
          </div>
        </div><br>