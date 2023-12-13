@extends('layouts.master')

@section('title', $item->nama)

@section('content')

    <div class="mt-4 p-5 bg-black bg-gradient text-white rounded">
        <h1>Item's Detail : {{ $item->nama }}</h1>
    </div>

    <div>
        <div class="card p-3 m-3 shadow bg-white">
            <h4 class="card-header pb-4">ID : {{ $item->id }}</h4>
            <div class="card-body mb-0">
                <p style="font-size:12pt" class="card-text">Nama Produk : {{ $item->nama }}</p>
                <p style="font-size:12pt" class="card-text">Harga Satuan : Rp. {{ number_format($item->harga,2) }} </p>
            </div>
            <p class="card-footer mb-0   mt-3 pt-3"><b>Jumlah Stok :</b> {{ $item->stok }}</p>
        </div>
    </div>

@endsection
