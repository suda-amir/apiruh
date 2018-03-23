<!DOCTYPE html>
<html lang="en">

<?php
      $page_name_emp = "Leaves";
      require_once('../includes/header.php');
      require_once('functions.php');
  ?>  
  <link href="../assets/vendors/dataTables/datatables.min.css" rel="stylesheet"/>
  <link href="../dropify/dropify.css" rel="stylesheet" />
  <link href="../assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />



  <body class="fixed-navbar">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Add Employee</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Employee</li>
                    <li class="breadcrumb-item">Add Employee</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <form action="adding_emp" method="POST" enctype="multipart/form-data">
                        <div class="ibox-head">
                            <div class="ibox-title">Employee Details</div>
                        </div>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label>Full Name</label>
                                        <div class="input-group-icon input-group-icon-left">                                      
                                            <span class="input-icon input-icon-left"><i class="ti-user"></i></span>
                                            <input class="form-control" type="text" name="name" placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Email</label>
                                        <div class="input-group-icon input-group-icon-left">                                      
                                            <span class="input-icon input-icon-left"><i class="ti-email"></i></span>
                                            <input class="form-control" type="text" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Mobile number</label>
                                        <div class="input-group">
                                            <div class="input-group-btn bg-white">
                                                <button class="btn btn-outline-secondary">+91</button>
                                            </div>
                                            <input class="form-control" type="text" name="contact" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6 form-group" id="date_3">
                                            <label>Date of Birth</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                <input class="form-control" name="dob" type="text">
                                            </div>
                                            <span class="help-block">Please select your date of birth.</span>
                                        </div>
                                        <div class="col-md-6 form-group" id="date_1">
                                            <label>Date of Joining</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                <input class="form-control" type="text" name="doj" value="auto calculate">
                                            </div>
                                            <span class="help-block">Please select date of joining.</span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6">
                                              <label>Nature of Employment</label>
                                              <div class="mt-1">
                                                  <label class="radio radio-inline radio-grey radio-primary">
                                                      <input type="radio" name="noe" value="Employee">
                                                      <span class="input-span"></span>Employee</label>
                                                  <label class="radio radio-inline radio-grey radio-primary">
                                                      <input type="radio" name="noe" value="Contract">
                                                      <span class="input-span"></span>Contract</label>
                                              </div>
                                              <span class="help-block">Select one of 2 types of accounts.</span>
                                          </div>

                                        <div class="col-md-6">
                                            <label>Employee ID</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-id-badge"></i></span>
                                                <input class="form-control" type="text" placeholder="Predefined ID by algo based on nature of employement">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Designation</label>
                                        <div class="input-group-icon input-group-icon-left">                                      
                                            <span class="input-icon input-icon-left"><i class="ti-briefcase"></i></span>
                                            <input class="form-control" type="text" name="designation" placeholder="Enter Designation">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">                                       
                                        <label>Qualifications</label>
                                        <div class="input-group-icon input-group-icon-left">                                      
                                            <input class="tagsinput form-control" type="text" value="" name="qualifications[]" placeholder="Enter Qualifications">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                         <label for="input-file-now-custom-1">Add Profile Photo</label>
                                          <input type="file" id="input-file-now-custom-1" class="dropify" name="pic" data-default-file="../assets/employee.png" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Address</label>
                                        <textarea class="form-control" rows="4" name="addr"></textarea>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6">
                                            <label>Aadhaar Number</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-id-badge"></i></span>
                                                <input class="form-control" type="text" name="aadhar" placeholder="Enter Aadhaar No">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>PAN Number</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-id-badge"></i></span>
                                                <input class="form-control" type="text" name="pan" placeholder="Enter PAN No">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6">
                                            <label>Emergency Contact Person</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-user"></i></span>
                                                <input class="form-control" type="text" name="ecp" placeholder="Enter Emergency Contact Person Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Emergency Contact Number</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <div class="input-group">
                                                    <div class="input-group-btn bg-white">
                                                        <button class="btn btn-outline-secondary">+91</button>
                                                    </div>
                                                    <input class="form-control" type="text" name="ecm" placeholder="Enter Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Blood Group</label>
                                        <div>
                                            <select class="selectpicker show-tick form-control" name="blood" data-width="200px">
                                                <option>O +</option>
                                                <option>O -</option>
                                                <option>A +</option>
                                                <option>A -</option>
                                                <option>B +</option>
                                                <option>B -</option>
                                                <option>AB +</option>
                                                <option>AB -</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-4 col-md-4">
                                     <label for="input-file-now-custom-1">Supporting Documents</label>
                                      <input type="file" id="input-file-now-custom-1" name="qual_docs" class="dropify" data-default-file="../assets/employee.png" />
                                </div>
                                <div class="form-group mb-4 col-md-4" id="cnt" style="display: none">
                                     <label for="input-file-now-custom-1">Service Level Agreement (For Contract)</label>
                                      <input type="file" id="input-file-now-custom-1" name="service_aggr" class="dropify" data-default-file="../assets/employee.png" />
                                </div>
                                <div class="form-group mb-4 col-md-4" id="emp" style="display: block">
                                     <label for="input-file-now-custom-1">Offer Letter/ Employement Agrement (Employee)</label>
                                      <input type="file" id="input-file-now-custom-1" class="dropify" name="offer_letter" data-default-file="../assets/employee.png" />
                                </div>
                            </div>
                            
                        </div>
                        <div class="ibox-footer">
                            <button class="btn btn-primary mr-2" type="Submit">Submit</button>
                            <button class="btn btn-outline-secondary" type="reset">Cancel</button>
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
        <input class="form-control search-input" type="text" placeholder="Search...">
        <button class="reset input-search-icon"><i class="ti-search"></i></button>
        <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
   
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
   <?php require_once('../includes/scripts.php'); ?>
   
    <script src="../assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
     <!-- PAGE LEVEL SCRIPTS-->
    <script src="../dropify/src/js/dropify.js"></script>
    <script src="../assets/js/scripts/form-plugins.js"></script>
     <script type="text/javascript">
          $(document).ready(function(){
           $('#date_1 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true,
              format: 'dd M yyyy'
            });
           $('#date_3 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true,
              format: 'dd M yyyy'
            });
          });
        </script>
        <script>
            $(document).ready(function(){ 
                $("input[name='noe']").click(function() {
                    var test = $(this).val();
                    console.log(test);
                    if(test == "Employee"){
                        $("#emp").css("display","block");   
                        $("#cnt").css("display","none");   
                    }else{
                        $("#cnt").css("display","block");
                        $("#emp").css("display","none");   
                    }
                    
                    $("#"+test).show();
                }); 
            });
        </script>
    <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

               
                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>

</body>

</html>