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

  <body class="fixed-navbar">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-5">ADD NEW PRODUCT</h5>
                        <div class="row">
                            <div class="col-lg-4">
                                <div>
                                    <img src="./assets/img/products/27.jpg" alt="image" />
                                </div>
                                <div class="flexbox-b mt-4">
                                    <div class="mr-2">
                                        <img src="./assets/img/products/28.jpg" alt="image" />
                                    </div>
                                    <div class="mr-2">
                                        <img src="./assets/img/products/29.jpg" alt="image" />
                                    </div>
                                    <div class="mr-2">
                                        <img src="./assets/img/products/30.jpg" alt="image" />
                                    </div>
                                    <div class="file-input-plus file-input"><i class="la la-plus-circle"></i>
                                        <input type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form action="javascript:;">
                                    <div class="form-group mb-4">
                                        <label>Product Name</label>
                                        <input class="form-control form-control-solid" type="text" placeholder="Enter Product Name">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group mb-4">
                                            <label>Category</label>
                                            <div>
                                                <select class="selectpicker show-tick form-control" title="Please select" data-style="btn-solid">
                                                    <optgroup label="Electronics">
                                                        <option>TV & Video</option>
                                                        <option>Cameras & Photo</option>
                                                        <option>Computers & Tablets</option>
                                                    </optgroup>
                                                    <optgroup label="Fashion">
                                                        <option>Health & Beauty</option>
                                                        <option>Shoes</option>
                                                        <option>Handbags & Purses</option>
                                                        <option>Jewelry and Watches</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group mb-4">
                                            <label>SKU</label>
                                            <input class="form-control form-control-solid" type="text" placeholder="SKU Number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 form-group mb-4">
                                            <label>Price</label>
                                            <input class="form-control form-control-solid" type="text" placeholder="Unit Price">
                                        </div>
                                        <div class="col-sm-4 form-group mb-4">
                                            <label>Currency </label>
                                            <div>
                                                <select class="selectpicker show-tick form-control" title="Please select" data-style="btn-solid">
                                                    <option>USD</option>
                                                    <option>Euro</option>
                                                    <option>Rouble</option>
                                                    <option>Pound</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 form-group mb-4">
                                            <label>Quantity</label>
                                            <input class="form-control form-control-solid" type="text" placeholder="Quantity">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Tags</label>
                                        <input class="tagsinput form-control form-control-solid" type="text" placeholder="Tags" value="Fashion,Dress,Broadway,Autumn collection,Shop">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Description</label>
                                        <textarea class="form-control form-control-solid" rows="4" placeholder="Description"></textarea>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="ui-switch switch-icon mr-3 mb-0">
                                            <input type="checkbox" checked="">
                                            <span></span>
                                        </label>Available</div>
                                    <div class="text-right">
                                        <button class="btn btn-primary btn-air mr-2">Save</button>
                                        <button class="btn btn-secondary">Cancel</button>
                                    </div>
                                </form>
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
        <input class="form-control search-input" type="text" placeholder="Search...">
        <button class="reset input-search-icon"><i class="ti-search"></i></button>
        <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
    <!-- END SEARCH PANEL-->
    
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- New question dialog-->
    <div class="modal fade" id="session-dialog">
        <div class="modal-dialog" style="width:400px;" role="document">
            <div class="modal-content timeout-modal">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mt-3 mb-4"><i class="ti-lock timeout-icon"></i></div>
                    <div class="text-center h4 mb-3">Set Auto Logout</div>
                    <p class="text-center mb-4">You are about to be signed out due to inactivity.<br>Select after how many minutes of inactivity you log out of the system.</p>
                    <div id="timeout-reset-box" style="display:none;">
                        <div class="form-group text-center">
                            <button class="btn btn-danger btn-fix btn-air" id="timeout-reset">Deactivate</button>
                        </div>
                    </div>
                    <div id="timeout-activate-box">
                        <form id="timeout-form" action="javascript:;">
                            <div class="form-group pl-3 pr-3 mb-4">
                                <input class="form-control form-control-line" type="text" name="timeout_count" placeholder="Minutes" id="timeout-count">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-fix btn-air" id="timeout-activate">Activate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End New question dialog-->
   
    <!-- CORE PLUGINS-->
        <?php require_once('../includes/scripts.php'); ?>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="../../../vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            $('.tagsinput').tagsinput({
                tagClass: 'label label-primary'
            });
            $('.tagsinput.form-control-solid').siblings('.bootstrap-tagsinput').addClass('form-control-solid');
        });
    </script>
</body>

</html>