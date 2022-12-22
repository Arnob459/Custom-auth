@extends('layouts.app')
@section('content')  
<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('loginpage/images/bg.png') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form"action="{{ route('register') }}" method="POST">
                @csrf
                <span class="login100-form-title p-b-49">
                    Registration Page
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

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="name" placeholder="Enter username">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @if ($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" placeholder="Enter your valid Email">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "phonenumber is reauired">
                    <span class="label-input100">Phone number</span>
                    <input class="input100" type="number" name="phonenumber" placeholder="Enter mobile no e.g 017xxxxxxxx">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @if ($errors->has('phonenumber'))
                        <p class="text-danger">{{ $errors->first('phonenumber') }}</p>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Enter password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                    @if ($errors->has('password'))
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                @endif
                </div><br>

                <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
                    <span class="label-input100"> Confirm Password</span>
                    <input class="input100" type="password" name="password_confirmation" placeholder="Confirm password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div><br>
               

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit" value="Sign Up">
                            Sign Up
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection



