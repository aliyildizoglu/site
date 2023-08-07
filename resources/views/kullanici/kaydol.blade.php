@extends('layouts.master')
@section('title','Kaydol')

@section('content')
    <br><br> <!-- Yukarıdan 4 cm boşluk için iki adet <br> etiketi ekliyoruz -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="h3 mb-3 text-black text-center">User Registration</h2>

                <div class="p-3 p-lg-5 border">
                    <form id="registrationForm" class="text-center">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Enter your password again" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br> <!-- Aşağıdan 4 cm boşluk için iki adet <br> etiketi ekliyoruz -->

@endsection
