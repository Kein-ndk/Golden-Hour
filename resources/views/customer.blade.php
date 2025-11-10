<!doctype html>
<html lang="en">
@include('layout.head')
<body>
@include('layout.header')

<section class="bg-light" style="margin-top: 300px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 mb-0">{{ $customer->name}}</h3>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span>
                                        {{$customer->email}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span>
                                        {{ $customer->phone}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Address:</span>
                                        {{ $customer->address}}</li>
                                </ul>
                                <a href="{{route('logout')}}" class="btn btn-primary mt-3">Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h3 class="text-center">Đơn hàng của bạn</h3>
            @php
                $total = session()->get('total', 0);
            @endphp
            @if(count($orders) > 0)
                @foreach($orders as $order)
                    <div class="order">
                        <h4>Đơn hàng #{{ $order->id }}</h4>
                        <p>Ngày: {{ $order->created_at }}</p>
                        <p>Tổng tiền: {{ number_format($order->total_price, 0, ',', '.') }} VND</p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Số tiền</th>
                                <th>Tiền cụ thể</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orderDetails[$order->id] as $detail)
                                <tr>
                                    <td>{{ $detail->name }}</td>
                                    <td>{{ $detail->quantity }}</td>
                                    <td>{{ number_format($detail->price, 0, ',', '.') }} VND</td>
                                    <td>{{ number_format($detail->price * $detail->quantity, 0, ',', '.') }} VND</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                @endforeach
            @else
                <p>You have no orders.</p>
            @endif
    </div>
    </div>
</section>

<div class="container-fuild last-banner bg-black">
    @include('layout.footer')
</div>
</body>
</html>
@include('layout.script')
