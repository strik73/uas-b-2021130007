@extends('layouts.master')

@section('title', 'Order Details')

@section('content')

    <div class="align-items-center m-4">
        <div class="card mt-3 shadow">
            <h5 class="card-header p-3">Order Detail</h5>
            <div class="card-body">
                <h5 class="card-title py-2">Order ID : {{ $order->id }}</h5>
                <p class="card-text"><b>Status : </b> {{ $order->status }}</p>
            </div>
        </div>
    </div>

    <h4 class="m-4 p-2">List Pembelian :</h4>

    @foreach ($orderDetails as $detail)
    <div class="px-2 m-4">
        <p>Nama Item: {{ $detail->nama }}</p>
        <p>Quantity: {{ $detail->quantity }}</p>
        <p>Subtotal: Rp. {{ number_format($detail->harga * $detail->quantity) }}</p>
    </div>
        <hr>
    @endforeach

    <h5 class="m-4">Total Harga (Pajak 11%) : Rp. {{ number_format($total) }}</h5>
@endsection
