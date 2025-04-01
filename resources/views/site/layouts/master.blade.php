<!DOCTYPE html>
<html lang="vi">

<head>
    @include('site.partials.head')
    <link rel="preload" as="script" href="/site/js/jquery.js?1742987288781" />
    <script src="/site/js/jquery.js?1742987288781" type="text/javascript"></script>
    <link rel="preload" as="script" href="/site/js/swiper.js?1742987288781" />
    <script src="/site/js/swiper.js?1742987288781" type="text/javascript"></script>
    <link rel="preload" as="script" href="/site/js/lazy.js?1742987288781" />
    <script src="/site/js/lazy.js?1742987288781" type="text/javascript"></script>
    <link rel="preload" as='style' type="text/css" href="/site/css/fonts.scss.css?1742987288781">
    <link rel="preload" as='style' type="text/css" href="/site/css/main.scss.css?1742987288781">
    <link rel="preload" as='style' type="text/css" href="/site/css/index.scss.css?1742987288781">
    <link rel="preload" as='style' type="text/css" href="/site/css/bootstrap-4-3-min.css?1742987288781">
    <link rel="preload" as='style' type="text/css" href="/site/css/quickviews_popup_cart.scss.css?1742987288781">
    <style>
        :root {
            --mainColor: #ffff;
            --subColor: #ffae19;
            --textColor: #000000;
            --hover: #ffae19;
            --price: #d31100;
        }
    </style>
    <link href="/site/css/fonts.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/site/css/bootstrap-4-3-min.css?1742987288781">
    <link href="/site/css/main.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/css/index.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/css/quickviews_popup_cart.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('css')
    <script>
        (function() {
            function asyncLoad() {
                var urls = [];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad,
                false);
        })();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            awe_lazyloadImage();
            /*Header promotion*/

            // var index = 0,
            //     stop = false,
            //     num = document.querySelectorAll('.js-promo > li').length,
            //     liEls = document.querySelectorAll('.js-promo > li');

            // function shippingflipInX() {
            //     if (stop) return false;
            //     if (index > (num - 2)) {
            //         liEls.forEach(function(el) {
            //             el.classList.add('see-none');
            //             el.classList.remove('animated', 'flipInX', 'see-block');
            //         });
            //         index = 0;
            //         liEls[0].classList.add('animated', 'flipInX', 'see-block');
            //         liEls[0].classList.remove('see-none');
            //         return;
            //     }
            //     liEls.forEach(function(el) {
            //         el.classList.add('see-none');
            //         el.classList.remove('animated', 'flipInX', 'see-block');
            //     });
            //     liEls[index + 1].classList.remove('see-none');
            //     liEls[index + 1].classList.add('animated', 'flipInX', 'see-block');
            //     index++;
            // }
            // var hdtimer = setInterval(function() {
            //     shippingflipInX();
            // }, 5000);

            // document.querySelector('.js-promo').addEventListener('mouseenter', function() {
            //     stop = true;
            // });
            // document.querySelector('.js-promo').addEventListener('mouseleave', function() {
            //     stop = false;
            // });


            function getItemSearch(name, smartjson) {
                return fetch(`https://${window.location.hostname}/search?q=${name}&view=${smartjson}&type=product`)
                    .then(res => res.json())
                    .catch(err => console.error(err));
            }

            var searchRecent = document.querySelector('.search-suggest .search-recent');
            var searchRecentList = localStorage.getItem('search_recent_list');
            var recentList = searchRecentList ? JSON.parse(searchRecentList) : [];

            if (recentList.length > 0) {
                searchRecent.classList.remove('d-none');
                var searchList = searchRecent.querySelector('.search-list');
                recentList.forEach(function(item) {
                    var link = document.createElement('a');
                    link.href = `/search?query=${encodeURIComponent(item)}&type=product`;
                    link.textContent = item;
                    link.title = `Tìm kiếm ${item}`;
                    link.classList.add('search-item');

                    var closeSpan = document.createElement('span');
                    closeSpan.textContent = 'Đóng';
                    closeSpan.title = 'Đóng';
                    closeSpan.classList.add('close');

                    closeSpan.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var index = recentList.indexOf(item);
                        if (index !== -1) {
                            recentList.splice(index, 1);
                            localStorage.setItem('search_recent_list', JSON.stringify(recentList));
                            searchList.removeChild(link);
                            if (recentList.length == 0) {
                                searchRecent.classList.toggle('d-none');
                            }
                        }
                    });

                    link.appendChild(closeSpan);
                    searchList.appendChild(link);
                });
            }

            var searchInput = document.querySelectorAll(
                '.header_tim_kiem input[type="text"], .search-mobile input[type="text"]');
            searchInput.forEach(function(input) {
                input.addEventListener('keyup', function(e) {
                    let term = this.value.trim();
                    let data = '';
                    var resultbox = '';
                    if (term.length > 1) {
                        searchRecent.classList.add('d-none');

                        async function goawaySearch() {
                            data = await getItemSearch(term, 'smartjson');
                            setTimeout(function() {
                                var sizeData = Object.keys(data).length;
                                if (sizeData > 0) {
                                    Object.keys(data).forEach(function(key) {
                                        if (data[key].compare_price !== 0) {
                                            resultbox +=
                                                `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span><span class="compare-price">${data[key].compare_price}</span></div></div></a>`;
                                        } else {
                                            resultbox +=
                                                `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span></div></div></a>`;
                                        }
                                    });
                                    resultbox +=
                                        `<a href="/search?query=${term}&type=product" class="see-all-search" title="Xem tất cả">Xem tất cả kết quả »</a>`;
                                    document.querySelector('.list-search').innerHTML =
                                        resultbox;
                                } else {
                                    document.querySelector('.list-search').innerHTML =
                                        '<div class="not-pro">Không có thấy kết quả tìm kiếm</div>';
                                }
                            }, 200);
                        }

                        goawaySearch();
                    } else {
                        if (recentList.length > 0) {
                            searchRecent.classList.remove('d-none');
                        }
                        document.querySelector('.list-search').innerHTML = '';
                    }
                });
            });

        });

        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        }
        window.awe_lazyloadImage = awe_lazyloadImage;
    </script>
    @include('site.partials.angular_mix')
</head>

<body ng-app="App" ng-cloak>
    <div class="opacity_menu"></div>
    @include('site.partials.header')
    <div class="bodywrap">
        @yield('content')
        @include('site.partials.footer')
    </div>
    <div class="backdrop__body-backdrop___1rvky"></div>
    <script type="text/javascript">
        $('.img_hover_cart').click(function() {
            $('.cart-sidebar, .backdrop__body-backdrop___1rvky').addClass('active');
        });

        $(document).on('click', '.backdrop__body-backdrop___1rvky, .cart_btn-close', function() {
            $('.backdrop__body-backdrop___1rvky, .cart-sidebar, #popup-cart-desktop, .popup-cart-mobile')
                .removeClass('active');
            return false;
        })
    </script>
    <!-- <div id="popup-cart-desktop" class="popup-cart">
         <div class="header-popcart">
            <div class="top-cart-header">
               <span>
                  <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-check-circle fa-w-16">
                     <path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" class=""></path>
                  </svg>
                  Bạn đã thêm [<a class="cart-popup-name" href="#" ></a>] vào giỏ hàng
               </span>
            </div>
            <a class="noti-cart-count" href="/cart" title="Giỏ hàng">
            Giỏ hàng của bạn hiện có <span class="count_item_pr"></span> sản phẩm
            </a>
            <a title="Đóng" class="cart_btn-close" href="javascript:;">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 365.696 365.696" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                  <g>
                     <path xmlns="http://www.w3.org/2000/svg" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0" fill="#ffffff" data-original="#000000" style="" class=""/>
                  </g>
               </svg>
            </a>
         </div>
         <div class="cartPopupContainer">
         </div>
      </div> -->
    <!-- <div id="popup-cart-mobile" class="popup-cart-mobile">
         <div class="header-popcart">
            <div class="top-cart-header">
               <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="682.66669pt" viewBox="-21 -21 682.66669 682.66669" width="682.66669pt">
                     <path d="m322.820312 387.933594 279.949219-307.273438 36.957031 33.671875-314.339843 345.023438-171.363281-162.902344 34.453124-36.238281zm297.492188-178.867188-38.988281 42.929688c5.660156 21.734375 8.675781 44.523437 8.675781 68.003906 0 148.875-121.125 270-270 270s-270-121.125-270-270 121.125-270 270-270c68.96875 0 131.96875 26.007812 179.746094 68.710938l33.707031-37.113282c-58.761719-52.738281-133.886719-81.597656-213.453125-81.597656-85.472656 0-165.835938 33.285156-226.273438 93.726562-60.441406 60.4375-93.726562 140.800782-93.726562 226.273438s33.285156 165.835938 93.726562 226.273438c60.4375 60.441406 140.800782 93.726562 226.273438 93.726562s165.835938-33.285156 226.273438-93.726562c60.441406-60.4375 93.726562-140.800782 93.726562-226.273438 0-38.46875-6.761719-75.890625-19.6875-110.933594zm0 0"/>
                  </svg>
                  Mua hàng thành công
               </span>
            </div>
            <div class="media-content bodycart-mobile">
            </div>
            <a class="noti-cart-count" href="/cart" title="Giỏ hàng"> Giỏ hàng của bạn hiện có <span class="count_item_pr"></span> sản phẩm </a>
            <a title="Đóng" class="cart_btn-close iconclose" href="javascript:;">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                  <g>
                     <g>
                        <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"/>
                     </g>
                  </g>
               </svg>
            </a>
            <div class="bottom-action">
               <div class="cart_btn-close btn btn-extent">
                  Tiếp tục mua hàng
               </div>
               <a href="/checkout" class="checkout btn btn-primary" title="Thanh toán ngay">
               Thanh toán ngay
               </a>
            </div>
         </div>
      </div>
      <div id="quick-view-product" class="quickview-product" style="display:none;">
         <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
         <div class="quick-view-product"></div>
         <div id="quickview-modal" style="display:none;">
            <div class="block-quickview primary_block details-product">
               <div class="row">
                  <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-5">
                     <div class="image-block large-image col_large_default">
                        <span class="view_full_size">
                        <a class="img-product" title="Ảnh sản phẩm" href="javascript:;">
                        <img src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/logo.png?1742987288781" id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" alt="quickview"  />
                        </a>
                        </span>
                        <div class="loading-imgquickview" style="display:none;"></div>
                     </div>
                     <div class="more-view-wrapper clearfix">
                        <div class="thumbs_quickview owl_nav_custome1 swiper-container" id="thumbs_list_quickview">
                           <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq swiper-wrapper" id="thumblist_quickview"></ul>
                           <div class="swiper-button-prev">
                           </div>
                           <div class="swiper-button-next">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-7 details-pro style_product style_border">
                     <div class="box-product-info">
                        <div class="head-qv group-status">
                           <h3 class="qwp-name title-product">abc</h3>
                           <div class="vend-qv group-status">
                              <div class="left_vend">
                                 <div class="first_status ">Thương hiệu:
                                    <span class="vendor_ status_name"></span>
                                 </div>
                                 <span class="line_tt">|</span>
                                 <div class="top_sku first_status">Mã sản phẩm:
                                    <span class="sku_ status_name"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="quickview-info">
                           <span class="prices price-box">
                           <span class="price product-price"></span>
                           <del class="old-price"></del>
                           </span>
                        </div>
                        <div class="product-description product-summary">
                           <div class="rte">
                           </div>
                        </div>
                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="quick_option variants form-ajaxtocart form-product">
                           <span class="price-product-detail d-none" style="opacity: 0;">
                           <span class=""></span>
                           </span>
                           <select name='variantId' class="d-none" style="display:none"></select>
                           <div class="form_product_content">
                              <div class="count_btn_style quantity_wanted_p">
                                 <div class=" soluong1 clearfix">
                                    <div class="input_number_product">
                                       <a class="btn_num num_1 button button_qty" href="javascript:;" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;">-</a>
                                       <input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                       <a class="btn_num num_2 button button_qty" href="javascript:;" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</a>
                                    </div>
                                 </div>
                                 <div class="button_actions clearfix">
                                    <button type="submit" class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail btn btn-primary">
                                    <span class="btn-content text_1">Thêm vào giỏ hàng</span>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;">
               <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                  <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
               </svg>
            </a>
         </div>
      </div> -->
    <link rel="preload" as="script" href="/site/js/quickview.js?1742987288781" />
    <script type="text/javascript" defer src="/site/js/quickview.js?1742987288781"></script>
    <link rel="preload" as="script" href="/site/js/main.js?1742987288781" />
    <script src="/site/js/main.js?1742987288781" type="text/javascript"></script>
    <script src="/site/js/index.js?1742987288781" type="text/javascript"></script>
    <!-- <div id="modal-banner" class="modal-banner" style="display:none;" data-delay="5000">
         <div class="modalbanner-overlay fancybox-overlay fancybox-overlay-fixed"></div>
         <div class="modal-banner-promo">
            <div class="modal-body" >
               <form>
                  <a href="/collections/all" title="Chương trình khuyến mãi" class="banner-promotion" data-section="banner_popup">
                     <script type="text/x-custom-template" data-template="banner_popup">
                        <img width="500" height="500" alt="Chương trình khuyến mãi" src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/popup_banner.jpg?1742987288781" />
                     </script>
                  </a>
                  <div class="check-close">
                     <input type="checkbox" id="check-close-banner" name="vehicle1" value="Bike">
                     <label for="check-close-banner">Không hiển thị hôm nay</label>
                  </div>
                  <a title="Đóng" class="modalbanner-close close-window" href="javascript:;">
                     <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                        <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
                     </svg>
                  </a>
               </form>
            </div>
         </div>
      </div>
      <script>
          $(document).ready(function($) {
              var modalPopup = $('.modal-banner');
              var close = $('.modalbanner-close');
              var checkBox = $('#check-close-banner');
              var banner = $('#modal-banner .banner-promotion');

              function hidePopup() {
                  modalPopup.hide();
              }

              function isPopupClosed() {
                  // Kiểm tra xem cookie hoặc localStorage có thông tin ngày giống với ngày hiện tại hay không
                  var storedDate = localStorage.getItem('popupClosedDate');
                  if (storedDate) {
                      var currentDate = new Date().toLocaleDateString("en-US", {
                          timeZone: "Asia/Ho_Chi_Minh"
                      });
                      return storedDate === currentDate;
                  }
                  return false;
              }

              $(document).on('click', '#modal-banner .modalbanner-overlay, .fancybox-overlay', function(e) {
                  hidePopup();
                  if (checkBox.prop('checked')) {
                      // Lưu ngày hiện tại vào localStorage
                      var currentDate = new Date().toLocaleDateString("en-US", {
                          timeZone: "Asia/Ho_Chi_Minh"
                      });
                      localStorage.setItem('popupClosedDate', currentDate);
                  }
              });

              close.click(function() {
                  hidePopup();
                  if (checkBox.prop('checked')) {
                      // Lưu ngày hiện tại vào localStorage
                      var currentDate = new Date().toLocaleDateString("en-US", {
                          timeZone: "Asia/Ho_Chi_Minh"
                      });
                      localStorage.setItem('popupClosedDate', currentDate);
                  }
              });

              banner.click(function() {
                  // Lưu ngày hiện tại vào localStorage
                  var currentDate = new Date().toLocaleDateString("en-US", {
                      timeZone: "Asia/Ho_Chi_Minh"
                  });
                  localStorage.setItem('popupClosedDate', currentDate);
              });

              if (!isPopupClosed()) {
                  var delayTime = $('#modal-banner').data('delay') || 3000;
                  setTimeout(function() {
                      var section = $('#modal-banner .banner-promotion');
                      var template = $('script[data-template="banner_popup"]').html();
                      if (template) {
                          $('.banner-promotion[data-section="banner_popup"]').html(template);
                          var banner = $('#modal-banner .banner-promotion');
                          banner.click(function() {
                              // Lưu ngày hiện tại vào localStorage
                              var currentDate = new Date().toLocaleDateString("en-US", {
                                  timeZone: "Asia/Ho_Chi_Minh"
                              });
                              localStorage.setItem('popupClosedDate', currentDate);
                          });
                      }
                      modalPopup.show();
                  }, delayTime);
              }
          });
      </script> -->
    <div class="main-widget">
        <div class="def-content unsee element">
            <div class="def-header">
                Liên hệ với chúng tôi
                <div class="close-icon" title="Đóng">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x" viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </div>
            <div class="item phone">
                <a href="tel:19006750">
                    <span class="img">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                    </span>
                    <div class="detail">
                        <b class="arcu-item-title">
                            Hotline:
                        </b>
                        <span class="arcu-item-subtitle">
                            19006750
                        </span>
                    </div>
                </a>
            </div>
            <div class="item zalo">
                <a target="_blank" href="https://zalo.me/0123456789">
                    <span class="img">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" viewBox="0 0 614.501 613.667" xml:space="preserve">
                            <path fill="currentColor"
                                d="M464.721,301.399c-13.984-0.014-23.707,11.478-23.944,28.312c-0.251,17.771,9.168,29.208,24.037,29.202   c14.287-0.007,23.799-11.095,24.01-27.995C489.028,313.536,479.127,301.399,464.721,301.399z">
                            </path>
                            <path fill="currentColor"
                                d="M291.83,301.392c-14.473-0.316-24.578,11.603-24.604,29.024c-0.02,16.959,9.294,28.259,23.496,28.502   c15.072,0.251,24.592-10.87,24.539-28.707C315.214,313.318,305.769,301.696,291.83,301.392z">
                            </path>
                            <path fill="currentColor"
                                d="M310.518,3.158C143.102,3.158,7.375,138.884,7.375,306.3s135.727,303.142,303.143,303.142   c167.415,0,303.143-135.727,303.143-303.142S477.933,3.158,310.518,3.158z M217.858,391.083   c-33.364,0.818-66.828,1.353-100.133-0.343c-21.326-1.095-27.652-18.647-14.248-36.583c21.55-28.826,43.886-57.065,65.792-85.621   c2.546-3.305,6.214-5.996,7.15-12.705c-16.609,0-32.784,0.04-48.958-0.013c-19.195-0.066-28.278-5.805-28.14-17.652   c0.132-11.768,9.175-17.329,28.397-17.348c25.159-0.026,50.324-0.06,75.476,0.026c9.637,0.033,19.604,0.105,25.304,9.789   c6.22,10.561,0.284,19.512-5.646,27.454c-21.26,28.497-43.015,56.624-64.559,84.902c-2.599,3.41-5.119,6.88-9.453,12.725   c23.424,0,44.123-0.053,64.816,0.026c8.674,0.026,16.662,1.873,19.941,11.267C237.892,379.329,231.368,390.752,217.858,391.083z    M350.854,330.211c0,13.417-0.093,26.841,0.039,40.265c0.073,7.599-2.599,13.647-9.512,17.084   c-7.296,3.642-14.71,3.028-20.304-2.968c-3.997-4.281-6.214-3.213-10.488-0.422c-17.955,11.728-39.908,9.96-56.597-3.866   c-29.928-24.789-30.026-74.803-0.211-99.776c16.194-13.562,39.592-15.462,56.709-4.143c3.951,2.619,6.201,4.815,10.396-0.053   c5.39-6.267,13.055-6.761,20.271-3.357c7.454,3.509,9.935,10.165,9.776,18.265C350.67,304.222,350.86,317.217,350.854,330.211z    M395.617,369.579c-0.118,12.837-6.398,19.783-17.196,19.908c-10.779,0.132-17.593-6.966-17.646-19.512   c-0.179-43.352-0.185-86.696,0.007-130.041c0.059-12.256,7.302-19.921,17.896-19.222c11.425,0.752,16.992,7.448,16.992,18.833   c0,22.104,0,44.216,0,66.327C395.677,327.105,395.828,348.345,395.617,369.579z M463.981,391.868   c-34.399-0.336-59.037-26.444-58.786-62.289c0.251-35.66,25.304-60.713,60.383-60.396c34.631,0.304,59.374,26.306,58.998,61.986   C524.207,366.492,498.534,392.205,463.981,391.868z">
                            </path>
                        </svg>
                    </span>
                    <div class="detail">
                        <b class="arcu-item-title">
                            Zalo chat:
                        </b>
                        <span class="arcu-item-subtitle">
                            Tài khoản Zalo: 0123 456 789
                        </span>
                    </div>
                </a>
            </div>
            <div class="item mess">
                <a target="_blank" href="https://m.me/sapowebvietnam">
                    <span class="img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                            <path
                                d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                        </svg>
                    </span>
                    <div class="detail">
                        <b class="arcu-item-title">
                            Messenger:
                        </b>
                        <span class="arcu-item-subtitle">
                            m.me/sapowebvietnam
                        </span>
                    </div>
                </a>
            </div>
            <div class="item map">
                <a target="_blank" href="/he-thong-cua-hang">
                    <span class="img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                            <path fill-rule="evenodd"
                                d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                        </svg>
                    </span>
                    <div class="detail">
                        <b class="arcu-item-title">
                            Hệ thống cửa hàng:
                        </b>
                        <span class="arcu-item-subtitle">
                            Xem địa chỉ cửa hàng
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="out-circle">
            <div class="pregan element"></div>
            <div class="pregan element"></div>
            <div class="main-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-825 -308)">
                        <g>
                            <path transform="translate(825 308)" fill="#FFFFFF"
                                d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z">
                            </path>
                        </g>
                    </g>
                </svg>
                <p>
                    Liên hệ
                </p>
            </div>
            <div class="ser-icon unsee element">
                <div class="process">
                    <span class="img phone item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                    </span>
                    <span class="img zalo item">
                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            viewBox="0 0 614.501 613.667" xml:space="preserve">
                            <path fill="currentColor"
                                d="M464.721,301.399c-13.984-0.014-23.707,11.478-23.944,28.312c-0.251,17.771,9.168,29.208,24.037,29.202   c14.287-0.007,23.799-11.095,24.01-27.995C489.028,313.536,479.127,301.399,464.721,301.399z">
                            </path>
                            <path fill="currentColor"
                                d="M291.83,301.392c-14.473-0.316-24.578,11.603-24.604,29.024c-0.02,16.959,9.294,28.259,23.496,28.502   c15.072,0.251,24.592-10.87,24.539-28.707C315.214,313.318,305.769,301.696,291.83,301.392z">
                            </path>
                            <path fill="currentColor"
                                d="M310.518,3.158C143.102,3.158,7.375,138.884,7.375,306.3s135.727,303.142,303.143,303.142   c167.415,0,303.143-135.727,303.143-303.142S477.933,3.158,310.518,3.158z M217.858,391.083   c-33.364,0.818-66.828,1.353-100.133-0.343c-21.326-1.095-27.652-18.647-14.248-36.583c21.55-28.826,43.886-57.065,65.792-85.621   c2.546-3.305,6.214-5.996,7.15-12.705c-16.609,0-32.784,0.04-48.958-0.013c-19.195-0.066-28.278-5.805-28.14-17.652   c0.132-11.768,9.175-17.329,28.397-17.348c25.159-0.026,50.324-0.06,75.476,0.026c9.637,0.033,19.604,0.105,25.304,9.789   c6.22,10.561,0.284,19.512-5.646,27.454c-21.26,28.497-43.015,56.624-64.559,84.902c-2.599,3.41-5.119,6.88-9.453,12.725   c23.424,0,44.123-0.053,64.816,0.026c8.674,0.026,16.662,1.873,19.941,11.267C237.892,379.329,231.368,390.752,217.858,391.083z    M350.854,330.211c0,13.417-0.093,26.841,0.039,40.265c0.073,7.599-2.599,13.647-9.512,17.084   c-7.296,3.642-14.71,3.028-20.304-2.968c-3.997-4.281-6.214-3.213-10.488-0.422c-17.955,11.728-39.908,9.96-56.597-3.866   c-29.928-24.789-30.026-74.803-0.211-99.776c16.194-13.562,39.592-15.462,56.709-4.143c3.951,2.619,6.201,4.815,10.396-0.053   c5.39-6.267,13.055-6.761,20.271-3.357c7.454,3.509,9.935,10.165,9.776,18.265C350.67,304.222,350.86,317.217,350.854,330.211z    M395.617,369.579c-0.118,12.837-6.398,19.783-17.196,19.908c-10.779,0.132-17.593-6.966-17.646-19.512   c-0.179-43.352-0.185-86.696,0.007-130.041c0.059-12.256,7.302-19.921,17.896-19.222c11.425,0.752,16.992,7.448,16.992,18.833   c0,22.104,0,44.216,0,66.327C395.677,327.105,395.828,348.345,395.617,369.579z M463.981,391.868   c-34.399-0.336-59.037-26.444-58.786-62.289c0.251-35.66,25.304-60.713,60.383-60.396c34.631,0.304,59.374,26.306,58.998,61.986   C524.207,366.492,498.534,392.205,463.981,391.868z">
                            </path>
                        </svg>
                    </span>
                    <span class="img mess item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                            <path
                                d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                        </svg>
                    </span>
                    <span class="img map item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                            <path fill-rule="evenodd"
                                d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="close-icon unsee element">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-x" viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            var i = 1;
            var n = $('.ser-icon .process .item').length;
            var len = $('.ser-icon .process').width() / n;
            var pos = new WebKitCSSMatrix($('.ser-icon .process').css('transform'));
            $('.ser-icon').removeClass('unsee');

            function nextFrame() {
                if (i < n) {
                    i++;
                    var pos2 = new WebKitCSSMatrix($('.ser-icon .process').css('transform'));
                    $('.ser-icon .process').css('transform', 'translateX(' + (pos2.m41 - len) + 'px)');
                    setTimeout(nextFrame, 800);
                } else {
                    $('.ser-icon').addClass('unsee');
                    i = 1;
                    $('.ser-icon .process').css('transform', 'translateX(' + (pos.m41) + 'px)');
                    setTimeout(beginFrame, 2000);
                }
            };

            function beginFrame() {
                $('.ser-icon').removeClass('unsee');
                setTimeout(nextFrame, 900);
            };
            setTimeout(beginFrame, 2000);
            $('.close-icon').click(function(event) {
                $('.element').toggleClass('unsee');
            });
        });
    </script>
    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>
    <!-- <div class="popup-ngonngu">
         <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
               <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
            </svg>
         </div>
         <ul class="language">
            <li>
               <a href="#"><img width="16" height="16" src="//bizweb.dktcdn.net/100/496/044/themes/927290/assets/vn.png?1699256128806" alt="Tiếng Việt">
               <span>Tiếng Việt</span>
               </a>
            </li>
            <li>
               <a href="#"><img width="16" height="16" src="//bizweb.dktcdn.net/100/496/044/themes/927290/assets/en.png?1699256128806" alt="Tiếng Anh">
               <span>English</span>
               </a>
            </li>
         </ul>
      </div> -->
      @stack('scripts')

</body>

</html>
