<div>
    <style>
        .map-responsive {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            /* 16:9 */
            height: 0;
            overflow: hidden;
        }

        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
    <div class="contact-page-area sp ">
        <div class=" border pt-5 rounded">
            <div class="row">
                <div class="col-12 m-auto text-center">
                    <div class="common-main-headding">
                        <h1>Contact Us</h1>
                        {{-- <p>At eSoft, we value your inquiries and are here to provide the support you need. Whether
                            you're looking for more information about our cutting-edge software.</p> --}}
                    </div>
                </div>
            </div>

            <div class="space60"></div>
            <div class="contact-form-all">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="form-inputs">
                            <h5>Location</h5>
                            <div class="space16"></div>
                            <div class="map-responsive rounded">
                                <iframe src="{{ $contact->google_maps }}" allowfullscreen loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 mt-2">
                        <div class="contact-page-boxs">

                            <!-- Phone / WhatsApp -->
                            @if ($contact->whatsapp)
                                @php
                                    $wa = $contact->whatsapp;

                                    // hapus spasi & strip
                                    $wa = preg_replace('/[^0-9]/', '', $wa);

                                    // jika diawali 08, ganti jadi 628
                                    if (str_starts_with($wa, '08')) {
                                        $wa = '628' . substr($wa, 2);
                                    }
                                @endphp
                                <div class="single-box">
                                    <div class="icon">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </div>
                                    <div class="headding">
                                        <h5>WhatsApp</h5>
                                        <a href="https://wa.me/{{ $wa }}" target="_blank">
                                            {{ $contact->whatsapp }}
                                        </a>
                                    </div>
                                </div>
                            @endif


                            <!-- Email -->
                            @if ($contact->email)
                                <div class="single-box">
                                    <div class="icon">
                                        <i class="fa-brands fa-google"></i>
                                    </div>
                                    <div class="headding">
                                        <h5>Email</h5>
                                        <a href="mailto:{{ $contact->email }}">
                                            {{ $contact->email }}
                                        </a>
                                    </div>
                                </div>
                            @endif



                        </div>
                    </div>

                </div>
            </div>
        </div>

        <img class="shape1" src="/img/shapes/apps-shape2.png" alt="" />
        <img class="shape2" src="/img/shapes/apps-shape1.png" alt="" />
        <img class="shape3" src="/img/shapes/apps-shape1.png" alt="" />
    </div>
</div>
