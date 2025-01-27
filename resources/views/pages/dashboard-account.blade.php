@extends('layouts.dashboard')

@section('title')
    Account Settings
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
    <!-- dashboard heading -->
    <div class="dashboard-heading">
        <h2 class="dashboard-title">My Account</h2>
        <p class="dashboard-subtitle">
        Update your current profile
        </p>
    </div>
    <!-- dashboard content store settings -->
    <div class="dashboard-content">
        <div class="row">
        <div class="col-12">
            <form action="">
            <div class="card">
                <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="name"> Your Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                        value="Mega">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="email"> Your Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                        value="mega@gmail.com">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressOne"> Address 1</label>
                        <input type="text" class="form-control" id="addressOne" name="addressOne"
                        value="Penjaringan">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressTwo"> Address 2</label>
                        <input type="text" class="form-control" id="addressTwo" name="addressTwo"
                        value="Penjaringan">
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="province"> Province</label>
                        <select class="form-control" id="province" name="province">
                        <option value="West Java">West Java</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="city">City</label>
                        <select class="form-control" id="city" name="city">
                        <option value="Bandung">Bandung</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="postalCode"> Postal Code</label>
                        <input type="text" class="form-control" id="postalCode" name="postalCode"
                        value="14440">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country"
                        value="Indonesia">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile"
                        value="+62857154325143">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-right">
                    <button type="submit" class="btn btn-success px-5">Save Now</button>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
