
@extends('frontend.layouts.apps')

@section('content') 

@push('style')

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

@endpush


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

       
        <div id="content-tabs" class="content-tab" style="">
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
                                                    <img class="progressive-media-image-placeholder progressive-media-content" src="{{ asset($info_pd->Image) }}" crossorigin="anonymous"><img class="progressive-media-image-placeholder progressive-media-image-placeholder-edge progressive-media-content" src="{{ asset($info_pd->Image) }}" crossorigin="anonymous">
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


@endsection  