<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-bordered" data-assets-path="{{ asset('') }}admin/assets/" data-template="vertical-menu-template-bordered">
    <!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-bordered/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2022 12:02:25 GMT -->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Dashboard - Analytics | Frest - Bootstrap Admin Template</title>

        <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
        <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5" />
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://1.envato.market/frest_admin" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/assets/img/favicon/favicon.ico" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
            rel="stylesheet"
        />

        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/fonts/boxicons.css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/fonts/fontawesome.css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/fonts/flag-icons.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/css/rtl/theme-bordered.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/typeahead-js/typeahead.css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/apex-charts/apex-charts.css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/typeahead-js/typeahead.css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/flatpickr/flatpickr.css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/animate-css/animate.css" />
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/sweetalert2/sweetalert2.css" />
        <!-- Row Group CSS -->
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
        <!-- Form Validation -->
        <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />


        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="{{ asset('') }}admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('') }}admin/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('') }}admin/assets/js/config.js"></script>

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="{{ asset('') }}admin/assets/vendor/js/helpers.js"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="{{ asset('') }}admin/assets/vendor/js/template-customizer.js"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('') }}admin/assets/js/config.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "GA_MEASUREMENT_ID");
        </script>
        <!-- Custom notification for demo -->
        <!-- beautify ignore:end -->
    </head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                @include("layouts._partials.sidebar_admin")
                <!-- / Menu -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->

                    @include('layouts._partials.header_admin')

                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->

                        @yield('content')
                        <!-- / Content -->

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with ❤️ by <a href="https://pixinvent.com/" target="_blank" class="footer-link fw-semibold">PIXINVENT</a>
                                </div>
                                <div>
                                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

                                    <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation-bs5/" target="_blank" class="footer-link me-4">Documentation</a>

                                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                                </div>
                            </div>
                        </footer>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>

            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->

        <div class="buy-now">
            <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
        </div>

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('') }}admin/assets/vendor/libs/jquery/jquery.js"></script>
        {{-- <script src="{{ asset('') }}admin/assets/vendor/libs/popper/popper.js"></script> --}}
        <script src="{{ asset('') }}admin/assets/vendor/js/bootstrap.js"></script>
        <script src="{{ asset('') }}admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="{{ asset('') }}admin/assets/vendor/libs/hammer/hammer.js"></script>

        <script src="{{ asset('') }}admin/assets/vendor/libs/i18n/i18n.js"></script>
        <script src="{{ asset('') }}admin/assets/vendor/libs/typeahead-js/typeahead.js"></script>

        <script src="{{ asset('') }}admin/assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('') }}admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>
        <script src="{{ asset('') }}admin/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>


        <!-- Main JS -->
        <script src="{{ asset('') }}admin/assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="{{ asset('') }}admin/assets/js/dashboards-analytics.js"></script>

        <script>
            $(document).ready(function() {
                $('.dropify').dropify();

                @if (session('success'))
                    Swal.fire({
                        title: "Good job!",
                        text: "{{ session('success') }}",
                        icon: "success",
                        customClass: { confirmButton: "btn btn-primary" },
                        buttonsStyling: !1,
                    });
                @endif()

                @if (session('error'))
                    Swal.fire({
                        title: "Error!",
                        text: "{{ session('error') }}",
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary" },
                        buttonsStyling: !1,
                    });
                @endif()
            });
        </script>
        {{-- <script>
            $(document).ready(function(){

                $('.dropify').dropify();
                // @if (session('success'))

                @if (session('success'))
                    Swal.fire({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        customClass: { confirmButton: "btn btn-primary" },
                        buttonsStyling: !1,
                    });
                @endif()
                // @endif ()

                // @if (session('errors'))
                swal("Oh No !", "{{ session('errors') }}", "errors");
                // @endif ()
            })
        </script> --}}

        @yield('script')
        
    </body>

    <!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-bordered/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2022 12:02:27 GMT -->
</html>
