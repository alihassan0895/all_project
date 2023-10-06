

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>


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
                        <h4> Password Reset </h4>


                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            @if($errors->any())
                                @foreach($errors->all() as $error)

                                    <span style="color:red;">{{$error}}</span>
                                @endforeach
                            @endif

                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email"  name="email" :value="old('email')" required class="form-control" placeholder="Email">
                            </div>


                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Email Password Reset Link</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>








{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

    <!-- Session Status -->
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
