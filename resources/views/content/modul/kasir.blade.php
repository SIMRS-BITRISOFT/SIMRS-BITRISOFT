@extends('layout.main')

@section('content')
    <section id="kasir" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Kasir</h2>
                    <p class="lead text-muted">Modul kasir dirancang untuk membantu dalam pengelolaan transaksi pembayaran pasien secara cepat dan akurat.</p>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-cash-register me-1"></i>Transaksi Pembayaran
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Transaksi Pembayaran"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Transaksi Pembayaran</h4>
                            <p class="card-text text-muted">Memproses pembayaran pasien dengan berbagai metode, termasuk tunai dan non-tunai.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-receipt me-1"></i>Pencatatan Kas
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pencatatan Kas"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Pencatatan Kas</h4>
                            <p class="card-text text-muted">Mengelola pencatatan pemasukan dan pengeluaran kas secara real-time.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-file-earmark-bar-graph me-1"></i>Laporan Kasir
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Kasir"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Laporan Kasir</h4>
                            <p class="card-text text-muted">Menyediakan laporan transaksi harian kasir untuk evaluasi keuangan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
