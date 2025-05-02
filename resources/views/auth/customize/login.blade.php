@extends('layouts.auth.structure.master')

@section('title')
Login
@endsection

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="auth-card-container col-10 col-md-8 col-lg-6">
                <div class="card login-card py-4 m-0" style="border-radius:10px;">

                    <h3 class="text-center">تسجيل الدخول</h3>
                    <div class="d-flex justify-content-center">
                        <hr class="col-10 text-center">
                    </div>

                    <div class="card-body col-12 m-0">
                        <form id="login-form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">البريد الالكتروني</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="البريد الالكتروني" value="{{ old('email') }}" required autocomplete="email" autofocus style="height: 50px;">
                            </div>
                            <div class="form-group">
                                <label for="password">الرقم السري</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="الرقم السري" required autocomplete="current-password" style="height: 50px;">
                            </div>

                            <div>
                                <button type="submit" class="col-md-12 btn btn-success">دخول</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
