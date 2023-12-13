@extends('layouts.master')

@section('title', 'Items')

@section('content')
    <div class="mt-4 p-4 bg-black bg-gradient text-white rounded">
        <h1 style="text-align: center">Item List</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container mt-4 p-3">
        <a href="{{ route('items.create') }}" class="btn btn-primary btn-md">Add New Items</a><br>
    </div>
    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-success">
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <th scope="row"><a href="{{ route('items.show', $item) }}">
                            {{ $item->id }}
                    </th>
                    <td>{{ $item->nama }}</td>
                    <td>Rp. {{ number_format($item->harga,2) }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item) }}" class="btn btn-primary btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('items.destroy', $item) }}" method="POST"
                            class="d-inline-block">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No items found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $items->links() !!}
    </div>
    </div>
@endsection
