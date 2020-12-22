   <div class="os-tabs-w menu-shad">
          <div class="os-tabs-controls">
            <ul class="navs navs-tabs upper">
              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'receiveoffer_list') ? 'active' : '' ?>" href="<?=base_url()?>student/receiveoffer/receiveoffer_list"><i class="os-icon picons-thin-icon-thin-0017_office_archive"></i><span>
                <?=get_phrase('received_offer')?>
              </span></a>
              </li>

              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'received_offer') ? 'active' : '' ?>" href="<?=base_url()?>student/demands/received_offer"><i class="os-icon picons-thin-icon-thin-0017_office_archive"></i><span>
                <?=get_phrase('demand_received_offer')?>
              </span></a>
              </li>
             
            </ul>
          </div>
        </div>