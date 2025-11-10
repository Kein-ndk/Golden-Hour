<!doctype html>
<html lang="en">
@include('layout.head')
<body>
@include('layout.header')
<div class="container mb-3"  style="margin-top: 300px">
    @if(session('cart'))
    <div class="row">
            <div class="col-12">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                    <tr>
                        <th style="width:50%">Sản phẩm</th>
                        <th style="width:17%">Đơn giá </th>
                        <th style="width:8%">Số lượng</th>
                        <th style="width:17%" class="text-center">Thành tiền</th>
                        <th style="width:8%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $total = session()->get('total', 0);
                    @endphp
                    @foreach(session('cart') as $id => $details)
                        <tr class="my-3" data-id="{{ $id }}">
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{$details['name']   }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{number_format($details['price'],0, ',', '.')}} VND</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                            </td>
                            <td data-th="Subtotal" class="text-center">{{ number_format($details['price'] * $details['quantity'],0, ',', '.')}} VND</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="5" class="text-right"><h3><strong>Thành tiền {{ number_format($total),0, ',', '.' }} VND</strong></h3></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-right">
                            <a href="{{route('home.index')}}" class="btn btn-primary"> Tiếp tục mua hàng</a>
                            <a href="{{route('checkout')}}" class="btn btn-primary mt-3">Thanh toán ngay</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
    </div>
    @else
        <div class="row">
            <div class="col-12">
                <p class="text-center">Không có sản phẩm nào trong giỏ hàng của bạn!</p>
                <a href="{{route('home.index')}}" class="btn btn-primary"> Tiếp tục mua hàng</a>
            </div>
        </div>
    @endif
</div>

<div class="container-fuild last-banner bg-black">
    @include('layout.footer')
</div>
</body>
</html>
@include('layout.script')
