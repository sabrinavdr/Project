<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Epic-Themes" />
        <meta
            name="keywords"
            content="landing page, click-through, lead gen, marketing campaign, mobile app launch, one page template, product launch, products, responsive, saas, startup, html template, html5, css3, bootstrap, creative, designer, freelancer"
        />
        <meta
            name="description"
            content="Landing Page Template for Creative Agencies, Apps, Portfolio Websites and Small Businesses"
        />

        <title>SISTEM INFORMASI ARSIP</title>

        <!-- Loading Bootstrap -->
        <link
            href="{{ asset('template/smart/smart-html/v1/css/bootstrap.min.css') }}"
            rel="stylesheet"
        />

        <!-- Loading Template CSS -->
        <link
            href="{{ asset('template/smart/smart-html/v1/css/style.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{ asset('template/smart/smart-html/v1/css/bootstrap-icons.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{ asset('template/smart/smart-html/v1/css/animate.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{
                asset('template/smart/smart-html/v1/css/style-magnific-popup.css')
            }}"
            rel="stylesheet"
        />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Open+Sans:ital@0;1&display=swap"
            rel="stylesheet"
        />

        <!-- Image Logo Title -->
        <link rel="shortcut icon" href="{{ asset('images/LogoGithub.png') }}" />
    </head>

    <body>
        <!-- begin header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-fixed-top">
                <div class="container">
                    <!-- begin logo -->
                    <a class="navbar-brand" href="#"
                        ><img
                            src="{{ asset('images/LogoGithub.png') }}"
                            style="width: 50px; height: 50px"
                        />
                        SISTEM INFORMASI ARSIP UNIVERSITAS XYZ</a
                    >
                    <!-- end logo -->

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll"
                        aria-controls="navbarScroll"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"
                            ><i class="bi bi-list"></i
                        ></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <div class="col-md-9 text"></div>

                        <div class="col-md-3 text-end">
                            <a href="/login"
                                ><button type="button" class="btn btn-danger">
                                    <i
                                        style="font-size: 1.2em"
                                    ></i> Logout </button
                            ></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- end header -->
                                <!-- dibagi dua kolom antara KSE dan SIMADIT -->
        <main>
            <!--begin home section -->
            <section class="home-section" id="home">
                <!--begin container -->
                <div class="container mt-5 text-center">
                    <!--begin row -->
                    <div class="row align-items-center">
                        <!--begin col-md-6-->
                        <div class="col-md-6 mx-auto">
                            <h1>
                                Hak Akses User
                                {{-- <i class="bi bi-chat-left-quote green"></i> --}}
                            </h1>
                            <!--begin newsletter_form_box -->
                            <div class="newsletter_form_box">
                                    <a
                                    href="/dashboard-produsen"
                                    class="btn btn-primary btn-lg"
                                    >PRODUSEN</a
                                    >
                                    <a
                                    href="/dashboard-admin"
                                    class="btn btn-danger btn-lg"
                                    >ADMIN</a
                                    >
                                    <a
                                    href="/dashboard-manajemen"
                                    class="btn btn-success btn-lg"
                                    >MANAJEMEN</a
                                    >
                            </div>
                            <!--end newsletter_form_box -->
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row -->
                </div>
                <!--end container -->
            </section>
            <!--end home section -->
        </main>

        <!-- Load JS here for greater good =============================-->
        <script src="{{
                asset('template/smart/smart-html/v1/js/jquery-3.6.0.min.js')
            }}"></script>
        <script src="{{
                asset('template/smart/smart-html/v1/js/bootstrap.min.js')
            }}"></script>
        <script src="{{
                asset('template/smart/smart-html/v1/js/jquery.scrollTo-min.js')
            }}"></script>
        <script src="{{
                asset('template/smart/smart-html/v1/js/jquery.magnific-popup.min.js')
            }}"></script>
        <script src="{{
                asset('template/smart/smart-html/v1/js/jquery.nav.js')
            }}"></script>
        <script src="{{ asset('template/smart/smart-html/v1/js/wow.js') }}"></script>
        <script src="{{
                asset('template/smart/smart-html/v1/js/plugins.js')
            }}"></script>
        <script src="{{
                asset('template/smart/smart-html/v1/js/custom.js')
            }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        {{-- lottie files --}}
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </body>
</html>