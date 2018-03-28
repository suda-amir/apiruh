<!DOCTYPE html>
<html lang="en">

<?php
      $page_name_emp = "Company";
      require_once('../includes/header.php');
      require_once('functions.php');
      $emp = get_comp_details();

  ?>
  <link href="../../../vendors/dataTables/datatables.min.css" rel="stylesheet"/>
   <link href="../assets/css/pages/ecommerce.css" rel="stylesheet"/>
       <link href="../assets/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />

    <link href="../assets/vendors/fullcalendar/dist/fullcalendar.print.min.css" rel="stylesheet" media="print" />

    <link href="../assets/vendors/smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

    <link href="../assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet" />

    <link href="../assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" />

   <style type="text/css">
     .product-price{
      font-size: 12px;
     }
   </style>

  <body class="fixed-navbar">
    <div class="page-wrapper">
     <?php require_once('../includes/nav_bar.php'); ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="flexbox-b mb-5">
                    <span class="mr-4 static-badge badge-pink"><i class="la la-calendar-check-o font-36"></i></span>
                    <div>
                        <h5 class="font-strong">Status Report</h5>
                        <div class="text-light">Status Reports for this Month</div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">CALENDAR</div>                                
                            </div>
                            <div class="ibox-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Status Reports</div>
                                <button class="btn btn-primary btn-rounded btn-air my-3" data-toggle="modal" data-target="#new-event-modal">
                                    <span class="btn-icon"><i class="la la-plus"></i>Add Status Report</span>
                                </button>
                            </div>
                            <div class="ibox-body p-3">                             

                                    <div class="alert alert-info alert-dismissable fade show alert-bordered has-icon"><i class="la la-info alert-icon"></i>
                                    <strong>Info!</strong><br>This alert needs your attention, but it's not super important. </div>
                                <div class="alert alert-warning alert-dismissable fade show alert-bordered has-icon"><i class="la la-warning alert-icon"></i>
                                    <strong>Warning!</strong><br>Better check yourself, you're not looking too good. </div>
                                <div class="alert alert-primary alert-dismissable fade show alert-bordered has-icon"><i class="la la-check alert-icon"></i>
                                   <strong>Well done!</strong><br>You successfully read this important alert message.</div>
                                <div class="alert alert-pink alert-dismissable fade show alert-bordered has-icon"><i class="la la-info-circle alert-icon"></i>
                                   <strong>Well done!</strong><br>You successfully read this important alert message.</div>
                               <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th width="40%">Task</th>
                                            <th width="30%" align="center">Project</th>
                                            <th width="10%">Status</th>
                                            <th width="10%" align="center">Hours</th>
                                            <th width="10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td>1</td>
                                            <td><b>Mark</td>                                            
                                            <td><i class="ti-check text-success"></i></td>
                                            <td>4</td>
                                            <td><button class="btn btn-outline-info btn-icon-only btn-circle btn-sm btn-thick" data-toggle="modal" data-target="#new-event-modal" ><i class="la la-binoculars" ></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td><i class="ti-info-alt text-info"></i></td>
                                            <td>3</td>
                                            <td><button class="btn btn-outline-info btn-icon-only btn-circle btn-sm btn-thick" data-toggle="modal" data-target="#new-event-modal"><i class="la la-binoculars"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td><i class="ti-time text-warning"></i></td>
                                            <td>1</td>
                                            <td><button class="btn btn-outline-info btn-icon-only btn-circle btn-sm btn-thick" data-toggle="modal" data-target="#new-event-modal"><i class="la la-binoculars"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><h3><b>Total</b></h3></td>
                                            
                                            <td colspan="2"><h3><b>8</b> hrs</h3></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- New Event Dialog-->
                <div class="modal fade" id="new-event-modal" role="dialog">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content form-horizontal" id="newEventForm" action="javascript:;">
                            <div class="modal-header p-4">
                                <h5 class="modal-title">Add Status Report</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body p-4">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4 form-group mb-4" id="date_1">
                                       <label class="col-form-label text-muted">Date *:</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                            <input class="form-control" type="text" value="04/12/2017">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 form-group mb-4" id="date_1">
                                       <label class="col-form-label text-muted">Start Time *:</label>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                            <input class="form-control" type="text" value="11:30">
                                            <span class="input-group-addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 form-group mb-4" id="date_1">
                                       <label class="col-form-label text-muted">End Time *:</label>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                            <input class="form-control" type="text" value="11:30">
                                            <span class="input-group-addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 form-group mb-4">
                                        <label class="col-form-label text-muted">Project *:</label>
                                        <select class="form-control select2_demo_2">
                                            <optgroup label="Client 1">
                                                <option>Project 1</option>
                                                <option>Project 2</option>
                                            </optgroup>
                                            <optgroup label="Client 2">
                                                <option>Project 1</option>
                                                <option>Project 2</option>
                                                <option>Project 3</option>
                                            </optgroup>
                                            <optgroup label="Client 3">
                                                <option>Project 1</option>
                                                <option>Project 2</option>
                                                <option>Project 3</option>
                                                <option>Project 4</option>
                                                <option>Project 5</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                
                                    <div class="col-sm-6 col-md-3 col-lg-3 form-group mb-4">
                                        <label class="col-form-label text-muted">Work Status *:</label>
                                        <select class="selectpicker show-tick form-control">
                                            <option>Completed</option>
                                            <option>Ongoing</option>
                                            <option>Scheduled</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-lg-3 form-group mb-4">
                                        <label class="col-form-label text-muted">Billed to CLient *:</label>
                                        <div>
                                            <select class="selectpicker show-tick form-control" data-width="200px">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4 form-group mb-4">
                                        <label class="col-form-label text-muted">Nature of Work *:</label>
                                        <select class="form-control select2_demo_2">
                                            <!-- Fetch according to client -->
                                                <option>NOW 1</option>
                                                <option>NOW 2</option>
                                                <option>NOW 3</option>
                                                <option>NOW 4</option>
                                                <option>NOW 5</option>
                                            
                                        </select>
                                    </div>
                                
                                    <div class="col-sm-6 col-md-4 col-lg-4 form-group mb-4">
                                        <label class="col-form-label text-muted">Subject *:</label>
                                        <select class="form-control select2_demo_2">
                                            <!-- Fetch according to client -->
                                                <option>Subject 1</option>
                                                <option>Subject 2</option>
                                                <option>Subject 3</option>
                                                <option>Subject 4</option>
                                                <option>Subject 5</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 form-group mb-4">
                                        <label class="col-form-label text-muted">Expenses - Reimbursement *:</label>
                                        <div>
                                            <select class="selectpicker show-tick form-control" data-width="200px">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4 form-group mb-4">
                                        <label class="col-form-label text-muted">Work Details *:</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 form-group mb-4">
                                        <label class="col-form-label text-muted">Remarks :</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 form-group mb-4">
                                        <label class="col-form-label text-muted">Additional Comments :</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-start bg-primary-50">
                                <button class="btn btn-primary btn-rounded" id="addEventButton" type="submit">Add Status</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End New Event Dialog-->

                <!-- Event Detail Dialog-->
                <div class="modal fade" id="event-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content form-horizontal" id="eventForm" action="javascript:;">
                            <div class="modal-header p-4">
                                <h5 class="modal-title">EDIT EVENT</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body p-4">
                                <div class="form-group mb-4">
                                    <label class="text-muted mb-3">Category</label>
                                    <div>
                                        <label class="radio radio-outline-primary radio-inline check-single" data-toggle="tooltip" data-original-title="General">
                                            <input type="radio" name="category" checked value="fc-event-primary">
                                            <span class="input-span"></span>
                                        </label>
                                        <label class="radio radio-outline-warning radio-inline check-single" data-toggle="tooltip" data-original-title="Payment">
                                            <input type="radio" name="category" value="fc-event-warning">
                                            <span class="input-span"></span>
                                        </label>
                                        <label class="radio radio-outline-success radio-inline check-single" data-toggle="tooltip" data-original-title="Technical">
                                            <input type="radio" name="category" value="fc-event-success">
                                            <span class="input-span"></span>
                                        </label>
                                        <label class="radio radio-outline-danger radio-inline check-single" data-toggle="tooltip" data-original-title="Registration">
                                            <input type="radio" name="category" value="fc-event-danger">
                                            <span class="input-span"></span>
                                        </label>
                                        <label class="radio radio-outline-info radio-inline check-single" data-toggle="tooltip" data-original-title="Security">
                                            <input type="radio" name="category" value="fc-event-info">
                                            <span class="input-span"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <input class="form-control form-control-line" id="event-title" type="text" name="title" placeholder="Title">
                                </div>
                                <div class="row">
                                    <div class="col-6 form-group mb-4">
                                        <label class="col-form-label text-muted">Start:</label>
                                        <div class="input-group-icon input-group-icon-right">
                                            <span class="input-icon input-icon-right"><i class="fa fa-calendar-check-o"></i></span>
                                            <input class="form-control form-control-line datepicker date" id="event-start" type="text" name="start" value="">
                                        </div>
                                    </div>
                                    <div class="col-6 form-group mb-4">
                                        <label class="col-form-label text-muted">End:</label>
                                        <div class="input-group-icon input-group-icon-right">
                                            <span class="input-icon input-icon-right"><i class="fa fa-calendar-check-o"></i></span>
                                            <input class="form-control form-control-line datepicker date" id="event-end" type="text" name="end" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4 pt-3">
                                    <label class="ui-switch switch-icon mr-3 mb-0">
                                        <input id="event-allDay" type="checkbox">
                                        <span></span>
                                    </label>All Day</div>
                            </div>
                            <div class="modal-footer justify-content-between bg-primary-50">
                                <button class="btn btn-primary btn-rounded" id="editEventButton" type="submit">Submit</button>
                                <a class="text-danger" id="deleteEventButton" data-dismiss="modal"><i class="la la-trash font-20"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Event Detail Dialog-->
            </div>
            <!-- END PAGE CONTENT-->
             <?php require_once('../includes/footer.php'); ?>
        </div>
    </div>
    <!-- START SEARCH PANEL-->
    <form class="search-top-bar" action="search.html">
        <input class="form-control search-input" type="text" placeholder="Search...">
        <button class="reset input-search-icon"><i class="ti-search"></i></button>
        <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
    
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    
   
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/vendors/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
    <script src="../assets/vendors/toastr/toastr.min.js"></script>
    <script src="../assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="../assets/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../assets/vendors/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <!-- CORE SCRIPTS-->
    <script src="../assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="../assets/js/scripts/calendar-demo.js"></script>
    <script src="../assets/js/scripts/form-plugins.js"></script>

    <!-- PAGE LEVEL PLUGINS-->
    <script src="../assets/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>
   
   
</body>

</html>