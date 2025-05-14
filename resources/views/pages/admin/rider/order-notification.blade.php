@extends('layouts.admin')

@section('content')

<div class="container mt-4">
    <h2 class="mb-3">🛎 Order Notifications</h2>

    <div class="alert alert-info">
        <strong>Instructions:</strong> Below is a list of orders that are <strong>ready for delivery</strong>. Click <b>"Accept for Pickup"</b> to assign the order to yourself and move it to the Pickup list.
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($orders->isEmpty())
        <div class="alert alert-warning">
            No new orders to accept right now.
        </div>
    @else
        <div class="row">
            @foreach($orders as $order)
            <div class="col-md-6 col-lg-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Order #{{ $order->id }}</h5>
                        <p class="mb-1"><strong>Customer:</strong> {{ $order->user->name ?? 'N/A' }}</p>
                        <p class="mb-1"><strong>Delivery Address:</strong> {{ $order->delivery_address }}</p>
                        <p class="mb-1"><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
                        <p class="mb-1"><strong>Total Price:</strong> ₱{{ number_format($order->total_price, 2) }}</p>
                        <p class="mb-2 text-muted"><strong>Status:</strong> {{ ucfirst($order->order_status) }}</p>

                        <form method="POST" action="{{ route('rider.pickup.confirm', $order->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-warning w-100">Accept for Pickup</button>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>


@endsection