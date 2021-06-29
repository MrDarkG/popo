@extends('layouts.userdashboard')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
                    
        <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
            
            <div class="container">
                
                <div class="row g-0 g-xl-5 g-xxl-8">
                    @foreach ($courses->courses as $course)
                        <div class="col-xl-4">
                            <div class="card bg-danger card-stretch mb-5 mb-xxl-8">
                                
                                <div class="card-body">
                                    
                                    <div class="d-flex align-items-center">
                                        
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-white bg-opacity-10">
                                                    
                                                    <span class="svg-icon svg-icon-2x svg-icon-white">
                                                        <img src="{{ $course->icon }}" height="100%" style="height:100%;width: 100%;">
                                                    </span>
                                            
                                            </span>
                                        </div>
                                        <div>
                                            <a href="{{ route('play',["id"=>$course->id]) }}" class="fs-4 text-white text-hover-primary fw-bolder">{{ $course->title }}</a>
                                            <div class="fs-7 text-white opacity-75 fw-bold mt-1">{{ $course->recomended_age }} წლისთვის</div>
                                        </div>
                                    </div>
                                    <div class="progress h-6px mt-7 bg-white bg-opacity-10">
                                        <div class="progress-bar bg-white" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row g-0 g-xl-5 g-xxl-8">
                    <div class="col-xl-4">
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            <div class="card-header align-items-center border-0 mt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder text-dark fs-3">ქულები</span>
                                </h3>
                            </div>
                            <div class="card-body pt-12">
                                <div class="d-flex flex-center position-relative bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-center h-175px" style="background-image:url('/start/assets/media/svg/illustrations/bg-1.svg')">
                                    <div class="fw-bolder fs-1 text-gray-800 position-absolute">{{ $total_score }}</div>
                                    <canvas id="kt_stats_widget_1_chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            <div class="card-header align-items-center border-0 mt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder text-dark fs-3">შედეგები</span>
                                </h3>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex flex-wrap flex-xxl-nowrap justify-content-center justify-content-md-start pt-4">
                                    <div class="me-sm-10 me-0">
                                        <ul class="nav flex-column nav-pills nav-pills-custom">
                                            <li class="nav-item mb-3">
                                                <a class="nav-link active w-225px h-70px" data-bs-toggle="pill" id="kt_stats_widget_2_tab_1" href="#kt_stats_widget_2_tab_1_content">
                                                    <div class="nav-icon me-3">
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/parchment.svg" class="default" />
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/parchment.svg" class="active" />
                                                    </div>
                                                    <div class="ps-1">
                                                        <span class="nav-text text-gray-600 fw-bolder fs-6">ისტორია</span>
                                                        <span class="text-muted fw-bold d-block pt-1">5-6 კლასი</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="nav-link w-225px h-70px" data-bs-toggle="pill" id="kt_stats_widget_2_tab_2" href="#kt_stats_widget_2_tab_2_content">
                                                    <div class="nav-icon me-3">
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/think.svg" class="default" />
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/think.svg" class="active" />
                                                    </div>
                                                    <div class="ps-1">
                                                        <span class="nav-text text-gray-600 fw-bolder fs-6">მათემატიკა</span>
                                                        <span class="text-muted fw-bold d-block pt-1">1-2 კლასი</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="nav-link w-225px h-70px" data-bs-toggle="pill" id="kt_stats_widget_2_tab_3" href="#kt_stats_widget_2_tab_3_content">
                                                    <div class="nav-icon me-3">
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/planet-earth.svg" class="default" />
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/planet-earth.svg" class="active" />
                                                    </div>
                                                    <div class="ps-1">
                                                        <span class="nav-text text-gray-600 fw-bolder fs-6">ბუნება</span>
                                                        <span class="text-muted fw-bold d-block pt-1">2-3 კლასი</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-5">
                                                <a class="nav-link w-225px h-70px" data-bs-toggle="pill" id="kt_stats_widget_2_tab_4" href="#kt_stats_widget_2_tab_4_content">
                                                    <div class="nav-icon me-3">
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/english-language.svg" class="default" />
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/english-language.svg" class="active" />
                                                    </div>
                                                    <div class="ps-1">
                                                        <span class="nav-text text-gray-600 fw-bolder fs-6">ინგლისური</span>
                                                        <span class="text-muted fw-bold d-block pt-1">3-4 კლასი</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content flex-grow-0" style="width:400px;">
                                        <custom-chart
                                
                                        >
                                        </custom-chart>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row g-0 g-xl-5 g-xxl-8">
                    <div class="col-xxl-4">
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            <div class="card-body">
                                <div class="pt-9">
                                    <div class="row">
                                        <character-edit
                                            :parts="{{ json_encode($char_parts) }}"
                                        ></character-edit>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 gy-0 gy-xxl-8">
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            <div class="card-body">
                                <form method="POST" action="{{ route('storekidsdata') }}">
                                    @csrf
                                    <div class="mb-10">
                                        <h3 class="fw-bold text-dark mb-5 fs-1">გაგვიზიარეთ ინფორმაცია მოსწავლეზე</h3>
                                        <span class="fw-bold fs-4 text-muted">ეს ინფორმაცია დაგვეხმარება შემოგთავაზოთ თქვენთვის სასურველი კურსები. </span>
                                    </div>
                                    <div class="mb-10">
                                        <h3 class="fw-bold fs-3 text-dark mb-5">ამოირჩიეთ მისწრაფებები *</h3>
                                        <div class="row" data-kt-buttons="true">
                                            @foreach ($cats as $cat)
                                                <input type="radio" class="btn-check" name="hobbie"  checked="checked" value="{{ $cat->id }}" id="kt_form_options_{{$cat->id}}" />
                                                <label class="col btn btn-lg  btn-bg-light btn-color-gray-600 btn-active-light-primary   py-5 px-4 m-2 min-w-125px" for="kt_form_options_{{$cat->id}}">
                                                    <span class="svg-icon svg-icon-2x me-1">
                                                        <img src="{{ asset($cat->icons) }}" style="width:100%">
                                                    </span>
                                                    <span class="text-gray-800 fw-bold">{{ $cat->title }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <h3 class="fw-bold fs-3 text-dark mb-5">ამოირჩიეთ სქესი *</h3>
                                        <div class="row" data-kt-buttons="true">
                                            <input type="radio" class="btn-check" name="gender"  value="1" id="kt_form_options_5" />
                                            <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-125px" for="kt_form_options_5">
                                                <span class="svg-icon svg-icon-2x me-1">
                                                </span>
                                                <span class="text-gray-800 fw-bold">ბიჭი</span>
                                            </label>
                                            <input type="radio" class="btn-check" name="gender" value="1" id="kt_form_options_6" />
                                            <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-125px" for="kt_form_options_6">
                                                <span class="svg-icon svg-icon-2x me-1">
                                                </span>
                                                <span class="text-gray-800 fw-bold">გოგო</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <h3 class="fw-bold fs-3 text-dark mb-5">მიუთითეთ ასაკი *</h3>
                                        <div class="row" data-kt-buttons="true">
                                            @foreach ($ages as $age)
                                                {{-- expr --}}
                                            <input type="radio" class="btn-check" name="age" required="" value="{{ $age->id }}" id="kt_form_fleet_{{ $age->id }}" />
                                            <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-90px" for="kt_form_fleet_{{ $age->id }}">
                                                <span class="text-gray-800 fw-bold">{{ $age->lable }}</span>
                                            </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <button  class="btn btn-primary px-11 py-4 fw-bolder fs-3">რეგისტრაცია</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("js")
<script src="/start/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/start/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="/start/assets/plugins/custom/leaflet/leaflet.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="/start/assets/js/custom/widgets.js"></script>
    <script src="/start/assets/js/custom/modals/create-app.js"></script>
    <script src="/start/assets/js/custom/modals/select-location.js"></script>
    <script src="/start/assets/js/custom/apps/chat/chat.js"></script>
    <script src="/start/assets/js/custom/modals/users-search.js"></script>
@endsection