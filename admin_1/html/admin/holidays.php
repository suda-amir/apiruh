<!DOCTYPE html>
<html>
  
<?php
      $page_name = "Admin";
      $page_name_emp = "Holidays";
      require_once('../includes/header.php');
  ?>
  <link href="../../../vendors/dataTables/datatables.min.css" rel="stylesheet"/>


  <body class="fixed-navbar">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
          <h1 class="page-title">Holidays</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Holidays</li>
          </ol>
        </div>
        <div class="page-content fade-in-up">
          <div class="alert" style="padding-left: 0px; margin-bottom: 0px">
            <a class="btn btn-info" href="#myModal2" data-toggle="modal"><i class="fa fa-plus"></i> Add Holiday</a></p>
          </div>
           <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <form class="modal-content form-horizontal" action="javascript:;">
                        <div class="modal-header bg-silver-100">
                          <h4 class="modal-title">Holiday</h4>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-10">
                              <input class="form-control" id="new-event-title" name="title" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Type:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="type">
                                <option value="Public Holiday">Public Holiday</option>
                                <option value="Admin Defined">Admin Defined</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row" id="date_1">
                            <label class="col-sm-2 col-form-label">Start:</label>
                            <div class="col-sm-10">
                              <div class="input-group date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="" type="text" value="" name="start">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row" id="date_2">
                            <label class="col-sm-2 col-form-label">End:</label>
                            <div class="col-sm-10">
                              <div class="input-group date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="" type="text" value="" name="end">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Reason</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" rows="4" name="reason"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                          <button class="btn btn-info" id="addEventButton" type="submit">Add</button>
                        </div>
                      </form>
                    </div>
                  </div>
          <div class="page-content fade-in-up" style="padding-top: 0px; margin-top: 0px">
          <div class="ibox">
            <div class="ibox-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="example-table">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Day</th>
                      <th>Month</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td>
                         <a href="#edit_leaves" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-pencil font-14"></i></button></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="modal fade" id="edit_leaves" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <form class="modal-content form-horizontal" action="javascript:;">
                        <div class="modal-header bg-silver-100">
                          <h4 class="modal-title">Update Holiday</h4>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-10">
                              <input class="form-control" id="new-event-title" name="title" type="text">
                            </div>
                          </div>
                          <div class="form-group row" id="date_3">
                            <label class="col-sm-2 col-form-label">Start:</label>
                            <div class="col-sm-10">
                              <div class="input-group date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="" type="text" value="" name="start">
                              </div>
                            </div>
                          </div>
                         <div class="form-group row" id="date_4">
                            <label class="col-sm-2 col-form-label">End:</label>
                            <div class="col-sm-10">
                              <div class="input-group date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="" type="text" value="" name="end">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Reason</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" rows="4" name="reason"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-danger" type="button" style="float: left;">Delete</button>
                          <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>

                          <button class="btn btn-info" type="button" type="submit">Update</button>                         
                        </div>
                      </form>
                    </div>
                  </div>
        <!-- END PAGE CONTENT-->
        <footer class="page-footer">
          <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
          <div class="pull-right"><a class="link-blue" href="javascript:;"><i class="fa fa-shopping-cart m-r-5"></i>Buy now</a></div>2017 © <b>Adminca</b> - Save your time, choose the best
        </footer>
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
        <script src="../../../vendors/dataTables/datatables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#date_1 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });
            $('#date_2 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });
            $('#date_3 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });
            $('#date_4 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });

          });
        </script>
        <script type="text/javascript">
      $(function(){
          $('#example-table').DataTable({
              pageLength: 10,
              fixedHeader: true,
              responsive: true,
              dom: '<"html5buttons"B>lTfgitp',
              buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'print',
                'colvis'
              ],
              language: {
                buttons: {
                  colvis: '<i class="ti-view-grid"></i>'
                }
              }
          });
      });
    </script>

  </body>
</html>