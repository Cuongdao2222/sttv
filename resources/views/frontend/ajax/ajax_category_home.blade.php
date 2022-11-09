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