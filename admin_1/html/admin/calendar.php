<!DOCTYPE html>
<html>
  
<?php
      $page_name_emp = "Calendar";
      require_once('../includes/header.php');
  ?>  
  <body class="fixed-navbar">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
          <h1 class="page-title">Calendar</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Calendar</li>
          </ol>
        </div>
        <div class="page-content fade-in-up">
          <div class="alert" style="padding-left: 0px; margin-bottom: 0px">
            <a class="btn btn-info" href="#myModal2" data-toggle="modal"><i class="fa fa-plus"></i> Add Event</a></p>
          </div>
           
          <div class="page-content fade-in-up" style="padding-top: 0px; margin-top: 0px">
          <div class="ibox">
            <div class="ibox-body">
              <div id="calendar"></div>
              <div class="modal fade" id="new-event-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <form class="modal-content form-horizontal" action="javascript:;">
                        <div class="modal-header bg-silver-100">
                          <h4 class="modal-title">New Event</h4>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-10">
                              <input class="form-control" id="new-event-title" type="text">
                            </div>
                          </div>
                         <div class="form-group row" id="date_1">
                            <label class="col-sm-2 col-form-label">Start:</label>
                            <div class="col-sm-10">
                              <div class="input-group datepicker date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="new-event-start" type="text" value="">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">End:</label>
                            <div class="col-sm-10">
                              <div class="input-group datepicker date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="new-event-end" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Color:</label>
                            <div class="col-sm-10">
                              <select class="form-control" id="new-event-color">
                                <option value="bg-blue">Blue</option>
                                <option value="bg-red">Red</option>
                                <option value="bg-green">Green</option>
                                <option value="bg-orange">Orange</option>
                                <option value="bg-silver">Silver</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                              <label class="ui-checkbox ui-checkbox-info">
                                <input id="new-event-allDay" type="checkbox"><span class="input-span"></span>All Day
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                          <button class="btn btn-info" id="addEventButton" type="submit">Add event</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- End New Event Dialog-->
                  <!-- Event Detail Dialog-->
                  <div class="modal fade" id="event-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <form class="modal-content form-horizontal" action="javascript:;">
                        <div class="modal-header bg-silver-100">
                          <h4 class="modal-title">Edit Event</h4>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-10">
                              <input class="form-control" id="event-title" type="text">
                            </div>
                          </div>
                           <div class="form-group row" id="date_1">
                            <label class="col-sm-2 col-form-label">Start:</label>
                            <div class="col-sm-10">
                              <div class="input-group datepicker date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="event-start" type="text" value="">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">End:</label>
                            <div class="col-sm-10">
                              <div class="input-group datepicker date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="event-end" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Color:</label>
                            <div class="col-sm-10">
                              <select class="form-control" id="event-color">
                                <option value="bg-blue">Blue</option>
                                <option value="bg-red">Red</option>
                                <option value="bg-green">Green</option>
                                <option value="bg-orange">Orange</option>
                                <option value="bg-silver">Silver</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                              <label class="ui-checkbox ui-checkbox-info">
                                <input id="event-allDay" type="checkbox"><span class="input-span"></span>All Day
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-info" id="editEventButton" type="submit">Save</button>
                          <button class="btn btn-danger" id="deleteEventButton" type="button" data-dismiss="modal">Delete</button>
                          <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                  </div>
            </div>
          </div>
        </div>
        </div>
        <!-- END PAGE CONTENT-->
                <?php require_once('../includes/footer.php'); ?>
      </div>
    </div>

    <!-- START SEARCH PANEL-->
    <form class="search-top-bar" action="search.html">
      <input class="search-input" type="text" placeholder="Search...">
      <button class="reset input-search-icon"><i class="fa fa-search"></i></button>
      <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
    
   
   
    <div class="modal fade" id="session-dialog">
      <div class="modal-dialog" style="width:400px;" role="document">
        <div class="modal-content">
          <div class="modal-header bg-silver-100">
            <h4 class="modal-title">AUTOLOGOUT</h4>
            <button class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center m-b-20"><i class="ti-lock" style="font-size:90px"></i></div>
            <p class="text-center m-b-20">You are about to be signed out due to inactivity.</p>
            <div id="timeout-reset-box" style="display:none;">
              <div class="form-group"><button class="btn btn-danger btn-block" id='timeout-reset'>Deactivate</button></div>
            </div>
            <div id="timeout-activate-box">
              <div class="form-group">
                <label>Minutes</label>
                <input class="form-control" type="text" placeholder="Minutes" id="timeout-count">
              </div>
              <div class="form-group"><button class="btn btn-success btn-block" id='timeout-activate'>Activate</button></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Session-timeout modal-->
    <!-- CORE PLUGINS-->
        <?php require_once('../includes/scripts.php'); ?>
       <script src="../assets/js/scripts/calendar-demo.js" type="text/javascript"></script>
  </body>
</html>