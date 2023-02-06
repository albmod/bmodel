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
            <li class="breadcrumb-item text-white opacity-75">{{trans('seller.menu.settings_list.shipping')}}</li>
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
                            <h2 class="mb-1">{{trans('seller.menu.settings')}}</h2>
                            <div class="text-muted fw-bolder">
                                <a href="#">{{trans('seller.menu.settings_list.shipping')}}</a>
                                <span class="mx-3">|</span>
                                <a href="#">{{trans('seller.menu.settings_list.shipping_list.free_shipping')}}</a>

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
                                <b>  <a class="nav-link text-active-primary me-6 active" href="../../demo2/dist/apps/file-manager/settings.html">{{trans('seller.menu.settings_list.shipping_list.free_shipping')}}</b>  </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <b> <a class="nav-link text-active-primary me-6" href="../../demo2/dist/apps/file-manager/folders.html">{{trans('seller.menu.settings_list.shipping_list.internal_shipping')}}</b> </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <b> <a class="nav-link text-active-primary me-6" href="../../demo2/dist/apps/file-manager/folders.html">{{trans('seller.menu.settings_list.shipping_list.external_shipping')}}</b> </a>
                            </li>
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
                        <h2>Preferences</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Form-->
                    <form class="form" id="kt_file_manager_settings">
                        <!--begin::Input group-->
                        <div class="fv-row row mb-15">
                            <!--begin::Col-->
                            <div class="col-md-3 d-flex align-items-center">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold">Language</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-9">
                                <!--begin::Input-->
                                <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Language..." class="form-select mb-2">
                                    <option></option>
                                    <option value="id">Bahasa Indonesia - Indonesian</option>
                                    <option value="msa">Bahasa Melayu - Malay</option>
                                    <option value="ca">Català - Catalan</option>
                                    <option value="cs">Čeština - Czech</option>
                                    <option value="da">Dansk - Danish</option>
                                    <option value="de">Deutsch - German</option>
                                    <option value="en">English</option>
                                    <option value="en-gb">English UK - British English</option>
                                    <option value="es">Español - Spanish</option>
                                    <option value="fil">Filipino</option>
                                    <option value="fr">Français - French</option>
                                    <option value="ga">Gaeilge - Irish (beta)</option>
                                    <option value="gl">Galego - Galician (beta)</option>
                                    <option value="hr">Hrvatski - Croatian</option>
                                    <option value="it">Italiano - Italian</option>
                                    <option value="hu">Magyar - Hungarian</option>
                                    <option value="nl">Nederlands - Dutch</option>
                                    <option value="no">Norsk - Norwegian</option>
                                    <option value="pl">Polski - Polish</option>
                                    <option value="pt">Português - Portuguese</option>
                                    <option value="ro">Română - Romanian</option>
                                    <option value="sk">Slovenčina - Slovak</option>
                                    <option value="fi">Suomi - Finnish</option>
                                    <option value="sv">Svenska - Swedish</option>
                                    <option value="vi">Tiếng Việt - Vietnamese</option>
                                    <option value="tr">Türkçe - Turkish</option>
                                    <option value="el">Ελληνικά - Greek</option>
                                    <option value="bg">Български език - Bulgarian</option>
                                    <option value="ru">Русский - Russian</option>
                                    <option value="sr">Српски - Serbian</option>
                                    <option value="uk">Українська мова - Ukrainian</option>
                                    <option value="he">עִבְרִית - Hebrew</option>
                                    <option value="ur">اردو - Urdu (beta)</option>
                                    <option value="ar">العربية - Arabic</option>
                                    <option value="fa">فارسی - Persian</option>
                                    <option value="mr">मराठी - Marathi</option>
                                    <option value="hi">हिन्दी - Hindi</option>
                                    <option value="bn">বাংলা - Bangla</option>
                                    <option value="gu">ગુજરાતી - Gujarati</option>
                                    <option value="ta">தமிழ் - Tamil</option>
                                    <option value="kn">ಕನ್ನಡ - Kannada</option>
                                    <option value="th">ภาษาไทย - Thai</option>
                                    <option value="ko">한국어 - Korean</option>
                                    <option value="ja">日本語 - Japanese</option>
                                    <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                    <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row row mb-15">
                            <!--begin::Col-->
                            <div class="col-md-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mt-2">Date Format</label>
                                <div class="text-muted fs-7">For more info on moment() date formats, please
                                    <a href="https://momentjs.com/docs/#/displaying/format/" target="_blank">click here</a>.</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-9">
                                <!--begin::Input-->
                                <select name="dateformat" aria-label="Select a date format" data-hide-search="true" data-control="select2" data-placeholder="Select a date format..." class="form-select mb-2">
                                    <option></option>
                                    <option value="1">10 Sep 2021, 10:15 AM</option>
                                    <option value="2">10/09/2021, 10:15 AM</option>
                                    <option value="3">09-10-2021</option>
                                    <option value="4">Sunday, September 10th 2010</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row row mb-15">
                            <!--begin::Col-->
                            <div class="col-md-3 d-flex align-items-center">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold">Automatic time zone</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-9">
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-30px w-50px" name="autotimezone" type="checkbox" value="" id="autotimezone" />
                                    <label class="form-check-label" for="autotimezone">GMT +10:00</label>
                                </div>
                                <!--begin::Switch-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row row mb-15">
                            <!--begin::Col-->
                            <div class="col-md-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mt-2">Folder Compression</label>
                                <div class="text-muted fs-7">Default file compression type when downloading folders</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-9">
                                <!--begin::Input-->
                                <select name="compression" aria-label="Select a Compressions type" data-control="select2" data-hide-search="true" data-placeholder="Select a Compressions type..." class="form-select mb-2">
                                    <option></option>
                                    <option value="1">*.zip</option>
                                    <option value="2">*.7z</option>
                                    <option value="3">*.rar</option>
                                    <option value="4">*.tar.gz</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row row mb-15">
                            <!--begin::Col-->
                            <div class="col-md-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold">Sharing Permissions</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-9">
                                <!--begin::Subtitle-->
                                <label class="fs-6 fw-bold mb-3">Organisation</label>
                                <!--end::Subtitle-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-50px" name="org_read" type="checkbox" value="" id="org_read" checked="checked" />
                                        <label class="form-check-label" for="org_read">Read</label>
                                    </div>
                                    <!--begin::Switch-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-50px" name="org_write" type="checkbox" value="" id="org_write" checked="checked" />
                                        <label class="form-check-label" for="org_write">Write</label>
                                    </div>
                                    <!--begin::Switch-->
                                </div>
                                <!--end::Options-->
                                <!--begin::Separator-->
                                <div class="separator mt-6 mb-5"></div>
                                <!--end::Separator-->
                                <!--begin::Subtitle-->
                                <label class="fs-6 fw-bold mb-3">Public</label>
                                <!--end::Subtitle-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-50px" name="public_read" type="checkbox" value="" id="public_read" checked="checked" />
                                        <label class="form-check-label" for="public_read">Read</label>
                                    </div>
                                    <!--begin::Switch-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-50px" name="public_write" type="checkbox" value="" id="public_write" />
                                        <label class="form-check-label" for="public_write">Write</label>
                                    </div>
                                    <!--begin::Switch-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Action buttons-->
                        <div class="row mt-12">
                            <div class="col-md-9 offset-md-3">
                                <!--begin::Cancel-->
                                <button type="button" class="btn btn-light me-3">Cancel</button>
                                <!--end::Cancel-->
                                <!--begin::Button-->
                                <button type="button" class="btn btn-primary" id="kt_file_manager_settings_submit">
                                    <span class="indicator-label">Save</span>
                                    <span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <!--begin::Action buttons-->
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