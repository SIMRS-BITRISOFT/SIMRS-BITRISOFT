@extends('layout.main')

@section('content')
    <section id="coding" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Coding</h2>
                    <p class="lead text-muted">Modul ini dirancang untuk membantu dalam pengelolaan data coding di rumah sakit.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Fitur 1: Pengelolaan Kode -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-code-slash me-1"></i>Kode
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pengelolaan Kode" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Pengelolaan Kode</h4>
                            <p class="card-text text-muted">Mengelola dan mendokumentasikan kode diagnosis dan prosedur medis.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 2: Laporan Coding -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="bi bi-file-earmark-text me-1"></i>Laporan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Coding" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Laporan Coding</h4>
                            <p class="card-text text-muted">Membuat dan mengelola laporan terkait aktivitas coding untuk analisis lebih lanjut.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 3: Pelatihan Coding -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-person-check me-1"></i>Pelatihan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pelatihan Coding" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Pelatihan Coding</h4>
                            <p class="card-text text-muted">Memberikan pelatihan dan sumber daya untuk meningkatkan keterampilan coding staf medis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
