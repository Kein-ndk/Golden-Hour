<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
{{--<script src="{{asset('asset/js/checkout.js')}}"></script>--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    /* cart update*/
    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('updateCart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });

    /*delete cart*/

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Bạn có muốn xóa sản phẩm này ?")) {
            $.ajax({
                url: '{{ route('deleteCart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

    function addTocart(e){
        e.preventDefault();
        let urlCart = $(this).data('url')
        $.ajax({
            type: "GET",
            url: urlCart,
            dataType: 'json',
            success: function (data){
                if (data.code === 200){
                    location.href = '{{route('cart')}}';
                }
            },
            error: function (){

            }
        });
    }

    $(function (){
        $(document).on('click','.add_to_cart', addTocart)
    })
</script>
