<!DOCTYPE html>
<html>
  
  <?php require_once('../includes/header.php'); ?>

  <body class="fixed-navbar">
    <div class="page-wrapper">

     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
          <div class="row">
            <div class="col-lg-8">
              <div class="ibox">
                <div class="ibox-body bg-green">
                  <div class="d-flex justify-content-between m-b-20">
                    <div class="text-white">
                      <h3 class="m-0">Sales Analytics</h3>
                      <div>Example of sales analytics</div>
                    </div>
                    <div class="rel"><a class="dropdown-toggle text-white" data-toggle="dropdown"><i class="ti-settings font-16"></i></a>
                      <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"> <i class="ti-pencil-alt m-r-10"></i>Edit</a><a class="dropdown-item"> <i class="ti-close m-r-10"></i>Remove</a></div>
                    </div>
                  </div>
                  <div>
                    <canvas id="line_chart" style="height:260px;"></canvas>
                  </div>
                </div>
                <div class="ibox-body bg-silver-100">
                  <div class="text-muted m-b-20">Statistics</div>
                  <div class="row align-items-center">
                    <div class="col-6">
                      <canvas id="chart_1" style="height:100px;"></canvas>
                    </div>
                    <div class="col-6">
                      <h2 class="text-success">+2250$</h2>
                      <div class="text-muted"><span class="text-success m-r-10"><i class="ti-stats-up m-r-5"></i>32%</span>FROM LAST YEAR</div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-4 text-center" style="border-right: 1px solid rgba(0,0,0,.1);">
                      <div class="text-muted">MONTH INCOME</div>
                      <h2 class="text-success m-t-5">$305</h2>
                    </div>
                    <div class="col-4 text-center" style="border-right: 1px solid rgba(0,0,0,.1);">
                      <div class="text-muted">MONTH SALES</div>
                      <h2 class="text-success m-t-5">1680</h2>
                    </div>
                    <div class="col-4 text-center">
                      <div class="text-muted">MONTH ORDERS</div>
                      <h2 class="text-success m-t-5">5800</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="ibox">
                    <div class="ibox-head">
                      <div class="ibox-title">Feeds</div>
                      <div class="ibox-tools"><a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-announcement"></i></a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"> <i class="ti-pencil-alt m-r-10"></i>Edit</a><a class="dropdown-item"> <i class="ti-close m-r-10"></i>Remove</a></div>
                      </div>
                    </div>
                    <div class="ibox-body">
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
                <div class="col-lg-6">
                  <div class="ibox">
                    <div class="ibox-head">
                      <div class="ibox-title">Statistics</div>
                      <div class="ibox-tools"><a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-eye"></i></a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"> <i class="ti-pencil-alt m-r-10"></i>Edit</a><a class="dropdown-item"> <i class="ti-close m-r-10"></i>Remove</a></div>
                      </div>
                    </div>
                    <div class="ibox-body">
                      <div class="row align-items-center">
                        <div class="col-md-6">
                          <div class="easyPieChart easyPieChart-big centered m-t-20 m-b-20" data-percent="73" data-bar-color="#18C5A9"><span class="h3 font-strong line-height-inherit">73<sup>%</sup></span></div>
                        </div>
                        <div class="col-md-6">
                          <div class="m-b-20 text-success"><i class="ti-desktop m-r-10"></i>Desktop 52%</div>
                          <div class="m-b-20 text-warning"><i class="ti-tablet m-r-10"></i>Tablet 27%</div>
                          <div class="m-b-20 text-info"><i class="ti-mobile m-r-10"></i>Mobile 21%</div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between m-b-20">
                        <div>
                          <div class="m-0 text-success h3">2400</div><small>PAGE VIEWS</small>
                        </div>
                        <div>
                          <div class="m-0 text-success h3">$410<sup>.50</sup></div><small>MONTH INCOME</small>
                        </div>
                      </div>
                    </div>
                    <div class="p-t-5 p-b-5" style="background-color:#f3f6fb;">
                      <canvas id="chart_2" style="height:100px;"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="ibox">
                <div class="ibox-head">
                  <div class="ibox-title">Statistics</div>
                  <div class="ibox-tools"><a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"> <i class="ti-pencil-alt m-r-10"></i>Edit</a><a class="dropdown-item"> <i class="ti-close m-r-10"></i>Remove</a></div>
                  </div>
                </div>
                <div class="ibox-body">
                  <div class="h2 m-0">$12,400<sup>.60</sup><i class="ti-stats-up float-right text-success" style="font-size:40px;"></i></div>
                  <div class="text-muted m-t-5">MONTH INCOME</div>
                  <div class="m-t-20 m-b-20">
                    <div class="h4 m-0">120</div>
                    <div class="d-flex justify-content-between"><small>Example data</small><span class="text-success font-12" style="font-size: 12px;"><i class="fa fa-level-up"></i> +24%</span></div>
                    <div class="progress m-t-5">
                      <div class="progress-bar progress-bar-success" role="progressbar" style="width:52%; height:5px;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="m-b-20">
                    <div class="h4 m-0">86</div>
                    <div class="d-flex justify-content-between"><small>Example data</small><span class="text-warning font-12" style="font-size: 12px;"><i class="fa fa-level-down"></i> -12%</span></div>
                    <div class="progress m-t-5">
                      <div class="progress-bar progress-bar-warning" role="progressbar" style="width:45%; height:5px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0 m-b-20">
                <div class="card-body">
                  <h2 class="m-b-5">$250 <i class="ti-stats-down text-danger float-right"></i></h2>
                  <div class="text-muted">MONTH INCOME</div>
                </div>
                <div id="spark_1">34, 43, 35, 44, 32, 15, 22, 33, 86, 54, 23, 65, 23, 63, 53, 42, 34, 54, 23, 44</div>
              </div>
              <div class="card border-0 m-b-20">
                <div class="card-body">
                  <h2 class="m-b-5">$250 <i class="ti-stats-up text-success float-right"></i></h2>
                  <div class="text-muted">MONTH INCOME</div>
                </div>
                <div id="spark_2">34, 43, 35, 44, 32, 15, 22, 33, 86, 54, 23, 65, 23, 63, 53, 42, 34, 54, 23, 44</div>
              </div>
              <div class="ibox">
                <div class="ibox-head">
                  <div class="ibox-title">Messages</div>
                  <div class="ibox-tools"><a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-pencil"></i></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"> <i class="ti-pencil-alt m-r-10"></i>Edit</a><a class="dropdown-item"> <i class="ti-close m-r-10"></i>Remove</a></div>
                  </div>
                </div>
                <div class="ibox-body">
                  <ul class="media-list media-list-divider m-0">
                    <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u1.jpg" width="40px"/></a>
                      <div class="media-body">
                        <div class="media-heading">Jeanne Gonzalez <small class="float-right text-muted">12:05</small></div>
                        <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u2.jpg" width="40px"/></a>
                      <div class="media-body">
                        <div class="media-heading">Becky Brooks <small class="float-right text-muted">1 hrs ago</small></div>
                        <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u3.jpg" width="40px"/></a>
                      <div class="media-body">
                        <div class="media-heading">Frank Cruz <small class="float-right text-muted">3 hrs ago</small></div>
                        <div class="font-13">Lorem Ipsum is simply dummy.</div>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u6.jpg" width="40px"/></a>
                      <div class="media-body">
                        <div class="media-heading">Connor Perez <small class="float-right text-muted">Today</small></div>
                        <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u5.jpg" width="40px"/></a>
                      <div class="media-body">
                        <div class="media-heading">Bob Gonzalez <small class="float-right text-muted">Today</small></div>
                        <div class="font-13">Lorem Ipsum is simply dummy.</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                  <div class="ibox-title">Best Sellers</div>
                  <div class="ibox-tools"><a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"> <i class="ti-pencil-alt m-r-10"></i>Edit</a><a class="dropdown-item"> <i class="ti-close m-r-10"></i>Remove</a></div>
                  </div>
                </div>
                <div class="ibox-body">
                  <ul class="media-list media-list-divider m-0">
                    <li class="media"><a class="media-img" href="javascript:;"><img src="./assets/img/products/01.jpg" height="100px"/></a>
                      <div class="media-body d-flex">
                        <div class="flex-1">
                          <h5 class="media-heading"><a href="javascript:;">Product name</a></h5>
                          <p class="font-13">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                          <div class="font-13"><span class="mr-4">Author: <a class="text-success" href="javascript:;">@Creative</a></span><span class="text-muted mr-4"><i class="fa fa-calendar mr-1"></i> 10.08.2018</span><span class="text-muted"><i class="fa fa-heart mr-1"></i> 56</span></div>
                        </div>
                        <div class="text-right" style="width:100px;">
                          <h3 class="mb-1 font-strong text-success">1200</h3>
                          <div class="text-muted">sales</div>
                        </div>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img src="./assets/img/products/02.jpg" height="100px"/></a>
                      <div class="media-body d-flex">
                        <div class="flex-1">
                          <h5 class="media-heading"><a href="javascript:;">Product name</a></h5>
                          <p class="font-13">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                          <div class="font-13"><span class="mr-4">Author: <a class="text-success" href="javascript:;">@Creative</a></span><span class="text-muted mr-4"><i class="fa fa-calendar mr-1"></i> 10.08.2018</span><span class="text-muted"><i class="fa fa-heart mr-1"></i> 56</span></div>
                        </div>
                        <div class="text-right" style="width:100px;">
                          <h3 class="mb-1 font-strong text-success">1130</h3>
                          <div class="text-muted">sales</div>
                        </div>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img src="./assets/img/products/03.jpg" height="100px"/></a>
                      <div class="media-body d-flex">
                        <div class="flex-1">
                          <h5 class="media-heading"><a href="javascript:;">Product name</a></h5>
                          <p class="font-13">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                          <div class="font-13"><span class="mr-4">Author: <a class="text-success" href="javascript:;">@Creative</a></span><span class="text-muted mr-4"><i class="fa fa-calendar mr-1"></i> 10.08.2018</span><span class="text-muted"><i class="fa fa-heart mr-1"></i> 56</span></div>
                        </div>
                        <div class="text-right" style="width:100px;">
                          <h3 class="mb-1 font-strong text-success">980</h3>
                          <div class="text-muted">sales</div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                  <div class="ibox-title">Payment Systems</div>
                  <div class="ibox-tools"><a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"> <i class="ti-pencil-alt m-r-10"></i>Edit</a><a class="dropdown-item"> <i class="ti-close m-r-10"></i>Remove</a></div>
                  </div>
                </div>
                <div class="ibox-body">
                  <ul class="media-list media-list-divider m-0">
                    <li class="media"><a class="media-img" href="javascript:;"><img src="./assets/img/logos/payment/visa.png" width="60px"/></a>
                      <div class="media-body">
                        <div class="media-heading">Visa card 
                          <h4 class="font-strong float-right text-right">$1100</h4>
                        </div>
                        <p class="font-13">Lorem ipsum dolar set...</p>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img src="./assets/img/logos/payment/paypal.png" width="60px"/></a>
                      <div class="media-body">
                        <div class="media-heading">PayPal 
                          <h4 class="font-strong float-right text-right">$985</h4>
                        </div>
                        <p class="font-13">Lorem ipsum dolar set...</p>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img src="./assets/img/logos/payment/mastercard.png" width="60px"/></a>
                      <div class="media-body">
                        <div class="media-heading">MasterCard 
                          <h4 class="font-strong float-right text-right">$850</h4>
                        </div>
                        <p class="font-13">Lorem ipsum dolar set...</p>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img src="./assets/img/logos/payment/jcb.png" width="60px"/></a>
                      <div class="media-body">
                        <div class="media-heading">JCB 
                          <h4 class="font-strong float-right text-right">$690</h4>
                        </div>
                        <p class="font-13">Lorem ipsum dolar set...</p>
                      </div>
                    </li>
                    <li class="media"><a class="media-img" href="javascript:;"><img src="./assets/img/logos/payment/eps.png" width="60px"/></a>
                      <div class="media-body">
                        <div class="media-heading">EPS 
                          <h4 class="font-strong float-right text-right">$520</h4>
                        </div>
                        <p class="font-13">Lorem ipsum dolar set...</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
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

  </body>
</html>