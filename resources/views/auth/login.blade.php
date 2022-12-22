@extends('layouts.app')

@section('content')  

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('loginpage/images/bg.png') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form"action="{{ route('login') }}" method="POST">
                @csrf
                <span class="login100-form-title p-b-49">
                    Login
                </span>
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>						
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" placeholder="Type your Email">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Type your Password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                    @if ($errors->has('password'))
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                @endif
                </div>
                
                <div class="text-right p-t-8 p-b-31">
                    <a href="#">
                        Forgot password?
                    </a>
                </div>
               

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit" value="Login">
                            Login
                        </button>
                    </div>
                </div>

                

                <div class="flex-col-c p-t-155">
                    <span class="txt1 p-b-17">
                        Or Sign Up Using
                    </span>

                    <a href="{{ route('register') }}" class="txt2">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
