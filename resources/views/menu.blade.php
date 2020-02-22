
@extends('template.home')

@section('title',$menu->judul . ' - Get Shortlink here')

@section('content')

  <!-- END nav -->

    <!-- <div class="js-fullheight"> -->
        <div class="hero-wrap js-fullheight">
            <div class="overlay"></div>
            <div id="particles-js"></div>
            <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                  <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ ucwords($menu->judul) }}</h1>
                </div>
              </div>
            </div>
          </div>
          
          <div class="bg-light">
            <section class="ftco-section-featured ftco-section-featured-2 ftco-animate">
              <div class="container-fluid" data-scrollax-parent="true">
                <div class="row mt-5 d-flex justify-content-center">
                  <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="h1">You need a short link? <strong class="px-3">Shortlink is</strong> a service commonly used by bloggers to shorten URLs to make it easier for people to remember long URLs or links from the blog in question.</h2>
                    <p><a href="{{ url('/')}}" class="btn btn-primary mt-3 py-3 px-5">Get Short Link</a></p>
                  </div>
                </div>
              </div>
            </section>
          </div>
      
          <div class="ftco-section">
            <div class="container">
              <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                  <span class="subheading">{{ $menu->nama }}</span>
                  <h2 class="mb-4">{{ $menu->judul }}</h2>
                  <p>{{ $menu->deskripsi }}</p>
                </div>
              </div>
            </div>
          </div>
      
          {{-- <section class="ftco-section testimony-section bg-light">
            <div class="container">
              <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                  <span class="subheading">Customer Says</span>
                  <h2 class="mb-4">Our satisfied customer says</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
              </div>
              <div class="row ftco-animate">
                <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item text-center">
                      <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text">
                          <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p class="name">Dennis Green</p>
                          <span class="position">Marketing Manager</span>
                        </div>
                      </div>
                    </div>
                    <div class="item text-center">
                      <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text">
                          <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p class="name">Dennis Green</p>
                          <span class="position">Interface Designer</span>
                        </div>
                      </div>
                    </div>
                    <div class="item text-center">
                      <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text">
                          <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p class="name">Dennis Green</p>
                          <span class="position">UI Designer</span>
                        </div>
                      </div>
                    </div>
                    <div class="item text-center">
                      <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text">
                          <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p class="name">Dennis Green</p>
                          <span class="position">Web Developer</span>
                        </div>
                      </div>
                    </div>
                    <div class="item text-center">
                      <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text">
                          <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p class="name">Dennis Green</p>
                          <span class="position">System Analytics</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> --}}
          
      

      
@endsection
