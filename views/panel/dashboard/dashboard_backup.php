
<?php 
    $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>

 

<!-- code start  -->

 <div class="header-spacer"></div>
    <div class="content-i">
      <div class="content-box">
        <div class="conty">
          <div class="row">        
            <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
              <div class="ui-block paddingtel">                                
                <div class="news-feed-form">
                  <div class="tab-content">
                    <div class="edu-wall-content ng-scope" id="new_post">
                      <div class="tab-pane active show">


                        <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <div class="author-thumb" style="padding-right:15px;">
                          <img src="<?=base_url()?>backed/uploads/user.jpg" style="width:45px;">
                        </div>
                        <div class="form-group with-icon label-floating is-empty" style="padding-left:10px;">
                          <textarea onkeyup="textAreaAdjust(this)" style="overflow:hidden" class="form-control" placeholder="Hi Super What do you want to publish today?" name="description" required=""></textarea>
                          <span class="material-input"></span>
                        </div>
                        <div class="form-group" style="margin-bottom:-15px;">
                          <input type="file" name="userfile" id="file-3" class="inputfile inputfile-3" style="display:none">
                          <label style="font-size:15px;" for="file-3"><i class="os-icon picons-thin-icon-thin-0042_attachment"></i> <span>Upload image...</span></label>
                        </div>
                        <div class="add-options-message btm-post edupostfoot edu-wall-actions" style="padding:10px 5px;">
                          <a href="javascript:void(0);" class="options-message" onclick="post()" data-toggle="tooltip" data-placement="top"   data-original-title="News">
                            <i class="os-icon picons-thin-icon-thin-0032_flag"></i>
                          </a>
                          <a href="javascript:void(0);" class="options-message" onclick="poll()" data-toggle="tooltip" data-placement="top"   data-original-title="Polls">
                            <i class="os-icon picons-thin-icon-thin-0385_graph_pie_chart_statistics"></i>
                          </a>
                          <button class="btn btn-rounded btn-success" style="float:right"><i class="picons-thin-icon-thin-0317_send_post_paper_plane" style="font-size:12px"></i> Publish</button>
                        </div>        
                        </form>                      </div>                          
                    </div>
                    <script>
                        function textAreaAdjust(o) {
                            o.style.height = "1px";
                            o.style.height = (25+o.scrollHeight)+"px";
                        }
                    </script>
                    <div class="edu-wall-content ng-scope" id="new_poll" style="display: none;"> 
                    <form action="admin/polls/create/" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      <div class="tab-pane active show"><br>
                        <div class="col-sm-12"><h5 class="form-header">Create poll</h5></div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <div class="form-group label-floating">
                              <label class="control-label">Question</label>
                              <input class="form-control" type="text" name="question">
                              <span class="material-input"></span>
                              <span class="material-input"></span>
                            </div>
                          </div>
                        </div><br>
                        <div id="bulk_add_form">
                          <div id="student_entry">
                            <div class="form-group">
                              <div class="col-sm-12">
                                <label class="col-form-label" for="">Options</label>
                                <div class="input-group">
                                  <input class="form-control" name="options[]" placeholder="Options" type="text">
                                  <button class="btn btn-sm btn-danger bulk text-center" href="javascript:void(0);" onclick="deleteParentElement(this)"><i class="picons-thin-icon-thin-0056_bin_trash_recycle_delete_garbage_empty"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="student_entry_append"></div>
                        </div>  <br>
                        <center><a href="javascript:void(0);" class="btn btn-rounded btn-primary btn-sm" onclick="append_student_entry()">+ More options</a></center><br>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <div class="form-group label-floating is-select">
                              <label class="control-label">Users</label>
                              <div class="select">
                                <select name="user" id="slct">
                                  <option value="">Select</option>
                                  <option value="all">All</option>
                                  <option value="admin">Admins</option>
                                  <option value="student">Students</option>
                                  <option value="parent">Parents</option>
                                  <option value="teacher">Teachers</option>    
                                </select>
                              </div>
                            </div>
                          </div>              
                        </div><br>
                    </form>                        <div class="add-options-message btm-post edupostfoot edu-wall-actions" style="padding:10px 5px;">
                          <a href="javascript:void(0);" class="options-message" onclick="post()" data-toggle="tooltip" data-placement="top"   data-original-title="News">
                            <i class="os-icon picons-thin-icon-thin-0032_flag"></i>
                          </a>
                          <a href="javascript:void(0);" class="options-message" onclick="poll()" data-toggle="tooltip" data-placement="top"   data-original-title="Poll">
                            <i class="os-icon picons-thin-icon-thin-0385_graph_pie_chart_statistics"></i>
                          </a>
                          <button class="btn btn-rounded btn-success" style="float:right"><i class="picons-thin-icon-thin-0317_send_post_paper_plane" style="font-size:12px"></i> Publish</button>
                        </div>        
                      </div>    
                    </form>                  </div> 
                </div>
              </div>                
            </div>
            <div id="panel">
                                      <div class="ui-block paddingtel">    
                  
                <article class="hentry post has-post-thumbnail thumb-full-width">
                  <div class="post__author author vcard inline-items">
                    <img src="<?=base_url()?>backed/uploads/user.jpg">                
                    <div class="author-date">
                      <a class="h6 post__author-name fn" href="javascript:void(0);">admin admin</a>
                      <div class="post__date">
                        <time class="published" style="color: #0084ff;">21, May 19:57 PM</time>
                      </div>
                    </div>                
                    <div class="more">
                      <i class="icon-options"></i>                                
                      <ul class="more-dropdown">
                        <li><a href="javascript:void(0);" onclick="showAjaxModal('modal/popup/modal_wall/89a4d7082b');">Edit</a></li>
                        <li><a onClick="return confirm('Do you want to delete the information?')"  href="admin/news/delete/89a4d7082b">Delete</a></li>
                      </ul>
                    </div>
                  </div><hr>
                  <p>dsfasdfasdf</p>
                                                          <div class="control-block-button post-control-button">
                      <a href="javascript:void(0);" class="btn btn-control" style="background-color:#001b3d; color:#fff;" data-toggle="tooltip" data-placement="top" data-original-title="News">
                        <i class="picons-thin-icon-thin-0032_flag"></i>
                      </a>
                    </div>
                  </article>
                </div>
                                                                                    <form action="admin/polls/response/" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  
                              </form>                                                      <div class="ui-block paddingtel">    
                  
                <article class="hentry post has-post-thumbnail thumb-full-width">
                  <div class="post__author author vcard inline-items">
                    <img src="<?=base_url()?>backed/uploads/user.jpg">                
                    <div class="author-date">
                      <a class="h6 post__author-name fn" href="javascript:void(0);">Super Admin</a>
                      <div class="post__date">
                        <time class="published" style="color: #0084ff;">01, May 20:57 PM</time>
                      </div>
                    </div>                
                    <div class="more">
                      <i class="icon-options"></i>                                
                      <ul class="more-dropdown">
                        <li><a href="javascript:void(0);" onclick="showAjaxModal('modal/popup/modal_wall/f99294cdec');">Edit</a></li>
                        <li><a onClick="return confirm('Do you want to delete the information?')"  href="admin/news/delete/f99294cdec">Delete</a></li>
                      </ul>
                    </div>
                  </div><hr>
                  <p>Best learning practice for java programme</p>
                                                          <div class="post-thumb">
                      <img src="<?=base_url()?>backed/uploads/news_images/f99294cdec.jpg">
                    </div>
                                        <div class="control-block-button post-control-button">
                      <a href="javascript:void(0);" class="btn btn-control" style="background-color:#001b3d; color:#fff;" data-toggle="tooltip" data-placement="top" data-original-title="News">
                        <i class="picons-thin-icon-thin-0032_flag"></i>
                      </a>
                    </div>
                  </article>
                </div>
                                                                    <div class="ui-block paddingtel">    
                  
                <article class="hentry post has-post-thumbnail thumb-full-width">
                  <div class="post__author author vcard inline-items">
                    <img src="<?=base_url()?>backed/uploads/user.jpg">                
                    <div class="author-date">
                      <a class="h6 post__author-name fn" href="javascript:void(0);">Super Admin</a>
                      <div class="post__date">
                        <time class="published" style="color: #0084ff;">01, May 20:57 PM</time>
                      </div>
                    </div>                
                    <div class="more">
                      <i class="icon-options"></i>                                
                      <ul class="more-dropdown">
                        <li><a href="javascript:void(0);" onclick="showAjaxModal('modal/popup/modal_wall/998ba8f97a');">Edit</a></li>
                        <li><a onClick="return confirm('Do you want to delete the information?')"  href="admin/news/delete/998ba8f97a">Delete</a></li>
                      </ul>
                    </div>
                  </div><hr>
                  <p>Best learning practice for java programme</p>
                                                          <div class="post-thumb">
                      <img src="<?=base_url()?>backed/uploads/news_images/998ba8f97a.jpg">
                    </div>
                                        <div class="control-block-button post-control-button">
                      <a href="javascript:void(0);" class="btn btn-control" style="background-color:#001b3d; color:#fff;" data-toggle="tooltip" data-placement="top" data-original-title="News">
                        <i class="picons-thin-icon-thin-0032_flag"></i>
                      </a>
                    </div>
                  </article>
                </div>
                                                                    <div class="ui-block paddingtel">    
                  
                <article class="hentry post has-post-thumbnail thumb-full-width">
                  <div class="post__author author vcard inline-items">
                    <img src="<?=base_url()?>backed/uploads/user.jpg">                
                    <div class="author-date">
                      <a class="h6 post__author-name fn" href="javascript:void(0);">Super Admin</a>
                      <div class="post__date">
                        <time class="published" style="color: #0084ff;">01, May 20:57 PM</time>
                      </div>
                    </div>                
                    <div class="more">
                      <i class="icon-options"></i>                                
                      <ul class="more-dropdown">
                        <li><a href="javascript:void(0);" onclick="showAjaxModal('modal/popup/modal_wall/bc79ee8f37');">Edit</a></li>
                        <li><a onClick="return confirm('Do you want to delete the information?')"  href="admin/news/delete/bc79ee8f37">Delete</a></li>
                      </ul>
                    </div>
                  </div><hr>
                  <p>Best learning practice for java programme</p>
                                                          <div class="post-thumb">
                      <img src="<?=base_url()?>backed/uploads/news_images/bc79ee8f37.jpg">
                    </div>
                                        <div class="control-block-button post-control-button">
                      <a href="javascript:void(0);" class="btn btn-control" style="background-color:#001b3d; color:#fff;" data-toggle="tooltip" data-placement="top" data-original-title="News">
                        <i class="picons-thin-icon-thin-0032_flag"></i>
                      </a>
                    </div>
                  </article>
                </div>
                                                      </div>
          </main>
          <div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">
            <div class="crumina-sticky-sidebar">
              <div class="sidebar__inner">
                <div class="ui-block paddingtel">
                  <div class="ui-block-content">
                    <div class="widget w-about">
                      <a href="javascript:void(0);" class="logo"><img src="<?=base_url()?>backed/uploads/profile-pic-l.jpg" title="VISFFOROOM"></a>
                      <ul class="socials">
                        <li><a href="https://facebook.com/google"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/google"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://youtube.com/google"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="https://instagram.com/google"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="ui-block paddingtel">
				    <div class="widget w-create-fav-page">
    					<div class="icons-block" style="margin-bottom: 10px;">
						    <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate text-white" style="font-size:25px;"></i>
					    </div>
					    <div class="content">
						    <h3 class="title">Welcome to your Admin dashboard.</h3>
					    </div>
				    </div>
			    </div>
                <div class="ui-block paddingtel" >
                  <div class="pipeline white lined-success" >
                    <div class="element-wrapper" >
                      <h6 class="element-header">Online users</h6>
                                
                        <div class="full-ch at-w">
                          <div class="chat-content-w min">
                            <div class="chat-content min">  
                              <div class="users-list-w">
                                                              <div class="user-w with-status min status-green">
                                  <div class="user-avatar-w min">
                                    <div class="user-avatar" >
                                      <img alt="" src="<?=base_url()?>backed/uploads/user.jpg">
                                    </div>
                                  </div>
                                  <div class="user-name">
                                    <h6 class="user-title min">Super Admin</h6>
                                    <div class="user-role min">lass="badge badge-primary">Admin</span> 


                                    </div>
                                  </div>            
                                </div>
                                 </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ui-block paddingtel">
                    <div class="ui-block-title">
                    <h6 class="title">Accounting</h6>
                  </div>
                  <div class="ui-block-content">
                    <canvas id="myChart" width="400" height="400"></canvas>
                  </div>
                </div>
                <div class="header-spacer"></div>
              </div>
            </div>
          </div>
          <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="crumina-sticky-sidebar">
              <div class="sidebar__inner">
                <div class="ui-block paddingtel">
                  <div class="today-events calendar ">
                    <div class="today-events-thumb">
                      <div class="date">
                        <div class="day-number"><?=date('d')?></div>
                        <div class="day-week"><?=date('l')?></div>
                        <div class="month-year" style="color:#FFF"><?=date('M, Y')?></div>
                      </div>
                    </div>
                    <div class="list">
                      <div class="control-block-button">
                        <a href="<?=base_url()?>panel/calendar" class="btn btn-control bg-breez" style="background-color: #22b9ff;">
                          <i class="fa fa-plus text-white"></i>
                        </a>
                      </div>
                      <div id="accordion-1" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="2">
                        <center><div style="padding-bottom : 75px;padding-top :75px;"><p>There are no events today</p><img src="<?=base_url()?>backed/uploads/calendar.png" width="20%"/></div></center>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ui-block paddingtel">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
	                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	                      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
	                      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
	                      <li data-target="#myCarousel" data-slide-to="3" class=""></li>
	                      <li data-target="#myCarousel" data-slide-to="4" class=""></li>
	                      <li data-target="#myCarousel" data-slide-to="5" class=""></li>
	                      <li data-target="#myCarousel" data-slide-to="6" class=""></li>
	                   </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                            <div class="widget w-birthday-alert">
                              <div class="icons-block">
                                <i class="picons-thin-icon-thin-0447_gift_wrapping"></i>
                              </div>
                              <div class="content">
                                <div class="author-thumb">
                                  <img src="<?=base_url()?>backed/uploads/teacher_image/bbc66ce881b6aaf603b0f4cb9aa6352cteam-1.jpg" class="bg-white">
                                </div>
                                <span>This month is the birthday of</span>
                                <a href="#" class="h4 title">Devi lal</a>
                                <a href="admin/birthdays/" class="text-white"><p>View all birthdays</p></a>
                              </div>
                            </div>
                          </div>
                            <div class="item ">
                            <div class="widget w-birthday-alert">
                              <div class="icons-block">
                                <i class="picons-thin-icon-thin-0447_gift_wrapping"></i>
                              </div>
                              <div class="content">
                                <div class="author-thumb">
                                  <img src="<?=base_url()?>backed/uploads/teacher_image/563fe458ac04e7b9fa3535ff4577d3d1team-2.jpg" class="bg-white">
                                </div>
                                <span>This month is the birthday of</span>
                                <a href="#" class="h4 title">Jesus Alexander</a>
                                <a href="admin/birthdays/" class="text-white"><p>View all birthdays</p></a>
                              </div>
                            </div>
                          </div>
                            <div class="item ">
                            <div class="widget w-birthday-alert">
                              <div class="icons-block">
                                <i class="picons-thin-icon-thin-0447_gift_wrapping"></i>
                              </div>
                              <div class="content">
                                <div class="author-thumb">
                                  <img src="<?=base_url()?>backed/uploads/teacher_image/609be2303faa9a112076d2522244f8f3team-3.jpg" class="bg-white">
                                </div>
                                <span>This month is the birthday of</span>
                                <a href="#" class="h4 title">Silvia Escobar</a>
                                <a href="admin/birthdays/" class="text-white"><p>View all birthdays</p></a>
                              </div>
                            </div>
                          </div>
                          <div class="item ">
                            <div class="widget w-birthday-alert">
                              <div class="icons-block">
                                <i class="picons-thin-icon-thin-0447_gift_wrapping"></i>
                              </div>
                              <div class="content">
                                <div class="author-thumb">
                                  <img src="<?=base_url()?>backed/uploads/teacher_image/6fd521f04bde3705cb8b99223bab8645team-4.jpg" class="bg-white">
                                </div>
                                <span>This month is the birthday of</span>
                                <a href="#" class="h4 title">Marcos Hernandez</a>
                                <a href="admin/birthdays/" class="text-white"><p>View all birthdays</p></a>
                              </div>
                            </div>
                          </div>
                           <div class="item ">
                            <div class="widget w-birthday-alert">
                              <div class="icons-block">
                                <i class="picons-thin-icon-thin-0447_gift_wrapping"></i>
                              </div>
                              <div class="content">
                                <div class="author-thumb">
                                  <img src="<?=base_url()?>backed/uploads/user.jpg" class="bg-white">
                                </div>
                                <span>This month is the birthday of</span>
                                <a href="#" class="h4 title">teacher1 teacher1</a>
                                <a href="admin/birthdays/" class="text-white"><p>View all birthdays</p></a>
                              </div>
                            </div>
                          </div>
                          <div class="item ">
                            <div class="widget w-birthday-alert">
                              <div class="icons-block">
                                <i class="picons-thin-icon-thin-0447_gift_wrapping"></i>
                              </div>
                              <div class="content">
                                <div class="author-thumb">
                                  <img src="<?=base_url()?>backed/uploads/user.jpg" class="bg-white">
                                </div>
                                <span>This month is the birthday of</span>
                                <a href="#" class="h4 title">Harry Paul</a>
                                <a href="admin/birthdays/" class="text-white"><p>View all birthdays</p></a>
                              </div>
                            </div>
                          </div>
                          <div class="item ">
                            <div class="widget w-birthday-alert">
                              <div class="icons-block">
                                <i class="picons-thin-icon-thin-0447_gift_wrapping"></i>
                              </div>
                              <div class="content">
                                <div class="author-thumb">
                                  <img src="<?=base_url()?>backed/uploads/user.jpg" class="bg-white">
                                </div>
                                <span>This month is the birthday of</span>
                                <a href="#" class="h4 title">Student Student</a>
                                <a href="admin/birthdays/" class="text-white"><p>View all birthdays</p></a>
                              </div>
                            </div>
                          </div>
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
                      </div>
                    </div>
                  </div>
                  <div class="ui-block paddingtel">
                    <div class="ui-block-title"><h6 class="title">Absent</h6></div>
                  <center>
                      <div style="padding-bottom : 75px;padding-top :75px;"><p>No students absent</p><img src="<?=base_url()?>backed/uploads/plan.png" width="20%"></div>
                  </center>
                    <div class="header-spacer"></div>
                  </div><br>
                </div>
              </div> 
            </div>
          </div>
        </div>
        <a class="back-to-top" href="javascript:void(0);">
          <img src="<?=base_url()?>backed/style/olapp/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
        </a>
      </div>
    </div>
</div>


<?php 
    $this->load->view('panel/header/footer');
?>
