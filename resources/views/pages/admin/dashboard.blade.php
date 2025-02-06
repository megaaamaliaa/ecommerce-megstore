@extends('layouts.admin')

@section('title')
    Store Dashboard
@endsection

@section('content')
     <!-- page Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
        <!-- dashboard heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title"> Admin Dashboard</h2>
                <p class="dashboard-subtitle">
                This is MGStore Admin
                </p>
            </div>
        <!-- dashboard content -->
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                            Customer
                            </div>
                            <div class="dashboard-card-subtitle">
                            {{ $customer }}
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                            Revenue
                            </div>
                            <div class="dashboard-card-subtitle">
                            {{ $revenue }}
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                            Transaction
                            </div>
                            <div class="dashboard-card-subtitle">
                            {{ $transaction }}
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">Recent Transactions</h5>
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
                </div>
            </div>
        </div>
    </div>
@endsection
