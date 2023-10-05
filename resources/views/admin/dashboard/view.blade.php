<div class="row">
    <div class="col-lg-12">

        <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Microsite {{ $owner_business->url ?? '{Nama Business}' }}
                Dashboard</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
                <div class="action-btn">
                    <div class="form-group mb-0">
                        <div class="input-container icon-left position-relative">
                            <span class="input-icon icon-left">
                                <span data-feather="calendar"></span>
                            </span>
                            <input type="text" class="form-control form-control-default date-ranger"
                                name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                            <span class="input-icon icon-right">
                                <span data-feather="chevron-down"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xxl-4 col-lg-5 m-bottom-30">

        <div class="card card-overview-progress border-0">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between w-100 align-items-center">
                    <h6>Daily Overview</h6>
                    <div class="dropdown">
                        <a class="dropdown-toggle btn btn-sm" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export <span class="la la-angle-down"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card-progress">
                    <div class="card-progress__summery d-flex justify-content-between">
                        <div>
                            <strong class="color-primary">5,461</strong>
                            <span>Users Today</span>
                        </div>
                        <div>
                            <strong class="color-dark">8,085</strong>
                            <span>Expected Users</span>
                        </div>
                    </div>
                    <div class="card-progress__bar">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 78%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress-excerpt">
                            <p class="progress-upword"><strong><span class="la la-arrow-up"></span> 25%</strong> Since
                                Yesterday</p>
                            <span class="progress-total">78%</span>
                        </div>
                    </div>
                </div><!-- ends: .card-progress -->
                <div class="card-progress">
                    <div class="card-progress__summery d-flex justify-content-between">
                        <div>
                            <strong class="color-info">5,461</strong>
                            <span>Users Today</span>
                        </div>
                        <div>
                            <strong class="color-dark">8,085</strong>
                            <span>Expected Users</span>
                        </div>
                    </div>
                    <div class="card-progress__bar">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 78%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress-excerpt">
                            <p class="progress-downword"><strong><span class="la la-arrow-down"></span> 25%</strong>
                                Since Yesterday</p>
                            <span class="progress-total">25%</span>
                        </div>
                    </div>
                </div><!-- ends: .card-progress -->
            </div>
        </div><!-- ends: card-overview-progress -->

    </div>
    <div class="col-xxl-8 col-lg-7 m-bottom-30">

        <div class="card broder-0">
            <div class="card-header">
                <h6>Website Performance</h6>
                <div class="card-extra">
                    <ul class="perfomence-tab-links card-tab-links mr-3 nav-tabs nav">
                        <li>
                            <a href="#w_perfomence-week" data-toggle="tab" id="w_perfomence-week-tab" role="tab"
                                area-controls="w_perfomence" aria-selected="false">Week</a>
                        </li>
                        <li>
                            <a href="#w_perfomence-month" data-toggle="tab" id="w_perfomence-month-tab" role="tab"
                                area-controls="w_perfomence" aria-selected="false">Month</a>
                        </li>
                        <li>
                            <a class="active" href="#w_perfomence-year" data-toggle="tab" id="w_perfomence-year-tab"
                                role="tab" area-controls="w_perfomence" aria-selected="true">Year</a>
                        </li>
                    </ul>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" id="performance" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="performance">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .card-header -->
            <div class="card-body pt-0">
                <div class="tab-content perfomence-tab-wrap">
                    <div class="tab-pane fade" id="w_perfomence-week" role="tabpanel"
                        aria-labelledby="w_perfomence-week">
                        <div class="performance-stats nav-tabs nav">
                            <a href="#w_ps_user" data-toggle="tab" id="w_ps_user-tab" role="tab"
                                area-controls="w_ps_user" aria-selected="false">
                                <div class="performance-stats__up">
                                    <span>Users</span>
                                    <strong>76.2k <sub>
                                            <i class="la la-arrow-up"></i> 25%</sub>
                                    </strong>
                                </div>
                            </a>

                            <a href="#w_ps_session" data-toggle="tab" id="w_ps_session-tab" role="tab"
                                area-controls="w_ps_session" aria-selected="false">
                                <div class="performance-stats__up">
                                    <span>Sessions</span>
                                    <strong>87.6k <sub>
                                            <i class="la la-arrow-up"></i> 46%</sub>
                                    </strong>
                                </div>
                            </a>

                            <a href="#w_ps_bRate" class="active" data-toggle="tab" id="w_ps_bRate-tab"
                                role="tab" area-controls="w_ps_bRate" aria-selected="true">
                                <div class="performance-stats__down">
                                    <span>Bounce Rate</span>
                                    <strong>45% <sub>
                                            <i class="la la-arrow-down"></i> 12%</sub>
                                    </strong>
                                </div>
                            </a>

                            <a href="#w_ps_sDuration" data-toggle="tab" id="w_ps_sDuration-tab" role="tab"
                                area-controls="w_ps_sDuration" aria-selected="false">
                                <div class="performance-stats__up">
                                    <span>Session Duration</span>
                                    <strong>2m 43s <sub>
                                            <i class="la la-arrow-up"></i> 33%</sub>
                                    </strong>
                                </div>
                            </a>
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart perfomence-chart">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="w_ps_user" role="tabpanel"
                                    aria-labelledby="w_ps_user-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_U_W"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="w_ps_session" role="tabpanel"
                                    aria-labelledby="w_ps_session-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_S_W"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade active show" id="w_ps_bRate" role="tabpanel"
                                    aria-labelledby="w_ps_bRate-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_R_W"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="w_ps_sDuration" role="tabpanel"
                                    aria-labelledby="w_ps_user-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_Sd_W"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="w_perfomence-month" role="tabpanel"
                        aria-labelledby="w_perfomence-month">
                        <div class="performance-stats nav-tabs nav">
                            <a href="#m_ps_user" data-toggle="tab" id="m_ps_user-tab" role="tab"
                                area-controls="m_ps_user" aria-selected="false">
                                <div class="performance-stats__up">
                                    <span>Users</span>
                                    <strong>76.2k <sub>
                                            <i class="la la-arrow-up"></i> 25%</sub>
                                    </strong>
                                </div>
                            </a>

                            <a href="#m_ps_session" data-toggle="tab" id="m_ps_session-tab" role="tab"
                                area-controls="m_ps_session" aria-selected="false">
                                <div class="performance-stats__up">
                                    <span>Sessions</span>
                                    <strong>87.6k <sub>
                                            <i class="la la-arrow-up"></i> 46%</sub>
                                    </strong>
                                </div>
                            </a>

                            <a href="#m_ps_bRate" class="active" data-toggle="tab" id="m_ps_bRate-tab"
                                role="tab" area-controls="m_ps_bRate" aria-selected="true">
                                <div class="performance-stats__down">
                                    <span>Bounce Rate</span>
                                    <strong>45% <sub>
                                            <i class="la la-arrow-down"></i> 12%</sub>
                                    </strong>
                                </div>
                            </a>

                            <a href="#m_ps_sDuration" data-toggle="tab" id="m_ps_sDuration-tab" role="tab"
                                area-controls="m_ps_sDuration" aria-selected="false">
                                <div class="performance-stats__up">
                                    <span>Session Duration</span>
                                    <strong>2m 43s <sub>
                                            <i class="la la-arrow-up"></i> 33%</sub>
                                    </strong>
                                </div>
                            </a>
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart perfomence-chart">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="m_ps_user" role="tabpanel"
                                    aria-labelledby="m_ps_user-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_U_M"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="m_ps_session" role="tabpanel"
                                    aria-labelledby="m_ps_session-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_S_M"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade active show" id="m_ps_bRate" role="tabpanel"
                                    aria-labelledby="m_ps_bRate-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_R_M"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="m_ps_sDuration" role="tabpanel"
                                    aria-labelledby="m_ps_user-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_Sd_M"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade active show" id="w_perfomence-year" role="tabpanel"
                        aria-labelledby="w_perfomence-year">
                        <div class="performance-stats nav-tabs nav">
                            <a href="#y_ps_user" data-toggle="tab" id="y_ps_user-tab" role="tab"
                                area-controls="y_ps_user" aria-selected="false">
                                <div class="performance-stats__up">
                                    <span>Users</span>
                                    <strong>76.2k <sub>
                                            <i class="la la-arrow-up"></i> 25%</sub>
                                    </strong>
                                </div>
                            </a>

                            <a href="#y_ps_session" data-toggle="tab" id="y_ps_session-tab" role="tab"
                                area-controls="y_ps_session" aria-selected="false">
                                <div class="performance-stats__up">
                                    <span>Sessions</span>
                                    <strong>87.6k <sub>
                                            <i class="la la-arrow-up"></i> 46%</sub>
                                    </strong>
                                </div>
                            </a>

                            <a href="#y_ps_bRate" class="active" data-toggle="tab" id="y_ps_bRate-tab"
                                role="tab" area-controls="y_ps_bRate" aria-selected="true">
                                <div class="performance-stats__down">
                                    <span>Bounce Rate</span>
                                    <strong>45% <sub>
                                            <i class="la la-arrow-down"></i> 12%</sub>
                                    </strong>
                                </div>
                            </a>

                            <a href="#y_ps_sDuration" data-toggle="tab" id="y_ps_sDuration-tab" role="tab"
                                area-controls="y_ps_sDuration" aria-selected="false">
                                <div class="performance-stats__up">
                                    <span>Session Duration</span>
                                    <strong>2m 43s <sub>
                                            <i class="la la-arrow-up"></i> 33%</sub>
                                    </strong>
                                </div>
                            </a>
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart perfomence-chart">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="y_ps_user" role="tabpanel"
                                    aria-labelledby="y_ps_user-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_U_Y"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="y_ps_session" role="tabpanel"
                                    aria-labelledby="y_ps_session-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_S_Y"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade active show" id="y_ps_bRate" role="tabpanel"
                                    aria-labelledby="y_ps_bRate-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_R_Y"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="y_ps_sDuration" role="tabpanel"
                                    aria-labelledby="y_ps_user-tab">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="wpChart_Sd_Y"></canvas>
                                        </div>


                                    </div>
                                    <ul class="legend-static">
                                        <li class="custom-label">
                                            <span style="background-color: rgb(95, 99, 242);"></span>Current Period
                                        </li>
                                        <li class="custom-label">
                                            <span style="background-color: #C6D0DC"></span>Previous Period
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .card-body -->
        </div>

    </div>
    <div class="col-xxl-8 m-bottom-30">

        <div class="card border-0">
            <div class="card-header">
                <h6>Traffic Channels</h6>
                <div class="card-extra">
                    <ul class="card-tab-links mr-3 nav-tabs nav">
                        <li>
                            <a class="active" href="#t_channel-today" data-toggle="tab" id="t_channel-today-tab"
                                role="tab" area-controls="t_channel-table" aria-selected="true">Today</a>
                        </li>
                        <li>
                            <a href="#t_channel-week" data-toggle="tab" id="t_channel-week-tab" role="tab"
                                area-controls="t_channel-table" aria-selected="false">Week</a>
                        </li>
                        <li>
                            <a href="#t_channel-month" data-toggle="tab" id="t_channel-month-tab" role="tab"
                                area-controls="t_channel-table" aria-selected="fasle">Month</a>
                        </li>
                        <li>
                            <a href="#t_channel-year" data-toggle="tab" id="t_channel-year-tab" role="tab"
                                area-controls="t_channel-table" aria-selected="false">Year</a>
                        </li>
                    </ul>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" id="traffic" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="traffic">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="t_channel-today" role="tabpanel"
                        aria-labelledby="t_channel-today-tab">
                        <div class="table-responsive">
                            <table class="table table--default traffic-table">
                                <thead>
                                    <tr>
                                        <th>Channel</th>
                                        <th>Sessions</th>
                                        <th>Goal Conv. Rate</th>
                                        <th>Goals Completions</th>
                                        <th style="max-width: 150px">Percentage of Traffic (%)</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Direct</td>
                                        <td>3,256</td>
                                        <td>3.5%</td>
                                        <td>225</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primay" role="progressbar"
                                                    style="width: 65.75%" aria-valuenow="65.75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>65.75%</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>4,658</td>
                                        <td>1.9%</td>
                                        <td>753</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 85.14%" aria-valuenow="85.14" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>85.14%</td>
                                    </tr>
                                    <tr>
                                        <td>Organic Search</td>
                                        <td>1,698</td>
                                        <td>7.5%</td>
                                        <td>159</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 95.36%" aria-valuenow="95.36" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>95.36%</td>
                                    </tr>
                                    <tr>
                                        <td>Referral</td>
                                        <td>2,856</td>
                                        <td>4.6%</td>
                                        <td>456</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 45.25%" aria-valuenow="45.25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>45.25%</td>
                                    </tr>
                                    <tr>
                                        <td>Social Media</td>
                                        <td>9,456</td>
                                        <td>3.2%</td>
                                        <td>852</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>39.94%</td>
                                    </tr>
                                    <tr>
                                        <td>Other</td>
                                        <td>8,247</td>
                                        <td>1.2%</td>
                                        <td>321</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 60.58%" aria-valuenow="60.58" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>60.58%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="t_channel-week" role="tabpanel"
                        aria-labelledby="t_channel-week-tab">
                        <div class="table-responsive">
                            <table class="table table--default traffic-table">
                                <thead>
                                    <tr>
                                        <th>Channel</th>
                                        <th>Sessions</th>
                                        <th>Goal Conv. Rate</th>
                                        <th>Goals Completions</th>
                                        <th style="max-width: 150px">Percentage of Traffic (%)</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Direct</td>
                                        <td>5,256</td>
                                        <td>7.5%</td>
                                        <td>240</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primay" role="progressbar"
                                                    style="width: 65.75%" aria-valuenow="65.75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>66.75%</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>7,658</td>
                                        <td>8.9%</td>
                                        <td>453</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 85.14%" aria-valuenow="85.14" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>40.14%</td>
                                    </tr>
                                    <tr>
                                        <td>Organic Search</td>
                                        <td>1,398</td>
                                        <td>5.5%</td>
                                        <td>259</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 95.36%" aria-valuenow="95.36" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>55.36%</td>
                                    </tr>
                                    <tr>
                                        <td>Referral</td>
                                        <td>2,556</td>
                                        <td>6.6%</td>
                                        <td>756</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 45.25%" aria-valuenow="45.25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>40.25%</td>
                                    </tr>
                                    <tr>
                                        <td>Social Media</td>
                                        <td>8,456</td>
                                        <td>3.6%</td>
                                        <td>452</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>30.94%</td>
                                    </tr>
                                    <tr>
                                        <td>Other</td>
                                        <td>6,247</td>
                                        <td>1.8%</td>
                                        <td>321</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 60.58%" aria-valuenow="60.58" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>60.58%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="t_channel-month" role="tabpanel"
                        aria-labelledby="t_channel-month-tab">
                        <div class="table-responsive">
                            <table class="table table--default traffic-table">
                                <thead>
                                    <tr>
                                        <th>Channel</th>
                                        <th>Sessions</th>
                                        <th>Goal Conv. Rate</th>
                                        <th>Goals Completions</th>
                                        <th style="max-width: 150px">Percentage of Traffic (%)</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Direct</td>
                                        <td>6,256</td>
                                        <td>3.5%</td>
                                        <td>325</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primay" role="progressbar"
                                                    style="width: 65.75%" aria-valuenow="65.75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>65.75%</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>4,658</td>
                                        <td>1.9%</td>
                                        <td>753</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 85.14%" aria-valuenow="85.14" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>85.14%</td>
                                    </tr>
                                    <tr>
                                        <td>Organic Search</td>
                                        <td>1,698</td>
                                        <td>7.5%</td>
                                        <td>159</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 95.36%" aria-valuenow="95.36" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>95.36%</td>
                                    </tr>
                                    <tr>
                                        <td>Referral</td>
                                        <td>2,856</td>
                                        <td>4.6%</td>
                                        <td>456</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 45.25%" aria-valuenow="45.25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>45.25%</td>
                                    </tr>
                                    <tr>
                                        <td>Social Media</td>
                                        <td>9,456</td>
                                        <td>3.2%</td>
                                        <td>852</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>39.94%</td>
                                    </tr>
                                    <tr>
                                        <td>Other</td>
                                        <td>8,247</td>
                                        <td>1.2%</td>
                                        <td>321</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 60.58%" aria-valuenow="60.58" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>60.58%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="t_channel-year" role="tabpanel"
                        aria-labelledby="t_channel-year-tab">
                        <div class="table-responsive">
                            <table class="table table--default traffic-table">
                                <thead>
                                    <tr>
                                        <th>Channel</th>
                                        <th>Sessions</th>
                                        <th>Goal Conv. Rate</th>
                                        <th>Goals Completions</th>
                                        <th style="max-width: 150px">Percentage of Traffic (%)</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Direct</td>
                                        <td>7,256</td>
                                        <td>4.5%</td>
                                        <td>265</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primay" role="progressbar"
                                                    style="width: 65.75%" aria-valuenow="65.75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>65.75%</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>6,658</td>
                                        <td>4.9%</td>
                                        <td>453</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 85.14%" aria-valuenow="85.14" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>45.14%</td>
                                    </tr>
                                    <tr>
                                        <td>Organic Search</td>
                                        <td>4,698</td>
                                        <td>6.5%</td>
                                        <td>359</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 95.36%" aria-valuenow="95.36" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>95.36%</td>
                                    </tr>
                                    <tr>
                                        <td>Referral</td>
                                        <td>6,856</td>
                                        <td>4.6%</td>
                                        <td>156</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 45.25%" aria-valuenow="45.25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>45.25%</td>
                                    </tr>
                                    <tr>
                                        <td>Social Media</td>
                                        <td>9,456</td>
                                        <td>3.2%</td>
                                        <td>752</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>39.94%</td>
                                    </tr>
                                    <tr>
                                        <td>Other</td>
                                        <td>1,247</td>
                                        <td>5.2%</td>
                                        <td>421</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 60.58%" aria-valuenow="60.58" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>60.58%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xxl-4  col-lg-6 col-sm-12 m-bottom-30">
        <div class="device-chart-box">

            <div class="card broder-0">
                <div class="card-header">
                    <h6>Sessions by Device</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav">
                            <li>
                                <a href="#se_device-today" data-toggle="tab" id="se_device-today-tab" role="tab"
                                    area-controls="se_device-" aria-selected="false">Today</a>
                            </li>
                            <li>
                                <a href="#se_device-week" data-toggle="tab" id="se_device-week-tab" role="tab"
                                    area-controls="se_device-" aria-selected="false">Week</a>
                            </li>
                            <li>
                                <a class="active" href="#se_device-month" data-toggle="tab" id="se_device-month-tab"
                                    role="tab" area-controls="se_device-" aria-selected="true">Month</a>
                            </li>
                            <li>
                                <a href="#se_device-year" data-toggle="tab" id="se_device-year-tab" role="tab"
                                    area-controls="se_device-" aria-selected="false">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ends: .card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="se_device-today" role="tabpanel"
                            aria-labelledby="se_device-today-tab">
                            <div class="device-pieChart-wrap position-relative">
                                <div class="pie-chart-legend">
                                    <p>
                                        <span>173</span>Total visitors
                                    </p>
                                </div>


                                <div>
                                    <canvas id="chartDoughnut2T"></canvas>
                                </div>


                            </div>
                            <div class="session-wrap">
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-success"></span>
                                        Desktop
                                    </div>
                                    <strong>4,483</strong>
                                    <sub>45%</sub>
                                </div>
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-info"></span>
                                        Mobile
                                    </div>
                                    <strong>5870</strong>
                                    <sub>30%</sub>
                                </div>
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-warning"></span>
                                        Tablets
                                    </div>
                                    <strong>2,420</strong>
                                    <sub>25%</sub>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="se_device-month" role="tabpanel"
                            aria-labelledby="se_device-month-tab">
                            <div class="device-pieChart-wrap position-relative">
                                <div class="pie-chart-legend">
                                    <p>
                                        <span>773</span>Total visitors
                                    </p>
                                </div>


                                <div>
                                    <canvas id="chartDoughnut2"></canvas>
                                </div>


                            </div>
                            <div class="session-wrap">
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-success"></span>
                                        Desktop
                                    </div>
                                    <strong>4,483</strong>
                                    <sub>45%</sub>
                                </div>
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-info"></span>
                                        Mobile
                                    </div>
                                    <strong>5870</strong>
                                    <sub>30%</sub>
                                </div>
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-warning"></span>
                                        Tablets
                                    </div>
                                    <strong>2,420</strong>
                                    <sub>25%</sub>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="se_device-week" role="tabpanel"
                            aria-labelledby="se_device-week-tab">
                            <div class="device-pieChart-wrap position-relative">
                                <div class="pie-chart-legend">
                                    <p>
                                        <span>8773</span>Total visitors
                                    </p>
                                </div>


                                <div>
                                    <canvas id="chartDoughnut2W"></canvas>
                                </div>


                            </div>
                            <div class="session-wrap">
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-success"></span>
                                        Desktop
                                    </div>
                                    <strong>4,483</strong>
                                    <sub>45%</sub>
                                </div>
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-info"></span>
                                        Mobile
                                    </div>
                                    <strong>5870</strong>
                                    <sub>30%</sub>
                                </div>
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-warning"></span>
                                        Tablets
                                    </div>
                                    <strong>2,420</strong>
                                    <sub>25%</sub>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="se_device-year" role="tabpanel"
                            aria-labelledby="se_device-year-tab">
                            <div class="device-pieChart-wrap position-relative">
                                <div class="pie-chart-legend">
                                    <p>
                                        <span>38773</span>Total visitors
                                    </p>
                                </div>


                                <div>
                                    <canvas id="chartDoughnut2Y"></canvas>
                                </div>


                            </div>
                            <div class="session-wrap">
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-success"></span>
                                        Desktop
                                    </div>
                                    <strong>4,483</strong>
                                    <sub>45%</sub>
                                </div>
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-info"></span>
                                        Mobile
                                    </div>
                                    <strong>5870</strong>
                                    <sub>30%</sub>
                                </div>
                                <div class="session-single">
                                    <div class="chart-label">
                                        <span class="label-dot dot-warning"></span>
                                        Tablets
                                    </div>
                                    <strong>2,420</strong>
                                    <sub>25%</sub>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .session-wrap -->
                </div>
                <!-- ends: .card-body -->
            </div>

        </div>
    </div>
    <div class="col-xxl-6 col-lg-6  col-sm-12 m-bottom-30">

        <div class="card border-0">
            <div class="card-header">
                <h6>Top Landing Pages</h6>
                <div class="card-extra">
                    <ul class="card-tab-links mr-3 nav-tabs nav">
                        <li>
                            <a class="active" href="#t_landing-today" data-toggle="tab" id="t_landing-today-tab"
                                role="tab" area-controls="t_landing-table" aria-selected="true">Today</a>
                        </li>
                        <li>
                            <a href="#t_landing-week" data-toggle="tab" id="t_landing-week-tab" role="tab"
                                area-controls="t_landing-table" aria-selected="false">Week</a>
                        </li>
                        <li>
                            <a href="#t_landing-month" data-toggle="tab" id="t_landing-month-tab" role="tab"
                                area-controls="t_landing-table" aria-selected="false">Month</a>
                        </li>
                        <li>
                            <a href="#t_landing-year" data-toggle="tab" id="t_landing-year-tab" role="tab"
                                area-controls="t_landing-table" aria-selected="false">Year</a>
                        </li>
                    </ul>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" id="topPage" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topPage">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="t_landing-today" role="tabpanel"
                        aria-labelledby="t_landing-today-tab">
                        <div class="landing-pages-table table-responsive">
                            <table class="table table--default">
                                <thead>
                                    <tr>
                                        <th>Landing Pages</th>
                                        <th>Sessions</th>
                                        <th>Bounce Rate</th>
                                        <th>CTR</th>
                                        <th>Goal Conv. Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="">Home Page</a>
                                        </td>
                                        <td>457</td>
                                        <td>39.5%</td>
                                        <td>78%</td>
                                        <td>65.75%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Our Services</a>
                                        </td>
                                        <td>658</td>
                                        <td>1.9%</td>
                                        <td>85%</td>
                                        <td>85.14%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">List of Products</a>
                                        </td>
                                        <td>698</td>
                                        <td>7.5%</td>
                                        <td>73%</td>
                                        <td>95.36%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Contact Us</a>
                                        </td>
                                        <td>856</td>
                                        <td>4.6%</td>
                                        <td>65%</td>
                                        <td>45.25%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Products</a>
                                        </td>
                                        <td>456</td>
                                        <td>3.2%</td>
                                        <td>52%</td>
                                        <td>39.94%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="t_landing-month" role="tabpanel"
                        aria-labelledby="t_landing-month-tab">
                        <div class="landing-pages-table table-responsive">
                            <table class="table table--default">
                                <thead>
                                    <tr>
                                        <th>Landing Pages</th>
                                        <th>Sessions</th>
                                        <th>Bounce Rate</th>
                                        <th>CTR</th>
                                        <th>Goal Conv. Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="">Home Page</a>
                                        </td>
                                        <td>6,457</td>
                                        <td>39.5%</td>
                                        <td>78%</td>
                                        <td>65.75%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Our Services</a>
                                        </td>
                                        <td>858</td>
                                        <td>1.9%</td>
                                        <td>85%</td>
                                        <td>85.14%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">List of Products</a>
                                        </td>
                                        <td>1,698</td>
                                        <td>7.5%</td>
                                        <td>73%</td>
                                        <td>95.36%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Contact Us</a>
                                        </td>
                                        <td>2,856</td>
                                        <td>4.6%</td>
                                        <td>65%</td>
                                        <td>45.25%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Products</a>
                                        </td>
                                        <td>9,456</td>
                                        <td>3.2%</td>
                                        <td>52%</td>
                                        <td>39.94%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="t_landing-week" role="tabpanel"
                        aria-labelledby="t_landing-week-tab">
                        <div class="landing-pages-table table-responsive">
                            <table class="table table--default">
                                <thead>
                                    <tr>
                                        <th>Landing Pages</th>
                                        <th>Sessions</th>
                                        <th>Bounce Rate</th>
                                        <th>CTR</th>
                                        <th>Goal Conv. Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="">Home Page</a>
                                        </td>
                                        <td>26,457</td>
                                        <td>39.5%</td>
                                        <td>78%</td>
                                        <td>65.75%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Our Services</a>
                                        </td>
                                        <td>4,658</td>
                                        <td>1.9%</td>
                                        <td>85%</td>
                                        <td>85.14%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">List of Products</a>
                                        </td>
                                        <td>1,698</td>
                                        <td>7.5%</td>
                                        <td>73%</td>
                                        <td>95.36%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Contact Us</a>
                                        </td>
                                        <td>2,856</td>
                                        <td>4.6%</td>
                                        <td>65%</td>
                                        <td>45.25%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Products</a>
                                        </td>
                                        <td>9,456</td>
                                        <td>3.2%</td>
                                        <td>52%</td>
                                        <td>39.94%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="t_landing-year" role="tabpanel"
                        aria-labelledby="t_landing-year-tab">
                        <div class="landing-pages-table table-responsive">
                            <table class="table table--default">
                                <thead>
                                    <tr>
                                        <th>Landing Pages</th>
                                        <th>Sessions</th>
                                        <th>Bounce Rate</th>
                                        <th>CTR</th>
                                        <th>Goal Conv. Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="">Home Page</a>
                                        </td>
                                        <td>90,457</td>
                                        <td>39.5%</td>
                                        <td>78%</td>
                                        <td>65.75%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Our Services</a>
                                        </td>
                                        <td>14,658</td>
                                        <td>1.9%</td>
                                        <td>85%</td>
                                        <td>85.14%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">List of Products</a>
                                        </td>
                                        <td>13,698</td>
                                        <td>7.5%</td>
                                        <td>73%</td>
                                        <td>95.36%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Contact Us</a>
                                        </td>
                                        <td>22,856</td>
                                        <td>4.6%</td>
                                        <td>65%</td>
                                        <td>45.25%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Products</a>
                                        </td>
                                        <td>93,456</td>
                                        <td>3.2%</td>
                                        <td>52%</td>
                                        <td>39.94%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xxl-6 m-bottom-30">

        <div class="card border-0">
            <div class="card-header">
                <h6>Sessions by Region</h6>
                <div class="card-extra">
                    <ul class="card-tab-links mr-3 nav-tabs nav">
                        <li>
                            <a href="#se_region-today" class="active" data-toggle="tab" id="se_region-today-tab"
                                role="tab" area-controls="se_region-table" aria-selected="true">Today</a>
                        </li>
                        <li>
                            <a href="#se_region-week" data-toggle="tab" id="se_region-week-tab" role="tab"
                                area-controls="se_region-table" aria-selected="false">Week</a>
                        </li>
                        <li>
                            <a href="#se_region-month" data-toggle="tab" id="se_region-month-tab" role="tab"
                                area-controls="se_region-table" aria-selected="false">Month</a>
                        </li>
                        <li>
                            <a href="#se_region-year" data-toggle="tab" id="se_region-year-tab" role="tab"
                                area-controls="se_region-table" aria-selected="false">Year</a>
                        </li>
                    </ul>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" id="else" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="else">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="se_region-today" role="tabpanel"
                        aria-labelledby="se_region-today-tab">
                        <div class="row">
                            <div class="col-md-5">

                                <div class="table-responsive table-top-regions">
                                    <table class="table table--default table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Top Regions</th>
                                                <th>Sessions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>4,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>1,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>2,856</td>
                                            </tr>
                                            <tr>
                                                <td>India</td>
                                                <td>5,456</td>
                                            </tr>
                                            <tr>
                                                <td>Bangladesh</td>
                                                <td>5,796</td>
                                            </tr>
                                            <tr>
                                                <td>Brazil</td>
                                                <td>6,458</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="col-md-7 d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="s_region-map_T"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="se_region-week" role="tabpanel"
                        aria-labelledby="se_region-week-tab">
                        <div class="row">
                            <div class="col-md-5">

                                <div class="table-responsive table-top-regions">
                                    <table class="table table--default table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Top Regions</th>
                                                <th>Sessions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>4,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>1,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>2,856</td>
                                            </tr>
                                            <tr>
                                                <td>India</td>
                                                <td>5,456</td>
                                            </tr>
                                            <tr>
                                                <td>Bangladesh</td>
                                                <td>5,796</td>
                                            </tr>
                                            <tr>
                                                <td>Brazil</td>
                                                <td>6,458</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="col-md-7 d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="s_region-map_W"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="se_region-month" role="tabpanel"
                        aria-labelledby="se_region-month-tab">
                        <div class="row">
                            <div class="col-md-5">

                                <div class="table-responsive table-top-regions">
                                    <table class="table table--default table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Top Regions</th>
                                                <th>Sessions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>4,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>1,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>2,856</td>
                                            </tr>
                                            <tr>
                                                <td>India</td>
                                                <td>5,456</td>
                                            </tr>
                                            <tr>
                                                <td>Bangladesh</td>
                                                <td>5,796</td>
                                            </tr>
                                            <tr>
                                                <td>Brazil</td>
                                                <td>6,458</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="col-md-7 d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="s_region-map_M"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="se_region-year" role="tabpanel"
                        aria-labelledby="se_region-year-tab">
                        <div class="row">
                            <div class="col-md-5">

                                <div class="table-responsive table-top-regions">
                                    <table class="table table--default table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Top Regions</th>
                                                <th>Sessions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td>26,457</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>4,658</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>1,698</td>
                                            </tr>
                                            <tr>
                                                <td>Japan</td>
                                                <td>2,856</td>
                                            </tr>
                                            <tr>
                                                <td>India</td>
                                                <td>5,456</td>
                                            </tr>
                                            <tr>
                                                <td>Bangladesh</td>
                                                <td>5,796</td>
                                            </tr>
                                            <tr>
                                                <td>Brazil</td>
                                                <td>6,458</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="col-md-7 d-flex align-items-center justify-content-center">
                                <div class="regions-svg">
                                    <div id="s_region-map_Y"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="overlay" id="loaderContainer">
    <div class="loader"></div>
</div>
<input type="text" id="url" value="{{ $url }}">
<form id="formDataDashboard" enctype="multipart/form-data">
    @csrf
    @include('admin.modal.urlSemplice')
    @include('admin.modal.steps.main')
</form>
<script type="text/javascript">
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })


    $(document).ready(function() {
        $('#loaderContainer').hide();
        $('#btn-save').attr('hidden', true);
        var currentStep = 1;
        var totalSteps = 10;
        var url = $('#url').val();
        if (url == '') {
            $('#urlSempliceModal').modal('show');
        }
        // $('#urlSempliceModal').modal('hide');
        // $('#step1Modal').modal('show');
        $("#btnBack").hide();

        $("#btnNext").click(function() {
            // Mendapatkan semua input di langkah saat ini
            var currentStepInputs = $("#steps-" + currentStep + " input[required]");

            // Memeriksa apakah semua input diisi
            var isValid = true;
            currentStepInputs.each(function() {
                if ($(this).val() === "") {
                    isValid = false;
                    return false; // Keluar dari loop jika ada input kosong
                }
            });

            if (currentStep === 5) {
                var dropzoneFiles1 = myDropzone1.getAcceptedFiles();
                if (dropzoneFiles1.length === 0) {
                    isValid = false;
                }

                var dropzoneFiles2 = myDropzone2.getAcceptedFiles();
                if (dropzoneFiles2.length === 0) {
                    isValid = false;
                }

                var dropzoneFiles3 = myDropzone3.getAcceptedFiles();
                if (dropzoneFiles3.length === 0) {
                    isValid = false;
                }
            }

            if (currentStep === 8) {
                $('#btn-save').attr('hidden', false);
                $('#btnNext').attr('hidden', true);
            }

            if (isValid) {
                if (currentStep < totalSteps) {
                    currentStep++;
                    showStep(currentStep);
                }
            } else {
                // Tampilkan pesan kesalahan kepada pengguna
                Toast.fire({
                    icon: 'error',
                    title: 'Lengkapi semua input sebelum melanjutkan.'
                });
            }
        });

        $("#btnBack").click(function() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        var arrayData = [
            'Profil Singkat - Owner',
            'Tentang Bisnis',
            'Lokasi Bisnis',
            'Testimoni Bisnis',
            'Produk Bisnis',
            'Kontak Bisnis',
            'Situs Web dan Media Bisnis',
            'Marketplace Bisnis',
            'Promo / Event Bisnis',
            '',
        ];

        function showStep(step) {
            if (step > 1) {
                $("#btnBack").show();
            } else {
                $("#btnBack").hide();
            }

            if (step === totalSteps) {
                $("#btnNext").hide();
            } else {
                $("#btnNext").show();
            }
            $('#titleModal').html(arrayData[step - 1]);
            for (var i = 1; i <= totalSteps; i++) {
                if (i == step) {
                    if (i == 10) {
                        $('#step1ModalLabel').html('');
                        $('#pageId').attr('hidden', true);
                    } else {
                        $("#titlePage").html(i);
                        $('#pageId').attr('hidden', false);
                        $('#step1ModalLabel').html('Informasi Bisnis');
                    }
                    $("#steps-" + i).show();
                } else {
                    $("#steps-" + i).hide();
                    $(".atbd-steps__item").eq(i - 1).removeClass("active");
                }
            }
        }

        showStep(currentStep);
    });

    $('#btnOpenSteps1').on('click', function() {
        var urlSemplice = $('#url_semplice').val();
        clearSingleError('url_semplice');
        if (urlSemplice == '') {
            showSingleError('url_semplice', 'Url Semplice tidak boleh kosong')
            return false;
        }
        $('#urlSempliceModal').modal('hide');
        $('#step1Modal').modal('show');
    })

    $('#formDataDashboard').submit(function(e) {
        $('#step1Modal').modal('hide');
        $('#loaderContainer').show();
        $(".submit").prop('disabled', true);
        e.preventDefault();
        $('.is-invalid').each(function() {
            $('.is-invalid').removeClass('is-invalid');
        });

        var formDataDashboard = new FormData(this);

        myDropzone1.files.forEach(function(file) {
            formDataDashboard.append('file_product_1[]', file);
        });

        myDropzone2.files.forEach(function(file) {
            formDataDashboard.append('file_product_2[]', file);
        });

        myDropzone3.files.forEach(function(file) {
            formDataDashboard.append('file_product_3[]', file);
        });

        $.ajax({
            url: "{{ route('dashboard_add_data') }}",
            type: "POST",
            data: formDataDashboard,
            processData: false,
            contentType: false,
            success: function(res) {
                $('#btn-save').attr('hidden', true);
                $('#loaderContainer').hide();
                $('#step1Modal').modal('show');
                $("#btnNext").click();
            },
            error: function(res) {
                $(".submit").prop('disabled', false);
                if (res.status != 422)
                    toastr['error']("Something went wrong");
                showError(res.responseJSON.errors, "#formDataDashboard");
                $.each(res.responseJSON.errors, function(idx, item) {
                    toastr['error'](idx = item);
                });
            }
        });
        return false;
    });
</script>
