<?php 
    $this->load->view('student/header/header');
   $this->load->view('student/header/menu');
?>

 <div class="header-spacer"></div>
    <div class="conty"  style="background-color:#fff;">
        <div class="full-chat-w">
            <div class="full-chat-i">
                <div class="full-chat-left support-tickets">          
				    <div class="tab-content">
                        <div class="os-tabs-w bg-white">
                            <ul class="navs navs-tabs upper centered">
                                <li class="navs-item">
                                    <a class="navs-links active" href="<?=base_url()?>student/chat" style="color:#000"><i class="os-icon picons-thin-icon-thin-0306_chat_message_discussion_bubble_conversation" style="color:#047bf8"></i><span><?=get_phrase('chats')?></span></a>
                                </li>
                                <li class="navs-item">
                                    <a class="navs-links " href="" style="color:#000"><i class="os-icon picons-thin-icon-thin-0001_compose_write_pencil_new" style="color:#047bf8"></i><span><?=get_phrase('write')?></span></a>
                                </li>
                                <li class="navs-item">
                                    <a class="navs-links" href="" style="color:#000"><i class="os-icon picons-thin-icon-thin-0719_group_users_circle" style="color:#047bf8"></i><span><?=get_phrase('groups')?></span></a>
                                </li>
                            </ul>
                        </div>
          				<div class="tab-pane active" id="chats">
                    		<div class="user-list">
                    			<a href="">
                      				<div class="user-w box ">
                        				<div class="avatar with-status status-green">
	                          				<img alt="" src="<?=base_url();?>backed/uploads/user.jpg">
                        				</div>
                        				<div class="user-info">
                        					<div class="user-date">21 May. 04:45AM</div>
                        					<div class="user-name" title="Harry Paul">Harry Paul
                        					</div>
                          					<div class="last-message">
                                            You: hi...                                       
                                           </div>
                          					<div class="last-message"><a class="badge badge-secondary" href="" style="color:white">Student</a>
                          					</div>
                        				</div>
                        			</div>
                      			</a>
                    	   </div>
          				</div>	
          				
          				<div class="tab-pane active" id="chats">
                    		<div class="user-list">
                    			<a href="">
                      				<div class="user-w box ">
                        				<div class="avatar with-status status-green">
	                          				<img alt="" src="<?=base_url();?>backed/uploads/user.jpg">
                        				</div>
                        				<div class="user-info">
                        					<div class="user-date">21 May. 04:45AM</div>
                        					<div class="user-name" title="Harry Paul">Harry Paul
                        					</div>
                          					<div class="last-message">
                                            You: hi...                                       
                                           </div>
                          					<div class="last-message"><a class="badge badge-secondary" href="" style="color:white">Student</a>
                          					</div>
                        				</div>
                        			</div>
                      			</a>
                    	   </div>
          				</div>	
                  	</div>
          		</div>

          	<div class="full-chat-middle">
		       <div class="">
		        <div class="">
					<div class="centeredu">
						<img src="<?=base_url();?>backed/uploads/mensajeseducaby.svg" style="margin-top:-35px; width:100%;">	<br>			   
					    <a href="" class="msjsbtn mt"><span>Create message</span><i class="picons-thin-icon-thin-0317_send_post_paper_plane"></i></a>				   
		        	</div>                        
		      	</div>
			</div>
           </div>  

         </div>
        </div>
    </div>

 
    



<?php 
    $this->load->view('student/header/footer');
?>
