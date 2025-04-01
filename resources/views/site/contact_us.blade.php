@extends('site.layouts.master')
@section('title')
    Liên hệ
@endsection

@section('css')
<link href="/site/css/breadcrumb_style.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
<link href="/site/css/style_page.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
<link href="/site/css/contact_style.scss.css?1742987288781" rel="stylesheet" type="text/css" media="all" />
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
                <li><strong><span>Liên hệ</span></strong></li>
            </ul>
        </div>
    </section>
    <div class="layout-contact" ng-controller="ContactUsController">
        <div class="container">
            <div class="bg-shadow">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="contact">
                            <h4 class="text-white">
                                {{ $config->web_title }}
                            </h4>
                            <div class="des_foo text-white">
                                {{ $config->web_des }}
                            </div>
                            <div class="time_work">
                                <div class="item text-white">
                                    <b>Địa chỉ:</b>
                                    {{ $config->address_company }}
                                </div>
                                <div class="item text-white">
                                    <b>Hotline:</b> <a class="fone" href="tel:{{ str_replace(' ', '', $config->hotline) }}" title="{{ $config->hotline }}">{{ $config->hotline }}</a>
                                </div>
                                <div class="item text-white">
                                    <b>Email:</b> <a href="mailto:{{ $config->email }}"
                                        title="{{ $config->email }}">{{ $config->email }}</a>
                                </div>
                                <div class="item text-white">
                                    <a href="{{ route('front.store-page') }}" class="btn btn-primary frame text-uppercase" title="Hệ thống">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z">
                                            </path>
                                            <path
                                                d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z">
                                            </path>
                                        </svg>
                                        Hệ thống
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-contact">
                            <h4>
                                LIÊN HỆ VỚI CHÚNG TÔI
                            </h4>
                            <div id="pagelogin">
                                <form id="contact" accept-charset="UTF-8">
                                    <div class="group_contact">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input placeholder="Họ và tên" type="text"
                                                    class="form-control  form-control-lg" required value=""
                                                    name="contact[Name]" ng-model="your_name">
                                                <div class="invalid-feedback d-block error" role="alert">
                                                    <span ng-if="errors && errors.your_name">
                                                        <% errors.your_name[0] %>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input placeholder="Email" type="email"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required
                                                    id="email1" class="form-control form-control-lg" value=""
                                                    name="contact[email]" ng-model="your_email">
                                                <div class="invalid-feedback d-block error" role="alert">
                                                    <span ng-if="errors && errors.your_email">
                                                        <% errors.your_email[0] %>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <input type="number" placeholder="Điện thoại" name="contact[phone]"
                                                    class="form-control form-control-lg" required ng-model="your_phone">
                                                <div class="invalid-feedback d-block error" role="alert">
                                                    <span ng-if="errors && errors.your_phone">
                                                        <% errors.your_phone[0] %>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <textarea placeholder="Nội dung" name="contact[body]" id="comment" class="form-control content-area form-control-lg"
                                                    rows="5" required ng-model="your_message"></textarea>
                                                <button type="submit" class="btn btn-primary" ng-click="submitContact()">
                                                    Gửi tin nhắn
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div id="contact_map" class="map">
                            {!! $config->location !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        app.controller('ContactUsController', function($scope, $http) {
            $scope.loading = false;
            $scope.your_name = '';
            $scope.your_email = '';
            $scope.your_message = '';
            $scope.your_phone = '';
            $scope.errors = {};
            $scope.submitContact = function() {
                if ($scope.your_name == '' || $scope.your_email == '' || $scope.your_message == '' || $scope
                    .your_phone == '') {
                    toastr.error('Vui lòng nhập đầy đủ thông tin !')
                    return;
                }

                $scope.loading = true;
                $scope.errors = {};
                let data = {
                    your_name: $scope.your_name,
                    your_email: $scope.your_email,
                    your_phone: $scope.your_phone,
                    your_message: $scope.your_message
                };
                jQuery.ajax({
                    url: '{{ route('front.post-contact') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: data,
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Thao tác thành công !')
                        } else {
                            $scope.errors = response.errors;
                            toastr.error('Thao tác thất bại !')
                        }
                    },
                    error: function() {
                        toastr.error('Thao tác thất bại !')
                    },
                    complete: function() {
                        $scope.$applyAsync();
                        $scope.loading = false;
                    }
                });
            };
        });
    </script>
@endpush
