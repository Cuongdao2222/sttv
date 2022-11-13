<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="images/Favicon.ico" rel="shortcut icon" type="image/x-icon">
        <title>Site tivi</title>
        <meta name="csrf-param" content="_csrf">
       <meta name="csrf-token" content="{{ csrf_token() }}">

        @stack('style')
        
        
    </head>
    <body>
        <div class="wrap">
            <style type="text/css">
                .progressive-media .progressive-media-content {
                    height: auto !important;
                }
            </style>
            <div class="navbar-fixed-top">
                <div class="container is-fullhd sm-navigation">
                    <nav class="navbar" role="navigation" aria-label="main navigation">
                        <div class="navbar-brand">
                            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            </a>
                            <a class="navbar-item" href="/">
                            <img src="{{ asset('images/global-samsung-logo.svg')  }}" width="112" height="28">
                            </a>
                            <div class="is-hidden-tablet search-mobile">
                                <form action="/site/search" method="get">
                                    <input type="text" placeholder="Tìm kiếm" name="s" id="s" maxlength="40">
                                    <button type="button" class="btn" value="Tìm kiếm" >
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 96 96" focusable="false">
                                            <path d="M40.581 4.09c20.126 0 36.5 16.374 36.5 36.5a36.325 36.325 0 01-7.963 22.733l22.8 22.948-5.674 5.639-22.767-22.913a36.327 36.327 0 01-22.896 8.093c-20.126 0-36.5-16.374-36.5-36.5s16.374-36.5 36.5-36.5zm0 8c-15.715 0-28.5 12.785-28.5 28.5s12.785 28.5 28.5 28.5 28.5-12.785 28.5-28.5-12.785-28.5-28.5-28.5z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <a class="is-hidden-tablet navbar-item" style="margin-left: auto" href="index-1.htm"><img style="height: 40px;" src="{{ asset('images/LOGO-ADG.png')}}">
                            </a>
                        </div>


                        <?php 

                            $group = App\Models\groupProduct::where('parent_id', 17)->get()->take(10);


                        ?>
                        <div id="navbarBasicExample" class="navbar-menu">
                            <div class="navbar-start">
                                @foreach($group as $val)
                                <a class="navbar-item" href="{{ route('category-product', $val->link) }}">{{ $val->name }}</a>
                                @endforeach
                            </div>
                            <div class="navbar-end is-hidden-mobile">
                                <div class="navbar-item">
                                    <form action="/site/search" method="get">
                                        <input type="text" placeholder="Tìm kiếm" name="s" id="s" maxlength="40">
                                        <button type="button" class="btn" value="Tìm kiếm" >
                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 96 96" focusable="false">
                                                <path d="M40.581 4.09c20.126 0 36.5 16.374 36.5 36.5a36.325 36.325 0 01-7.963 22.733l22.8 22.948-5.674 5.639-22.767-22.913a36.327 36.327 0 01-22.896 8.093c-20.126 0-36.5-16.374-36.5-36.5s16.374-36.5 36.5-36.5zm0 8c-15.715 0-28.5 12.785-28.5 28.5s12.785 28.5 28.5 28.5 28.5-12.785 28.5-28.5-12.785-28.5-28.5-28.5z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <a href="index-1.htm"><img src="{{ asset('images/LOGO-ADG.png') }}"></a>
                                    <a class="position-relative" href="#">
                                    <img src="{{ asset('images/cart-outline.png') }}">
                                    <span class="badge badge-danger badge-cart">0</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <style>
            </style>


            @yield('content')

            
        </div>
        <footer class="footer">
            <div class="footer">
                <div class="footer-column container">
                    <div class="columns">
                        <div class="footer-column__item column is-one-quarter">
                            <div class="footer-category">
                                <h3 class="footer-category__title">Sản Phẩm</h3>
                                <div class="footer-category__list-wrap">
                                    <ul class="footer-category__list">
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="tvs/the-premiere.html" title="">
                                            The Premiere</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="tvs/neo-qled-8k.html" title="">
                                            Neo QLED 8K</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="tvs/neo-qled-4k.html" title="">
                                            Neo QLED 4K</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="tvs/qled.html" title="">
                                            QLED</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="tvs/uhd.html" title="">
                                            UHD</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="tvs/lifestyle-tv.html" title="">
                                            Lifestyle TV</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="tvs/soundbar.html" title="">
                                            Soundbar</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="tvs/sound-tower.html" title="">
                                            Sound Tower</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="tvs/accessory.html" title="">
                                            Accessory</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column__item column is-one-quarter">
                            <div class="footer-category">
                                <h3 class="footer-category__title">Về chúng tôi</h3>
                                <div class="footer-category__list-wrap">
                                    <ul class="footer-category__list">
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="page/5-gioi-thieu-lich-su-cong-ty.html" title="">Giới thiệu
                                            AnhDuy Group
                                            </a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="page/3-chinh-sach-bao-hanh.html" title="">
                                            Chính sách bảo hành
                                            </a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="page/2-chinh-sach-van-chuyen-giao-nhan.html" title="">
                                            Chính sách vận chuyển & giao nhận
                                            </a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="page/1-quy-dinh-hinh-thuc-thanh-toan.html" title="">
                                            Quy định hình thức thanh toán
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column__item column is-one-quarter">
                            <div class="footer-category">
                                <h3 class="footer-category__title">Bạn Cần Hỗ Trợ?</h3>
                                <div class="footer-category__list-wrap">
                                    <ul class="footer-category__list">
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="lien-he.html" aria-label="Liên Hệ" title="">Liên Hệ</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="danh-muc-tin-tuc/ho-tro-ky-thuat.html" title="">Hỗ Trợ Kỹ
                                            thuật</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column__item column is-one-quarter">
                            <div class="footer-category">
                                <h3 class="footer-category__title">Hotline</h3>
                                <p>0932 190 170</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom container">
                    <div class="footer-copyright-wrap">
                        <div class="footer-copyright-align">
                            <p class="footer-copyright">©2021 AnhDuy Group. </p>
                            <div class="footer-legal">Công ty TNHH Quốc Tế Anh Duy<br>GPDKKD: 0304157122, do sở KH & DT TP.HCM
                                cấp ngày 06/01/2006
                                <br>Địa chỉ 170 Ung Văn Khiêm, P.25, Q.Bình Thạnh, TP. Hồ Chí
                                Minh<br>Điện
                                thoại: (028) 38983424
                            </div>
                        </div>
                        <div class="footer-local-logo">
                            <div class="footer-local-logo--wrap">
                                <div class="footer-local-logo__item">
                                    <a class="footer-mark__link" href="https://www.online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=14561" target="_blank">
                                        <div class="image image--main-loaded">
                                            <img class="image__main responsive-img image--loaded" alt="Đã đăng ký với Bộ Công Thương" src="{{asset('images/gov-logos-2.png') }}" >
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="fab show" title="Go to Top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
        <img class="fab__icon" alt="" src="{{ asset('images/arrow-up-circle-outline.svg') }}">
        </a>

        @stack('js')

        
    </body>
</html>