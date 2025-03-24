@extends('layout.main')

@section('content')
    <section id="farmasi" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Farmasi</h2>
                    <p class="lead text-muted">Modul farmasi membantu dalam pengelolaan obat, stok, dan distribusi
                        farmasi di rumah sakit.</p>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-capsule me-1"></i>Manajemen Stok
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Manajemen Stok"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Manajemen Stok</h4>
                            <p class="card-text text-muted">Mengelola stok obat secara real-time untuk memastikan
                                ketersediaan obat di rumah sakit.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-truck me-1"></i>Distribusi Obat
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Distribusi Obat"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Distribusi Obat</h4>
                            <p class="card-text text-muted">Mengelola distribusi obat ke berbagai unit dalam rumah sakit
                                dengan sistem yang terintegrasi.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-bar-chart me-1"></i>Pelaporan & Analisis
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pelaporan dan Analisis Obat"
                                 class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Pelaporan dan Analisis Obat</h4>
                            <p class="card-text text-muted">Menganalisis penggunaan obat dan membuat laporan untuk
                                efisiensi manajemen farmasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
