@extends('layout.main')

@section('content')
    <section id="laboratorium" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Laboratorium</h2>
                    <p class="lead text-muted">Modul ini berisi informasi tentang ruangan yang dilengkapi dengan peralatan
                        untuk melakukan percobaan dan penelitian.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Fitur 1: Pengelolaan Menu -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-list-check me-1"></i>Pendaftaran & Jadwal Pemeriksaan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pengelolaan Menu" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Pendaftaran & Jadwal Pemeriksaan</h4>
                            <p class="card-text text-muted">Berisikan Pendaftaran tes laboratorium, Jadwal pemeriksaan & antrian dan Informasi biaya tes.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 2: Monitoring Nutrisi -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-heart-pulse me-1"></i>JFasilitas & Peralatan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Monitoring Nutrisi" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Fasilitas & Peralatan</h4>
                            <p class="card-text text-muted">Daftar peralatan laboratorium, Standar keamanan & prosedur serta Panduan persiapan sebelum pemeriksaan.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 3: Laporan Gizi -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-file-earmark-text me-1"></i>Hasil Pemeriksaan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Gizi" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Hasil Pemeriksaan</h4>
                            <p class="card-text text-muted">Hasil Cek hasil laboratorium online, Unduh laporan hasil tes dan Riwayat pemeriksaan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
