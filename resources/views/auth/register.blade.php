<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>Créez votre compte - Crypto-Gold</title>
<link rel="icon" href="{{ asset('/assets/fastmoney/site/images/fast_money.jpg') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}">
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.min.js') }}"></script>

<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/fastmoney/css/atmos.min.css') }}">
<style type="text/css" media="screen">

    .intl-tel-input {
        width: 100%;
    }
</style>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="../www.googletagmanager.com/gtag/js1c44?id=UA-155054738-1"></script>
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
                        <h3 class="text-center p-b-20 fw-400">Créer votre compte</h3>
                        <p class="text-center mb-5">
                           Entrez vos informations afin de vous inscrire !   
                        </p>
                        
                        <div class="col-lg-12">
                           @include('layouts._alerts')
                       </div>           
<form method="POST" action="{{ route('register') }}">
 @csrf

    <div class="form-row">
        <div class="form-group floating-labe col-md-12">
            <label>Parrain</label>
            <input type="text" id="registerFormInputPartner" class="form-control " name="parrain" :value="old('parrain')" value="{{$parrain}}"  placeholder="Entrez le Parrain">
            <div class="invalid-feedback">
                
            </div>

        </div>
        <div class="form-group floating-labe col-md-12">
            <label>Nom d'Utilisateur <span style="color: red">*</span></label>
            <input  type="text" name="username" :value="old('username')" required autofocus autocomplete="username" class="form-control " id="username"  placeholder="Nom d'Utilisateur">
            <div class="invalid-feedback">
                
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group floating-labe col-md-12">
            <label>Nom et Prénom <span style="color: red">*</span></label>
            <input type="text" name="name" class="form-control " id="registerFormInputName" :value="old('name')" required="" placeholder="Nom et Prénom">
            <div class="invalid-feedback">
                
            </div>
        </div>
        <div class="form-group floating-labe col-md-12">
            <label>Adresse E-mail <span style="color: red">*</span></label>
            <input type="email" name="email" :value="old('email')" required class="form-control " id="email" value="" placeholder="Entrez votre adresse e-mail">
            <div class="invalid-feedback">
                
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group floating-labe col-md-12">
            <select class="form-control " id="registerFormInputCountry" name="pays">
                <option value="0" selected>Choisissez votre pays</option>
                                    <option value="Afghanistan" >Afghanistan</option>
                                    <option value="Albania" >Albania</option>
                                    <option value="Antarctica" >Antarctica</option>
                                    <option value="Algeria" >Algeria</option>
                                    <option value="American Samoa" >American Samoa</option>
                                    <option value="Andorra" >Andorra</option>
                                    <option value="Angola" >Angola</option>
                                    <option value="Antigua and Barbuda" >Antigua and Barbuda</option>
                                    <option value="Azerbaijan" >Azerbaijan</option>
                                    <option value="Argentina" >Argentina</option>
                                    <option value="Australia" >Australia</option>
                                    <option value="Austria" >Austria</option>
                                    <option value="Bahamas" >Bahamas</option>
                                    <option value="Bahrain" >Bahrain</option>
                                    <option value="BD" >Bangladesh</option>
                                    <option value="AM" >Armenia</option>
                                    <option value="BB" >Barbados</option>
                                    <option value="BE" >Belgium</option>
                                    <option value="BM" >Bermuda</option>
                                    <option value="BT" >Bhutan</option>
                                    <option value="BO" >Bolivia, Plurinational State of</option>
                                    <option value="BA" >Bosnia and Herzegovina</option>
                                    <option value="BW" >Botswana</option>
                                    <option value="BV" >Bouvet Island</option>
                                    <option value="BR" >Brazil</option>
                                    <option value="BZ" >Belize</option>
                                    <option value="IO" >British Indian Ocean Territory</option>
                                    <option value="SB" >Solomon Islands</option>
                                    <option value="VG" >Virgin Islands, British</option>
                                    <option value="BN" >Brunei Darussalam</option>
                                    <option value="BG" >Bulgaria</option>
                                    <option value="MM" >Myanmar</option>
                                    <option value="BI" >Burundi</option>
                                    <option value="BY" >Belarus</option>
                                    <option value="KH" >Cambodia</option>
                                    <option value="CM" >Cameroon</option>
                                    <option value="CA" >Canada</option>
                                    <option value="CV" >Cape Verde</option>
                                    <option value="KY" >Cayman Islands</option>
                                    <option value="CF" >Central African Republic</option>
                                    <option value="LK" >Sri Lanka</option>
                                    <option value="TD" >Chad</option>
                                    <option value="CL" >Chile</option>
                                    <option value="CN" >China</option>
                                    <option value="TW" >Taiwan, Province of China</option>
                                    <option value="CX" >Christmas Island</option>
                                    <option value="CC" >Cocos (Keeling) Islands</option>
                                    <option value="CO" >Colombia</option>
                                    <option value="KM" >Comoros</option>
                                    <option value="YT" >Mayotte</option>
                                    <option value="CG" >Congo</option>
                                    <option value="CD" >Congo, the Democratic Republic of the</option>
                                    <option value="CK" >Cook Islands</option>
                                    <option value="CR" >Costa Rica</option>
                                    <option value="HR" >Croatia</option>
                                    <option value="CU" >Cuba</option>
                                    <option value="CY" >Cyprus</option>
                                    <option value="CZ" >Czech Republic</option>
                                    <option value="BJ" >Benin</option>
                                    <option value="DK" >Denmark</option>
                                    <option value="DM" >Dominica</option>
                                    <option value="DO" >Dominican Republic</option>
                                    <option value="EC" >Ecuador</option>
                                    <option value="SV" >El Salvador</option>
                                    <option value="GQ" >Equatorial Guinea</option>
                                    <option value="ET" >Ethiopia</option>
                                    <option value="ER" >Eritrea</option>
                                    <option value="EE" >Estonia</option>
                                    <option value="FO" >Faroe Islands</option>
                                    <option value="FK" >Falkland Islands (Malvinas)</option>
                                    <option value="GS" >South Georgia and the South Sandwich Islands</option>
                                    <option value="FJ" >Fiji</option>
                                    <option value="FI" >Finland</option>
                                    <option value="AX" >Åland Islands</option>
                                    <option value="FR" >France</option>
                                    <option value="GF" >French Guiana</option>
                                    <option value="PF" >French Polynesia</option>
                                    <option value="TF" >French Southern Territories</option>
                                    <option value="DJ" >Djibouti</option>
                                    <option value="GA" >Gabon</option>
                                    <option value="GE" >Georgia</option>
                                    <option value="GM" >Gambia</option>
                                    <option value="PS" >Palestinian Territory, Occupied</option>
                                    <option value="DE" >Germany</option>
                                    <option value="GH" >Ghana</option>
                                    <option value="GI" >Gibraltar</option>
                                    <option value="KI" >Kiribati</option>
                                    <option value="GR" >Greece</option>
                                    <option value="GL" >Greenland</option>
                                    <option value="GD" >Grenada</option>
                                    <option value="GP" >Guadeloupe</option>
                                    <option value="GU" >Guam</option>
                                    <option value="GT" >Guatemala</option>
                                    <option value="GN" >Guinea</option>
                                    <option value="GY" >Guyana</option>
                                    <option value="HT" >Haiti</option>
                                    <option value="HM" >Heard Island and McDonald Islands</option>
                                    <option value="VA" >Holy See (Vatican City State)</option>
                                    <option value="HN" >Honduras</option>
                                    <option value="HK" >Hong Kong</option>
                                    <option value="HU" >Hungary</option>
                                    <option value="IS" >Iceland</option>
                                    <option value="IN" >India</option>
                                    <option value="ID" >Indonesia</option>
                                    <option value="IR" >Iran, Islamic Republic of</option>
                                    <option value="IQ" >Iraq</option>
                                    <option value="IE" >Ireland</option>
                                    <option value="IL" >Israel</option>
                                    <option value="IT" >Italy</option>
                                    <option value="CI" >Côte d&#039;Ivoire</option>
                                    <option value="JM" >Jamaica</option>
                                    <option value="JP" >Japan</option>
                                    <option value="KZ" >Kazakhstan</option>
                                    <option value="JO" >Jordan</option>
                                    <option value="KE" >Kenya</option>
                                    <option value="KP" >Korea, Democratic People&#039;s Republic of</option>
                                    <option value="KR" >Korea, Republic of</option>
                                    <option value="KW" >Kuwait</option>
                                    <option value="KG" >Kyrgyzstan</option>
                                    <option value="LA" >Lao People&#039;s Democratic Republic</option>
                                    <option value="LB" >Lebanon</option>
                                    <option value="LS" >Lesotho</option>
                                    <option value="LV" >Latvia</option>
                                    <option value="LR" >Liberia</option>
                                    <option value="LY" >Libya</option>
                                    <option value="LI" >Liechtenstein</option>
                                    <option value="LT" >Lithuania</option>
                                    <option value="LU" >Luxembourg</option>
                                    <option value="MO" >Macao</option>
                                    <option value="MG" >Madagascar</option>
                                    <option value="MW" >Malawi</option>
                                    <option value="MY" >Malaysia</option>
                                    <option value="MV" >Maldives</option>
                                    <option value="ML" >Mali</option>
                                    <option value="MT" >Malta</option>
                                    <option value="MQ" >Martinique</option>
                                    <option value="MR" >Mauritania</option>
                                    <option value="MU" >Mauritius</option>
                                    <option value="MX" >Mexico</option>
                                    <option value="MC" >Monaco</option>
                                    <option value="MN" >Mongolia</option>
                                    <option value="MD" >Moldova, Republic of</option>
                                    <option value="ME" >Montenegro</option>
                                    <option value="MS" >Montserrat</option>
                                    <option value="MA" >Morocco</option>
                                    <option value="MZ" >Mozambique</option>
                                    <option value="OM" >Oman</option>
                                    <option value="NA" >Namibia</option>
                                    <option value="NR" >Nauru</option>
                                    <option value="NP" >Nepal</option>
                                    <option value="NL" >Netherlands</option>
                                    <option value="CW" >Curaçao</option>
                                    <option value="AW" >Aruba</option>
                                    <option value="SX" >Sint Maarten (Dutch part)</option>
                                    <option value="BQ" >Bonaire, Sint Eustatius and Saba</option>
                                    <option value="NC" >New Caledonia</option>
                                    <option value="VU" >Vanuatu</option>
                                    <option value="NZ" >New Zealand</option>
                                    <option value="NI" >Nicaragua</option>
                                    <option value="NE" >Niger</option>
                                    <option value="NG" >Nigeria</option>
                                    <option value="NU" >Niue</option>
                                    <option value="NF" >Norfolk Island</option>
                                    <option value="NO" >Norway</option>
                                    <option value="MP" >Northern Mariana Islands</option>
                                    <option value="UM" >United States Minor Outlying Islands</option>
                                    <option value="FM" >Micronesia, Federated States of</option>
                                    <option value="MH" >Marshall Islands</option>
                                    <option value="PW" >Palau</option>
                                    <option value="PK" >Pakistan</option>
                                    <option value="PA" >Panama</option>
                                    <option value="PG" >Papua New Guinea</option>
                                    <option value="PY" >Paraguay</option>
                                    <option value="PE" >Peru</option>
                                    <option value="PH" >Philippines</option>
                                    <option value="PN" >Pitcairn</option>
                                    <option value="PL" >Poland</option>
                                    <option value="PT" >Portugal</option>
                                    <option value="GW" >Guinea-Bissau</option>
                                    <option value="TL" >Timor-Leste</option>
                                    <option value="PR" >Puerto Rico</option>
                                    <option value="QA" >Qatar</option>
                                    <option value="RE" >Réunion</option>
                                    <option value="RO" >Romania</option>
                                    <option value="RU" >Russian Federation</option>
                                    <option value="RW" >Rwanda</option>
                                    <option value="BL" >Saint Barthélemy</option>
                                    <option value="SH" >Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN" >Saint Kitts and Nevis</option>
                                    <option value="AI" >Anguilla</option>
                                    <option value="LC" >Saint Lucia</option>
                                    <option value="MF" >Saint Martin (French part)</option>
                                    <option value="PM" >Saint Pierre and Miquelon</option>
                                    <option value="VC" >Saint Vincent and the Grenadines</option>
                                    <option value="SM" >San Marino</option>
                                    <option value="ST" >Sao Tome and Principe</option>
                                    <option value="SA" >Saudi Arabia</option>
                                    <option value="SN" >Senegal</option>
                                    <option value="RS" >Serbia</option>
                                    <option value="SC" >Seychelles</option>
                                    <option value="SL" >Sierra Leone</option>
                                    <option value="SG" >Singapore</option>
                                    <option value="SK" >Slovakia</option>
                                    <option value="VN" >Viet Nam</option>
                                    <option value="SI" >Slovenia</option>
                                    <option value="SO" >Somalia</option>
                                    <option value="ZA" >South Africa</option>
                                    <option value="ZW" >Zimbabwe</option>
                                    <option value="ES" >Spain</option>
                                    <option value="SS" >South Sudan</option>
                                    <option value="SD" >Sudan</option>
                                    <option value="EH" >Western Sahara</option>
                                    <option value="SR" >Suriname</option>
                                    <option value="SJ" >Svalbard and Jan Mayen</option>
                                    <option value="SZ" >Swaziland</option>
                                    <option value="SE" >Sweden</option>
                                    <option value="CH" >Switzerland</option>
                                    <option value="SY" >Syrian Arab Republic</option>
                                    <option value="TJ" >Tajikistan</option>
                                    <option value="TH" >Thailand</option>
                                    <option value="TG" >Togo</option>
                                    <option value="TK" >Tokelau</option>
                                    <option value="TO" >Tonga</option>
                                    <option value="TT" >Trinidad and Tobago</option>
                                    <option value="AE" >United Arab Emirates</option>
                                    <option value="TN" >Tunisia</option>
                                    <option value="TR" >Turkey</option>
                                    <option value="TM" >Turkmenistan</option>
                                    <option value="TC" >Turks and Caicos Islands</option>
                                    <option value="TV" >Tuvalu</option>
                                    <option value="UG" >Uganda</option>
                                    <option value="UA" >Ukraine</option>
                                    <option value="MK" >Macedonia, the former Yugoslav Republic of</option>
                                    <option value="EG" >Egypt</option>
                                    <option value="GB" >United Kingdom</option>
                                    <option value="GG" >Guernsey</option>
                                    <option value="JE" >Jersey</option>
                                    <option value="IM" >Isle of Man</option>
                                    <option value="TZ" >Tanzania, United Republic of</option>
                                    <option value="US" >United States</option>
                                    <option value="VI" >Virgin Islands, U.S.</option>
                                    <option value="BF" >Burkina Faso</option>
                                    <option value="UY" >Uruguay</option>
                                    <option value="UZ" >Uzbekistan</option>
                                    <option value="VE" >Venezuela, Bolivarian Republic of</option>
                                    <option value="WF" >Wallis and Futuna</option>
                                    <option value="WS" >Samoa</option>
                                    <option value="YE" >Yemen</option>
                                    <option value="ZM" >Zambia</option>
                            </select>
            <div class="invalid-feedback">
                
            </div>
        </div>
        <div class="form-group floating-labe col-md-12">
            <label>Télephone mobile</label>
            <input type="tel" name="tel" class="form-control intl-tel-input mobile-phone" id="registerFormInputMobile" value="">
                 
            <div class="invalid-feedback ">
                    
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group floating-labe col-md-6">
            <label>Entrez un mot de passe</label>
            <input type="password" name="password" required autocomplete="new-password" class="form-control " id="password" placeholder="Entrez un mot de passe">
            <div class="invalid-feedback">
                
            </div>
        </div>

        <div class="form-group floating-labe col-md-6">
            <label>Confirmez le mot de passe</label>
            <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control " id="password_confirmation" placeholder="Confirmez le mot de passe">
            <div class="invalid-feedback">
                
            </div>
        </div>
    </div>
    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-jet-label for="terms">
                <div class="flex items-center">
                    <x-jet-checkbox name="terms" id="terms"/>

                    <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-jet-label>
        </div>
    @endif
    <p class="">
        <label class="cstm-switch">
            <input type="checkbox" checked name="option" value="1" class="cstm-switch-input">
            <span class="cstm-switch-indicator "></span>
            <span class="cstm-switch-description">  I agree to the <a href="#" data-toggle="modal" data-target="#terms_services">Terms and Privacy.</a></span>
        </label>


    </p>

    <button type="submit" class="btn btn-primary btn-block btn-lg">S'inscrire</button>

</form>
<p class="text-right p-t-10">
    <a href="{{ route('login') }}" class="text-underline">J'ai déjà un compte</a>
</p>

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
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Politique</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>





<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/popper/popper.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/select2/js/select2.full.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/listjs/listjs.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/moment/moment.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/daterangepicker/daterangepicker.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/js/atmos.min.js"></script>
<!--page specific scripts for demo-->
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/DataTables/datatables.min.js"></script>
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/js/datatable-data.js"></script>

<!--Additional Page includes-->
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/vendor/apexchart/apexcharts.min.js"></script>
<!--chart data for current dashboard-->
<script src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/theme/petron/js/dashboard-01.js"   ></script>

<!-- IntlTelInput -->
<script type="text/javascript" src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/vendor/tel-input/js/intlTelInput.js"></script>

<!-- Jquery Countdown -->
<script type="text/javascript" src="{{ asset('/assets/fastmoney/vendor/pace/pace.css') }}/vendor/jquery.countdown.min.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '../connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.12&appId=226528144108352&autoLogAppEvents=1';
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
    <script type="text/javascript">
        $('#registerFormInputEmailConfirmation').bind('copy paste', function (e) { e.preventDefault(); });
    </script>



</body>

<!-- Mirrored from petronpay.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 23:04:13 GMT -->
</html>