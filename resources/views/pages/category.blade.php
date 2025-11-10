<!doctype html>
<html lang="en">
@include('layout.head')
<body>
@include('layout.header')

<div class="container" style="margin-top: 300px">
    <div class="title text-center">
        @foreach($breadcum as $item)
        <h1>{{$item->name}}</h1>
        <div class="title_border"></div>
        @endforeach
    </div>
    <div class="row justify-content-evenly">
        @foreach($product as $item)
        <div class="card col-lg-3 col-xs-2 mb-3" style="width: 18rem;">
            <a href="{{route('productDetail',['slug'=>$item->slug])}}"><img src="{{asset($item -> path)}}" class="card-img-top" alt=" "></a>
            <div class="card-body">
                <p class="card-text text-center">Đồng hồ nam</p>
                <h6 class="card-title text-center"><a href="{{route('productDetail',['slug'=>$item->slug])}}">{{ $item->product_name }}</a></h6>
                <div class="product_item_details">
                    <p class="price_item">{{ number_format($item-> price,0, ',', '.') }} VND</p>
                    <a href="#" data-url="{{ route('addCart', ['id' => $item->id]) }}" class="btn btn-primary add_to_cart">Mua ngay</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('layout.footer')
</body>
@include('layout.script')
</html>
