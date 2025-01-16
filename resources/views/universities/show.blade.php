<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>


<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">

            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('universities.index')}}" class="active">Нүүр<br></a></li>
                    <li><a href="#Бидний тухай">Бидний тухай</a></li>
                    <li><a href="#services">Шилдэг сургуулиуд</a></li>
                    <li><a href="#portfolio">Бүх сургууль</a></li>
                    <li class="dropdown"><a href="#"><span>Мэргэжлүүд</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Хүсэлт</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a href="{{ url('admin/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Нэвтрэх
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif

        </div>
    </header>

    <main class="main">

        <section id="нүүр" class="hero section dark-background">
            <img src="{{ asset('assets/img/wallpaperflare.com_wallpaper.jpg') }}" alt="" data-aos="fade-in">
            <div class="container">
                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8">
                        <h2>{{ $university->name}}<span>.</span></h2>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="Бидний тухай" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <div class="senter">
                    <p>мэдээлэл</p>
                </div>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="senter">
                        <h3>мэндчилгээ</h3>
                        <p>{{ $university->description }}</p>
                    </div>
                </div>

            </div>

        </section>
        
        <section id="features" class="features section">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="senter">
                            <img src="{{ asset($university->thumbnail) }}" alt="{{ $university->name }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up"
                            data-aos-delay="200">
                            <div>
                                <h4>Элсэлтийн Шаардлага</h4>
                                <p>{{ $university->admission_requirements }}</p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div>
                                <h4>Орон Байршлын Сонголт</h4>
                                <p>Дотуур байрууд: 
                                    @if($university->status == 'active')
                                        боломжтой
                                    @else
                                        боломжгүй
                                    @endif
                                </p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div>
                                <h4>зэрэглэл</h4>
                                <p>2024 оны Монголын их дээд сургуулиудын зэрэглэлээр {{ $university->name}} {{ $university->ranking }}-р байранд орсон</p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">

                            <div>
                                <h4>Сургуулийн Төлөв</h4>
                                <p>Байршил: {{ $university->location }}</p>
                            </div>
                        </div><!-- End Features Item-->

                    </div>
                </div>

            </div>

        </section>

        
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-lg-5">
                        <img src="{{ asset('assets/img/wallpaperflare.com_wallpaper_4.jpg') }}" alt=""
                            class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up"
                            data-aos-delay="200">
                            <div>
                                <h4>Үүсгэн Байгуулагдсан Он</h4>
                                <p>{{ $university->established_at }}</p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div>
                                <h4>Нийт Оюутны Тоо</h4>
                                <p>{{ $university->student_population }}</p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div>
                                <h4>Нийт Багш Нарын Тоо</h4>
                                <p>{{ $university->faculty_count }}</p>
                            </div>
                        </div><!-- End Features Item-->

                    </div>

                    </div>

                </div>

            </div>

        </section>
        
        
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="{{ asset('assets/img/wallpaperflare.com_wallpaper_3.jpg') }}" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>үндсэн хуудас</h3>
                            <p>Хэрэв та илүү олон их дээд сургуулийн сонголтуудыг харахыг хүсэж байвал, 
                                илүү дэлгэрэнгүй мэдээлэлтэй танилцахын тулд үндсэн хуудас руу буцаж, 
                                сонголтоо өргөжүүлнэ үү.</p>
                            <a class="cta-btn" href="{{ route('universities.index') }}">үндсэн хуудас</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Холбоо Барих Мэдээлэл</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">


                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Хаяг</h3>
                                <p>{{ $university->address }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Холбоо Барих Утас</h3>
                                <p>Утас: {{ $university->contact_phone }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>Имэйл: {{ $university->contact_email }}</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-globe flex-shrink-0"></i> <!-- Use an appropriate icon for the website -->
                            <div>
                                 <h3>Вебсайт руу орох</h3>
                                <p>Вэбсайт: <a href="{{ $university->website }}"
                                    target="_blank">{{ $university->website }}</a></p> <!-- Link to the university's website -->
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section>        

    </main>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>