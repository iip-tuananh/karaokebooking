@extends('site.layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    {{ $short_des }}
@endsection
@section('css')
<link href="/site/css/breadcrumb_style.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
<link href="/site/css/blog_article_style.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
<link href="/site/css/sidebar_style.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
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
            <li><strong><span>{{ $title }}</span></strong></li>
        </ul>
    </div>
</section>
<section class="blogpage">
    <div class="container layout-article" itemscope itemtype="https://schema.org/Article">
        <div class="bg_blog">
            <article class="article-main">
                <div class="row">
                    <div class="blog_left_base col-lg-3 col-12">
                        <div class="side-right-stick">
                            <div class="blog_noibat">
                                <h2 class="h2_sidebar_blog">
                                    <a href="javascript:void(0)" class="text-uppercase">Bộ lọc</a>
                                </h2>
                                <div class="blog_content">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-content col-lg-9 col-12">
                        <div class="article-details bg-shadow clearfix">
                            <p class="text-white" style="margin-bottom: 30px;">Có {{ $products->count() }} địa điểm phù hợp</p>
                            @foreach ($products as $product)
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="{{ route('front.show-product-detail', $product->slug) }}">
                                        <img src="{{ $product->image ? $product->image->path : '' }}" alt="{{ $product->name }}">
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                    <h3 class="text-white"><a href="{{ route('front.show-product-detail', $product->slug) }}">{{ $product->name }}</a></h3>
                                    <p class="text-white">{{ $product->place }}</p>
                                </div>
                            </div>
                            @endforeach
                            <div class="pagi-div">
                                <nav class="clearfix relative nav_pagi w_100 ">
                                    {{ $products->links() }}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection

@push('script')
@endpush
