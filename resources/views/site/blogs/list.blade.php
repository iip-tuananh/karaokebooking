@extends('site.layouts.master')
@section('title')
    {{ $cate_title }}
@endsection
@section('description')
    {{ $cate_des ?? '' }}
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
                <li><strong><span>{{ $cate_title }}</span></strong></li>
            </ul>
        </div>
    </section>
    <div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
        <meta itemprop="name" content="Tin tức">
        <meta itemprop="description" content="">
        <div class="container">
            <div class="row">
                <div class="right-content col-lg-9 col-12">
                    <div class="box_blog_list">
                        <div class="title-page">
                            <h1 class="btxt_blog">{{ $cate_title }}</h1>
                        </div>
                        <div class="row list-news">
                            @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="item_blog">
                                    <a class="image-blog"
                                        href="{{ route('front.detail-blog', $blog->slug) }}"
                                        title="{{ $blog->name }}">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="{{ $blog->image ? $blog->image->path : '' }}"
                                            alt="{{ $blog->name }}"
                                            class="lazyload duration-300" />
                                    </a>
                                    <div class="blog_content">
                                        <h3><a href="{{ route('front.detail-blog', $blog->slug) }}"
                                                title="{{ $blog->name }}">{{ $blog->name }}</a></h3>
                                        <p class="blog_description">{{ $blog->intro }}</p>
                                        <p class="update_date">
                                            <span class="user_name">Đăng bởi: <b>Admin</b></span>
                                            <span class="user_date"> {{ $blog->created_at->format('d/m/Y') }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="pagi-div">
                                <nav class="clearfix relative nav_pagi w_100 ">
                                    {{ $blogs->links() }}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
