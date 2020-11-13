@extends('frontend.layouts.index')

@section('content')

<div class="myaccount-details" style="width:700px;margin-top: 20px;">
    <h2>Thông tin cá nhân</h2>
    <form action="#" class="kenne-form">
        <div class="kenne-form-inner">
            <div class="single-input single-input-half" style="margin-top: 0px;">
                <label >Họ và tên:</label>
                <input type="text" >
            </div>
            <div class="single-input single-input-half"  style="margin-top: 0px;">
                <label>Số điện thoại</label>
                <input type="text" >
            </div>
            <div  style="margin-top: 0px;">
                <label  style="display:block ;margin-bottom: 15px;">Giới tính</label>
                <div class="form-check form-check-inline" style="margin-left: 40px;">
                    <input class="form-check-input" type="radio"  >
                    <label class="form-check-label">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" >
                    <label class="form-check-label">Nữ</label>
                </div>
            </div>
            <div class="single-input single-input-half"  style="margin-top: 0px;">
                <label>Ngày sinh</label>
                <input type="date" >
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <label >Chứng minh nhân dân</label>
                <input type="text" >
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <label >Địa chỉ</label>
                <input type="password">
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <label >Email</label>
                <input type="password" >
            </div>
            <div class="single-input"  style="margin-top: 0px;">
                <button type="button" class="btn" style="background-color: black;color: whitesmoke;padding-top: 8px;padding-bottom: 8px;margin-top: 15px;padding-right: 7px;padding-left: 7px;margin-right: 22px;" >Sửa thông tin</button>
                <a href="" class="btn" data-toggle="modal" data-target="#myModal" style="margin-top: 15px;padding: 10px 5px;background-color: black;color:white;">Đổi mật khẩu</a>        
            </div>

        </div>
    </form>
</div> 
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="font-family: Arial, Helvetica, sans-serif;">Thay đổi mật khẩu</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="/action_page.php">
            <div class="form-group">
                <label >Mật khẩu cũ:</label>
                <input type="email" class="form-control"  placeholder="Nhập mật khẩu" >
            </div>

            <div class="form-group">
                <label >Mật khẩu mới:</label>
                <input type="email" class="form-control"  placeholder="Nhập mật khẩu" >
            </div>

            <div class="form-group">
                <label >Xác nhận mật khẩu:</label>
                <input type="password" class="form-control"  placeholder="Nhập mật khẩu" >
            </div>

            <button type="submit" class="btn btn-primary" style="background-color:blue;padding:5px 8px;">Cập nhật</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection