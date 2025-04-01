<div class="section-index section_services" id="home-step">
    <div class="container">
        <h2 class="text-uppercase text-white">
            Hướng dẫn đặt chỗ
        </h2>
        <div class="grid">
            <div class="grid__item large--one-fifth text-center small--two-sixths relative">
                <img src="//theme.hstatic.net/1000268128/1001303877/14/step_img1.png?v=52" alt="CHỌN ĐỊA ĐIỂM">
                <p class="text-step">
                    CHỌN ĐỊA ĐIỂM
                </p>
                <p class="small--hide sub-step text-white">
                    Hàng ngàn địa điểm ưu đãi
                </p>
                <img src="//theme.hstatic.net/1000268128/1001303877/14/left-black-arrow.png?v=52" class="step_number_abs">
                <div class="step_number step_number-1">
                    1
                </div>
            </div>
            <div class="grid__item large--one-fifth text-center small--two-sixths relative">
                <img src="//theme.hstatic.net/1000268128/1001303877/14/step_img2.png?v=52" alt="GỌI ĐẶT CHỖ <br> {{ $config->hotline }}">
                <p class="text-step">
                    GỌI ĐẶT CHỖ <br> {{ $config->hotline }}
                </p>
                <p class="small--hide sub-step text-white">
                </p>
                <img src="//theme.hstatic.net/1000268128/1001303877/14/left-black-arrow.png?v=52" class="step_number_abs">
                <div class="step_number step_number-2">
                    2
                </div>
            </div>
            <div class="grid__item large--one-fifth text-center small--two-sixths relative">
                <img src="//theme.hstatic.net/1000268128/1001303877/14/step_img3.png?v=52" alt="ĐẶT CHỖ ONLINE">
                <p class="text-step">
                    ĐẶT CHỖ ONLINE
                </p>
                <p class="small--hide sub-step text-white">
                    Truy cập Website
                </p>
                <span class="step_number_abs text-white">Hoặc</span>
            </div>
            <div class="grid__item large--one-fifth text-center small--two-sixths relative">
                <img src="//theme.hstatic.net/1000268128/1001303877/14/step_img4.png?v=52" alt="XÁC NHẬN">
                <p class="text-step">
                    XÁC NHẬN
                </p>
                <p class="small--hide sub-step text-white">
                    Xác nhận từ tổng đài viên
                </p>
                <img src="//theme.hstatic.net/1000268128/1001303877/14/left-black-arrow.png?v=52" class="step_number_abs">
                <div class="step_number step_number-4">
                    3
                </div>
            </div>
            <div class="grid__item large--one-fifth text-center small--two-sixths relative">
                <img src="//theme.hstatic.net/1000268128/1001303877/14/step_img5.png?v=52" alt="TRẢI NGHIỆM">
                <p class="text-step">
                    TRẢI NGHIỆM
                </p>
                <p class="small--hide sub-step text-white">
                    Trải nghiệm dịch vụ
                </p>
                <img src="//theme.hstatic.net/1000268128/1001303877/14/left-black-arrow.png?v=52" class="step_number_abs">
                <div class="step_number step_number-5">
                    4
                </div>
            </div>
        </div>
        <style>
            #home-step .grid {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }
            #home-step .relative {
                height: 260px;
            }
            @media only screen and (min-width: 769px) {
                .large--one-fifth {
                    width: 20%;
                }
            }
            @media only screen and (max-width: 768px) {
                #home-step .grid {
                    justify-content: space-evenly !important;
                }
                #home-step .grid__item {
                    width: 30% !important;
                }
                #home-step .relative {
                    margin-bottom: 20px !important;
                    height: 228px !important;
                }
                #home-step img {
                    width: auto !important;
                    height: 58px !important;
                }
                #home-step .text-step {
                    font-size: 13px !important;
                    height: 76px !important;
                }
                .small--hide {
                    display: none !important;
                }
                #home-step img.step_number_abs {
                    left: -16px !important;
                }
                #home-step .step_number_abs {
                    position: absolute;
                    width: 18px !important;
                    height: auto !important;
                    left: -2px !important;
                    top: 17% !important;
                    line-height: 18px !important;
                }
            }
            #home-step img {
                width: 125px;
            }
            #home-step .text-step {
                margin-bottom: 5px !important;
                margin-top: 30px;
                font-weight: 700;
                color: #ffffff;
                font-size: 16px;
            }
            #home-step .relative:first-child .step_number_abs {
                display: none;
            }
            #home-step .step_number_abs {
                position: absolute;
                width: 36px;
                left: -16px;
                top: 21%;
                line-height: 32px;
            }
            #home-step .step_number {
                color: #ffffff;
                border: 1px solid #c1bdbd;
                width: 40px;
                margin: auto;
                height: 40px;
                margin-top: 15px;
                line-height: 40px;
                font-weight: 700;
                font-size: 17px;
                border-radius: 50%;
            }
            #home-step .grid:after, #home-step .grid--rev:after, #home-step .grid--full:after, #home-step .grid-uniform:after {
                content: '';
                display: table;
                clear: both;
            }
        </style>
    </div>
</div>
<script>
    $(document).ready(function($) {
        lazyBlockProduct('section_services', '0px 0px -300px 0px');
    });
</script>
<footer class="footer">
    <div class="mid-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-cus-35 footer-info">
                    <div class="logo-footer">
                        <h4 class="text-white text-uppercase">Thông tin liên hệ</h4>
                        <hr style="border-color: #fff;">
                    </div>
                    <div class="list-menu toggle-mn">
                        <div class="content-contact clearfix mb-3">
                            <span class="list_footer text-white">
                                <b>
                                    <svg width="18" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="#ffff" d="m256 0c-140.609375 0-256 115.390625-256 256 0 46.40625 12.511719 91.582031 36.238281 131.105469l-36.238281 124.894531 124.894531-36.238281c39.523438 23.726562 84.699219 36.238281 131.105469 36.238281 140.609375 0 256-115.390625 256-256s-115.390625-256-256-256zm160.054688 364.167969-11.910157 11.910156c-16.851562 16.851563-55.605469 15.515625-80.507812 10.707031-82.800781-15.992187-179.335938-109.5625-197.953125-190.59375-9.21875-40.140625-4.128906-75.039062 9.183594-88.355468l11.910156-11.910157c6.574218-6.570312 17.253906-6.5625 23.820312 0l47.648438 47.652344c3.179687 3.179687 4.921875 7.394531 4.921875 11.90625s-1.742188 8.730469-4.921875 11.898437l-11.90625 11.921876c-13.125 13.15625-13.125 34.527343 0 47.652343l78.683594 77.648438c13.164062 13.164062 34.46875 13.179687 47.652343 0l11.910157-11.90625c6.148437-6.183594 17.632812-6.203125 23.832031 0l47.636719 47.636719c6.46875 6.441406 6.714843 17.113281 0 23.832031zm0 0"></path></svg>
                                    <span style="padding-left: 5px">Hotline CSKH:</span>
                                </b>
                                <a title="{{$config->hotline}}" href="tel:{{str_replace(' ', '', $config->hotline)}}">
                                    {{$config->hotline}}
                                </a><br>
                                <span>Hoạt động 24/7 (Kể cả ngày Lễ, Tết)</span>

                            </span>
                        </div>
                        <div class="content-contact clearfix">
                            <span class="list_footer text-white">
                                <b>
                                    <svg width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#ffff" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
                                    <span style="padding-left: 5px">Email:</span>
                                </b>
                                <a title="{{$config->email}}" href="mailto:{{$config->email}}">
                                    {{$config->email}}
                                </a>
                            </span>
                        </div>
                        <div class="content-contact clearfix">
                            <span class="list_footer text-white">
                                <b>
                                    <svg width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#ffff" d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"></path></svg>
                                    <span style="padding-left: 5px">Facebook:</span>
                                </b>
                                <a title="{{$config->facebook}}" href="{{$config->facebook}}" target="_blank">
                                    {{$config->facebook}}
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
                    <h4 class="title-menu clicked text-white text-uppercase">
                        <span>Về chúng tôi</span>
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob">
                        <li class="li_menu">
                            <a href="{{route('front.about-us')}}" title="Giới thiệu">Giới thiệu</a>
                        </li>
                        @foreach ($product_categories as $category)
                            <li class="li_menu">
                                <a href="{{route('front.show-product-category', $category->slug)}}" title="{{$category->name}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                        @foreach ($post_categories as $category)
                            <li class="li_menu">
                                <a href="{{route('front.list-blog', $category->slug)}}" title="{{$category->name}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                        <li class="li_menu">
                            <a href="{{route('front.contact-us')}}" title="Liên hệ">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
                    <h4 class="title-menu clicked text-white text-uppercase">
                        <span>Điều khoản sử dụng</span>
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob footer-click">
                        <li class="li_menu">
                            <a href="" title="Chính sách bảo mật">Chính sách bảo mật</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-25">
                    <div class="block-payment">
                        <h4 class="title-menu text-white">
                            <span>HỖ TRỢ THANH TOÁN</span>
                        </h4>
                        <div class="payment-footer list-menu">
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="MoMo"
                                    data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/payment_1.png?1742987288781"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Zalo Pay"
                                    data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/payment_2.png?1742987288781"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="VnPay"
                                    data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/payment_3.png?1742987288781"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Moca"
                                    data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/payment_4.png?1742987288781"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Visa"
                                    data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/payment_5.png?1742987288781"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="ATM"
                                    data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/payment_6.png?1742987288781"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                        </div>
                    </div>
                    <div class="block-certifi">
                        <h4 class="title-menu text-white">
                            <span>KẾT NỐI CHÚNG TÔI</span>
                        </h4>
                        <div class="social-footer">
                            <div class="social">
                                <a href="https://facebook.com/" target="_blank" aria-label="Facebook"
                                    title="Theo dõi Bean Wine trên Facebook">
                                    <img class="lazyload" width=35 height=35 alt="Facebook"
                                        data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/facebook_2.svg?1742987288781"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                </a>
                                <a href="https://www.instagram.com/" target="_blank"
                                    aria-label="Instagram" title="Theo dõi Bean Wine trên Instagram">
                                    <img class="lazyload" width=35 height=35 alt="Instagram"
                                        data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/instagram_1.svg?1742987288781"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                </a>
                                <a href="https://shopee.vn/" target="_blank" aria-label="Shopee"
                                    title="Theo dõi Bean Wine trên Shopee">
                                    <img class="lazyload" width=35 height=35 alt="Shopee"
                                        data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/shopee.svg?1742987288781"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                </a>
                                <a href="https://www.lazada.vn/" target="_blank" aria-label="Lazada"
                                    title="Theo dõi Bean Wine trên Lazada">
                                    <img class="lazyload" width=35 height=35 alt="Lazada"
                                        data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/lazada.svg?1742987288781"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                </a>
                                <a href="https://seller-vn.tiktok.com/account/register?channel=sapo_TSP"
                                    target="_blank" aria-label="Tiktok"
                                    title="Theo dõi Bean Wine trên Tiktok">
                                    <img class="lazyload" width=35 height=35 alt="Tiktok"
                                        data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/tiktok.svg?1742987288781"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-footer-bottom copyright clearfix">
        <div class="container">
            <div class="row tablet">
                <div id="copyright" class="col-lg-12 col-md-12 col-xs-12 fot_copyright">
                    <span class="wsp">
                        <span class="mobile">© Bản quyền thuộc về <b>{{$config->web_title}}</b>
                        </span>
                    </span>
                </div>
            </div>
            <a href="#" class="backtop" title="Lên đầu trang">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
</footer>
