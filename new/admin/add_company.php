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
                <h1 class="page-title">Add Company</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Company</li>
                    <li class="breadcrumb-item">Add Company</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <form action="adding_company.php" method="POST" enctype="multipart/form-data">
                        <div class="ibox-head">
                            <div class="ibox-title">Company Details</div>
                        </div>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label>Company Name</label>
                                        <div class="input-group-icon input-group-icon-left">                                      
                                            <span class="input-icon input-icon-left"><i class="ti-user"></i></span>
                                            <input class="form-control" type="text" name="name" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Address</label>
                                        <textarea class="form-control" rows="4" name="address"></textarea>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6">
                                            <label>Person of Contact</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-user"></i></span>
                                                <input class="form-control" type="text" name="poc" placeholder="Enter POC">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>POC Number</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-user"></i></span>
                                                <input class="form-control" type="text" name="pocn" placeholder="Enter POC No">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <div class="col-md-6">
                                            <label>GSTIN Number</label>
                                            <div class="input-group-icon input-group-icon-left">                                      
                                                <span class="input-icon input-icon-left"><i class="ti-id-badge"></i></span>
                                                <input class="form-control" type="text" name="gstin" placeholder="Enter GSTIN No">
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
                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="form-group mb-4">
                                         <label for="input-file-now-custom-1">Add Profile Photo</label>
                                          <input type="file" id="input-file-now-custom-1" name="pic" class="dropify" data-default-file="../assets/employee.png" />
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-4 col-md-4">
                                     <label for="input-file-now-custom-1">Supporting Documents</label>
                                      <input type="file" id="input-file-now-custom-1" name="support_docs" class="dropify" data-default-file="../assets/employee.png" />
                                </div>
                                <div class="form-group mb-4 col-md-4">
                                     <label for="input-file-now-custom-1">Service Level Agreement (For Contract)</label>
                                      <input type="file" id="input-file-now-custom-1" class="dropify" name="agreement" data-default-file="../assets/employee.png" />
                                </div>
                            </div>
                            
                        </div>
                        <div class="ibox-footer">
                            <button class="btn btn-primary mr-2" type="submit">Submit</button>
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