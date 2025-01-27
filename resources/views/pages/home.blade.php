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
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/kategorigadget.svg" alt="" class="w-100" />
                </div>
                <p class="categories-text">Gadgets</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/kategorifurniture.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Furniture</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/kategorimakeup.svg" alt="" class="w-100" />
                </div>
                <p class="categories-text">MakeUp</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/kategorisneakers.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Sneaker</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/kategoritool.svg" alt="" class="w-100" />
                </div>
                <p class="categories-text">Tools</p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/kategoribaby.svg" alt="" class="w-100" />
                </div>
                <p class="categories-text">Baby</p>
              </a>
            </div>
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
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="pruducts-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/applewatch.jpg')"
                  ></div>
                </div>
                <div class="products-text">Apple Watch 4</div>
                <div class="products-price">$898</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="pruducts-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/orangeshoes.jpg')"
                  ></div>
                </div>
                <div class="products-text">Orange Bogotta</div>
                <div class="products-price">$94,509</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="pruducts-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/sofa.jpg')"
                  ></div>
                </div>
                <div class="products-text">Sofa Ternyaman</div>
                <div class="products-price">$1,409</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="pruducts-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/bubuk.jpg')"
                  ></div>
                </div>
                <div class="products-text">Bubuk Maketti</div>
                <div class="products-price">$225</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="pruducts-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/tatakan.jpg')"
                  ></div>
                </div>
                <div class="products-text">Tatakan Gelas</div>
                <div class="products-price">$45,184</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="pruducts-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/drone.jpg')"
                  ></div>
                </div>
                <div class="products-text">Mavic Kawe</div>
                <div class="products-price">$503</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="pruducts-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/blackshoes.jpg')"
                  ></div>
                </div>
                <div class="products-text">Black Edition Nike</div>
                <div class="products-price">$70,482</div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="pruducts-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/monyet.jpg')"
                  ></div>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
