@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')


<section class="text-center py-5 bg-light shadow-sm">
    <div class="container">
        <h1 class="display-5 fw-bold mb-3">Tentang Kami</h1>
        <p class="lead text-muted">
            Kami adalah komunitas pengrajin lokal yang menciptakan produk handmade berkualitas tinggi
            dengan sentuhan seni dan keunikan khas Indonesia.
        </p>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('assets/images/workshop.jpg') }}" class="img-fluid rounded shadow" alt="Workshop Handmade">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Visi & Misi Kami</h2>
                <p class="text-muted">
                    Kami berkomitmen untuk memberdayakan pengrajin lokal dengan memberikan platform untuk menampilkan karya mereka.
                    Setiap produk dibuat dengan tangan, penuh ketelitian, dan cinta.
                </p>
                <ul class="list-unstyled">
                    <li>✅ Menyediakan produk handmade berkualitas tinggi</li>
                    <li>✅ Mendukung ekonomi kreatif lokal</li>
                    <li>✅ Melestarikan seni tradisional dengan sentuhan modern</li>
                </ul>
            </div>
        </div>
    </div>
</section>



<section class="py-5 text-center">
    <div class="container">
        <h3 class="fw-bold mb-3">Ingin melihat produk kami?</h3>
        <p class="text-muted mb-4">Jelajahi koleksi unik kami yang dibuat dengan cinta dan ketelitian.</p>
        <a href="{{ url('/') }}" class="btn btn-success btn-lg px-4">Lihat Produk</a>
    </div>
</section>
@endsection
