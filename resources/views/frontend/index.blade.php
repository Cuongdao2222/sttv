
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

                <?php 

                    $groups = App\Models\groupProduct::where('parent_id', 17)->get()->take(10);
                ?>
                @foreach($groups as $key => $val)
                <li class="tab {{ $key==0?'is-active':'' }} tab-click" data-id="{{ $val->id }}">
                    <a>{{ $val->name }}</a>
                </li>

                <?php 
                    if($key>7){
                        break;
                    }
                ?>
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
                    @if(!empty($info_pd->Link))
                    <div class="column is-3">
                        <div class="product-item">
                           <!--  <div class="merchandising-flag has-text-centered">
                                <div class="badge">
                                    <span>MIỄN PHÍ CÔNG LẮP ĐẶT TRONG 7 NGÀY</span>
                                </div>
                            </div> -->
                            <div class="product-item_image">
                                <div class="item-img has-text-centered">
                                    <a href="{{ route('details', $info_pd->Link) }}">
                                        <div class="progressive-media progressive-media-image progressive-media-unloaded" data-img-src="{{ asset($info_pd->Image) }}">
                                            <div class="progressive-media-aspect" style="padding-bottom: 80%;">
                                                <div class="progressive-media-aspect-inner">
                                                    <img class="progressive-media-image-placeholder progressive-media-content progressive-media-blur" src="{{ asset($info_pd->Image) }}" crossorigin="anonymous">

                                                    <img class="progressive-media-image-placeholder progressive-media-image-placeholder-edge progressive-media-content" src="{{ asset($info_pd->Image) }}" crossorigin="anonymous">
                                                    
                                                    <noscript>
                                                    <img class="progressive-media-image-original progressive-media-content" src="{{ asset($info_pd->Image) }}"></noscript>
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

                                               
                                                {!! @$info_pd->Salient_Features !!}
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
                                            <span>{{ @number_format($info_pd->Price) }} ₫</span>
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
                                                <button class="btn btn-default btn-cart" onclick="addToCart({{ $info_pd->id }})">Thêm vào giỏ hàng
                                                </button>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif



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

<script type="text/javascript">

    $('input:checkbox[name=category]').each(function() 
    {    
        if($(this).is(':checked'))
          alert($(this).val());
    });

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

                 // $('.is-centered').html('');

                $('#content-tabs section').html(result);

                // console.log(result);
              
              
            }
        }); 
    })


     function addToCart(id) {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('cart') }}",
            data: {
                product_id: id,
                gift_check:$('#gift_checked').val()
                   
            },
            beforeSend: function() {
               
                $('.loader').show();

            },
            success: function(result){
    
              window.location.href = result; 
                
            }
        });
        
    }

  
</script>
@endpush


@endsection  