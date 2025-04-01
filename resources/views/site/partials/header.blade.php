<header class="header">
    <div class="main-header">
        <div class="container">
            <div class="box-hearder">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-3 col-md-4 header-logo">
                        <a href="{{route('front.home-page')}}" class="logo-wrapper" title="{{$config->web_title}}">
                            <img width="80"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="{{ $config->image->path }}"
                                alt="{{$config->web_title}}" class="lazyload">
                        </a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 header-mid">
                        <div class="list-top-item header_tim_kiem">
                            <form action="{{route('front.search-product')}}" method="get" class="header-search-form input-group search-bar"
                                role="search">
                                <input name="keyword" required
                                    class="input-group-field auto-search search-auto form-control"
                                    placeholder="Tìm kiếm địa điểm phù hợp" autocomplete="off" type="text">
                                <button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm"
                                    title="Tìm kiếm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                                <div class="search-suggest">
                                    <div class="search-recent d-none">
                                        <div class="search-title">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                            </svg>
                                            Tìm kiếm gần đây
                                        </div>
                                        <div class="search-list">
                                        </div>
                                    </div>
                                    <div class="item-suggest">
                                        <div class="search-title">
                                            <svg height="20" viewBox="0 0 512 512" width="20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g data-name="Layer 2">
                                                    <g id="trend_up">
                                                        <path id="background"
                                                            d="m256 31a225.07 225.07 0 0 1 87.57 432.33 225.07 225.07 0 0 1 -175.14-414.66 223.45 223.45 0 0 1 87.57-17.67m0-31c-141.38 0-256 114.62-256 256s114.62 256 256 256 256-114.62 256-256-114.62-256-256-256z" />
                                                        <path
                                                            d="m133.35 334.73a18.11 18.11 0 0 1 -8-1.9c-6.59-3.23-10.36-10.21-9.17-17a22.45 22.45 0 0 1 5.4-11.46c27.31-27.74 54.67-55 75.46-75.63a18 18 0 0 1 12.75-5.63c4.83 0 9.49 2.1 13.47 6.08l47 47 64-64h-6.46c-8.21 0-19.46-.1-25.91-.16-10.16-.08-17.28-7.16-17.33-17.22a17.52 17.52 0 0 1 4.84-12.53 17.19 17.19 0 0 1 12.31-4.88c13-.05 26-.07 38.52-.07 13.05 0 26.06 0 38.67.07 9.73 0 16.84 7 16.9 16.56.18 26.67.17 53 0 78.22-.06 9.58-7.33 16.54-17.28 16.54h-.2c-9.88-.09-16.89-7.06-17.05-16.94-.12-7.75-.1-15.63-.07-23.24q0-5 0-10v-2c-.25.22-.48.44-.7.66q-32.46 32.6-64.89 65.22l-9 9c-5.4 5.43-10.45 8.07-15.44 8.07s-9.9-2.58-15.16-7.88l-46.26-46.25-3.75 3.81c-4 4-7.82 7.76-11.52 11.48l-17.38 17.49c-10 10.08-20.34 20.51-30.55 30.73a18.58 18.58 0 0 1 -13.2 5.86z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Đề xuất phổ biến
                                        </div>
                                        <div class="search-list">
                                            @foreach ($productCategories as $category)
                                                <a href="{{route('front.show-product-category', $category->slug)}}" class="search-item"
                                                    title="Tìm kiếm {{ $category->name }}">
                                                    {{ $category->name }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="list-search">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-8 header-right">
                        <div class="sudes-header-stores sm-hidden">
                            <a href="{{route('front.store-page')}}" title="Hệ thống">
                                <span class="box-icon">
                                    <svg width="24" height="24" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 0C6.12297 0 2.96875 3.15422 2.96875 7.03125C2.96875 8.34117 3.3316 9.61953 4.01832 10.7286L9.59977 19.723C9.70668 19.8953 9.89504 20 10.0976 20C10.0992 20 10.1007 20 10.1023 20C10.3066 19.9984 10.4954 19.8905 10.6003 19.7152L16.0395 10.6336C16.6883 9.54797 17.0312 8.3023 17.0312 7.03125C17.0312 3.15422 13.877 0 10 0ZM15.0338 10.032L10.0888 18.2885L5.01434 10.1112C4.44273 9.18805 4.13281 8.12305 4.13281 7.03125C4.13281 3.80039 6.76914 1.16406 10 1.16406C13.2309 1.16406 15.8633 3.80039 15.8633 7.03125C15.8633 8.09066 15.5738 9.12844 15.0338 10.032Z"
                                            fill="white" />
                                        <path
                                            d="M10 3.51562C8.06148 3.51562 6.48438 5.09273 6.48438 7.03125C6.48438 8.95738 8.03582 10.5469 10 10.5469C11.9884 10.5469 13.5156 8.93621 13.5156 7.03125C13.5156 5.09273 11.9385 3.51562 10 3.51562ZM10 9.38281C8.7009 9.38281 7.64844 8.32684 7.64844 7.03125C7.64844 5.73891 8.70766 4.67969 10 4.67969C11.2923 4.67969 12.3477 5.73891 12.3477 7.03125C12.3477 8.30793 11.3197 9.38281 10 9.38281Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span class="item-title sm-hidden">Hệ thống</span>
                            </a>
                        </div>
                        <div class="sudes-header-cart header-action_cart ">
                            <a class="a-header-cart" href="tel:{{str_replace(' ', '', $config->hotline)}}" aria-label="Hỗ trợ 24/7" title="Hỗ trợ 24/7">
                                <span class="box-icon">
                                    <svg width="26" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-140.609375 0-256 115.390625-256 256 0 46.40625 12.511719 91.582031 36.238281 131.105469l-36.238281 124.894531 124.894531-36.238281c39.523438 23.726562 84.699219 36.238281 131.105469 36.238281 140.609375 0 256-115.390625 256-256s-115.390625-256-256-256zm160.054688 364.167969-11.910157 11.910156c-16.851562 16.851563-55.605469 15.515625-80.507812 10.707031-82.800781-15.992187-179.335938-109.5625-197.953125-190.59375-9.21875-40.140625-4.128906-75.039062 9.183594-88.355468l11.910156-11.910157c6.574218-6.570312 17.253906-6.5625 23.820312 0l47.648438 47.652344c3.179687 3.179687 4.921875 7.394531 4.921875 11.90625s-1.742188 8.730469-4.921875 11.898437l-11.90625 11.921876c-13.125 13.15625-13.125 34.527343 0 47.652343l78.683594 77.648438c13.164062 13.164062 34.46875 13.179687 47.652343 0l11.910157-11.90625c6.148437-6.183594 17.632812-6.203125 23.832031 0l47.636719 47.636719c6.46875 6.441406 6.714843 17.113281 0 23.832031zm0 0"></path></svg>

                                </span>
                                <span class="item-title sm-hidden">Hotline : {{$config->hotline}}</span>
                            </a>
                        </div>
                        <button class="menu-icon md-hidden" aria-label="Menu" id="btn-menu-mobile"
                            title="Menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container">
            <div class="navigation-horizontal">
                <div class="title_menu md-hidden">
                    <ul id="tabs-menu-mb">
                        <li class="tab-link" data-tab="tab-menu-1">Menu</li>
                    </ul>
                    <div class="close-mb-menu"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 col-12 sudes-main-header tab-content-mb"
                        id="tab-menu-1">
                        <div class="col-menu">
                            <ul id="nav" class="nav">
                                <li class="nav-item {{Route::is('front.home-page') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{route('front.home-page')}}" title="Trang chủ">Trang chủ</a>
                                </li>
                                <li class="nav-item {{Route::is('front.about-us') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{route('front.about-us')}}" title="Về chúng tôi">Về chúng
                                        tôi</a>
                                </li>
                                @foreach ($productCategories as $category)
                                    @php
                                        $isActive = Route::is('front.show-product-category', $category->slug) && request()->route('slug') == $category->slug;
                                    @endphp
                                    <li class="nav-item {{ $isActive ? 'active' : '' }} has-childs   has-mega has-mega-1" data-section="header_nav">
                                        <a href="{{route('front.show-product-category', $category->slug)}}" class="nav-link" title="{{$category->name}}">
                                            {{$category->name}}
                                            @if ($category->childs->count() > 0)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            @endif
                                        </a>
                                        @if ($category->childs->count() > 0)
                                            <i class="open_mnu down_icon"></i>
                                            <div class="mega-content dropdown-menu ">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="mega-menu-list col-lg-12 ">
                                                        <ul class="level0">
                                                            @foreach ($category->childs as $child)
                                                                <li class="level1 item nav-item-lv2">
                                                                    <a class="hmega nav-link" href="{{route('front.show-product-category', $child->slug)}}" title="{{$child->name}}">{{$child->name}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                                @foreach ($postCategories as $category)
                                    @php
                                        $isActive = Route::is('front.list-blog', $category->slug) && request()->route('slug') == $category->slug;
                                    @endphp
                                    <li class="nav-item {{ $isActive ? 'active' : '' }} has-childs   has-mega has-mega-1" data-section="header_nav">
                                        <a href="{{route('front.list-blog', $category->slug)}}" class="nav-link" title="{{$category->name}}">
                                            {{$category->name}}
                                            @if ($category->getChilds()->count() > 0)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            @endif
                                        </a>
                                        @if ($category->getChilds()->count() > 0)
                                            <i class="open_mnu down_icon"></i>
                                            <div class="mega-content dropdown-menu ">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="mega-menu-list col-lg-12 ">
                                                        <ul class="level0">
                                                            @foreach ($category->getChilds() as $child)
                                                                <li class="level1 item nav-item-lv2">
                                                                    <a class="hmega nav-link" href="{{route('front.list-blog', $child->slug)}}" title="{{$child->name}}">{{$child->name}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                                <li class="nav-item {{Route::is('front.contact-us') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{route('front.contact-us')}}" title="Liên hệ">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="control-menu">
                            <a href="#" id="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="#fff"
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                                </svg>
                            </a>
                            <a href="#" id="next">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="#fff"
                                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav-overflow"></div>
</header>
<script>
    const header = document.querySelector('header.header');
    let headerHeight = header.offsetHeight;
    let resizeWindow = window.innerWidth;
    let offsetStickyHeader = header.offsetHeight;
    let offsetStickyDown = 0;
    let resizeTimer;

    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content-mb');

    const handleResize = () => {
        if (resizeTimer) clearTimeout(resizeTimer);

        resizeTimer = setTimeout(() => {
            const newWidth = window.innerWidth;

            if (resizeWindow !== newWidth) {
                header.classList.remove('hSticky');
                header.style.minHeight = '';

                headerHeight = header.offsetHeight;
                header.style.minHeight = `${headerHeight}px`;

                resizeWindow = newWidth;
            }
        }, 200);
    };

    const handleScroll = () => {
        const scrollTop = window.scrollY;

        if (scrollTop > offsetStickyHeader && scrollTop > offsetStickyDown) {
            header.classList.add('hSticky');
        }

        if (scrollTop <= offsetStickyDown && scrollTop <= offsetStickyHeader) {
            header.classList.remove('hSticky');
        }

        offsetStickyDown = scrollTop;
    };

    const handleTabClick = (tabLink) => {
        const tabId = tabLink.dataset.tab;

        tabLinks.forEach((link) => link.classList.remove('active'));
        tabLink.classList.add('active');

        tabContents.forEach((tabContent) => tabContent.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');
    };

    const initializeTabs = () => {
        if (window.innerWidth <= 991) {
            const tabMenu1 = document.getElementById('tab-menu-1');
            const tabLinkMenu1 = document.querySelector('.tab-link[data-tab="tab-menu-1"]');

            tabMenu1.classList.add('active');
            tabLinkMenu1.classList.add('active');

            tabLinks.forEach((tabLink) => {
                tabLink.addEventListener('click', () => handleTabClick(tabLink));
            });
        }
    };

    window.addEventListener('resize', handleResize);
    window.addEventListener('scroll', handleScroll);

    tabLinks.forEach((tabLink) => {
        tabLink.addEventListener('click', () => handleTabClick(tabLink));
    });

    document.addEventListener('DOMContentLoaded', initializeTabs);
</script>