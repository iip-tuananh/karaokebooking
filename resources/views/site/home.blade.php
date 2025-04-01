@extends('site.layouts.master')
@section('title')
{{$config->web_title}}
@endsection
@section('description')
{{$config->web_des}}
@endsection
@section('image')
{{url(''.$banners[0]->image ? $banners[0]->image->path : '')}}
@endsection
@section('css')
<style>
    .section_search .select2-container .select2-selection--single {
        height: 40px;
    }
    .section_search .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 40px;
    }
    .section_search .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 40px;
    }
    .section_search form {
        margin-bottom: 0;
    }
</style>
@endsection
@section('content')
{{-- <div class="topbar"> --}}
    {{-- <div class="container header-promo">
        <ul class="ul-default promo-list js-promo">
            <li class="promo-item  see-block">
                <p>Nhận MIỄN PHÍ* <strong><a href="/chinh-sach-thanh-toan" title="Giao hàng">giao
                            hàng</a></strong> cho các đơn hàng trên 1 triệu</p>
            </li>
            <li class="promo-item  see-none">
                <p>Nhận ƯU ĐÃI* <strong><a href="/collections/all" title="đặc biệt">đặc biệt</a></strong> từ
                    các chương trình khuyến mãi mới nhất</p>
            </li>
        </ul>
    </div> --}}
{{-- </div> --}}
<div class="section_slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
            <div class="swiper-slide">
                <a href="{{$banner->link}}" class="clearfix" title="{{$banner->name}}">
                    <picture>
                        <source media="(min-width: 1200px)"
                            srcset="{{$banner->image ? $banner->image->path : ''}}">
                        <source media="(min-width: 992px)"
                            srcset="{{$banner->image ? $banner->image->path : ''}}">
                        <source media="(min-width: 767px)"
                            srcset="{{$banner->image ? $banner->image->path : ''}}">
                        <source media="(max-width: 767px)"
                            srcset="{{$banner->image ? $banner->image->path : ''}}">
                        <img width="1920" height="700"
                            src="{{$banner->image ? $banner->image->path : ''}}"
                            alt="{{$banner->name}}" class="img-responsive center-block duration-300" loading="lazy"/>
                    </picture>
                </a>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-prev">
            <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>
        <div class="swiper-button-next">
            <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<script>
    let swiperSlider = null;

    function initSwiperSlider() {
        swiperSlider = new Swiper('.section_slider .swiper-container', {
            speed: 1000,
            spaceBetween: 14,
            effect: 'fade',
            navigation: {
                nextEl: '.section_slider .swiper-button-next',
                prevEl: '.section_slider .swiper-button-prev',
            },
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.section_slider .swiper-pagination',
                clickable: true,
            },
        });
    }
    initSwiperSlider();
</script>
<section class="section_search" ng-controller="StorePageController">
    <div class="widget_search_box advance_option pc offFunction clearfix">
        <div class="container">
            <form action="{{route('front.search-product')}}" method="get">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                        <div class="option_ advance_1">
                            <select class="form-control " select2 ng-model="province_id" name="province_id" ng-change="changeProvince(province_id)">
                                <option value="">Tỉnh/Thành phố</option>
                                <option ng-repeat="t in provinces" ng-value="t.id"><% t.name_with_type %></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                        <div class="option_ advance_2">
                            <select class="form-control " select2 ng-model="district_id" name="district_id">
                                <option value="">Quận/Huyện</option>
                                <option ng-repeat="t in districts" ng-value="t.id"><% t.name_with_type %></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                        <div class="option_ advance_3">
                            <select class="form-control " select2 ng-model="cate_id" name="cate_id">
                                <option value="">Loại hình</option>
                                <option ng-repeat="t in categories" ng-value="t.id"><% t.name %></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                        <div class="option_ advance_4">
                            <select class="form-control " select2 ng-model="price" name="price">
                                <option value="">Khoảng giá</option>
                                <option value="(<300000)">Dưới 300.000đ</option>
                                <option value="(>=300000%20AND%20<=500000)">Từ 300.000đ - 500.000đ</option>
                                <option value="(>=500000%20AND%20<=1000000)">Từ 500.000đ - 1.000.000đ</option>
                                <option value="(>=1000000)">Trên 1.000.000đ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-12">
                        <button type="submit" class="widget_search_btn widget_search_box_item">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="section-index section_about">
    <div class="bg-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form id="booking-form">
                                <div class="form-group">
                                    <label for="name" class="text-white">Họ và tên</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="text-white">Số điện thoại</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="input-date">
                                    <div class="form-group w-70">
                                        <label for="date" class="text-white">Ngày</label>
                                        <input type="date" class="form-control" id="date" name="date">
                                    </div>
                                    <div class="form-group w-30">
                                        <label for="time" class="text-white">Giờ</label>
                                        <input type="time" class="form-control" id="time" name="time">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="text-white">Số người</label>
                                    <input type="number" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="message" class="text-white">Ghi chú</label>
                                    <textarea class="form-control" id="message" name="message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Đặt chỗ ngay</button>
                            </form>
                        </div>
                    </div>
                </div>
                <style>
                    .section_about .card {
                        padding: 40px;
                        border-radius: 10px;
                        /* border: 1px solid #ccc; */
                        background-color: #1F1F29;
                        width: 90%;
                        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
                    }
                    .section_about .card-body {
                        padding: 0;
                    }
                    .section_about .input-date {
                        display: flex;
                        gap: 10px;
                    }
                    .section_about .form-custom {
                        position: relative;
                    }
                    .section_about .form-custom label {
                        position: absolute;
                        top: 0;
                        left: 5px;
                        transform: translateY(-50%);
                        background-color: #fff;
                        padding: 0 10px;
                        font-size: 14px;
                        font-weight: 700;
                        color: #666;
                    }
                    .section_about .form-custom input {
                        padding: 10px 10px 10px 10px;
                    }
                </style>
                <div class="col-12 col-lg-6 col-md-6 col-left">
                    <div class="product-content">
                        <div class="section-title">
                            <span class="sub-title text-white">
                                Bạn cần tìm địa điểm lý tưởng?
                            </span>
                            <h2>Hãy để chúng tôi giúp bạn tìm địa điểm lý tưởng</h2>
                        </div>
                        <div class="desc text-white">
                            <p>Vui lòng điền đầy đủ thông tin đặt chỗ tại đây để được tư vấn và hỗ trợ tốt nhất</p>
                        </div>
                        <a href="javascript:;" title="Đặt chỗ ngay" class="show-more btn btn-primary frame">
                            <i class="fa-solid fa-hand-point-left"></i>  <span style="padding-left: 6px"> Đặt chỗ ngay</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-index section_category">
    <div class="container">
        <div class="section-title">
            <h2 class="text-uppercase">
                Bạn đang tìm gì?
            </h2>
            <span class="icon-title">
                <img width="196" height="10" loading="lazy" class="lazyload"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                    data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/title_icon_black.png?1742987288781"
                    alt="DANH MỤC RƯỢU ONLINE" />
            </span>
        </div>
        <div class="swiper_category swiper-container">
            <div class="swiper-wrapper load-after" data-section="section_category">
                @foreach ($productCategories as $category)
                    <div class="swiper-slide box-cate">
                        <a class="duration-300 cate-item" href="{{route('front.show-product-category', $category->slug)}}" title="{{$category->name}}">
                            <picture>
                                <source media="(max-width: 580px)" srcset="{{$category->image ? $category->image->path : ''}}"/>
                                <img width="580" src="{{$category->image ? $category->image->path : ''}}" alt="{{$category->name}}" loading="lazy" />
                        </picture>
                        <div class="name_cate_box">
                        <h3 class="cate-name line-clamp line-clamp-1 duration-300">{{$category->name}}</h3>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function($) {
        function runSwiperCate() {
            var swiper_cate = null;

            function initSwiperCate() {
                swiper_cate = new Swiper('.swiper_category', {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    watchOverflow: true,
                    slidesPerGroup: 1,
                    slidesPerColumn: 2,
                    slidesPerColumnFill: 'row',
                    pagination: {
                        el: '.swiper_category .swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 15
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 15
                        },
                        992: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiper() {
                if (swiper_cate) {
                    swiper_cate.destroy(true, true);
                    swiper_cate = null;
                }
            }

            function toggleSwiperCate() {
                if ($(window).width() <= 767 && swiper_cate) {
                    destroySwiper();
                } else if ($(window).width() > 767 && !swiper_cate) {
                    initSwiperCate();
                }
            }
            toggleSwiperCate();
            $(window).on('resize', function() {
                toggleSwiperCate();
            });
        }
        lazyBlockProduct('section_category', '0px 0px -210px 0px', runSwiperCate);
    });
</script>

@foreach ($categorySpecial as $category)
@if ($category->image)
    <section class="section-index section_banner">
        <div class="container">
            <div class="row load-after" data-section="section_banner">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="three_banner">
                        <a class="duration-300" href="javascript:void(0);" title="Banner">
                            <picture>
                                <source media="(max-width: 480px)" srcset="{{$category->image ? $category->image->path : ''}}"/>
                                <img width="1440" height="auto" loading="lazy" class="lazyload duration-300" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$category->image->path}}" alt="Banner"/>
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function($) {
            lazyBlockProduct('section_banner', '0px 0px -300px 0px');
        });
    </script>
@endif
<section class="section-index section_choose">
    <div class="container">
        <div class="box_choose">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box_title_choose">
                        <h2 class="title_module text-uppercase" style="margin-bottom: 20px;">{{$category->name}}</h2>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="swi_choose swiper-container">
                        <div class="swiper-wrapper load-after" data-section="section_choose">
                            @foreach ($category->products as $product)
                            <div class="swiper-slide">
                                <div class="item_choose">
                                    <a href="{{route('front.show-product-detail', $product->slug)}}" class="opaci-choose" title="{{$product->name}}"></a>
                                    <div class="img_choose">
                                        <img width="100%" height="100%" loading="lazy" class="lazyload duration-300"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="{{$product->image ? $product->image->path : ''}}" alt="{{$product->name}}"/>
                                    </div>
                                    <span class="name_choose">{{$product->name}} <br>
                                        {{-- <i class="fa-solid fa-location-dot"></i> {{$product->place}} --}}
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<script>
    $(document).ready(function($) {
        function runSwiperChoose() {
            var swiper_choose = null;

            function initSwiperChoose() {
                swiper_choose = new Swiper('.swi_choose', {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                    navigation: {
                        nextEl: '.swi_choose .swiper-button-next',
                        prevEl: '.swi_choose .swiper-button-prev',
                    },
                    breakpoints: {
                        280: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        640: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        },
                        992: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        },
                        1199: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperChoose() {
                if (swiper_choose) {
                    swiper_choose.destroy(true, true);
                    swiper_choose = null;
                }
            }

            function toggleSwiperChoose() {
                if ($(window).width() <= 767 && swiper_choose) {
                    destroySwiperChoose();
                } else if ($(window).width() > 767 && !swiper_choose) {
                    initSwiperChoose();
                }
            }
            toggleSwiperChoose();
            $(window).on('resize', function() {
                initSwiperChoose();
            });
        }
        lazyBlockProduct('section_choose', '0px 0px -210px 0px', runSwiperChoose);
    });
</script>

@foreach ($categorySpecialPost as $category)
@if ($category->image)
<section class="section-index section_4_banner">
    <div class="container">
        <div class="row load-after" data-section="section_4_banner">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="three_banner">
                    <a class="duration-300" href="javascript:void(0);" title="Banner">
                        <picture>
                            <source media="(max-width: 480px)" srcset="{{$category->image ? $category->image->path : ''}}"/>
                            <img width="1440" height="auto" loading="lazy" class="lazyload duration-300"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                            data-src="{{$category->image->path}}" alt="Banner"/>
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function($) {
        lazyBlockProduct('section_4_banner', '0px 0px -300px 0px');
    });
</script>
@endif
<section class="section-index section_blog">
    <div class="container">
        <div class="section-title">
            <h2 class="text-uppercase">
                <a href="{{route('front.list-blog', $category->slug)}}" title="{{$category->name}}">
                    {{$category->name}}
                </a>
            </h2>
            <span class="icon-title">
                <img width="196" height="10" loading="lazy" class="lazyload"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                    data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/title_icon_black.png?1742987288781"
                    alt="{{$category->name}}" />
            </span>
        </div>
        <div class="swiper_blogs swiper-container">
            <div class="swiper-wrapper load-after" data-section="section_blog">
                @foreach ($category->posts as $post)
                <div class="swiper-slide">
                    <div class="item_blog_index">
                        <a  class="image-blog" href="{{route('front.detail-blog', $post->slug)}}" title="{{$post->name}}">

                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$post->image ? $post->image->path : ''}}" alt="{{$post->name}}" class="lazyload duration-300" />

                        </a>
                        <div class="blog_content">
                            <h3><a href="{{route('front.detail-blog', $post->slug)}}" title="{{$post->name}}">{{$post->name}}</a></h3>
                            <p class="blog_description">{{$post->intro}}</p>
                            <p class="update_date">
                                <span class="user_name">Đăng bởi: <b>Admin</b></span>
                                <span class="user_date"> {{$post->created_at->format('d/m/Y')}}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-prev">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="view-more clearfix">
            <a href="{{ route('front.list-blog', $category->slug) }}" title="Xem tất cả" class="show-more btn btn-primary">
                Xem tất cả
            </a>
        </div>
    </div>
</section>
@endforeach
<script>
    $(document).ready(function($) {
        function runSwiperBlogs() {
            var blogs_pro = null;

            function initSwiperBlogs() {
                blogs_pro = new Swiper('.swiper_blogs', {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                    grabCursor: true,
                    navigation: {
                        nextEl: '.swiper_blogs .swiper-button-next',
                        prevEl: '.swiper_blogs .swiper-button-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 15
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        992: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        },
                        1500: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperBlogs() {
                if (blogs_pro) {
                    blogs_pro.destroy(true, true);
                    blogs_pro = null;
                }
            }

            function toggleSwiperBlogs() {
                if ($(window).width() <= 767 && blogs_pro) {
                    destroySwiperBlogs();
                } else if ($(window).width() > 767 && !blogs_pro) {
                    initSwiperBlogs();
                }
            }
            toggleSwiperBlogs();
            $(window).resize(toggleSwiperBlogs);
        }
        lazyBlockProduct('section_blog', '0px 0px -250px 0px', runSwiperBlogs);
    });
</script>

<section class="section-index section_brands">
    <div class="container">
        <div class="section-title">
            <h2>
                THƯƠNG HIỆU NỔI TIẾNG
            </h2>
            <span class="icon-title">
                <img width="196" height="10" loading="lazy" class="lazyload"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                    data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/title_icon_black.png?1742987288781"
                    alt="DANH MỤC RƯỢU ONLINE" />
            </span>
        </div>
        <div class="swiper_brands swiper-container control-top">
            <div class="swiper-wrapper  load-after" data-section="section_brands">
                @foreach ($partners as $partner)
                <div class="swiper-slide">
                    <a href="{{$partner->link}}" title="{{$partner->name}}" class="brand-item">
                        <img data-src="{{$partner->image ? $partner->image->path : ''}}" alt="{{$partner->name}}" width="161" height="119" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function($) {
        function runSwiperBrand() {
            var swiper_brand = null;

            function initSwiperBrand() {
                swiper_brand = new Swiper('.swiper_brands', {
                    slidesPerView: 8,
                    spaceBetween: 20,
                    watchOverflow: true,
                    slidesPerGroup: 1,
                    breakpoints: {
                        640: {
                            slidesPerView: 5,
                            spaceBetween: 14
                        },
                        768: {
                            slidesPerView: 5,
                            spaceBetween: 14
                        },
                        992: {
                            slidesPerView: 5,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 6,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 8,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperBrand() {
                if (swiper_brand) {
                    swiper_brand.destroy(true, true);
                    swiper_brand = null;
                }
            }

            function toggleSwiperBrand() {
                if ($(window).width() <= 767 && swiper_brand) {
                    destroySwiperBrand();
                } else if ($(window).width() > 767 && !swiper_brand) {
                    initSwiperBrand();
                }
            }
            toggleSwiperBrand();
            $(window).on('resize', function() {
                toggleSwiperBrand();
            });
        }
        lazyBlockProduct('section_brands', '0px 0px -210px 0px', runSwiperBrand);
    });
</script>

@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script>
        app.controller('StorePageController', function($scope, $http) {
            $scope.provinces = @json(\App\Model\Common\Province::getForSelect());
            $scope.categories = @json(\App\Model\Admin\Category::getAllCategory());

            $scope.changeProvince = function(province) {
                $scope.districts = @json(\App\Model\Common\District::getForSelect()).filter(item => item.parent_code == province).map(item => ({
                    id: item.id,
                    name_with_type: item.name_with_type
                }));
                $scope.district_id = '';
                $scope.getLocation('search');
            }
        });
    </script>
@endpush
