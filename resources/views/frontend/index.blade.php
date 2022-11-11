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
        <link href="{{ asset('assets/75a5fa0c/css/progressive-media.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/35deb2b4/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('bulma/css/bulma.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bulma/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('swiper@8.4.2/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css')}}  " rel="stylesheet">
        <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css')}}" rel="stylesheet">
        <link href="{{ asset('css/slick-theme.css')}}" rel="stylesheet">
        <link href="{{ asset('css/site.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="wrap">
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
                            <img src="images/global-samsung-logo.svg" width="112" height="28">
                            </a>
                            <div class="is-hidden-tablet search-mobile">
                                <form action="/site/search" method="get">
                                    <input type="text" placeholder="Tìm kiếm" name="s" id="s" maxlength="40" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false;}">
                                    <button type="button" class="btn" value="Tìm kiếm" onclick="this.form.submit(); return false;">
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 96 96" focusable="false">
                                            <path d="M40.581 4.09c20.126 0 36.5 16.374 36.5 36.5a36.325 36.325 0 01-7.963 22.733l22.8 22.948-5.674 5.639-22.767-22.913a36.327 36.327 0 01-22.896 8.093c-20.126 0-36.5-16.374-36.5-36.5s16.374-36.5 36.5-36.5zm0 8c-15.715 0-28.5 12.785-28.5 28.5s12.785 28.5 28.5 28.5 28.5-12.785 28.5-28.5-12.785-28.5-28.5-28.5z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <a class="is-hidden-tablet navbar-item" style="margin-left: auto" href="index-1.htm"><img style="height: 40px;" src="images/LOGO-ADG.png">
                            </a>
                        </div>


                        <?php 

                            $group = App\Models\groupProduct::where('parent_id', 17)->get()->take(10);


                        ?>
                        <div id="navbarBasicExample" class="navbar-menu">
                            <div class="navbar-start">
                                @foreach($group as $val)
                                <a class="navbar-item" href="#">{{ $val->name }}</a>
                                @endforeach
                            </div>
                            <div class="navbar-end is-hidden-mobile">
                                <div class="navbar-item">
                                    <form action="/site/search" method="get">
                                        <input type="text" placeholder="Tìm kiếm" name="s" id="s" maxlength="40" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false;}">
                                        <button type="button" class="btn" value="Tìm kiếm" onclick="this.form.submit(); return false;">
                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 96 96" focusable="false">
                                                <path d="M40.581 4.09c20.126 0 36.5 16.374 36.5 36.5a36.325 36.325 0 01-7.963 22.733l22.8 22.948-5.674 5.639-22.767-22.913a36.327 36.327 0 01-22.896 8.093c-20.126 0-36.5-16.374-36.5-36.5s16.374-36.5 36.5-36.5zm0 8c-15.715 0-28.5 12.785-28.5 28.5s12.785 28.5 28.5 28.5 28.5-12.785 28.5-28.5-12.785-28.5-28.5-28.5z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <a href="index-1.htm"><img src="images/LOGO-ADG.png"></a>
                                    <a class="position-relative" href="cart/index.html">
                                    <img src="images/cart-outline.png">
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
            <div class="site-index">
                <div class="swiper-container home-swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="samsung/tvs/the-premiere.html">
                            <img class="is-hidden-mobile" src="/media/slider/16553787631650515520ThePremiere 16062022.jpg">
                            <img class="is-hidden-tablet" src="/media/slider/16505140421634306523ThePremiere_mobile 21.04.2022.jpg">
                            </a>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <section class="section">
                    <div class="columns">
                        <div class="column">
                            <img class="is-hidden-mobile" src="{{ asset('images/epp-tivi-170321-herofix.jpg')  }}">
                            <img class="is-hidden-tablet" src="{{ asset('images/epp-tivi-170321-herofix-MB.webp') }}">
                        </div>
                    </div>
                </section>
                <div class="sh-banner-wrapper " style="background: transparent">
                    <div class="sh-banner-container cinematic ">
                        <h3>Lưu ý về quà tặng:</h3>
                        <ul>
                            <li>Không xóa các sản phẩm thuộc Bộ quà tặng đặt trước khỏi giỏ hàng( bao gồm: giá treo ẩn, khung viền, chân đế, loa )</li>
                            <li>Khách hàng không có nhu cầu, xóa sản phẩm khỏi giỏ hàng để nhận giá cuối</li>
                            <li>Các voucher có hạn 3 tháng kể từ ngày phát hành</li>
                        </ul>
                        <!--            <picture class="sh-banner-background-image">-->
                        <!--                <img alt="tivi-qled-2021_250321_tnc_ver2.jpg"-->
                        <!--                     src="--><!--/images/promotion.jpg"-->
                        <!--                     class="sh-banner-major-img blur-up lazyloaded">-->
                        <!--            </picture>-->
                    </div>
                </div>
                <div class="container">
                    <div class="tabs is-centered">
                        <ul>
                            @foreach($group as $key => $val)
                            <li class="tab {{ $key==0?'is-active':'' }} tab-click" data-id="{{ $val->id }}">
                                <a>{{ $val->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <?php 

                        $product = App\Models\groupProduct::find($group[0]->id);

                        $product_sam = collect(json_decode($product->product_id))->take(3);

                      
                    ?>

                   
                    <div id="" class="content-tab" style="">
                        <section class="section">
                            <div class="columns is-multiline is-centered">

                                @if($product_sam->count()>0)
                                @foreach($product_sam as $key => $value)

                                <?php

                                    $info_pd = App\Models\product::find($value);

                                ?>
                                <div class="column is-3">
                                    <div class="product-item">
                                       <!--  <div class="merchandising-flag has-text-centered">
                                            <div class="badge">
                                                <span>MIỄN PHÍ CÔNG LẮP ĐẶT TRONG 7 NGÀY</span>
                                            </div>
                                        </div> -->
                                        <div class="product-item_image">
                                            <div class="item-img has-text-centered">
                                                <a href="tvs/the-premiere/may-chieu-100-inch-bo-tui-the-freestyle.html">
                                                    <div class="progressive-media progressive-media-image progressive-media-unloaded" data-img-src="{{ asset($info_pd->Image) }}">
                                                        <div class="progressive-media-aspect" style="padding-bottom: 80%;">
                                                            <div class="progressive-media-aspect-inner">
                                                                <img class="progressive-media-image-placeholder progressive-media-content progressive-media-blur" src="{{ asset($info_pd->Image) }}" crossorigin="anonymous"><img class="progressive-media-image-placeholder progressive-media-image-placeholder-edge progressive-media-content" src="{{ asset($info_pd->Image) }}" crossorigin="anonymous">
                                                                <noscript><img class="progressive-media-image-original progressive-media-content" src="{{ asset($info_pd->Image) }}"></noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-item_content-wrap">
                                            <div class="item-top">
                                                <a href="{{ route('details', $info_pd->Link) }}">
                                                <span class="product-title has-text-centered">{{ $info_pd->Name }}</span>
                                                </a>
                                                <span class="product-sku">{{ $info_pd->productSku }}</span>
                                            </div>
                                            <div class="item-bottom">
                                                <div class="merchandising-wrapper">
                                                    <div class="merchandising-box text-center">
                                                        <div class="merchandising-text">
                                                            <br> - Trả góp 0% khi mua sản phẩm Tivi Samsung (HD Saison & HomeCredit) (1/9 ~ 30/11/2022)
                                                            <br> - Quà tặng The Freestyle: (1) Pin chính hãng, (2) Case bảo vệ (01/08 ~ 30/09/2022)
                                                            <br> - Vie ON 8K: VIP Cine 06 tháng Xem toàn bộ nội dung trên VieON VIP và Kho phim bom tấn HBOGo & 3 Kênh K+ (K+ Cine, K+ Life, K+ Kids)… (01/09/22 ~ 31/10/22)
                                                            <br> - Galaxy Play: Crystal+ 06 tháng xem phim SVOD Premium + 06 phim chiếu rạp TVOD trong 03 tháng +  Phim chất lượng Dolby Atmos (01/09/22 ~ 31/10/22)
                                                            <br> - Clip TV: 18 tháng xem Gói Gia Đình tiêu chuẩn. Xem truyền hình trong ngoài nước và VOD (01/09/22 ~ 31/10/22)
                                                            <br> - Apple TV: 03 tháng xem phim (25/08/22 <br> - 28/11/22)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item_promotion" style="display: none">
                                                    <p class="has-text-centered">Tặng voucher 2M cho đơn hàng tiếp theo. CT
                                                        đến
                                                        30/6
                                                    </p>
                                                </div>
                                                <div class="product-price has-text-centered">
                                                    <div class="price">
                                                        <div class="price-discount" style="display: none">
                                                            <span>Giảm 44%</span>
                                                        </div>
                                                        <span>24.900.000 ₫</span>
                                                    </div>
                                                    <div class="promo-leasing" style="display: none">
                                                        <div class="product-promo promo">
                                                            <span>
                                                            chiết khấu 9.900.977 ₫ (giá gốc <del>22.400.400 ₫</del>)
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-button has-text-centered">
                                                    <div class="actions--add-to-cart">
                                                        <div class="has-text-centered">
                                                            <button class="btn btn-default btn-cart" data-url-cart="/cart/add" data-product-id="109">Thêm vào giỏ hàng
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="cart-notification">
                                    <div class="modal fade" id="addToCartNotification" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <img src="images/checked.svg">
                                                    <p>Sản phẩm đã được thêm vào giỏ hàng.</p>
                                                    <a href="cart/index.html" class="btn btn-default btn-block mini-cart-checkout-button">
                                                    THANH TOÁN
                                                    </a>
                                                    <a href="#" data-dismiss="modal" class="btn btn-link addtocart-continue-shopping">
                                                    Tiếp tục mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                                @endif
                            </div>
                        </section>
                    </div>

                    
                </div>
            </div>
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
                                            <img class="image__main responsive-img image--loaded" alt="Đã đăng ký với Bộ Công Thương" src="images/gov-logos-2.png" style="">
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
        <img class="fab__icon" alt="" src="images/arrow-up-circle-outline.svg">
        </a>
        <!-- <script src="{{ asset('assets/75a5fa0c/js/progressive-media.min.js')}}"></script> -->
        <script src="{{ asset('assets/4f253995/jquery.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

        <script src="{{ asset('assets/f8532ac8/yii.js')}}"></script>
        <script src="{{ asset('assets/35deb2b4/js/bootstrap.bundle.js')}}"></script>
        <script src="{{ asset('swiper@8.4.2/swiper-bundle.min.js')}}"></script>

        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
       <!--  <script src="{{ asset('js/main.js') }}"></script> -->

        <script type="text/javascript">

            $('.tab-click').click(function(){
                $('.is-centered li').removeClass('is-active');

                $(this).addClass('is-active');

                id = $(this).attr('data-id');

               
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "{{ route('ajax-home-call-pd') }}",
                    data: {
                        id: id,
                    },
                   
                    success: function(result){

                         $('.is-centered').html('');

                        $('.is-centered').html(result);

                        // console.log(result);
                      
                      
                    }
                }); 
            })
          
        </script>
    </body>
</html>