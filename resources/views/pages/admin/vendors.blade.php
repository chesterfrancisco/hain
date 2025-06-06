@extends('layouts.admin')

@section('content')

    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Vendor Cards</h2>
            <!--<div>
                <a href="#" class="btn btn-primary"><i class="material-icons md-plus"></i> Create new</a>
            </div>-->
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control" />
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Show 20</option>
                            <option>Show 30</option>
                            <option>Show 40</option>
                            <option>Show all</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Status: all</option>
                            <option>Active only</option>
                            <option>Disabled</option>
                        </select>
                    </div>
                </div>
            </header>
            <!-- card-header end// -->
            <div class="card-body">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                    @foreach($vendors as $vendor)
                    <div class="col">
                        <div class="card card-user">
                            <div class="card-header">
                                <img class="img-md img-avatar" src="{{ asset('assets/imgs/vendor/' . $vendor->image_path) }}" alt="Vendor Image" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mt-50">{{ $vendor->vendor_name }}</h5>
                                <div class="card-text text-muted">
                                    <p class="m-0">Seller ID: {{ $vendor->id }}</p>
                                    <p>Owner Name: {{ $vendor->owner_name}}</p>
                                    <p>{{ $vendor->description }}</p><br>
                                    <p>Opening Hours {{ $vendor->opening_hours }}</p>
                                    <a href="{{ route('admin.vendors.show', $vendor->id) }}" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- row.// -->
            </div>
            <!-- card-body end// -->
        </div>
        <!-- card end// -->
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