@extends('layouts.master')
@section('title','Oturum Aç')

@section('content')
    <br><br> <!-- Yukarıdan 4 cm boşluk için iki adet <br> etiketi ekliyoruz -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="h3 mb-3 text-black text-center">User Login</h2>

                <div class="p-3 p-lg-5 border">
                    <form id="loginForm" class="text-center">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#" id="forgotPasswordLink">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br> <!-- Aşağıdan 4 cm boşluk için iki adet <br> etiketi ekliyoruz -->


@endsection
