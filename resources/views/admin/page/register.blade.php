<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semplice - Register</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/footable.standalone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fullcalendar@5.2.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/jquery-jvectormap-2.0.5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/MarkerCluster.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/MarkerCluster.Default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/star-rating-svg.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/wickedpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <main class="main-content">

        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left position-relative">
                            <div class="signUP-overlay">
                                <img class="svg signupTop" src="{{ asset('img/svg/signupTop.svg') }}" alt="img" />
                                <img class="svg signupBottom" src="{{ asset('img/svg/signupBottom.svg') }}"
                                    alt="img" />
                            </div>
                            <div class="signUP-admin-left__content">
                                <div
                                    class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                    <a class="wh-36 bg-primary text-white radius-md mr-10 content-center"
                                        href="index.html">S</a>
                                    <span class="text-dark">Semplice</span>
                                </div>
                                <h1>Semplice Web Application</h1>
                            </div>
                            <div class="signUP-admin-left__img">
                                <img class="img-fluid svg" src="{{ asset('img/svg/signupIllustration.svg') }}"
                                    alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right  p-md-40 p-10">
                            <div
                                class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                <p class="mb-0">
                                    Already have an account?
                                    <a href="login.html" class="color-primary">
                                        Sign in
                                    </a>
                                </p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-10 col-md-12 ">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        <div class="card border-0">
                                            <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                                <div class="edit-profile__title">
                                                    <h6>Sign up to <span class="color-primary">Admin</span></h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="edit-profile__body">
                                                    <form id="formRegister">
                                                        @csrf
                                                        <div class="form-group mb-20">
                                                            <label for="name">name</label>
                                                            <input type="text" class="form-control" id="name"
                                                                placeholder="Full Name" name="name">
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="username">username</label>
                                                            <input type="text" class="form-control" id="username"
                                                                placeholder="Username" name="username">
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="email">Email Adress</label>
                                                            <input type="text" class="form-control" id="email"
                                                                placeholder="name@example.com" name="email">
                                                        </div>
                                                        <div class="form-group mb-15">
                                                            <label for="password-field">password</label>
                                                            <div class="position-relative">
                                                                <input id="password-field" type="password"
                                                                    class="form-control" name="password"
                                                                    value="secret">
                                                                <span
                                                                    class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="signUp-condition">
                                                        <div class="checkbox-theme-default custom-checkbox ">
                                                            <input class="checkbox" type="checkbox" id="check-1">
                                                            <label for="check-1">
                                                                <span class="checkbox-text">Creating an account means
                                                                    you’re okay
                                                                    with our <a href="#"
                                                                        class="color-secondary">Terms of
                                                                        Service</a> and <a href="#"
                                                                        class="color-secondary">Privacy
                                                                        Policy</a>
                                                                    my preference</span>
                                                            </label>
                                                        </div>
                                                    </div> --}}
                                                        <div
                                                            class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                            <button
                                                                class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signUp-createBtn signIn-createBtn"
                                                                type="submit">
                                                                Create Account
                                                            </button>
                                                        </div>
                                                    </form>
                                                    {{-- <p
                                                        class="social-connector text-center mb-md-25 mb-15  mt-md-30 mt-20 ">
                                                        <span>Or</span>
                                                    </p>
                                                    <div
                                                        class="button-group d-flex align-items-center justify-content-md-start justify-content-center">
                                                        <ul class="signUp-socialBtn">
                                                            <li>
                                                                <button class="btn text-dark px-30"><img
                                                                        class="svg"
                                                                        src="{{ asset('img/svg/google.svg') }}"
                                                                        alt="img" /> Sign up with
                                                                    Google</button>
                                                            </li>
                                                            <li>
                                                                <button class=" radius-md wh-48 content-center"><img
                                                                        class="svg"
                                                                        src="{{ asset('img/svg/facebook.svg') }}"
                                                                        alt="img" /></button>
                                                            </li>
                                                            <li>
                                                                <button class="radius-md wh-48 content-center"><img
                                                                        class="svg"
                                                                        src="{{ asset('img/svg/twitter.svg') }}"
                                                                        alt="img" /></button>
                                                            </li>
                                                        </ul>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>

    <!-- inject:js-->
    <script src="{{ asset('assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/jquery/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/bootstrap/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/accordion.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/autoComplete.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/charts.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/drawer.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/dynamicBadge.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/dynamicCheckbox.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/footable.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/fullcalendar@5.2.0.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/google-chart.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/jquery.filterizr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/jquery.mCustomScrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/jquery.star-rating-svg.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/leaflet.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/loader.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/message.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/muuri.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/notification.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/popover.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/trumbowyg.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_assets/js/wickedpicker.min.js') }}"></script>
    <script src="{{ asset('assets/theme_assets/js/drag-drop.js') }}"></script>
    <script src="{{ asset('assets/theme_assets/js/footable.js') }}"></script>
    <script src="{{ asset('assets/theme_assets/js/full-calendar.js') }}"></script>
    <script src="{{ asset('assets/theme_assets/js/googlemap-init.js') }}"></script>
    <script src="{{ asset('assets/theme_assets/js/icon-loader.js') }}"></script>
    <script src="{{ asset('assets/theme_assets/js/jvectormap-init.js') }}"></script>
    <script src="{{ asset('assets/theme_assets/js/leaflet-init.js') }}"></script>
    <script src="{{ asset('assets/theme_assets/js/main.js') }}"></script>
    <!-- endinject-->
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        $('#formRegister').submit(function(e) {
            e.preventDefault();
            var registerForm = $('#formRegister');
            var loader = $('.loader-overlay');

            $.ajax({
                url: "{{ url('/register') }}",
                type: "POST",
                data: registerForm.serialize(),
                dataType: "json",
                beforeSend: function() {
                    loader.show();
                    registerForm.find('button[type="button"]').prop('disabled', true);
                },
                complete: function() {
                    loader.hide();
                },
                success: function(res) {
                    if (res.status == true) {
                        Toast.fire({
                            icon: 'success',
                            title: res.message
                        });
                        setTimeout(function() {
                            window.location.href = "{{ url('/login') }}";
                        }, 2000);
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: res.error
                        });
                    }
                },
                error: function(xhr, status, error) {
                    loader.hide();
                    registerForm.find('button[type="button"]').prop('disabled', false);
                    Toast.fire({
                        icon: 'error',
                        title: 'Something Was Wrong'
                    });
                }
            });
            return false;
        });
    </script>
</body>

</html>
