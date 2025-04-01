@extends('site.layouts.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ strip_tags($product->intro) }}
@endsection

@section('css')
    <link href="/site/css/breadcrumb_style.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/css/product_style.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
    <style>
        .box-product-images {
            padding: 20px;
            background-color: #1F1F29;
            margin-bottom: 20px;
        }
        .product-review-details {
            background-color: #1F1F29;
            padding: 20px;
        }
    </style>
@endsection

@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('front.home-page') }}" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>
                        &nbsp;
                    </span>
                </li>
                <li>
                    <a class="changeurl" href="{{ route('front.show-product-category', $product->category->slug) }}" title="{{ $product->category->name }}"><span>{{ $product->category->name }}</span></a>
                    <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>
                        &nbsp;
                    </span>
                </li>
                <li><strong><span>{{ $product->name }}</span></strong></li>
            </ul>
        </div>
    </section>
    <section class="product layout-product" itemscope itemtype="https://schema.org/Product">
        <div class="container">
            <div class="details-product">
                <div class="margin-bottom-20">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-12 product-detail-left product-images">
                            <div class="box-product-images">
                                <div class="product-image-block relative">
                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                            <a class="swiper-slide" data-hash="0"
                                                href="{{ $product->image->path }}"
                                                title="Click để xem">
                                                <img height="480" width="480"
                                                    src="{{ $product->image->path }}"
                                                    alt="{{ $product->name }}"
                                                    data-image="{{ $product->image->path }}"
                                                    class="img-responsive mx-auto d-block swiper-lazy" />
                                            </a>
                                            @foreach ($product->galleries as $key => $gallery)
                                            <a class="swiper-slide" data-hash="{{ $key + 1 }}"
                                                href="{{ $gallery->image->path }}"
                                                title="Click để xem">
                                                <img height="480" width="480"
                                                    src="{{ $gallery->image->path }}"
                                                    alt="{{ $product->name }}"
                                                    data-image="{{ $gallery->image->path }}"
                                                    class="img-responsive mx-auto d-block swiper-lazy" />
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="swiper-container gallery-thumbs">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" data-hash="0">
                                                <div class="p-100">
                                                    <img height="100" width="100"
                                                        src="{{ $product->image->path }}"
                                                        alt="{{ $product->name }}"
                                                        data-image="{{ $product->image->path }}"
                                                        class="swiper-lazy" />
                                                </div>
                                            </div>
                                            @foreach ($product->galleries as $key => $gallery)
                                            <div class="swiper-slide" data-hash="{{ $key + 1 }}">
                                                <div class="p-100">
                                                    <img height="100" width="100"
                                                        src="{{ $gallery->image->path }}"
                                                        alt="{{ $product->name }}"
                                                        data-image="{{ $gallery->image->path }}"
                                                        class="swiper-lazy" />
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-button-next">
                                        </div>
                                        <div class="swiper-button-prev">
                                        </div>
                                    </div>
                                </div>
                                <h2 class="text-white" style="margin-top: 20px;">{{ $product->name }}</h2>
                                <div class="text-white">
                                    <svg class="svg-inline--fa fa-map-marker-alt fa-w-12" width="11px" aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                                    <span style="margin-left: 5px;">{{ $product->place }}</span>
                                </div>
                            </div>
                            <div class="product-review-details">
                                <div class="product-tab e-tabs not-dqtab">
                                    <ul class="tabs tabs-title clearfix">
                                        <li class="tab-link active" data-tab="#tab-1">
                                            <h3>Thông tin chi tiết</h3>
                                        </li>
                                        <li class="tab-link" data-tab="#tab-video">
                                            <h3>Google Map</h3>
                                        </li>
                                    </ul>
                                    <div class="tab-float">
                                        <div id="tab-1" class="tab-content active content_extab">
                                            <div class="rte product_getcontent product-review-content">
                                                <div class="ba-text-fpt has-height">
                                                    {!! $product->body !!}
                                                </div>
                                                <div class="show-more hidden-lg hidden-md hidden-sm">
                                                    <div class="btn btn-primary btn-default btn--view-more duration-300">
                                                        <span class="more-text">
                                                            Xem thêm
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                            </svg>
                                                        </span>
                                                        <span class="less-text">
                                                            Thu gọn
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-video" class="tab-content content_extab">
                                            <div class="rte">
                                                <div class="pro_video">
                                                    <div class="iframe_video">
                                                        {!! $product->google_map !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-favi">
                                    <a href="san-pham-noi-bat" title="CÓ THỂ BẠN THÍCH">
                                        <div class="title-head">
                                            CÓ THỂ BẠN THÍCH
                                        </div>
                                    </a>
                                    <div class="product-favi-content">
                                        <div class="product-view">
                                            <a class="image_thumb" href="/ruou-champagne-louis-roederer-vintage"
                                                title="Rượu Champagne Louis Roederer Vintage">
                                                <img width="480" height="480" class="lazyload"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/539/564/products/ruou-champagne-louis-roederer-vintage.jpg?v=1733903941223"
                                                    alt="Rượu Champagne Louis Roederer Vintage">
                                            </a>
                                            <div class="product-info">
                                                <h3 class="product-name"><a href="/ruou-champagne-louis-roederer-vintage"
                                                        title="Rượu Champagne Louis Roederer Vintage">Rượu Champagne Louis
                                                        Roederer Vintage</a></h3>
                                                <div class="price-box">
                                                    <span class="price">2.950.000₫</span>
                                                    <span class="compare-price">3.510.000₫</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-view">
                                            <a class="image_thumb"
                                                href="/ly-ruou-manh-riedel-bar-cognac-riedel-restaurant"
                                                title="Ly Rượu Mạnh RIEDEL Bar Cognac Riedel Restaurant">
                                                <img width="480" height="480" class="lazyload"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/539/564/products/riedel-bar-cognac-riedel-restaurant.jpg?v=1733900836017"
                                                    alt="Ly Rượu Mạnh RIEDEL Bar Cognac Riedel Restaurant">
                                            </a>
                                            <div class="product-info">
                                                <h3 class="product-name"><a
                                                        href="/ly-ruou-manh-riedel-bar-cognac-riedel-restaurant"
                                                        title="Ly Rượu Mạnh RIEDEL Bar Cognac Riedel Restaurant">Ly Rượu
                                                        Mạnh RIEDEL Bar Cognac Riedel Restaurant</a></h3>
                                                <div class="price-box">
                                                    <span class="price">365.000₫</span>
                                                    <span class="compare-price">385.000₫</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-view">
                                            <a class="image_thumb" href="/ruou-vodka-grey-goose-l-orange"
                                                title="Rượu Vodka Grey Goose L Orange">
                                                <img width="480" height="480" class="lazyload"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/539/564/products/ruou-vodka-grey-goose-lorange.jpg?v=1733893153790"
                                                    alt="Rượu Vodka Grey Goose L Orange">
                                            </a>
                                            <div class="product-info">
                                                <h3 class="product-name"><a href="/ruou-vodka-grey-goose-l-orange"
                                                        title="Rượu Vodka Grey Goose L Orange">Rượu Vodka Grey Goose L
                                                        Orange</a></h3>
                                                <div class="price-box">
                                                    <span class="price">1.320.000₫</span>
                                                    <span class="compare-price">1.400.000₫</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-view">
                                            <a class="image_thumb" href="/ruou-grey-goose-vodka"
                                                title="Rượu Grey Goose Vodka">
                                                <img width="480" height="480" class="lazyload"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/539/564/products/ruou-grey-goose-vodka.jpg?v=1733891065977"
                                                    alt="Rượu Grey Goose Vodka">
                                            </a>
                                            <div class="product-info">
                                                <h3 class="product-name"><a href="/ruou-grey-goose-vodka"
                                                        title="Rượu Grey Goose Vodka">Rượu Grey Goose Vodka</a></h3>
                                                <div class="price-box">
                                                    <span class="price">750.000₫</span>
                                                    <span class="compare-price">785.000₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 order-xl-1 order-lg-1 col-md-12 col-12">
                            <div class="sticky_left">
                                <div class="store-folow">
                                    <div class="item_store">
                                        <div class="info_store">
                                            <p class="name_title text-center text-white">{{$product->name}}</p>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <div class="button-group">
                                            {{-- <a class="style-button"
                                                href="https://seller-vn.tiktok.com/account/register?channel=sapo_TSP"
                                                title="Liên kết Tiktok Shop" target="_blank">
                                                Liên kết Tiktok Shop
                                            </a> --}}
                                            <a class="style-button" href="tel:{{str_replace(' ', '', $config->hotline)}}" title="Gọi ngay">
                                                Đặt ngay
                                            </a>
                                            <div class="text-center text-white" style="font-size: 14px; margin-top: 10px;">Để đặt chỗ và được tư vấn</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-favi">
                                    <a href="{{route('front.show-product-category', $category->slug)}}" title="CÓ THỂ BẠN THÍCH">
                                        <div class="title-head">
                                            CÓ THỂ BẠN THÍCH
                                        </div>
                                    </a>
                                    <div class="product-favi-content">
                                        @foreach ($productsRelated as $product)
                                        <div class="product-view">
                                            <a class="image_thumb" href="{{route('front.show-product-detail', $product->slug)}}"
                                                title="{{$product->name}}">
                                                <img width="480" height="480" class="lazyload"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="{{$product->image ? $product->image->path : ''}}"
                                                    alt="{{$product->name}}">
                                            </a>
                                            <div class="product-info">
                                                <h3 class="product-name"><a href="{{route('front.show-product-detail', $product->slug)}}"
                                                        title="{{$product->name}}" style="color: #000">{{$product->name}}</a></h3>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="specificationsModal" class="modal-specifications" style="display:none;">
        <div class="modalsize-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="modal-specificationsModal-product">
            <div class="chosee_size">
                <p class="title-popup">
                    THÔNG TIN CHI TIẾT
                </p>
                <a title="Close" class="specifications-close close-window" href="javascript:;">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                        class="svg-inline--fa fa-times fa-w-10">
                        <path fill="currentColor"
                            d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                            class=""></path>
                    </svg>
                </a>
            </div>
            <div class="modal-body">
                <table>
                    <tbody>
                        <tr>
                            <td>Loại vang</td>
                            <td>Rượu Champagne&nbsp;–&nbsp;Rượu Vang Trắng</td>
                        </tr>
                        <tr>
                            <td>Nồng độ</td>
                            <td>12.5 %</td>
                        </tr>
                        <tr>
                            <td>Dung tích</td>
                            <td>750 ML</td>
                        </tr>
                        <tr>
                            <td>Giống nho</td>
                            <td>Rượu vang nho Chardonnay&nbsp;–&nbsp;Pinot Noir</td>
                        </tr>
                        <tr>
                            <td>Xuất xứ</td>
                            <td>Rượu vang Pháp</td>
                        </tr>
                        <tr>
                            <td>Thương hiệu</td>
                            <td>Louis Roederer</td>
                        </tr>
                        <tr>
                            <td>Vùng làm vang</td>
                            <td>Champagne</td>
                        </tr>
                        <tr>
                            <td>Màu sắc</td>
                            <td>Vàng rơm</td>
                        </tr>
                        <tr>
                            <td>Nhiệt độ phục vụ</td>
                            <td>10-12 độ C</td>
                        </tr>
                        <tr>
                            <td>Quy cách</td>
                            <td>6 Chai / Thùng</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.box_com_bo_buy').click(function() {
                $('.combo_pro').addClass('active');
                $('.backdrop__body-backdrop___1rvky').addClass('active');
            });

            $('.til_h3 img').click(function() {
                $('.combo_pro').removeClass('active');
                $('.backdrop__body-backdrop___1rvky').removeClass('active');
            });
        });
    </script>
    <script>
        var variantsize = false;
        var ww = $(window).width();

        function validate(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
        jQuery(function($) {

            // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

            // Hide selectors if we only have 1 variant and its title contains 'Default'.

            $('.selector-wrapper').hide();

            $('.selector-wrapper').css({
                'text-align': 'left',
                'margin-bottom': '15px'
            });
        });

        jQuery('.swatch :radio').change(function() {
            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
            var optionValue = jQuery(this).val();
            jQuery(this)
                .closest('form')
                .find('.single-option-selector')
                .eq(optionIndex)
                .val(optionValue)
                .trigger('change');
            $(this).closest('.swatch').find('.header .value-roperties').html(optionValue);
        });
        setTimeout(function() {
            $('.swatch .swatch-element').each(function() {
                $(this).closest('.swatch').find('.header .value-roperties').html($(this).closest('.swatch')
                    .find('input:checked').val());
            });
        }, 500);

        $('.slider-big-video .slider-for a').each(function() {
            $(this).attr('rel', 'lightbox-demo');
        });
    </script>
    <script>
        function activeTab(obj) {
            $('.product-tab ul li').removeClass('active');
            $(obj).addClass('active');
            var id = $(obj).attr('data-tab');
            $('.tab-content').removeClass('active');
            $(id).addClass('active');
        }


        $('.product-tab ul li').click(function() {
            activeTab(this);
            return false;
        });

        // $(document).ready(function() {
        //     $("#lightgallery").lightGallery({
        //         thumbnail: false
        //     });
        // });
        $('.btn--view-more').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            if ($('.product-review-details .product-review-content').hasClass('expanded')) {
                $('html, body').animate({
                    scrollTop: $('.product-review-details').offset().top - 110
                }, 'slow');
            }
            $this.parents('.product-review-details').find('.product-review-content').toggleClass('expanded');
            $(this).toggleClass('active');
            return false;
        });
    </script>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 5,
            slidesPerView: 10,
            freeMode: true,
            lazy: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            hashNavigation: true,
            slideToClickedSlide: true,
            breakpoints: {
                260: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                300: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                500: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                    direction: 'vertical'
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    direction: 'vertical'
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    direction: 'vertical'
                },
                1199: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    direction: 'vertical'
                },
                1400: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                    direction: 'vertical'
                }
            },
            navigation: {
                nextEl: '.gallery-thumbs .swiper-button-next',
                prevEl: '.gallery-thumbs .swiper-button-prev',
            },
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 0,
            lazy: true,
            hashNavigation: true,
            thumbs: {
                swiper: galleryThumbs
            }
        });
    });
</script>
@endpush
