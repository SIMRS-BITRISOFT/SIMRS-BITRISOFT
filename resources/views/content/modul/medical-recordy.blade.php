@extends('layout.main')

@section('content')
    <section id="medical-recordy" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Medical Recordy</h2>
                    <p class="lead text-muted">Modul ini dirancang untuk melihat catatan dan dokumen tentang pasien dan perawatan yang diberikan kepadanya.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Fitur 1: Pengelolaan Menu -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-list-check me-1"></i>Informasi Pasien
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pengelolaan Menu" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Informasi Pasien</h4>
                            <p class="card-text text-muted">Berisi informasi data dari pasien.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 2: Monitoring Nutrisi -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-heart-pulse me-1"></i>Riwayat Perawatan & Tindakan Medis
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Monitoring Nutrisi" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Riwayat Perawatan & Tindakan Medis</h4>
                            <p class="card-text text-muted">Berisi informasi Riwayat penyakit dan Tindakan yang telah dilakukan sebelumnya.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 3: Laporan Gizi -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-file-earmark-text me-1"></i>Hasil Pemeriksaan & Diagnosis
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Gizi" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Hasil Pemeriksaan & Diagnosis</h4>
                            <p class="card-text text-muted">Berisi informasi Diagnosis terbaru dari pasien dan Hasil laboratorium & radiologi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
