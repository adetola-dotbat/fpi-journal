@extends('administration.layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    Dashboard
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Dashboard</h3>
                </div>
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                            class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-more-v"></em></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Presidential Poll
                                            Result</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group">
                                        <div class="amount">1,945</div>
                                        <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                                id="todayOrders"></canvas>
                                        </div>
                                    </div>
                                    <div class="info"><span class="change up text-danger"><em
                                                class="icon ni ni-arrow-long-up"></em>Total
                                            Votes</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Central Senatorial
                                            Result</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group">
                                        <div class="amount">2,338</div>
                                        <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                                id="todayRevenue"></canvas>
                                        </div>
                                    </div>
                                    <div class="info"><span class="change up text-danger"><em
                                                class="icon ni ni-arrow-long-up"></em>Total
                                            Votes</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">East Senatorial Result
                                        </h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group">
                                        <div class="amount">847</div>
                                        <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                                id="todayCustomers"></canvas>
                                        </div>
                                    </div>
                                    <div class="info"><span class="change up text-danger"><em
                                                class="icon ni ni-arrow-long-up"></em>Total
                                            Votes</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">West Senatorial Result
                                        </h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group">
                                        <div class="amount">23,485</div>
                                        <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                                id="todayVisitors"></canvas>
                                        </div>
                                    </div>
                                    <div class="info"><span class="change up text-danger"><em
                                                class="icon ni ni-arrow-long-up"></em>Total
                                            Votes</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8">
                    <div class="card card-full">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Recently Added Presidential Poll Results</h6>
                                </div>
                                <div class="card-tools"><a href="" class="link">Check
                                        Details</a></div>
                            </div>
                        </div>
                        <div class="nk-tb-list mt-n2">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col"><span>LGA</span>
                                </div>

                                <div class="nk-tb-col tb-col-sm">
                                    <span>WARDS</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span>POLLING UNIT</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span>REGISTERED VOTES</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span>ACCREDITED VOTED</span>
                                </div>

                                <div class="nk-tb-col tb-col-sm">
                                    <span>APC</span>
                                </div>
                                <div class="nk-tb-col tb-col-md"><span>PDP</span>
                                </div>
                                <div class="nk-tb-col"><span>LP</span></div>
                                <div class="nk-tb-col"><span class="d-none d-sm-inline">NNPP</span>
                                </div>
                                <div class="nk-tb-col"><span class="d-none d-sm-inline">OTHERS</span>
                                </div>
                            </div>

                            <div class="nk-tb-item">
                                <div class="nk-tb-col"><span class="tb-lead">result</span></div>
                                <div class="nk-tb-col"><span class="tb-lead">result</span></div>
                                <div class="nk-tb-col"><span class="tb-lead">result
                                        <div class="user-card">

                                            <div class="user-name"><span class="tb-lead">result</span>
                                            </div>
                                        </div>
                                </div>
                                <div class="nk-tb-col tb-col-md"><span class="tb-sub">result</span>
                                </div>
                                <div class="nk-tb-col"><span class="tb-sub tb-amount">result
                                    </span></div>
                                <div class="nk-tb-col"><span class="tb-sub tb-amount">result
                                    </span></div>
                                <div class="nk-tb-col"><span class="tb-sub tb-amount">result
                                    </span></div>
                                <div class="nk-tb-col"><span class="tb-sub tb-amount">result
                                    </span></div>
                                <div class="nk-tb-col"><span class="tb-sub tb-amount">result
                                    </span></div>

                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('administration/assets/js/bundle0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('administration/assets/js/scripts0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('administration/assets/js/demo-settings0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('administration/assets/js/charts/chart-ecommerce0226.js?ver=3.1.2') }}"></script>
@endpush
