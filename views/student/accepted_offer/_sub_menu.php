<div class="os-tabs-w menu-shad">
      <div class="os-tabs-controls">
         <ul class="navs navs-tabs upper">
      	

            <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'accepted_offer_list') ? 'active' : '' ?>" href="<?=base_url();?>student/acceptedoffer/accepted_offer_list"><i class="picons-thin-icon-thin-0378_analytics_presentation_statistics_graph"></i><span>Accepted Offer</span></a>
              </li>
              <li class="navs-item">
                <a class="navs-links <?=($this->uri->segment(3) == 'accepted_demand_offer_list') ? 'active' : '' ?>" href="<?=base_url();?>student/acceptedoffer/accepted_demand_offer_list"><i class="picons-thin-icon-thin-0378_analytics_presentation_statistics_graph"></i><span>Accepted Demand Offer</span></a>
              </li>

            
         </ul>
      </div>
   </div>
   <br>