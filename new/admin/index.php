<!DOCTYPE html>
<html>
  
  <?php require_once('../includes/header.php'); ?>

  <body class="fixed-navbar fixed-layout">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      
      <div class="content-wrapper">
          <!-- START PAGE CONTENT-->
          <div class="page-content fade-in-up">
              <div class="row mb-4">
                  <div class="col-lg-4 col-md-6">
                      <div class="card mb-4">
                          <div class="card-body flexbox-b">
                              <div class="easypie mr-4" data-percent="73" data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                                  <span class="easypie-data text-success" style="font-size:32px;"><i class="la la-users"></i></span>
                              </div>
                              <div>
                                  <h3 class="font-strong text-success">128</h3>
                                  <div class="text-muted">NEW CUSTOMERS</div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="card mb-4">
                          <div class="card-body flexbox-b">
                              <div class="easypie mr-4" data-percent="42" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                  <span class="easypie-data font-26 text-primary"><i class="ti-world"></i></span>
                              </div>
                              <div>
                                  <h3 class="font-strong text-primary">6400</h3>
                                  <div class="text-muted">TODAY'S VISITS</div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="card mb-4">
                          <div class="card-body flexbox-b">
                              <div class="easypie mr-4" data-percent="70" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                  <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-tags"></i></span>
                              </div>
                              <div>
                                  <h3 class="font-strong text-pink">210</h3>
                                  <div class="text-muted">SUPPORT TICKETS</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            
          </div>      
            <!-- END PAGE CONTENT-->
          
          <!-- FOOTER -->

          <?php require_once('../includes/footer.php'); ?>

          <!-- END FOOTER-->

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


    <!-- PAGE LEVEL SCRIPTS-->
    <script src="../assets/js/scripts/dashboard_visitors.js"></script>

  </body>
</html>