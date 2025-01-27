@extends('layouts.dashboard')

@section('title')
    Store Dashboard Products Create
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
    <!-- dashboard heading -->
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Add New Product</h2>
        <p class="dashboard-subtitle">
        Create your own product
        </p>
    </div>
    <!-- dashboard content store settings -->
    <div class="dashboard-content">
        <div class="row">
        <div class="col-12">
            <form action="">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="nameStore">Product Name</label>
                        <input type="text" name="nameStore" id="nameStore" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                        <option value="" disabled>Select Category</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="editor">Description</label>
                        <textarea name="editor" id="editor" class="form-control"></textarea>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="thumbnails">Thumbnails</label>
                        <input type="file" name="thumbnails" id="thumbnails" class="form-control">
                        <p class="text-muted">
                            Kamu dapat memilih lebih dari satu file
                        </p>
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

@push('addon-script')
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('editor');
    </script>
@endpush
