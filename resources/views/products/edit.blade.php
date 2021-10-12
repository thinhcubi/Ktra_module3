<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Chỉnh sửa sản phẩm</h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{ route('product.update', $products->id) }}" enctype="multipart/form-data">
                {{ @csrf_field()  }}
                @csrf
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" value="{{ $products->name }}" required>
                </div>
                <div class="form-group">
                    <label>Ảnh</label>
                    <input type="file" class="form-control" name="image" id="inputFile" value="">
                    <img src="{{asset('storage/'.$products->image)}}" alt="" style="width: 100px">
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price" value="{{ $products->price }}" required>
                </div>
                <div class="form-group">
                    <label>Thể loại</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option
                                @if($products->category_id == $category->id)
                                {{"selected"}}
                                @endif
                                value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
