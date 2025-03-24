@extends('layout.main')

@section('content')
    <section id="laporan" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Laporan</h2>
                    <p class="lead text-muted">Modul ini dirancang untuk membantu dalam pengelolaan dan pembuatan laporan di rumah sakit.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Fitur 1: Laporan Harian -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-file-earmark-text me-1"></i>Laporan Harian
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Harian" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Laporan Harian</h4>
                            <p class="card-text text-muted">Membuat dan mengelola laporan harian terkait aktivitas rumah sakit.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 2: Laporan Bulanan -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-file-earmark-text me-1"></i>Laporan Bulanan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Bulanan" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Laporan Bulanan</h4>
                            <p class="card-text text-muted">Membuat dan mengelola laporan bulanan untuk analisis kinerja rumah sakit.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 3: Laporan Tahunan -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-file-earmark-text me-1"></i>Laporan Tahunan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Tahunan" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Laporan Tahunan</h4>
                            <p class="card-text text-muted">Membuat dan mengelola laporan tahunan untuk evaluasi dan perencanaan strategis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
