@extends('layouts.admin')

@section('content')

<div class="container mt-4">
    <h2 class="mb-3">📦 Orders Ready for Delivery</h2>

    <div class="alert alert-info">
        <strong>Instructions:</strong> These are the orders you've picked up. Click <b>"Mark as In Transit"</b> when you're on the way to deliver the order.
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($deliveries->isEmpty())
        <div class="alert alert-warning">You haven't picked up any orders yet.</div>
    @else
        <div class="row">
            @foreach($deliveries as $delivery)
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Order #{{ $delivery->id }}</h5>
                            <p class="mb-1"><strong>Customer:</strong> {{ $delivery->order->user->name ?? 'N/A' }}</p>
                            <p class="mb-1"><strong>Delivery Address:</strong> {{ $delivery->order->delivery_address }}</p>
                            <p class="mb-1"><strong>Payment Method:</strong> {{ $delivery->order->payment_method }}</p>
                            <p class="mb-1"><strong>Total Price:</strong> ₱{{ number_format($delivery->order->total_price, 2) }}</p>
                            <p class="mb-2 text-muted"><strong>Status:</strong> {{ ucfirst($delivery->status) }}</p>

                            <form action="{{ route('rider.deliver.update', $delivery->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary w-100">Mark as In Transit</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
