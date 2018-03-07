<!DOCTYPE html>
<html>
  
  <?php
      $page_name = "Admin";
      $page_name_emp = "Status Report";
      require_once('../includes/header.php');
  ?>
  <link href="../../../vendors/dataTables/datatables.min.css" rel="stylesheet"/>


  <body class="fixed-navbar">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
          <h1 class="page-title">Status Reports</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Status Reports</li>
          </ol>
        </div>
        <div class="page-content fade-in-up">
          <div class="alert" style="padding-left: 0px; margin-bottom: 0px">
            <a class="btn btn-info" href="#myModal2" data-toggle="modal"><i class="fa fa-plus"></i> Add Status Report</a></p>
          </div>
           <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <form class="modal-content form-horizontal" action="javascript:;">
                        <div class="modal-header bg-silver-100">
                          <h4 class="modal-title">Status Report</h4>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group row" id="date_1">
                            <label class="col-sm-2 col-form-label">Date:</label>
                            <div class="col-sm-10">
                              <div class="input-group date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="" type="text" value="" name="date">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Comapny Name:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="comapny_id">
                                <option>Name</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">In Time:</label>
                            <div class="col-sm-10">
                               <div class="input-group clockpicker" data-autoclose="true">
                                  <input class="form-control" type="text" value="11:30" name="in_time"><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Out Time:</label>
                            <div class="col-sm-10">
                               <div class="input-group clockpicker" data-autoclose="true">
                                  <input class="form-control" type="text" value="11:30" name="out_time"><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                              </div>
                            </div>
                          </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Work Status:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="status">
                                <option>Name</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nature of Work:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="nature_of_work">
                                <option>Name</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Billed Client:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="billed">
                                <option>Name</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name of Subject:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="subject">
                                <option>Name</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Work Details:</label>
                            <div class="col-sm-10">
                              <input type="text" name="work_details" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Remarks:</label>
                            <div class="col-sm-10">
                              <input type="text" name="remarks" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Expenses - Reimbursement:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="expenses">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Additional Comments:</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" rows="4" name="comments"></textarea>
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
                      <th>Employee</th>
                      <th>Date</th>
                      <th>Company</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td><span class="badge badge-success">Completed</span></td>
                      <td>
                         <a href="#edit_status" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-pencil font-14"></i></button></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
       <div class="modal fade" id="edit_status" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <form class="modal-content form-horizontal" action="javascript:;">
                        <div class="modal-header bg-silver-100">
                          <h4 class="modal-title">Edit Status Report</h4>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group row" id="date_2">
                            <label class="col-sm-2 col-form-label">Date:</label>
                            <div class="col-sm-10">
                              <div class="input-group date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input class="form-control" id="" type="text" value="" name="date">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Comapny Name:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="comapny">
                                <option>Name</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">In Time:</label>
                            <div class="col-sm-10">
                               <div class="input-group clockpicker" data-autoclose="true">
                                  <input class="form-control" type="text" value="11:30" name="in_time"><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Out Time:</label>
                            <div class="col-sm-10">
                               <div class="input-group clockpicker" data-autoclose="true">
                                  <input class="form-control" type="text" value="11:30" name="out_time"><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                              </div>
                            </div>
                          </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Work Status:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="status">
                                <option>Name</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nature of Work:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="nature_of_work">
                                <option>Name</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Billed Client:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="billed">
                                <option>Name</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name of Subject:</label>
                            <div class="col-sm-10">
                              <input type="text" name="subject" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Work Details:</label>
                            <div class="col-sm-10">
                              <input type="text" name="work_details" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Remarks:</label>
                            <div class="col-sm-10">
                              <input type="text" name="remarks" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Expenses - Reimbursement:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="expenses">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Additional Comments:</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" rows="4" name="comments"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                          <button class="btn btn-info" id="addEventButton" type="submit">Update</button>
                        </div>
                      </form>
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
            $('.clockpicker').clockpicker();
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