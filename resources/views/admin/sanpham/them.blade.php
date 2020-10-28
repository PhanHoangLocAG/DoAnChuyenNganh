@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                            </div>
                        @endif
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/theloai/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Mã sản phẩm</label>
                                <input type="text" class="form-control" name='ten' placeholder="Nhập loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name='ten' placeholder="Nhập tên loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                    <select class="form-control" >
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Bộ nhớ</label>
                                <input type="text" class="form-control" name='ten' placeholder="Nhập đơn vị lắp ráp">
                            </div>
                            <div class="form-group">
                                <label>Hệ điều hành</label>
                                <input type="text" class="form-control" name='ten' placeholder="Nhập đơn vị lắp ráp">
                            </div>
                            <div class="form-group">
                                <label>Màn hình</label>
                                <input type="text" class="form-control" name='ten' placeholder="Nhập đơn vị lắp ráp">
                            </div>
                            <div class="form-group">
                                <label>Camera</label>
                                <input type="text" class="form-control" name='ten' placeholder="Nhập đơn vị lắp ráp">
                            </div>
                            <div class="form-group">
                                <label>Kết nối</label>
                                <input type="text" class="form-control" name='ten' placeholder="Nhập đơn vị lắp ráp">
                            </div>
                            <div class="form-group">
                                <label>Trọng lượng</label>
                                <input type="text" class="form-control" name='ten' placeholder="Nhập đơn vị lắp ráp">
                            </div>
                            <div class="form-group">
                                <label>Pin</label>
                                <input type="text" class="form-control" name='ten' placeholder="Nhập đơn vị lắp ráp">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name='ten' placeholder="Nhập đơn vị lắp ráp">
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection