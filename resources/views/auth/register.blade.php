<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="apple-touch-icon" href="{{asset('storage/logos/2')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/logos/2')}}">
    <!-- BEGIN: Vendor CSS-->
    <link href="{{mix('/app-assets/css/app.css')}}" rel="stylesheet">    
    
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{mix('app-assets/css/pages/login.min.css')}}">
    <!-- END: Page CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img  src="{{asset('app-assets/images/logo/logo-dark.png')}}" alt="logo">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                    
                                            <div class="form-horizontal">
                                                    @include('partials.messages')

                                                <fieldset class="form-group position-relative has-icon-left">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus>
                        
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-control-position">
                                                            <i class="ft-user"></i>
                                                        </div>
                                                    </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email">
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="ft-mail"></i>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="la la-key"></i>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="current-password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-control-position">
                                                            <i class="la la-key"></i>
                                                        </div>
                                                    </fieldset>
                                                <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i>
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </form>
                                        <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2"><span>You have an account ?</span></p>
                                        <a href="{{ route('login') }}" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> {{ __('Login') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <script src="{{mix('/app-assets/js/all.min.js')}}"></script>
    
    <!-- BEGIN: Page JS-->
    <script src="{{mix('/app-assets/js/pages/login.min.js')}}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>