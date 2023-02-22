@extends('user/layout/layout')
@section('pagetitle' , 'The Digital Superstore')

@section('container')
 <!-- main-area -->
    <main>
      <!-- breadcrumb-area -->
      <section class="breadcrumb-area breadcrumb-area-two pt-175">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="breadcrumb-content">
                <h2 class="title">Dell Latitude Series</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Dell Latitude Series
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- community-area -->
      <div class="community-area pt-30">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-10">
              <!-- <div class="community-img">
                <img src="assets/img/images/community_img.png" alt="" />
              </div> -->
              <div class="community-content">
                <p>
                  The Dell Latitude series is a line of laptop computers
                  manufactured and sold by American company Dell. It is a
                  business-oriented line, aimed at corporate enterprises,
                  healthcare, government, and education markets; unlike the
                  Inspiron series, which is aimed at individual customers, and
                  the Vostro series, which is aimed at smaller businesses. The
                  Latitude directly competes with the Lenovo ThinkPad and the
                  EliteBook series by HP. Additionally, the "Rugged (Extreme)",
                  "XFR" and "ATG" models compete primarily with Panasonic's
                  Toughbook line of "rugged" laptops
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- community-area-end -->

      <!-- team-area -->
      <section class="team-area-two pt-110 pb-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="#"><img src="{{ asset('user/assets/img/lappy/dt1.jpg') }}" alt="" /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">Dell-E6410-Laptop</a></h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt2.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">Dell-E7240-Laptop</a></h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt3.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">Dell-7480</a></h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt4.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">Dell-E6420-Laptop</a></h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt5.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">Dell-E6430-Laptop</a></h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt6.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">Dell Latitude E7440</a></h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt7.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title">
                    <a href="#">Dell Latitude E7450-5th(Gen)</a>
                  </h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt8.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title">
                    <a href="#">Dell Latitude E7450-6th(Gen)</a>
                  </h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt9.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title">
                    <a href="#">Dell Latitude 7240-Corei7</a>
                  </h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt10.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title">
                    <a href="#">Dell LatitudeE7480-Corei7</a>
                  </h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt11.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title">
                    <a href="#">Dell Latitude E7240-Corei5</a>
                  </h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 pb-100">
              <div class="team-item">
                <div class="team-thumb">
                  <a href="team-details.html"
                    ><img src="{{ asset('user/assets/img/lappy/dt12.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">Dell Precision 7520</a></h2>
                  <div class="team-social">
                    <ul class="list-wrap" style="display: block">
                      <li><span>Sleek & Light Weight</span></li>
                      <li><span>Excellent Performance</span></li>
                      <li><span>Long battery Life</span></li>
                      <li>
                        <span>Student Use- Office Use - Business Use</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- team-area-end -->

      <!-- newsletter-area -->
      <!-- <section class="newsletter-area-two">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-9">
                                <div class="section-title title-style-two white-title text-center mb-30">
                                    <span class="sub-title">Get update</span>
                                    <h2 class="title">Get latest updates and deals</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="newsletter-form">
                                    <form action="#">
                                        <input type="email" placeholder="Enter your email address">
                                        <button type="submit" class="btn">Subscribe <span></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="newsletter-shape-wrap-two">
                            <img src="assets/img/images/h3_newsletter_shape01.png" alt="">
                            <img src="assets/img/images/h3_newsletter_shape02.png" alt="">
                            <img src="assets/img/images/h3_newsletter_shape03.png" alt="">
                            <img src="assets/img/images/h3_newsletter_shape04.png" alt="">
                        </div>
                    </div>
                </div>
            </section> -->
      <!-- newsletter-area-end -->

      <!-- brand-area -->
      <!-- <section class="brand-area-two pb-110">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section-title text-center mb-80">
                <span class="sub-title">Our Partners</span>
                <h2 class="title">People Who Trust Us</h2>
              </div>
            </div>
          </div>
          <div class="row brand-active">
            <div class="col-12">
              <div class="brand-item-two">
                <img src="assets/img/brand/h3_brand_img01.png" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="assets/img/brand/h3_brand_img02.png" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="assets/img/brand/h3_brand_img03.png" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="assets/img/brand/h3_brand_img04.png" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="assets/img/brand/h3_brand_img05.png" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="assets/img/brand/h3_brand_img06.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- brand-area-end -->
    </main>
    <!-- main-area-end -->
    @endsection