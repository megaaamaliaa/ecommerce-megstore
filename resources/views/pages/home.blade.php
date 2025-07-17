@extends('layouts.app')

@section('title')
    Store Homepge
@endsection

@section('content')
     <!-- page Content -->
    <div class="page-content pages-home">
      <!-- corousel -->
      <section class="store-carousel" data-aos="zoom-in">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div
                id="carouselExampleAutoplaying"
                class="carousel carousel-dark slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2000">
                    <img
                      src="/images/carousel2.svg"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img
                      src="/images/carousel.svg"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img
                      src="/images/carousel2.svg"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img
                      src="/images/carousel.svg"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleAutoplaying"
                  data-bs-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleAutoplaying"
                  data-bs-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- kategori -->
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
          </div>
          <div class="row">
            {{-- variabel increment --}}
            @php
                $incrementCategory = 0;
            @endphp
            @forelse ($categories as $category)
                <div
                    class="col-6 col-md-3 col-lg-2"
                    data-aos="fade-up"
                    data-aos-delay="{{ $incrementCategory+=100 }}"
                >
                    <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                        <div class="categories-image">
                        <img src="{{ Storage::url($category->photo) }}" alt="" class="w-100" />
                        </div>
                        <p class="categories-text">{{ $category->name }}</p>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    No Categories Found
                </div>
            @endforelse
          </div>
        </div>
      </section>
      <!-- produk -->
      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>New Products</h5>
            </div>
          </div>
          <div class="row">
             @php
                $incrementCategory = 0;
            @endphp
            @forelse ($products as $product)
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                  <div class="pruducts-thumbnail">
                    <div
                      class="products-image"
                      style="
                        background-image: url('{{ Storage::url($product->galleries->first()->photos) }}');
                      "
                    ></div>
                  </div>
                  <div class="products-text">{{ $product->name }}</div>
                  <div class="products-price">{{ $product->price }}</div>
                </a>
              </div>
            @empty
              <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                No Products Found
              </div>
            @endforelse
          </div>
        </div>
      </section>
    </div>
@endsection
