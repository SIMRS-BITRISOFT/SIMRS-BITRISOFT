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
                    <a href="contact.html" class="btn btn-medium btn-primary btn-pill text-uppercase">Contact us</a>
                </div>
            </div>
        </div>
    </section>

    {{--About--}}
    <section id="tentang-kami" class="overflow-hidden" style="font-size: larger">
        <div class="container-md mt-5 pb-5">
            <div >
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
        </div>

        <div class="container-md mt-5">
            <div >
                <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                        <img src="assets/images/team-item.jpg" alt="Medical Record" style="width: 70%"
                             class="img-fluid rounded-custom">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="laboratory" role="tabpanel"
                                 aria-labelledby="laboratory-tab" tabindex="0">
                                <h2 class="fw-bold pb-2 text-dark">Visi</h2>
                                <p>medical record adalah berkas yang memuat catatan dan dokumen tentang pasien.
                                    Ini mencakup identitas, pemeriksaan, pengobatan, tindakan medis lain di sarana
                                    pelayanan kesehatan untuk rawat jalan dan rawat inap baik dikelola pemerintah maupun
                                    swasta. </p>
                            </div>
                            <br>
                            <div class="tab-pane fade show active" id="laboratory" role="tabpanel"
                                 aria-labelledby="laboratory-tab" tabindex="0">
                                <h2 class="fw-bold pb-2 text-dark">Misi</h2>
                                <p>medical record adalah berkas yang memuat catatan dan dokumen tentang pasien.
                                    Ini mencakup identitas, pemeriksaan, pengobatan, tindakan medis lain di sarana
                                    pelayanan kesehatan untuk rawat jalan dan rawat inap baik dikelola pemerintah maupun
                                    swasta. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--Modul--}}
    @include('content.modul')



    <section id="our-services"
             style="background-image: url(images/services-bg.jpg); background-repeat: no-repeat; background-position: center; background-position: top;">
        <div class="container">
            <div class="row">

                <div class="display-header text-light d-flex flex-wrap justify-content-between padding-medium">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <h2 class="text-light">Our Best Services For Your Solution</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="text-light">Vitae aliquam vestibulum elit adipiscing massa diam in dignissim. Risus tellus libero
                            elementum aliquam etiam. Lectus adipiscing est auctor mi quisque nunc non viverra est.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box p-4 bg-light border-radius-10 text-center">
                        <div class="icon-box-icon">
                            <svg class="home-thermometer mt-3 primary-color-500" width="50" height="50">
                                <use xlink:href="#home-thermometer" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title py-2">General Practitioners</h3>
                            <p>Aliquam etiam lectus adipiscing est auctor mi quisque non viverra.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box p-4 bg-light border-radius-10 text-center">
                        <div class="icon-box-icon">
                            <svg class="pregnant-woman mt-3 primary-color-500" width="50" height="50">
                                <use xlink:href="#pregnant-woman" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title py-2">Pregnancy Support</h3>
                            <p>Aliquam etiam lectus adipiscing est auctor mi quisque non viverra.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box p-4 bg-light border-radius-10 text-center">
                        <div class="icon-box-icon">
                            <svg class="nutrition mt-3 primary-color-500" width="50" height="50">
                                <use xlink:href="#nutrition" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title py-2">Nutritional Support</h3>
                            <p>Aliquam etiam lectus adipiscing est auctor mi quisque non viverra.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box p-4 bg-light border-radius-10 text-center">
                        <div class="icon-box-icon">
                            <svg class="local-pharmacy mt-3 primary-color-500" width="50" height="50">
                                <use xlink:href="#local-pharmacy" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h3 class="card-title py-2">Pharmaceutical care</h3>
                            <p>Aliquam etiam lectus adipiscing est auctor mi quisque non viverra.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="book-appointment" class="padding-large mb-0">
        <div class="container">
            <div class="row">
                <div class="display-header">
                    <h2 class="display-5 fw-bold text-dark">Book Appointment or call: <span class="text-primary-500">(+487) 384
              9452</span></h2>
                </div>
                <form class="contact-form d-flex flex-wrap mt-5 gx-1">
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <select class="form-select focus-transparent border border-radius-10 ps-4" aria-invalid="false"
                                name="choose">
                            <option value="Select Your Department">Select Department </option>
                            <option value="Department">Department of Physiotherapy</option>
                            <option value="Department">Department of Dentistry</option>
                            <option value="Department">ENT Department</option>
                            <option value="Department">Department of Pharmacy</option>
                            <option value="Department">Nursing Department</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <select class="form-select focus-transparent border ps-4 border-radius-10" aria-invalid="false"
                                name="choose">
                            <option value="Select Your Doctor">Select Doctor</option>
                            <option value="Naidan Smith">William Davies</option>
                            <option value="Danial Frankie">Charlotte Taylor</option>
                            <option value="Jason Roy">William Jones</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input type="text" name="name" placeholder="Full Name" class="border ps-4 border-radius-10">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input type="text" name="name" placeholder="Phone Number" class="border ps-4 border-radius-10">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <div class="input-group date" id="datepicker">
                            <input type="date" id="start" name="appointment" min="2018-01-01" max="2018-12-31"
                                   placeholder="Choose Date" class="bg-transparent ps-4 border border-radius-10 position-relative">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                        <div class="input-group time" id="timepicker">
                            <input type="time" id="start" name="appointment" min="9AM" max="6PM"
                                   class="bg-transparent ps-4 border border-radius-10 position-relative">
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" class="btn btn-medium btn-primary btn-pill mt-3 text-uppercase">Book an appointment</a>
        </div>
    </section>

    <section id="testimonial"
             style="background-image: url(images/review-bg.jpg); background-repeat: no-repeat; background-position: right; height: 595px;">
        <div class="container">
            <div class="row align-items-center padding-medium">
                <div class="col-lg-5 col-md-4">
                    <div class="image-holder">
                        <img src="{{asset('assets/images/review-image.png')}}" alt="review" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7 col-md-8">
                    <div class="review-content">
                        <div class="swiper testimonial-swiper">
                            <div class="swiper-wrapper position-relative">
                                <div class="swiper-slide">
                                    <div class="review-item">
                                        <svg class="quote quote-up primary-color-500 position-absolute" width="80" height="70">
                                            <use xlink:href="#quote-up" />
                                        </svg>
                                        <blockquote class="fs-4">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.The more content you provide about
                                                you. Lorem, Quos saepe suscipit, nemo dolore sapiente!</p>
                                            <div class="author-detail">
                                                <div class="name fs-3 fw-bold text-dark">James Rodrigo</div>
                                                <span class="text-cadet-blue text-uppercase">Customer</span>
                                            </div>
                                        </blockquote>
                                        <svg class="quote quote-down primary-color-500 position-absolute" width="80" height="70">
                                            <use xlink:href="#quote-down" />
                                        </svg>
                                    </div>
                                </div><!--swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="review-item">
                                        <svg class="quote quote-up primary-color-500 position-absolute" width="80" height="70">
                                            <use xlink:href="#quote-up" />
                                        </svg>
                                        <blockquote class="fs-4">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.The more content you provide about
                                                you. Lorem, Quos saepe suscipit, nemo dolore sapiente!</p>
                                            <div class="author-detail">
                                                <div class="name fs-3 fw-bold text-dark">Jenny Rose</div>
                                                <span class="text-cadet-blue text-uppercase">Customer</span>
                                            </div>
                                        </blockquote>
                                        <svg class="quote quote-down primary-color-500 position-absolute" width="80" height="70">
                                            <use xlink:href="#quote-down" />
                                        </svg>
                                    </div>
                                </div><!--swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="review-item">
                                        <svg class="quote quote-up primary-color-500 position-absolute" width="80" height="70">
                                            <use xlink:href="#quote-up" />
                                        </svg>
                                        <blockquote class="fs-4">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.The more content you provide about
                                                you. Lorem, Quos saepe suscipit, nemo dolore sapiente!</p>
                                            <div class="author-detail">
                                                <div class="name fs-3 fw-bold text-dark">Wednesday Marigold</div>
                                                <span class="text-cadet-blue text-uppercase">Customer</span>
                                            </div>
                                        </blockquote>
                                        <svg class="quote quote-down primary-color-500 position-absolute" width="80" height="70">
                                            <use xlink:href="#quote-down" />
                                        </svg>
                                    </div>
                                </div><!--swiper-slide-->
                            </div>
                            <div class="swiper-pagination text-left"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-team" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="display-header mb-5">
                    <h2 class="display-5 fw-bold text-dark">Our Team</h2>
                </div>
                <div class="team-content">
                    <div class="swiper team-swiper">
                        <div class="swiper-wrapper pb-5">

                            <div class="swiper-slide">
                                <div class="team-member d-flex align-items-center">
                                    <div class="col-md-6">
                                        <div class="image-holder me-4 mb-4">
                                            <img src="{{asset('assets/images/team-item.jpg')}}" alt="team member" class="border-radius-10 img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="member-info">
                                            <h3 class="fs-4 fw-bold text-dark">Dr. Leslie Taylor</h3>
                                            <span class="text-uppercase fs-6 text-cadet-blue pb-2 d-block">Pediatrician</span>
                                            <p>Dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum habitant fames ac
                                                penatibus et.</p>
                                            <ul class="social-links list-unstyled d-flex">
                                                <li>
                                                    <a href="#">
                                                        <svg class="facebook text-primary-500 me-4" width="30" height="30">
                                                            <use xlink:href="#facebook" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg class="twitter text-primary-500 me-4" width="30" height="30">
                                                            <use xlink:href="#twitter" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg class="instagram text-primary-500 me-4" width="30" height="30">
                                                            <use xlink:href="#instagram" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg class="youtube text-primary-500" width="30" height="30">
                                                            <use xlink:href="#youtube" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team-member d-flex align-items-center">
                                    <div class="col-md-6">
                                        <div class="image-holder me-4 mb-4">
                                            <img src="images/team-item1.jpg" alt="team member" class="border-radius-10 img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="member-info">
                                            <h3 class="fs-4 fw-bold text-dark">Dr. Zachary Brown</h3>
                                            <span class="text-uppercase fs-6 text-cadet-blue pb-2 d-block">Cardiologist</span>
                                            <p>Dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum habitant fames ac
                                                penatibus et.</p>
                                            <ul class="social-links list-unstyled d-flex">
                                                <li>
                                                    <a href="#">
                                                        <svg class="facebook text-primary-500 me-4" width="30" height="30">
                                                            <use xlink:href="#facebook" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg class="twitter text-primary-500 me-4" width="30" height="30">
                                                            <use xlink:href="#twitter" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg class="instagram text-primary-500 me-4" width="30" height="30">
                                                            <use xlink:href="#instagram" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg class="youtube text-primary-500" width="30" height="30">
                                                            <use xlink:href="#youtube" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team-member d-flex align-items-center">
                                    <div class="col-md-6">
                                        <div class="image-holder me-4 mb-4">
                                            <img src="images/team-item2.jpg" alt="team member" class="border-radius-10 img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="member-info">
                                            <h3 class="fs-4 fw-bold text-dark">Dr. Isabella Davies</h3>
                                            <span class="text-uppercase fs-6 text-cadet-blue pb-2 d-block">Gynecologist</span>
                                            <p>Dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum habitant fames ac
                                                penatibus et.</p>
                                            <ul class="social-links list-unstyled d-flex">
                                                <li>
                                                    <a href="#">
                                                        <svg class="facebook text-primary-500 me-4" width="30" height="30">
                                                            <use xlink:href="#facebook" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg class="twitter text-primary-500 me-4" width="30" height="30">
                                                            <use xlink:href="#twitter" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg class="instagram text-primary-500 me-4" width="30" height="30">
                                                            <use xlink:href="#instagram" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <svg class="youtube text-primary-500" width="30" height="30">
                                                            <use xlink:href="#youtube" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- team-content -->
            </div>
        </div>
    </section>

    <section id="faqs" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="display-header mb-5">
                    <h2 class="display-5 fw-bold text-center text-dark">We’ve Got Answers</h2>
                </div>
                <div class="accordion" id="accordion">
                    <div class="accordion-item border-0 py-3">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button fs-4 fw-bold text-dark bg-transparent focus-transparent text-capitalize shadow-none"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Why to believe with Insove medical healthcare ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse border-0 collapse show" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Diam orci gravida convallis at enim risus viverra. Hac mi tristique in aliquet tincidunt nam lectus
                                    nec. Placerat interdum auctor facilisi massa laoreet hendrerit posuere a. Tristique ultricies
                                    consectetu at.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 py-3">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button fs-4 fw-bold text-dark bg-transparent collapsed focus-transparent text-capitalize shadow-none"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Will we get healthcare updates after surgery ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>This is the second item's accordion body.It is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These classes control the overall appearance,
                                    as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
                                    overriding our default variables.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 py-3">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button fs-4 fw-bold text-dark bg-transparent collapsed focus-transparent text-capitalize shadow-none"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                What is the cost for just check-up ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>This is the third item's accordion body.It is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These classes control the overall appearance,
                                    as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
                                    overriding our default variables.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 py-3">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button fs-4 fw-bold text-dark bg-transparent collapsed focus-transparent text-capitalize shadow-none"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                Can i cancel my appointment ?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>This is the third item's accordion body.It is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These classes control the overall appearance,
                                    as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
                                    overriding our default variables.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="latest-blog" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="display-header">
                    <h2 class="display-5 fw-bold text-dark">Our Recent Posts</h2>
                </div>
                <div class="post-grid d-flex flex-wrap mt-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                        <div class="card-item pe-3">
                            <div class="card border-0 bg-transparent">
                                <div class="card-image position-relative">
                                    <img src="images/post-item1.jpg" alt="" class="post-image img-fluid border-radius-top-10">
                                    <span
                                        class="bg-primary-dim text-light position-absolute text-uppercase text-capitalize">Medical</span>
                                </div>
                            </div>
                            <div class="card-body p-3 mt-2">
                                <div class="meta-date">Jan 2, 2023</div>
                                <h3 class="card-title fs-3 text-capitalize fw-semibold mt-3">
                                    <a href="blog-single.html">10 foods to avoid for your heart health</a>
                                </h3>
                                <p>It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a condition that’s
                                    certainly true... <a href="blog-single.html" class="text-decoration-underline"><em>Read more</em></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                        <div class="card-item pe-3">
                            <div class="card border-0 bg-transparent">
                                <div class="card-image position-relative">
                                    <img src="images/post-item2.jpg" alt="" class="post-image img-fluid border-radius-top-10">
                                    <span class="bg-primary-dim text-light position-absolute text-uppercase text-capitalize">Mental
                    Health</span>
                                </div>
                            </div>
                            <div class="card-body p-3 mt-2">
                                <div class="meta-date">Jan 3, 2023</div>
                                <h3 class="card-title fs-3 text-capitalize fw-semibold mt-3">
                                    <a href="blog-single.html">How to be relax & calm in hard situations</a>
                                </h3>
                                <p>It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a condition that’s
                                    certainly true... <a href="blog-single.html" class="text-decoration-underline"><em>Read more</em></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                        <div class="card-item pe-2">
                            <div class="card border-0 bg-transparent">
                                <div class="card-image position-relative">
                                    <img src="images/post-item3.jpg" alt="" class="post-image img-fluid border-radius-top-10">
                                    <span class="bg-primary-dim text-light position-absolute text-uppercase text-capitalize">Dental
                    Health</span>
                                </div>
                            </div>
                            <div class="card-body p-3 mt-2">
                                <div class="meta-date">Jan 4, 2023</div>
                                <h3 class="card-title fs-3 text-capitalize fw-semibold mt-3">
                                    <a href="blog-single.html">Best ways to make your teeth strong</a>
                                </h3>
                                <p>It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a condition that’s
                                    certainly true... <a href="blog-single.html" class="text-decoration-underline"><em>Read more</em></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="blog.html" class="btn btn-medium btn-primary btn-pill text-uppercase text-center mx-auto">Read more
                blogs</a>
        </div>
    </section>

    <section id="brand-collection" class="padding-large pt-0 overflow-hidden">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col pb-3">
                    <img src="images/betael.png" alt="brand" class="top-image">
                    <img src="images/betael1.png" alt="brand" class="bottom-image">
                </div>
                <div class="col pb-3">
                    <img src="images/healer.png" alt="brand" class="top-image">
                    <img src="images/healer1.png" alt="brand" class="bottom-image">
                </div>
                <div class="col pb-3">
                    <img src="images/lifetrace.png" alt="brand" class="top-image">
                    <img src="images/lifetrace1.png" alt="brand" class="bottom-image">
                </div>
                <div class="col pb-3">
                    <img src="images/medcare.png" alt="brand" class="top-image">
                    <img src="images/medcare1.png" alt="brand" class="bottom-image">
                </div>
                <div class="col">
                    <img src="images/soven.png" alt="brand" class="top-image">
                    <img src="images/soven1.png" alt="brand" class="bottom-image">
                </div>
            </div>
        </div>
    </section>

    <section id="subscribe" class="d-flex align-items-center"
             style="background-image: url(images/subscribe-bg.jpg); background-repeat: no-repeat;background-size: cover; height: 444px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="subscribe-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="subscribe-header content-light mb-5">
                                <span class="text-light text-uppercase">Our newsletter</span>
                                <h3 class="display-3 fw-semibold text-light mt-3">Subscribe Us To Get More Updates</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <form id="form" class="d-flex flex-wrap position-relative">
                                <input type="text" name="email" placeholder="Your Email Addresss"
                                       class="border-radius-35 text-light ps-4 outline-transparent">
                                <button
                                    class="btn btn-light btn-subscribe btn-pill position-absolute fw-medium text-uppercase">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
