@extends('layouts.master')

@section('title', 'Add New Item')

@section('content')

    <div class="mt-4 p-4 bg-black text-white rounded">
        <h1>Input Item Data</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('items.store') }}" method="POST">
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" maxlength="16" class="form-control" id="id" name="id" value="{{ old('id') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" step="0.01" min="0.01" class="form-control" id="harga" name="harga" value="{{ old('harga') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="stok" min="1" class="form-control" id="stok" name="stok" value="{{ old('stok') }}">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection
