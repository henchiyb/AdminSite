@extends('layouts.master')
@section('content')
<div class="container">
    <div class="login-content">
        <div class="login-logo">
            <a href="index.html">
                <img class="align-content" src="images/logo.png" alt="">
            </a>
        </div>
        <div class="login-form">
                <div class="form-group">
                    <label>User Name</label>
                    {{ $user->name }}
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    {{ $user->email }}
                </div>
                <div class="form-group">
                    <label>User Product</label>
                    {{ $user->products }}
                </div>
        </div>
    </div>
</div>
@endsection

