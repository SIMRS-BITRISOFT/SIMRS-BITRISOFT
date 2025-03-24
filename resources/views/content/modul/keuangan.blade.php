@extends('layout.main')

@section('content')
    <section id="radiologi" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Keuangan</h2>
                    <p class="lead text-muted">Modul keuangan membantu dalam pengelolaan transaksi, pencatatan keuangan,
                        dan pelaporan finansial rumah sakit.</p>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-credit-card me-1"></i>Tagihan & Pembayaran
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Manajemen Tagihan"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Tagihan & Pembayaran</h4>
                            <p class="card-text text-muted">Mengelola pembuatan tagihan, pemrosesan pembayaran, dan
                                riwayat transaksi keuangan.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-cash-stack me-1"></i>Anggaran
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pengelolaan Anggaran"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Pengelolaan Anggaran</h4>
                            <p class="card-text text-muted">Merencanakan dan mengontrol anggaran rumah sakit untuk
                                pengeluaran yang lebih efisien.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-bar-chart-line me-1"></i>Laporan Keuangan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Keuangan"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Laporan Keuangan</h4>
                            <p class="card-text text-muted">Menyediakan laporan keuangan yang akurat untuk evaluasi keuangan dan audit rumah sakit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
