<!DOCTYPE html>
<html>
  
  <?php 

  $page_name_emp = "Employee";

  require_once('../includes/header.php'); ?>
  <link href="../../../vendors/dataTables/datatables.min.css" rel="stylesheet"/>


  <body class="fixed-navbar sidebar-mini">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
         <!-- START PAGE CONTENT-->
         <div class="page-heading">
          <h1 class="page-title">Add Employee Profile</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Employee</li>
            <li class="breadcrumb-item active">Add Employee</li>

          </ol>
        </div>
        
        <!-- START FORM WIZARD CONTENT-->
        <div class="page-content fade-in-up">
          
          <div class="ibox">
            <div class="ibox-head">
              <div class="ibox-title">Add Employee</div>
            </div>
            <div class="ibox-body">
              <form id="form-wizard" action="#" novalidate="novalidate">
                <h6>Step 1</h6>
                <section>
                  <h3>Employee Details</h3>
                  
                 <div class="row">
                   <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input class="form-control required email" id="email" type="text" name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control required" id="password" type="password" name="password">
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input class="form-control required" id="confirm" type="password" name="confirm">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input class="form-control required email" id="email" type="text" name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control required" id="password" type="password" name="password">
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input class="form-control required" id="confirm" type="password" name="confirm">
                    </div>
                  </div>
                  </div>
                </section>
                <h6>Step 2</h6>
                <section>
                  <h3>Profile Details</h3>
                  <div class="form-group">
                    <label>First Name</label>
                    <input class="form-control required" id="name" type="text" name="name">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control required" id="surname" type="text" name="surname">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <input class="form-control required" id="address" type="text" name="address">
                  </div>
                </section>
                <h6>Step 3</h6>
                <section>
                  <div class="text-center">
                    <h3>You did it Man</h3><i class="fa fa-smile-o text-success" style="font-size:120px;"></i>
                  </div>
                </section>
                <h6>Step 4</h6>
                <section>
                  <h3>Terms and Conditions</h3>
                  <label class="ui-checkbox ui-checkbox-success">
                    <input class="required" id="acceptTerms" type="checkbox" name="acceptTerms"><span class="input-span"></span>I agree with the Terms and Conditions.
                  </label>

                </section>
              </form>
            </div>
          </div>
        </div>

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

           <!-- PAGE LEVEL PLUGINS-->
    <script src="../../../vendors/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
    <script src="../../../vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>

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
          $('#example-table2').DataTable({
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
          $('#example-table3').DataTable({
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
     <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
      $(function(){
        $('#form-wizard').steps({
          headerTag: "h6",
          bodyTag: "section",
          titleTemplate: '<span class="step-number">#index#</span> #title#',
          onStepChanging: function (event, currentIndex, newIndex) {
              var form = $(this);
              // Always allow going backward even if the current step contains invalid fields!
              if (currentIndex > newIndex)
              {
                  return true;
              }
      
              // Clean up if user went backward before
              if (currentIndex < newIndex)
              {
                  // To remove error styles
                  $(".body:eq(" + newIndex + ") label.error", form).remove();
                  $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
              }
      
              // Disable validation on fields that are disabled or hidden.
              form.validate().settings.ignore = ":disabled,:hidden";
      
              // Start validation; Prevent going forward if false
              return form.valid();
          },
          onFinishing: function (event, currentIndex) {
              var form = $(this);
              form.validate().settings.ignore = ":disabled";
              return form.valid();
          },
          onFinished: function (event, currentIndex) {
              toastr.success('Emplyee Added Successfully!');
          }
        }).validate({
          errorPlacement: function errorPlacement(error, element) { error.insertAfter(element); },
          rules: {
            confirm: {
              equalTo: "#password"
            }
          },
          errorClass:"help-block error",
          highlight:function(e){$(e).closest(".form-group").addClass("has-error")},
          unhighlight:function(e){$(e).closest(".form-group").removeClass("has-error")},
        });
      })
    </script>


  </body>
</html>