@extends('layouts.admin')

@section('content')

    <section class="content-main">
        <div class="content-header">
            <a href="{{ route('admin.orders') }}" class="btn btn-light rounded font-md">Back to Order list</a>
            <div>
                <h2 class="content-title card-title">Order detail</h2>
                <p>Details for Order ID: {{ $order->id }}</p>
            </div>
        </div>
        <div class="card">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                        <span> <i class="material-icons md-calendar_today"></i> <b>{{ $order->created_at->format('F j, Y, g:i A') }}</b> </span> <br />
                        <small class="text-muted">Order ID: {{ $order->id }}</small>
                    </div>
                    <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                        <select class="form-select d-inline-block mb-lg-0 mr-5 mw-200">
                            <option>Change status</option>
                            <option>Awaiting payment</option>
                            <option>Confirmed</option>
                            <option>Shipped</option>
                            <option>Delivered</option>
                        </select>
                        <a class="btn btn-primary" href="#">Save</a>
                        <a class="btn btn-secondary print ms-2" href="#"><i class="icon material-icons md-print"></i></a>
                    </div>
                </div>
            </header>
            <!-- card-header end// -->
            <div class="card-body">
                <div class="row mb-50 mt-20 order-info-wrap">
                    <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <span class="icon icon-sm rounded-circle bg-primary-light">
                                <i class="text-primary material-icons md-person"></i>
                            </span>
                            <div class="text">
                                <h6 class="mb-1">Customer</h6>
                                    <p class="mb-1">
                                        {{ $order->user->name ?? 'N/A' }} <br />
                                        {{ $order->user->email ?? '-' }} <br />
                                    </p>
                                <a href="#">View profile</a>
                            </div>
                        </article>
                    </div>
                    <!-- col// -->
                    <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <span class="icon icon-sm rounded-circle bg-primary-light">
                                <i class="text-primary material-icons md-local_shipping"></i>
                            </span>
                            <div class="text">
                                <h6 class="mb-1">Order info</h6>
                                <p class="mb-1">
                                    Shipping: —
                                    <br />
                                    Pay method: {{ $order->payment_method }}
                                    <br />
                                    Status: {{ ucfirst($order->order_status) }}
                                </p>
                                <a href="#">Download info</a>
                            </div>
                        </article>
                    </div>
                    <!-- col// -->
                    <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <span class="icon icon-sm rounded-circle bg-primary-light">
                                <i class="text-primary material-icons md-place"></i>
                            </span>
                            <div class="text">
                                <h6 class="mb-1">Deliver to</h6>
                                <p class="mb-1">
                                    {{ $order->delivery_address }}
                                </p>
                                <a href="#">View profile</a>
                            </div>
                        </article>
                    </div>
                    <!-- col// -->
                </div>
                <!-- row // -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="40%">Product</th>
                                        <th width="20%">Unit Price</th>
                                        <th width="20%">Quantity</th>
                                        <th width="20%" class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $subtotal = 0; @endphp
                                    @foreach($order->orderItems as $item)
                                        @php $subtotal += $item->total_price; @endphp
                                        <tr>
                                            <td>
                                                <a class="itemside" href="#">
                                                    <div class="left">
                                                        <img src="{{ asset('assets/imgs/catg/' . $item->product->image_path) }}" width="40" height="40" class="img-xs" alt="Item" />
                                                    </div>
                                                    <div class="info">{{ $item->product->product_name }}</div>
                                                </a>
                                            </td>
                                            <td>₱{{ number_format($item->unit_price, 2) }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td class="text-end">₱{{ number_format($item->total_price, 2) }}</td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="4">
                                            <article class="float-end">
                                                <dl class="dlist">
                                                    <dt>Subtotal:</dt>
                                                    <dd>₱{{ number_format($subtotal, 2) }}</dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt class="text-muted">Status:</dt>
                                                    <dd>
                                                        <span class="badge rounded-pill 
                                                            @if($order->order_status == 'delivered') alert-success text-success
                                                            @elseif($order->order_status == 'pending') alert-warning text-warning
                                                            @elseif($order->order_status == 'in_transit') alert-info text-info
                                                            @else alert-secondary
                                                            @endif">
                                                            {{ ucfirst($order->order_status) }}
                                                        </span>
                                                    </dd>
                                                </dl>
                                            </article>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <!-- table-responsive// -->
                    </div>
                    <!-- col// -->
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <div class="box shadow-sm bg-light">
                            <h6 class="mb-15">Payment info</h6>
                            <p>
                                <img src="assets/imgs/card-brands/2.png" class="border" height="20" /> {{ $order->payment_method }} <br />
                            </p>
                        </div>
                        <div class="h-25 pt-4">
                            <div class="mb-3">
                                <label>Notes</label>
                                <textarea class="form-control" name="notes" id="notes" placeholder="Type some note"></textarea>
                            </div>
                            <button class="btn btn-primary">Save note</button>
                        </div>
                    </div>
                    <!-- col// -->
                </div>
            </div>
            <!-- card-body end// -->
        </div>
    </section>

@endsection