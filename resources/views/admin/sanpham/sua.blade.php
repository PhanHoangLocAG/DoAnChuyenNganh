@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại 
                    <small></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
               
                <form action="admin/theloai/sua/" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Mã loại</label>
                        <input type="text" disabled class="form-control" name='ten' placeholder="Nhập loại sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Tên loại</label>
                        <input type="text" class="form-control" name='ten' placeholder="Nhập tên loại sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Nhà sản xuất</label>
                        <input type="text" class="form-control" name='ten' placeholder="Nhập nhà sản xuất">
                    </div>
                    <div class="form-group">
                        <label>Đơn vị lắp ráp</label>
                        <input type="text" class="form-control" name='ten' placeholder="Nhập đơn vị lắp ráp">
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