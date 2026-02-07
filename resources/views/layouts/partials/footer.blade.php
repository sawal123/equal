  <!-- ===== FOOTER AREA START ======= -->
  <div class="footer6 _relative">
      <div class="container bg">
          <div class="row">
              <div class="col-lg-5">
                  <div class="subscribe-area">
                      <img src="{{ asset('storage/' . $logo->logo_1) }}" alt="">
                  </div>
              </div>
              <div class="col-lg col-md-6 col-12">
                  <div class="single-footer-items">
                      <h3 class="mb-3">Equallfresh</h3>
                      @php
                          $wa = $contact->whatsapp;

                          // hapus spasi & strip
                          $wa = preg_replace('/[^0-9]/', '', $wa);

                          // jika diawali 08, ganti jadi 628
                          if (str_starts_with($wa, '08')) {
                              $wa = '628' . substr($wa, 2);
                          }
                      @endphp
                      <ul class="menu-list list-unstyled">
                          <li class="mb-2">{{ $contact->perusahaan }}</li>

                          <li class="mb-2">
                              {{ $contact->alamat }}
                          </li>

                          <li class="mb-2">
                              <a href="https://wa.me/{{ $wa }}" target="_blank">{{ $contact->whatsapp }}</a>
                          </li>

                          <li>
                              <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                          </li>
                      </ul>
                  </div>
              </div>


              <div class="col-lg col-md-6 col-12">
                  <div class="single-footer-items">
                      <h3>Resources</h3>

                      <ul class="menu-list">
                          <li>
                              <a href="#">Product</a>
                          </li>
                          <li>
                              <a href="#">Contact</a>
                          </li>
                          <li>
                              <a href="#">About</a>
                          </li>
                      </ul>
                  </div>
              </div>



              <div class="col-lg-3 col-md-6 col-12">
                  <div class="single-footer-items">
                      <h3>Media</h3>

                      <ul class="social-icons">

                          @foreach ($socials as $item)
                              <li>
                                  <a href="{{ $item->icon }}"><i class="{{ $item->icon }}"></i></a>
                              </li>
                          @endforeach

                      </ul>
                  </div>
              </div>
          </div>

          <div class="space40"></div>

          <div class="copyright-area">
              <div class="row align-items-center">
                  <div class="col-md-5">
                      <div class="logo">
                          <a href="#"><img src="{{ asset('storage/' . $logo->logo_2) }}" alt="" /></a>
                      </div>
                  </div>
                  <div class="col-md-7">
                      <div class="coppyright text-right">
                          <a href="#">@2026 Equallfresh</a>
                          <a href="#">Security</a>
                          <a href="#">Your Privacy</a>
                          <a href="#">Terms</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- ===== FOOTER AREA END ======= -->
