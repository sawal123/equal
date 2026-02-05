<div>
    <div class="pricing-plan-page sp">
        <div class="container">
            <div class="princing-plans">
                <div class="container">
                    <div class="text-center my-5">
                        <h1>Produk Kami</h1>
                    </div>


                    <div class="row g-4">
                        @foreach ($products as $i => $item)
                        <div class="col-md-6 col-lg-4">
                            <div class="pricing-box shadow-lg" style="border-radius:20px; overflow:hidden;">
                                <div class="pricing-box-single text-center">

                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="mb-3 img-fluid" />

                                    <h5 class="mb-3">{{ $item->title }}</h5>

                                    <a href="/produk/{{ $item->slug }}" wire:navigate class="theme-btn2">
                                        Detail Produk
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
