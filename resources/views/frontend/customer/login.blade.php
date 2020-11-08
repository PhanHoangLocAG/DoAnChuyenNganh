@extends('frontend.layouts.index')

@section('content')

<div class="kenne-login-register_area">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                        <!-- Login Form s-->
                        <form action="#">
                            <div class="login-form">
                                <h4 class="login-title">Đăng nhập</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <label>Địa chỉ email*</label>
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Mật khẩu</label>
                                        <input type="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="check-box">
                                            <input type="checkbox" id="remember_me">
                                            <label for="remember_me">Nhớ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="forgotton-password_info">
                                            <a href="#"> Quên mật khẩu?</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="kenne-login_btn">Đăng nhập</button>
                                    </div>
                                    <div class="col-md-12" style="text-align: center;">
                                        <span>--------</span><a href="frontend/register">Đăng ký</a><span>--------</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection