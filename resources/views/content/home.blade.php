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

    {{--About--}}
    <section id="tentang-kami" class="overflow-hidden py-5" style="font-size: large">
        <div class="container-md mt-5 pb-5">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="tab-content" id="tabContent">
                        <div class="tab-pane fade show active" id="laboratory" role="tabpanel"
                             aria-labelledby="laboratory-tab" tabindex="0">
                            <h2 class="fw-bold pb-3 text-dark">Tentang Kami</h2>
                            <p>medical record adalah berkas yang memuat catatan dan dokumen tentang pasien.
                                Ini mencakup identitas, pemeriksaan, pengobatan, tindakan medis lain di sarana
                                pelayanan kesehatan untuk rawat jalan dan rawat inap baik dikelola pemerintah maupun
                                swasta. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                    <img src="assets/images/team-item.jpg" alt="Medical Record" style="width: 70%"
                         class="img-fluid rounded-custom">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2 class="fw-bold pb-2 text-dark">Visi</h2>
                    <p>medical record adalah berkas yang memuat catatan dan dokumen tentang pasien.
                        Ini mencakup identitas, pemeriksaan, pengobatan, tindakan medis lain di sarana
                        pelayanan kesehatan untuk rawat jalan dan rawat inap baik dikelola pemerintah maupun
                        swasta. </p>
                </div>
                <div class="col-md">
                    <h2 class="fw-bold pb-2 text-dark">Misi</h2>
                    <p>medical record adalah berkas yang memuat catatan dan dokumen tentang pasien.
                        Ini mencakup identitas, pemeriksaan, pengobatan, tindakan medis lain di sarana
                        pelayanan kesehatan untuk rawat jalan dan rawat inap baik dikelola pemerintah maupun
                        swasta. </p>
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
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="rawat-jalan" role="tabpanel"
                             aria-labelledby="rawat-jalan-tab" tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Rawat Jalan</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="rawat-inap" role="tabpanel"
                             aria-labelledby="rawat-inap-tab" tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Rawat Inap</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="laboratorium" role="tabpanel" aria-labelledby="laboratorium-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Laboratorium</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="radiologi" role="tabpanel"
                             aria-labelledby="radiologi-tab" tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Radiologi</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="farmasi" role="tabpanel" aria-labelledby="farmasi-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Farmasi</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="keuangan" role="tabpanel" aria-labelledby="keuangan-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Keuangan</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="kasir" role="tabpanel" aria-labelledby="kasir-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Kasir</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="manajemen" role="tabpanel" aria-labelledby="manajemen-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Manajemen</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="gizi" role="tabpanel" aria-labelledby="gizi-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Gizi</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="coding" role="tabpanel" aria-labelledby="coding-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Coding</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative" id="laporan" role="tabpanel" aria-labelledby="laporan-tab"
                             tabindex="0">
                            <h2 class="display-5 fw-bold pb-3 text-dark">Laporan</h2>
                            <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor
                                egestas condimentum et ac rutrum dui, odio.Vel non viverra ligula odio ornare turpis mauris. Aliquam,
                                tincidunt ut vitae elit risus.</p>
                            <p> Tempor egestas condimentum et ac rutrum dui, odio. Non viverra ligula odio ornare turpis mauris. Dio a
                                Vel non viverra ligula odio ornare turpis mauris.</p>
                            <div class="align-text-bottom">
                                <a href="departments.html" class="btn btn-primary btn-pill mt-4">Learn More</a>
                            </div>
                            <div  class="swiper mySwiper mt-4">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/banner-image.jpg" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/team-item.jpg" loading="lazy" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="unggulan" class="py-5 overflow-hidden bg-light">
    <div class="container" style="padding-top: 5px;">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <span class="text-primary fw-bold text-uppercase mb-3 d-block">Fitur Unggulan</span>
                <h2 class="display-5 fw-bold mb-3">Layanan Digital Terdepan</h2>
                <p class="lead text-muted">Sistem Informasi Rumah Sakit yang terintegrasi untuk pelayanan kesehatan yang lebih baik</p>
            </div>
        </div>
        <div class="row g-4 mb-4">
            <!-- V-CLAIM -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                    <div class="position-relative">
                        <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                            <span class="badge bg-primary rounded-pill px-3 py-2">
                                <i class="bi bi-shield-check me-1"></i>BPJS
                            </span>
                        </div>
                        <img src="{{asset('assets/images/post-item1.jpg')}}" alt="V-CLAIM" class="card-img-top" style="height: 200px; object-fit: cover;">
                    </div>
                    <div class="card-body p-4">
                        <div class="feature-icon mb-4 d-flex align-items-center">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle me-3" style="width: 48px; height: 48px;">
                                <i class="bi bi-clipboard2-pulse fs-4"></i>
                            </span>
                            <h4 class="card-title mb-0">V-CLAIM</h4>
                        </div>
                        <p class="card-text text-muted">Verifikasi kepesertaan dan klaim BPJS secara real-time dengan integrasi langsung ke sistem BPJS Kesehatan.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Verifikasi Kepesertaan</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Pengajuan Klaim</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Monitoring Status Klaim</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">
                            Pelajari Lebih Lanjut <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- M-JKN -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                    <div class="position-relative">
                        <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                            <span class="badge bg-success rounded-pill px-3 py-2">
                                <i class="bi bi-phone me-1"></i>Mobile
                            </span>
                        </div>
                        <img src="{{asset('assets/images/post-item1.jpg')}}" alt="M-JKN" class="card-img-top" style="height: 200px; object-fit: cover;">
                    </div>
                    <div class="card-body p-4">
                        <div class="feature-icon mb-4 d-flex align-items-center">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-success text-white rounded-circle me-3" style="width: 48px; height: 48px;">
                                <i class="bi bi-phone-fill fs-4"></i>
                            </span>
                            <h4 class="card-title mb-0">Mobile JKN</h4>
                        </div>
                        <p class="card-text text-muted">Akses layanan JKN melalui perangkat mobile untuk kemudahan pasien dalam mengakses layanan kesehatan.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Pendaftaran Online</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Cek Antrian</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Riwayat Kunjungan</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">
                            Pelajari Lebih Lanjut <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- APLICARES -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                    <div class="position-relative">
                        <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                            <span class="badge bg-info rounded-pill px-3 py-2">
                                <i class="bi bi-hospital me-1"></i>Rawat Inap
                            </span>
                        </div>
                        <img src="{{asset('assets/images/post-item1.jpg')}}" alt="APLICARES" class="card-img-top" style="height: 200px; object-fit: cover;">
                    </div>
                    <div class="card-body p-4">
                        <div class="feature-icon mb-4 d-flex align-items-center">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-info text-white rounded-circle me-3" style="width: 48px; height: 48px;">
                                <i class="bi bi-building fs-4"></i>
                            </span>
                            <h4 class="card-title mb-0">APLICARES</h4>
                        </div>
                        <p class="card-text text-muted">Aplikasi pencarian dan monitoring ketersediaan tempat tidur rumah sakit secara real-time.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i>Status Bed</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i>Informasi Kamar</li>
                            <li><i class="bi bi-check-circle-fill text-info me-2"></i>Update Otomatis</li>
                        </ul>
                        <a href="#" class="btn btn-outline-info rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">
                            Pelajari Lebih Lanjut <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Fitur 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                    <div class="position-relative">
                        <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                            <span class="badge bg-warning rounded-pill px-3 py-2">
                                <i class="bi bi-calendar-event me-1"></i>Jadwal
                            </span>
                        </div>
                        <img src="{{asset('assets/images/post-item1.jpg')}}" alt="Jadwal Praktek" class="card-img-top" style="height: 200px; object-fit: cover;">
                    </div>
                    <div class="card-body p-4">
                        <div class="feature-icon mb-4 d-flex align-items-center">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-warning text-white rounded-circle me-3" style="width: 48px; height: 48px;">
                                <i class="bi bi-calendar-check fs-4"></i>
                            </span>
                            <h4 class="card-title mb-0">Jadwal Praktek</h4>
                        </div>
                        <p class="card-text text-muted">Informasi jadwal praktek dokter untuk memudahkan pasien.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>Jadwal Harian</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>Notifikasi</li>
                            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Pengingat Janji Temu</li>
                        </ul>
                        <a href="#" class="btn btn-outline-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">
                            Pelajari Lebih Lanjut <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Fitur 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                    <div class="position-relative">
                        <div class="card-badge position-absolute top-0 start-0 mt-3 ms-3">
                            <span class="badge bg-danger rounded-pill px-3 py-2">
                                <i class="bi bi-exclamation-triangle me-1"></i>Darurat
                            </span>
                        </div>
                        <img src="{{asset('assets/images/post-item1.jpg')}}" alt="Layanan Darurat" class="card-img-top" style="height: 200px; object-fit: cover;">
                    </div>
                    <div class="card-body p-4">
                        <div class="feature-icon mb-4 d-flex align-items-center">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-danger text-white rounded-circle me-3" style="width: 48px; height: 48px;">
                                <i class="bi bi-exclamation-circle"></i>
                            </span>
                            <h4 class="card-title mb-0">Layanan Darurat</h4>
                        </div>
                        <p class="card-text text-muted">Layanan darurat 24 jam untuk penanganan cepat dan tepat.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-danger me-2"></i>Respon Cepat</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-danger me-2"></i>Tim Medis Terlatih</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i>Fasilitas Lengkap</li>
                        </ul>
                        <a href="#" class="btn btn-outline-danger rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalunggulan">
                            Pelajari Lebih Lanjut <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- Fitur Lainnya --}}
    <section id="umum" class="py-5 overflow-hidden">
        <div class="container" style="padding-top: 5px;">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <span class="text-primary fw-bold text-uppercase mb-3 d-block">Fitur Pendukung</span>
                    <h2 class="display-5 fw-bold mb-3">Solusi Terintegrasi</h2>
                    <p class="lead text-muted">Berbagai fitur pendukung untuk meningkatkan efisiensi dan kualitas layanan kesehatan</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Farmasi -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="card-body p-4 text-center">
                            <div class="feature-icon mb-4">
                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-warning text-white rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="bi bi-capsule fs-3"></i>
                                </span>
                            </div>
                            <h5 class="card-title mb-3">Manajemen Farmasi</h5>
                            <p class="card-text text-muted small">Pengelolaan stok obat dan alat kesehatan terintegrasi</p>
                            <div class="mt-4">
                                <span class="badge bg-warning text-dark me-2">Stok Obat</span>
                                <span class="badge bg-warning text-dark me-2">e-Resep</span>
                                <span class="badge bg-warning text-dark">Alkes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Laboratorium -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="card-body p-4 text-center">
                            <div class="feature-icon mb-4">
                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-danger text-white rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="bi bi-thermometer"></i>
                                </span>
                            </div>
                            <h5 class="card-title mb-3">Laboratorium</h5>
                            <p class="card-text text-muted small">Pengelolaan hasil lab dan tracking specimen</p>
                            <div class="mt-4">
                                <span class="badge bg-danger me-2">Hasil Lab</span>
                                <span class="badge bg-danger me-2">Tracking</span>
                                <span class="badge bg-danger">Report</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Radiologi -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="card-body p-4 text-center">
                            <div class="feature-icon mb-4">
                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-success text-white rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="bi bi-radioactive fs-3"></i>
                                </span>
                            </div>
                            <h5 class="card-title mb-3">Radiologi</h5>
                            <p class="card-text text-muted small">Manajemen hasil radiologi dan pencitraan medis</p>
                            <div class="mt-4">
                                <span class="badge bg-success me-2">PACS</span>
                                <span class="badge bg-success me-2">Imaging</span>
                                <span class="badge bg-success">Hasil</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Billing -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="card-body p-4 text-center">
                            <div class="feature-icon mb-4">
                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="bi bi-receipt fs-3"></i>
                                </span>
                            </div>
                            <h5 class="card-title mb-3">Billing System</h5>
                            <p class="card-text text-muted small">Manajemen tagihan dan pembayaran pasien</p>
                            <div class="mt-4">
                                <span class="badge bg-primary me-2">Kasir</span>
                                <span class="badge bg-primary me-2">Tagihan</span>
                                <span class="badge bg-primary">Laporan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .hover-shadow:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
            transition: all 0.3s ease;
        }
        .transition-all {
            transition: all 0.3s ease;
        }
        .card-badge {
            z-index: 2;
        }
        .icon-wrapper {
            transition: all 0.3s ease;
        }
        .card:hover .icon-wrapper {
            transform: scale(1.1);
        }
    </style>

    <section id="contact" class="padding-large mb-0">
        <div class="container">
            <div class="row">
                <div class="display-header text-center mb-5">
                    <h2 class="display-5 fw-bold text-dark">Hubungi: <span class="text-primary-500">(+62) No SIMRS</span></h2>
                    <p class="text-muted mt-3">Isi formulir di bawah ini untuk menjadwalkan janji temu dengan dokter Anda.</p>
                </div>
                <form class="contact-form d-flex flex-wrap gx-3">
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
                        <input type="date" name="date" class="form-control bg-transparent ps-4 border border-radius-10">
                    </div>
                    <!-- Waktu Janji Temu -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                            <input type="time" name="time" class="form-control bg-transparent ps-4 border border-radius-10">
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
