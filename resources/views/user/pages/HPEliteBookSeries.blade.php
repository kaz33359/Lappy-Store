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
                <h2 class="title">HP EliteBook Series</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      HP EliteBook Series
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
                  HP EliteBook is a line of business-oriented high-end notebooks
                  and mobile workstations made by Hewlett-Packard (HP Inc.)
                  The EliteBook series, which fits above the lower-end ProBook
                  series, was introduced in August 2008 as a
                  replacement of the HP Compaq high end line of notebooks. The
                  EliteBook brand included mobile workstations until September
                  2013, when they were rebranded as HP ZBook. The EliteBook
                  mainly competes against computer lineups such as Acer's
                  TravelMate, Dell's Latitude and Precision, Lenovo's ThinkPad
                  and Toshiba's Portégé and Tecra..
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
                  <a href="#"><img src="{{ asset('user/assets/img/lappy/hpl1.jpg') }}" alt="" /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Elitebook 8470P</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl2.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Probook 6470b</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl3.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Probook 645G1</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl4.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Elitebook 745 G2</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl5.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Folio 9480M</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl6.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Probook 650 G1</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl7.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Probook 640 G1</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl8.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Elitebook X360 1030</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl9.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Elitebook 840 G1</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl10.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Elitebook 840 G2</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl11.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP Elitebook 840 G3</a></h2>
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
                    ><img src="{{ asset('user/assets/img/lappy/hpl12.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="team-content">
                  <h2 class="title"><a href="#">HP 840 G4 Slim</a></h2>
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