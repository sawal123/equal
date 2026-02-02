<div class="features6 sp">
    <div class="container">

        {{-- TITLE --}}
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="heading6">
                    <h2 class="text-anime-style-3">
                        {{ $section->title }}
                    </h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center">

            {{-- IMAGE --}}
            <div class="col-lg-6">
                <div class="main-image right60" data-aos="zoom-out" data-aos-duration="800">
                    @if ($section->image)
                        <img src="{{ asset('storage/' . $section->image) }}" alt="{{ $section->title }}">
                    @endif
                </div>
            </div>

            <div class="col-1"></div>

            {{-- CONTENT --}}
            <div class="col-lg-5">
                <div class="heading6 features-heading">

                    {{-- SUBTITLE --}}
                    @if ($section->subtitle)
                        <h3 class="text-anime-style-3">
                            {{ $section->subtitle }}
                        </h3>
                    @endif

                    <div class="space16"></div>

                    {{-- DESKRIPSI --}}
                    <p data-aos="fade-left" data-aos-duration="900">
                        {{ strip_tags($section->content) }}
                    </p>

                    <div class="space30"></div>

                    {{-- BUTTON --}}
                    @if ($section->button_link && $section->button_text)
                        <div data-aos="fade-left" data-aos-duration="900">
                            <a href="{{ $section->button_link }}" class="theme-btn9" wire:navigate>
                                <span class="tb8">
                                    {{ $section->button_text }}
                                    <span class="arrow">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>
