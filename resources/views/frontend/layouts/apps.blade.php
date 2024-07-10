<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('images/logo1.jpg') }}" rel="shortcut icon" type="image/x-icon">
        @if(isset($meta) && !empty($meta->meta_title))
        <title>{{ @$meta->meta_title }}</title>
        <meta property="og:description" content="{{ $meta->meta_content }}" /> 
        <meta name = "google-site-verify" content = "Oe5VRMXXNpVeNUbjHjfsjRfwAWzTXrHOR-UMF1iKIf4" />
     
        <meta name="keywords" content="{{ $meta->meta_key_words??'Siêu Thị Tivi - Mua Sắm Tivi Chính Hãng Giá Rẻ Tại Kho' }}"/>

        @else
        <title> Siêu Thị Tivi - Mua Sắm Tivi Chính Hãng Giá Rẻ Tại Kho</title>
        <meta name="robots" content="noindex, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta property="og:title" content="Siêu Thị Tivi - Mua Sắm Tivi Chính Hãng Giá Rẻ Tại Kho" />
        <meta property="og:description" content="Siêu Thị Tivi Chuyên Cung Cấp Và Phân Phối Sản Phẩm Tivi Chính Hãng Sony, LG, SamSung, TCL,... Giá Rẻ Nhất Tại Kho. Dịch Vụ Uy Tín Chuyên Nghiệp." />
       
        @endif
        <meta name="csrf-param" content="_csrf">
       <meta name="csrf-token" content="{{ csrf_token() }}">

       <meta name="google-site-verification" content="5aXrCE97zt-vl-Y7jl0Y44tfi9iTwtDRikEkt8vU2UQ" />

       <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NGB6J3GD');</script>
        <!-- End Google Tag Manager -->
        2. Paste this code immediately after the opening <body> tag:
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGB6J3GD"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @stack('style')
        <style type="text/css">
            .btns{
                border: 0;
               
            }
             nav.navbar a {
               
                font-size: 15px;
            }
            .merchandising-wrapper{
                height: 300px;
            }
            .div-menu{
                position: relative;
            }
            .item-menu{
                line-height: 48px !important;
            }

            .fas-phones{
                .phones-hotline {
                    width: auto !important;
                    padding: 7px 0;
                }
            }

            .phones-hotline{
                line-height: 64px;
            }
        </style>
        
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
                                <img src="{{ asset('images/logo1.jpg')  }}" width="112" height="28">
                            </a>
                            <div class="is-hidden-tablet search-mobile">
                                <form action="{{ route('search-product-frontend') }}" method="get">
                                    <input type="text" placeholder="Tìm kiếm" name="key" id="s" maxlength="40">
                                    <button type="button" class="btns" value="Tìm kiếm" >
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 96 96" focusable="false">
                                            <path d="M40.581 4.09c20.126 0 36.5 16.374 36.5 36.5a36.325 36.325 0 01-7.963 22.733l22.8 22.948-5.674 5.639-22.767-22.913a36.327 36.327 0 01-22.896 8.093c-20.126 0-36.5-16.374-36.5-36.5s16.374-36.5 36.5-36.5zm0 8c-15.715 0-28.5 12.785-28.5 28.5s12.785 28.5 28.5 28.5 28.5-12.785 28.5-28.5-12.785-28.5-28.5-28.5z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <a class="is-hidden-tablet navbar-item" style="margin-left: auto" href="/"><img style="height: 40px;" src="{{ asset('images/logo.jpg')}}">
                            </a>
                        </div>


                        <?php 

                            $group = App\Models\groupProduct::where('group_product_id', 5)->get()->take(10);

                            $cart = Gloudemans\Shoppingcart\Facades\Cart::content();

                            $number_cart = count($cart);


                        ?>
                        <div id="navbarBasicExample" class="navbar-menu">
                            <div class="navbar-start">
                                @foreach($group as $val)
                                <div class="div-menu">
                                    <a class="navbar-item item-menu" id="item-menu-{{ $val->id }}" href="{{ route('details', $val->link) }}" role="button"  aria-expanded="false">{{ $val->name }}</a>

                                    <?php 
                                        $child_menu =  App\Models\groupProduct::where('parent_id', $val->id)->OrderBy('id', 'desc')->get()->take(4);

                                    ?>
                                    @if($child_menu->count()>0)
                                   
                                    <div class="dropdown-menu item-menu-{{ $val->id }}" aria-labelledby="dropdownMenuLink_{{ $val->id }}">
                                        @foreach($child_menu as $value)
                                        <a class="dropdown-item" href="{{ route('category-product', $value->link) }}">{{ $value->name }}</a>
                                        @endforeach
                                        
                                    </div>
                                   
                                    @endif
                                </div>    

                                @endforeach
                                <a class="navbar-item" href="{{ route('tins') }}">tin tức</a>
                            </div>

                            <div class="fas-phones phones-hotline">          
                                <a href="tel: 0913011888" class="header__history tin-km">Hotline:0913.011.888</a>
                               
                            </div>

                            <div class="navbar-end is-hidden-mobile">
                                <div class="navbar-item">
                                    <form action="{{ route('search-product-frontend') }}" method="get">
                                        <input type="text" placeholder="Tìm kiếm" name="key" id="s" maxlength="40">
                                        <button type="submit" class="btns" value="Tìm kiếm" >
                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 96 96" focusable="false">
                                                <path d="M40.581 4.09c20.126 0 36.5 16.374 36.5 36.5a36.325 36.325 0 01-7.963 22.733l22.8 22.948-5.674 5.639-22.767-22.913a36.327 36.327 0 01-22.896 8.093c-20.126 0-36.5-16.374-36.5-36.5s16.374-36.5 36.5-36.5zm0 8c-15.715 0-28.5 12.785-28.5 28.5s12.785 28.5 28.5 28.5 28.5-12.785 28.5-28.5-12.785-28.5-28.5-28.5z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <!-- <a href="/"><img src="{{ asset('images/logo.jpg') }}"></a> -->
                                    <a class="position-relative" href="{{ route('cart-sttv') }}">
                                    <img src="{{ asset('images/cart-outline.png') }}">
                                    <span class="badge badge-danger badge-cart">{{ $number_cart }}</span>
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
                                         <?php 

                                            $groups = App\Models\groupProduct::where('parent_id', 17)->get()->take(10);
                                        ?>
                                        @foreach($groups as $key => $val)
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="{{ route('category-product', $val->link) }}" title="">{{ $val->name }}</a>
                                        </li>
                                        @endforeach
                                       
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
                                            <a class="footer-category__link" href="#" title="">
                                                Giới thiệu
                                            
                                            </a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" title="">
                                            Chính sách bảo hành
                                            </a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" title="">
                                            Chính sách vận chuyển & giao nhận
                                            </a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" title="">
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
                                            <a class="footer-category__link" href="#" aria-label="Liên Hệ" title="">Liên Hệ</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" title="">Hỗ Trợ Kỹ
                                            thuật</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column__item column is-one-quarter">
                            <div class="footer-category">
                                <h3 class="footer-category__title">Hotline</h3>
                                <p>091.301.1888 </p>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="footer-bottom container">
                    <div class="footer-copyright-wrap">
                        <div class="footer-copyright-align">
                            <p class="footer-copyright">©2024Siêu thị tivi </p>
                            <div class="footer-legal">
                            </div>
                        </div>
                      <!--   <div class="footer-local-logo">
                            <div class="footer-local-logo--wrap">
                                <div class="footer-local-logo__item">
                                    <a class="footer-mark__link" href="https://www.online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=14561" target="_blank">
                                        
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </footer>


        <style type="text/css">
            .fab__icon {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0px;
                margin: auto auto;
                width: 48px;
                height: 48px;
                fill: #fff;
            }
            .fab__icons{
                position: absolute;
/*                top: 0;*/
                left: 0;
                right: 0;
                bottom: 70px;
                margin: auto auto;
               /* width: 48px;
                height: 48px;*/
                fill: #fff;
            }

            .show-call{
                width: 200px;
            }
        </style>

        <a class="fab show show-call" href="tel:0913011888">
        <img class="fab__icons" alt="" src="{{ asset('images/template/888.png') }}">
        </a>


        <a class="fab show" title="Go to Top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
        <img class="fab__icon" alt="" src="{{ asset('images/arrow-up-circle-outline.svg') }}">
        </a>

        <a href="https://zalo.me/0913011888" target="_blank">
            <div style="position: fixed; bottom: 52px; left: 52px; transform: translate(0px, 0px) !important; z-index: 2147483644; border: none; visibility: visible; right: 0px; width: 60px; height: 60px;" class="zalo-chat-widget"data-welcome-message="Điện Máy Người Việt rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height="">
                <img src="https://page.widget.zalo.me/static/images/2.0/Logo.svg">
            </div>
        </a>

        @stack('js')

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63c0d9fac2f1ac1e202d2f3b/1gmkl6uta';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->

        <script type="text/javascript">
            
            // $('.item-menu').click(function() {
            //     const id = $(this).attr('id');

            //     if($('.'+id).is(':hidden')){
            //         $('.dropdown-menu').hide();

            //         $('.'+id).show();

            //     }
            //     else{
            //         $('.'+id).hide();
            //     }


            // })

            // hover show child menu

            $(".item-menu").mouseover(function(){

                const id = $(this).attr('id');
                 if($('.'+id).is(':hidden')){
                    $('.dropdown-menu').hide();

                    $('.'+id).show();

                }
                else{
                    $('.'+id).hide();
                }

            });

            $(".dropdown-menu").mouseleave(function(){

                $('.dropdown-menu').hide();

            });
        </script>

        <script type="text/javascript">
            
             function addCartFast(id) {
    
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            
                $.ajax({
                    type: 'POST',
                    url: "{{ route('addcartfast') }}",
                    data: {
                        product_id: id,
                           
                    },
                    success: function(result){
            
                        $('.badge-cart').text(result);
                        alert('Thêm sản phẩm vào giỏ hàng thành công !');

                    }
                });
                
            }
        </script>

        
    </body>
</html>