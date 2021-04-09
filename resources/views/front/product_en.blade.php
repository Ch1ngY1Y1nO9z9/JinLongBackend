@extends('layouts.template_en')

@section('css')
<link rel="stylesheet" href="/css/product.css">

{{-- <style>
    main #news .container .link .news_pic {
        background-size: cover;
        background-position: center;
    }
</style> --}}
@endsection

@section('content')
<main>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active" aria-current="page">{{$type->type_name_en}}</li>
            </ol>
        </nav>
        <div class="products">
            @foreach ($products as $product)
            <div class="product">
                <div class="row">
                    <div class="product_thumbnail col-5 col-md-3">
                        <div class="product_pic">
                            <img width="100%" class="lazy" data-src="{{$product->img}}" src="{{$product->img}}" alt="">
                        </div>
                        <div class="product_name">
                            {{$product->name_en}}
                        </div>
                    </div>
                    <div class="product_detail col-7 col-md-9">
<pre>
{{$product->content_en}}
</pre>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>

</main>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>

@endsection
