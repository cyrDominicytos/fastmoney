<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>Buy Barrel - Petron Pay</title>
<link rel="icon" href="assets/theme/petron/site/images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="assets/theme/petron/vendor/pace/pace.css">
<script src="assets/theme/petron/vendor/pace/pace.min.js"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="assets/theme/petron/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" type="text/css" href="assets/theme/petron/vendor/jquery-scrollbar/jquery.scrollbar.css">
<link rel="stylesheet" href="assets/theme/petron/vendor/select2/css/select2.min.css">
<link rel="stylesheet" href="assets/theme/petron/vendor/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="assets/theme/petron/vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="assets/theme/petron/vendor/timepicker/bootstrap-timepicker.min.css">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="assets/theme/petron/fonts/jost/jost.css">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="assets/theme/petron/fonts/materialdesignicons/materialdesignicons.min.css">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="assets/theme/petron/css/atmos.min.css">
<!-- Additional library for page -->
<link rel="stylesheet" href="assets/theme/petron/vendor/DataTables/datatables.min.css">
<link rel="stylesheet" href="assets/theme/petron/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

<!-- IntlTelInput -->
    <link type="text/css" rel="stylesheet" href="assets/vendor/tel-input/css/intlTelInput.css">

    <style type="text/css">
    </style>
</head>



<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="assets/theme/petron/site/images/logo-inverse-105x38.png" width="105" alt="Logo">
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
      <li class="menu-item active ">
        <a href="office/plan/active" class=" menu-link">
            <span class="menu-label">
                <span class="menu-name">Buy Barrel                    
                </span>
            </span>

            <span class="menu-icon">
                <i class="icon-placeholder mdi mdi-barrel "></i>
            </span>
        </a>
    </li>
    
   

  
    <li class="menu-item  ">
      <a href="office/network/directs" class=" menu-link">
          <span class="menu-label">
              <span class="menu-name">My Indications                  
              </span>
          </span>

          <span class="menu-icon">
              <i class="icon-placeholder mdi mdi-account-multiple-plus "></i>
          </span>
      </a>
    </li>

    <li class="menu-item  ">
      <a href="office/network/binary" class=" menu-link">
          <span class="menu-label">
              <span class="menu-name">Binary                  
              </span>
          </span>

          <span class="menu-icon">
              <i class="icon-placeholder mdi mdi-account-group-outline "></i>
          </span>
      </a>
    </li>

    <li class="menu-item  ">
      <a href="office/network/title" class=" menu-link">
          <span class="menu-label">
              <span class="menu-name">Program of Awards
                  
              </span>
          </span>

          <span class="menu-icon">
              <i class="icon-placeholder mdi mdi-trophy "></i>
          </span>
      </a>
    </li>
    
    <li class="menu-item ">
      <a href="#" class="open-dropdown menu-link">
          <span class="menu-label">
              <span class="menu-name">Financial                  <span class="menu-arrow"></span>
              </span>
          </span>

          <span class="menu-icon">
              <i class="icon-placeholder mdi mdi-bank "></i>
          </span>
      </a>
      <!--submenu-->
      <ul class="sub-menu">
          <li class="menu-item ">
              <a href="office/financial/transactions" class=" menu-link">
                  <span class="menu-label">
                      <span class="menu-name">Extracts</span>
                  </span>
                  <span class="menu-icon">
                      <i class="icon-placeholder mdi mdi-bank-transfer"></i>
                  </span>
              </a>
          </li>
          <li class="menu-item ">
              <a href="office/financial/deposits" class=" menu-link">
                  <span class="menu-label">
                      <span class="menu-name">Deposits</span>
                  </span>
                  <span class="menu-icon">
                      <i class="icon-placeholder  mdi mdi-bank-transfer-in "></i>
                  </span>
              </a>
          </li>
                </ul>
    </li>


    
    <li class="menu-item  ">
      <a href="2fa/enable" class=" menu-link">
          <span class="menu-label">
              <span class="menu-name">Active 2FA                  
              </span>
          </span>

          <span class="menu-icon">
              <i class="icon-placeholder mdi mdi-lock "></i>
          </span>
      </a>
    </li>
    

    <li class="menu-item ">
        <a href="office/account" class="menu-link">
            <span class="menu-label">
                <span class="menu-name">My Account                    
                </span>
            </span>

            <span class="menu-icon">
                <i class="icon-placeholder mdi mdi-account "></i>
            </span>
        </a>
    </li>

    <li class="menu-item ">
        <a href="/office/downloads" class="menu-link">
            <span class="menu-label">
                <span class="menu-name"> Downloads
                    
                </span>
            </span>

            <span class="menu-icon">
                <i class="icon-placeholder mdi mdi-download "></i>
            </span>
        </a>
    </li>

    
    <li class="menu-item ">
        <a href="auth/logout" class="menu-link">
            <span class="menu-label">
                <span class="menu-name">Logout                    
                </span>
            </span>

            <span class="menu-icon">
                <i class="icon-placeholder mdi mdi-logout "></i>
            </span>
        </a>
    </li>


  
</ul>        <div class="app-sidebar--footer d-block text-center py-3">
    <div class="row justify-content-center">
        <div class="d-inline-block">
            <img style="max-height: 25px;" class="flag mr-2" src="assets/images/flags/en.png">
        </div>

                    <a class="d-inline-block" href="lang/es_ES">
                <div class="row no-gutters align-items-center flex-nowrap">
                    <img style="max-height: 25px;" class="flag mr-2" src="assets/images/flags/es_ES.png">
                    
                </div>
            </a>
                    <a class="d-inline-block" href="lang/fr_FR">
                <div class="row no-gutters align-items-center flex-nowrap">
                    <img style="max-height: 25px;" class="flag mr-2" src="assets/images/flags/fr_FR.png">
                    
                </div>
            </a>
                    <a class="d-inline-block" href="lang/it">
                <div class="row no-gutters align-items-center flex-nowrap">
                    <img style="max-height: 25px;" class="flag mr-2" src="assets/images/flags/it.png">
                    
                </div>
            </a>
            </div>
</div>    </div>

</aside>


<script src="assets/theme/petron/vendor/jquery/jquery.min.js"></script>
<script src="assets/theme/petron/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/theme/petron/vendor/popper/popper.js"></script>
<script src="assets/theme/petron/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/theme/petron/vendor/select2/js/select2.full.min.js"></script>
<script src="assets/theme/petron/vendor/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/theme/petron/vendor/listjs/listjs.min.js"></script>
<script src="assets/theme/petron/vendor/moment/moment.min.js"></script>
<script src="assets/theme/petron/vendor/daterangepicker/daterangepicker.js"></script>
<script src="assets/theme/petron/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/theme/petron/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/theme/petron/js/atmos.min.js"></script>
<!--page specific scripts for demo-->
<script src="assets/theme/petron/vendor/DataTables/datatables.min.js"></script>
<script src="assets/theme/petron/js/datatable-data.js"></script>

<!--Additional Page includes-->
<script src="assets/theme/petron/vendor/apexchart/apexcharts.min.js"></script>
<!--chart data for current dashboard-->
<script src="assets/theme/petron/js/dashboard-01.js"   ></script>

<!-- IntlTelInput -->
<script type="text/javascript" src="assets/vendor/tel-input/js/intlTelInput.js"></script>

<!-- Jquery Countdown -->
<script type="text/javascript" src="assets/vendor/jquery.countdown.min.js"></script>