<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', "Society of Friends for Ethiopian Visual Arts") }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.2.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto w-25">
          <h1 class="text-light"><a href="/"><span>{{ __("Society of Friends for Ethiopian Visual Arts") }}</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">{{ __("Home") }}</a></li>
            <li><a href="#about">{{ __("Heritage Day") }}</a></li>
            <li><a href="#portfolio">{{ __("Gallery") }}</a></li>
            <li><a href="#events">{{ __("About") }}</a></li>
            <li><a href="#contact">{{ __("Contact") }}</a></li>
            <li class="drop-down">
                <form method="POST" id="locale_form" action="{{ route('locale') }}">
                    @csrf
                    <input type="hidden" id="locale_name" name="locale" />
                </form>
                <a href="#" role="button" v-pre>
                    @if (App::currentLocale() == "amh")
                        <img class="img-fluid" src="assets/img/lang/am.png"/>
                        አማርኛ
                    @else
                        <img class="img-fluid" src="assets/img/lang/en.png"/>
                        English
                    @endif
                </a>
                <ul>
                    <li>
                        <a href="#" onclick="changelocale('en');">
                            <img class="img-fluid" src="assets/img/lang/en.png"/>
                            English
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="changelocale('am');">
                            <img class="img-fluid" src="assets/img/lang/am.png"/>
                            አማርኛ
                        </a>
                    </li>
                  {{-- <li class="drop-down"><a href="#">Drop Down 2</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li> --}}
                  {{-- <li><a href="#">Drop Down 4</a></li>
                  <li><a href="#">Drop Down 5</a></li> --}}
                </ul>
            </li>
            {{-- <li><a href="#team">Team</a></li> --}}



            {{-- <li class="get-started"><a href="#about">Get Started</a></li> --}}
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
        <div class="headline text-left">{{ __("Headline") }}</div>
        <hr>
      <h1 class="text-left">{{ __("World Heritage Day") }}</h1>
      <h2>{{ __("Heritage") }}</h2>
      <h3>{{ __(": property that descends to an heir") }}</h3>
      <h3>{{ __(": something transmitted by or acquired from a predecessor : LEGACY, INHERITANCE") }}</h3>
      <h3>{{ __(": TRADITION") }}</h3>
      <h3>{{ __(": something possessed as a result of one's natural situation or birth : BIRTHRIGHT") }}</h3>
      <a href="https://www.merriam-webster.com/dictionary/heritage#:~:text=1%20%3A%20property%20that%20descends%20to,heritage%20and%20should%20be%20preserved." class="text-small text-monospace merriam">{{ __("Merriam Webster") }}</a>
      <a href="#about" class="btn-get-started scrollto">{{ __("Discover More") }}</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-auto col-md-auto col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/clients/ethiopian_heritage_trust.jpg" class="img-fluid" alt="{{ __("Ethiopian Heritage Trust") }}">
          </div>

          <div class="col-lg-auto col-md-auto col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/clients/guramayne_art_center.jpg" class="img-fluid" alt="{{ __("Guramayne Art Center") }}">
          </div>

          <div class="col-lg-auto col-md-auto col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/clients/model_african_union.png" class="img-fluid" alt="{{ __("Model African Union") }}">
          </div>

          <div class="col-lg-auto col-md-auto col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
            <img src="assets/img/clients/urban_center.png" class="img-fluid" alt="{{ __("Urban Center, Kebet Eske Ketema") }}">
          </div>

          <div class="col-lg-auto col-md-auto col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
            <img src="assets/img/clients/wey_addis_ababa_magazine.png" class="img-fluid" alt="{{ __("Wey Addis Ababa Magazine") }}">
          </div>

          <div class="col-lg-auto col-md-auto col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
            <img src="assets/img/clients/kebena_house.png" class="img-fluid" alt="{{ __("Kebena House") }}">
          </div>
          <div class="col-lg-auto col-md-auto col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
            <img src="assets/img/clients/neon_addis.png" class="img-fluid" alt="{{ __("Neon Addis") }}">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>{{ __("World Heritage Day") }}</h2>
            <h3>{{ __("This year's World Heritage Day is being celebrated for the eighteenth time internationally and, for the second time nation wide here in Ethiopia.") }}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              {{ __("Ethiopian Heritages Trust Association has organised different events running up to June 16, 2021, in collaboration with the Society of Friends for Ethiopian Visual Arts.") }}
            </p>
            <p>
              {{ __("One of the main events is an art competition focusing on the theme 'Art, Culture and Heritage', to be participate three different age groups.") }}
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>{{ __("Children: Upto Grade 8 Students") }}</li>
              <li><i class="ri-check-double-line"></i>{{ __("Adolecents: Grade 9 to Grade 12 Students") }}</li>
              <li><i class="ri-check-double-line"></i>{{ __("Youths: College and University Students") }}</li>
            </ul>
            <p class="font-italic">
              {{ __("Contestents should bring their art works to the Ethiopian Heritage Trust Association's berue until May 25, 2021 (Africa Day).")}}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center align-self-center">
            {{-- <span data-toggle="counter-up">15</span> --}}
            <h1>{{ __("This Year") }}</h1>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">90</span>
            <p>{{ __("Celebration Days") }}</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">26</span>
            <p>{{ __("Events Ready") }}</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">17</span>
            <p>{{ __("Heritage Sites to Discover") }}</p>
          </div>

          {{-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div> --}}

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>{{ __("Submitted Art Works") }}</h2>
          <p>{{("Take a look at submitted art works by our contestents.")}}</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">{{ __("All") }}</li>
              <li data-filter=".filter-app">{{ __("Children") }}</li>
              <li data-filter=".filter-card">{{ __("Adolecents")}}</li>
              <li data-filter=".filter-web">{{ __("Youths")}}</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/art-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Title of Work</h4>
                <p>Contestent's Name</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/art-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/art-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Title of Work</h4>
                <p>Contestent's Name</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/art-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/art-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Title of Work</h4>
                <p>Contestent's Name</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/art-3.png" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/art-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Title of Work</h4>
                <p>Contestent's Name</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/art-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/art-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Title of Work</h4>
                <p>Contestent's Name</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/art-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/art-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Title of Work</h4>
                <p>Contestent's Name</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/art-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/art-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Title of Work</h4>
                <p>Contestent's Name</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/art-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/art-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Title of Work</h4>
                <p>Contestent's Name</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/art-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/art-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Title of Work</h4>
                <p>Contestent's Name</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/art-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Why Us Section ======= -->
    {{-- <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Why Choose Bethany for your company website?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section --> --}}

    <!-- ======= Cta Section ======= -->
    {{-- <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section --> --}}

    <!-- ======= events Section ======= -->
    <section id="events" class="events section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>{{ __("About") }}</h2>
              <p>{{ __("Society of Friends for Ethiopian Visual Arts is a non-governmental, non-profitable organisation founded on the basic value to put effort in the countries renaissance reforms, create a platform for visual artists and the public to communicate and raise awareness.") }}</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100" class="fields-list">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4><a href="#about">{{ __("Fields") }}</a></h4>
                  <p>{{ __("Visual Arts for us is:") }}</p>
                  <ul>
                    <li>{{ __("Fine Arts") }}</li>
                    <li>{{ __("Photography and Videography") }}</li>
                    <li>{{ __("Fashion") }}</li>
                    <li>{{ __("Carfts and Cuisine") }}</li>
                    <li>{{ __("Advertisement") }}</li>
                    <li>{{ __("Landart") }}</li>
                    <li>{{ __("Architecture, Engineering and Urban Planning") }}</li>
                  </ul>

                </div>
              </div>

              <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4><a href="">{{ __("Status") }}</a></h4>
                  <p>{{ __("The Society is currently under formation ...") }}</p>
                </div>
              </div>

              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <h4><a href="">{{ __("Vision") }}</a></h4>
                  <p>{{ __("Contributing to create a community that is highyl ware of and appreciates visual arts.") }}</p>
                </div>
              </div>

              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <h4><a href="">{{ __("Membership") }}</a></h4>
                  <p>{{ __("Members of the Society are artists and art advocates that volunteerly joined to support the cause, without any presummed states.") }}</p>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End events Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Testimonials</h2>
              <p>Magnam dolores commodi suscipit uisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Team</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">

              <div class="col-lg-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>{{ __("Contact") }}</h2>
              {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            {{-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> --}}
            {{-- <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div> --}}
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>{{ __("Email:") }}</h4>
                  <p>{{ __("fixxaambye@gmail.com") }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>{{ __("Call:") }}</h4>
                  <p>{{ __("+251 911 634 134") }}</p>
                </div>
              </div>
            </div>

            {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form> --}}
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{ __("Society of Friends for Ethiopian Visual Arts") }}</h3>
            <p>
              {{-- A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br> --}}
              <strong>{{ __("Phone:") }}</strong> +251 911 634 134<br>
              <strong>{{ __("Email:") }}</strong> fixxaambye@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6"></div>

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>{{ __("Affilliates") }}</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Ethiopian Heritage Trust") }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Urban Center, Kebet Eske Ketema")}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Model Africa Union")}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Guramayne Art Center")}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Wey Addis Ababa Magazine")}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Seed Act")}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Kebena House")}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Neon Addis")}}</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our events</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

          {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> --}}

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>{{ __("Society of Friends for Ethiopian Visual Arts") }}</span></strong>. {{ __("All Rights Reserved") }}
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          Designed by <a href="http://earaldtradinget.com/">Natnael Tilaye</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script>
    function changelocale(locale) {
        document.getElementById('locale_name').value = locale;
        $('#locale_form').submit();
    }
    </script>

</body>

</html>
