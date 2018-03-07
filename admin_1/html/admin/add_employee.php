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
 <head>
    <!-- PLUGINS STYLES-->
    <link href="../../../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet"/>
    <link href="../../../vendors/dropzone/dist/min/basic.min.css" rel="stylesheet"/>
 </head>

  <body class="fixed-navbar">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
         <!-- START PAGE CONTENT-->
         <div class="page-heading">
          <h1 class="page-title">Add Employee</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Add Employee</li>
          </ol>
        </div>
        <div class="page-content fade-in-up">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <div class="ibox">
                <div class="ibox-body text-center">
                 <!-- START PAGE CONTENT-->
                  
                  <div class="page-content fade-in-up">
                    <div class="ibox">
                      
                      <div class="ibox-body">
                        <form class="dropzone" id="mydropzone" action="../assets/plugins/dropzone/demo-upload.php">
                          <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                          </div>
                        </form><br>
                       
                      </div>
                    </div>
                  </div>
                  <!-- END PAGE CONTENT-->

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
                      <form action="update_emp_details.php" method="POST" id="update_form" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-sm-6 form-group">
                            <label>Name</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>                       
                              <input class="form-control" type="text" placeholder="Name" name="name" >
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Nature of Employement</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="nature_of_employment">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Employee ID</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="Name" name="emp_id" >
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Designation</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="designation">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Mobile #</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="mobile_num" >
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Email</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="email" >
                            </div>
                          </div>
                          <div class="col-sm-6 form-group" id="date_1">
                            <label>Date of Birth (D.O.B)</label>
                            <div class="input-group date form_datetime"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                              <input class="form-control" name="dob" >
                            </div>
                          </div>
                          <div class="col-sm-6 form-group" id="date_1">
                            <label>Date of Joining (D.O.J)</label>
                            <div class="input-group date form_datetime"><span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                              <input class="form-control" name="doj" >
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>PAN #</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="pan">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Aadhaar # </label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="aadhar">
                            </div>
                          </div>
                          <div class="col-sm-12 form-group">
                            <label>Permanent Address</label>
                            <div class="form-group">
                              <textarea class="form-control" rows="3" maxlength="75" placeholder="This textarea has a limit of 75 chars." name="addr"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Emergency Contact Person</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="emer_contact_per" >
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Emergency Contact # </label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="emer_contact">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Blood Group</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="blood">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Qualications</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="text" placeholder="with icon" name="qualifications" >
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Supporting Documents</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="file" placeholder="with icon" name="docs">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Service Level Agreement</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="file" placeholder="with icon" name="sla">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Offer Letter</label>
                            <div class="input-group-icon">
                              <div class="input-icon"><i class="fa fa-link text-primary font-15"></i></div>
                              <input class="form-control" type="file" placeholder="with icon" name="offer_letter">
                            </div>
                          </div>
                        </div>                        
                      </form>
                      <button class="btn btn-info" id="submit_update">Save Details</button>
                    </div>
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
           <!-- PAGE LEVEL PLUGINS-->
    <script src="../../../vendors/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
    <script src="../../../vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS-->
    <script src="../../../vendors/dropzone/dist/min/dropzone.min.js" type="text/javascript"></script>
   
    <script type="text/javascript">
      $(document).ready(function(){
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

       //FORM SUBMIT SCRIPT

         $("#finish").click(function(){
          console.log("Reached").
          $("form").submit(function(){
            alert("Submitted");
          }); 
      });

         //FORM SUBMIT SCRIPT END

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
     <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
      Dropzone.options.mydropzone = {
          paramName: "file", // The name that will be used to transfer the file
          maxFilesize: 5, // MB
          dictDefaultMessage: '<div class="text-center m-b-10"><i class="fa fa-cloud-upload text-info" style="font-size:50px"></i></div> <strong>Drop Employee Photo here or click to upload. </strong></br> ',
          init: function() {
              this.on("addedfile", function(file){
                  var removeButton = Dropzone.createElement("<a href='javascript:;'' class='btn btn-danger btn-sm btn-block'>Remove</a>");
                  //var removeButton = Dropzone.createElement("<a href='javascript:;' class='dropzone-close'></a>");
                  var _this = this;
                  removeButton.addEventListener("click", function(e) {
                      e.preventDefault();
                      e.stopPropagation();
                      _this.removeFile(file);
                  });
                  file.previewElement.appendChild(removeButton);
              });
          }
      }
    </script>


  </body>
</html>