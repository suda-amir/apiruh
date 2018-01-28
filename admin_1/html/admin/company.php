<!DOCTYPE html>
<html>
  
  <?php 
  $page_name = "Employee";
  $page_name_emp = "Daily";
  require_once('../includes/header.php'); ?>
  <link href="../../../vendors/dataTables/datatables.min.css" rel="stylesheet"/>


  <body class="fixed-navbar sidebar-mini">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
         <!-- START PAGE CONTENT-->
         <div class="page-heading">
          <h1 class="page-title">Client Profile</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Client Profile</li>
          </ol>
        </div>
        <div class="page-content fade-in-up">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <div class="ibox">
                <div class="ibox-body text-center">
                  <div class="m-t-20"><img class="img-circle" src="../assets/img/users/u3.jpg"/>
                  </div>
                  <h5 class="font-strong m-b-10 m-t-10">Company Name</h5>
                  <p class="  m-b-10 m-t-10">Client ID</p>
                  <button class="btn btn-default labeled"><span class="btn-label"><i class="fa fa-pencil"></i></span>Edit</button>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-8">
              <div class="ibox">
                <div class="ibox-body">
                  <ul class="nav nav-tabs tabs-line">                    
                    <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-settings"></i> Profile</a></li>                                        
                    <li class="nav-item"><a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-book"></i> Subjects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-user"></i> Employees Assigned</a></li>                    
                    <li class="nav-item"><a class="nav-link" href="#tab-4" data-toggle="tab"><i class="ti-files"></i> Agreements & Documents</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-1">
                      <form action="javascript:void(0)">
                        <div class="row">
                          <div class="col-sm-6 form-group">
                            <label>Company Name</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="Name">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Client Manager</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Reporting Person</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="Name">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group" id="date_1">
                            <label>Client Since</label>
                            <div class="input-group date form_datetime"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                              <input class="form-control">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Clinet POC</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Contact #</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-12 form-group">
                            <label>Permanent Address</label>
                            <div class="form-group">
                              <textarea class="form-control" rows="3" maxlength="75" placeholder="This textarea has a limit of 75 chars."></textarea>
                            </div>
                          </div>
                        </div>                        
                      </form>
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                      
                        <div class="ibox">
                          <div class="ibox-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="example-table">
                                <thead>
                                  <tr>
                                    <th>Subject</th>
                                    <th>Nature of Work</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Test</td>
                                    <td>Test</td>
                                    <td>
                                      <a href="#edit_leaves" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-pencil font-14"></i></button></a>
                                       <a href="#edit_leaves" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye font-14"></i></button></a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                     
                        <div class="ibox">
                          <div class="ibox-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="example-table">
                                <thead>
                                  <tr>
                                    <th>Subject</th>
                                    <th>Nature of Work</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Test</td>
                                    <td>Test</td>
                                    <td>
                                      <a href="#edit_leaves" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-pencil font-14"></i></button></a>
                                      <a href="#edit_leaves" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-close font-14"></i></button></a>
                                       <a href="#edit_leaves" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye font-14"></i></button></a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                     
                    </div>
                    <div class="tab-pane fade" id="tab-4">
                      
                        <div class="ibox">
                          <div class="ibox-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="example-table">
                                <thead>
                                  <tr>
                                    <th>Subject</th>
                                    <th>Nature of Work</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Test</td>
                                    <td>Test</td>
                                    <td>
                                      <a href="#edit_leaves" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-pencil font-14"></i></button></a>
                                      <a href="#edit_leaves" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-close font-14"></i></button></a>
                                       <a href="#edit_leaves" data-toggle="modal"><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye font-14"></i></button></a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
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
    <script type="text/javascript">
       $('#date_1 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });
    </script>

  </body>
</html>