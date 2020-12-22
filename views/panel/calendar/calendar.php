<?php 
    $this->load->view('panel/header/header');
   $this->load->view('panel/header/menu');
?>




   <div class="header-spacer"></div>
      <div class="conty"><br>
        <div class="container-fluid">
         <div class="layout-w">
          <div class="content-w">
            <div class="container-fluid"> 
              <div class="element-box">
                <h3 class="form-header">Calendar events</h3><br>
                <div class="table-responsive">
                  <div id="calendar" class="col-centered"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="display-type"></div>
      </div>
      <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEdit" aria-hidden="true">
        <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
          <div class="modal-content">
            <form method="POST" action="#">
              <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
              <div class="modal-header">
                <h6 class="title">Edit event</h6>
              </div>
              <div class="modal-body">
                <div class="form-group with-button">
                  <input class="form-control" name="title" placeholder="Title" type="text" id="title" required="">
                </div>
                <div class="form-group label-floating is-select">
                  <label class="control-label">Subject color</label>
                  <div class="select">
                    <select name="color" id="color" required="">
                      <option value="">Select</option>
                      <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                      <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                      <option style="color:#008000;" value="#008000">&#9724; Green</option>             
                      <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                      <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                      <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                      <option style="color:#000;" value="#000">&#9724; Black</option>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="id" class="form-control" id="id">
                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label class="text-danger"><input type="checkbox"  name="delete"> Delete</label>
                    </div>
                  </div>
                </div>
              <button type="submit" class="btn btn-rounded btn-success btn-lg full-width">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="ModalAdd" aria-hidden="true">
      <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
        <div class="modal-content">
        <form method="POST" action="#">
          <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
          <div class="modal-header">
            <h6 class="title">Add event</h6>
          </div>
          <div class="modal-body">
            <div class="form-group with-button">
                <input class="form-control" name="title" placeholder="Title" type="text" id="title" required="">
            </div>
            <div class="form-group label-floating is-select">
              <label class="control-label">Subject color</label>
              <div class="select">
                <select name="color" id="color" required="">
                  <option value="">Select</option>
                  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                  <option style="color:#008000;" value="#008000">&#9724; Green</option>             
                  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                  <option style="color:#000;" value="#000">&#9724; Black</option>
                </select>
              </div>
            </div>
            <div class="form-group with-button">
                <label>Start Date</label>
                <input class="form-control" name="start" value="Start date" type="text" id="start" readonly="" required="">
            </div>
            <div class="form-group with-button">
                <label>End Date</label>
                <input class="form-control" name="end" value="End date" type="text" id="end" readonly="" required="">
            </div>
            <button type="submit" class="btn btn-rounded btn-success btn-lg full-width">Add</button>
          </div>
          </form>
        </div>
      </div>
    </div>
<script>
    $(document).ready(function() 
    {   
        $('#calendar').fullCalendar({
            header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
            },
            defaultDate: $('#calendar').fullCalendar('today'),
            editable: true,
            defaultView: 'month',
            contentHeight: '100%',
            eventLimit: true,
            selectable: true,
            selectHelper: true,
            select: function(start, end) {        
            $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd').modal('show');
            },
            eventAfterAllRender: function(view) {
                        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                            $('#calendar').fullCalendar('changeView', 'agendaDay');
                        }
                }, 
        eventRender: function(event, element) 
        {
          element.bind('dblclick', function() {
            $('#ModalEdit #id').val(event.id);
            $('#ModalEdit #title').val(event.title);
            $('#ModalEdit #color').val(event.color);
            $('#ModalEdit').modal('show');
          });
        },
        eventDrop: function(event, delta, revertFunc) {
          edit(event);
        },
        eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
          edit(event);
        },
        events: [
                  {
            id: '1',
            title: 'Event 1',
            start: '2020-05-21',
            end: '2020-05-22',
            color: '#40E0D0',
          },
                ]
      });
      function edit(event)
      {
        start = event.start.format('YYYY-MM-DD HH:mm:ss');
        if(event.end){
          end = event.end.format('YYYY-MM-DD HH:mm:ss');
        }else{
          end = start;
        }
        id =  event.id;     
        Event = [];
        Event[0] = id;
        Event[1] = start;
        Event[2] = end;     
        $.ajax({
        url: '#',
        type: "POST",
        data: {Event:Event},
        success: function(rep) {
            if(rep == 'OK'){
              const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 8000
                            });
                            Toast.fire({
                            type: 'success',
                            title: 'Information updated successfully'
                        })
            }else{
              alert('Error update'); 
            }
          }
        });
      }
    });
  </script>
  </div>
</div>      </div>
      <div class="display-type"></div>
    </div>
   <script type="text/javascript">
    function showAjaxModal(url)
    {
        jQuery('#exampleModal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="http://localhost/Dropbox/visfforoom.com/assets/images/preloader.gif" /></div>');
        jQuery('#exampleModal').modal('show', {backdrop: 'true'});
        $.ajax({
            url: url,
            success: function(response)
            {
                jQuery('#exampleModal .modal-body').html(response);
            }
        });
    }
</script>
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="crearadmin" aria-hidden="true">
  <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
    <div class="modal-content" style="margin-top:50px;">
      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
      <div class="modal-body">
        <div class="modal-header" style="background-color:#00579c">
            <h6 class="title" style="color:white">VISFFOROOM</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function confirm_modal(delete_url)
    {
        jQuery('#modal_delete').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>
<?php 
    $this->load->view('panel/header/footer');
?>