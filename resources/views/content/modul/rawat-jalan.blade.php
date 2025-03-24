@extends('layout.main')

@section('content')
    <section id="rawat-jalan" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Rawat Jalan</h2>
                    <p class="lead text-muted">Modul ini berisi informasi pelayanan medis yang diberikan kepada pasien untuk
                        tujuan observasi, diagnosis, pengobatan, rehabilitasi, dan pelayanan kesehatan lainnya.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Fitur 1: Pengelolaan Menu -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-list-check me-1"></i>Jadwal & Pendaftaran
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pengelolaan Menu" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Jadwal & Pendaftaran</h4>
                            <p class="card-text text-muted">Berisi informasi Untuk Pendaftaran pasien baru, Booking jadwal konsultasi dokter dan Cek antrian pasien.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 2: Monitoring Nutrisi -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-heart-pulse me-1"></i>Rujukan & Konsultasi
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Monitoring Nutrisi" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Rujukan & Konsultasi</h4>
                            <p class="card-text text-muted">Berisi informasi Rujukan ke dokter spesialis, Edukasi kesehatan dan Saran perawatan lanjutan.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 3: Laporan Gizi -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-file-earmark-text me-1"></i>Rekam Medis Pasien
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Gizi" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Rekam Medis Pasien</h4>
                            <p class="card-text text-muted">Berisi informasi Riwayat kunjungan, Hasil laboratorium & diagnosis dan Resep obat & terapi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
