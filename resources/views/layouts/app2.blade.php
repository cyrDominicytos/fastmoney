
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>Acheter de l'or - Gold-Coin</title>
<link rel="icon" href="{{ asset('/assets/fastmoney/site/images/fast_money.jpg') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}">
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.min.js') }}"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/fastmoney/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/fastmoney/vendor/jquery-scrollbar/jquery.scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/jquery-ui/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/timepicker/bootstrap-timepicker.min.css') }}">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/fonts/jost/jost.css') }}">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/fastmoney/fonts/materialdesignicons/materialdesignicons.min.css') }}">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/fastmoney/css/atmos.min.css') }}">

<!-- Additional library for page -->
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/DataTables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">

<!-- IntlTelInput -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/tel-input/css/intlTelInput.css') }}">

    <style type="text/css">
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155054738-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-155054738-1');
    </script>
</head>
<body class="sidebar-pinned page-home">


<aside class="admin-sidebar" >
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="{{ asset('/assets/fastmoney/site/images/logo210_76.png') }}" width="105" alt="Logo">
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
        <a href="{{ Route('buy') }}" class=" menu-link">
            <span class="menu-label">
                <span class="menu-name">Acheter l'or                    
                </span>
            </span>

            <span class="menu-icon">
                <i class="icon-placeholder mdi mdi-barrel "></i>
            </span>
        </a>
    </li>
    
   

  
    <li class="menu-item  ">
      <a href="{{ Route('indication') }}" class=" menu-link">
          <span class="menu-label">
              <span class="menu-name">Mes Indications                 
              </span>
          </span>

          <span class="menu-icon">
              <i class="icon-placeholder mdi mdi-account-multiple-plus "></i>
          </span>
      </a>
    </li>
    
    <li class="menu-item ">
      <a href="#" class="open-dropdown menu-link">
          <span class="menu-label">
              <span class="menu-name">Transactions                  <span class="menu-arrow"></span>
              </span>
          </span>

          <span class="menu-icon">
              <i class="icon-placeholder mdi mdi-bank "></i>
          </span>
      </a>
      <!--submenu-->
      <ul class="sub-menu">
          <li class="menu-item ">
              <a href="{{ Route('retrait') }}" class=" menu-link">
                  <span class="menu-label">
                      <span class="menu-name">Retraits</span>
                  </span>
                  <span class="menu-icon">
                      <i class="icon-placeholder mdi mdi-bank-transfer"></i>
                  </span>
              </a>
          </li>
          <li class="menu-item ">
              <a href="office/financial/deposits" class=" menu-link">
                  <span class="menu-label">
                      <span class="menu-name">Dépôts</span>
                  </span>
                  <span class="menu-icon">
                      <i class="icon-placeholder  mdi mdi-bank-transfer-in "></i>
                  </span>
              </a>
          </li>
                </ul>
    </li>

    

    <li class="menu-item ">
        <a href="{{ route('myProfil') }}" class="menu-link">
            <span class="menu-label">
                <span class="menu-name">Mon Compte                    
                </span>
            </span>

            <span class="menu-icon">
                <i class="icon-placeholder mdi mdi-account "></i>
            </span>
        </a>
    </li>
    
    <li class="menu-item ">
         <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
       
    </li>


  
</ul>        <div class="app-sidebar--footer d-block text-center py-3">
    <div class="row justify-content-center">
        <div class="d-inline-block">
            <img style="max-height: 25px;" class="flag mr-2" src="{{ asset('/assets/images/flags/en.png') }}">
        </div>

                    <a class="d-inline-block" href="lang/es_ES">
                <div class="row no-gutters align-items-center flex-nowrap">
                    <img style="max-height: 25px;" class="flag mr-2" src="assets/images/flags/es_ES.png">
                    
                </div>
            </a>
                    <a class="d-inline-block" href="lang/fr_FR">
                <div class="row no-gutters align-items-center flex-nowrap">
                    <img style="max-height: 25px;" class="flag mr-2" src="{{ asset('/assets/images/flags/fr_FR.png') }}">
                    
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
<main class="admin-main">
    <!--site header begins-->
    <header class="admin-header">

        <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

      
        <nav class=" ml-auto">
            <ul class="nav align-items-center">

                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link text-center" data-toggle="dropdown" >
                            
                            <i class="mdi mdi-24px mdi-account-group"></i>
                            <span class="d-flex" style="margin-top: -10px;">Binary Side</span> 
                        </a>
                        
                        <div class="dropdown-menu notification-container dropdown-menu-right">
                            <div class="d-flex p-all-15 bg-white justify-content-center border-bottom ">
                                <span class="h5 m-0">Binary Side</span>
                            </div>
                            <div class="notification-events bg-gray-300">
                                <div class="text-overline m-b-5">selected</div>
                                <a href="#" class="d-block m-b-10">
                                    <div class="card">
                                        <div class="card-body"> <i class="mdi mdi-circle text-success"></i>     Side of Binary:  Auto</div>
                                    </div>
                                </a>

                                <hr>
                                <div class="text-overline m-b-5">other options</div>                                                                                                                                    <a href="office/network/user/side_default/1" class="d-block m-b-10">
                                        <div class="card">
                                            <div class="card-body">
                                                Side of Binary:  Left
                                            </div>
                                        </div>
                                    </a>                                                                                                        <a href="office/network/user/side_default/2" class="d-block m-b-10">
                                        <div class="card">
                                            <div class="card-body">
                                                Side of Binary:  Right
                                            </div>
                                        </div>
                                    </a>
                                

                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <span class="avatar-title rounded-circle bg-dark"></span>

                        </div>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right"   >
                        <a class="dropdown-item" href="{{ route('myProfil') }}">  Mon Compte                        </a>
                        <div class="dropdown-divider"></div>
                         <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                       
                    </div>
                </li>

            </ul>

        </nav>
    </header>
    <!--site header ends -->    
    <section class="admin-content">
            <div class="container-fluid bg-dark m-b-30">
                <div class="row" style="background-color:blue;">
                    <div class="col-lg-8 col-md-7 col-sm-6 text-white p-t-40 p-md-b-90 p-sm-b-0">

                        <h4 class="  ">
                            <span class="btn btn-white-translucent">
                                <i class="mdi mdi-barrel"></i>
                            </span> 
                            Buy Barrel                        </h4>
                        <p class="opacity-75 mb-1">
                            Link to Indication ↓
                        </p>
                        <div class="input-group">
                            <input id="my-link-m" type="text" class="form-control" style="max-width: 400px;" value="register/Faissale" readonly >
                            <div class="input-group-append my-link-copy" style="cursor: pointer;" data-clipboard-target="#my-link-m"><span class="input-group-text"><i class="mdi mdi-content-copy"></i></span>
                                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 p-t-40 p-b-90">
                        <div class="card m-t-10 bg-warning">
                            <div class="card-body " >
                                <div class="row">
                                    <div class="my-auto col-md-7  col-6">

                                        <h4 class="m-0" id="balance-usd">$0.00</h4>
                                        <h4 class="m-0" id="balance-btc">0.00000000 Ƀ</h4>
                                        <p class="m-0"> Balance </p>
                                    </div>
                                    <div class="my-auto ml-auto text-right  col-md-5 col-6">
                                        <a href="#" class="btn btn-rounded-circle btn-lg btn-dark">
                                            <i class="mdi mdi-wallet text-warning"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
    </section>
</main>




<script src="{{ asset('/assets/fastmoney/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/popper/popper.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/listjs/listjs.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/moment/moment.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/') }}
/js/atmos.min.js"></script>
<!--page specific scripts for demo-->
<script src="{{ asset('/assets/fastmoney/vendor/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('/assets/fastmoney/js/datatable-data.js') }}"></script>

<!--Additional Page includes-->
<script src="{{ asset('/assets/fastmoney/vendor/apexchart/apexcharts.min.js') }}"></script>
<!--chart data for current dashboard-->
<script src="{{ asset('/assets/fastmoney/js/dashboard-01.js') }}"   ></script>

<!-- IntlTelInput -->
<script type="text/javascript" src="{{ asset('/assets/fastmoney/vendor/tel-input/js/intlTelInput.js') }}"></script>

<!-- Jquery Countdown -->
<script type="text/javascript" src="{{ asset('/assets/fastmoney/vendor/jquery.countdown.min.js') }}"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.12&appId=226528144108352&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
    (function ($) {
        "use strict";

        var telInput = $(".mobile-phone");
        telInput.addClass('intl-tel-input');

        telInput.intlTelInput({
          utilsScript: "/assets/vendor/tel-input/js/utils.js",
          preferredCountries: ["us"],
          placeholderNumberType: "MOBILE",
          nationalMode: false,
          separateDialCode: false,
          formatOnDisplay: true,
          autoPlaceholder: true,
        });

        telInput.on("keyup change", resetIntlTelInput);

        function resetIntlTelInput() {
          if (typeof intlTelInputUtils !== 'undefined') { // utils are lazy loaded, so must check
              var currentText = telInput.intlTelInput("getNumber", intlTelInputUtils.numberFormat.E164);
              if (typeof currentText === 'string') { // sometimes the currentText is an object :)
                  telInput.intlTelInput('setNumber', currentText); // will autoformat because of formatOnDisplay=true
              }
          }
        }

        var telInputGroup = $(".mobile-phone-group");

        telInput.blur(function() {
          if ($.trim(telInput.val())) {
            if(telInput.intlTelInput("isValidNumber") && (telInput.intlTelInput("getNumberType") == intlTelInputUtils.numberType.MOBILE || telInput.intlTelInput("getNumberType") == intlTelInputUtils.numberType.FIXED_LINE_OR_MOBILE)) {
                telInputGroup.removeClass("error");
            }else{
                telInput.val('');
                telInputGroup.addClass("error");
            }
          }
        });

        telInput.on('open:countrydropdown', function () {
            $(".form-group").addClass('not-will-change');
        });

        telInput.on('close:countrydropdown', function () {
            $(".form-group").removeClass('not-will-change');
        });

        $("#registerFormInputMobile").before($(".mobile-phone-group label"));
        $(".mobile-phone-ico").before($("#registerFormInputMobile"));

        $("#my-link").focus(function() {
           $(this).select();
        });

        $("#my-link").focus(function() {
           $(this).select();
        });
        $("#my-link").parent().click(function(){
          $("#my-link").select();
          document.execCommand("Copy");
        });

        $("#my-link-m").focus(function() {
           $(this).select();
        });

        $("#my-link-m").focus(function() {
           $(this).select();
        });
        $("#my-link-m").parent().click(function(){
          $("#my-link-m").select();
          document.execCommand("Copy");
        });

        //new ClipboardJS('.my-link-copy');

        $('.onboarding-modal.show-on-load').modal('show');
        if ($('.onboarding-modal .onboarding-slider-w').length) {
          $('.onboarding-modal .onboarding-slider-w').slick({
            dots: true,
            infinite: false,
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1
          });
          $('.onboarding-modal').on('shown.bs.modal', function (e) {
            $('.onboarding-modal .onboarding-slider-w').slick('setPosition');
          });

        }

        

    })(jQuery);
</script>

<!-- Modal Confirm -->
<div class="modal fade" id="modal-confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cancel">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>You are sure about this ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="#confirm-url" class="btn btn-success" id="confirm">Yes</a>
      </div>
    </div>
  </div>
</div>
<div id="fb-root"></div>
<script>
$(function(){
    $('#modal-confirm').on('show.bs.modal', function (e) {
      href = $(e.relatedTarget).attr('data-href');
      $(this).find('.modal-footer #confirm').attr('href', href);
    });
});
</script>
    <script type="text/javascript">
        $("#address").focus(function() {
           $(this).select();
        });
        
        setInterval(function() {
          window.location.reload();
        }, 30000);
    </script>
    <style>
    #countdown-btc-rate{
        display: block;
        line-height: 1em;
        font-size: 2em;
        margin-bottom: 20px;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
    }
</style>

<script>
    
            $('#countdown').html('<h6 class="tx-primary">Values needed in BTC can change in:</h6><span id="countdown-btc-rate"></span>');
        countdownDate = new Date("2021-04-04T17:01:00-04:00");
        $('#countdown-btc-rate').countdown(countdownDate, function(event) {$(this).html(event.strftime("%H:%M:%S"));}).on("finish.countdown", function(event) { location.reload(); });
    </script>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://petronpay.com/assets/js/buttons.server-side.js"></script>
  <script type="text/javascript">(function(window,$){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["dataTableBuilder"]=$("#dataTableBuilder").DataTable({"serverSide":true,"processing":true,"ajax":"","columns":[{"data":"id","name":"id","title":"#","searchable":true,"orderable":true},{"data":"value","name":"value","title":"Valeur","searchable":true,"orderable":true},{"data":"description","name":"description","title":"La description","searchable":true,"orderable":true},{"data":"created_at","name":"created_at","title":"Cr\u00e9\u00e9 \u00e0","searchable":true,"orderable":true}],"order":[[0,"DESC"]],"dom":"<\"row\"<\"col-sm-6\"lr><\"col-sm-6\"B>>t<\"dataTables_footer\"<\"row\"<\"col-sm-12 col-md-5\"i><\"col-sm-12 col-md-7\"p>>>","responsive":true,"lengthMenu":[[10,25,50,-1],[10,25,50,"All"]],"buttons":["copy","excel","pdf","print"],"initComplete":function () {
                            this.api().columns().every(function () {
                                var column = this;
                                var input = document.createElement("input");
                                $(input).appendTo($(column.footer()).empty())
                                .on('change', function () {
                                    column.search($(this).val(), false, false, true).draw();
                                });
                            });
                        }});})(window,jQuery);
</script>
</body>
</html>