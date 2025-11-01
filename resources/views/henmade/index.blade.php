@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<h2 class="mb-4">Daftar Produk</h2>

<div class="row">
    @foreach ($produk as $item)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ $item->gambar }}" class="card-img-top" alt="{{ $item->nama }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <a href="#" class="btn btn-success">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
