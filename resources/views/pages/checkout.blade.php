<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
@include('layout.header')
<div class="container" style="margin-top: 300px; margin-bottom: 30px">
    <div class="row">
        @if(Session::has('cart') && !empty(Session::get('cart')))
            @php
                $total = session()->get('total', 0);
            @endphp
         <form action="{{ route('checkout.place') }}" method="POST">
        <div class="col-md-12 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Giỏ hàng của bạn</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                @foreach(session('cart') as $id => $details)
                <li class="list-group-item d-flex justify-content-between lh-condensed" data-id="{{ $id }}" >
                    <div>
                        <h6 class="my-0">{{$details['name']}}</h6>
                        <small class="text-muted">{{ number_format($total, 0, ',', '.') }} VND</small>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Tổng</span>
                    <strong>{{ number_format($total),0, ',', '.' }} VND</strong>
                </li>
                @endforeach
            </ul>


                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Nhập</button>
                    </div>
                </div>
        </div>
        <div class="col-md-12 order-md-1">
                <hr class="mb-4">
                <h4 class="mb-3">Thanh toán</h4>
{{--            @if(Session::has('cart') && !empty(Session::get('cart')))--}}
{{--             <form action="{{ route('checkout.place') }}" method="POST">--}}
                 @csrf
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Tiếp tục thanh toán</button>
        </div>
         </form>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>

</div>

@include('layout.footer')
</body>
@include('layout.script')
</html>

