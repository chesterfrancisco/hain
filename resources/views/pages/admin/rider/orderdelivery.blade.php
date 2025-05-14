@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">🗺 Delivery Monitoring</h2>

    <div class="row">
        <div class="col-md-8">
            <div class="ratio ratio-16x9">
                <iframe 
                width="100%" 
                height="400" 
                style="border:0;" 
                loading="lazy" 
                allowfullscreen 
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps?q=23B+Don+Manuel+Agregado+St,+Poblacion,+Quezon+City,+Metro+Manila,+Philippines&output=embed">
            </iframe>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3">
                <h6 class="mb-2">🧾 Order #{{ $delivery->order->id }}</h6>
                <p><strong>Customer:</strong> {{ $delivery->order->user->name }}</p>
                <p><strong>Address:</strong> {{ $delivery->order->delivery_address }}</p>
                <p><strong>Payment:</strong> {{ $delivery->order->payment_method }}</p>
              

                <p id="elapsed-time" class="text-muted">Calculating time...</p>

                <p><strong>Total:</strong> ₱{{ number_format($delivery->order->total_price, 2) }}</p>

                <form method="POST" action="{{ route('rider.deliver.complete', $delivery->id) }}">
                    @csrf
                     @if($delivery->status == 'in_transit')
                        <button class="btn btn-warning w-100">Mark Order as Delivered</button>
                    @endif
                </form>

                 @if($delivery->status == 'delivered')
                    <h5><b>Status: </b>Order Delivered</h5>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
