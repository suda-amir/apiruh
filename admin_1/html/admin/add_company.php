<!DOCTYPE html>
<html>
  
  <?php 

  $page_name_emp = "Employee";

  require_once('../includes/header.php'); ?>
  <link href="../../../vendors/dataTables/datatables.min.css" rel="stylesheet"/>
  <style type="text/css">
    .wizard>.content>.body{
      max-width: none;
    }
  </style>

  <body class="fixed-navbar sidebar-mini">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
         <!-- START PAGE CONTENT-->
         <div class="page-heading">
          <h1 class="page-title">Add Company</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Company</li>
            <li class="breadcrumb-item active">Add Company</li>

          </ol>
        </div>
        
        <!-- START FORM WIZARD CONTENT-->
        <div class="page-content fade-in-up">
          
          <div class="ibox">
            <div class="ibox-head">
              <div class="ibox-title">Add Company</div>
            </div>
            <div class="ibox-body">
              <form id="form-wizard" action="adding_emp.php" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                <h6>Step 1</h6>
                <section>
                  <h3>Company Details</h3>
                  
                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control required" id="name" type="text" name="name">
                    </div>
                    <div class="form-group" id="date_4">
                    <label>Date of Joining</label>
                      <div class="input-group date"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                        <input class="form-control required" id="" name="doj" type="text" value="">
                      </div>
                  </div>
                    <div class="form-group">
                      <label>Client Manager</label>
                      <select class="form-control required" name="inc" id="inc">
                        <option>Populate Emp Names here </option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Contact Details</label>
                      <input class="form-control required" id="contact" type="number" name="contact">
                    </div>
                </section>
                <h6>Step 2</h6>
                <section>
                  <h3>Additional Details</h3>
                    <div class="form-group">
                    <label>Permanent Address</label>
                    <textarea class="form-control" rows="4" required="" name="addr"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Reporting Person</label>
                    <input class="form-control required" id="pan" type="text" name="pan">
                  </div>
                  <div class="form-group">
                    <label>Client POC</label>
                    <input class="form-control required" id="aadhar" type="text" name="aadhar">
                  </div>  
                </section>
                <h6>Details</h6>
                <section>
                  <div class="form-group" id="service" style="display: none;">
                    <label>Service Agreement</label>
                    <input class="form-control required" id="service_aggr" type="file" name="service_aggr">
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
           <!-- PAGE LEVEL PLUGINS-->
    <script src="../../../vendors/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
    <script src="../../../vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>

   
    <script type="text/javascript">
      $(document).ready(function(){
       $('#date_4 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });
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