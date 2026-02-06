<div>
    <!-- ===== ABOUT PAGE AREA START ======= -->
    <div class="about-page-area1 sp mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/about/3.jpg') }}" alt="" class="rounded" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="headding2">
                        <h2>Tentang Perusahaan</h2>
                        <div class="space16"></div>
                        <p>
                            {!! $about->about !!}
                        </p>
                        <hr>
                        <h5>Visi</h5>
                        <p>
                            {{ $about->visi }}
                        </p>
                        <hr>
                        <h5>Misi</h5>
                        <p>
                            {{$about->misi}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===== ABOUT PAGE ATEA END ======= -->
</div>
