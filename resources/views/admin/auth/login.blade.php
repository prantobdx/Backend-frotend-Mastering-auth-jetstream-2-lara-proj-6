<!doctype html>
<html lang="en">
<head>     
        <meta charset="utf-8" />
        <title>Login|Project-6</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('/') }}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('/') }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('/') }}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="{{ url('/') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div> 
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Login Here</h5>
                                            <p>Get your free account now.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('/') }}admin-assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('/') }}admin-assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                <form class="form-horizontal"  method="post" action="{{ route('login') }}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter email">        
                                        </div>
                               
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">        
                                        </div>

                    
                                        <div class="mt-4">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>No account yet? <a href="{{ route('register') }}" class="font-weight-medium text-primary">Register</a> </p>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js --> 
        <script src="assets/js/app.js"></script>
    </body>
</html>
