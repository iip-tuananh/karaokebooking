@extends('site.layouts.master')
@section('title')
    Về chúng tôi
@endsection

@section('css')
<link href="/site/css/breadcrumb_style.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
<link href="/site/css/style_page.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('front.home-page') }}" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>
                        &nbsp;
                    </span>
                </li>
                <li><strong><span>Về chúng tôi</span></strong></li>
            </ul>
        </div>
    </section>
    <section class="page page_about">
        <div class="container">
            <div class="pg_page bg-shadow margin-bottom-20">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title category-title d-none">
                            <h1 class="title-head"><a href="{{ route('front.about-us') }}" title="Về chúng tôi">Về chúng tôi</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_about_2">
            <div class="container">
                <div class="row">
                    <div class="content_col_1 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <div class="box_about_2">
                            <h2 class="title_about">Về chúng tôi!</h2>
                            {!! $config->introduction !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

@push('script')
@endpush
