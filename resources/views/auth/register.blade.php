

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
                        <h4>Register to Administration</h4>
{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}

{{--                            <!-- Name -->--}}
{{--                            <div>--}}
{{--                                <x-input-label for="name" :value="__('Name')" />--}}
{{--                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--                                <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--                            </div>--}}

{{--                            <!-- Email Address -->--}}
{{--                            <div class="mt-4">--}}
{{--                                <x-input-label for="email" :value="__('Email')" />--}}
{{--                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--                                <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--                            </div>--}}

{{--                            <!-- Password -->--}}
{{--                            <div class="mt-4">--}}
{{--                                <x-input-label for="password" :value="__('Password')" />--}}

{{--                                <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                                              type="password"--}}
{{--                                              name="password"--}}
{{--                                              required autocomplete="new-password" />--}}

{{--                                <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--                            </div>--}}

{{--                            <!-- Confirm Password -->--}}
{{--                            <div class="mt-4">--}}
{{--                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                                <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                              type="password"--}}
{{--                                              name="password_confirmation" required autocomplete="new-password" />--}}

{{--                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--                            </div>--}}

{{--                            <div class="flex items-center justify-end mt-4">--}}
{{--                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                                    {{ __('Already registered?') }}--}}
{{--                                </a>--}}

{{--                                <x-primary-button class="ml-4">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </x-primary-button>--}}
{{--                            </div>--}}
{{--                        </form>--}}

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            @if($errors->any())
                                @foreach($errors->all() as $error)

                                    <span style="color:red;">{{$error}}</span>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="name" name="name" :value="old('name')" required class="form-control" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email"  name="email" :value="old('email')" required class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" :value="__('Password')"  name="password"
                                       required class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" :value="__('Confirm Password')"  name="password_confirmation" required class="form-control" placeholder="Password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                            <div class="register-link m-t-15 text-center">
                                <p>Already have account ? <a href="{{ route('login') }}"> Sign in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
