@extends('layouts.admin')

@section('content')
  <section class="content-main">
                @if(Auth::user()->user_type === 'admin')
                <div class="content-header">
                    <a href="javascript:history.back()"><i class="material-icons md-arrow_back"></i> Go back </a>
                </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header bg-brand-2" style="height: 150px"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl col-lg flex-grow-0" style="flex-basis: 230px">
                                <div class="img-thumbnail shadow w-100 bg-white position-relative text-center" style="height: 190px; width: 200px; margin-top: -120px">
                                    <img src="{{ asset('assets/imgs/vendor/' . $vendor->image_path) }}" class="center-xy img-fluid"  alt="Vendor Logo" />
                                </div>
                            </div>
                            <!--  col.// -->
                            <div class="col-xl col-lg">
                                <h3>{{ $vendor->vendor_name }}</h3>
                                <p>{{ $vendor->region }}</p>
                            </div>
                            <!--  col.// -->
                            <div class="col-xl-4 text-md-end">
                                <select class="form-select w-auto d-inline-block">
                                    <option>Actions</option>
                                    <option>Disable shop</option>
                                    <option>Analyze</option>
                                    <option>Something</option>
                                </select>
                                <!--<a href="#" class="btn btn-primary"> View live <i class="material-icons md-launch"></i> </a>-->
                            </div>
                            <!--  col.// -->
                        </div>
                        <!-- card-body.// -->
                        <hr class="my-4" />
                        <div class="row g-4">
                            <div class="col-md-12 col-lg-4 col-xl-2">
                                <article class="box">
                                    <p class="mb-0 text-muted">Total sales:</p>
                                    <h5 class="text-success">238</h5>
                                    <p class="mb-0 text-muted">Revenue:</p>
                                    <h5 class="text-success mb-0">P2380</h5>
                                </article>
                            </div>
                            <!--  col.// -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <h6>Contacts</h6>
                                <p>
                                    {{ $vendor->owner_name }}<br />
                                    {{ $vendor->email }}<br />
                                    {{ $vendor->contact_number }}
                                </p>

                                <h6>Category</h6>
                                <p>
                                   {{ $vendor->category }}
                                </p>
                                <br>

                                <h6>Opening Hours</h6>
                                <p>
                                   {{ $vendor->opening_hours }}
                                </p>
                            </div>
                            <!--  col.// -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <h6>Address</h6>
                                <p>
                                   {{ $vendor->region }}
                                </p>
                            </div>
                            <!--  col.// -->
                            <!--<div class="col-sm-6 col-xl-4 text-xl-end">
                                <map class="mapbox position-relative d-inline-block">
                                    <img src="assets/imgs/misc/map.jpg" class="rounded2" height="120" alt="map" />
                                    <span class="map-pin" style="top: 50px; left: 100px"></span>
                                    <button class="btn btn-sm btn-brand position-absolute bottom-0 end-0 mb-15 mr-15 font-xs">Large</button>
                                </map>
                            </div>-->
                            <!--  col.// -->
                        </div>
                        <!--  row.// -->
                    </div>
                    <!--  card-body.// -->
                </div>
                <!--  card.// -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Products by seller</h3>
                        <div class="row">
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm rounded" style="float:right">Create new</a>
                                </div>
                                <br><br><br>
                            
                                @forelse($products as $product)
                                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="card card-product-grid h-100">
                                            <a href="#" class="img-wrap d-flex align-items-center justify-content-center" style="height: 150px; overflow: hidden;">
                                                <img src="{{ asset('assets/imgs/catg/' . $product->image_path) }}" alt="Product" style="max-height: 100%; max-width: 100%; object-fit: cover;">
                                            </a>
                                            <div class="info-wrap p-2 d-flex flex-column justify-content-between" style="height: 50px;">
                                                <a href="#" class="title" style="font-size: 14px;">{{ $product->product_name }}</a>
                                                <div class="price mt-1 text-primary fw-bold"><h4>₱{{ number_format($product->price, 2) }}</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-muted">No products found for this vendor.</p>
                                @endforelse

                        </div>
                        <!-- row.// -->
                    </div>
                    <!--  card-body.// -->
                </div>
                <!--  card.// -->
                <div class="pagination-area mt-30 mb-50">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">16</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>

@endsection 