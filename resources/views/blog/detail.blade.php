@extends('template.home')

@section('title','Blog - Get Shortlink here')

@section('content')

  <div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog single</span></p> --}}
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
        </div>
      </div>
    </div>
  </div>
  
  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      @if ($link)
      <div class="row mb-3">
        <div class="col-md-12 text-center p-3">
          <h3 id="tekstimer">Link download akan muncul dalam <span id="timer"></span> detik.</h3> 
          <span id="link"></span>
        </div>
      </div>
      @endif
      <div class="row">
        <div class="col-md-8 ftco-animate">
          <h2 class="mb-3">{{ $artikel->judul }}</h2>
          <p>
            <img src="{{ asset('/img/artikel/'.$artikel->gambar)}}" alt="" class="img-fluid">
          </p>
              @foreach (postblog($artikel->deskripsi) as $item)
                  <p class="text-justify">{{ $item }}</p>
              @endforeach
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <span class="tag-cloud-link">Life</span>
              <span class="tag-cloud-link">Sport</span>
              <span class="tag-cloud-link">Tech</span>
              <span class="tag-cloud-link">Travel</span>
            </div>
          </div>
          
          <div class="about-author d-flex p-5 bg-light">
            <div class="bio align-self-md-center mr-5">
              <img src="{{ asset('/tema/images/person_1.jpg')}}" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc align-self-md-center">
              <h3>Jeck olson</h3>
              <p id="shortlink">A programmer is someone who is able to solve problems using a programming language. They have many abilities consisting of various levels, they are good at writing code, understand algorithms and often work alone.</p>
            </div>
          </div>

          @if ($link)
            <div class="row mt-3"  >
              <div class="col-md-12 text-center p-3">
                <div id="download" style="display : none;">
                  <a href="{{ $link->link_original}}" class="btn btn-warning btn-sm">Menuju Link >></a>
                </div>
              </div>
            </div>
            <div class="row mt-3"  >
              <div class="col-md-12 text-center p-3">
               <div id="iklan">
               </div>
              </div>
            </div>
          @endif
          <div class="pt-5 mt-5">
            <h3 class="mb-5">5 Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  <img src="{{ asset('/tema/images/person_1.jpg')}}" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Jeck olson</h3>
                  <div class="meta">April 27, 2018 at 9:21pm</div>
                  <p>very useful information for me. hopefully more information</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="{{ asset('/tema/images/person_2.jpg')}}" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Alex</h3>
                  <div class="meta">June 04, 2018 at 5:21pm</div>
                  <p>technology is a suitable article for now. the information provided is very informative and very useful for young people today</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="{{ asset('/tema/images/person_3.jpg')}}" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Cristian R</h3>
                      <div class="meta">June 17, 2018 at 7:44pm</div>
                      <p>Turning away from the phenomenon that is happening right now, the encounter of each person is starting to be replaced by a number of sophisticated devices that shorten the distance. For example, people will prefer to communicate something through iPad, BB, Mobile and other electronic devices. The dangerous thing through this, is that human dignity will be at stake.</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="{{ asset('/tema/images/person_4.jpg')}}" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Alexsander</h3>
                          <div class="meta">June 30, 2018 at 1:34pm</div>
                          <p>Citing his book Alo Liliweri related to interpersonal relations, there are several communication functions, among others                         -function of providing information In interpersonal communication, of course, not just conveying information alone, but there are also other elements.
                            -explain function</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>

                          <ul class="children">
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="{{ asset('/tema/images/work-1.jpg')}}" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                <h3>Jenny</h3>
                                <div class="meta">August, 2018 at 8:10pm</div>
                                <p>Unsur yang lain tersebut adalah menerangkan sesuatu hal yang berhubungan dengan konteks pembicaraan. Baik itu berupa fenomena atau kejadian yang sedang hangat di negeri ini. Ataupun permasalahan yang terjadi di lingkup perusahaan.</p>
                                <p><a href="#" class="reply">Reply</a></p>
                              </div>
                            </li>
                          </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- END comment-list -->
            
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="p-5 bg-light">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div> <!-- .col-md-8 -->
        <div class="col-md-4 sidebar ftco-animate order-first">
          <div class="sidebar-box">
            {{-- <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
              </div>
            </form> --}}
          </div>
          <div class="sidebar-box ftco-animate">
            {{-- <div class="categories">
              <h3>Categories</h3>
              @foreach ($kategori as $item)
                <li><a href="#">{{ ucwords($item->nama)}} <span>{{ Db::totalartikelkategori($item->id)}}</span></a></li>
              @endforeach
            </div> --}}
          </div>

          <div class="sidebar-box ftco-animate">
            <h3>Recent Blog</h3>
            @foreach ($artikels as $item)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{ asset('/img/artikel/'.$item->gambar)}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{ url('/blog/detail/'.$item->id)}}">{{ $item->judul}}</a></h3>
                  <div class="meta">
                  <div><span class="icon-calendar"></span> {{ $item->created_at}}</div>
                    <div><span class="icon-person"></span> Admin</div>
                    <div><span class="icon-chat"></span> {{ randomid()}}</div>
                  </div>
                </div>
              </div>
            @endforeach

          </div>

          <div class="sidebar-box ftco-animate">
          </div>

        </div>

      </div>
    </div>
  </section> <!-- .section -->

@endsection