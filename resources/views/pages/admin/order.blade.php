@extends('layouts.admin')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="content-main">
                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Order List</h2>
                        <p></p>
                    </div>
                    <div>
                        <input type="text" placeholder="Search order ID" class="form-control bg-white" />
                    </div>
                </div>
                <div class="card mb-4">
                    <header class="card-header">
                        <div class="row gx-3">
                            <div class="col-lg-4 col-md-6 me-auto">
                                <input type="text" placeholder="Search..." class="form-control" />
                            </div>
                            <div class="col-lg-2 col-6 col-md-3">
                                <select class="form-select">
                                    <option>Status</option>
                                    <option>Pending</option>
                                    <option>Accepted</option>
                                    <option>Ready for Delivery</option>
                                    <option>In Transit</option>
                                    <option>Delivered</option>
                                    <option>Cancelled</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-6 col-md-3">
                                <select class="form-select">
                                    <option>Show 20</option>
                                    <option>Show 30</option>
                                    <option>Show 40</option>
                                </select>
                            </div>
                        </div>
                    </header>
                    <!-- card-header end// -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Payment Method</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">View Item</th>
                                        <th scope="col" class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->user->name ?? 'N/A' }}</td>
                                            <td>₱{{ number_format($order->total_price, 2) }}</td>
                                            <td>
                                                <span class="badge 
                                                    @if($order->order_status == 'delivered') bg-success
                                                    @elseif($order->order_status == 'pending') bg-warning
                                                    @elseif($order->order_status == 'in_transit') bg-info
                                                    @else bg-secondary
                                                    @endif">
                                                    {{ ucfirst($order->order_status) }}
                                                </span>
                                            </td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>{{ \Carbon\Carbon::parse($order->created_at)->format('M d, Y h:i A') }}</td>
                                            <td><a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-outline-primary">View</a></td>
                                            <td class="text-end">

                                                @if($order->order_status === 'pending')
                                                    <form action="{{ route('admin.orders.accept', $order->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-sm btn-warning">Accept Order</button>
                                                    </form>
                                                @elseif($order->order_status === 'accepted')
                                                    <form action="{{ route('admin.orders.ready', $order->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-sm btn-info">Mark as Ready for Delivery</button>
                                                    </form>
                                                @elseif($order->order_status === 'ready_for_delivery')
                                                    <button class="btn btn-sm btn-secondary" disabled>Ready for Delivery</button>
                                                @endif
                                            </td>
                                        
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No orders found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                        <!-- table-responsive //end -->
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