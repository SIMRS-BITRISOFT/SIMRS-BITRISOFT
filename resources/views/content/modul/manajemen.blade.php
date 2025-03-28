@extends('layout.main')

@section('content')
    <section id="manajemen" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Manajemen</h2>
                    <p class="lead text-muted">Modul ini dirancang untuk membantu dalam pengelolaan berbagai aspek di rumah sakit.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Fitur 1: Pengelolaan Stok -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-box me-1"></i>Stok
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pengelolaan Stok" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Pengelolaan Stok</h4>
                            <p class="card-text text-muted">Mengelola dan memantau stok obat dan alat kesehatan secara efisien. Modul ini mencakup fitur untuk memeriksa ketersediaan, melakukan pemesanan, dan mengelola inventaris secara keseluruhan.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 2: Manajemen Karyawan -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-person-lines-fill me-1"></i>Karyawan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Manajemen Karyawan" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Manajemen Karyawan</h4>
                            <p class="card-text text-muted">Mengelola data karyawan dan jadwal kerja dengan mudah. Modul ini memungkinkan pengaturan jam kerja, cuti, dan penilaian kinerja karyawan.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 3: Laporan Keuangan -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-graph-up me-1"></i>Keuangan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Keuangan" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Laporan Keuangan</h4>
                            <p class="card-text text-muted">Membuat dan mengelola laporan keuangan untuk analisis yang lebih baik. Modul ini mencakup fitur untuk pelacakan pengeluaran, pendapatan, dan pembuatan laporan keuangan bulanan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
