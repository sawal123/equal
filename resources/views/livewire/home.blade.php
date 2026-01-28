<div>
    <!--===== HERO AREA START =======-->
    <style>
        .hero-area-image {
            padding: 80px 0;
            position: relative;
            overflow: hidden;
            /* biar nggak keluar jalur */
        }

        /* Wrapper utama */
        .video-wrapper {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Frame video */
        .video-frame {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            border-radius: 20px;
            overflow: hidden;
            background: #000;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .25);
        }

        /* iframe */
        .video-frame iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Shape dekorasi */
        .video-wrapper .shape {
            position: absolute;
            bottom: -40px;
            right: -40px;
            width: 180px;
            z-index: -1;
            opacity: .7;
        }

        @media (max-width: 768px) {
            .video-wrapper {
                max-width: 100%;
            }

            .video-wrapper .shape {
                display: none;
            }
        }
    </style>
    <div class="hero-area6">
        <div class="container">
            <div class="row align-items-center">
                <div id="carouselExample" class="carousel slide carousel-custom" data-bs-ride="carousel"
                    data-bs-interval="3000">

                    <div class="carousel-inner rounded ">
                        <div class="carousel-item rounded  active">
                            <img src="{{ asset('assets/img/slide/1.jpg') }}" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item rounded ">
                            <img src="{{ asset('assets/img/slide/2.jpg') }}" class="d-block w-100" alt="...">
                        </div>

                        {{-- <div class="carousel-item rounded ">
                            <img src="{{ asset('assets/img/slides/3.jpg') }}" class="d-block w-100" alt="...">
                        </div> --}}
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA END =======-->
    <!-- ===== HERO AREA IMAGE START ======= -->
    <div class="hero-area-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto text-center">
                    <div class="images-area _relative video-wrapper">
                        <div class="video-frame ">
                            <iframe src="https://www.youtube.com/embed/xwp2YAHifHg" title="YouTube video"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>

                        <img src="/img/shapes/hero1-img-shape.png" alt="" class="shape" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== HERO AREA IMAGE END ======= -->

    <!--===== FEATURES AREA START =======-->
    <div class="features6 sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="heading6">
                        <h2 class="text-anime-style-3">Rangkaian Produk Air Minum Mineral Berkualitas</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-image right60" data-aos="zoom-out" data-aos-duration="800">
                        <img src="{{ asset('assets/img/produk/produk.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5">
                    <div class="heading6 features-heading">
                        {{-- <span class="span3" data-aos="fade-left" data-aos-duration="700">Rangkaian Produk Air Minum
                            Mineral Berkualitas</span> --}}
                        <h3 class="text-anime-style-3">Kesegaran Alami untuk Setiap Kebutuhan</h3>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">Air Mineral dari sumber mata air pegunung Daulu,
                            Berastagi. Dengan kandungan pH alami 7.1, bebas logam berat, dan menyegarkan tubuh. Tersedia
                            dalam ukuran gelas cup (220 ml), botol (330 ml, 600 ml, 1500 ml), dan galon (19 liter)</p>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="900">
                            <a href="/produk" class="theme-btn9" wire:navigate><span class="tb8">Lihat Produk <span
                                        class="arrow"><i class="fa-solid fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!--===== FEATURES AREA END =======-->



    <!--===== BRANDS AREA START =======-->
    <div class="brands-area6 sp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="heading6-w">
                        <h2 class="text-anime-style-3">Dipercaya untuk Menemani Setiap Aktivitas</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">Kami menghadirkan air minum mineral berkualitas
                            tinggi yang berasal dari sumber alami terpilih.
                            Diproses dengan standar higienis dan teknologi modern untuk menjaga kemurnian, rasa segar,
                            dan kandungan mineral alaminya.</p>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="1000">
                            <a href="/about" class="theme-btn8" wire:navigate><span class="tb8">Tentang Equallfresh <span
                                        class="arrow"><i class="fa-solid fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/img/others/tes1.webp') }}" class="rounded mt-3" alt="">
                    {{-- <div class="apps-images">
                        <div class="image1">
                            <img src="assets/img/bg/apps5-shape-bg.png" alt="">
                            <div class="dot"></div>
                        </div>
                        <div class="image2">
                            <img src="{{ asset('assets/img/others/apps5-1.png') }}" alt="">

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!--===== BRANDS AREA END =======-->



</div>
