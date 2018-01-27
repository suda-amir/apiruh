<!DOCTYPE html>
<html>
  
  <?php require_once('../includes/header.php'); ?>
  <link href="../../../vendors/dataTables/datatables.min.css" rel="stylesheet"/>


  <body class="fixed-navbar">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
          <h1 class="page-title">Leaves</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Leaves</li>
          </ol>
        </div>
        <div class="page-content fade-in-up">
          <div class="alert" style="padding-left: 0px; margin-bottom: 0px">
            <a class="btn btn-info" href="#"><i class="fa fa-plus"></i> Leave Request</a></p>
          </div>
          <div class="page-content fade-in-up" style="padding-top: 0px; margin-top: 0px">
          <div class="ibox">
            <div class="ibox-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="example-table">
                  <thead>
                    <tr>
                      <th>Employee Name</th>
                      <th>Leave Dates</th>
                      <th>Type</th>
                      <th>Leaves Remaining</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td>Test</td>
                      <td>
                        <a href=""><button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye font-14"></i></button></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
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

  </body>
</html>