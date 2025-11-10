
<div id="man">
    <div class="title text-center">
        <h1>Đồng hồ nam</h1>
        <div class="title_border"></div>
    </div>
</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active ">
            <div class="row justify-content-evenly ">
                @foreach($listProduct1 as $products_1)
                    <div class="card col-lg-3 col-xs-2 mb-3" style="width: 18rem;">
                        <a href="{{route('productDetail',['slug'=>$products_1->slug])}}"><img src="{{asset($products_1 -> path)}}" class="card-img-top" alt=" "></a>
                        <div class="card-body">
                            <p class="card-text text-center">Đồng hồ nam</p>
                            <h6 class="card-title text-center"><a href="{{route('productDetail',['slug'=>$products_1->slug])}}">{{ $products_1->product_name }}</a></h6>
                            <div class="product_item_details">
                                <p class="price_item">{{ number_format($products_1-> price,0, ',', '.') }} VND</p>
                                <a href="#" data-url="{{ route('addCart', ['id' => $products_1->id]) }}" class="btn btn-primary add_to_cart">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="carousel-item ">
            <div class="row justify-content-evenly">
                @foreach($listProduct2 as $products_2)
                    <div class="card col-lg-3 col-xs-2" style="width: 18rem;">
                        <a href="{{route('productDetail',['slug'=>$products_2->slug])}}"><img src="{{asset($products_2 -> path)}}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <p class="card-text text-center">Đồng hồ nam</p>
                            <h6 class="card-title text-center"><a href="{{route('productDetail',['slug'=>$products_2->slug])}}">{{ $products_2->product_name }}</a></h6>
                            <div class="product_item_details">
                                <p class="price_item">{{ number_format($products_2-> price,0, ',', '.') }} VND</p>
                                <a href="#" data-url="{{ route('addCart', ['id' => $products_2->id]) }}" class="btn btn-primary add_to_cart">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

