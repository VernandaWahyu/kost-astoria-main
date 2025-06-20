@extends('layouts.auth')

@section('title')
Kost Astoria - Login Page
@endsection
@section('content')
<div class="col-lg-6 col-12 p-0">
    <div class="card rounded-0 mb-0 px-2">
        <div class="card-header pb-1">
           <div class="card-title" style="text-align: center;">
    <h4 class="mb-0">Kost Astoria - Login Page 
        <br>
        Silahkan Login Untuk Masuk</h4>
</div>

        </div>
        <!-- <p class="px-5">Selamat datang kembali, silahkan login untuk masuk ke sistem</p> -->
        <div class="card-content mb-2">
            <div class="card-body pt-1">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value=" {{old("email")}} " id="email" placeholder="Masukan Email Kamu ...">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-position">
                            <i class="feather icon-user"></i>
                        </div>
                        <label for="user-name">Email</label>
                    </fieldset>

                    <fieldset class="form-label-group position-relative has-icon-left">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-position">
                            <i class="feather icon-lock"></i>
                        </div>
                        <label for="user-password">Password</label>
                    </fieldset>

                    <a href="{{route('register')}}" class="btn btn-outline-primary float-left btn-inline">Register</a>
                    <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                </form>
            </div>
        </div>
        <div class="login-footer">
            <div class="divider">
                <div class="divider-text"><i class="feather icon-home"></i></div>
            </div>
            <div class="footer-btn d-inline">
                {{-- <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a> --}}
                <a href="/">
                    <h5 style="text-align: center">Kembali</h5>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection