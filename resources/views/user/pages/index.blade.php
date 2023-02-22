@extends('user/layout/layout')
@section('pagetitle' , 'Home')

@section('container')
<!-- Ad Banner -->
      <div class="slideshow-container1">
        <?php
          $banner=DB::table('ad_banners')->get(); ?>
          @foreach ($banner as $item)
        <div class="adImage1 fade1">
          <img src="{{ asset('banner/'.$item->banner_image)}}" class="responsive"  width="100%" alt="">
        </div>
        @endforeach
        {{-- <div class="adImage1 fade1">
          <img src="{{ asset('banner/1676964206.jpg')}}" class="responsive" width="100%" alt="">
        </div> --}}
        {{-- <div class="adImage1 fade1">
          <img src="{{ asset('user/assets/img/lappy/adBanner1.jpg')}}"  class="responsive" width="100%" alt="">
        </div> --}}
          <a class="prev1" onclick="plusSlides(-1)">❮</a>
          <a class="next1" onclick="plusSlides(1)">❯</a>
      </div>
<!-- Ad Banner -->


<!-- main-area -->
    <main>
      <!-- banner-area -->
      <section class="banner-area banner-bg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="banner-img wow fadeInLeft" data-wow-delay=".4s">
                <img src="{{ asset('user/assets/img/lappy/lappy.png')}}" alt="" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="banner-content">
                <span class="sub-title wow fadeInUp" data-wow-delay=".2s"
                  >Amazing <strong style="color: red">Starts</strong> Here</span
                >
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">
                  <span style="color: red">LAPPYSTORE </span> <br />
                  THE BEST LAPTOP SELLER
                </h2>

                <a
                  href="contact.html"
                  class="btn wow fadeInUp"
                  data-wow-delay=".6s"
                  >Contact Us <span></span
                ></a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="banner-shape-wrap">
          <img src="assets/img/banner/banner_shape01.png" alt="" />
          <img
            src="assets/img/banner/banner_shape02.png"
            alt=""
            class="animationFramesOne"
          />
          <img
            src="assets/img/banner/banner_shape03.png"
            alt=""
            class="contactSwimmer"
          />
          <img
            src="assets/img/banner/banner_shape04.png"
            alt=""
            class="rotateme"
          />
          <img
            src="assets/img/banner/banner_shape05.png"
            alt=""
            class="animation1"
          />
          <img
            src="assets/img/banner/banner_shape06.png"
            alt=""
            class="ribbonRotate"
          />
          <img
            src="assets/img/banner/banner_shape07.png"
            alt=""
            class="float-bob-x"
          />
        </div> -->
      </section>
      <!-- banner-area-end -->

      <!-- services-area -->
      <section class="services-area pt-35 pb-95">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
              <div class="services-item wow fadeInUp" data-wow-delay=".2s">
                <div class="services-icon">
                  <img src="{{ asset('user/assets/img/icon/services_icon01.png')}}" alt="" />
                </div>
                <div class="services-content">
                  <h4 class="title">
                    <a href="services.html">REFURBISHED LAPTOP</a>
                  </h4>
                  <p>
                    If you wonder what laptop model to buy and where know one of
                    the equipment we offer and you can have one of the laptops
                    with more reliability and durability of the market. We
                    collect several models of some of the best brands that
                    exist, compare their prices, and choose the one you like the
                    most.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
              <div class="services-item wow fadeInUp" data-wow-delay=".4s">
                <div class="services-icon">
                  <img src="{{ asset('user/assets/img/icon/services_icon02.png')}}" alt="" />
                </div>
                <div class="services-content">
                  <h4 class="title">
                    <a href="services.html">DESKTOP COMPUTERS</a>
                  </h4>
                  <p>
                    Our Refurbished Desktop products has been tested and
                    sanitized to look and work like new, with limited to no
                    signs of wear. The refurbishing process includes
                    functionality testing, inspection, reconditioning and
                    repackaging. The product ships with relevant power charges
                    and cable, up to 6 months warranty, & delivered in a
                    professionally packed box.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
              <div class="services-item wow fadeInUp" data-wow-delay=".6s">
                <div class="services-icon">
                  <img src="{{ asset('user/assets/img/icon/services_icon03.png')}}" alt="" />
                </div>
                <div class="services-content">
                  <h4 class="title">
                    <a href="services.html">REPAIR & SERVICES</a>
                  </h4>
                  <p>
                    If you're looking for professional and reliable
                    professionals for Laptops and Desktop Hardware Upgrades,
                    Repairs, and Spares at the Most Affordable Prices and
                    Warranty, Call Us Now !!
                  </p>
                </div>
              </div>
            </div>
            <!-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                            <div class="services-item wow fadeInUp" data-wow-delay=".8s">
                                <div class="services-icon">
                                    <img src="assets/img/icon/services_icon04.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h4 class="title"><a href="services.html">Branding Design</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div> -->
          </div>
        </div>
      </section>
      <!-- services-area-end -->

      <!-- about-area -->
      <section class="about-area pb-100">
        <div class="container custom-container">
          <div class="about-inner">
            <div class="row align-items-center justify-content-center">
              <div class="col-46 order-0 order-lg-2">
                <div class="about-img text-end">
                  <img src="{{ asset('user/assets/img/lappy/1.jpg')}}" alt="" />
                </div>
              </div>
              <div class="col-54">
                <div class="about-content">
                  <div class="section-title mb-25">
                    <span class="sub-title">About Company</span>
                    <h2 class="title">WELCOME TO LAPPYSTORE</h2>
                  </div>
                  <p>
                    As a professional company, we are able to provide all our
                    refurbished computers and laptops that go through a
                    "10-Point Checklist" to ensure all hardware components are
                    checked for any faults. This along with our 6 months service
                    warranty, full aftercare support and professional cleaning,
                    sanitizing and packaging gives our clients a “like new”
                    product at between 50% and 75% less than buying new. Since
                    these are business models, they are built to be durable,
                    long-lasting and provide excellent performance compared to
                    consumer models.
                  </p>
                  <ul class="list-wrap">
                    <li>
                      <div class="icon">
                        <img src="{{ asset('user/assets/img/icon/about_icon01.png')}}" alt="" />
                      </div>
                      <div class="content">
                        <h4 class="title">Business Desktop</h4>
                        <p>
                          Refurbished computers are considered a more
                          sustainable business model for several reasons.
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="{{ asset('user/assets/img/icon/about_icon02.png')}}" alt="" />
                      </div>
                      <div class="content">
                        <h4 class="title">Business Laptops</h4>
                        <p>
                          Refurbished laptops can be a great option for those
                          looking for a cost-effective and sustainable way to
                          acquire technology.
                        </p>
                      </div>
                    </li>
                  </ul>
                  <div class="about-content-bottom">
                    <span style="font-size: 13px">
                      Refurbished products are normally tested for functionality
                      and defects before they are sold to the public. They are
                      repaired by the original manufacturer and resold</span
                    >
                    <div class="read-more-btn">
                      <a href="contact.html" class="btn"
                        >Contact Us <span></span
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about-area-end -->

      <!-- team-area -->
      <!-- <section class="team-area pt-130 pb-130">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="team-img-wrap">
                <img
                  src="assets/img/team/team_img_shape.png"
                  alt=""
                  class="img-shape"
                />
                <img
                  src="assets/img/team/team_img01.png"
                  alt=""
                  class="img-one"
                />
                <img
                  src="assets/img/team/team_img02.png"
                  alt=""
                  class="img-two"
                />
                <img
                  src="assets/img/team/team_img03.png"
                  alt=""
                  class="img-three"
                />
                <img
                  src="assets/img/team/team_img04.png"
                  alt=""
                  class="img-four"
                />
                <img
                  src="assets/img/team/team_img05.png"
                  alt=""
                  class="img-five"
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="team-content">
                <div class="section-title mb-25">
                  <span class="sub-title">Our Team</span>
                  <h2 class="title">
                    An Essential Aspect of Creativity is Not Being Afraid to
                    Fail
                  </h2>
                </div>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard.
                </p>
                <a href="team.html" class="btn">Meet Our Team <span></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="team-shape-wrap">
          <img
            src="assets/img/images/team_shape01.png"
            alt=""
            class="ribbonRotate"
          />
          <img
            src="assets/img/images/team_shape02.png"
            alt=""
            class="float-bob-x"
          />
        </div>
      </section> -->
      <!-- team-area-end -->

      <!-- project-area -->
      <section class="project-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="project-content">
                <div class="section-title white-title mb-30">
                  <!-- <span class="sub-title">Our Complete Craft</span> -->
                  <h2 class="title">
                    We deals with refurbished computers and laptops
                  </h2>
                </div>
                <p>
                  Refurbishment is the distribution of products that have been
                  previously returned to a manufacturer or vendor for any
                  reason, not sold in the market or new launch of a product
                </p>
                <div class="content-bottom">
                  <a href="contact.html" class="btn"
                    >Contact Us <span></span
                  ></a>
                  <div class="project-nav">
                    <button class="swiper-button-prev"></button>
                    <button class="swiper-button-next"></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8">
              <div class="project-item-wrap">
                <div class="swiper-container project-active">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="project-item">
                        <a href=""
                          ><img
                            style="height: 513px; width: 722px"
                            src="{{ asset('user/assets/img/lappy/asuslaptop.jpg')}}"
                            alt=""
                        /></a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="project-item">
                        <a href="#"
                          ><img
                            style="height: 513px; width: 722px"
                            src="{{ asset('user/assets/img/lappy/ls2.jpg')}}"
                            alt=""
                        /></a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="project-item">
                        <a href="#"
                          ><img
                            style="height: 513px; width: 722px"
                            src="{{ asset('user/assets/img/lappy/ls3.jpg')}}"
                            alt=""
                        /></a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="project-item">
                        <a href="#" 
                        
                          ><img
                            style="height: 513px; width: 722px"
                            src="{{ asset('user/assets/img/lappy/ls4.jpg')}}"
                            alt=""
                        /></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="project-shape-wrap">
          <img
            src="{{ asset('user/assets/img/project/project_shape01.png')}}"
            alt=""
            class="shape-one ribbonRotate"
          />
          <img
            src="{{ asset('user/assets/img/project/project_shape02.png')}}"
            alt=""
            class="shape-two ribbonRotate"
          />
        </div>
      </section>
      <!-- project-area-end -->

      <!-- testimonial-area -->
      <section class="testimonial-area-three testimonial-area-four">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8">
              <div class="section-title title-style-two mb-45">
                <h2 class="title">What Our Client’s Say</h2>
              </div>
            </div>
            <div class="col-md-4">
              <div class="testimonial-nav">
                <button class="swiper-button-prev"></button>
                <button class="swiper-button-next"></button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="swiper-container testimonial-active-three">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-item-three">
                      <div class="testimonial-thumb-three">
                        <!-- <img
                          src="assets/img/images/testimonial_avatar01.png"
                          alt=""
                        /> -->
                      </div>
                      <div class="testimonial-content-three">
                        <h4 class="title" style="color: #e30405;">Bobina jemy</h4>
                        <span>Banglore</span>
                        <p>
                          “Najmal, the owner of Lappystore, was nothing less than a blessing to my son's final exam. He calmed us down and promised to do the necessary repair. He arrived at 8 in the morning with my son's laptop all working and in good condition. He even gave us a complementary mouse and a laptop bag. His level of perfection is commendable and he would recommend him to anyone. Thanks Najmal for your tremendous help.”
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-item-three">
                      <div class="testimonial-thumb-three">
                        <!-- <img
                          src="assets/img/images/testimonial_avatar02.png"
                          alt=""
                        /> -->
                      </div>
                      <div class="testimonial-content-three">
                        <h4 class="title" style="color: #e30405;">Amaan S</h4>
                        <span>Bangalore,KA</span>
                        <p>
                          “Not someone to write reviews but how do I not write about Lappystore.. I wanted a refurbished laptop and Najmal 
                          guided me with what would be best for me . I spent talking to him for a long time and truly amazed by the vast knowledge he has and his humble nature. 
                          Thank you for the charming laptop bag and mouse as well. Iam surely going to recommend Lappystore to all my friends.. There are no two thoughts .”
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-item-three">
                      <div class="testimonial-thumb-three">
                        <!-- <img
                          src="assets/img/images/testimonial_avatar03.png"
                          alt=""
                        /> -->
                      </div>
                      <div class="testimonial-content-three">
                        <h4 class="title" style="color: #e30405;">Shiely S</h4>
                        <span>Banglore,KA</span>
                        <p>
                          “We were looking for a refurbished laptop for online classes for a kid. Najmal was very helpful in
                          helping us narrow down a laptop that would suit our needs. We did face 2 minor issues with the laptop, however Najmal ensured that it was 
                          addressed immediately and as part of the 6 months warranty. He arranged for the pick up and drop and sent us back the laptop with the issue fixed each time.
                          Happy with the quality of service and prompt action.”
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- testimonial-area-end -->

      <!-- consultation-area -->
      <section class="consultation-area pb-120">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="consultation-content">
                <div class="section-title mb-25">
                  <img src="{{ asset('user/assets/img/icon/consultation_icon01.png')}}" alt="" />
                  <span class="sub-title">95% Accuracy</span>
                  <h2 class="title">
                    REFURBISHED LAPTOP,DESKTOP COMPUTERS & REPAIR SERVICES
                  </h2>
                </div>
                <p>
                  Refurbishment is the distribution of products (generally
                  electronics) that have been previously returned to a
                  manufacturer or vendor for any reason, not sold in the market
                  or new launch of a product. Refurbished products are normally
                  tested for functionality and defects before they are sold to
                  the public. They are repaired by the original manufacturer and
                  resold.
                </p>
                <!-- <div class="consultation-list">
                  <ul class="list-wrap">
                    <li>
                      <div class="icon">
                        <img
                          src="assets/img/icon/consultation_icon02.png"
                          alt=""
                        />
                        <span>12x</span>
                      </div>
                      <div class="content">
                        <h6 class="title">Faster Order Processing</h6>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <img
                          src="assets/img/icon/consultation_icon03.png"
                          alt=""
                        />
                        <span>95%</span>
                      </div>
                      <div class="content">
                        <h6 class="title">Processing Accuracy</h6>
                      </div>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
            <div class="col-lg-5">
              <div class="consultation-form-wrap">
                <h4 class="title"></h4>
                <form action="{{ route('user.enquiry') }}" method="POST">
                  @csrf
                  @if (Session::get('success'))
                          <div class="alert alert-success">
                              {{ Session::get('success') }}
                          </div>
                        @endif
                        @if (Session::get('fail'))
                          <div class="alert alert-danger">
                              {{ Session::get('fail') }}
                          </div>
                   @endif
                  <div class="form-grp">
                    <input type="text" name="name" placeholder="Name" />
                  </div>
                  <div class="form-grp">
                    <input type="email" name="email" placeholder="Email Address" />
                  </div>
                  <div class="form-grp">
                    <input type="textarea" name="message" placeholder="Message" />
                  </div>
                  <button class="btn" type="submit">Contact us <span></span></button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="consultation-shape-wrap">
          <img
            src="{{ asset('user/assets/img/images/consultation_shape01.png')}}"
            alt=""
            class="shape-one ribbonRotate"
          />
          <img
            src="{{ asset('user/assets/img/images/consultation_shape02.png')}}"
            alt=""
            class="shape-two float-bob-x"
          />
        </div>
      </section>
      <!-- consultation-area-end -->

      <!-- blog-area -->
      <!-- <section class="blog-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title">My Blog</span>
                                <h2 class="title">News & Updates</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog_img01.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="blog.html" class="tag">Branding</a>
                                    <h2 class="title"><a href="blog-details.html">How To Create JavaScript Vanilla Gantt Chart: Adding</a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li class="avatar-img">
                                                <a href="blog.html"><img src="assets/img/blog/blog_avatar01.png" alt=""></a>
                                            </li>
                                            <li>By <a href="blog.html">Ataur</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog_img02.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="blog.html" class="tag">Branding</a>
                                    <h2 class="title"><a href="blog-details.html">How To Create JavaScript Vanilla Gantt Chart: Adding</a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li class="avatar-img">
                                                <a href="blog.html"><img src="assets/img/blog/blog_avatar02.png" alt=""></a>
                                            </li>
                                            <li>By <a href="blog.html">Ataur</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog_img03.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="blog.html" class="tag">Branding</a>
                                    <h2 class="title"><a href="blog-details.html">How To Create JavaScript Vanilla Gantt Chart: Adding</a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li class="avatar-img">
                                                <a href="blog.html"><img src="assets/img/blog/blog_avatar03.png" alt=""></a>
                                            </li>
                                            <li>By <a href="blog.html">Ataur</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
      <!-- blog-area-end -->

      <!-- newsletter-area -->
      <!-- <section class="newsletter-area pt-110 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center mb-80">
                                <span class="sub-title">Get update</span>
                                <h2 class="title">Get latest updates <br> and dealsi</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email address">
                                    <button type="submit" class="btn">Subscribe <span></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newsletter-shape-wrap">
                    <img src="assets/img/images/newsletter_bg_shape.png" alt="" class="bg-shape">
                    <img src="assets/img/images/newsletter_shape01.png" alt="" class="shape-one">
                    <img src="assets/img/images/newsletter_shape02.png" alt="" class="shape-two">
                    <img src="assets/img/images/newsletter_shape03.png" alt="" class="shape-three">
                    <img src="assets/img/images/newsletter_shape04.png" alt="" class="shape-four">
                    <img src="assets/img/images/newsletter_shape05.png" alt="" class="shape-five">
                    <img src="assets/img/images/newsletter_shape06.png" alt="" class="shape-six">
                </div>
            </section> -->
      <!-- newsletter-area-end -->
    </main>
    <!-- main-area-end -->

    @endsection