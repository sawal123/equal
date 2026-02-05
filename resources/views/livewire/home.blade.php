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
                <div id="carouselExample" class="carousel slide carousel-custom" data-bs-ride="carousel" data-bs-interval="3000">

                    <div class="carousel-inner rounded ">
                        @foreach ($slide as $key => $item)
                        <div class="carousel-item rounded {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
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
                            <iframe src="{{$youtube->youtube_embed}}" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
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
    {{-- <div class="features-area6 sp"> --}}
    @foreach ($sections as $section)
    @if ($section->type == 'product' && $section->is_active)
    @include('livewire.home.product', ['section' => $section])
    @endif
    @endforeach
    {{-- </div> --}}
    <!--===== FEATURES AREA END =======-->



    <!--===== BRANDS AREA START =======-->
    @foreach ($sections as $section)
    @if ($section->type === 'about')
    @include('livewire.home.about', ['section' => $section])
    @endif
    @endforeach

    <!--===== BRANDS AREA END =======-->



</div>
