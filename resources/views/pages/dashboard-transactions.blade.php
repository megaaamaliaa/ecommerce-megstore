@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transactions
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
        <!-- dashboard heading -->
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Transactions</h2>
            <p class="dashboard-subtitle">
            Big result start from the small one
            </p>
        </div>
        <!-- dashboard content -->
        <div class="dashboard-content">
            <div class="row">
            <div class="col-12 mt-2">
            <!-- nanv-pills -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Sell Products</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Buy Products</button>
                </li>
                </ul>
                <!-- tab content  -->
                <div class="tab-content" id="pills-tabContent">
                <!-- tab sell product -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-1">
                            <img src="/images/dashboard-product1.png" alt="">
                        </div>
                        <div class="col-md-4">
                            Shirup Marzzan
                        </div>
                        <div class="col-md-3">
                            Mega Amalia
                        </div>
                        <div class="col-md-3">
                            12 Januari, 2024
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                            <img src="/images/dashboard-arrow-right.svg" alt="">
                        </div>
                        </div>
                    </div>
                    </a>
                    <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-1">
                            <img src="/images/dashboard-product2.png" alt="">
                        </div>
                        <div class="col-md-4">
                            Shirup Marzzan
                        </div>
                        <div class="col-md-3">
                            Mega Amalia
                        </div>
                        <div class="col-md-3">
                            12 Januari, 2024
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                            <img src="/images/dashboard-arrow-right.svg" alt="">
                        </div>
                        </div>
                    </div>
                    </a>
                    <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-1">
                            <img src="/images/dashboard-product3.png" alt="">
                        </div>
                        <div class="col-md-4">
                            Shirup Marzzan
                        </div>
                        <div class="col-md-3">
                            Mega Amalia
                        </div>
                        <div class="col-md-3">
                            12 Januari, 2024
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                            <img src="/images/dashboard-arrow-right.svg" alt="">
                        </div>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- tab buy product -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-1">
                            <img src="/images/dashboard-product3.png" alt="">
                        </div>
                        <div class="col-md-4">
                            Shirup Marzzan
                        </div>
                        <div class="col-md-3">
                            Mega Amalia
                        </div>
                        <div class="col-md-3">
                            12 Januari, 2024
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                            <img src="/images/dashboard-arrow-right.svg" alt="">
                        </div>
                        </div>
                    </div>
                    </a>
                </div>

                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
