<!--=====Desktop HEADER START=======-->
<header>
    <div class="header-area header-area6 header-area-all d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo home1-site-logo ">
                            <a href="/"><img src="{{ asset('assets/img/logo/logo3.webp') }}"
                                    style="width: 200px !important" alt="">
                            </a>
                        </div>

                        <div class="header-right-area">
                            <div class="main-menu-ex main-menu-ex1">
                                <ul>
                                    <li><a href="/" wire:navigate>Home</a></li>
                                    <li><a href="/produk" wire:navigate>Product</a></li>
                                    <li><a href="/about" wire:navigate>About</a></li>
                                    <li><a href="/contact" wire:navigate>Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- .test --}}

                        <div class="header4-buttons">
                            <a href="https://wa.me/628116240771" target="_blank" class="theme-btn8"><span
                                    class="tb8">Informasi <span class="arrow"><i
                                            class="fa-solid fa-arrow-right"></i></span></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END=======-->

<!--=====Mobile header start=======-->
<div class="mobile-header mobile-header3 d-block d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="/">
                        <img src="{{ asset('assets/img/logo/logo2.webp') }}" alt="">
                    </a>
                </div>
                <div class="mobile-nav-icon">
                    <i class="fa-duotone fa-bars-staggered"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar mobile-sidebar4 d-block d-lg-none">
    <div class="logo-m">
        <a href="/">
            <img src="{{ asset('assets/img/logo/logo1.webp') }}" alt="">
        </a>
    </div>

    <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
    </div>

    <div class="mobile-nav">
        <ul>
            <li>
                <a href="/" wire:navigate>Home</a>
            </li>
            <li>
                <a href="/produk" wire:navigate>Product</a>
            </li>
            <li>
                <a href="/about" wire:navigate>About</a>
            </li>
            <li>
                <a href="/contact" wire:navigate>Contact</a>
            </li>
        </ul>

        <a class="sidebar1-btn" href="https://wa.me/628116240771" target="_blank">
            <span>Informasi</span>
            <span class="arrow">
                <i class="fa-regular fa-arrow-right"></i>
            </span>
        </a>
    </div>
</div>

<!--=====Mobile header end=======-->
