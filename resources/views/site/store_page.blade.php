@extends('site.layouts.master')
@section('title')
    Hệ thống
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
                <li><strong><span>Hệ thống</span></strong></li>
            </ul>
        </div>
    </section>
    <section class="page page-store" ng-controller="StorePageController">
        {{-- <div class="section_num">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="item item_1">
                            <div class="content">
                                <span class="num "><span class="counter">08</span>+</span>
                                <span class="title">Cửa Hàng</span>
                            </div>
                            <img width="107" height="108" class="lazyload"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/thong_ke1.png?1742987288781"
                                alt="Cửa Hàng">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="item item_2">
                            <div class="content">
                                <span class="num "><span class="counter">65+</span>+</span>
                                <span class="title">Tỉnh Thành</span>
                            </div>
                            <img width="106" height="108" class="lazyload"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/thong_ke2.png?1742987288781"
                                alt="Tỉnh  Thành">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="item item_3">
                            <div class="content">
                                <span class="num "><span class="counter">3+</span>+</span>
                                <span class="title">Văn Phòng</span>
                            </div>
                            <img width="98" height="108" class="lazyload"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/thong_ke3.png?1742987288781"
                                alt="Văn Phòng">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="item item_4">
                            <div class="content">
                                <span class="num "><span class="counter">200+</span>+</span>
                                <span class="title">Nhân Viên</span>
                            </div>
                            <img width="106" height="108" class="lazyload"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/thong_ke4.png?1742987288781"
                                alt="Nhân Viên">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 d-none">
                    <div class="page-title category-title">
                        <h1 class="title-head d-none"><a href="{{route('front.store-page')}}" title="Hệ thống cửa hàng">Hệ thống cửa
                                hàng</a></h1>
                    </div>
                    <div class="content-page rte">
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 col-md-12 col-12 col-left">
                    <div class="option-chos" id="option-chos">
                        <div class="group-option">
                            <div class="group-city group">
                                <select class="form-control " select2  ng-model="province_id" ng-change="changeProvince(province_id)">
                                    <option value="">Chọn tỉnh/thành phố</option>
                                    <option ng-repeat="t in provinces" ng-value="t.id"><% t.name_with_type %></option>
                                </select>
                            </div>
                            <div class="group-district group">
                                <select class="form-control " select2 ng-model="district_id" ng-change="getLocation('search')">
                                    <option value="">Chọn quận/huyện</option>
                                    <option ng-repeat="t in districts" ng-value="t.id"><% t.name_with_type %></option>
                                </select>
                            </div>
                        </div>
                        <div class="info-store info-block" id="info-store">
                            <div class="store-list" ng-class="{'active': nameActive == location.name}" ng-repeat="location in listLocation" ng-click="changeLocation(location)">
                                <span class="name-cuahang"><% location.name %></span>
                                <span class="store-name" data-url="<% location.goolge_map %>">
                                    <b>Địa chỉ:</b> <% location.place %>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8 col-md-12 col-12 col-right">
                    <div class="wrapcontact">
                        <div class="iFrameMap">
                            <div class="iframe-mask" ng-if="disableMap"></div>
                            <div id="map_contact" class="map" ng-bind-html="trustAsHtml(mapHtml)">

                            </div>
                        </div>
                    </div>
                    <div class="pagebody d-none">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.518104241413!2d106.650981814287!3d10.771573662229935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec073c87139%3A0x10ef6fd79e84aa6f!2zNzAgTOG7ryBHaWEsIFBoxrDhu51uZyAxNSwgUXXhuq1uIDExLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1648374861399!5m2!1svi!2s"
                            width="600" height="450"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="//bizweb.dktcdn.net/100/539/564/themes/978660/assets/tabletop.js?1742987288781" type="text/javascript">
    </script>
    {{-- <script>
        $(document).ready(function() {
            var public_spreadsheet_url =
                "https://docs.google.com/spreadsheets/d/e/2PACX-1vS1LoAHgEjaeeulTh0yiBZbhQMyp-kb_BxqFbnDVI7n22uMZGYpGs8gD2O6QcqP2B8YTUbCsOQbqQn8/pub?output=csv";
            var data;
            Papa.parse(public_spreadsheet_url, {
                header: true,
                download: true,
                dynamicTyping: true,
                complete: function(results) {
                    var result = results.data;
                    var dataFix = result;
                    showlocation();
                    $('.store-list span').click(function() {
                        var urls = $(this).attr('data-url');
                        $('.store-list').removeClass('active');
                        $(this).closest('.store-list').addClass("active");
                        $('.wrapcontact').addClass('d-none');
                        $('.pagebody').removeClass('d-none');
                        $('.pagebody iframe').attr('src', urls);
                    });



                    /*Theo thành phố*/
                    var citytarget = '';

                    $('.group-city select').on('change', function(e) {


                        var optionSelected = $("option:selected", this);
                        var valueSelected = this.value;
                        citytarget = this.value;
                        if (valueSelected != 'ALL') {
                            $('.store-list').addClass('d-none');
                            $('.store-list').each(function() {
                                if (valueSelected === $(this).attr('data-local')) {
                                    $(this).removeClass('d-none');
                                }
                            });
                            $('#district').removeAttr('disabled');
                            showDistrict();
                            removeDuplicate3();
                        } else {
                            $('#district').attr('disabled', 'disabled');
                            $('.store-list').removeClass('d-none');
                            $('.group-district select').html(
                                '<option value="ALL">Chọn quận/huyện</option>');

                        }

                    });


                    /*Theo quận huyện*/
                    $('.group-district select').on('change', function(e) {
                        var oSelected = $("option:selected", this);
                        var oSelectedCity = $("option:selected", '.group-city select');
                        var oSelectedProduct = $("option:selected", '.group-product select');
                        var oSelectedStore = $("option:selected", '.group-store select');
                        $(this).attr("selected", "selected");
                        var valSelected = oSelected.data('district');
                        var valueSelected = oSelected.val();
                        var valCity = oSelected.data('local');
                        var valProduct = oSelected.data('product');
                        var valStore = oSelected.data('store');
                        var valSelectedProduct = oSelectedCity.data('product');
                        var valSelectedCity = oSelectedCity.val();
                        var valSelectedStore = oSelectedStore.val();

                        if (valueSelected != 'ALL') {
                            $('.store-list').addClass('d-none');

                            $('.store-list').each(function() {
                                console.log('test' + valCity)
                                if (valSelected === $(this).attr('data-district') &&
                                    valCity === $(this).attr('data-local')) {
                                    $(this).removeClass('d-none');
                                }
                            });
                            $('#district').removeAttr('disabled');
                        } else {
                            console.log('check' + valSelectedCity);
                            $('.store-list').each(function() {
                                if (valSelectedCity === $(this).attr('data-local')) {
                                    $(this).removeClass('d-none');
                                }
                            });
                        }
                    });

                    function showlocation(local) {
                        var cityString = "";
                        dataFix.forEach(function(data) {
                            let datasdt = data.sdt.toString();
                            let result = datasdt.replace('#', '');
                            cityString += '<div data-local="' + data.city +
                                '" data-district="' + data.district + '" class="store-list">' +
                                '<span class="name-cuahang">' + data.name + '</span>' +
                                '<span class="store-name" data-url="' + data.url +
                                '"><b>Địa chỉ:</b> ' + data.address + '</span>' +
                                '<span class="store-phone"><b>Hotline:</b> <a class="phone-url" href="tel:' +
                                result + '">' + result + '</a></span>'

                                +
                                '</div>	';
                        })
                        $('.info-store').html(cityString);
                    }


                    function showDistrict(local) {
                        var district = "";
                        var citys = citytarget;
                        dataFix.forEach(function(data) {

                            if (data.city === citys) {

                                district += '<option data-local="' + data.city +
                                    '"data-district="' + data.district + '" value="' + data
                                    .city + '" class="district-list">' +
                                    '<span class="district-name">' + data.district + '</span>' +
                                    '</option>';
                            }
                        })
                        $('#district').html('<option value="ALL">Chọn quận/huyện</option>' + district);
                    }

                    function removeDuplicate() {
                        var map = {};
                        $('#product option').each(function() {
                            if (map[$(this).attr('data-product')]) {
                                $(this).remove()
                            }
                            map[$(this).attr('data-product')] = true;
                        })
                    }

                    function removeDuplicate2() {
                        var map = {};
                        $('#city option').each(function() {
                            if (map[$(this).attr('data-local')]) {
                                $(this).remove()
                            }
                            map[$(this).attr('data-local')] = true;
                        })
                    }

                    function removeDuplicate3() {
                        var map = {};
                        $('#district option').each(function() {
                            if (map[$(this).attr('data-district')]) {
                                $(this).remove()
                            }
                            map[$(this).attr('data-district')] = true;
                        })
                    }

                    function awe_convertVietnamese(str) {
                        str = str.toUpperCase();
                        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
                        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
                        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
                        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
                        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
                        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
                        str = str.replace(/đ/g, "d");
                        str = str.replace(
                            /!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,
                            "-");
                        str = str.replace(/-+-/g, "-");
                        str = str.replace(/^\-+|\-+$/g, "");
                        return str;
                    }
                }
            });
        });
    </script> --}}
    {{-- <script>
        function myFunctionName() {
            var input_Name = document.getElementById("myName");
            var filter = input_Name.value.toUpperCase();
            var table_danhmuc = document.getElementById("info-store");
            var ul = table_danhmuc.getElementsByClassName("store-list");

            for (var i = 0; i < ul.length; i++) {

                var a = ul[i].getElementsByClassName("name-cuahang")[0];
                var typ = document.createAttribute("class");
                console.log(ul[i]);
                if (a) {

                    var txtValue_dm = a.textContent || a.innerText;
                    if (txtValue_dm.toUpperCase().indexOf(filter) > -1) {
                        ul[i].style.display = "block";
                    } else {
                        ul[i].style.display = "none";

                    }
                }
            }
        }
    </script> --}}
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script>
        app.controller('StorePageController', function($scope, $http) {
            $scope.provinces = @json(\App\Model\Common\Province::getForSelect());
            $scope.listLocation = [];
            $scope.mapHtml = '';
            $scope.disableMap = false;
            $scope.nameActive = '';
            $scope.province_id = '';
            $scope.district_id = '';
            $scope.getLocation = function(type) {
                $.ajax({
                    url: '{{ route('front.get-location') }}',
                    type: 'GET',
                    data: {
                        type: type,
                        province_id: $scope.province_id,
                        district_id: $scope.district_id
                    },
                    success: function(response) {
                        if (response.success) {
                            $scope.listLocation = response.data;
                            $scope.mapHtml = $scope.listLocation?.[0]?.google_map;
                            $scope.nameActive = $scope.listLocation?.[0]?.name;
                        } else {
                            $scope.listLocation = [];
                            $scope.mapHtml = '';
                            $scope.nameActive = '';
                        }
                    },
                    error: function(response) {
                        console.log(response);
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }
            $scope.getLocation('all');
            $scope.changeLocation = function(location) {
                $scope.mapHtml = location.google_map;
                $scope.nameActive = location.name;
                $scope.disableMap = location.google_map_action == 1 ? false : true;
            }

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
