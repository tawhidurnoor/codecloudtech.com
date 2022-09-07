@extends('backend.layouts.full.mainlayout')

@section('title')
    <title>Dashboard | CodeCloud Technology CMS</title>
@endsection

@section('styles')
@endsection

@section('page-title')
    Dashboard
@endsection

@section('body')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="ri-emotion-line fs-6 text-muted"></i>
                                    <p class="fs-4 mb-1">New Clients</p>
                                </div>
                                <div class="ms-auto">
                                    <h1 class="fw-light text-end">23</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%; height: 6px"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="ri-image-fill fs-6 text-muted"></i>
                                    <p class="fs-4 mb-1">New Projects</p>
                                </div>
                                <div class="ms-auto">
                                    <h1 class="fw-light text-end">169</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%; height: 6px"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="ri-money-euro-circle-line fs-6 text-muted"></i>
                                    <p class="fs-4 mb-1">New Invoices</p>
                                </div>
                                <div class="ms-auto">
                                    <h1 class="fw-light text-end">157</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 65%; height: 6px"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="ri-bar-chart-fill fs-6 text-muted"></i>
                                    <p class="fs-4 mb-1">New Sales</p>
                                </div>
                                <div class="ms-auto">
                                    <h1 class="fw-light text-end">236</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%; height: 6px"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Campaign</h4>
                        <div id="campaign" class="mt-2"></div>
                        <!-- row -->
                        <div class="row text-center text-lg-end mt-3">
                            <!-- column -->
                            <div class="col-4">
                                <h4 class="mb-0 font-weight-medium">60%</h4>
                                <span class="text-muted">Open</span>
                            </div>
                            <!-- column -->
                            <div class="col-4">
                                <h4 class="mb-0 font-weight-medium">26%</h4>
                                <span class="text-muted">Click</span>
                            </div>
                            <!-- column -->
                            <div class="col-4">
                                <h4 class="mb-0 font-weight-medium">18%</h4>
                                <span class="text-muted">Bounce</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Referral Earnings</h5>
                        <h3 class="fw-light">$769.08</h3>
                        <div class="mt-4 pt-1 text-center">
                            <div id="referral-earnings"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-lg-2 order-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Sales Ratio</h4>
                            </div>
                            <div class="ms-auto">
                                <div class="dl mb-2">
                                    <select class="form-select">
                                        <option value="0" selected="">August 2021</option>
                                        <option value="1">May 2021</option>
                                        <option value="2">March 2021</option>
                                        <option value="3">June 2021</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center no-block">
                            <div>
                                <span class="text-muted">This Week</span>
                                <h3 class="mb-0 text-info fw-light">
                                    $23.5K
                                    <span class="text-muted fs-2"><i class="ri-arrow-up-line text-success"></i>18.6</span>
                                </h3>
                            </div>
                            <div class="ms-4">
                                <span class="text-muted">Last Week</span>
                                <h3 class="mb-0 text-muted fw-light">
                                    $945
                                    <span class="text-muted fs-2"><i
                                            class="ri-arrow-down-line text-danger"></i>46.3</span>
                                </h3>
                            </div>
                        </div>
                        <div id="sales-ratio" class="mt-5"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 order-lg-3 order-md-2">
                <div class="card">
                    <div class="card-body mb-0">
                        <h4 class="card-title">
                            Thursday
                            <span class="fs-3 fw-normal text-muted">12th April, 2021</span>
                        </h4>
                        <div class="d-flex align-items-center flex-row mt-4">
                            <h1 class="fw-light">
                                <i class="wi wi-day-sleet"></i>
                                <span>35<sup>°</sup></span>
                            </h1>
                        </div>
                    </div>
                    <div id="weather-report"></div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0">Users</h4>
                        <h2 class="fw-light">
                            35,658
                            <span class="fs-4 text-success font-weight-medium">+23%</span>
                        </h2>
                        <div class="mt-4 pt-3">
                            <div class="row text-center">
                                <div class="col-6 border-end">
                                    <h4 class="mb-0">58%</h4>
                                    <span class="fs-3 text-muted">New Users</span>
                                </div>
                                <div class="col-6">
                                    <h4 class="mb-0">42%</h4>
                                    <span class="fs-3 text-muted">Repeat Users</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title mb-0">Latest Sales</h4>
                            </div>
                            <div class="ms-auto">
                                <select class="form-select">
                                    <option value="0" selected="">August 2021</option>
                                    <option value="1">May 2021</option>
                                    <option value="2">March 2021</option>
                                    <option value="3">June 2021</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row align-items-center">
                            <div class="col-xs-12 col-md-6">
                                <h3 class="mb-0 fw-light">August 2021</h3>
                                <span class="fs-3 text-muted">Sales Report</span>
                            </div>
                            <div
                                class="
                        col-xs-12 col-md-6
                        align-self-center
                        display-6
                        text-info text-end
                      ">
                                $3,690
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="border-top-0">NAME</th>
                                    <th class="border-top-0">STATUS</th>
                                    <th class="border-top-0">DATE</th>
                                    <th class="border-top-0">PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td>
                                        <span class="badge bg-success rounded-pill">SALE</span>
                                    </td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="font-weight-medium">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Real Homes WP Theme</td>
                                    <td>
                                        <span class="badge bg-info rounded-pill">EXTENDED</span>
                                    </td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="font-weight-medium">$1250</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td>
                                        <span class="badge bg-purple rounded-pill">Tax</span>
                                    </td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="font-weight-medium">$1250</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Medical Pro WP Theme</td>
                                    <td>
                                        <span class="badge bg-success rounded-pill">Sale</span>
                                    </td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="font-weight-medium">-$24</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Hosting press html</td>
                                    <td>
                                        <span class="badge bg-success rounded-pill">SALE</span>
                                    </td>
                                    <td class="txt-oflo">April 21, 2017</td>
                                    <td><span class="font-weight-medium">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Digital Agency PSD</td>
                                    <td>
                                        <span class="badge bg-danger rounded-pill">Tax</span>
                                    </td>
                                    <td class="txt-oflo">April 23, 2017</td>
                                    <td><span class="font-weight-medium">-$14</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title mb-0">Top Region Sales</h4>
                            </div>
                            <div class="ms-auto">
                                <div class="dl">
                                    <select class="form-select">
                                        <option value="0" selected="">August 2021</option>
                                        <option value="1">May 2021</option>
                                        <option value="2">March 2021</option>
                                        <option value="3">June 2021</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="visitfromworld" style="height: 365px"></div>
                        <!-- row -->
                        <div class="row mt-3 text-center text-lg-start">
                            <!-- column -->
                            <div class="col-xs-12 col-md-4">
                                <div class="mb-2 mt-2">
                                    <span class="badge bg-success rounded-pill">+23%</span>
                                    <h5 class="fw-normal text-muted mt-2 mb-1">
                                        United States
                                    </h5>
                                    <span class="fs-6 font-weight-medium">3234
                                        <span class="fs-3 fw-normal text-muted">($3549.54)</span></span>
                                </div>
                            </div>
                            <!-- column -->
                            <div class="col-xs-12 col-md-4">
                                <div class="mb-2 mt-2">
                                    <span class="badge bg-info rounded-pill">+0.5%</span>
                                    <h5 class="fw-normal text-muted mt-2 mb-1">Europe</h5>
                                    <span class="fs-6 font-weight-medium">2548
                                        <span class="fs-3 fw-normal text-muted">($3549.54)</span></span>
                                </div>
                            </div>
                            <!-- column -->
                            <div class="col-xs-12 col-md-4">
                                <div class="mb-2 mt-2">
                                    <span class="badge bg-danger rounded-pill">-18%</span>
                                    <h5 class="fw-normal text-muted mt-2 mb-1">
                                        Australia
                                    </h5>
                                    <span class="fs-6 font-weight-medium">1476
                                        <span class="fs-3 fw-normal text-muted">($3549.54)</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Comments</h4>
                    </div>
                    <div class="comment-widgets scrollable mb-2 common-widget" style="height: 450px">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row p-3">
                            <div class="p-2">
                                <span><img src="{{ asset('assets_backend/images/users/1.jpg') }}" class="rounded-circle"
                                        alt="user" width="50" /></span>
                            </div>
                            <div class="comment-text w-100 p-3">
                                <h5 class="text-nowrap font-weight-medium">
                                    James Anderson
                                </h5>
                                <p class="mb-1 fs-3 fw-normal text-muted">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    type setting industry.
                                </p>
                                <div class="comment-footer d-md-flex align-items-center mt-2">
                                    <span
                                        class="
                            badge
                            bg-light-info
                            text-info
                            font-weight-medium
                            py-1
                          ">Pending</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-edit-box-line fs-6"></i></a>
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-check-line fs-6"></i></a>
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-heart-line fs-6"></i></a>
                                    </span>
                                    <div class="ms-auto">
                                        <span class="text-muted fs-2">April 14, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row active p-3">
                            <div class="p-2">
                                <span
                                    class="
                          round
                          text-white
                          d-inline-block
                          text-center
                          bg-info
                        "><img
                                        src="{{ asset('assets_backend/images/users/2.jpg') }}" class="rounded-circle"
                                        alt="user" width="50" /></span>
                            </div>
                            <div class="comment-text active w-100 p-3">
                                <h5 class="text-nowrap font-weight-medium">
                                    Michael Jorden
                                </h5>
                                <p class="mb-1 fs-3 text-muted fw-normal">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    type setting industry.
                                </p>
                                <div class="comment-footer d-md-flex align-items-center mt-2">
                                    <span
                                        class="
                            badge
                            bg-light-success
                            text-success
                            font-weight-medium
                            py-1
                          ">Approved</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-edit-box-line fs-6"></i></a>
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-check-line fs-6"></i></a>
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-heart-line fs-6"></i></a>
                                    </span>
                                    <div class="ms-auto">
                                        <span class="text-muted fs-2">April 14, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row p-3">
                            <div class="p-2">
                                <span
                                    class="
                          round
                          text-white
                          d-inline-block
                          text-center
                          bg-info
                        "><img
                                        src="{{ asset('assets_backend/images/users/3.jpg') }}" class="rounded-circle"
                                        alt="user" width="50" /></span>
                            </div>
                            <div class="comment-text w-100 p-3">
                                <h5 class="text-nowrap font-weight-medium">
                                    Johnathan Doeting
                                </h5>
                                <p class="mb-1 fs-3 fw-normal text-muted">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    type setting industry.
                                </p>
                                <div class="comment-footer d-md-flex align-items-center mt-2">
                                    <span
                                        class="
                            badge
                            bg-light-danger
                            text-danger
                            font-weight-medium
                            py-1
                          ">Rejected</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-edit-box-line fs-6"></i></a>
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-check-line fs-6"></i></a>
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-heart-line fs-6"></i></a>
                                    </span>
                                    <div class="ms-auto">
                                        <span class="text-muted fs-2">April 14, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row p-3">
                            <div class="p-2">
                                <span class=""><img src="{{ asset('assets_backend/images/users/4.jpg') }}"
                                        class="rounded-circle" alt="user" width="50" /></span>
                            </div>
                            <div class="comment-text w-100 p-3">
                                <h5 class="text-nowrap font-weight-medium">
                                    James Anderson
                                </h5>
                                <p class="mb-1 fs-3 text-muted fw-normal">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    type setting industry.
                                </p>
                                <div class="comment-footer d-md-flex align-items-center mt-2">
                                    <span
                                        class="
                            badge
                            bg-light-info
                            text-info
                            font-weight-medium
                            py-1
                          ">Pending</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-edit-box-line fs-6"></i></a>
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-check-line fs-6"></i></a>
                                        <a href="javascript:void(0)" class="ps-3"><i
                                                class="ri-heart-line fs-6"></i></a>
                                    </span>
                                    <div class="ms-auto">
                                        <span class="text-muted fs-2">April 14, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-b-15">
                            <div>
                                <h4 class="card-title mb-0">To Do List</h4>
                            </div>
                            <div class="ms-auto">
                                <div class="dl">
                                    <select class="form-select">
                                        <option value="0" selected="">August 2021</option>
                                        <option value="1">May 2021</option>
                                        <option value="2">March 2021</option>
                                        <option value="3">June 2021</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="to-do-widget mt-3 common-widget scrollable" style="height: 438px">
                            <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                    <div class="form-check form-check-inline w-100">
                                        <input type="checkbox" class="form-check-input danger check-light-danger"
                                            id="inputSchedule" name="inputCheckboxesSchedule" />
                                        <label for="inputSchedule" class="form-check-label">
                                            <span>Schedule meeting with</span><span
                                                class="badge bg-danger badge-pill ms-1">Today</span>
                                        </label>
                                    </div>
                                    <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/1.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Steave" class="rounded-circle" />
                                        </li>
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/2.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Jessica" class="rounded-circle" />
                                        </li>
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/3.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Priyanka" class="rounded-circle" />
                                        </li>
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/4.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Selina" class="rounded-circle" />
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                    <div class="form-check form-check-inline w-100">
                                        <input type="checkbox" id="inputCall"
                                            class="form-check-input info check-light-info" name="inputCheckboxesCall" />
                                        <label for="inputCall" class="form-check-label">
                                            <span>Give Purchase report to</span>
                                            <span class="badge bg-info badge-pill ms-1">Yesterday</span>
                                        </label>
                                    </div>
                                    <ul class="assignedto m-0 ps-4 ms-1 mt-1">
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/3.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Priyanka" class="rounded-circle" />
                                        </li>
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/4.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Selina" class="rounded-circle" />
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                    <div class="form-check form-check-inline w-100">
                                        <input type="checkbox" id="inputBook"
                                            class="form-check-input primary check-light-primary"
                                            name="inputCheckboxesBook" />
                                        <label for="inputBook" class="form-check-label">
                                            <span>Book flight for holiday</span><span
                                                class="badge bg-primary badge-pill ms-1">1 week</span>
                                        </label>
                                    </div>
                                    <div class="fs-2 ps-3 d-inline-block ms-2">
                                        26 jun 2021
                                    </div>
                                </li>
                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                    <div class="form-check form-check-inline w-100">
                                        <input type="checkbox" id="inputForward"
                                            class="form-check-input warning check-light-warning"
                                            name="inputCheckboxesForward" />
                                        <label for="inputForward" class="form-check-label">
                                            <span>Forward all tasks</span>
                                            <span class="badge bg-warning badge-pill ms-1">2 weeks</span>
                                        </label>
                                    </div>
                                    <div class="fs-2 ps-3 d-inline-block ms-2">
                                        26 jun 2021
                                    </div>
                                </li>
                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                    <div class="form-check form-check-inline w-100">
                                        <input type="checkbox" id="inputRecieve"
                                            class="form-check-input success check-light-success"
                                            name="inputCheckboxesRecieve" />
                                        <label for="inputRecieve" class="form-check-label">
                                            <span>Recieve shipment</span><span class="badge bg-success badge-pill ms-1">2
                                                weeks</span>
                                        </label>
                                    </div>
                                    <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/1.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Steave" class="rounded-circle" />
                                        </li>
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/2.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Jessica" class="rounded-circle" />
                                        </li>
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/3.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Priyanka" class="rounded-circle" />
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                    <div class="form-check form-check-inline w-100">
                                        <input type="checkbox" class="form-check-input danger check-light-danger"
                                            id="inputSchedule" name="inputCheckboxesSchedule" />
                                        <label for="inputSchedule" class="form-check-label">
                                            <span>Schedule meeting with</span><span
                                                class="badge bg-danger badge-pill ms-1">Today</span>
                                        </label>
                                    </div>
                                    <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/1.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Steave" class="rounded-circle" />
                                        </li>
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/2.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Jessica" class="rounded-circle" />
                                        </li>
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/3.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Priyanka" class="rounded-circle" />
                                        </li>
                                        <li class="d-inline-block border-0 me-1">
                                            <img src="{{ asset('assets_backend/images/users/4.jpg') }}" alt="user"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-original-title="Selina" class="rounded-circle" />
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection

@section('scripts')
@endsection
