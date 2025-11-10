<!doctype html>
<html lang="en">
@include('layout.head')
<body>
@include('layout.header')
<div class="content" style="margin-top: 300px">
    <div class="container-dt container-row">
        <div class="row">
            <h2 class="product-title">{{$detail->product_name}}</h2>
            <div class="col-2-2">
                <div class="product-describe">
                    <p class="product-ref mt-15" >
                        Ref: {{$detail->ref}}
                    </p>
                    <p class="product-describe-detail mt-15">
                        {{$detail->des}}
                    </p>
                    <p class="product-price">{{ number_format($detail-> price,0, ',', '.') }} VND</p>
                </div>
                <div class="container-dt">
                    <div class="col-2-2">
                    <button class="button bg-gold "><a href="#" data-url="{{ route('addCart', ['id' => $detail->id]) }}" class="add_to_cart"><i class="fas fa-shopping-cart"></i>Mua hàng</a></button>
                </div>
                <div class="col-2-2">
                <button class="button bg-blue"><a href="#"><i class="fas fa-phone-alt"></i>Tư vấn</a></button>
            </div>
        </div>
        <div class="product-service mt-15">
            <div class="service">
                <span class="service-icon"><i class="fas fa-thumbs-up"></i></span>
                <span class="service-text">Bảo hành 12 tháng - Cam kết chính hãng trọn đời</span>
            </div>
            <div class="service">
                <span class="service-icon"><i class="fas fa-hand-holding-usd"></i></span>
                <span class="service-text">Đền gấp 10 nếu phát hiện ra FAKE</span>
            </div>
            <div class="service">
                <span class="service-icon"><i class="fas fa-shipping-fast"></i></span>
                <span class="service-text">Giao hàng toàn quốc miễn phí</span>
            </div>
            <div class="service">
                <span class="service-icon"><i class="fas fa-hand-point-up"></i></span>
                <span class="service-text">Hỗ trợ lên đời sản phẩm</span>
            </div>
        </div>
    </div>
    <div class="col-2-2">
        <div class="product-thumbnail">
            <div class="product-main-img">
                <img class="product-img" src="{{asset($detail->path)}}" alt="">
            </div>
        </div>
    </div>
</div>
</div>

<div class="container-dt container-col">
    <div class="row">
        <h2 class="product-title">{{$detail->product_name}}</h2>
        <div class="col-2-2">
            <div class="product-thumbnail">
                <div class="product-main-img">
                    <img class="product-img" src="{{asset($detail->path)}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-2-2">
            <div class="product-describe">
                <p class="product-ref mt-15" >
                    Ref: 278271-0028
                </p>
                <p class="product-describe-detail mt-15">
                    Rolex tiếp tục giới thiệu đến giới sưu tập đồng hồ tại sự kiện Baselworld 2019 bộ sưu tập Rolex Oyster Perpetual Datejust 31mm hoàn toàn mới với nhiều cải tiến hữu ích từ cỗ máy vốn đã được rất nhiều người chơi biết đến qua giá trị sử dụng bền bỉ và tính chính xác của mình. Chúng ta hãy cũng đến với phiên bản Datejust Oyster Perpetual xuất hiện hiện trong lớp mặt số chocolate rất sang trọng với những quý cô, cọc số kim cương trong lớp vỏ oyster hiện đại.
                </p>
                <p class="product-price">{{ number_format($detail-> price,0, ',', '.') }} VND</p>
            </div>
            <div class="container-dt">
                <div class="col-2-2">
                <button class="button bg-gold add_to_cart"><a href="#" data-url="{{ route('addCart', ['id' => $detail->id]) }}" class="add_to_cart"><i class="fas fa-shopping-cart"></i>Mua hàng</a></button>
            </div>
            <div class="col-2-2">
            <button class="button bg-blue"><a href="#"><i class="fas fa-phone-alt"></i>Tư vấn</a></button>
        </div>
    </div>
    <div class="product-service mt-15">
        <div class="service">
            <span class="service-icon"><i class="fas fa-thumbs-up"></i></span>
            <span class="service-text">Bảo hành 12 tháng - Cam kết chính hãng trọn đời</span>
        </div>
        <div class="service">
            <span class="service-icon"><i class="fas fa-hand-holding-usd"></i></span>
            <span class="service-text">Đền gấp 10 nếu phát hiện ra FAKE</span>
        </div>
        <div class="service">
            <span class="service-icon"><i class="fas fa-shipping-fast"></i></span>
            <span class="service-text">Giao hàng toàn quốc miễn phí</span>
        </div>
        <div class="service">
            <span class="service-icon"><i class="fas fa-hand-point-up"></i></span>
            <span class="service-text">Hỗ trợ lên đời sản phẩm</span>
        </div>
    </div>
</div>
</div>
</div>

<div class="product-detail-tabs">
    <button class="tablinks active" onclick="openInfor(event, 'product-technical-information')">Thông tin kỹ thuật</button>
    <button class="tablinks" onclick="openInfor(event, 'product-detail-information')">Mô tả chi tiết</button>
    <button class="tablinks" onclick="openInfor(event, 'product-user-manual')">Hướng dẫn sử dụng</button>
</div>
<div id="product-technical-information" class="tabcontent">
    <div>
        <table>
            <tr>
                <td>Ref:</td>
                <td>{{$detail->ref}}</td>
            </tr>
            <tr>
                <td>Tình trạng:</td>
                <td>{{$detail->status}}</td>
            </tr>
            <tr>
                <td>Xuất xứ:</td>
                <td>{{$detail->origin}}</td>
            </tr>
            <tr>
                <td>Bộ sưu tập:</td>
                <td>{{$detail->collection}}</td>
            </tr>
            <tr>
                <td>Kính:</td>
                <td>{{$detail->glass}}</td>
            </tr>
            <tr>
                <td>Màu mặt số:</td>
                <td>{{$detail->dial_color}}</td>
            </tr>
            <tr>
                <td>Bộ máy:</td>
                <td>{{$detail->movement}}</td>
            </tr>
            <tr>
                <td>Tích cót:</td>
                <td>{{$detail->power}}</td>
            </tr>
            <tr>
                <td>Chất liệu:</td>
                <td>{{$detail->material}}</td>
            </tr>
            <tr>
                <td>Chống nước:</td>
                <td>{{$detail->waterproof}}</td>
            </tr>
        </table>
    </div>
</div>
<div id="product-detail-information" class="tabcontent">
    <div>
        <p>Thương hiệu Rolex từ lâu đã hằn sâu vào tâm trí của rất nhiều người. Cho dù ngành công nghiệp sản xuất đồng hồ có trải qua bao thăng trầm thì cái tên Rolex vẫn luôn toả sáng và dường như thương hiệu này sinh ra là để làm cái mốc chinh phục của những giấc mơ, của những khát khao, đam mê cháy bỏng của một người ưa chuộng đồng hồ.</p>
        <br>
        <p>Sự kết hợp giữa vàng và thép, cùng nhau, chúng tạo nên sự kết hợp hài hòa nhất trên những chiếc đồng hồ Rolex. Một biểu tượng khác của Rolex, Rolesor đã có mặt trên các phiên bản Rolex kể từ đầu thập niên 1930, và được đăng ký tên nhãn hiệu vào năm 1933. Đây là một trong những tiêu điểm của bộ sưu tập Oyster.</p>
        <br>
        <p>Mặt đồng hồ là giao diện đặc trưng của một chiếc đồng hồ Rolex, bộ phận mang chức năng nhận diện và đảm bảo khả năng hiển thị rõ ràng của đồng hồ. Đặc trưng bởi các vạch dấu giờ chất liệu vàng 18k ngăn chặn bụi bẩn, mỗi mặt đồng hồ Rolex được thiết kế và sản xuất, chủ yếu bằng phương pháp thủ công để đảm bảo sự hoàn hảo.</p>
        <br>
        <p>Phiên bản calibre 2236, thế hệ bộ chuyển động cơ học tự lên dây thế hệ mới được phát triển và chế tác toàn bộ bởi Rolex. Được trang bị với một dây tóc Syloxi bằng silicon, đăng kí bằng sáng chế bởi Rolex, mang đến hiệu suất bấm giờ tuyệt vời. Không nhạy cảm với từ trường, dây tóc Syloxi giữ vững hoạt động ổn định cho đồng hồ khi gặp biến đổi nhiệt độ và duy trì độ chính xác gấp 10 lần so với dây tóc truyền thống trong trường hợp va chạm. Thiết kế được trang bị dây tóc cân bằng Rolex đảm bảo tính chính xác ở bất kỳ vị trí nào.</p>
        <br>
        <p>Ống kính Cyclops khuếch đại màn hình phụ hiển thị ngày, tăng độ hiển thị ngày nhằm mục đích đọc dễ dàng. Đây là một trong những tính năng đặc biệt nhất của Rolex và là một trong những tính năng dễ nhận biết nhất.</p>
        <br>
        <p>Việc thiết kế, phát triển và sản xuất dây đồng hồ Rolex và khóa gập, cũng như các bài kiểm tra nghiêm ngặt chúng phải đối mặt, đòi hỏi công nghệ cao. Và, như với tất cả các thành phần của đồng hồ, tính thẩm mỹ được đảm bảo bằng vẻ đẹp hoàn hảo. Dây đeo đồng hồ kim loại Jubilee có thiết kế mềm mại và thoải mái với mối nối năm mảnh và được đặc biệt chế tác đi kèm với sự ra mắt của Oyster Perpetual Datejust vào năm 1945.</p>
        <br>
    </div>
</div>
<div id="product-user-manual" class="tabcontent">
    <div>
        <h4>Cách lên giây cót đồng hồ Automatic</h4>
        <p>Khi bạn đeo đồng hồ trên tay, cử động cổ tay sẽ khiến đồng hồ rung lắc và chính chuyển động đó sẽ giúp con quay tự động lên dây cót cho đồng hồ. Thông thường với đồng hồ Automatic ban nên đeo khoảng 8 tiếng / ngày để cho đồng hồ có thể hoạt động chính xác liên tục. Mỗi tuần bạn nên lên dây cót bằng tay để hỗ trợ.</p>
        <br>
        <h4>Lưu ý khi sử dụng đồng hồ có vỏ làm từ vàng khối 18k</h4>
        <p>Nên vệ sinh hàng tuần để đồng hồ được bóng và sạch: cách vệ sinh rất đơn giản. Vỏ đồng hồ bao gồm có cả củ máy đồng hồ nên ta không nên ngâm với nước ấm, để làm được điều đó ta chuẩn bị một cốc nước ấm có pha xà phòng loãng sau đó để mặt đồng hồ lên trên miệng cốc và dây thả xuống để ngâm trong vòng 15 phút và dùng bàn chải trà xạch với nước thông thường.</p>
        <br>
        <h4>Lưu ý khi sử dụng đồng hồ dây da</h4>
        <p>- Hạn chế để dây da tiếp xúc với nước vì điều này sẽ khiến dây da lão hóa rất nhanh, dẫn tới dây bị cứng, gẫy và hỏng</p>
        <p>- Nếu không may dây da bị ngấm nước, ta phải để dây da ở nơi khô thoáng, gió sẽ làm dây da khô tự nhiên. Không được dùng máy sấy hoặc hong khô ở những nơi có nhiệt độ cao vì sẽ làm dây da cứng lại và dễ gãy hỏng</p>
        <p>- Cách vệ sinh dây da: Ta chuẩn bị 2 tấm vải mềm, 1 ít giấm, 1 ít dầu oliu. Đầu tiên ta dùng khăn mềm lau nhẹ ở 2 phần mặt dây da, sau đó ngâm tấm vải vào nước giấm rồi vắt sạch, lau tấm vải đó vào 2 mặt dây da, cuối cùng dùng tấm vải còn lại ngâm vào nước có dầu oliu vắt sạch lau lần nữa cho hết bụi bẩn. Cuối cùng chúng ta để dây đồng hồ để nơi khô tháng để cho dây tự khô-</p>
        <br>
        <h4>Những điều cần tránh khi sử dụng đồng hồ</h4>
        <ol>
            <li>Không sử dụng hoặc để đồng hồ ở nơi có nhiều từ trường</li>
            <li>Không nên trực tiếp để đồng hồ dưới luồng khí của điều hòa</li>
            <li>Không nên đeo đồng hồ khi xông hơi, tắm nóng lạnh hoặc đi bơi (trừ những đồng hồ chuyên dùng dành cho bơi lặn)</li>
            <li>Tránh để đồng hồ bị va đập mạnh, nên tháo đồng hồ khi chơi thể thao ngoại trừ đồng hồ chuyên dụng dành riêng cho thể thao.</li>
            <li>Luôn kiểm tra tình trạng của núm vặn, vị trí đúng là ở nấc trong cùng để đảm bảo độ kín khít của đồng hồ</li>
            <li>Không được sử dụng đồng hồ với hoá chất dễ làm hư hại dây, vỏ đồng hồ cũng như các chi tiết khác.</li>
            <li>Không để đồng hồ ở nơi có nhiệt độ cao quá 60 độ C (tương đương 140 độ F) hoặc những nơi thấp hơn O độ C ( tương đương 32 độ F).</li>
            <li>Hàng tuần nên chùi rửa đồng hồ với nước ấm với xà-phòng để chải sạch bụi bẩn và muối đọng do mò hôi tiết ra. Những bụi bẩn và mồ hôi muối chính là tác nhân gây ra nước vào trong đồng hồ.</li>
            <li>Không sử dụng các nút bấm khi ở dưới nước đối với những đồng hồ nhiều chức năng.</li>
            <li>Không nên chỉnh lịch nhanh sau 8h tối trở đi đối với những đồng hồ có chức năng chỉnh lịch nhanh</li>
            <li>Không nên đeo đồng hồ khi tắm biển, nếu có đeo thì phải tráng rửa lại bằng nước ấm với xà-phòng. ( cát và nước muối sẽ chui vào các khe gioăng ở kính, đắy và đặc biệt là núm. Khi nước biển khô đi ,muối và cát biển còn đọng lại trong núm làm cộm gioăng dẫn đến tạo khe hở lớn cho nứoc vào đồng hồ ) . Trường hợp, trong khi tắm biển mà thấy đồng hồ có hiện tượng nước vào phải kịp thời mang đến nơi sửa chữa gần nhất để tháo và xì khô nước biển. Với tác dụng muối ăn mòn của nước biển, chỉ cần để sang ngày thứ hai là hỏng toàn bộ máy.</li>
        </ol>
    </div>
</div>
{{--<div>--}}
{{--    <h4 class="other-product-preview-title">Các sản phẩm khác</h4>--}}
{{--</div>--}}
{{--<div class="other-product-preview container-dt">--}}
{{--    <div class="row">--}}
{{--        <div class="col-4-2">--}}
{{--            <a href="rolex-yacht-master-37-268655-0010.html">--}}
{{--                <img src="" alt="rolex-yacht-master-37-268655-0010" class="product-img-preview">--}}
{{--            </a>--}}
{{--            <h4 class="product-preview-brand">--}}
{{--                <a href="rolex-yacht-master-37-268655-0010.html">rolex</a>--}}
{{--            </h4>--}}
{{--            <p class="product-ref">268655-0010</p>--}}
{{--            <h4 class="product-preview-title"><a href="rolex-yacht-master-37-268655-0010.html">Rolex Yacht-Master 37 268655-0010</a></h4>--}}
{{--            <p class="product-preview-price">622.000.000 VND</p>--}}
{{--        </div>--}}

{{--        <div class="col-4-2">--}}
{{--            <a href="rolex-oyster-datejust-36-126233-0021.html">--}}
{{--                <img src="./img/rolex-oyster-datejust-36-126233-0021.png" alt="rolex-oyster-datejust-36-126233-0021" class="product-img-preview">--}}
{{--            </a>--}}
{{--            <h4 class="product-preview-brand">--}}
{{--                <a href="rolex-oyster-datejust-36-126233-0021.html">rolex</a>--}}
{{--            </h4>--}}
{{--            <p class="product-ref">126233-0021</p>--}}
{{--            <h4 class="product-preview-title"><a href="rolex-oyster-datejust-36-126233-0021.html">Rolex Oyster Datejust 36 126233-0021</a></h4>--}}
{{--            <p class="product-preview-price">340.600.000 VND</p>--}}
{{--        </div>--}}
{{--        <div class="col-4-2">--}}
{{--            <a href="rolex-oyster-datejust-36-126233-0019.html">--}}
{{--                <img src="./img/rolex-oyster-datejust-36-126233-0019.png" alt="rolex-oyster-datejust-36-126233-0019" class="product-img-preview">--}}
{{--            </a>--}}
{{--            <h4 class="product-preview-brand">--}}
{{--                <a href="rolex-oyster-datejust-36-126233-0019.html">rolex</a>--}}
{{--            </h4>--}}
{{--            <p class="product-ref">126233-0019</p>--}}
{{--            <h4 class="product-preview-title"><a href="rolex-oyster-datejust-36-126233-0019.html">Rolex Oyster Datejust 36 126233-0019</a></h4>--}}
{{--            <p class="product-preview-price">290.820.000 VND</p>--}}
{{--        </div>--}}
{{--        <div class="col-4-2">--}}
{{--            <a href="rolex-oyster-datejust-36-126233-0017.html">--}}
{{--                <img src="./img/rolex-oyster-datejust-36-126233-0017.png" alt="rolex-oyster-datejust-36-126233-0017" class="product-img-preview">--}}
{{--            </a>--}}
{{--            <h4 class="product-preview-brand">--}}
{{--                <a href="rolex-oyster-datejust-36-126233-0017.html">rolex</a>--}}
{{--            </h4>--}}
{{--            <p class="product-ref">126233-0017</p>--}}
{{--            <h4 class="product-preview-title"><a href="rolex-oyster-datejust-36-126233-0017.html">Rolex Oyster Datejust 36 126233-0017</a></h4>--}}
{{--            <p class="product-preview-price">340.600.000 VND</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

</div>
<div class="container-fuild last-banner bg-black">
    @include('layout.footer')
</div>
</body>
@include('layout.script')
</html>
