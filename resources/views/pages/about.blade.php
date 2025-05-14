@extends('layouts.app')

@section('content')

    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                        @auth
                            <a class="active" href="{{ route('dashboard') }}">Home</a>  
                        @else
                            <a class="active" href="{{ route('home') }}">Home</a>   
                        @endauth
                    <span></span> About Hain Express
                </div>
            </div>
        </div>
        <div class="page-content pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="row align-items-center mb-50">
                            <div class="col-lg-6">
                                <img src="assets/imgs/page/about-1.png" alt="Hain Express Delivery" class="border-radius-15 mb-md-3 mb-lg-0 mb-sm-4" />
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-25">
                                    <h2 class="mb-30">Maligayang pagdating sa Hain Express</h2>
                                    <p class="mb-25">Hain Express is your local partner in sustainable food delivery. We serve authentic Filipino dishes and regional specialties directly from community-based kitchens to your doorstep. Whether you're craving a hot silog meal, native delicacies, or healthier eco-conscious options, we make food more accessible, affordable, and sustainable.</p>
                                    <p class="mb-50">Rooted in Filipino values and powered by innovation, we bridge the gap between local food vendors and mindful consumers. Hain Express promotes sustainable practices through eco-friendly packaging, localized sourcing, and support for homegrown businesses. It's more than food—it’s a movement toward responsible dining.</p>
                                    <div class="carausel-3-columns-cover position-relative">
                                        <div id="carausel-3-columns-arrows"></div>
                                        <div class="carausel-3-columns" id="carausel-3-columns">
                                            <img src="assets/imgs/page/about-2.png" alt="Local Cuisine" />
                                            <img src="assets/imgs/page/about-3.png" alt="Sustainable Packaging" />
                                            <img src="assets/imgs/page/about-4.png" alt="Community Vendors" />
                                            <img src="assets/imgs/page/about-2.png" alt="Local Cuisine" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="text-center mb-50">
                            <h2 class="title style-3 mb-40">What We Provide</h2>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-1.svg" alt="" />
                                        <h4>Affordable Local Meals</h4>
                                        <p>Discover delicious home-cooked meals and native delicacies at budget-friendly prices—supporting small food businesses near you.</p>
                                        <a href="#"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-2.svg" alt="" />
                                        <h4>Curated Regional Dishes</h4>
                                        <p>From Ilocano bagnet to Bicol express, we offer a wide variety of regional Filipino food prepared by local chefs and vendors.</p>
                                        <a href="#"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-3.svg" alt="" />
                                        <h4>Eco-Friendly Delivery</h4>
                                        <p>We use reusable or biodegradable packaging and promote carbon-efficient delivery methods whenever possible.</p>
                                        <a href="#"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-4.svg" alt="" />
                                        <h4>Reliable Logistics</h4>
                                        <p>Our tech-powered platform ensures timely delivery and accurate order tracking from kitchen to your door.</p>
                                        <a href="#"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-5.svg" alt="" />
                                        <h4>Customer Satisfaction</h4>
                                        <p>We prioritize your dining experience with easy-to-reach support and quality assurance on every meal served.</p>
                                        <a href="#"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-6.svg" alt="" />
                                        <h4>Daily Offers & Discounts</h4>
                                        <p>Enjoy daily promotions and discounts on meals while supporting local entrepreneurs in your area.</p>
                                        <a href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="row align-items-center mb-50">
                            <div class="row mb-50 align-items-center">
                                <div class="col-lg-7 pr-30">
                                    <img src="assets/imgs/page/about-5.png" alt="E-commerce Grocery Platform" class="mb-md-3 mb-lg-0 mb-sm-4" />
                                </div>
                                <div class="col-lg-5">
                                    <h4 class="mb-20 text-muted">Performance That Matters</h4>
                                    <h1 class="heading-1 mb-40">Your Partner for Sustainable Food Delivery</h1>
                                    <p class="mb-30">Hain Express combines convenience and conscious consumerism. From tech integration to grassroots vendor partnerships, we ensure each step—from sourcing to delivery—is aligned with sustainability and community empowerment.</p>
                                    <p>We continuously optimize our platform to serve more Filipino households while reducing environmental impact.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 pr-30 mb-md-5 mb-lg-0 mb-sm-5">
                                    <h3 class="mb-30">Who We Are</h3>
                                    <p>Hain Express is a Filipino-owned e-commerce built by food lovers and sustainability advocates. We believe in preserving culture through cuisine and serving it with responsibility and heart.</p>
                                </div>
                                <div class="col-lg-4 pr-30 mb-md-5 mb-lg-0 mb-sm-5">
                                    <h3 class="mb-30">Our History</h3>
                                    <p>Founded in 2025, Hain Express began as a local food initiative and quickly evolved into a growing food delivery platform, connecting neighborhoods through nourishing meals.</p>
                                </div>
                                <div class="col-lg-4">
                                    <h3 class="mb-30">Our Mission</h3>
                                    <p>To champion local food, empower vendors, and promote sustainable lifestyles—one delicious delivery at a time.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection