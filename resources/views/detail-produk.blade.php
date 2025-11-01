@extends('layouts.app')

@section('title', $produk->name)

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('assets/images/' . $produk->image) }}" class="img-fluid rounded shadow-sm" alt="{{ $produk->name }}">
        </div>

        <div class="col-md-6">
            <h2>{{ $produk->name }}</h2>
            <p class="text-muted">Artisan: {{ $produk->artisan }}</p>
            <p><strong>Material:</strong> {{ $produk->material }}</p>
            <p><strong>Price:</strong> Rp {{ number_format($produk->price, 0, ',', '.') }}</p>
            <p class="mt-3">Description: {{ $produk->description }}</p>

            <a href="{{ route('home') }}" class="btn btn-secondary mt-4">← Kembali ke Daftar Produk</a>
        </div>
    </div>
</div>
@endsection
