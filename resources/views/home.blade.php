@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- bagian heroo nyaa gambar atas yang ada slide -->
<div id="heroCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/images/hero1.jpg') }}" class="d-block w-100" alt="Hero 1" style="height: 500px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
        <h2>Selamat Datang di Handmade Store</h2>
        <p>Temukan kerajinan tangan unik buatan pengrajin lokal.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/hero2.jpg') }}" class="d-block w-100" alt="Hero 2" style="height: 500px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
        <h2>Kualitas Terbaik</h2>
        <p>Semua produk dibuat dengan detail dan cinta.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/hero3.jpg') }}" class="d-block w-100" alt="Hero 3" style="height: 500px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
        <h2>Dukung Pengrajin Lokal</h2>
        <p>Setiap pembelian membantu ekonomi kreatif Indonesia.</p>
      </div>
    </div>
  </div>

  <!-- tombol kiri kanan yang di heroo -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- dafyar produk -->
<h2 class="mb-4">Daftar Produk</h2>
<div class="row">
  @foreach ($produk as $item)
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('assets/images/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $item->name }}</h5>
           <p class="card-text text-muted">Material :{{ $item->material }}</p>
            <p class="card-text text-muted">Artisan :{{ $item->artisan }}</p>
          <p class="card-text text-muted">Description :{{ $item->description }}</p>
          <p class="fw-bold">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
          <a href="{{ route('detail-produk', $item->id) }}" class="btn btn-primary">Lihat Detail</a>

        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
