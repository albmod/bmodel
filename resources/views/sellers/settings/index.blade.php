@extends('layouts.sellerback')

<!-- Start  Title -->
@section('title')
    {{ trans('seller.home') }}
@endsection
<!-- End  Title -->

@section('Settings Menu'){{ "here show" }}@stop
@section('Settings Link'){{ "active"}}@stop
<!-- Start Style -->
@push('styles')


@endpush
<!-- End Style -->
@section('breadcrumb')
<div class="page-title d-flex flex-column me-3">
    <!--begin::Title-->
    <h1 class="d-flex text-white fw-bolder my-1 fs-3">{{trans('seller.menu.settings')}}</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-white opacity-75">
            <a href="#" class="text-white text-hover-primary">{{trans('seller.home')}}</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-white opacity-75">{{trans('seller.menu.settings')}}</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->

</div>
@endsection

<!-- Start Content -->
@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
        <!--begin::Col-->
{{--        @canany(['power_appconfig','list_appconfig','list_full_appconfig'])--}}
            <div class="col-md-6 col-lg-4 col-xl-3" >
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8" >
                        <!--begin::Name-->
                        <a href="" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{asset('assets/sellerback/media/icons/appconfig.gif') }}" class="theme-light-show" alt="">

                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <div class="fs-5 fw-bold mb-2">{{ trans('cruds.appconfig.title') }}</div>
                            <!--end::Title-->
                        </a>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-semibold text-gray-400">{{ trans('cruds.appconfig.info') }}</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
{{--        @endcanany--}}
    <!--end::Col-->
        <!--begin::Col-->
{{--        @canany(['power_type','list_type','list_full_type'])--}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                        <!--begin::Name-->
                        <a href="" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{asset('assets/sellerback/media/icons/type.gif') }}" class="theme-light-show" alt="">

                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <div class="fs-5 fw-bold mb-2">{{ trans('cruds.type.title') }}</div>
                            <!--end::Title-->
                        </a>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-semibold text-gray-400">{{ trans('cruds.type.info') }}</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
{{--        @endcanany--}}
    <!--end::Col-->
        <!--begin::Col-->
{{--        @canany(['power_branch','list_branch','list_full_branch'])--}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                        <!--begin::Name-->
                        <a href="{{route('settings.shipping','free')}}" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{asset('assets/sellerback/media/icons/branch.gif') }}" class="theme-light-show" alt="">

                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <div class="fs-5 fw-bold mb-2">{{trans('seller.menu.settings_list.shipping')}}</div>
                            <!--end::Title-->
                        </a>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-semibold text-gray-400">{{ trans('seller.menu.settings_list.shipping_info') }}</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
{{--        @endcanany--}}
    <!--end::Col-->
        <!--begin::Col-->
{{--        @canany(['power_country','list_country','list_full_country'])--}}
            <div class="col-md-6 col-lg-4 col-xl-3">

                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                        <!--begin::Name-->
                        <a href="" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{asset('assets/sellerback/media/icons/country.gif') }}" class="theme-light-show" alt="">

                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <div class="fs-5 fw-bold mb-2">{{ trans('cruds.country.title') }}</div>
                            <!--end::Title-->
                        </a>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-semibold text-gray-400">{{ trans('cruds.country.info') }}</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
{{--        @endcanany--}}
    <!--end::Col-->
        <!--begin::Col-->
{{--        @canany(['power_city','list_city','list_full_city'])--}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                        <!--begin::Name-->
                        <a href="" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{asset('assets/sellerback/media/icons/city.gif') }}" class="theme-light-show" alt="">

                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <div class="fs-5 fw-bold mb-2">{{ trans('cruds.city.title') }}</div>
                            <!--end::Title-->
                        </a>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-semibold text-gray-400">{{ trans('cruds.city.info') }}</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
{{--        @endcanany--}}
    <!--end::Col-->
        <!--begin::Col-->
{{--        @canany(['power_currency','list_currency','list_full_currency'])--}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                        <!--begin::Name-->
                        <a href="" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{asset('assets/sellerback/media/icons/currency.gif') }}" class="theme-light-show" alt="">

                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <div class="fs-5 fw-bold mb-2">{{ trans('cruds.currency.title') }}</div>
                            <!--end::Title-->
                        </a>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-semibold text-gray-400">{{ trans('cruds.currency.info') }}</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
{{--        @endcanany--}}
    <!--end::Col-->
        <!--begin::Col-->
{{--        @canany(['power_tag','list_tag','list_full_tag'])--}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                        <!--begin::Name-->
                        <a href="" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{asset('assets/sellerback/media/icons/tag.gif') }}" class="theme-light-show" alt="">

                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <div class="fs-5 fw-bold mb-2">{{ trans('cruds.tag.title') }}</div>
                            <!--end::Title-->
                        </a>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-semibold text-gray-400">{{ trans('cruds.tag.info') }}</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
{{--        @endcanany--}}
    <!--end::Col-->
        <!--begin::Col-->
{{--        @canany(['power_menu','list_menu','list_full_menu'])--}}
            <div class="col-md-6 col-lg-4 col-xl-3">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                        <!--begin::Name-->
                        <a href="" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{asset('assets/sellerback/media/icons/menu.gif') }}" class="theme-light-show" alt="">

                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <div class="fs-5 fw-bold mb-2">{{ trans('cruds.menu.title') }}</div>
                            <!--end::Title-->
                        </a>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-semibold text-gray-400">{{ trans('cruds.menu.info') }}</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
{{--    @endcanany--}}
    <!--end::Col-->
    </div>
        </div>
    </div>
@endsection
<!-- End Content -->



<!-- Start Script -->
@push('scripts')

@endpush
<!-- End Script -->