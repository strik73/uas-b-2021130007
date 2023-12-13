@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <div class="card bg-dark p-3 m-2 align-items-center">
        <h3 class="text-light">
            UAS PBWL
        </h3>
        <h4 class="text-light">
            Yefta Steven Marcellius - 2021130007
        </h4>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-evenly my-3">
        <div class="card shadow bg-white" style="width:350px; height:230px">
            <div class="card-header mt-1"><strong>Orders</strong></div>
            <div class="card-body">
                <h4 class="card-title">Total Order : {{ $totalOrders }}</h4>
                <p>Silahkan tekan tombol order dibawah ini untuk melakukan <b>pemesanan</b></p>
            </div>
            <div class="card-footer">
                <a href="{{ route('order') }}" class="btn btn-primary btn-sm"> New Order</a>
            </div>
        </div>

        <div class="card shadow bg-white" style="width:350px; height:230px">
            <div class="card-header mt-1"><strong>Items</strong></div>
            <div class="card-body">
                <h4 class="card-title">Total Item : {{ $totalItems }}</h4>
                <p>Silahkan tekan tombol dibawah ini untuk melihat <b>list item</b></p>
            </div>
            <div class="card-footer">
                <a href="{{ route('items.index') }}" class="btn btn-primary btn-sm">View Item</a>
            </div>
        </div>
    </div>
    <br>
    <hr>

    <h5 class="mb-3">Order List</h5>
    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-info">
                <th style="width:15% " class="text-center" scope="col">Order ID</th>
                <th scope="col">Status Pembayaran</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <th class="text-center"  scope="row"><a href="{{ route('detail', $order) }}">
                            {{ $order->id }}
                    </th>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No items found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $orders->links() !!}
    </div>

@endsection
