<div>
    <div class="pricing-plan-page sp">
        <div class="container">
            <div class="princing-plans">
                <div class="container">
                    <div class="text-center my-5">
                        <h1>Produk Kami</h1>
                    </div>
                    @php
                        $a = "1.jpg";
                        $b = "2.jpg";
                        $c = "3.jpg";

                        $title = [
                            "Equallfresh 220ml",
                            "Equallfresh 600ml",
                            "Equallfresh 19L",
                        ];  
                    @endphp
                    <div class="row g-4">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="col-md-6 col-lg-4">
                                <div class="pricing-box shadow-lg" style="border-radius:20px; overflow:hidden;">
                                    <div class="pricing-box-single text-center">
                                        <img src="{{ asset('assets/img/produk/' . ($i == 0 ? $a : ($i == 1 ? $b : $c))) }}" alt=""
                                            class="mb-3 img-fluid" />
                                        <h5 class="mb-3">{{ $title[$i] }}</h5>

                                        <a href="/produk/{{ $i }}" wire:navigate class="theme-btn2">Detail Produk</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
