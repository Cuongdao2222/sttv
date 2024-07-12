

@extends('frontend.layouts.apps')

@section('content') 
    @push('style')
    <link href="{{ asset('css/site.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/clientlib-base.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/35deb2b4/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('bulma/css/bulma.min.css')}}" rel="stylesheet">
    <link href="{{ asset('bulma/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('swiper@8.4.2/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{ asset('css/site.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/75a5fa0c/css/progressive-media.min.css')}}" rel="stylesheet">
    @endpush

    <div class="category">
        <div class="pageType-CategoryPage">
            
            <div class="container">
                <!-- <div class="columns is-hidden-mobile">
                    <div class="column is-5">
                        <div class="plp-breadcrumb">
                            <div class="breadcrumb-section hidden-xs hidden-sm">
                                <ul class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                                    <li property="itemListElement" typeof="ListItem">
                                        <a href="/"><u>Trang chủ</u></a>
                                    </li>
                                    <li property="itemListElement" typeof="ListItem">
                                        <a href="neo-qled-8k.html"><u>Sản
                                        phẩm</u></a>
                                    </li>
                                    <li class="active" property="itemListElement" typeof="ListItem">
                                        Neo QLED 8K <span class="breadcrumb-value-count">(11)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="columns">
                    <div class="column is-2 is-hidden-mobile">
                        <form id="theForm" action="/tvs" method="post">
                            <div class="" style="opacity: 1; display: block;">
                                <div class="">
                                    <div class="pf-finder-v2__filters-list-top">
                                        <h2 class="pf-finder-v2__filters-list-top-text">Bộ lọc</h2>
                                        <a href="javascript:void(0)" class="pf-finder-v2__filters-list-top-closed" role="button" title="">
                                            <span class="hidden">Đóng</span>
                                            <svg class="icon" focusable="false">
                                                <use xlink:href="#delete-bold" href="#delete-bold"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="pf-finder-v2__filters-list-list">
                                        <div class="pf-finder-v2__filters-list-list-wrap js-pf-filter_list-wrap">
                                            <div class="pf-finder-v2__filters-list-list-area pf-finder-v2__filters-list-list--active" style="display:block">
                                                <h3 class="pf-finder-v2__filters-list-list-headline">
                                                    <a href="javascript:void(0)" class="pf-finder-v2__filters-list-list-headline-text">
                                                        Năm sản xuất
                                                        <svg class="icon icon--open" focusable="false">
                                                            <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                                                        </svg>
                                                        <svg class="icon icon--closed" focusable="false">
                                                            <use xlink:href="#close-up-regular" href="#close-up-regular"></use>
                                                        </svg>
                                                    </a>
                                                </h3>
                                                <div class="pf-finder-v2__filters-list-item-wrap" style="">
                                                    <ul class="pf-finder-v2__filters-list-list-item">
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="2021" name="year" class="hidden" id="year-2021">
                                                            <label class="checkbox-radio__label" for="year-2021">
                                                            <span class="checkbox-radio__label-text">2021</span>
                                                            </label>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="2022" name="year" class="hidden" id="year-2022">
                                                            <label class="checkbox-radio__label" for="year-2022">
                                                            <span class="checkbox-radio__label-text">2022</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pf-finder-v2__filters-list-list-area pf-finder-v2__filters-list-list--active" style="display:block">
                                                <h3 class="pf-finder-v2__filters-list-list-headline">
                                                    <a href="javascript:void(0)" class="pf-finder-v2__filters-list-list-headline-text">
                                                        Dòng TV
                                                        <span class="hidden" data-global-text="{&quot;Expand&quot; : &quot;Click to Expand&quot;,&quot;Collapse&quot; : &quot;Nhấp để thu gọn&quot;}">Nhấp để thu gọn</span>
                                                        <svg class="icon icon--open" focusable="false">
                                                            <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                                                        </svg>
                                                        <svg class="icon icon--closed" focusable="false">
                                                            <use xlink:href="#close-up-regular" href="#close-up-regular"></use>
                                                        </svg>
                                                    </a>
                                                </h3>
                                                <div class="pf-finder-v2__filters-list-item-wrap" style="">
                                                    <ul class="pf-finder-v2__filters-list-list-item">
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="hidden" checked="" value="1" id="checkbox-1">
                                                                <label class="checkbox-radio__label" for="checkbox-1">
                                                                <span class="checkbox-radio__label-text">Neo QLED 8K</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="hidden" value="2" id="checkbox-2">
                                                                <label class="checkbox-radio__label" for="checkbox-2">
                                                                <span class="checkbox-radio__label-text">Neo QLED 4K</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="hidden" value="5" id="checkbox-5">
                                                                <label class="checkbox-radio__label" for="checkbox-5">
                                                                <span class="checkbox-radio__label-text">QLED</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="hidden" value="6" id="checkbox-6">
                                                                <label class="checkbox-radio__label" for="checkbox-6">
                                                                <span class="checkbox-radio__label-text">UHD</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="hidden" value="10" id="checkbox-10">
                                                                <label class="checkbox-radio__label" for="checkbox-10">
                                                                <span class="checkbox-radio__label-text">Lifestyle TV</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="hidden" value="11" id="checkbox-11">
                                                                <label class="checkbox-radio__label" for="checkbox-11">
                                                                <span class="checkbox-radio__label-text">The Premiere</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="hidden" value="12" id="checkbox-12">
                                                                <label class="checkbox-radio__label" for="checkbox-12">
                                                                <span class="checkbox-radio__label-text">Accessory</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="hidden" value="14" id="checkbox-14">
                                                                <label class="checkbox-radio__label" for="checkbox-14">
                                                                <span class="checkbox-radio__label-text">Soundbar</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="hidden" value="15" id="checkbox-15">
                                                                <label class="checkbox-radio__label" for="checkbox-15">
                                                                <span class="checkbox-radio__label-text">Sound Tower</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pf-finder-v2__filters-list-list-area pf-finder-v2__filters-list-list--active" style="display:block">
                                                <h3 class="pf-finder-v2__filters-list-list-headline">
                                                    <a href="javascript:void(0)" class="pf-finder-v2__filters-list-list-headline-text">
                                                    Theo giá<span class="hidden">Nhấp để thu gọn</span>
                                                    </a>
                                                </h3>
                                                <div class="pf-finder-v2__filters-list-item-wrap" style="">
                                                    <ul class="pf-finder-v2__filters-list-list-item">
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="1" name="price" class="hidden" id="price-1">
                                                                <label class="checkbox-radio__label" for="price-1">
                                                                <span class="checkbox-radio__label-text">Trên 20 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="2" name="price" class="hidden" id="price-2">
                                                                <label class="checkbox-radio__label" for="price-2">
                                                                <span class="checkbox-radio__label-text">Từ 15 - 20 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="3" name="price" class="hidden" id="price-3">
                                                                <label class="checkbox-radio__label" for="price-3">
                                                                <span class="checkbox-radio__label-text">Từ 12 - 15 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="4" name="price" class="hidden" id="price-4">
                                                                <label class="checkbox-radio__label" for="price-4">
                                                                <span class="checkbox-radio__label-text">Từ 8 - 12 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="5" name="price" class="hidden" id="price-5">
                                                                <label class="checkbox-radio__label" for="price-5">
                                                                <span class="checkbox-radio__label-text">Từ 5 - 8 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pf-finder-v2__filters-list-list-area pf-finder-v2__filters-list-list--active" name="filterAvailable" data-name="Display Size_2" style="display:block">
                                                <h3 class="pf-finder-v2__filters-list-list-headline">
                                                    <a href="javascript:void(0)" class="pf-finder-v2__filters-list-list-headline-text">
                                                        Kích Thước Màn Hình
                                                        <svg class="icon icon--open" focusable="false">
                                                            <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                                                        </svg>
                                                        <svg class="icon icon--closed" focusable="false">
                                                            <use xlink:href="#close-up-regular" href="#close-up-regular"></use>
                                                        </svg>
                                                    </a>
                                                </h3>
                                                <div class="pf-finder-v2__filters-list-item-wrap" style="">
                                                    <ul class="pf-finder-v2__filters-list-list-item">
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="6" name="size" class="hidden" id="size-6">
                                                            <label class="checkbox-radio__label" for="size-6">
                                                            <span class="checkbox-radio__label-text">Trên 80 inch</span>
                                                            </label>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="7" name="size" class="hidden" id="size-7">
                                                            <label class="checkbox-radio__label" for="size-7">
                                                            <span class="checkbox-radio__label-text">75 inch</span>
                                                            </label>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="8" name="size" class="hidden" id="size-8">
                                                            <label class="checkbox-radio__label" for="size-8">
                                                            <span class="checkbox-radio__label-text">60 - 70 inch</span>
                                                            </label>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="9" name="size" class="hidden" id="size-9">
                                                            <label class="checkbox-radio__label" for="size-9">
                                                            <span class="checkbox-radio__label-text">50 - 55 inch</span>
                                                            </label>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="10" name="size" class="hidden" id="size-10">
                                                            <label class="checkbox-radio__label" for="size-10">
                                                            <span class="checkbox-radio__label-text">Dưới 50 inch</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                     @if(count($product))
                    <ul class="column is-10 product-listing product-grid plp-content">

                        @foreach($product as $val)
                        
                        <li class="product-item three-cols-tile">
                            <h1 class="sr-only">{{ @$val->Name }}</h1>
                            <div class="merchandising-flag text-center wishlist" style="height: 30px;min-height: 30px;">
                                <div class="badge">
                                    <span>MIỄN PHÍ CÔNG LẮP ĐẶT TRONG 7 NGÀY</span>
                                </div>
                            </div>
                            <div class="">
                                    <div class="item-img has-text-centered">
                                        <a href="{{ route('details', $val->Link) }}">
                                            <div class="progressive-media progressive-media-image progressive-media-unloaded" data-img-src="{{ asset($val->Image) }}">
                                                <div class="progressive-media-aspect" style="padding-bottom: 80%;">
                                                    <div class="progressive-media-aspect-inner">
                                                        <img class="progressive-media-image-placeholder progressive-media-content progressive-media-blur" src="{{ asset($val->Image) }}" crossorigin="anonymous"><img class="progressive-media-image-placeholder progressive-media-image-placeholder-edge progressive-media-content" src="{{ asset($val->Image) }}" crossorigin="anonymous">
                                                        <noscript><img class="progressive-media-image-original progressive-media-content" src="{{ asset($val->Image) }}"></noscript>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <div class="product-content-wrapper">
                                <div class="item-flex-top">
                                    <div class="variable-height-wrapper-s1">
                                        <div class="name">
                                            <a title="{{ $val->Name }}" class="product-title" href="{{ route('details', $val->Link) }}">
                                                {{ @$val->Name }}                                          
                                            </a>
                                            <span class="product-sku">{{ @$val->productSku  }}</span>
                                        </div>
                                    </div>

                                    

                                    @if(!empty($val->Salient_Features))
                                    <div class="variable-height-wrapper-s2">
                                        <div class="merchandising-wrapper">
                                            <div class="merchandising-box">
                                                <div class="merchandising-text text-center">
                                                    {!! @$val->Salient_Features !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="item-flex-bottom">
                                    <div class="product-item-size">
                                        <ul class="product-item-size-list">
                                            <li class="product-item-size active">
                                                <?php 
                                                   $pattern = '/[1-9][0-9]{0,2}\sinch/';
                                                   $string = $val->Name;
                                                ?>
                                                @if (preg_match($pattern, $string, $matches)) 
                                                       {{ intval($matches[0]) }}
                                                @endif                                                                             
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="shipping-eta"></div>
                                    <div class="price">
                                        <!--                                        <div class="price-discount">-->
                                        <!--                                        <span>-->
                                        <!--                                            <span>Giảm 26%</span>-->
                                        <!--                                        </span>-->
                                        <!--                                        </div>-->
                                        <span>{{ @ number_format($val->Price) }} ₫</span>
                                    </div>
                                    <!--                                    <div class="promo-leasing" style="height: 40px;">-->
                                    <!--                                        <div class="product-promo promo">-->
                                    <!--                                            <span>chiết khấu 50.000.565&nbsp;₫ (giá gốc <del>189.899.600&nbsp;₫</del>)</span>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <div class="product-card-v2__cta">
                                        <button class="cta cta--contained cta--black js-buy-now btn-cart" data-url-cart="/cart/add" data-product-id="115">
                                        Thêm vào giỏ hàng</button>
                                        <a class="cta cta--outlined cta--black" href="neo-qled-8k/smart-tv-8k-neo-qled-65-inch-qn700b-2022.html">TÌM HIỂU THÊM</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-notification">
                                <div class="modal fade" id="addToCartNotification" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="{{ asset('images/checked.svg') }}">
                                                <p>Sản phẩm đã được thêm vào giỏ hàng.</p>
                                                <a href="../cart/index.html" class="btn btn-default btn-block mini-cart-checkout-button">
                                                THANH TOÁN
                                                </a>
                                                <a href="#" data-dismiss="modal" class="btn btn-link addtocart-continue-shopping">
                                                Tiếp tục mua hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                      
                        @endforeach
                        
                        
                    </ul>


                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('js')

    <script src="{{ asset('assets/75a5fa0c/js/progressive-media.min.js')}}"></script>
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
    <script src="{{ asset('js/main.js') }}"></script>

    @endpush

@endsection 
    