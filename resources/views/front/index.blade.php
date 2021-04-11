@extends('layouts.template')

@section('recaptcha')
    {{-- google recaptcha v3 --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcIJKMaAAAAAH7WbZzMm_RWopikwrF67vTfYejn"></script>
    <script>
        grecaptcha.ready(function() {
        grecaptcha.execute('6LcIJKMaAAAAAH7WbZzMm_RWopikwrF67vTfYejn', {action: 'homepage'}).then(function(token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
        });
    });
    </script>
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="/css/index.css">

<style>
    main #news .container .link .news_pic {
        background-size: cover;
        background-position: center;
    }
</style>
@endsection

@section('content')
    <main>
        <section id="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($banners as $banner)
                        <div class="swiper-slide">
                            <img width="100%" src="{{$banner->img}}" alt="{{$banner->alt}}">
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
        <section id="about_us">
            <div class="container">
                <div class="content row">
                    <div class="col-12 col-md-3">
                        <div class="company">
                            <span class="title">
                                關於正龍
                            </span>
                            <img width="100%" class="lazy" data-src="/img/about_us.jpg" src="/img/about_us.jpg">
                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="text">
                            <p>
                                正龍塑膠廠股份有限公司創立於民國六十九年，為一家生產束線帶之專業製造工廠，從塑膠模具設計到產品射出成形一貫作業，產品品質優良，深受客戶青睞。<br>
                                除了主力專業製造配線用之束線帶外，更致力於周邊產品的開發應用，如束線帶固定座，塑膠瓶蓋，塑膠拉環．．．等，歡迎OEM/ODM。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="news">
            <div class="container">
                <div class="content">
                    <span class="title">
                        最新消息
                    </span>
                    @foreach ($all_news as $news)
                        <a class="link" href="/news/ch/{{$news->id}}">
                            <div class="news_pic lazy" data-bg="{{$news->img}}" style="background-image: url({{$news->img}});"></div>
                            <div class="news_title">{{$news->date}} {{$news->title_ch}}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="products">
            <div class="container">
                <div class="container">
                    <div class="content">
                        <span class="title">
                            產品介紹
                        </span>
                    </div>
                    <div class="products">
                        <div class="row">
                            @foreach ($productTypes as $type)
                                <a href="/Types/ch/{{$type->id}}" class="product">
                                    <div class="product_pic">
                                        <div class="h-100 w-100 lazy" data-bg="{{$type->img}}" style="background-image: url({{$type->img}});"></div>
                                    </div>
                                    <div class="product_name">
                                        {{$type->type_name_ch}}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section id="contact_us">
            <div class="container">
                <div class="content">
                    <span class="title">
                        聯絡我們
                    </span>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="/contact_us" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="name">姓名:</span>
                                <input type="text" class="form-control" aria-label="name" aria-describedby="name" name="name" required>
                                <span class="input-group-text">電話:</span>
                                <input type="text" class="form-control" aria-label="Phone" name="phone" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="email">信箱:</span>
                                <input type="email" class="form-control" aria-label="email" name="email" aria-describedby="email" required>
                            </div>
                            <div class="input-group text_area">
                                <span class="input-group-text">訊息:</span>
                                <textarea class="form-control" aria-label="With textarea" name="content" height="300px" required></textarea>
                            </div>
                            <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">

                            <button class="btn form_button" type="submit">送出</button>
                        </form>
                        正龍塑膠廠股份有限公司<br>
                        統一編號:22600859<br>
                        電話:04-22703754<br>
                        傳真:04-22766553<br>
                        信箱: zl@zl-cabletie.com<br>
                    </div>
                    <div class="col-12 col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6124.034760900535!2d120.70580771590774!3d24.123540643071493!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x780d72272bbe514!2z5q2j6b6N!5e0!3m2!1szh-TW!2stw!4v1617725044978!5m2!1szh-TW!2stw"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <a class="backToTop" href="#">
            <span class="m-auto">
                ↑
            </span>
        </a>
    </main>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            autoplay: {
                delay: 5000,
            },
            autoHeight: true, //enable auto height
            lazy: true, // lazyload
        });

        var product_imgs = document.querySelectorAll('.product');


        product_imgs.forEach(function (product_img) {
            var pic = product_img.children[0];

            pic.setAttribute("style", 'height:' + pic.offsetWidth + 'px')
        })


        window.addEventListener('resize', function (event) {
            product_imgs.forEach(function (product_img) {
                var pic = product_img.children[0];

                pic.setAttribute("style", ';height:' + pic.offsetWidth + 'px')
            })
        })

    </script>
@endsection
