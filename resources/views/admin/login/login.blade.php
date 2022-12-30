<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed layout-header-fixed">


<!-- Mirrored from html.phoenixcoded.net/auric/bootstrap/pages_authentication_login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 10:54:31 GMT -->
<head>
    <title>Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Auric Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Auric, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <link rel="icon" type="image/x-icon" href="{{asset('adminAsset')}}/assets/img/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/style.css" class="style-link">

</head>

<body>
<!-- [ Preloader ] Start -->
<div class="page-loader">
    <div class="bg-primary"></div>
</div>
<!-- [ Preloader ] End -->

<!-- [ Content ] Start -->
<div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('{{asset('adminAsset')}}/assets/img/bg/11.jpg');">
    <div class="ui-bg-overlay bg-dark opacity-25"></div>

    <div class="authentication-inner py-5">

        <div class="card">
            <div class="p-4 p-sm-5">
                <!-- [ Logo ] Start -->
                <div class="d-flex justify-content-center align-items-center ">
                    <div class="ui-w-60">
                        <div class="w-100 position-relative">
                            <img src="{{asset('adminAsset')}}/assets/img/R.png" alt="Brand Logo" class="img-fluid">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- [ Logo ] End -->

                <h5 class="text-center text-muted font-weight-normal mb-4">Login to Your Account</h5>

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label d-flex justify-content-between align-items-end">
                            <span>Password</span>
                            <a href="pages_authentication_password-reset.html" class="d-block small">Forgot password?</a>
                        </label>
                        <input type="password" name="password" class="form-control">
                        <div class="clearfix"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center m-0">
                        <label class="custom-control custom-checkbox m-0">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label">Remember me</span>
                        </label>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>
                <!-- [ Form ] End -->

            </div>
            <div class="card-footer py-3 px-4 px-sm-5">
                <div class="text-center text-muted">
                    Don't have an account yet?
                    <a href="{{route('register')}}">Sign Up</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- / Content -->

<!-- Core scripts -->
<script src="{{asset('adminAsset')}}/assets/js/vendor.js"></script>

<!-- Demo -->
<script src="{{asset('adminAsset')}}/assets/js/script.js"></script>


</body>
</html>
