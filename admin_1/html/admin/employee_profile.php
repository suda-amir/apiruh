<!DOCTYPE html>
<html>
  
  <?php
      $page_name_emp = "Employee";
      require_once('../includes/header.php');
  ?>
  <link href="../../../vendors/dataTables/datatables.min.css" rel="stylesheet"/>


  <body class="fixed-navbar">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
         <!-- START PAGE CONTENT-->
         <div class="page-heading">
          <h1 class="page-title">Profile</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div>
        <div class="page-content fade-in-up">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <div class="ibox">
                <div class="ibox-body text-center">
                  <div class="m-t-20"><img class="img-circle" src="../assets/img/users/u3.jpg"/>
                  </div>
                  <h5 class="font-strong m-b-10 m-t-10">Frank Cruz</h5>
                  <p class="  m-b-10 m-t-10">Emp ID</p>
                  <div class="m-b-20 text-muted">Web Developer</div>
                  <button class="btn btn-default labeled"><span class="btn-label"><i class="fa fa-pencil"></i></span>Edit</button>


                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-8">
              <div class="ibox">
                <div class="ibox-body">
                  <ul class="nav nav-tabs tabs-line">                    
                    <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-settings"></i> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-announcement"></i> Notifications</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-1">
                      <form action="javascript:void(0)">
                        <div class="row">
                          <div class="col-sm-6 form-group">
                            <label>Name</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="Name">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Nature of Employement</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Employee ID</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="Name">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Designation</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Mobile #</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Email</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group" id="date_1">
                            <label>Date of Birth (D.O.B)</label>
                            <div class="input-group date form_datetime"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                              <input class="form-control">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group" id="date_1">
                            <label>Date of Joining (D.O.J)</label>
                            <div class="input-group date form_datetime"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                              <input class="form-control">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>PAN #</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Aadhaar # </label>
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
                          <div class="col-sm-6 form-group">
                            <label>Emergency Contact Person</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Emergency Contact # </label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Blood Group</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Qualications</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Supporting Documents</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="file" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Service Level Agreement</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="file" placeholder="with icon">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Offer Letter</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="file" placeholder="with icon">
                            </div>
                          </div>
                        </div>                        
                      </form>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                      <h5 class="text-info m-b-20 m-t-20"><i class="fa fa-bullhorn"></i> Latest Feeds</h5>
                      <ul class="media-list media-list-divider m-0">
                        <li class="media">
                          <div class="media-img"><i class="ti-user font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading">New customer <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-info-alt font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading text-warning">Server Warning <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-announcement font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading">7 new feedback <small class="float-right text-muted">Today</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-check font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading text-success">Issue fixed <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-shopping-cart font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading">7 New orders <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-reload font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading text-danger">Server warning <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                      </ul>
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