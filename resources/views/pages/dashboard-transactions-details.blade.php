@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transactions Details
@endsection

@section('content')
<!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
        <!-- dashboard heading -->
        <div class="dashboard-heading">
            <h2 class="dashboard-title">#STORE0839</h2>
            <p class="dashboard-subtitle">
            Transactions / Details
            </p>
        </div>
        <!-- dashboard content -->
        <div class="dashboard-content" id="transactionDetails">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="/images/product-card-1.png" class="mb-3 w-100" alt="">
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="product-title">Customer Name</div>
                            <div class="product-subtitle">Mega Amalia</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">Product Name</div>
                            <div class="product-subtitle">Shirup Marjan</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">Date of Transaction</div>
                            <div class="product-subtitle">19 -08 -2024</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">Payment Status</div>
                            <div class="product-subtitle text-danger">Pending</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">Total Amount</div>
                            <div class="product-subtitle">$280.09</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">Mobile</div>
                            <div class="product-subtitle">0857285988921</div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-12 mt-4">
                        <h5>Shipping Information</h5>
                    </div>
                    <div class="col-12">
                        <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="product-title">Address I</div>
                            <div class="product-subtitle">Penjaringan</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">Address II</div>
                            <div class="product-subtitle">jalan penjaringan</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">Province</div>
                            <div class="product-subtitle">Jakarta</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">City</div>
                            <div class="product-subtitle">Jakarta Utara</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">Postal Code</div>
                            <div class="product-subtitle">12445</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="product-title">Country</div>
                            <div class="product-subtitle">Indonesia</div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="product-title mb-2">Shipping Status</div>
                            <select name="status" id="status" class="form-control" v-model="status" >
                            <option value="UNPAID">Unpaid</option>
                            <option value="PENDING">Pending</option>
                            <option value="SHIPPING">Shipping</option>
                            <option value="SUCCESS">Success</option>
                            </select>
                        </div>
                        <template v-if="status === 'SHIPPING'">
                            <div class="col-md-3">
                            <div class="product-title mb-2">Input Resi</div>
                            <input type="text" class="form-control" v-model="resi" name="resi">
                            </div>
                            <div class="col-md-2 mt-2">
                            <button type="button" class="btn btn-success btn-block mt-4">Update Resi</button>
                            </div>
                        </template>
                        </div>
                    </div>
                    </div>
                    <div class="row mt-4">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-success btn-lg mt-4">
                        Save Now
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <!-- page transactios -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
      const app = Vue.createApp({
        data() {
          return {
            status : "SHIPPING",
          resi : "JNE123123123123",
          }
        }
      })
      app.mount('#transactionDetails')
    </script>
@endpush
