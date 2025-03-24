@extends('layout.main')

@section('content')
    <section id="radiologi" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Radiologi</h2>
                    <p class="lead text-muted">Modul radiologi membantu dalam pencitraan medis, analisis hasil, dan
                        pengelolaan data pasien dengan lebih cepat dan akurat.</p>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-hospital me-1"></i>Manajemen Pemeriksaan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Manajemen Pemeriksaan"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Manajemen Pemeriksaan</h4>
                            <p class="card-text text-muted">Mengelola jadwal dan hasil pemeriksaan radiologi dengan sistem digital.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-cloud-upload me-1"></i>Penyimpanan PACS
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Penyimpanan PACS"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Penyimpanan Gambar PACS</h4>
                            <p class="card-text text-muted">Menyimpan dan mengakses gambar medis secara digital melalui sistem PACS.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-robot me-1"></i>Analisis AI
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Analisis AI"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Analisis dan Pelaporan AI</h4>
                            <p class="card-text text-muted">Menggunakan kecerdasan buatan untuk membantu interpretasi hasil radiologi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
