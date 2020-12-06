@extends('frontend.layouts.index')

@section('content')

    <div class="container" style="margin-top: 40px;">
        <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        @if(session('thongbaoloi'))
                            <div class="alert alert-danger">
                                {{session('thongbaoloi')}}
                            </div>
                        @endif
                        <h3>Thông tin hóa đơn</h3>   
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <tbody>
                                    @if($hoadon != null)
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><strong class="product-quantity">Mã hóa đơn</strong></td>
                                        <td class="cart-product-total"><span class="amount">{{$hoadon[0]->mahoadon}}</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><strong class="product-quantity">Tên khách hàng</strong></td>
                                        <td class="cart-product-total"><span class="amount">{{$hoadon[0]->tenkhachhang}}</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><strong class="product-quantity">Địa chỉ giao hàng</strong></td>
                                        <td class="cart-product-total"><span class="amount">{{$hoadon[0]->diachi}}</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><strong class="product-quantity">Số điện thoại</strong></td>
                                        <td class="cart-product-total"><span class="amount">{{$hoadon[0]->sodienthoai}}</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><strong class="product-quantity">Email</strong></td>
                                        <td class="cart-product-total"><span class="amount">{{$hoadon[0]->email}}</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><strong class="product-quantity">Ngày lập hóa đơn</strong></td>
                                        <td class="cart-product-total"><span class="amount">{{$hoadon[0]->created_at}}</span></td>
                                    </tr>
                                    @endif
                                </tbody>
                            
                            </table>
                        </div>
                    </div>
                </div>
                <!-- thong tin khach hang -->
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Chi tiết sản phẩm</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Sản phẩm</th>
                                        <th class="cart-product-total">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($hoadon != null)
                                        @foreach($hoadon[1] as $item)
                                        <tr class="cart_item">
                                            <td class="cart-product-name">{{$item->masanpham}}<strong class="product-quantity">
                                            × {{$item->soluong}}</strong></td>
                                            <td class="cart-product-total"><span class="amount">{{number_format($item->thanhtien,0,"",".")." VND"}}</span></td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>
                                            Phương thức giao hàng 
                                        </td>
                                        <td>
                                            @if(isset($hoadon[0]))
                                                @if($hoadon[0]->phuongthucgiaohang == 1)
                                                    {{"Giao hàng nhanh    +30.000 VND "}}
                                                @else
                                                    {{"Giao hàng bình thường"}}
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng tiền</th>
                                        <td><strong><span class="amount">
                                        @if($hoadon != null)
                                            {{number_format($hoadon[2],0,"",".")." VND"}}
                                        @endif
                                        </span></strong></td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                
                                <div class="order-button-payment">
                                    <input value="Hủy đơn hàng" @if(isset($hoadon[0]->mahoadon)) onclick="location.href='frontend/huydon/{{$hoadon[0]->mahoadon}}'" @endif type="button">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection