@extends('layouts.admin')

@section('title')
    User
@endsection

@section('content')
     <!-- page Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
        <!-- dashboard heading -->
            <div class="dashboard-heading">
                <h2 class="dashboard-title">User</h2>
                <p class="dashboard-subtitle">
                Edit User
                </p>
            </div>
        <!-- dashboard content -->
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        {{-- error handling --}}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('Adminuser.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    {{-- Untuk update --}}
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Name User</label>
                                                <input type="text" name="name" class="form-control" required value="{{ $item->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Email User</label>
                                                <input type="email" name="email" class="form-control" value="{{ $item->email}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Password User</label>
                                                <input type="password" name="password" class="form-control">
                                                <small>Kosongkan jika tidak diubah</small>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Roles</label>
                                                <select name="roles" required class="form-control">
                                                    <option value="{{ $item->roles }}" selected>Tidak diganti</option>
                                                    <option value="ADMIN">ADMIN</option>
                                                    <option value="USER">USER</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success px-5">
                                                Save Now
                                            </button>
                                        </div>
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


