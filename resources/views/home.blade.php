@extends('layouts.app')
@section('content')  
    <div class="limiter">
        <div class="container-login100" >
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

                    <span class="login100-form-title p-b-49">
                        SMS Bangladesh
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Welcome {{ Auth::user()->name }} !
                    </span>

                    @if (Route::has('login'))
                    @auth
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <a href="{{ route('logout') }}" class="login100-form-btn" >Logout</a>
                            </div>                            
                        </div> <br>
                    @else
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <a href="{{ route('login') }}"  class="login100-form-btn">Log in</a>
                            </div>
                        </div> <br>

                        @if (Route::has('register'))
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <a href="{{ route('register') }}"  class="login100-form-btn">Sign up</a>
                            </div>
                        </div>
                        @endif
                    @endauth               
                @endif
            </div>
        </div>
    </div>
@endsection