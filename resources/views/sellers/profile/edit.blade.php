@extends('layouts.sellerback')

<!-- Start  Title -->
@section('title')
    {{ trans('seller.profile') }}
@endsection
<!-- End  Title -->

{{--@section('Settings Menu'){{ "here show" }}@stop--}}
{{--@section('Settings Link'){{ "active"}}@stop--}}

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
            <li class="breadcrumb-item text-white opacity-75">{{trans('seller.my_profile')}}</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->

    </div>
@endsection


<!-- Start Content -->
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Card-->
            <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" >
            {{--                <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(30% + 10rem); background-position-x: 0; background-image: url('{{asset('assets/sellerback/media/icons/settings.svg')}}">--}}
            <!--begin::Card header-->
                <div class="card-header pt-10">
                    <div class="d-flex align-items-center">
                        <!--begin::Icon-->
                        <div class="symbol symbol-circle me-5">
                            <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs020.svg-->
                                <span class="svg-icon svg-icon-2x svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="black" />
														<path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="black" />
													</svg>
												</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <h2 class="mb-1">{{trans('seller.my_profile')}}</h2>
                            <div class="text-muted fw-bolder">
                                <a href="#">{{trans('seller.my_profile_list.edit')}}</a>

                            </div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pb-0">
                    <!--begin::Navs-->
                    <div class="d-flex overflow-auto h-55px">
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-nowrap">

                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <b>  <a class="nav-link text-active-primary me-6 active" href="{{route('edit.profile')}}">{{trans('seller.my_profile')}} </a></b>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->

                            <!--end::Nav item-->
                        </ul>
                    </div>
                    <!--begin::Navs-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header pt-8">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>{{trans('seller.my_profile_list.edit')}}</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                @include('sellers.includes.alerts.success')
                @include('sellers.includes.alerts.errors')
                <!--begin::Form-->
                    <form id="kt_account_profile_details_form"  action="{{route('update.profile')}}" method="post" enctype="multipart/form-data">
                        @csrf

                            @method('PUT')

                        <input type="hidden" name="id" value="{{$seller-> id}}">

                    {{--                        @if (count($errors)>0)--}}
                    {{--                            <ul>--}}
                    {{--                                @foreach ($errors->all() as $item)--}}
                    {{--                                    <div class="invalid-feedback" style="display: block;">--}}
                    {{--                                        <li> {{$item}}</li>--}}
                    {{--                                    </div>--}}
                    {{--                                @endforeach--}}
                    {{--                            </ul>--}}
                    {{--                            @endif--}}
                    <!--begin::Personal info-->
                        <div class="card mb-5 mb-xl-10">
                            <!--begin::Card header-->
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                                <div class="card-title m-0">
                                    <h3 class="fw-bolder m-0">{{trans('seller.my_profile')}}  </h3>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Content-->
                            <div id="kt_account_signin_method" class="collapse show">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Email Address-->


                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">{{trans('seller.my_profile_list.name')}}/{{trans('seller.my_profile_list.email')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row">

                                                    <div class="form-floating mb-7">
                                                        <input  type="text" name="name" id="name" class="form-control"  placeholder="{{trans('seller.my_profile_list.name')}}" style="background-color: #F5F8FA;    border-color: #F5F8FA; " value="{{$seller->name}}"/>
                                                        <label for="name">{{trans('seller.my_profile_list.name')}}</label>
                                                    </div>
                                                    @error('name')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror

                                                </div>
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row">

                                                    <div class="form-floating mb-7">
                                                        <input  type="email" name="email" id="email" class="form-control"  placeholder="{{trans('seller.my_profile_list.email') }}" style="background-color: #F5F8FA;    border-color: #F5F8FA; " value="{{$seller -> email}}"/>
                                                        <label for="email">{{trans('seller.my_profile_list.email') }}</label>

                                                    </div>
                                                    @error('email')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror

                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->

                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <!--begin::Notice-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">{{trans('seller.my_profile_list.password')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row">

                                                    <div class="form-floating mb-7">
                                                        <input  type="password" name="password" id="password" class="form-control"  placeholder="{{trans('seller.my_profile_list.password')}}" style="background-color: #F5F8FA;    border-color: #F5F8FA; " />
                                                        <label for="password">{{trans('seller.my_profile_list.password')}}</label>
                                                    </div>
                                                    @error('password')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror

                                                </div>
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row">

                                                    <div class="form-floating mb-7">
                                                        <input  type="password" name="password_confirmation" id="password_confirmation" class="form-control"  placeholder="{{trans('seller.my_profile_list.password_confirmation')}}" style="background-color: #F5F8FA;    border-color: #F5F8FA; " />
                                                        <label for="password">{{trans('seller.my_profile_list.password_confirmation')}}</label>
                                                    </div>
                                                    @error('password_confirmation')
                                                    <div class="invalid-feedback" style="display: block;">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror

                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->

                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                        <!--end::Col-->
                                    </div>

                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Content-->

                        </div>
                        <!--end::Personal info-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
													<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black" />
												</svg>
											</span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                <!--begin::Content-->
                                <div class="mb-3 mb-md-0 fw-bold">
                                    <h4 class="text-gray-900 fw-bolder">{{trans('seller.menu.settings_list.declaration')}}</h4>
                                    <div class="fs-6 text-gray-700 pe-7">{{trans('seller.menu.settings_list.declaration_details')}}</div>
                                </div>
                                <!--end::Content-->
                                <!--begin::Action-->

                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{trans('global.save')}}</button>
                                <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Container-->
@endsection
<!-- End Content -->



<!-- Start Script -->
@push('scripts')

@endpush
<!-- End Script -->