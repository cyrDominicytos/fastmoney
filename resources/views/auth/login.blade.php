<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>Connectez-vous à votre compte - Crypto-Gold</title>
<link rel="icon" href="{{ asset('/assets/fastmoney/site/images/fast_money.jpg') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}">
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.min.js') }}"></script>

<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/fastmoney/css/atmos.min.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="../../www.googletagmanager.com/gtag/js1c44?id=UA-155054738-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-155054738-1');
    </script>
</head>
<body class="jumbo-page">


<main class="admin-main  ">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-4  bg-white">
                <div class="row align-items-center m-h-100">
                    <div class="mx-auto col-md-8">
                        <div class="p-b-20 text-center">
                            <p>
                                <a href="{{route('home')}}"><img src="{{ asset('/assets2/images/gold6.png') }}" width="210" alt=""></a>

                            </p>
                        </div>
                        <h3 class="text-center p-b-20 fw-400">Connectez-vous à votre compte</h3>
                        <p class="text-center mb-5">
                          Authentifiez-vous pour accéder à vos informations personnelles !    
                        </p>

                    <div class="col-lg-12">
                           @include('layouts._alerts')
                    </div> 
                        
     
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
        @csrf

    <div class="form-row">
        <div class="form-group floating-label col-md-12">
            <label>E-mail or Login</label>
            <input type="text" class="form-control " placeholder="Entrer votre pseudo" id="loginFormInputLogin" name="username">
            <div class="invalid-feedback">
                
            </div>
        </div>
        <div class="form-group floating-label col-md-12">
            <label>Password</label>
            <input type="password" class="form-control " placeholder="Enter your password" id="passwordFormInputLogin" name="password">
            <div class="invalid-feedback">
                
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-block btn-lg">Se connecter</button>

</form>
  @if (Route::has('password.request'))
    <p class="text-right p-t-10">
        <a href="{{ route('password.request') }}" class="text-underline">Mot de passe oublié?</a>
    </p>            
  @endif
 @if (Route::has('register'))
 <div class="text-center">
        <p class="mt-5">Pas de compte ?            <a href="{{ route('register') }}">S'inscrire</a>
        </p>
    </div>
           
 @endif

         </div>

                </div>
            </div>
            <div class="col-lg-8 d-none d-md-block bg-cover" style="background-image: url('{{ asset('/assets2/images/gold4.jpg') }}');">

            </div>
        </div>
    </div>
</main>


    <div class="modal fade" id="terms_services" tabindex="-1" role="dialog" aria-labelledby="terms_services" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Privacy Policy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





<script src="../assets/theme/petron/vendor/jquery/jquery.min.js"></script>
<script src="../assets/theme/petron/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/theme/petron/vendor/popper/popper.js"></script>
<script src="../assets/theme/petron/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/theme/petron/vendor/select2/js/select2.full.min.js"></script>
<script src="../assets/theme/petron/vendor/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/theme/petron/vendor/listjs/listjs.min.js"></script>
<script src="../assets/theme/petron/vendor/moment/moment.min.js"></script>
<script src="../assets/theme/petron/vendor/daterangepicker/daterangepicker.js"></script>
<script src="../assets/theme/petron/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/theme/petron/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../assets/theme/petron/js/atmos.min.js"></script>
<!--page specific scripts for demo-->
<script src="../assets/theme/petron/vendor/DataTables/datatables.min.js"></script>
<script src="../assets/theme/petron/js/datatable-data.js"></script>

<!--Additional Page includes-->
<script src="../assets/theme/petron/vendor/apexchart/apexcharts.min.js"></script>
<!--chart data for current dashboard-->
<script src="../assets/theme/petron/js/dashboard-01.js"   ></script>

<!-- IntlTelInput -->
<script type="text/javascript" src="../assets/vendor/tel-input/js/intlTelInput.js"></script>

<!-- Jquery Countdown -->
<script type="text/javascript" src="../assets/vendor/jquery.countdown.min.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '../../connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.12&appId=226528144108352&autoLogAppEvents=1';
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

<script>
$(function(){
    $('#modal-confirm').on('show.bs.modal', function (e) {
      href = $(e.relatedTarget).attr('data-href');
      $(this).find('.modal-footer #confirm').attr('href', href);
    });
});
</script>



</body>

<!-- Mirrored from petronpay.com/auth/login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 22:58:22 GMT -->
</html>