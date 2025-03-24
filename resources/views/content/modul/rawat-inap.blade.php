@extends('layout.main')

@section('content')
    <section id="rawat-inap" class="overflow-hidden py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">Modul Rawat Inap</h2>
                    <p class="lead text-muted">Modul ini berisi informasi untuk layanan perawatan kesehatan di rumah sakit yang mengharuskan pasien tinggal di rumah sakit.</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Fitur 1: Pengelolaan Menu -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="bi bi-list-check me-1"></i>Pendaftaran & Informasi Kamar
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Pengelolaan Menu" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Pendaftaran & Informasi Kamar</h4>
                            <p class="card-text text-muted">Berisi informasi Pendaftaran pasien rawat inap, Cek ketersediaan kamar dan Jenis & fasilitas kamar.</p>
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
                            <p class="card-text text-muted">Berisi Catatan perkembangan pasien, Tindakan medis & pengobatan dan Jadwal kunjungan dokter.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 3: Laporan Gizi -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative">
                            <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                                <span class="badge bg-info rounded-pill px-3 py-2">
                                    <i class="bi bi-file-earmark-text me-1"></i>Administrasi & Kepulangan
                                </span>
                            </div>
                            <img src="{{asset('assets/images/post-item2.jpg')}}" alt="Laporan Gizi" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title mb-3">Administrasi & Kepulangan</h4>
                            <p class="card-text text-muted">Berisi informasi Biaya perawatan & pembayaran, Prosedur kepulangan pasien dan Rujukan & kontrol lanjutan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
