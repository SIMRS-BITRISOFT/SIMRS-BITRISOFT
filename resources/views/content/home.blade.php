@extends('layout.main')

@section('title', 'Home')

@section('content')
    <section id="intro" class="position-relative overflow-hidden">
        <div class="banner">
            <img src="{{asset('assets/images/banner-image.jpg')}}" alt="banner" class="img-fluid">
            <div class="container">
                <div class="banner-content position-absolute padding-large">
          <span
              class="sub-heading bg-light py-2 px-4 mb-4 border-radius-30 text-uppercase d-inline-block text-cadet-blue fw-medium">
            <svg class="heart primary-color me-2" width="20" height="20">
              <use xlink:href="#heart" />
            </svg>Live your life
          </span>
                    <h1 class="display-3 fw-bold text-dark">We Care About Your Health</h1>
                    <p class="mt-3 mb-4">Vitae aliquam vestibulum elit adipiscing massa diam in dignissim. Risus tellus libero
                        elementum aliquam etiam. Lectus adipiscing est auctor mi quisque nunc non viverra est.</p>
                    <a href="#contact" class="btn btn-medium btn-primary btn-pill text-uppercase">Contact us</a>
                </div>
            </div>
        </div>
    </section>

    {{--Modul--}}
    <section id="modul" class="overflow-hidden py-5" style="font-size: large">
        <div class="container-md mt-4">
            <h1>Modul</h1>
            <p>Modul SIMRS BITRISOFT : Medical Record, Rawat Jalan, Rawat Inap, Laboratorium, Radiologi, Farmasi,
                Keuangan, Kasir, Manajemen , Gizi, Coding, Laporan</p>
            <div class="row">
                <div class="medical-department-tab bg-primary-200 d-flex align-items-start padding-large ps-5 border-radius-20">
                    <div class="nav nav-tabs border-0 col-lg-4 col-md-4 ps-4" id="medical-tab" role="tablist"
                         aria-orientation="vertical">
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4 active"
                                id="medical-tab" data-bs-toggle="tab" data-bs-target="#medical" type="button" role="tab"
                                aria-controls="medical" aria-selected="true">Medical Recordy</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4" id="rawat-tab"
                                data-bs-toggle="tab" data-bs-target="#rawat-jalan" type="button" role="tab" aria-controls="rawat-jalan"
                                aria-selected="false">Rawat Jalan</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4" id="rawat-inap-tab"
                                data-bs-toggle="tab" data-bs-target="#rawat-inap" type="button" role="tab" aria-controls="gynecology"
                                aria-selected="false">Rawat Inap</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4" id="laboratorium-tab"
                                data-bs-toggle="tab" data-bs-target="#laboratorium" type="button" role="tab" aria-controls="pathology"
                                aria-selected="false">Laboratorium</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4" id="radiologi-tab"
                                data-bs-toggle="tab" data-bs-target="#radiologi" type="button" role="tab" aria-controls="pediatrics"
                                aria-selected="false">Radiologi</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent" id="farmasi-tab"
                                data-bs-toggle="tab" data-bs-target="#farmasi" type="button" role="tab" aria-controls="neurology"
                                aria-selected="false">Farmasi</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4 active"
                                id="keuangan-tab" data-bs-toggle="tab" data-bs-target="#keuangan" type="button" role="tab"
                                aria-controls="laboratory" aria-selected="true">Keuangan</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4" id="kasir-tab"
                                data-bs-toggle="tab" data-bs-target="#kasir" type="button" role="tab" aria-controls="cardiology"
                                aria-selected="false">Kasir</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4" id="manajemen-tab"
                                data-bs-toggle="tab" data-bs-target="#manajemen" type="button" role="tab" aria-controls="gynecology"
                                aria-selected="false">Manajemen</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4" id="gizi-tab"
                                data-bs-toggle="tab" data-bs-target="#gizi" type="button" role="tab" aria-controls="pathology"
                                aria-selected="false">Gizi</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent pb-4" id="coding-tab"
                                data-bs-toggle="tab" data-bs-target="#coding" type="button" role="tab" aria-controls="pediatrics"
                                aria-selected="false">Coding</button>
                        <button class="nav-link text-uppercase text-cadet-blue border-0 bg-transparent" id="laporan-tab"
                                data-bs-toggle="tab" data-bs-target="#laporan" type="button" role="tab" aria-controls="neurology"
                                aria-selected="false">Laporan</button>
                    </div>
                    <div class="tab-content col-lg-8 col-md-8" id="tabContent">
                        <div class="tab-pane fade show active position-relative" id="medical" role="tabpanel"
                             aria-labelledby="medical-tab" tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Medical Recordy</h2>
                            <p>Laboratory analysis means a test performed by a labo- ratory on body fluid, tissue, or excretion for
                                the purpose of determining the presence, absence, or concentration of various substances in the human
                                body.</p>
                            <p>Sampling is the process of collecting a portion of an environmental medium as representative of the
                                locally remaining medium. The collected portion of the medium is then analyzed to determine the
                                radionuclide concentration.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="rawat-jalan" role="tabpanel"
                             aria-labelledby="rawat-jalan-tab" tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Rawat Jalan</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="rawat-inap" role="tabpanel"
                             aria-labelledby="rawat-inap-tab" tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Rawat Inap</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="laboratorium" role="tabpanel" aria-labelledby="laboratorium-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Laboratorium</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="radiologi" role="tabpanel"
                             aria-labelledby="radiologi-tab" tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Radiologi</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="farmasi" role="tabpanel" aria-labelledby="farmasi-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Farmasi</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="keuangan" role="tabpanel" aria-labelledby="keuangan-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Keuangan</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="kasir" role="tabpanel" aria-labelledby="kasir-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Kasir</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="manajemen" role="tabpanel" aria-labelledby="manajemen-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Manajemen</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="gizi" role="tabpanel" aria-labelledby="gizi-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Gizi</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="coding" role="tabpanel" aria-labelledby="coding-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Coding</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>
                        <div class="tab-pane fade position-relative" id="laporan" role="tabpanel" aria-labelledby="laporan-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Laporan</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <p><a href="#" class="text-primary pe-3">Neurocritical Care</a><a href="#" class="text-primary pe-3">Neuro
                                    Oncology</a><a href="#" class="text-primary pe-3">Geriatric Neurology</a></p>
                            <a href="departments.html" class="btn btn-medium btn-primary btn-pill mt-4">Learn More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Fitur Unggulan --}}
    <section id="unggulan" class="py-5 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="section-heading fw-bold text-primary">FITUR UNGGULAN</h2>
                    <p class="text-muted pb-3">Menyediakan layanan digital terdepan untuk kenyamanan pasien dan efisiensi pelayanan</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- V-CLAIM -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card shadow rounded-3">
                        <div class="card-img-top text-white" style="background-color: #1cbccf">
                            <img src="{{asset('assets/images/post-item1.jpg')}}" alt="banner" class="img-fluid" style="height: 200px; width: 100%;">
                        </div>
                        <div class="card-icon bg-white text-primary shadow">
                            <i class="bi bi-file-earmark-check"></i>
                        </div>
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">V-CLAIM</h4>
                            <p class="card-text text-muted mb-4">Verifikasi dan klaim pasien BPJS secara digital untuk mempercepat proses administrasi dan pelayanan.</p>
                            <a href="#" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <!-- M-JKN -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card shadow rounded-3">
                        <div class="card-img-top text-white" style="background-color: #1cbccf">
                            <img src="{{asset('assets/images/post-item1.jpg')}}" alt="banner" class="img-fluid" style="height: 200px; width: 100%;">
                        </div>
                        <div class="card-icon bg-white text-primary shadow">
                            <i class="bi bi-phone"></i>
                        </div>
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">M-JKN</h4>
                            <p class="card-text text-muted mb-4">Akses layanan JKN melalui aplikasi mobile untuk kemudahan pasien.</p>
                            <a href="#" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <!-- APLICARES -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card shadow rounded-3">
                        <div class="card-img-top text-white" style="background-color: #1cbccf">
                            <img src="{{asset('assets/images/post-item1.jpg')}}" alt="banner" class="img-fluid" style="height: 200px; width: 100%;">
                        </div>
                        <div class="card-icon bg-white text-primary shadow">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">APLICARES</h4>
                            <p class="card-text text-muted mb-4">Sistem reservasi online untuk memudahkan pasien membuat janji temu.</p>
                            <a href="#" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 offset-lg-2">
                    <div class="card feature-card shadow rounded-3">
                        <div class="card-img-top text-white" style="background-color: #1cbccf">
                            <img src="{{asset('assets/images/post-item1.jpg')}}" alt="banner" class="img-fluid" style="height: 200px; width: 100%;">
                        </div>
                        <div class="card-icon bg-white text-primary shadow">
                            <i class="bi bi-heart"></i>
                        </div>
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">I-CARE</h4>
                            <p class="card-text text-muted mb-4">Layanan informasi dan bantuan pasien secara real-time.</p>
                            <a href="#" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <!-- Rekam Medis Elektronik (RME) -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card shadow rounded-3">
                        <div class="card-img-top text-white" style="background-color: #1cbccf">
                            <img src="{{asset('assets/images/post-item1.jpg')}}" alt="banner" class="img-fluid" style="height: 200px; width: 100%;">
                        </div>
                        <div class="card-icon bg-white text-primary shadow">
                            <i class="bi bi-file-earmark-medical"></i>
                        </div>
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">Rekam Medis Elektronik (RME)</h4>
                            <p class="card-text text-muted mb-4">Sistem rekam medis digital untuk mengelola data pasien secara terintegrasi.</p>
                            <a href="#" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fitur Lainnya --}}
    <section id="umum" class="py-5 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="section-heading fw-bold text-primary">FITUR LAINNYA</h2>
                    <p class="text-muted pb-3">Berbagai fitur pendukung untuk meningkatkan efisiensi dan kualitas layanan</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 offset-lg-2">
                    <div class="card feature-card shadow rounded-3">
                        <div class="card-img-top text-white" style="background-color: #1cbccf">
                            <img src="{{asset('assets/images/post-item1.jpg')}}" alt="banner" class="img-fluid" style="height: 200px; width: 100%;">
                        </div>
                        <div class="card-icon bg-white text-primary shadow">
                            <i class="bi bi-capsule"></i>
                        </div>
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">Pencatatan Stok Alkes (Farmasi)</h4>
                            <p class="card-text text-muted mb-4">Sistem pencatatan stok alat kesehatan yang terintegrasi dengan farmasi.</p>
                            <a href="#" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalumum">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card shadow rounded-3">
                        <div class="card-img-top text-white" style="background-color: #1cbccf">
                            <img src="{{asset('assets/images/post-item1.jpg')}}" alt="banner" class="img-fluid" style="height: 200px; width: 100%;">
                        </div>
                        <div class="card-icon bg-white text-primary shadow">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">Jadwal Praktek Dokter</h4>
                            <p class="card-text text-muted mb-4">Informasi jadwal praktek dokter untuk memudahkan pasien.</p>
                            <a href="#" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalumum">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 offset-lg-2">
                    <div class="card feature-card shadow rounded-3">
                        <div class="card-img-top text-white" style="background-color: #1cbccf">
                            <img src="{{asset('assets/images/post-item1.jpg')}}" alt="banner" class="img-fluid" style="height: 200px; width: 100%;">
                        </div>
                        <div class="card-icon bg-white text-primary shadow">
                            <i class="bi bi-megaphone"></i>
                        </div>
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">Antrian (Display & Pemanggilan)</h4>
                            <p class="card-text text-muted mb-4">Sistem antrian digital dengan display dan pemanggilan pasien.</p>
                            <a href="#" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalumum">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card shadow rounded-3">
                        <div class="card-img-top text-white" style="background-color: #1cbccf">
                            <img src="{{asset('assets/images/post-item1.jpg')}}" alt="banner" class="img-fluid" style="height: 200px; width: 100%;">
                        </div>
                        <div class="card-icon bg-white text-primary shadow">
                            <i class="bi bi-house-door"></i>
                        </div>
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">Dashboard Kamar</h4>
                            <p class="card-text text-muted mb-4">Monitoring ketersediaan kamar rawat inap secara real-time.</p>
                            <a href="#" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalumum">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="padding-large mb-0">
        <div class="container">
            <div class="row">
                <div class="display-header text-center mb-5">
                    <h2 class="display-5 fw-bold text-dark">Hubungi: <span class="text-primary-500">(+62) No SIMRS</span></h2>
                    <p class="text-muted mt-3">Isi formulir di bawah ini untuk menjadwalkan janji temu dengan dokter Anda.</p>
                </div>
                <form class="contact-form d-flex flex-wrap gx-3">
                    <!-- Pilih Poli/Klinik -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <select class="form-select focus-transparent border border-radius-10 ps-4" aria-invalid="false" name="poli">
                            <option value="Select Your Department">Pilih Poli/Klinik</option>
                            <option value="Poli Umum">Poli Umum</option>
                            <option value="Poli Gigi">Poli Gigi</option>
                            <option value="Poli Anak">Poli Anak</option>
                            <option value="Poli Kandungan">Poli Kandungan</option>
                            <option value="Poli Bedah">Poli Bedah</option>
                        </select>
                    </div>
                    <!-- Pilih Dokter -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <select class="form-select focus-transparent border ps-4 border-radius-10" aria-invalid="false" name="doctor">
                            <option value="Select Your Doctor">Pilih Dokter</option>
                            <option value="Dr. Ahmad Budiman">Dr. Ahmad Budiman</option>
                            <option value="Dr. Siti Rahayu">Dr. Siti Rahayu</option>
                            <option value="Dr. Rudi Hermawan">Dr. Rudi Hermawan</option>
                        </select>
                    </div>
                    <!-- Nama Lengkap -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input type="text" name="name" placeholder="Nama Lengkap" class="form-control border ps-4 border-radius-10">
                    </div>
                    <!-- Nomor Telepon -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input type="text" name="phone" placeholder="Nomor Telepon" class="form-control border ps-4 border-radius-10">
                    </div>
                    <!-- Tanggal Janji Temu -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <div class="input-group date" id="datepicker">
                            <input type="date" name="date" class="form-control bg-transparent ps-4 border border-radius-10">
                        </div>
                    </div>
                    <!-- Waktu Janji Temu -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <div class="input-group time" id="timepicker">
                            <input type="time" name="time" class="form-control bg-transparent ps-4 border border-radius-10">
                        </div>
                    </div>
                    <!-- Tombol Submit -->
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-pill text-uppercase" data-bs-toggle="modal" data-bs-target="#modalcontact">Jadwalkan Janji Temu</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Modal Contact -->
    <div class="modal fade" id="modalcontact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Jadwal Temu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Selamat Anda telah berhasil menjadwalkan janji temu dengan dokter.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Lihat Jadwal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Fitur Unggulan-->
    <div class="modal fade" id="modalunggulan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Lebih Lanjut</h1>
                </div>
                <div class="modal-body">
                    <p>Fitur ini merupakan layanan digital terdepan yang disediakan untuk kenyamanan pasien dan efisiensi pelayanan.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Fitur Lainnya-->
    <div class="modal fade" id="modalumum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Lebih Lanjut</h1>
                </div>
                <div class="modal-body">
                    <p>Fitur ini merupakan layanan digital terdepan yang disediakan untuk kenyamanan pasien dan efisiensi pelayanan.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

@endsection
