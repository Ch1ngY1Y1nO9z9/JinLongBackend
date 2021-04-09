@extends('layouts.template')

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
            <ol class="breadcrumb my-3">
                <li class="breadcrumb-item">產品介紹</li>
                <li class="breadcrumb-item active" aria-current="page">{{$type->type_name_ch}}</li>
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
                            {{$product->name_ch}}
                        </div>
                    </div>
                    <div class="product_detail col-7 col-md-9">
<pre>
{{$product->content_ch}}
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
