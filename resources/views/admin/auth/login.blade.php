@extends('admin.partials.admin.app')
@section('content')
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Skilldemy</h1>
        </div>
        <div class="login-box">
            <form class="login-form" action="{{ route('admin.login.post') }}" method="POST" role="form">
                @csrf
                <div class="card-body">
                    @if (session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                    <div class="form-group">
                        <label class="control-label">Email Address</label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="Email" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="control-label">PASSWORD</label>
                        <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="utility">
                            <div class="animated-checkbox">
                                <label>
                                    <input type="checkbox" name="remember"><span class="label-text">Stay Signed in</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group btn-container">
                        <button type="submit" class="btn btn-primary btn-block"><i
                                class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                    </div>
            </form>
            <form class="forget-form" action="index.html">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
                <div class="form-group">
                    <label class="control-label">EMAIL</label>
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back
                            to Login</a></p>
                </div>
            </form>
        </div>
    </section>
