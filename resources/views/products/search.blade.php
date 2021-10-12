<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper rounded bg-white">
    <div>
        <h2>Danh sách sản phẩm</h2>
        <a href=" {{ route('product.create') }}">
            <button>Thêm mới sản phẩm</button>
        </a>
    </div>
    <hr>
    <form method="get" action="{{ route('product.search')  }}">
        @csrf
        <input type="text" placeholder="Tìm kiếm" name="search">
        <button type="submit">Tìm kiếm</button>
    </form>
    <div class="row px-sm-5 ">
        @if(!isset($products))
            <p>Không tìm thấy sản phẩm nào</p>
        @else
        @foreach($products as $key => $product)
            <div class="card">
                <div class="px-2 red text-uppercase">new</div>
                <div class="d-flex justify-content-center"><img src="{{asset('storage/' . $product->image)}}"
                                                                class="product" alt=""></div>
                <b class="px-2">
                    <p class="h4">{{ $product->name }}</p>
                </b>
                <div style="text-align: center">{{ $product->price }}</div>
                <div style="text-align: center">
                    <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')"
                       href="{{route('product.destroy',$product->id)}}">Xóa</a>
                    <hr>
                    <a href="{{ route("product.edit",$product->id) }}">Chỉnh sửa</a>
                </div>
            </div>
        @endforeach
            @endif
    </div>
</div>
</div>
</body>
</html>
