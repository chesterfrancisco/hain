@extends('layouts.app')

@section('content')

<!-- <a href="{{ route('login.facebook') }}" class="btn btn-facebook">Continue with Facebook</a>
<a href="{{ route('login.google') }}" class="btn btn-google">Continue with Google</a> -->


<section class="home-slider position-relative mb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="home-slide-cover mt-30">
                    <div class="hero-slider-1 style-5 dot-style-1 dot-style-1-position-2">
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url(assets/imgs/slider/slider-hain-1.png)">
                            <div class="slider-content">
                                <h4 class="display-2 mb-20" style="font-size: 42px">
                                    Hatid ay sariwa at lokal—<br>makakalikasan, makabago<br>para sa bawat Pilipino
                                </h4>
                                <br><br><br><br>
                                <p class="mb-10">Sign up for the daily newsletter</p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Ang iyong email address" />
                                    <button class="btn" type="submit">Sumali</button>
                                </form>
                            </div>
                        </div>
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url(assets/imgs/slider/slider-8.png)">
                            <div class="slider-content">
                                <h3 class="display-2 mb-20">
                                    Pagkain mula sa komunidad, <br>para sa komunidad.
                                </h3>
                                <p class="mb-65">Save up to 50% off on your first order</p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Ang iyong email address" />
                                    <button class="btn" type="submit">Sumali</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="banner-img style-4 mt-30">
                            <img src="assets/imgs/banner/banner-14.png" alt="" />
                            <div class="banner-text">
                                <h4 class="mb-25" style="font-size: 25px">
                                    Itaas ang Bandera ng pagkaing atin – Hain Express ang Bahala!
                                </h4>
                                <a href="shop-grid-right.html" class="btn btn-xs mb-50">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="banner-img style-5 mt-5 mt-md-30">
                            <img src="assets/imgs/banner/banner-15.png" alt="" />
                            <div class="banner-text">
                                <h5 class="mb-20">
                                    Hain sa Bahay – <br> Galing sa Puso <br> ng Komunidad.
                                </h5>
                                <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End hero slider-->

<section class="popular-categories section-padding">
    <div class="container wow animate__animated animate__fadeIn">
        <div class="section-title">
            <div class="title">
                <h3>Featured Categories</h3>
            </div>
            <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
        </div>
        <div class="carausel-10-columns-cover position-relative">
            <div class="carausel-10-columns" id="carausel-10-columns" style="width:110%">
                @foreach($categories as $category)
                <div class="card-2 bg-13 wow animate__animated animate__fadeInUp" data-wow-delay=".1s" >
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="shop-grid-right.html">
                        <img src="{{ asset('assets/imgs/catg/' . $category->image_path) }}" alt="{{ $category->category_name }}" width="100" />
                        </a>
                    </figure>
                    <h6 class="p-1"><a href="#">{{ $category->category_name }}</a></h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--End category slider-->

<section class="banners mb-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                    <img src="assets/imgs/banner/banner1.png" alt="" />
                    <div class="banner-text">
                        <h4>
                            Find a restaurant and <br>order pickup or delivery
                            <br><br>
                            <p>Search your address to see <br> which restaurants near you <br>have joined our mission <br>to reduce packaging waste.</p>
                            <br>
                        </h4>
                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <img src="assets/imgs/banner/banner2.png" alt="" />
                    <div class="banner-text">
                        <h4>
                            Receive your order in the <br> most eco-friendly packaging
                            <br><br>
                            <p style="color:#ddd">Reusable containers are more <br>environmentally-friendly than<br> single-use options. <br>We're out to make reusable <br>options more convenient, too.</p>
                            <br>
                        </h4>
                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-md-none d-lg-flex">
                <div class="banner-img mb-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <img src="assets/imgs/banner/banner-3.png" alt="" />
                    <div class="banner-text">
                        <h4>Return your containers within 3 weeks
                        <p>Schedule a pickup, hand them back to the courier, or drop them off in person at any return point.</p>
                        </h4>
                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End banners-->

<section class="product-tabs section-padding position-relative">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3>Popular Products</h3>
            <ul class="nav nav-tabs links" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-category-id="all" type="button">All</button>
                </li>
                <li class="nav-item"><button class="nav-link" data-category-id="2" type="button">Ulam</button></li>
                <li class="nav-item"><button class="nav-link" data-category-id="3" type="button">Snacks</button></li>
                <li class="nav-item"><button class="nav-link" data-category-id="4" type="button">Rice Meals</button></li>
                <li class="nav-item"><button class="nav-link" data-category-id="5" type="button">Native Delicacies</button></li>
                <li class="nav-item"><button class="nav-link" data-category-id="6" type="button">Desserts</button></li>
                <li class="nav-item"><button class="nav-link" data-category-id="8" type="button">Beverages</button></li>
            </ul>
        </div>
        <div class="tab-content pt-3" id="product-tab-content">
            <!-- Products will be loaded here -->
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="banner-img style-6 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                    <img src="assets/imgs/banner/banner-16.png" alt="" />
                    <div class="banner-text">
                        <h6 class="mb-10 mt-30">Everyday Fresh with<br />Our Products</h6>
                        <p>Go to supplier</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="banner-img style-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/imgs/banner/banner-17.png" alt="" />
                    <div class="banner-text">
                        <h6 class="mb-10 mt-30">100% guaranteed all<br />Fresh items</h6>
                        <p>Go to supplier</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="banner-img style-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    <img src="assets/imgs/banner/banner-18.png" alt="" />
                    <div class="banner-text">
                        <h6 class="mb-10 mt-30">Special grocery sale<br />off this month</h6>
                        <p>Go to supplier</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="banner-img style-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                    <img src="assets/imgs/banner/banner-19.png" alt="" />
                    <div class="banner-text">
                        <h6 class="mb-10 mt-30">
                            Enjoy 15% OFF for all<br />
                            vegetable and fruit
                        </h6>
                        <p>Go to supplier</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End 4 banners-->

<section class="section-padding pb-5">
    <div class="container">
        <div class="section-title wow animate__animated animate__fadeIn">
            <h3 class="">Sustainable Vendors</h3>
            <ul class="nav nav-tabs links" id="myTab-2" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">View All Vendors</button>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                <div class="banner-img style-2">
                    <div class="banner-text">
                        <h2 class="mb-100">Bring nature into your home</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                <p>Browse the list of our food partners and vendors that offer sustainability and ecofriendly meals.</p>
                <br>
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                @foreach ($sustainableVendors as $vendor)
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                    <img class="default-img" style="width: 100%; object-fit: cover; height: 180px" src="assets/imgs/vendor/{{ $vendor->image_path }}" alt="vendor-logo" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <br>
                                                <a href="shop-grid-right.html">{{ $vendor->category }}</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">{{ $vendor->vendor_name }}</a></h2>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 0%"></div>
                                            </div>
                                            <br><br>
                                            <a href="#" class="btn w-100 hover-up">View Vendor</a>
                                        </div>
                                    </div>
                                @endforeach
                                <!--End product Wrap-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>
<!--End Best Sales-->

<br>
<section class="section-padding mb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                <h4 class="section-title style-1 mb-30 animated animated">Top Selling</h4>
                <div class="product-list-small animated animated">
                    @foreach($topSelling as $product)
                        <article class="row align-items-center hover-up mb-3">
                            <figure class="col-md-4 mb-0">
                                <a href="#">
                                    <img src="{{ asset('assets/imgs/catg/' . $product->image_path) }}" alt="{{ $product->product_name }}" />
                                </a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="#">{{ $product->product_name }}</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: {{ min(100, ($product->reviews_avg_rating ?? 0) * 20) }}%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted">
                                        ({{ number_format($product->reviews_avg_rating ?? 0, 1) }})
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>₱{{ number_format($product->price, 2) }}</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <h4 class="section-title style-1 mb-30 animated animated">Recently Added</h4>
                <div class="product-list-small animated animated">
                    @foreach($recentlyAdded as $product)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="#"><img src="{{ asset('assets/imgs/catg/' . $product->image_path) }}" alt="{{ $product->product_name }}" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6><a href="#">{{ $product->product_name }}</a></h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 0%"></div> {{-- Replace with rating if available --}}
                                    </div>
                                    <span class="font-small ml-5 text-muted">(0.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>₱{{ number_format($product->price, 2) }}</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>  

            <div class="col-xl-4 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <h4 class="section-title style-1 mb-30 animated animated">Top Rated</h4>
                <div class="product-list-small animated animated">
                    @foreach($topRated as $product)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="">
                                    <img src="{{ asset('assets/imgs/catg/' . $product->image_path) }}" alt="{{ $product->product_name }}" />
                                </a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="">{{ $product->product_name }}</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: {{ ($product->reviews_avg_rating ?? 0) * 20 }}%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted">({{ number_format($product->reviews_avg_rating ?? 0, 1) }})</span>
                                </div>
                                <div class="product-price">
                                    <span>₱{{ number_format($product->price, 2) }}</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div> 

        </div>
    </div>
</section>
<!--End Top Selling-->



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.nav-link');
        const tabContent = document.getElementById('product-tab-content');

        function loadProducts(categoryId = 'all') {
            fetch("{{ route('products.by-category', ':categoryId') }}".replace(':categoryId', categoryId))
                .then(response => response.json())
                .then(data => {
                    tabContent.innerHTML = '';
                    if (data.length === 0) {
                        tabContent.innerHTML = '<p class="text-center">No products found.</p>';
                        return;
                    }

                    let html = '<div class="row product-grid-4">';
                    data.forEach(product => {
                        html += `
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="#">
                                             <img class="default-img" style="width: 100%; object-fit: cover; height: 180px" src="assets/imgs/catg/${product.image_path}" alt="${product.product_name}" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="#"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="#"><i class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <br>
                                        <a href="#">${product.category_name}</a>
                                    </div>
                                    <h2><a href="#">${product.product_name}</a></h2>
                                     <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 0%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"></span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="#">${product.vendor_name}</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>₱${parseFloat(product.price).toFixed(2)}</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    });
                    html += '</div>';
                    tabContent.innerHTML = html;
                })
                .catch(err => {
                    tabContent.innerHTML = '<p class="text-danger">Error loading products.</p>';
                    console.error(err);
                });
        }

        // Load All on page load
        loadProducts('all');

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                const categoryId = this.getAttribute('data-category-id');
                loadProducts(categoryId);
            });
        });
    });
</script>

@endsection