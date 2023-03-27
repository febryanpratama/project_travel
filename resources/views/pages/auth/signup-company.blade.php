<!DOCTYPE html>

<!-- =========================================================
* Frest - Bootstrap Admin Template | v1.0.0
==============================================================

* Product Page: https://1.envato.market/frest_admin
* Created by: PIXINVENT
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright PIXINVENT (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-bordered"
  data-assets-path="{{ url('') }}/admin/assets/"
  data-template="vertical-menu-template-bordered"
>
  <!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-bordered/auth-register-multisteps.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2022 12:03:04 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>
      Multi Steps Sign-up - Pages | Frest - Bootstrap Admin Template
    </title>

    <meta
      name="description"
      content="Start your development with a Dashboard for Bootstrap 5"
    />
    <meta
      name="keywords"
      content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5"
    />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin" />

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/x-icon"
      href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/assets/img/favicon/favicon.ico"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('') }}/admin/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ url('') }}/admin/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ url('') }}/admin/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link
      rel="stylesheet"
      href="{{ url('') }}/admin/assets/vendor/css/rtl/core.css"
      class="template-customizer-core-css"
    />
    <link
      rel="stylesheet"
      href="{{ url('') }}/admin/assets/vendor/css/rtl/theme-bordered.css"
      class="template-customizer-theme-css"
    />
    <link rel="stylesheet" href="{{ url('') }}/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link
      rel="stylesheet"
      href="{{ url('') }}/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"
    />
    <link
      rel="stylesheet"
      href="{{ url('') }}/admin/assets/vendor/libs/typeahead-js/typeahead.css"
    />
    <!-- Vendor -->
    <link
      rel="stylesheet"
      href="{{ url('') }}/admin/assets/vendor/libs/bs-stepper/bs-stepper.css"
    />
    <link
      rel="stylesheet"
      href="{{ url('') }}/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css"
    />
    <link
      rel="stylesheet"
      href="{{ url('') }}/admin/assets/vendor/libs/select2/select2.css"
    />
    <link
      rel="stylesheet"
      href="{{ url('') }}/admin/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css"
    />

    <!-- Page CSS -->

    <!-- Page -->
    <link rel="stylesheet" href="{{ url('') }}/admin/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="{{ url('') }}/admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ url('') }}/admin/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('') }}/admin/assets/js/config.js"></script>

    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.8/sweetalert2.css" integrity="sha512-JzSVRb7c802/njMbV97pjo1wuJAE/6v9CvthGTDxiaZij/TFpPQmQPTcdXyUVucsvLtJBT6YwRb5LhVxX3pQHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin='' /> --}}


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async="async"
      src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "GA_MEASUREMENT_ID");
    </script>

    <style>
        .text-center {
            text-align: center;
        }
        #map {
            width: '100%';
            height: 400px;
        }
    </style>
    <link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin='' />

    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->
</head>

<body>
  <!-- Content -->

  <div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">
      <!-- Left Text -->
      <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
        <div class="w-px-400">
          <img src="{{ url('') }}/admin/assets/img/illustrations/create-account-light.png" class="img-fluid scaleX-n1-rtl"
            alt="multi-steps" width="600" data-app-light-img="illustrations/create-account-light.png"
            data-app-dark-img="illustrations/create-account-dark.png" />
        </div>
      </div>
      <!-- /Left Text -->

      <!--  Multi Steps Registration -->
      <div class="d-flex col-lg-8 authentication-bg p-sm-5 p-3">
        <div class="d-flex flex-column w-px-700 mx-auto">
          <!-- Logo -->
          <div class="app-brand border-bottom mx-3 mb-4">
            <a href="index.html" class="app-brand-link gap-2 mb-3">
              <span class="app-brand-logo demo">
                <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>icon</title>
                  <defs>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                      <stop stop-color="#5A8DEE" offset="0%"></stop>
                      <stop stop-color="#699AF9" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                      <stop stop-color="#FDAC41" offset="0%"></stop>
                      <stop stop-color="#E38100" offset="100%"></stop>
                    </linearGradient>
                  </defs>
                  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                      <g id="Login" transform="translate(519.000000, 244.000000)">
                        <g id="Logo" transform="translate(148.000000, 42.000000)">
                          <g id="icon" transform="translate(0.000000, 4.000000)">
                            <path
                              d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                              id="Combined-Shape" fill="#4880EA"></path>
                            <path
                              d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                              id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818"
                              height="7.68181818"></rect>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo h3 mb-0 fw-bold">Frest</span>
            </a>
          </div>
          <!-- /Logo -->

          <div class="my-auto">
            <div id="multiStepsValidation" class="bs-stepper shadow-none">
              <div class="bs-stepper-header">
                <div class="step" data-target="#accountDetailsValidation">
                  <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle">
                      <i class="bx bx-home"></i>
                    </span>
                    <span class="bs-stepper-label">
                      <span class="bs-stepper-title">Account</span>
                      <span class="bs-stepper-subtitle">Account Details</span>
                    </span>
                  </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#personalInfoValidation">
                  <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle">
                      <i class="bx bx-user"></i>
                    </span>
                    <span class="bs-stepper-label">
                      <span class="bs-stepper-title">Personal</span>
                      <span class="bs-stepper-subtitle">Enter Information</span>
                    </span>
                  </button>
                </div>
                {{-- <div class="line"></div>
                <div class="step" data-target="#billingLinksValidation">
                  <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle">
                      <i class="bx bx-detail"></i>
                    </span>
                    <span class="bs-stepper-label">
                      <span class="bs-stepper-title">Billing</span>
                      <span class="bs-stepper-subtitle">Payment Details</span>
                    </span>
                  </button>
                </div> --}}
              </div>
              <div class="bs-stepper-content pt-4">
                <form id="multiStepsForm" method="POST" action="{{ url("signup-company") }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="latitude" id="latitude">
                  <input type="hidden" name="longitude" id="longitude">
                  <!-- Account Details -->
                  <div id="accountDetailsValidation" class="content">
                    <div class="content-header mb-3">
                      <h4>Account Information</h4>
                      <span>Enter Your Account Details</span>
                    </div>
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <label class="form-label" for="multiStepsUsername">Nama Perusahaan</label>
                        <input type="text" name="name" id="multiStepsUsername" class="form-control"
                          placeholder="johndoe" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                          placeholder="john.doe@email.com" aria-label="john.doe" />
                      </div>
                      <div class="col-sm-6 form-password-toggle">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge">
                          <input type="password" id="password" name="password" class="form-control"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="multiStepsPass2" />
                          <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i
                              class="bx bx-hide"></i></span>
                        </div>
                      </div>
                      <div class="col-sm-6 form-password-toggle">
                        <label class="form-label" for="repassword">Confirm Password</label>
                        <div class="input-group input-group-merge">
                          <input type="password" id="repassword" name="repassword"
                            class="form-control"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="multiStepsConfirmPass2" />
                          <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i
                              class="bx bx-hide"></i></span>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="identity_number">Nomor SK Perusahaan</label>
                        <input type="text" id="identity_number" name="identity_number"
                          class="form-control" placeholder="Identity Number" />
                      </div>
                    
                      <div class="col-sm-6">
                        <label class="form-label" for="pob">State</label>
                        <select name="state" id="state" class="form-control">
                            <option value="" selected disabled> == Pilih == </option>
                            @foreach ($state as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                      </div>

                      <div class="col-sm-6">
                        <label class="form-label" for="pob">City</label>
                        <select name="city" id="city" class="form-control">
                            <option value="" selected disabled> == Pilih == </option>
                            <div id="cities">

                            </div>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="pob">District</label>
                        <select name="district" id="district" class="form-control">
                            <option value="" selected disabled> == Pilih == </option>
                            
                        </select>
                      </div>

                      <div class="col-sm-6">
                        <label class="form-label" for="pob">Villages</label>
                        <select name="villages" id="villages" class="form-control">
                            <option value="" selected disabled> == Pilih == </option>

                        </select>
                      </div>

                      <div class="col-sm-12">
                        <label class="form-label" for="pob">Address</label>
                        <textarea name="address" class="form-control" cols="30" rows="10"></textarea>
                      </div>

                      <div class="col-sm-6">
                        <label class="form-label" for="phone_number_1">Phone Number 1</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text">ID (+62)</span>
                          <input type="text" name="phone_number_1"
                            class="form-control multi-steps-mobile" placeholder="8123513555" />
                        </div>
                      </div>
                     

                      <div class="col-sm-6">
                        <label class="form-label" for="pob">Photo</label>
                        <input type="file" name="photo_user" class="form-control ">
                      </div>

                      <div class="col-12 d-flex justify-content-between mt-4">
                        <button class="btn btn-primary btn-prev">
                          <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                          <span class="d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button type="submit" class="btn btn-success btn-next btn-submit">
                          Submit
                        </button>
                      </div>
                      {{-- <div class="col-md-12">
                        <label class="form-label" for="multiStepsURL">Profile Link</label>
                        <input type="text" name="multiStepsURL" id="multiStepsURL" class="form-control"
                          placeholder="johndoe/profile" aria-label="johndoe" />
                      </div> --}}
                      {{-- <div class="col-12 d-flex justify-content-between mt-4">
                        <button class="btn btn-label-secondary btn-prev" disabled>
                          <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                          <span class="d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-next">
                          <span class="d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                          <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                        </button>
                      </div> --}}
                    </div>
                  </div>
                  <!-- Personal Info -->
                  <div id="personalInfoValidation" class="content">
                    <div class="content-header mb-3">
                      <h4>Personal Information</h4>
                      <span>Enter Your Personal Information</span>
                    </div>
                    
                      
                    </div>
                  </div>
                  <!-- Billing Links -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Multi Steps Registration -->
    </div>
  </div>

  <script>
    // Check selected custom option
    window.Helpers.initCustomOptionCheck();
  </script>

  <!-- / Content -->

  <div class="buy-now">
    <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ url('') }}/admin/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/js/bootstrap.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="{{ url('') }}/admin/assets/vendor/libs/hammer/hammer.js"></script>

  <script src="{{ url('') }}/admin/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/libs/typeahead-js/typeahead.js"></script>

  <script src="{{ url('') }}/admin/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ url('') }}/admin/assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/libs/select2/select2.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="{{ url('') }}/admin/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

  <!-- Main JS -->
  <script src="{{ url('') }}/admin/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="{{ url('') }}/admin/assets/js/pages-auth-multisteps.js"></script>
  <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
  {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.8/sweetalert2.min.js" integrity="sha512-c1AfYKag4intaizqJC0Zx1NxImYP7B2namyOLbpFW3P12oYkZjQGQ/8r6N75SlWidbm7oQElnVZqBzRvFtU0Hw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
  {{-- <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script> --}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALEY9XSRU4ipaCR1u6iSXdOYmEMU75t8c&callback=initMap&v=weekly"></script>

        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALEY9XSRU4ipaCR1u6iSXdOYmEMU75t8c&callback=initMap&v=weekly" defer></script> --}}



  <script>
      $(document).ready(function(){

        // Swal.fire(
        // 'Good job!',
        // 'You clicked the button!',
        // 'success'
        // )
          // Basic
          $('.dropify').dropify();

          // Translated
          $('.dropify-fr').dropify({
              messages: {
                  default: 'Glissez-déposez un fichier ici ou cliquez',
                  replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                  remove:  'Supprimer',
                  error:   'Désolé, le fichier trop volumineux'
              }
          });

          $('#state').on('change', function() {
            $('#city').html('');
            $('#district').html('');
            $('#ville').html('');
            let province_id = this.value;
            $.ajax({
                url: "{{ url('') }}/api/city/"+province_id,
                type: "GET",
                dataType: "json",
                success: function (result) {
                    // console.log(data);
                    if (result.status == true) {
                      console.log("ok")
                      var html = '';

                      $.each(result.data, function(index){
                        $('#city').append('<option value="'+result.data[index].id+'">'+result.data[index].name+'</option>');
                      })
                }
            }
          })
          })
          
          $('#city').on('change', function() {
            $('#district').html('');
            $('#villages').html('');
            let city_id = this.value;
              $.ajax({
                  url: "{{ url('') }}/api/district/"+city_id,
                  type: "GET",
                  dataType: "json",
                  success: function (result) {
                      // console.log(data);
                      if (result.status == true) {
                        console.log("city")
                        var html = '';

                        $.each(result.data, function(index){
                          $('#district').append('<option value="'+result.data[index].id+'">'+result.data[index].name+'</option>');
                        })
                  }
              }
            })
          })
          ;


          $('#district').on('change', function(){
            $('#villages').html('');
            let district_id = this.value;
            $.ajax({
                url: "{{ url('') }}/api/village/"+district_id,
                type: "GET",
                dataType: "json",
                success: function (result) {
                    // console.log(data);
                    if (result.status == true) {
                      console.log("district")
                      var html = '';

                      $.each(result.data, function(index){
                        $('#villages').append('<option value="'+result.data[index].id+'">'+result.data[index].name+'</option>');
                      })
                }
            }
          })
          })

      });
  </script>


  <script>

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var accuracy = position.coords.accuracy;
            var coords = new google.maps.LatLng(latitude, longitude);
            var mapOptions = {
                zoom: 15,
                center: coords,
                mapTypeControl: true,
                navigationControlOptions: {
                    style: google.maps.NavigationControlStyle.SMALL
                },
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            $('#latitude').val(latitude);
            $('#longitude').val(longitude);

            localstorage.setItem('latitude', latitude);
            localstorage.setItem('longitude', longitude);


            map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({
                position: coords,
                map: map,
                title: "ok"
            });

        },
        function error(msg) {
          // console.log(msg);
                  Swal.fire({
                    title: 'Location Not Allowed',
                    text: "Please turn on your location",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.reload();
                    }
                  })

                  // window.location.reload();
        },
        {
          maximumAge:10000, 
          timeout:5000, 
          enableHighAccuracy: true
        }
      );
    } else {
        alert("Geolocation API is not supported in your browser.");
    }

    navigator.permissions && navigator.permissions.query({name: 'geolocation'})
      .then(function(PermissionStatus) {
          if (PermissionStatus.state == 'granted') {
                //allowed
                // console.log("allowed");
          } else if (PermissionStatus.state == 'prompt') {
                // prompt - not yet grated or denied
                // console.log("prompt");
          } else {
              //denied
              //  console.log("denied");
          }
      })

</script>
</body>

<!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-bordered/auth-register-multisteps.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2022 12:03:05 GMT -->

</html>