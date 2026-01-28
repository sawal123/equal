<div>

    <div class="about-page-area1 sp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/produk/' . $produk['gambar']) }}" alt="{{ $produk['title'] }}" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="headding2">
                        <h2>{{ $produk['title'] }}</h2>
                        <div class="space16"></div>
                        <p>{{ $produk['deskripsi'] }}</p>
                        <ul>
                            <li><strong>Volume:</strong> {{ $produk['volume'] }}</li>
                            <li><strong>Kegunaan:</strong> {{ $produk['kegunaan'] }}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
