@extends('layouts.userdashboard')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
                    
        <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
            
            <div class="container">
                
                <div class="row g-0 g-xl-5 g-xxl-8">
                    <div class="col-xl-4">
                        
                        <div class="card bg-danger card-stretch mb-5 mb-xxl-8">
                            
                            <div class="card-body">
                                
                                <div class="d-flex align-items-center">
                                    
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-white bg-opacity-10">
                                                
                                                <span class="svg-icon svg-icon-2x svg-icon-white">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calculator" class="svg-inline--fa fa-calculator fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 0H48C22.4 0 0 22.4 0 48v416c0 25.6 22.4 48 48 48h352c25.6 0 48-22.4 48-48V48c0-25.6-22.4-48-48-48zM128 435.2c0 6.4-6.4 12.8-12.8 12.8H76.8c-6.4 0-12.8-6.4-12.8-12.8v-38.4c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v38.4zm0-128c0 6.4-6.4 12.8-12.8 12.8H76.8c-6.4 0-12.8-6.4-12.8-12.8v-38.4c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v38.4zm128 128c0 6.4-6.4 12.8-12.8 12.8h-38.4c-6.4 0-12.8-6.4-12.8-12.8v-38.4c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v38.4zm0-128c0 6.4-6.4 12.8-12.8 12.8h-38.4c-6.4 0-12.8-6.4-12.8-12.8v-38.4c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v38.4zm128 128c0 6.4-6.4 12.8-12.8 12.8h-38.4c-6.4 0-12.8-6.4-12.8-12.8V268.8c0-6.4 6.4-12.8 12.8-12.8h38.4c6.4 0 12.8 6.4 12.8 12.8v166.4zm0-256c0 6.4-6.4 12.8-12.8 12.8H76.8c-6.4 0-12.8-6.4-12.8-12.8V76.8C64 70.4 70.4 64 76.8 64h294.4c6.4 0 12.8 6.4 12.8 12.8v102.4z"></path></svg>
                                                </span>
                                        
                                        </span>
                                    </div>
                                    
                                    
                                    <div>
                                        <a href="#" class="fs-4 text-white text-hover-primary fw-bolder">მათემატიკა</a>
                                        <div class="fs-7 text-white opacity-75 fw-bold mt-1">1-2 კლასი</div>
                                    </div>
                                    
                                </div>
                                
                                
                                
                                
                                <div class="progress h-6px mt-7 bg-white bg-opacity-10">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-xl-4">
                        
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            
                            <div class="card-body">
                                
                                <div class="d-flex align-items-center">
                                    
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light-success">
                                                
                                                <span class="svg-icon svg-icon-2x svg-icon-success">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="monument" class="svg-inline--fa fa-monument fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M368 448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h352c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zm-78.86-347.26a31.97 31.97 0 0 0-9.21-19.44L203.31 4.69c-6.25-6.25-16.38-6.25-22.63 0l-76.6 76.61a31.97 31.97 0 0 0-9.21 19.44L64 416h256l-30.86-315.26zM240 307.2c0 6.4-6.4 12.8-12.8 12.8h-70.4c-6.4 0-12.8-6.4-12.8-12.8v-38.4c0-6.4 6.4-12.8 12.8-12.8h70.4c6.4 0 12.8 6.4 12.8 12.8v38.4z"></path></svg>
                                                </span>
                                        
                                        </span>
                                    </div>
                                    
                                    
                                    <div>
                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder">ისტორია</a>
                                        <div class="fs-7 text-muted fw-bold mt-1">5-6 კლასი</div>
                                    </div>
                                    
                                </div>
                                
                                
                                
                                <div class="progress h-6px bg-light-success mt-7">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-xl-4">
                        
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            
                            <div class="card-body">
                                
                                <div class="d-flex align-items-center">
                                    
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light-warning">
                                                
                                                <span class="svg-icon svg-icon-2x svg-icon-warning">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="language" class="svg-inline--fa fa-language fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M152.1 236.2c-3.5-12.1-7.8-33.2-7.8-33.2h-.5s-4.3 21.1-7.8 33.2l-11.1 37.5H163zM616 96H336v320h280c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24zm-24 120c0 6.6-5.4 12-12 12h-11.4c-6.9 23.6-21.7 47.4-42.7 69.9 8.4 6.4 17.1 12.5 26.1 18 5.5 3.4 7.3 10.5 4.1 16.2l-7.9 13.9c-3.4 5.9-10.9 7.8-16.7 4.3-12.6-7.8-24.5-16.1-35.4-24.9-10.9 8.7-22.7 17.1-35.4 24.9-5.8 3.5-13.3 1.6-16.7-4.3l-7.9-13.9c-3.2-5.6-1.4-12.8 4.2-16.2 9.3-5.7 18-11.7 26.1-18-7.9-8.4-14.9-17-21-25.7-4-5.7-2.2-13.6 3.7-17.1l6.5-3.9 7.3-4.3c5.4-3.2 12.4-1.7 16 3.4 5 7 10.8 14 17.4 20.9 13.5-14.2 23.8-28.9 30-43.2H412c-6.6 0-12-5.4-12-12v-16c0-6.6 5.4-12 12-12h64v-16c0-6.6 5.4-12 12-12h16c6.6 0 12 5.4 12 12v16h64c6.6 0 12 5.4 12 12zM0 120v272c0 13.3 10.7 24 24 24h280V96H24c-13.3 0-24 10.7-24 24zm58.9 216.1L116.4 167c1.7-4.9 6.2-8.1 11.4-8.1h32.5c5.1 0 9.7 3.3 11.4 8.1l57.5 169.1c2.6 7.8-3.1 15.9-11.4 15.9h-22.9a12 12 0 0 1-11.5-8.6l-9.4-31.9h-60.2l-9.1 31.8c-1.5 5.1-6.2 8.7-11.5 8.7H70.3c-8.2 0-14-8.1-11.4-15.9z"></path></svg>
                                                </span>
                                        
                                        </span>
                                    </div>
                                    
                                    
                                    <div>
                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder">ინგლისური</a>
                                        <div class="fs-7 text-muted fw-bold mt-1">3-4 კლასი</div>
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="progress h-6px bg-light-warning mt-7">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
                
                <div class="row g-0 g-xl-5 g-xxl-8">
                    <div class="col-xl-4">
                        
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            
                            <div class="card-header align-items-center border-0 mt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder text-dark fs-3">გადანაწილება</span>
                                    <span class="text-muted mt-2 fw-bold fs-6">890,344 Sales</span>
                                </h3>
                                <div class="card-toolbar">
                                    
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                            </span>
                                            
                                        </button>
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                            
                            
                            <div class="card-body pt-12">
                                
                                <div class="d-flex flex-center position-relative bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-center h-175px" style="background-image:url('/start/assets/media/svg/illustrations/bg-1.svg')">
                                    <div class="fw-bolder fs-1 text-gray-800 position-absolute">8,345</div>
                                    <canvas id="kt_stats_widget_1_chart"></canvas>
                                </div>
                                
                                
                                <div class="d-flex justify-content-around pt-18">
                                    
                                    <div class="">
                                        <span class="fw-bolder text-gray-800">48% SNT</span>
                                        <span class="bg-info w-25px h-5px d-block rounded mt-1"></span>
                                    </div>
                                    
                                    
                                    <div class="">
                                        <span class="fw-bolder text-gray-800">20% REX</span>
                                        <span class="bg-primary w-25px h-5px d-block rounded mt-1"></span>
                                    </div>
                                    
                                    
                                    <div class="">
                                        <span class="fw-bolder text-gray-800">32% SAP</span>
                                        <span class="bg-warning w-25px h-5px d-block rounded mt-1"></span>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-xl-8">
                        
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            
                            <div class="card-header align-items-center border-0 mt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder text-dark fs-3">Milestones</span>
                                    <span class="text-muted mt-2 fw-bold fs-6">890,344 Sales</span>
                                </h3>
                                <div class="card-toolbar">
                                    
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                            </span>
                                            
                                        </button>
                                    
                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-300px w-lg-350px p-5" data-kt-menu="true">
                                        
                                        <div class="input-group input-group-solid mb-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                        
                                                        <span class="svg-icon svg-icon-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                
                                                </span>
                                            </div>
                                            <input type="text" class="form-control ps-0" name="search" value="" placeholder="Filter reports" />
                                        </div>
                                        
                                        
                                        <ul class="nav nav-line-tabs nav-line-tabs-2x border-light fw-bold mb-5">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_dropdown_2_tab_1">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#kt_dropdown_2_tab_2">Last Week</a>
                                            </li>
                                        </ul>
                                        
                                        
                                        <div class="tab-content">
                                            
                                            <div class="tab-pane active" id="kt_dropdown_2_tab_1">
                                                <ul class="menu menu-custom menu-column menu-rounded menu-title-gray-600 menu-icon-muted menu-hover-bg-light-primary menu-active-bg-light-primary fw-bold">
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                <path d="M10.782158,15.8052934 L15.1856088,12.7952868 C15.4135806,12.6394552 15.4720618,12.3283211 15.3162302,12.1003494 C15.2814587,12.0494808 15.2375842,12.0054775 15.1868178,11.970557 L10.783367,8.94156929 C10.5558531,8.78507001 10.2445489,8.84263875 10.0880496,9.07015268 C10.0307022,9.15352258 10,9.25233045 10,9.35351969 L10,15.392514 C10,15.6686564 10.2238576,15.892514 10.5,15.892514 C10.6006894,15.892514 10.699033,15.8621141 10.782158,15.8052934 Z" fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Web &amp; App History</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M13.8,4 C13.1562,4 12.4033,4.72985286 12,5.2 C11.5967,4.72985286 10.8438,4 10.2,4 C9.0604,4 8.4,4.88887193 8.4,6.02016349 C8.4,7.27338783 9.6,8.6 12,10 C14.4,8.6 15.6,7.3 15.6,6.1 C15.6,4.96870845 14.9396,4 13.8,4 Z" fill="#000000" opacity="0.3" />
                                                                            <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Activity and Timeline</span>
                                                                <span class="menu-badge badge badge-light-danger fw-bold">new</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z" fill="#000000" />
                                                                            <path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z" fill="#000000" opacity="0.3" />
                                                                            <path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508)" />
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Business Features</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <circle fill="#000000" cx="9" cy="15" r="6" />
                                                                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Accessibility Settings</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <path d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z M12,21 C8.13400675,21 5,17.8659932 5,14 C5,11.4226712 7.33333333,8.08933783 12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 Z" fill="#000000" fill-rule="nonzero" />
                                                                            <path d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z" fill="#000000" />
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Data &amp; Personalisation</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                                                                                <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">General Preference</span>
                                                            </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            
                                            <div class="tab-pane" id="kt_dropdown_2_tab_2">
                                                <ul class="menu menu-custom menu-column menu-rounded menu-title-gray-600 menu-icon-muted menu-hover-bg-light-primary menu-active-bg-light-primary fw-bold">
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link active px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M13.8,4 C13.1562,4 12.4033,4.72985286 12,5.2 C11.5967,4.72985286 10.8438,4 10.2,4 C9.0604,4 8.4,4.88887193 8.4,6.02016349 C8.4,7.27338783 9.6,8.6 12,10 C14.4,8.6 15.6,7.3 15.6,6.1 C15.6,4.96870845 14.9396,4 13.8,4 Z" fill="#000000" opacity="0.3" />
                                                                            <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Activity and Timeline</span>
                                                                <span class="menu-badge badge badge-danger fw-bold">new</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z" fill="#000000" />
                                                                            <path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z" fill="#000000" opacity="0.3" />
                                                                            <path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508)" />
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Business Features</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <circle fill="#000000" cx="9" cy="15" r="6" />
                                                                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Accessibility Settings</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <path d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z M12,21 C8.13400675,21 5,17.8659932 5,14 C5,11.4226712 7.33333333,8.08933783 12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 Z" fill="#000000" fill-rule="nonzero" />
                                                                            <path d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z" fill="#000000" />
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Data &amp; Personalisation</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                                                                                <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">General Preference</span>
                                                            </a>
                                                    </li>
                                                    <li class="menu-item py-1">
                                                        <a href="#" class="menu-link px-3">
                                                                <span class="menu-icon">
                                                                    
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                <path d="M10.782158,15.8052934 L15.1856088,12.7952868 C15.4135806,12.6394552 15.4720618,12.3283211 15.3162302,12.1003494 C15.2814587,12.0494808 15.2375842,12.0054775 15.1868178,11.970557 L10.783367,8.94156929 C10.5558531,8.78507001 10.2445489,8.84263875 10.0880496,9.07015268 C10.0307022,9.15352258 10,9.25233045 10,9.35351969 L10,15.392514 C10,15.6686564 10.2238576,15.892514 10.5,15.892514 C10.6006894,15.892514 10.699033,15.8621141 10.782158,15.8052934 Z" fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    
                                                                </span>
                                                                <span class="menu-title">Web &amp; App History</span>
                                                            </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            
                            
                            <div class="card-body pt-0">
                                <div class="d-flex flex-wrap flex-xxl-nowrap justify-content-center justify-content-md-start pt-4">
                                    
                                    <div class="me-sm-10 me-0">
                                        <ul class="nav flex-column nav-pills nav-pills-custom">
                                            <li class="nav-item mb-3">
                                                <a class="nav-link active w-225px h-70px" data-bs-toggle="pill" id="kt_stats_widget_2_tab_1" href="#kt_stats_widget_2_tab_1_content">
                                                    <div class="nav-icon me-3">
                                                        <img alt="" src="/start/assets/media/svg/logo/gray/aven.svg" class="default" />
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/aven.svg" class="active" />
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
                                                        <img alt="" src="/start/assets/media/svg/logo/gray/tower.svg" class="default" />
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/tower.svg" class="active" />
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
                                                        <img alt="" src="/start/assets/media/svg/logo/gray/fox-hub-2.svg" class="default" />
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/fox-hub-2.svg" class="active" />
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
                                                        <img alt="" src="/start/assets/media/svg/logo/gray/kanba.svg" class="default" />
                                                        <img alt="" src="/start/assets/media/svg/logo/colored/kanba.svg" class="active" />
                                                    </div>
                                                    <div class="ps-1">
                                                        <span class="nav-text text-gray-600 fw-bolder fs-6">ინგლისური</span>
                                                        <span class="text-muted fw-bold d-block pt-1">3-4 კლასი</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    
                                    <div class="tab-content flex-grow-1">
                                        
                                        <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1_content">
                                            
                                            <div class="d-flex justify-content-center mb-10">
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Sale</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">$650</span>
                                                </div>
                                                
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Commission</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">$2,040</span>
                                                </div>
                                                
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Refers</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">8,926</span>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            <div id="kt_stats_widget_2_chart_1" style="height: 250px"></div>
                                            
                                        </div>
                                        
                                        
                                        <div class="tab-pane fade" id="kt_stats_widget_2_tab_2_content">
                                            
                                            <div class="d-flex justify-content-center mb-10">
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Sale</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">$1250</span>
                                                </div>
                                                
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Commission</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">$5,000</span>
                                                </div>
                                                
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Refers</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">4,926</span>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            <div id="kt_stats_widget_2_chart_2" style="height: 250px"></div>
                                            
                                        </div>
                                        
                                        
                                        <div class="tab-pane fade" id="kt_stats_widget_2_tab_3_content">
                                            
                                            <div class="d-flex justify-content-center mb-10">
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Sale</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">$350</span>
                                                </div>
                                                
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Comission</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">$1,200</span>
                                                </div>
                                                
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Refers</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">5,500</span>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            <div id="kt_stats_widget_2_chart_3" style="height: 250px"></div>
                                            
                                        </div>
                                        
                                        
                                        <div class="tab-pane fade" id="kt_stats_widget_2_tab_4_content">
                                            
                                            <div class="d-flex justify-content-center mb-10">
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Sale</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">$450</span>
                                                </div>
                                                
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Comission</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">$6,500</span>
                                                </div>
                                                
                                                
                                                <div class="px-10">
                                                    <span class="text-muted fw-bold fs-7">Refers</span>
                                                    <span class="text-gray-800 fw-bolder fs-3 d-block">500</span>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                            <div id="kt_stats_widget_2_chart_4" style="height: 250px"></div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
                
                <div class="row g-0 g-xl-5 g-xxl-8">
                    <div class="col-xxl-4">
                        
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            
                            <div class="card-body">
                                
                                <div class="d-flex bg-light-primary card-rounded flex-grow-1">
                                    
                                    <div class="py-10 ps-7">
                                        
                                        <div class="">
                                            <span class="text-primary d-block mb-n1">Your Storage</span>
                                            <span class="font-weight-light fs-1 text-gray-800">GB 
                                                <span class="fw-bolder fs-1 text-gray-800">7,562.00</span></span>
                                        </div>
                                        
                                        <a href="#" class="btn btn-primary btn-sm fw-bolder fs-6 ps-4 mt-6" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Boost 
                                            
                                            <span class="svg-icon svg-icon-3 me-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <rect fill="#000000" opacity="0.5" transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553)" x="10.6464466" y="5.85355339" width="2" height="14" rx="1" />
                                                        <path d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                            </span>
                                            </a>
                                    </div>
                                    
                                    
                                    <div class="position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1" style="background-image:url('/start/assets/media/misc/illustration-1.png')"></div>
                                    
                                </div>
                                
                                
                                <div class="pt-9">
                                    
                                    <div class="row">
                                        <div class="col me-n2 mb-5">
                                            <button type="button" class="btn btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active border-primary px-6 py-7 text-start w-100 min-w-150px">
                                                    
                                                    <span class="svg-icon svg-icon-2x ms-n1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path d="M10.782158,15.8052934 L15.1856088,12.7952868 C15.4135806,12.6394552 15.4720618,12.3283211 15.3162302,12.1003494 C15.2814587,12.0494808 15.2375842,12.0054775 15.1868178,11.970557 L10.783367,8.94156929 C10.5558531,8.78507001 10.2445489,8.84263875 10.0880496,9.07015268 C10.0307022,9.15352258 10,9.25233045 10,9.35351969 L10,15.392514 C10,15.6686564 10.2238576,15.892514 10.5,15.892514 C10.6006894,15.892514 10.699033,15.8621141 10.782158,15.8052934 Z" fill="#000000" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    
                                                    <span class="text-gray-800 fw-bolder fs-6 d-block pt-6">Upload File</span>
                                                </button>
                                        </div>
                                        <div class="col mb-5">
                                            <button type="button" class="btn btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active px-6 py-7 text-start w-100 min-w-150px">
                                                    
                                                    <span class="svg-icon svg-icon-2x ms-n1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                                                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                                                <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
                                                                <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    
                                                    <span class="text-gray-800 fw-bolder fs-6 d-block pt-6">Read Docs</span>
                                                </button>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col me-n2 mb-5">
                                            <button type="button" class="btn btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active px-6 py-7 text-start w-100 min-w-150px">
                                                    
                                                    <span class="text-gray-800 fw-bolder fs-6 d-block pt-6">MRC 22 XML</span>
                                                </button>
                                        </div>
                                        <div class="col mb-5">
                                            <button type="button" class="btn btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active px-6 py-7 text-start w-100 min-w-150px">
                                                    
                                                    <span class="svg-icon svg-icon-2x ms-n1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                                                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                                                <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
                                                                <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    
                                                    <span class="text-gray-800 fw-bolder fs-6 d-block pt-6">CTI Tech Specs</span>
                                                </button>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col mb-5 me-n2">
                                            <button type="button" class="btn btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active px-6 py-7 text-start w-100 min-w-150px">
                                                    
                                                    <span class="svg-icon svg-icon-2x ms-n1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(8.984240, 12.127098) rotate(-45.000000) translate(-8.984240, -12.127098)" x="7.41281179" y="10.5556689" width="3.14285714" height="3.14285714" rx="0.75" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(15.269955, 12.127098) rotate(-45.000000) translate(-15.269955, -12.127098)" x="13.6985261" y="10.5556689" width="3.14285714" height="3.14285714" rx="0.75" />
                                                                <rect fill="#000000" transform="translate(12.127098, 15.269955) rotate(-45.000000) translate(-12.127098, -15.269955)" x="10.5556689" y="13.6985261" width="3.14285714" height="3.14285714" rx="0.75" />
                                                                <rect fill="#000000" transform="translate(12.127098, 8.984240) rotate(-45.000000) translate(-12.127098, -8.984240)" x="10.5556689" y="7.41281179" width="3.14285714" height="3.14285714" rx="0.75" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    
                                                    <span class="text-gray-800 fw-bolder fs-6 d-block pt-6">Check List</span>
                                                </button>
                                        </div>
                                        <div class="col mb-5">
                                            <button type="button" class="btn btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active px-6 py-7 text-start w-100 min-w-150px">
                                                    
                                                    <span class="svg-icon svg-icon-2x ms-n1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path d="M8.63657261,15.4632487 C7.65328954,14.8436137 7,13.7480988 7,12.5 C7,10.5670034 8.56700338,9 10.5,9 C12.263236,9 13.7219407,10.3038529 13.9645556,12 L15,12 C16.1045695,12 17,12.8954305 17,14 C17,15.1045695 16.1045695,16 15,16 L10,16 C9.47310652,16 8.99380073,15.7962529 8.63657261,15.4632487 Z" fill="#000000" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    
                                                    <span class="text-gray-800 fw-bolder fs-6 d-block pt-6">Reports</span>
                                                </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-xxl-8 gy-0 gy-xxl-8">
                        
                        <div class="card card-stretch mb-5 mb-xxl-8">
                            
                            <div class="card-body">
                                
                                <div class="mb-10">
                                    <h3 class="fw-bold text-dark mb-5 fs-1">გაგვიზიარეთ ინფორმაცია მოსწავლეზე</h3>
                                    <span class="fw-bold fs-4 text-muted">ეს ინფორმაცია დაგვეხმარება შემოგთავაზოთ თქვენთვის სასურველი კურსები. </span>
                                </div>
                                
                                
                                <div class="mb-10">
                                    <h3 class="fw-bold fs-3 text-dark mb-5">ამოირჩიეთ მისწრაფებები</h3>
                                    
                                    <div class="row" data-kt-buttons="true">
                                        <input type="radio" class="btn-check" name="form-options" checked="checked" value="1" id="kt_form_options_1" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active active py-5 px-4 m-2 min-w-125px" for="kt_form_options_1">
                                                
                                                <span class="svg-icon svg-icon-2x me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M10.782158,15.8052934 L15.1856088,12.7952868 C15.4135806,12.6394552 15.4720618,12.3283211 15.3162302,12.1003494 C15.2814587,12.0494808 15.2375842,12.0054775 15.1868178,11.970557 L10.783367,8.94156929 C10.5558531,8.78507001 10.2445489,8.84263875 10.0880496,9.07015268 C10.0307022,9.15352258 10,9.25233045 10,9.35351969 L10,15.392514 C10,15.6686564 10.2238576,15.892514 10.5,15.892514 C10.6006894,15.892514 10.699033,15.8621141 10.782158,15.8052934 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                
                                                <span class="text-gray-800 fw-bold">ისტორია</span>
                                            </label>
                                        <input type="radio" class="btn-check" name="form-options" value="2" id="kt_form_options_2" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-125px" for="kt_form_options_2">
                                                
                                                <span class="svg-icon svg-icon-2x me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <path d="M16.4508979,17.4029496 L15.1784978,15.8599014 C16.324501,14.9149052 17,13.5137472 17,12 C17,10.4912085 16.3289582,9.09418404 15.1893841,8.14910121 L16.466112,6.60963188 C18.0590936,7.93073905 19,9.88958759 19,12 C19,14.1173586 18.0528606,16.0819686 16.4508979,17.4029496 Z M19.0211112,20.4681628 L17.7438102,18.929169 C19.7927036,17.2286725 21,14.7140097 21,12 C21,9.28974232 19.7960666,6.77820732 17.7520315,5.07766256 L19.031149,3.54017812 C21.5271817,5.61676443 23,8.68922234 23,12 C23,15.3153667 21.523074,18.3916375 19.0211112,20.4681628 Z M7.54910207,17.4029496 C5.94713944,16.0819686 5,14.1173586 5,12 C5,9.88958759 5.94090645,7.93073905 7.53388797,6.60963188 L8.81061588,8.14910121 C7.67104182,9.09418404 7,10.4912085 7,12 C7,13.5137472 7.67549895,14.9149052 8.82150222,15.8599014 L7.54910207,17.4029496 Z M4.9788888,20.4681628 C2.47692603,18.3916375 1,15.3153667 1,12 C1,8.68922234 2.47281829,5.61676443 4.96885102,3.54017812 L6.24796852,5.07766256 C4.20393339,6.77820732 3,9.28974232 3,12 C3,14.7140097 4.20729644,17.2286725 6.25618985,18.929169 L4.9788888,20.4681628 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M11,14.2919782 C10.1170476,13.9061998 9.5,13.0251595 9.5,12 C9.5,10.6192881 10.6192881,9.5 12,9.5 C13.3807119,9.5 14.5,10.6192881 14.5,12 C14.5,13.0251595 13.8829524,13.9061998 13,14.2919782 L13,20 C13,20.5522847 12.5522847,21 12,21 C11.4477153,21 11,20.5522847 11,20 L11,14.2919782 Z" fill="#000000" />
                                                    </svg>
                                                </span>
                                                
                                                <span class="text-gray-800 fw-bold">მათემატიკა</span>
                                            </label>
                                        <input type="radio" class="btn-check" name="form-options" value="3" id="kt_form_options_3" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-125px" for="kt_form_options_3">
                                                
                                                <span class="svg-icon svg-icon-2x me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                
                                                <span class="text-gray-800 fw-bold">ინგლისური</span>
                                            </label>
                                        <input type="radio" class="btn-check" name="form-options" value="4" id="kt_form_options_4" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-125px" for="kt_form_options_4">
                                                
                                                <span class="svg-icon svg-icon-2x me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                
                                                <span class="text-gray-800 fw-bold">ბუნება</span>
                                            </label>
                                    </div>
                                    
                                </div>
                                
                                <div class="mb-10">
                                    <h3 class="fw-bold fs-3 text-dark mb-5">ამოირჩიეთ სქესი</h3>
                                    
                                    <div class="row" data-kt-buttons="true">
                                        <input type="radio" class="btn-check" name="gender-options" value="1" id="kt_form_options_5" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-125px" for="kt_form_options_5">
                                                
                                            <span class="svg-icon svg-icon-2x me-1">
                                                
                                            </span>
                                            
                                            <span class="text-gray-800 fw-bold">ბიჭი</span>
                                        </label>
                                        <input type="radio" class="btn-check" name="gender-options" value="1" id="kt_form_options_6" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-125px" for="kt_form_options_6">
                                                
                                            <span class="svg-icon svg-icon-2x me-1">
                                                
                                            </span>
                                            
                                            <span class="text-gray-800 fw-bold">გოგო</span>
                                        </label>
                                        
                                    </div>
                                    
                                </div>
                                {{-- <div class="mb-10">
                                    <div class="d-flex justify-content-between mb-5">
                                        <label class="fw-bold fs-3 text-dark">მიუთითეთ კლასი</label>
                                        
                                    </div>
                                    <select class="form-select form-select-lg form-select-solid fw-bold fs-6 text-gray-600 h-60px" data-control="select2" data-placeholder="Choose one" data-hide-search="true">
                                            <option>I</option>
                                            <option>II</option>
                                            <option>III</option>
                                            <option>IV</option>
                                            <option>V</option>
                                            <option>VI</option>
                                            <option>VII</option>
                                            <option>VIII</option>
                                            <option>IX</option>
                                            <option>X</option>
                                            <option>XI</option>
                                            <option>XII</option>
                                        </select>
                                </div>
                                 --}}
                                
                                <div class="mb-10">
                                    <h3 class="fw-bold fs-3 text-dark mb-5">მიუთითეთ ასაკი</h3>
                                    
                                    <div class="row" data-kt-buttons="true">
                                        <input type="radio" class="btn-check" name="form-fleet" value="1" id="kt_form_fleet_1" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-90px" for="kt_form_fleet_1">
                                                <span class="text-gray-800 fw-bold">3-5</span>
                                            </label>
                                        <input type="radio" class="btn-check" name="form-fleet" checked="checked" value="2" id="kt_form_fleet_2" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active active py-5 px-4 m-2 min-w-90px" for="kt_form_fleet_2">
                                                <span class="text-gray-800 fw-bold">5-8</span>
                                            </label>
                                        <input type="radio" class="btn-check" name="form-fleet" value="3" id="kt_form_fleet_3" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-90px" for="kt_form_fleet_3">
                                                <span class="text-gray-800 fw-bold">9-12</span>
                                            </label>
                                        <input type="radio" class="btn-check" name="form-fleet" value="4" id="kt_form_fleet_4" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-90px" for="kt_form_fleet_4">
                                                <span class="text-gray-800 fw-bold">13-16</span>
                                            </label>
                                        <input type="radio" class="btn-check" name="form-fleet" value="5" id="kt_form_fleet_5" />
                                        <label class="col btn btn-lg btn-outline btn-bg-light btn-color-gray-600 btn-active-light-primary border-dashed border-active py-5 px-4 m-2 min-w-90px" for="kt_form_fleet_5">
                                                <span class="text-gray-800 fw-bold">17+</span>
                                            </label>
                                    </div>
                                    
                                </div>
                                
                                <div class="mb-10">
                                    <a href="#" class="btn btn-primary px-11 py-4 fw-bolder fs-3">რეგისტრაცია</a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
                
                
            </div>
            
        </div>
        
    </div>
@endsection