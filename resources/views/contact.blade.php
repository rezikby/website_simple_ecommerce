@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')


<section class="text-center py-5 bg-light shadow-sm">
    <div class="container">
        <h1 class="display-5 fw-bold mb-3">Kontak Kami</h1>
        <p class="lead text-muted">
            Hubungi kami untuk pertanyaan, kerjasama, atau informasi lebih lanjut mengenai produk handmade kami.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="fw-bold mb-3">Kirim Pesan</h2>
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success px-4">Kirim Pesan</button>
                </form>
            </div>

            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Informasi Kami</h2>
                <p class="text-muted">
                    Kamu bisa menghubungi kami melalui alamat, telepon, atau email berikut:
                </p>
                <ul class="list-unstyled">
                    <li>🏠 Alamat: Jl. Rawa Burung, Tanggerang Selatan, Indonesia</li>
                    <li>📞 Telepon: +62 838 1945 6309</li>
                    <li>✉️ Email: adamdamiri2005@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="py-5 text-center">
    <div class="container">
        <h3 class="fw-bold mb-3">Masih ada pertanyaan?</h3>
        <p class="text-muted mb-4">Tim kami siap membantu kamu dengan cepat dan ramah.</p>
        <a href="{{ url('/') }}" class="btn btn-success btn-lg px-4">Kembali ke Beranda</a>
    </div>
</section>

@endsection
