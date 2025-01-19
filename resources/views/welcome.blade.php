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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>


<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">

            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#нүүр" class="active">Нүүр<br></a></li>
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
                        <h2>Эхлэлийг эндээс<span>.</span></h2>
                        <p>Бид таны ирээдүйг гэрэлтүүлэхэд туслна</p>
                    </div>
                </div>

                <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="Бидний тухай" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="borderk">
                            <img src="{{ asset('assets/img/pexels-pixabay-267582.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>Бид юуг зориж байна вэ?</h3>
                        <p class="fst-italic">
                            Төгсөж буй сурагчдад их сургууль болон коллеж д орход нь туслах.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Амар, хялбар байлгах нь бидний зорилт.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i> <span>Сурагчдад хамгийн сайн боловсролын боломжийг
                                    олгох.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Сурагчид өөрсдийн сонирхол, хэрэгцээнд тулгуурлан
                                    зөв сургуулийг сонгоход нь туслах.</span></li>
                        </ul>
                        <p>
                            "College Choice" нь Монголын залуусыг хамгийн сайн боловсрол
                            олж авахад нь туслах зорилготой. Бид зөвхөн их дээд сургууль,
                            коллежийн мэдээлэл өгөхөөс гадна тэдгээрийн давуу болон сул талуудыг
                            тодорхойлж, сонголт хийхэд нь хялбар болгодог.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Clients Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container">

                <div class="row gy-4">
                    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="borderk">
                            <img src="{{ asset('assets/img/wallpaperflare.com_wallpaper_2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up"
                            data-aos-delay="200">
                            <div>
                                <h4>Манай вэбсайт</h4>
                                <p>Манай вэбсайт нь хэрэглэгчийн туршлагыг хамгийн түрүүнд тавьж, сургуулийн мэдээллийг
                                    илүү хүртээмжтэй, ойлгомжтой байдлаар ашиглах боломжийг олгодог.
                                </p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div>
                                <h4>сургуулиудын мэдээлэл</h4>
                                <p>Бид зөвхөн сургуулиудын мэдээллийг түгээхээс гадна тэдгээрийн сургалтын хөтөлбөр,
                                    элсэлтийн шаардлага, хөтөлбөрийн агуулга, сургуулийн нөхцөл байдлын талаар
                                    дэлгэрэнгүй мэдээллийг өгөх зорилготой.
                                </p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div>
                                <h4>сурагчдад</h4>
                                <p>Бид сурагчдад сургуулиудын давуу болон сул талуудыг тодорхойлж, тэрхүү мэдээллээр нь
                                    үндэслэн шийдвэр гаргахад тусалдаг. </p>
                            </div>
                        </div><!-- End Features Item-->
                    </div>
                </div>

            </div>

        </section><!-- /Features Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Шилдэг сургуулиуд</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @foreach ($uni as $university)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <img src="{{ asset($university->thumbnail) }}" class="img-fluid" alt="">
                                </div>
                                <a href="{{ route('university.show', $university->id) }}" class="stretched-link">
                                    <h3>{{ $university->name }}</h3>
                                </a>
                                <p class="card-text">{{ $university->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

        </section><!-- /Services Section -->


        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="{{ asset('assets/img/wallpaperflare.com_wallpaper_3.jpg') }}" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Бидний тухай</h3>
                            <p>Бидний талаарх мэдээллийг энд дарж үзнэ үү.</p>
                            <a class="cta-btn" href="#">Бидний талаар</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Бүх сургууль</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">бүх их сургууль</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Card</li>
                        <li data-filter=".filter-branding">Web</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($universities as $university)
                            <div class="col-lg-3 col-md-4 portfolio-item isotope-item filter-app">
                                <!-- Using inline styles to make the image responsive and maintain aspect ratio -->
                                <div class="image-container">
                                    <img src="{{ asset($university->thumbnail) }}" alt="{{ $university->name }}"
                                        style="width: 50%; height: auto; object-fit: cover; border-radius: 8px;">
                                </div>
                                <div class="portfolio-info">
                                    <a href="{{ route('university.show', $university->id) }}" class="stretched-link">
                                        <h4>{{ $university->name }}</h4>
                                    </a>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div><!-- End Portfolio Container -->


                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <div class="borderk">
                            <img src="{{ asset('assets/img/wallpaperflare.com_wallpaper_4.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <h3 class="fw-bold fs-2 mb-3">Яагаад Биднийг Сонгох Вэ?</h3>
                        <p>
                            Шударга, Шилдэг Мэдээлэл
                            Манай вэбсайт нь зөвхөн хэрэгтэй мэдээллийг өгдөг, өөрт тохирсон сонголтыг хийхэд чиглэсэн
                            үнэн зөв мэдээлэлтэй.
                        </p>
                        <p>
                            Амжилттай Оюутан Хөгжил
                            Манай баг нь таныг төгсөж, боловсролын сонголтонд орох хүртэл дэмжиж, амжилттай суралцах үйл
                            явцыг удирдах болно.
                        </p>
                        <p>
                            гийн Хялбар Ажиллах Байдал
                            Хэрэглэхэд хялбар интерфэйс, оновчтой хайлтын систем болон гарын авлагаас гадна
                            боловсролын салбарын шилдэг програмуудыг ашиглан оюутнуудад зориулсан олон боломжуудыг танд
                            санал болгож байна.
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">

            <img src="{{ asset('assets/img/wallpaperflare.com_wallpaper_5.jpg') }}" class="testimonials-bg" alt="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h3>Сургуулийн Сонголт Вэбсайт</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"Сургуулийн Сонголт" нь Монголын оюутнуудад боловсролын салбарт хамгийн сайн
                                        сонголтыг
                                        хийхэд туслах зорилготой вэбсайт юм. Энэ нь төгсөх ангийн сурагчид болон өөрийн
                                        боловсролын түвшингээ ахиулах хүсэлтэй хүмүүст зориулагдсан.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h3>Манай Зорилго</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Оюутнуудад Монгол Улсын болон олон улсын сургуулиудын тухай хамгийн чухал
                                        мэдээллийг хүргэх.
                                        Тэдэнд хэрэгтэй шаардлага, элсэлтийн мэдээлэл, амжилттай суралцах боломжуудыг
                                        олгох.
                                        Үндэсний болон гадаад их сургууль, коллежийн мэдээлэл, сургалтын хөтөлбөр,
                                        оюутны байр,
                                        тэтгэлэг, суралцах нөхцөл, хямд үнэ болон бусад олон мэдээллийг өгөх.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h3>Түргэн, Хялбар Хүснэгтүүд</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Сургуулийн сонголт хийх нь амархан болох болно.
                                        Манай вэбсайт нь бүхий л шаардлагатай мэдээллийг нэг дор оруулсан бөгөөд та
                                        сургуулиудыг өөрийн шаардлагад нийцүүлэн хайж олох боломжтой.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h3>Их Сургууль, Коллежийн Мэдээлэл</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Та оюутан болж элсэн орсон их сургууль, коллежийнхаа талаар
                                        дэлгэрэнгүй мэдээллийг авах боломжтой. Тусгаарласан эрэмбэ, курс,
                                        шилдэг хөтөлбөр, боловсролын стандартыг мэдэх нь чухал.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h3>Элсэлтийн Шаардлага ба Процесс</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Манай вэбсайт нь сургуулиудын элсэлтийн шаардлага, шаардлагатай
                                        бичиг баримт, гэрчилгээ болон шалгалт, өдөр, хугацаа, зарим
                                        суралцах төвшингүүдийн мэдээллийг агуулдаг.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h3>Тэтгэлэг ба Санхүүгийн Дэмжлэг</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Оюутнуудад сургалтын төлбөрийг хөнгөлөх эсвэл тэтгэлэгт хамрагдах
                                        боломжуудыг олгож, санхүүгийн хүндрэлийг даван туулахад туслах.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
        </section><!-- /Testimonials Section -->


        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>холбоо барих</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">


                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>mongol</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>55994823</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>a@email.com</p>
                            </div>
                        </div><!-- End Info Item -->

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

        </section><!-- /Contact Section -->

    </main>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>