@extends('layouts.master')

@section('title', $item->nama)

@section('content')

    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Item's Detail : {{ $item->nama }}</h1>
    </div>

    <div>
        <div class="card p-3 m-3 shadow bg-white">
            <div class="card-body">
                <h3 class="card-title pb-3">{{ $item->id }}</h3>
                <p style="font-size:18pt" class="card-text">Nama Produk : {{ $item->nama }}</>
                </p>
            </div>
        </div>

        <div class="card m-3 px-3 pb-2 pt-4 bg-white shadow">
            <h5 class="pb-3">Harga Satuan : Rp. {{ number_format($item->harga,2) }} </h5>
        </div>
        <div class="card m-3 p-3 bg-white shadow">
            <h5>Jumlah Stok : {{ $item->stok }}</h5>
        </div>
    </div>

@endsection
