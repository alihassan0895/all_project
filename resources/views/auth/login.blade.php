
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
{{--    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">--}}
{{--    <!-- Retina iPad Touch Icon-->--}}
{{--    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">--}}
{{--    <!-- Retina iPhone Touch Icon-->--}}
{{--    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">--}}
{{--    <!-- Standard iPad Touch Icon-->--}}
{{--    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">--}}
{{--    <!-- Standard iPhone Touch Icon-->--}}
{{--    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">--}}

    <!-- Styles -->
    <link href="{{asset("Dash/css/lib/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("Dash/css/lib/themify-icons.css" )}}"rel="stylesheet">
    <link href="{{asset("Dash/css/lib/bootstrap.min.css" )}}"rel="stylesheet">
    <link href="{{asset("Dash/css/lib/helper.css" )}}"rel="stylesheet">
    <link href="{{asset("Dash/css/style.css")}}" rel="stylesheet">
</head>

<body class="bg-primary">

<div class="unix-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="index.html"><span>Focus</span></a>
                    </div>
                    <div class="login-form">
                        <h4>Login Me</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            @if($errors->any())
                                @foreach($errors->all() as $error)

                                    <span style="color:red;">{{$error}}</span>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" class="form-control"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: darkred" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4" class="form-group">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control block mt-1 w-full"
                                              type="password"
                                              name="password"
                                              required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" style="color: darkred" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-primary-button class="ml-3 btn btn-primary btn-flat m-b-30 m-t-30" >
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                            <div class="register-link m-t-15 text-center">
                                <p>Don't have account ? <a href="{{ route('register') }}"> Sign Up Here</a></p>
                            </div>
                        </form>

{{--                                                <form>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Email address</label>--}}
{{--                                <input type="email" class="form-control" name="email" :value="old('email')" placeholder="Email">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Password</label>--}}
{{--                                <input type="password" class="form-control" placeholder="Password">--}}
{{--                            </div>--}}
{{--                            <div class="checkbox">--}}
{{--                                <label>--}}
{{--                                    <input type="checkbox"> Remember Me--}}
{{--                                </label>--}}
{{--                                <label class="pull-right">--}}
{{--                                    <a href="#">Forgotten Password?</a>--}}
{{--                                </label>--}}

{{--                            </div>--}}
{{--                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>--}}
{{--                            <div class="social-login-content">--}}
{{--                                <div class="social-button">--}}
{{--                                    <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Sign in with facebook</button>--}}
{{--                                    <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Sign in with twitter</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="register-link m-t-15 text-center">--}}
{{--                                <p>Don't have account ? <a href="#"> Sign Up Here</a></p>--}}
{{--                            </div>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

