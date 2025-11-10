<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="asset/favicon.ico">

    <!-- App css -->
    <link href="{{asset('asset/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset/css/app-creative-dark.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body class="authentication-bg" data-layout-config='{"darkMode":false}'>

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Sign Up</h4>
                            <p class="text-muted mb-4">Enter your information.</p>
                        </div>
                        <!-- @if(session('success'))
                            <div class="alert alert-success">
                                 {{ session('success') }}
                            </div>
                         @endif -->
                         <form action="{{ route('register.submit') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input class="form-control" type="email" name="email" id="email" required=""
                                       placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" required=""
                                       placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input class="form-control" type="text" name="address" id="address" required=""
                                       placeholder="Enter your address">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control" type="text" name="phone" id="phone" required=""
                                       placeholder="Enter your phone">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password" id="password" class="form-control"
                                           placeholder="Enter your password">
                                    <div class="input-group-append" data-password="false">
                                        <div class="input-group-text">
                                            <span class="password-eye" id="btn-password" data-hidden="1"
                                                  onclick="showPassword()">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> Sign Up</button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Do you have an account? <a href="{{route('login.form')}}"
                                                                        class="text-muted ml-1"><b>Log In</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<footer class="footer footer-alt">
    2022
    @if(date('Y') != 2022)
        - {{ date('Y') }}
    @endif
    © {{ config('app.name') }}
</footer>

<!-- bundle -->
{{--<script src="{{ asset('js/vendor.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/app.min.js') }}"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function showPassword() {
        if ($("#btn-password").data('hidden') == 1) {
            $("#password").attr('type', 'text');
            $("#btn-password").data('hidden', 0);
        } else {
            $("#password").attr('type', 'password');
            $("#btn-password").data('hidden', 1);
        }
    }

    function check() {
        var getname = getValue('emailaddress');
        var getpass = getValue('password');

        if (getname == 'nam@gmail.com' && getpass == '123123') {
            return true;

        } else {
            return false;
        }
    }
</script>

</body>
</html>
