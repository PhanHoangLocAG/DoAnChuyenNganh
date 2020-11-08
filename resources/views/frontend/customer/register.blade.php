@extends('frontend.layouts.index')

@section('content')

<div class="kenne-login-register_area" style="padding-top: 30px;">
            <div class="container">
                <div class="row"  style="justify-content: center;">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <form action="#">
                            <div class="login-form">
                                <h4 class="login-title">Đăng kí</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Họ và tên</label>
                                        <input type="text" name="ho" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Số điện thoại</label>
                                        <input type="text" name="username" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Ngày sinh</label>
                                        <input type="date" name="username" >
                                    </div>
                                    <div class="col-md-6 col-12 mb--20 form-group">
                                        <label>Giới tính</label>
                                        <div>
                                        <input type="radio" style="width: 45px; margin-bottom: 11px;" name="" id="">Nam
                                        </div>
                                        <input type="radio" style="width: 45px;" name="" id="">Nữ
                                    </div>
                                    <div class="col-md-12">
                                        <label>Chứng minh nhân dân*</label>
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Địa chỉ email*</label>
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="" placeholder="Password">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Xác nhận mật khẩu</label>
                                        <input type="password" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-12">
                                        <button class="kenne-register_btn">Đăng ký</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection