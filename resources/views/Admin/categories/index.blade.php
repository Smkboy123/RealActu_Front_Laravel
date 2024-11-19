@extends('Admin.master')
@section('title', 'Dashbord')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-6">
                <!-- Congratulations card -->
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-body text-nowrap">
                            <h5 class="card-title mb-0 flex-wrap text-nowrap">Congratulations Norris! 🎉</h5>
                            <p class="mb-2">Best seller of the month</p>
                            <h4 class="text-primary mb-0">$42.8k</h4>
                            <p class="mb-2">78% of target 🚀</p>
                            <a href="javascript:;" class="btn btn-sm btn-primary waves-effect waves-light">View Sales</a>
                        </div>
                        <img src="../assets/img/illustrations/trophy.png" class="position-absolute bottom-0 end-0 me-5 mb-5"
                            width="83" alt="view sales">
                    </div>
                </div>
                <!--/ Congratulations card -->

                <!-- Transactions -->
                <div class="col-lg-8">
                    <div class="card h-100">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title m-0 me-2">Transactions</h5>
                                <div class="dropdown">
                                    <button class="btn text-muted p-0" type="button" id="transactionID"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-more-2-line ri-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                    </div>
                                </div>
                            </div>
                            <p class="small mb-0"><span class="h6 mb-0">Total 48.5% Growth</span> 😎 this month</p>
                        </div>
                        <div class="card-body pt-lg-10">
                            <div class="row g-6">
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-primary rounded shadow-xs">
                                                <i class="ri-pie-chart-2-line ri-24px"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <p class="mb-0">Sales</p>
                                            <h5 class="mb-0">245k</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-success rounded shadow-xs">
                                                <i class="ri-group-line ri-24px"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <p class="mb-0">Customers</p>
                                            <h5 class="mb-0">12.5k</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-warning rounded shadow-xs">
                                                <i class="ri-macbook-line ri-24px"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <p class="mb-0">Product</p>
                                            <h5 class="mb-0">1.54k</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-info rounded shadow-xs">
                                                <i class="ri-money-dollar-circle-line ri-24px"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <p class="mb-0">Revenue</p>
                                            <h5 class="mb-0">$88k</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Transactions -->

                <!-- Weekly Overview Chart -->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Weekly Overview</h5>
                                <div class="dropdown">
                                    <button class="btn text-muted p-0" type="button" id="weeklyOverviewDropdown"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-more-2-line ri-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-lg-2" style="position: relative;">
                            <div id="weeklyOverviewChart" style="min-height: 200px;">
                                <div id="apexcharts4wh50agxj"
                                    class="apexcharts-canvas apexcharts4wh50agxj apexcharts-theme-light"
                                    style="width: 262px; height: 200px;"><svg id="SvgjsSvg1360" width="262"
                                        height="200" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(-16, -9)" style="background: transparent;">
                                        <g id="SvgjsG1362" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(70.31689936319987, 30)">
                                            <defs id="SvgjsDefs1361">
                                                <linearGradient id="SvgjsLinearGradient1366" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1367" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1368" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1369" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMask4wh50agxj">
                                                    <rect id="SvgjsRect1371" width="203.55208206176758" height="165"
                                                        x="-15.868981424967448" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask4wh50agxj"></clipPath>
                                                <clipPath id="nonForecastMask4wh50agxj"></clipPath>
                                                <clipPath id="gridRectMarkerMask4wh50agxj">
                                                    <rect id="SvgjsRect1372" width="175.8141192118327" height="169"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1370" width="11.45427461412218" height="165"
                                                x="108.54570986853706" y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient1366)" class="apexcharts-xcrosshairs"
                                                y2="165" filter="none" fill-opacity="0" x1="108.54570986853706"
                                                x2="108.54570986853706"></rect>
                                            <g id="SvgjsG1391" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1392" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG1410" class="apexcharts-grid">
                                                <g id="SvgjsG1411" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1413" x1="-13.868981424967448" y1="0"
                                                        x2="185.68310063680013" y2="0" stroke="#e6e5e8"
                                                        stroke-dasharray="8" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1414" x1="-13.868981424967448" y1="55"
                                                        x2="185.68310063680013" y2="55" stroke="#e6e5e8"
                                                        stroke-dasharray="8" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1415" x1="-13.868981424967448" y1="110"
                                                        x2="185.68310063680013" y2="110" stroke="#e6e5e8"
                                                        stroke-dasharray="8" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1416" x1="-13.868981424967448" y1="165"
                                                        x2="185.68310063680013" y2="165" stroke="#e6e5e8"
                                                        stroke-dasharray="8" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1412" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1418" x1="0" y1="165"
                                                    x2="171.8141192118327" y2="165" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1417" x1="0" y1="1" x2="0"
                                                    y2="165" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1373" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1374" class="apexcharts-series" rel="1"
                                                    seriesName="Sales" data:realIndex="0">
                                                    <path id="SvgjsPath1378"
                                                        d="M -5.72713730706109 157L -5.72713730706109 114.33333333333333Q -5.72713730706109 106.33333333333333 2.2728626929389097 106.33333333333333L -2.2728626929389097 106.33333333333333Q 5.72713730706109 106.33333333333333 5.72713730706109 114.33333333333333L 5.72713730706109 114.33333333333333L 5.72713730706109 157Q 5.72713730706109 165 -2.2728626929389097 165L 2.2728626929389097 165Q -5.72713730706109 165 -5.72713730706109 157z"
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask4wh50agxj)"
                                                        pathTo="M -5.72713730706109 157L -5.72713730706109 114.33333333333333Q -5.72713730706109 106.33333333333333 2.2728626929389097 106.33333333333333L -2.2728626929389097 106.33333333333333Q 5.72713730706109 106.33333333333333 5.72713730706109 114.33333333333333L 5.72713730706109 114.33333333333333L 5.72713730706109 157Q 5.72713730706109 165 -2.2728626929389097 165L 2.2728626929389097 165Q -5.72713730706109 165 -5.72713730706109 157z"
                                                        pathFrom="M -5.72713730706109 157L -5.72713730706109 157L 5.72713730706109 157L 5.72713730706109 157L 5.72713730706109 157L 5.72713730706109 157L 5.72713730706109 157L -5.72713730706109 157"
                                                        cy="106.33333333333333" cx="5.72713730706109" j="0"
                                                        val="32" barHeight="58.66666666666667"
                                                        barWidth="11.45427461412218"></path>
                                                    <path id="SvgjsPath1380"
                                                        d="M 22.90854922824436 157L 22.90854922824436 72.16666666666666Q 22.90854922824436 64.16666666666666 30.90854922824436 64.16666666666666L 26.362823842366538 64.16666666666666Q 34.36282384236654 64.16666666666666 34.36282384236654 72.16666666666666L 34.36282384236654 72.16666666666666L 34.36282384236654 157Q 34.36282384236654 165 26.362823842366538 165L 30.90854922824436 165Q 22.90854922824436 165 22.90854922824436 157z"
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask4wh50agxj)"
                                                        pathTo="M 22.90854922824436 157L 22.90854922824436 72.16666666666666Q 22.90854922824436 64.16666666666666 30.90854922824436 64.16666666666666L 26.362823842366538 64.16666666666666Q 34.36282384236654 64.16666666666666 34.36282384236654 72.16666666666666L 34.36282384236654 72.16666666666666L 34.36282384236654 157Q 34.36282384236654 165 26.362823842366538 165L 30.90854922824436 165Q 22.90854922824436 165 22.90854922824436 157z"
                                                        pathFrom="M 22.90854922824436 157L 22.90854922824436 157L 34.36282384236654 157L 34.36282384236654 157L 34.36282384236654 157L 34.36282384236654 157L 34.36282384236654 157L 22.90854922824436 157"
                                                        cy="64.16666666666666" cx="34.36282384236654" j="1"
                                                        val="55" barHeight="100.83333333333334"
                                                        barWidth="11.45427461412218"></path>
                                                    <path id="SvgjsPath1382"
                                                        d="M 51.54423576354981 157L 51.54423576354981 90.5Q 51.54423576354981 82.5 59.54423576354981 82.5L 54.99851037767199 82.5Q 62.99851037767199 82.5 62.99851037767199 90.5L 62.99851037767199 90.5L 62.99851037767199 157Q 62.99851037767199 165 54.99851037767199 165L 59.54423576354981 165Q 51.54423576354981 165 51.54423576354981 157z"
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask4wh50agxj)"
                                                        pathTo="M 51.54423576354981 157L 51.54423576354981 90.5Q 51.54423576354981 82.5 59.54423576354981 82.5L 54.99851037767199 82.5Q 62.99851037767199 82.5 62.99851037767199 90.5L 62.99851037767199 90.5L 62.99851037767199 157Q 62.99851037767199 165 54.99851037767199 165L 59.54423576354981 165Q 51.54423576354981 165 51.54423576354981 157z"
                                                        pathFrom="M 51.54423576354981 157L 51.54423576354981 157L 62.99851037767199 157L 62.99851037767199 157L 62.99851037767199 157L 62.99851037767199 157L 62.99851037767199 157L 51.54423576354981 157"
                                                        cy="82.5" cx="62.99851037767199" j="2" val="45"
                                                        barHeight="82.5" barWidth="11.45427461412218"></path>
                                                    <path id="SvgjsPath1384"
                                                        d="M 80.17992229885526 157L 80.17992229885526 35.5Q 80.17992229885526 27.5 88.17992229885526 27.5L 83.63419691297744 27.5Q 91.63419691297744 27.5 91.63419691297744 35.5L 91.63419691297744 35.5L 91.63419691297744 157Q 91.63419691297744 165 83.63419691297744 165L 88.17992229885526 165Q 80.17992229885526 165 80.17992229885526 157z"
                                                        fill="rgba(140,87,255,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask4wh50agxj)"
                                                        pathTo="M 80.17992229885526 157L 80.17992229885526 35.5Q 80.17992229885526 27.5 88.17992229885526 27.5L 83.63419691297744 27.5Q 91.63419691297744 27.5 91.63419691297744 35.5L 91.63419691297744 35.5L 91.63419691297744 157Q 91.63419691297744 165 83.63419691297744 165L 88.17992229885526 165Q 80.17992229885526 165 80.17992229885526 157z"
                                                        pathFrom="M 80.17992229885526 157L 80.17992229885526 157L 91.63419691297744 157L 91.63419691297744 157L 91.63419691297744 157L 91.63419691297744 157L 91.63419691297744 157L 80.17992229885526 157"
                                                        cy="27.5" cx="91.63419691297744" j="3" val="75"
                                                        barHeight="137.5" barWidth="11.45427461412218"></path>
                                                    <path id="SvgjsPath1386"
                                                        d="M 108.81560883416071 157L 108.81560883416071 72.16666666666666Q 108.81560883416071 64.16666666666666 116.81560883416071 64.16666666666666L 112.2698834482829 64.16666666666666Q 120.2698834482829 64.16666666666666 120.2698834482829 72.16666666666666L 120.2698834482829 72.16666666666666L 120.2698834482829 157Q 120.2698834482829 165 112.2698834482829 165L 116.81560883416071 165Q 108.81560883416071 165 108.81560883416071 157z"
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask4wh50agxj)"
                                                        pathTo="M 108.81560883416071 157L 108.81560883416071 72.16666666666666Q 108.81560883416071 64.16666666666666 116.81560883416071 64.16666666666666L 112.2698834482829 64.16666666666666Q 120.2698834482829 64.16666666666666 120.2698834482829 72.16666666666666L 120.2698834482829 72.16666666666666L 120.2698834482829 157Q 120.2698834482829 165 112.2698834482829 165L 116.81560883416071 165Q 108.81560883416071 165 108.81560883416071 157z"
                                                        pathFrom="M 108.81560883416071 157L 108.81560883416071 157L 120.2698834482829 157L 120.2698834482829 157L 120.2698834482829 157L 120.2698834482829 157L 120.2698834482829 157L 108.81560883416071 157"
                                                        cy="64.16666666666666" cx="120.2698834482829" j="4"
                                                        val="55" barHeight="100.83333333333334"
                                                        barWidth="11.45427461412218"></path>
                                                    <path id="SvgjsPath1388"
                                                        d="M 137.45129536946615 157L 137.45129536946615 108.83333333333333Q 137.45129536946615 100.83333333333333 145.45129536946615 100.83333333333333L 140.90556998358832 100.83333333333333Q 148.90556998358832 100.83333333333333 148.90556998358832 108.83333333333333L 148.90556998358832 108.83333333333333L 148.90556998358832 157Q 148.90556998358832 165 140.90556998358832 165L 145.45129536946615 165Q 137.45129536946615 165 137.45129536946615 157z"
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask4wh50agxj)"
                                                        pathTo="M 137.45129536946615 157L 137.45129536946615 108.83333333333333Q 137.45129536946615 100.83333333333333 145.45129536946615 100.83333333333333L 140.90556998358832 100.83333333333333Q 148.90556998358832 100.83333333333333 148.90556998358832 108.83333333333333L 148.90556998358832 108.83333333333333L 148.90556998358832 157Q 148.90556998358832 165 140.90556998358832 165L 145.45129536946615 165Q 137.45129536946615 165 137.45129536946615 157z"
                                                        pathFrom="M 137.45129536946615 157L 137.45129536946615 157L 148.90556998358832 157L 148.90556998358832 157L 148.90556998358832 157L 148.90556998358832 157L 148.90556998358832 157L 137.45129536946615 157"
                                                        cy="100.83333333333333" cx="148.90556998358832" j="5"
                                                        val="35" barHeight="64.16666666666667"
                                                        barWidth="11.45427461412218"></path>
                                                    <path id="SvgjsPath1390"
                                                        d="M 166.0869819047716 157L 166.0869819047716 44.66666666666666Q 166.0869819047716 36.66666666666666 174.0869819047716 36.66666666666666L 169.54125651889376 36.66666666666666Q 177.54125651889376 36.66666666666666 177.54125651889376 44.66666666666666L 177.54125651889376 44.66666666666666L 177.54125651889376 157Q 177.54125651889376 165 169.54125651889376 165L 174.0869819047716 165Q 166.0869819047716 165 166.0869819047716 157z"
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask4wh50agxj)"
                                                        pathTo="M 166.0869819047716 157L 166.0869819047716 44.66666666666666Q 166.0869819047716 36.66666666666666 174.0869819047716 36.66666666666666L 169.54125651889376 36.66666666666666Q 177.54125651889376 36.66666666666666 177.54125651889376 44.66666666666666L 177.54125651889376 44.66666666666666L 177.54125651889376 157Q 177.54125651889376 165 169.54125651889376 165L 174.0869819047716 165Q 166.0869819047716 165 166.0869819047716 157z"
                                                        pathFrom="M 166.0869819047716 157L 166.0869819047716 157L 177.54125651889376 157L 177.54125651889376 157L 177.54125651889376 157L 177.54125651889376 157L 177.54125651889376 157L 166.0869819047716 157"
                                                        cy="36.66666666666666" cx="177.54125651889376" j="6"
                                                        val="70" barHeight="128.33333333333334"
                                                        barWidth="11.45427461412218"></path>
                                                    <g id="SvgjsG1376" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1377" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1379" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1381" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1383" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1385" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1387" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1389" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1375" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1419" x1="-13.868981424967448" y1="0"
                                                x2="185.68310063680013" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1420" x1="-13.868981424967448" y1="0"
                                                x2="185.68310063680013" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1421" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1422" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1423" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1424" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1425" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <g id="SvgjsG1400" class="apexcharts-yaxis" rel="0"
                                            transform="translate(22.447917938232422, 0)">
                                            <g id="SvgjsG1401" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1402"
                                                    font-family="Inter" x="20" y="31.3" text-anchor="end"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#aba8b1" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Inter;">
                                                    <tspan id="SvgjsTspan1403">90K</tspan>
                                                    <title>90K</title>
                                                </text><text id="SvgjsText1404" font-family="Inter" x="20" y="86.3"
                                                    text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#aba8b1"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Inter;">
                                                    <tspan id="SvgjsTspan1405">60K</tspan>
                                                    <title>60K</title>
                                                </text><text id="SvgjsText1406" font-family="Inter" x="20" y="141.3"
                                                    text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#aba8b1"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Inter;">
                                                    <tspan id="SvgjsTspan1407">30K</tspan>
                                                    <title>30K</title>
                                                </text><text id="SvgjsText1408" font-family="Inter" x="20" y="196.3"
                                                    text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#aba8b1"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Inter;">
                                                    <tspan id="SvgjsTspan1409">0K</tspan>
                                                    <title>0K</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1363" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light"
                                        style="left: 74.1106px; top: 61px;">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Fri</div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-active"
                                            style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                                style="background-color: rgba(240, 242, 248, 0.85);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label">Sales: </span><span
                                                        class="apexcharts-tooltip-text-y-value">55K</span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1 mt-md-3">
                                <div class="d-flex align-items-center gap-4">
                                    <h4 class="mb-0">45%</h4>
                                    <p class="mb-0">Your sales performance is 45% 😎 better compared to last month</p>
                                </div>
                                <div class="d-grid mt-3 mt-md-4">
                                    <button class="btn btn-primary waves-effect waves-light"
                                        type="button">Details</button>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 303px; height: 356px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Weekly Overview Chart -->

                <!-- Total Earnings -->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Total Earning</h5>
                            <div class="dropdown">
                                <button class="btn text-muted p-0" type="button" id="totalEarnings"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-more-2-line ri-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-lg-8">
                            <div class="mb-5 mb-lg-12">
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0">$24,895</h3>
                                    <span class="text-success ms-2">
                                        <i class="ri-arrow-up-s-line"></i>
                                        <span>10%</span>
                                    </span>
                                </div>
                                <p class="mb-0">Compared to $84,325 last year</p>
                            </div>
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-6">
                                    <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                                        <img src="../assets/img/icons/misc/zipcar.png" alt="zipcar">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Zipcar</h6>
                                            <p class="mb-0">Vuejs, React &amp; HTML</p>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">$24,895.65</h6>
                                            <div class="progress bg-label-primary" style="height: 4px">
                                                <div class="progress-bar bg-primary" style="width: 75%"
                                                    role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-6">
                                    <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                                        <img src="../assets/img/icons/misc/bitbank.png" alt="bitbank">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Bitbank</h6>
                                            <p class="mb-0">Sketch, Figma &amp; XD</p>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">$8,6500.20</h6>
                                            <div class="progress bg-label-info" style="height: 4px">
                                                <div class="progress-bar bg-info" style="width: 75%" role="progressbar"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                                        <img src="../assets/img/icons/misc/aviato.png" alt="aviato">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Aviato</h6>
                                            <p class="mb-0">HTML &amp; Angular</p>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">$1,2450.80</h6>
                                            <div class="progress bg-label-secondary" style="height: 4px">
                                                <div class="progress-bar bg-secondary" style="width: 75%"
                                                    role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Total Earnings -->

                <!-- Four Cards -->
                <div class="col-xl-4 col-md-6">
                    <div class="row gy-6">
                        <!-- Total Profit line chart -->
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <div class="card-header pb-0">
                                    <h4 class="mb-0">$86.4k</h4>
                                </div>
                                <div class="card-body" style="position: relative;">
                                    <div id="totalProfitLineChart" class="mb-3" style="min-height: 80px;">
                                        <div id="apexcharts81jhgukn"
                                            class="apexcharts-canvas apexcharts81jhgukn apexcharts-theme-light"
                                            style="width: 99px; height: 80px;"><svg id="SvgjsSvg1426" width="99"
                                                height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1428" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(3, 15)">
                                                    <defs id="SvgjsDefs1427">
                                                        <clipPath id="gridRectMask81jhgukn">
                                                            <rect id="SvgjsRect1433" width="94" height="68"
                                                                x="-3.5" y="-1.5" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask81jhgukn"></clipPath>
                                                        <clipPath id="nonForecastMask81jhgukn"></clipPath>
                                                        <clipPath id="gridRectMarkerMask81jhgukn">
                                                            <rect id="SvgjsRect1434" width="115" height="93"
                                                                x="-14" y="-14" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1432" x1="0" y1="0"
                                                        x2="0" y2="65" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="65" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG1451" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1452" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1461" class="apexcharts-grid">
                                                        <g id="SvgjsG1462" class="apexcharts-gridlines-horizontal"></g>
                                                        <g id="SvgjsG1463" class="apexcharts-gridlines-vertical">
                                                            <line id="SvgjsLine1464" x1="0" y1="0"
                                                                x2="0" y2="65" stroke="#aba8b1"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1465" x1="17.4" y1="0"
                                                                x2="17.4" y2="65" stroke="#aba8b1"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1466" x1="34.8" y1="0"
                                                                x2="34.8" y2="65" stroke="#aba8b1"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1467" x1="52.199999999999996"
                                                                y1="0" x2="52.199999999999996" y2="65"
                                                                stroke="#aba8b1" stroke-dasharray="6"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1468" x1="69.6" y1="0"
                                                                x2="69.6" y2="65" stroke="#aba8b1"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1469" x1="87" y1="0"
                                                                x2="87" y2="65" stroke="#aba8b1"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <line id="SvgjsLine1471" x1="0" y1="65"
                                                            x2="87" y2="65" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1470" x1="0" y1="1"
                                                            x2="0" y2="65" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1435"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1436" class="apexcharts-series"
                                                            seriesName="seriesx1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1450"
                                                                d="M 0 65L 17.4 39L 34.8 58.5L 52.2 26L 69.6 45.5L 87 6.5"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(140,87,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="3"
                                                                stroke-dasharray="0" class="apexcharts-line"
                                                                index="0" clip-path="url(#gridRectMask81jhgukn)"
                                                                pathTo="M 0 65L 17.4 39L 34.8 58.5L 52.2 26L 69.6 45.5L 87 6.5"
                                                                pathFrom="M -1 65L -1 65L 17.4 65L 34.8 65L 52.2 65L 69.6 65L 87 65">
                                                            </path>
                                                            <g id="SvgjsG1437" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g id="SvgjsG1439" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask81jhgukn)">
                                                                    <circle id="SvgjsCircle1440" r="6" cx="0"
                                                                        cy="65"
                                                                        class="apexcharts-marker no-pointer-events wj36098b7"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="0" j="0"
                                                                        index="0" default-marker-size="6"></circle>
                                                                    <circle id="SvgjsCircle1441" r="6" cx="17.4"
                                                                        cy="39"
                                                                        class="apexcharts-marker no-pointer-events w4a52se8i"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="1" j="1"
                                                                        index="0" default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1442" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask81jhgukn)">
                                                                    <circle id="SvgjsCircle1443" r="6" cx="34.8"
                                                                        cy="58.5"
                                                                        class="apexcharts-marker no-pointer-events wfu0x1kq9"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="2" j="2"
                                                                        index="0" default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1444" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask81jhgukn)">
                                                                    <circle id="SvgjsCircle1445" r="6" cx="52.2"
                                                                        cy="26"
                                                                        class="apexcharts-marker no-pointer-events wacun4oqf"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="3" j="3"
                                                                        index="0" default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1446" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask81jhgukn)">
                                                                    <circle id="SvgjsCircle1447" r="6" cx="69.6"
                                                                        cy="45.5"
                                                                        class="apexcharts-marker no-pointer-events w9o541kx4"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="4" j="4"
                                                                        index="0" default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1448" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask81jhgukn)">
                                                                    <circle id="SvgjsCircle1449" r="6" cx="87"
                                                                        cy="6.5"
                                                                        class="apexcharts-marker no-pointer-events wfjvfvtpl"
                                                                        stroke="#8c57ff" fill="#ffffff" fill-opacity="1"
                                                                        stroke-width="3" stroke-opacity="0.9"
                                                                        rel="5" j="5" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1438" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1472" x1="0" y1="0"
                                                        x2="87" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1473" x1="0" y1="0"
                                                        x2="87" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1474" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1475" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1476" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1477" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect1478" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <rect id="SvgjsRect1431" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1459" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-8, 0)">
                                                    <g id="SvgjsG1460" class="apexcharts-yaxis-texts-g"></g>
                                                </g>
                                                <g id="SvgjsG1429" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        </div>
                                    </div>
                                    <h6 class="text-center mb-0">Total Profit</h6>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 140px; height: 152px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Total Profit line chart -->
                        <!-- Total Profit Weekly Project -->
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-secondary rounded-circle shadow-xs">
                                            <i class="ri-pie-chart-2-line ri-24px"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn text-muted p-0" type="button" id="totalProfitID"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-line ri-24px"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-1">Total Profit</h6>
                                    <div class="d-flex flex-wrap mb-1 align-items-center">
                                        <h4 class="mb-0 me-2">$25.6k</h4>
                                        <p class="text-success mb-0">+42%</p>
                                    </div>
                                    <small>Weekly Project</small>
                                </div>
                            </div>
                        </div>
                        <!--/ Total Profit Weekly Project -->
                        <!-- New Yearly Project -->
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-primary rounded-circle shadow-xs">
                                            <i class="ri-file-word-2-line ri-24px"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn text-muted p-0" type="button" id="newProjectID"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-line ri-24px"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-1">New Project</h6>
                                    <div class="d-flex flex-wrap mb-1 align-items-center">
                                        <h4 class="mb-0 me-2">862</h4>
                                        <p class="text-danger mb-0">-18%</p>
                                    </div>
                                    <small>Yearly Project</small>
                                </div>
                            </div>
                        </div>
                        <!--/ New Yearly Project -->
                        <!-- Sessions chart -->
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <div class="card-header pb-0">
                                    <h4 class="mb-0">2,856</h4>
                                </div>
                                <div class="card-body" style="position: relative;">
                                    <div id="sessionsColumnChart" class="mb-3" style="min-height: 80px;">
                                        <div id="apexcharts2lzfuy81"
                                            class="apexcharts-canvas apexcharts2lzfuy81 apexcharts-theme-light"
                                            style="width: 99px; height: 80px;"><svg id="SvgjsSvg1479" width="99"
                                                height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1481" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(14.933333333333334, 20)">
                                                    <defs id="SvgjsDefs1480">
                                                        <linearGradient id="SvgjsLinearGradient1484" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1485" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1486" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop1487" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMask2lzfuy81">
                                                            <rect id="SvgjsRect1489" width="93" height="60"
                                                                x="-12.933333333333334" y="0" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask2lzfuy81"></clipPath>
                                                        <clipPath id="nonForecastMask2lzfuy81"></clipPath>
                                                        <clipPath id="gridRectMarkerMask2lzfuy81">
                                                            <rect id="SvgjsRect1490" width="71.13333333333333"
                                                                height="64" x="-2" y="-2" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect1488" width="0" height="60" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke-dasharray="3"
                                                        fill="url(#SvgjsLinearGradient1484)"
                                                        class="apexcharts-xcrosshairs" y2="60" filter="none"
                                                        fill-opacity="0.9"></rect>
                                                    <g id="SvgjsG1510" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1511" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1520" class="apexcharts-grid">
                                                        <g id="SvgjsG1521" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1523" x1="-10.933333333333334"
                                                                y1="0" x2="78.06666666666666" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1524" x1="-10.933333333333334"
                                                                y1="15" x2="78.06666666666666" y2="15"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1525" x1="-10.933333333333334"
                                                                y1="30" x2="78.06666666666666" y2="30"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1526" x1="-10.933333333333334"
                                                                y1="45" x2="78.06666666666666" y2="45"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1527" x1="-10.933333333333334"
                                                                y1="60" x2="78.06666666666666" y2="60"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1522" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1529" x1="0" y1="60"
                                                            x2="67.13333333333333" y2="60" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1528" x1="0" y1="1"
                                                            x2="0" y2="60" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1491"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1492" class="apexcharts-series" rel="1"
                                                            seriesName="seriesx1" data:realIndex="0">
                                                            <rect id="SvgjsRect1495" width="6.713333333333333"
                                                                height="60" x="-3.3566666666666665" y="0"
                                                                rx="4" ry="4" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1497"
                                                                d="M -3.3566666666666665 56L -3.3566666666666665 41.5Q -3.3566666666666665 37.5 0.6433333333333335 37.5L -0.6433333333333335 37.5Q 3.3566666666666665 37.5 3.3566666666666665 41.5L 3.3566666666666665 41.5L 3.3566666666666665 56Q 3.3566666666666665 60 -0.6433333333333335 60L 0.6433333333333335 60Q -3.3566666666666665 60 -3.3566666666666665 56z"
                                                                fill="rgba(255,76,81,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask2lzfuy81)"
                                                                pathTo="M -3.3566666666666665 56L -3.3566666666666665 41.5Q -3.3566666666666665 37.5 0.6433333333333335 37.5L -0.6433333333333335 37.5Q 3.3566666666666665 37.5 3.3566666666666665 41.5L 3.3566666666666665 41.5L 3.3566666666666665 56Q 3.3566666666666665 60 -0.6433333333333335 60L 0.6433333333333335 60Q -3.3566666666666665 60 -3.3566666666666665 56z"
                                                                pathFrom="M -3.3566666666666665 56L -3.3566666666666665 56L 3.3566666666666665 56L 3.3566666666666665 56L 3.3566666666666665 56L 3.3566666666666665 56L 3.3566666666666665 56L -3.3566666666666665 56"
                                                                cy="37.5" cx="3.3566666666666665" j="0"
                                                                val="30" barHeight="22.5"
                                                                barWidth="6.713333333333333"></path>
                                                            <rect id="SvgjsRect1498" width="6.713333333333333"
                                                                height="60" x="13.426666666666666" y="0"
                                                                rx="4" ry="4" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1500"
                                                                d="M 13.426666666666666 56L 13.426666666666666 11.5Q 13.426666666666666 7.5 17.426666666666666 7.5L 16.14 7.5Q 20.14 7.5 20.14 11.5L 20.14 11.5L 20.14 56Q 20.14 60 16.14 60L 17.426666666666666 60Q 13.426666666666666 60 13.426666666666666 56z"
                                                                fill="rgba(140,87,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask2lzfuy81)"
                                                                pathTo="M 13.426666666666666 56L 13.426666666666666 11.5Q 13.426666666666666 7.5 17.426666666666666 7.5L 16.14 7.5Q 20.14 7.5 20.14 11.5L 20.14 11.5L 20.14 56Q 20.14 60 16.14 60L 17.426666666666666 60Q 13.426666666666666 60 13.426666666666666 56z"
                                                                pathFrom="M 13.426666666666666 56L 13.426666666666666 56L 20.14 56L 20.14 56L 20.14 56L 20.14 56L 20.14 56L 13.426666666666666 56"
                                                                cy="7.5" cx="20.14" j="1" val="70"
                                                                barHeight="52.5" barWidth="6.713333333333333"></path>
                                                            <rect id="SvgjsRect1501" width="6.713333333333333"
                                                                height="60" x="30.209999999999997" y="0"
                                                                rx="4" ry="4" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1503"
                                                                d="M 30.209999999999997 56L 30.209999999999997 26.5Q 30.209999999999997 22.5 34.209999999999994 22.5L 32.92333333333333 22.5Q 36.92333333333333 22.5 36.92333333333333 26.5L 36.92333333333333 26.5L 36.92333333333333 56Q 36.92333333333333 60 32.92333333333333 60L 34.209999999999994 60Q 30.209999999999997 60 30.209999999999997 56z"
                                                                fill="rgba(255,76,81,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask2lzfuy81)"
                                                                pathTo="M 30.209999999999997 56L 30.209999999999997 26.5Q 30.209999999999997 22.5 34.209999999999994 22.5L 32.92333333333333 22.5Q 36.92333333333333 22.5 36.92333333333333 26.5L 36.92333333333333 26.5L 36.92333333333333 56Q 36.92333333333333 60 32.92333333333333 60L 34.209999999999994 60Q 30.209999999999997 60 30.209999999999997 56z"
                                                                pathFrom="M 30.209999999999997 56L 30.209999999999997 56L 36.92333333333333 56L 36.92333333333333 56L 36.92333333333333 56L 36.92333333333333 56L 36.92333333333333 56L 30.209999999999997 56"
                                                                cy="22.5" cx="36.92333333333333" j="2"
                                                                val="50" barHeight="37.5"
                                                                barWidth="6.713333333333333"></path>
                                                            <rect id="SvgjsRect1504" width="6.713333333333333"
                                                                height="60" x="46.993333333333325" y="0"
                                                                rx="4" ry="4" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1506"
                                                                d="M 46.993333333333325 56L 46.993333333333325 34Q 46.993333333333325 30 50.993333333333325 30L 49.706666666666656 30Q 53.706666666666656 30 53.706666666666656 34L 53.706666666666656 34L 53.706666666666656 56Q 53.706666666666656 60 49.706666666666656 60L 50.993333333333325 60Q 46.993333333333325 60 46.993333333333325 56z"
                                                                fill="rgba(140,87,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask2lzfuy81)"
                                                                pathTo="M 46.993333333333325 56L 46.993333333333325 34Q 46.993333333333325 30 50.993333333333325 30L 49.706666666666656 30Q 53.706666666666656 30 53.706666666666656 34L 53.706666666666656 34L 53.706666666666656 56Q 53.706666666666656 60 49.706666666666656 60L 50.993333333333325 60Q 46.993333333333325 60 46.993333333333325 56z"
                                                                pathFrom="M 46.993333333333325 56L 46.993333333333325 56L 53.706666666666656 56L 53.706666666666656 56L 53.706666666666656 56L 53.706666666666656 56L 53.706666666666656 56L 46.993333333333325 56"
                                                                cy="30" cx="53.706666666666656" j="3"
                                                                val="40" barHeight="30"
                                                                barWidth="6.713333333333333"></path>
                                                            <rect id="SvgjsRect1507" width="6.713333333333333"
                                                                height="60" x="63.77666666666666" y="0"
                                                                rx="4" ry="4" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#F0F2F8" class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1509"
                                                                d="M 63.77666666666666 56L 63.77666666666666 19Q 63.77666666666666 15 67.77666666666666 15L 66.49 15Q 70.49 15 70.49 19L 70.49 19L 70.49 56Q 70.49 60 66.49 60L 67.77666666666666 60Q 63.77666666666666 60 63.77666666666666 56z"
                                                                fill="rgba(140,87,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask2lzfuy81)"
                                                                pathTo="M 63.77666666666666 56L 63.77666666666666 19Q 63.77666666666666 15 67.77666666666666 15L 66.49 15Q 70.49 15 70.49 19L 70.49 19L 70.49 56Q 70.49 60 66.49 60L 67.77666666666666 60Q 63.77666666666666 60 63.77666666666666 56z"
                                                                pathFrom="M 63.77666666666666 56L 63.77666666666666 56L 70.49 56L 70.49 56L 70.49 56L 70.49 56L 70.49 56L 63.77666666666666 56"
                                                                cy="15" cx="70.49" j="4" val="60"
                                                                barHeight="45" barWidth="6.713333333333333"></path>
                                                            <g id="SvgjsG1494" class="apexcharts-bar-goals-markers"
                                                                style="pointer-events: none">
                                                                <g id="SvgjsG1496"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1499"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1502"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1505"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1508"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1493" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1530" x1="-10.933333333333334" y1="0"
                                                        x2="78.06666666666666" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1531" x1="-10.933333333333334" y1="0"
                                                        x2="78.06666666666666" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1532" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1533" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1534" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1535" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect1536" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <g id="SvgjsG1518" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-8, 0)">
                                                    <g id="SvgjsG1519" class="apexcharts-yaxis-texts-g"></g>
                                                </g>
                                                <g id="SvgjsG1482" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        </div>
                                    </div>
                                    <h6 class="text-center mb-0">Sessions</h6>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 140px; height: 135px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Sessions chart -->
                    </div>
                </div>
                <!--/ Total Earning -->

                <!-- Sales by Countries -->
                <div class="col-xl-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Sales by Countries</h5>
                            <div class="dropdown">
                                <button class="btn text-muted p-0" type="button" id="saleStatus"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-more-2-line ri-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleStatus">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="avatar me-4">
                                        <div class="avatar-initial bg-label-success rounded-circle">US</div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="mb-0">$8,656k</h6>
                                            <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                                            <span class="text-success">25.8%</span>
                                        </div>
                                        <p class="mb-0">United states of america</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-1">894k</h6>
                                    <small class="text-muted">Sales</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="avatar me-4">
                                        <span class="avatar-initial bg-label-danger rounded-circle">UK</span>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="mb-0">$2,415k</h6>
                                            <i class="ri-arrow-down-s-line ri-24px text-danger"></i>
                                            <span class="text-danger">6.2%</span>
                                        </div>
                                        <p class="mb-0">United Kingdom</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-1">645k</h6>
                                    <small class="text-muted">Sales</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="avatar me-4">
                                        <span class="avatar-initial bg-label-warning rounded-circle">IN</span>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="mb-0">865k</h6>
                                            <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                                            <span class="text-success"> 12.4%</span>
                                        </div>
                                        <p class="mb-0">India</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-1">148k</h6>
                                    <small class="text-muted">Sales</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="avatar me-4">
                                        <span class="avatar-initial bg-label-secondary rounded-circle">JA</span>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="mb-0">$745k</h6>
                                            <i class="ri-arrow-down-s-line ri-24px text-danger"></i>
                                            <span class="text-danger">11.9%</span>
                                        </div>
                                        <p class="mb-0">Japan</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-1">86k</h6>
                                    <small class="text-muted">Sales</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-4">
                                        <span class="avatar-initial bg-label-danger rounded-circle">KO</span>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="mb-0">$45k</h6>
                                            <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                                            <span class="text-success">16.2%</span>
                                        </div>
                                        <p class="mb-0">Korea</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-1">42k</h6>
                                    <small class="text-muted">Sales</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Sales by Countries -->

                <!-- Deposit / Withdraw -->
                <div class="col-xl-8">
                    <div class="card-group">
                        <div class="card mb-0">
                            <div class="card-body card-separator">
                                <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                                    <h5 class="m-0 me-2">Deposit</h5>
                                    <a class="fw-medium" href="javascript:void(0);">View all</a>
                                </div>
                                <div class="deposit-content pt-2">
                                    <ul class="p-0 m-0">
                                        <li class="d-flex mb-4 align-items-center pb-2">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/payments/gumroad.png" class="img-fluid"
                                                    alt="gumroad" height="30" width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Gumroad Account</h6>
                                                    <p class="mb-0">Sell UI Kit</p>
                                                </div>
                                                <h6 class="text-success mb-0">+$4,650</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center pb-2">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/payments/mastercard-2.png"
                                                    class="img-fluid" alt="mastercard" height="30"
                                                    width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Mastercard</h6>
                                                    <p class="mb-0">Wallet deposit</p>
                                                </div>
                                                <h6 class="text-success mb-0">+$92,705</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center pb-2">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/payments/stripes.png" class="img-fluid"
                                                    alt="stripes" height="30" width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Stripe Account</h6>
                                                    <p class="mb-0">iOS Application</p>
                                                </div>
                                                <h6 class="text-success mb-0">+$957</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center pb-2">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/payments/american-bank.png"
                                                    class="img-fluid" alt="american" height="30" width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">American Bank</h6>
                                                    <p class="mb-0">Bank Transfer</p>
                                                </div>
                                                <h6 class="text-success mb-0">+$6,837</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/payments/citi.png" class="img-fluid"
                                                    alt="citi" height="30" width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Bank Account</h6>
                                                    <p class="mb-0">Wallet deposit</p>
                                                </div>
                                                <h6 class="text-success mb-0">+$446</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                                    <h5 class="m-0 me-2">Withdraw</h5>
                                    <a class="fw-medium" href="javascript:void(0);">View all</a>
                                </div>
                                <div class="withdraw-content pt-2">
                                    <ul class="p-0 m-0">
                                        <li class="d-flex mb-4 align-items-center pb-2">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/brands/google.png" class="img-fluid"
                                                    alt="google" height="30" width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Google Adsense</h6>
                                                    <p class="mb-0">Paypal deposit</p>
                                                </div>
                                                <h6 class="text-danger mb-0">-$145</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center pb-2">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/brands/github.png" class="img-fluid"
                                                    alt="github" height="30" width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Github Enterprise</h6>
                                                    <p class="mb-0">Security &amp; compliance</p>
                                                </div>
                                                <h6 class="text-danger mb-0">-$1870</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center pb-2">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/brands/slack.png" class="img-fluid"
                                                    alt="slack" height="30" width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Upgrade Slack Plan</h6>
                                                    <p class="mb-0">Debit card deposit</p>
                                                </div>
                                                <h6 class="text-danger mb-0">$450</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center pb-2">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/payments/digital-ocean.png"
                                                    class="img-fluid" alt="digital" height="30" width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Digital Ocean</h6>
                                                    <p class="mb-0">Cloud Hosting</p>
                                                </div>
                                                <h6 class="text-danger mb-0">-$540</h6>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="../assets/img/icons/brands/aws.png" class="img-fluid"
                                                    alt="aws" height="30" width="30">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">AWS Account</h6>
                                                    <p class="mb-0">Choosing a Cloud Platform</p>
                                                </div>
                                                <h6 class="text-danger mb-0">-$21</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Deposit / Withdraw -->

                <!-- Data Tables -->
                <div class="col-12">
                    <div class="card overflow-hidden">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th class="text-truncate">User</th>
                                        <th class="text-truncate">Email</th>
                                        <th class="text-truncate">Role</th>
                                        <th class="text-truncate">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="../assets/img/avatars/1.png" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-truncate">Jordan Stevenson</h6>
                                                    <small class="text-truncate">@amiccoo</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">susanna.Lind57@gmail.com</td>
                                        <td class="text-truncate">
                                            <div class="d-flex align-items-center">
                                                <i class="ri-vip-crown-line ri-22px text-primary me-2"></i>
                                                <span>Admin</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="../assets/img/avatars/3.png" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                                                    <small class="text-truncate">@brossiter15</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">estelle.Bailey10@gmail.com</td>
                                        <td class="text-truncate">
                                            <div class="d-flex align-items-center">
                                                <i class="ri-edit-box-line text-warning ri-22px me-2"></i>
                                                <span>Editor</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="../assets/img/avatars/2.png" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                                                    <small class="text-truncate">@bemblinf</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">milo86@hotmail.com</td>
                                        <td class="text-truncate">
                                            <div class="d-flex align-items-center">
                                                <i class="ri-computer-line text-danger ri-22px me-2"></i>
                                                <span>Author</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-truncate">Bertha Biner</h6>
                                                    <small class="text-truncate">@bbinerh</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">lonnie35@hotmail.com</td>
                                        <td class="text-truncate">
                                            <div class="d-flex align-items-center">
                                                <i class="ri-edit-box-line text-warning ri-22px me-2"></i>
                                                <span>Editor</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="../assets/img/avatars/4.png" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-truncate">Beverlie Krabbe</h6>
                                                    <small class="text-truncate">@bkrabbe1d</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">ahmad_Collins@yahoo.com</td>
                                        <td class="text-truncate">
                                            <div class="d-flex align-items-center">
                                                <i class="ri-pie-chart-2-line ri-22px text-info me-2"></i>
                                                <span>Maintainer</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-truncate">Bradan Rosebotham</h6>
                                                    <small class="text-truncate">@brosebothamz</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">tillman.Gleason68@hotmail.com</td>
                                        <td class="text-truncate">
                                            <div class="d-flex align-items-center">
                                                <i class="ri-edit-box-line text-warning ri-22px me-2"></i>
                                                <span>Editor</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-truncate">Bree Kilday</h6>
                                                    <small class="text-truncate">@bkildayr</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">otho21@gmail.com</td>
                                        <td class="text-truncate">
                                            <div class="d-flex align-items-center">
                                                <i class="ri-user-3-line ri-22px text-success me-2"></i>
                                                <span>Subscriber</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                                    </tr>
                                    <tr class="border-transparent">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="../assets/img/avatars/1.png" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-truncate">Breena Gallemore</h6>
                                                    <small class="text-truncate">@bgallemore6</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">florencio.Little@hotmail.com</td>
                                        <td class="text-truncate">
                                            <div class="d-flex align-items-center">
                                                <i class="ri-user-3-line ri-22px text-success me-2"></i>
                                                <span>Subscriber</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-secondary rounded-pill">Inactive</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ Data Tables -->
            </div>
        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
                <div
                    class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                    <div class="text-body mb-2 mb-md-0">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>2024
                        , made with <span class="text-danger"><i class="tf-icons ri-heart-fill"></i></span> by
                        <a href="https://themeselection.com" target="_blank" class="footer-link">ThemeSelection</a>
                    </div>
                    <div class="d-none d-lg-inline-block">
                        <a href="https://themeselection.com/license/" class="footer-link me-4"
                            target="_blank">License</a>
                        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="footer-link me-4">Documentation</a>

                        <a href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free/issues"
                            target="_blank" class="footer-link">Support</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
