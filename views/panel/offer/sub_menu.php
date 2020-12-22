   


   <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
            <ul class="navs navs-tabs upper">

            	<?php
              $status = !empty($this->input->get('status'))? $this->input->get('status') :'';
              ?>


              <li class="navs-item">
                <a class="navs-links  <?=($status == '') ? 'active' : '' ?>" href="<?=base_url()?>panel/offer"><i class="os-icon picons-thin-icon-thin-0017_office_archive"></i><span>Offer List</span></a>
              </li>

              <li class="navs-item">
                <a class="navs-links <?=($status == '1') ? 'active' : '' ?>" href="<?=base_url()?>panel/offer/offer_list?status=1"><i class="os-icon picons-thin-icon-thin-0017_office_archive"></i><span>Pending Offer</span></a>
              </li>

              <li class="navs-item">
                <a class="navs-links  <?=($status == '2') ? 'active' : '' ?>" href="<?=base_url()?>panel/offer/offer_list?status=2"><i class="os-icon picons-thin-icon-thin-0017_office_archive"></i><span>Publish Offer</span></a>
              </li>

              <li class="navs-item">
                <a class="navs-links  <?=($status == '3') ? 'active' : '' ?>" href="<?=base_url()?>panel/offer/offer_list?status=3"><i class="os-icon picons-thin-icon-thin-0017_office_archive"></i><span>Reject Offer</span></a>
              </li>
             
            </ul>
          </div>
        </div><br>