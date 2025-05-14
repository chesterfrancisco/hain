@extends('layouts.admin')

@section('content')

 <section class="content-main">
                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Products grid</h2>
                        <p></p>
                    </div>
                    <div>
                        <a href="#" class="btn btn-light rounded font-md">Export</a>
                        <a href="#" class="btn btn-light rounded font-md">Import</a>
                        <a href="#" class="btn btn-primary btn-sm rounded">Create new</a>
                    </div>
                </div>
                <header class="card card-body mb-4">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control" />
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>All category</option>
                                @foreach($category as $categories)
                                    <option>{{ $categories->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Latest added</option>
                                <option>Cheap first</option>
                                <option>Most viewed</option>
                            </select>
                        </div>
                    </div>
                </header>
                <!-- card-header end// -->
                <div class="row">
                    @foreach($product as $products)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card card-product-grid">
                            <a href="#" class="img-wrap"> 
                                <img src="{{ asset('assets/imgs/catg/' . $products->image_path) }}" alt="{{ $products->product_name }}" width="100" />
                            </a>

                            <div class="info-wrap">
                                <div class="dropdown float-end">
                                    <a href="#" class="btn btn-sm btn-brand rounded"> <i class="material-icons md-edit mr-5"></i>Edit </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit info</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                                <a href="#" class="title">{{ $products->product_name }}</a>
                                <div class="price mt-1">P {{  $products->price }}</div>
                                <!-- price-wrap.// -->
                            </div>
                        </div>
                        <!-- card-product  end// -->
                    </div>
                    @endforeach
                    
                </div>
                <!-- row.// -->
                <div class="pagination-area mt-15 mb-50">
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