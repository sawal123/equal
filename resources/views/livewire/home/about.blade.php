<div class="brands-area6 sp">
    <div class="container">
        <div class="row align-items-center">

            {{-- TEXT --}}
            <div class="col-lg-5">
                <div class="heading6-w">

                    {{-- TITLE --}}
                    @if ($section->title)
                        <h2 class="text-anime-style-3">
                            {{ $section->title }}
                        </h2>
                    @endif

                    <div class="space16"></div>

                    {{-- CONTENT --}}
                    @if ($section->content)
                        <p data-aos="fade-left" data-aos-duration="900">
                            {{ strip_tags($section->content) }}
                        </p>
                    @endif

                    <div class="space30"></div>

                    {{-- BUTTON --}}
                    @if ($section->button_text && $section->button_link)
                        <div data-aos="fade-left" data-aos-duration="1000">
                            <a href="{{ $section->button_link }}" class="theme-btn8" wire:navigate>
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

            <div class="col-lg-1"></div>

            {{-- IMAGE --}}
            <div class="col-lg-6">
                @if ($section->image)
                    <img src="{{ asset('storage/' . $section->image) }}" class="rounded mt-3"
                        alt="{{ $section->title }}">
                @endif
            </div>

        </div>
    </div>
</div>
