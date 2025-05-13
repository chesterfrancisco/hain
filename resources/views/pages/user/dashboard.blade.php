@extends('layouts.app')

@section('content')

 <!--End header-->
    <main class="main">
        <section class="home-slider position-relative mb-30">
            <div class="home-slide-cover">
                <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                    <div class="single-hero-slider rectangle single-animation-wrap" style="background-image: url('{{ asset('assets/imgs/slider/slider-5.png') }}'); background-size: cover; background-position: center;">
                        <div class="slider-content text-center text-white" style="padding: 100px 20px;">
                            <h1 class="display-3 mb-20 font-weight-bold">
                                Craving Something Delicious?
                            </h1>
                            <p class="mb-40">Find the best meals from local food hubs near you.</p>

                            <form action="" method="GET" class="bg-white p-4 rounded shadow d-flex align-items-center gap-2 flex-wrap justify-content-center" style="max-width: 650px; margin: 0 auto;">
                                <!-- Location Dropdown -->
                                <select name="location" class="form-control rounded" style="min-width: 200px;">
                                    <option value="">Select Location</option>
                                    <option value="Quezon City">Quezon City</option>
                                    <option value="Pasig">Pasig</option>
                                    <option value="Makati">Makati</option>
                                    <option value="Laguna">Laguna</option>
                                    <option value="Taguig">Taguig</option>
                                </select>

                                <!-- Search bar -->
                                <div class="input-group" style="min-width: 300px;">
                                
                                    <input type="text" name="q" class="form-control border-start-0" placeholder="Search for food, restaurant...">
                                </div>

                                <!-- Submit button -->
                                <button class="btn btn-success px-4" type="submit">Find Food</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mb-30">
            <div class="row">
                <div class="col-lg-4-5">
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

                    <section class="section-padding pb-5">
                        <div class="section-title">
                            <h3 class="">Deals Of The Day</h3>
                            <a class="show-all" href="shop-grid-right.html">
                                All Deals
                                <i class="fi-rs-angle-right"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="shop-product-right.html">
                                                <img src="assets/imgs/banner/banner-5.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown</a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$32.85</span>
                                                    <span class="old-price">$33.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="shop-product-right.html">
                                                <img src="assets/imgs/banner/banner-6.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2026/04/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="shop-product-right.html">Perdue Simply Smart Organics Gluten</a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$24.85</span>
                                                    <span class="old-price">$26.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 d-none d-lg-block">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="shop-product-right.html">
                                                <img src="assets/imgs/banner/banner-7.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2027/03/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="shop-product-right.html">Signature Wood-Fired Mushroom</a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (3.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Progresso</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$12.85</span>
                                                    <span class="old-price">$13.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 d-none d-xl-block">
                                <div class="product-cart-wrap style-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href="shop-product-right.html">
                                                <img src="assets/imgs/banner/banner-8.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a href="shop-product-right.html">Simply Lemonade with Raspberry Juice</a></h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (3.0)</span>
                                            </div>
                                            <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Yoplait</a></span>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$15.85</span>
                                                    <span class="old-price">$16.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End Deals-->
                    <section class="banners">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="banner-img">
                                    <img src="assets/imgs/banner/banner-1.png" alt="" />
                                    <div class="banner-text">
                                        <h4>
                                            Everyday Fresh & <br />Clean with Our<br />
                                            Products
                                        </h4>
                                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="banner-img">
                                    <img src="assets/imgs/banner/banner-2.png" alt="" />
                                    <div class="banner-text">
                                        <h4>
                                            Make your Breakfast<br />
                                            Healthy and Easy
                                        </h4>
                                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-md-none d-lg-flex">
                                <div class="banner-img mb-sm-0">
                                    <img src="assets/imgs/banner/banner-3.png" alt="" />
                                    <div class="banner-text">
                                        <h4>The best Organic <br />Products Online</h4>
                                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End banners-->
                </div>
                <div class="col-lg-1-5 primary-sidebar sticky-sidebar pt-30">
                    <div class="sidebar-widget widget-category-2 mb-30">
                        <h5 class="section-title style-1 mb-30">Category</h5>
                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a href="shop-grid-right.html"> 
                                     <img src="{{ asset('assets/imgs/catg/' . $category->image_path) }}" alt="{{ $category->category_name }}" width="300" />
                                   {{ $category->category_name }}
                                </a>
                               
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Product sidebar Widget -->
                    
                    <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                        <img src="assets/imgs/banner/banner-11.png" alt="" />
                        <div class="banner-text">
                            <span>Oganic</span>
                            <h4>
                                Save 17% <br />
                                on <span class="text-brand">Oganic</span><br />
                                Juice
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function bindWishlistButtons() {
        document.querySelectorAll('.wishlist-add-btn').forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();

                const productId = this.dataset.productId;

                if (!productId || productId === 'undefined') {
                    console.error('Invalid product ID');
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Invalid product selected.'
                    });
                    return;
                }

                console.log('Sending product ID:', productId);

                fetch("{{ route('wishlist.add') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name=\"csrf-token\"]').getAttribute('content')
                    },
                    body: JSON.stringify({ product_id: productId })
                })
                .then(res => res.json())
                .then(data => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Wishlist',
                        text: data.message,
                        timer: 1500,
                        showConfirmButton: false
                    });

                    const counter = document.getElementById('wishlist-count');
                    if (counter && !isNaN(counter.innerText)) {
                        counter.innerText = parseInt(counter.innerText) + 1;
                    }
                })
                .catch(err => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Could not add to wishlist.'
                    });
                    console.error(err);
                });
            });
        });
    }

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
                                       <a aria-label="Add To Wishlist" class="action-btn wishlist-add-btn" href="#" data-product-id="${product.id}">
                                            <i class="fi-rs-heart"></i>
                                        </a>
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

                    // ✅ Bind wishlist buttons after rendering
                    bindWishlistButtons();
                })
                .catch(err => {
                    tabContent.innerHTML = '<p class="text-danger">Error loading products.</p>';
                    console.error(err);
                });
        }

        // Initial Load
        loadProducts('all');

        // Tabs click event
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