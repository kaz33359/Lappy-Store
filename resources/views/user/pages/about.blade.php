@extends('user/layout/layout')
@section('pagetitle' , 'About')

@section('container')
<!-- main-area -->
    <main>
      <!-- breadcrumb-area -->
      <section class="breadcrumb-area pt-175 pb-140">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="breadcrumb-content">
                <h2 class="title">About Us</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      About Us
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="breadcrumb-shape-wrap">
          <img src="{{ asset('user/assets/img/images/breadcrumb_shape01.png') }}" alt="" />
          <img src="{{ asset('user/assets/img/images/breadcrumb_shape02.png') }}" alt="" />
        </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- counter-area -->
      <section class="counter-area-three pb-100">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-0 order-lg-2">
              <div class="counter-item-wrap-three">
                <ul class="list-wrap">
                  <li>
                    <div class="counter-item-three ">
                      <div class="icon">
                        <img
                          src="{{ asset('user/assets/img/icon/inner_counter_icon01.png')}}"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <h2 class="count">
                          <span class="odometer" data-count="1500"></span>+
                        </h2>
                        <p>COMPUTER  <span>SERVICED</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="counter-item-three">
                      <div class="icon">
                        <img
                          src="{{ asset('user/assets/img/icon/inner_counter_icon02.png')}}"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <h2 class="count">
                          <span class="odometer" data-count="100"></span>+
                        </h2>
                        <p>HAPPY  <span>CLIENTS</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="counter-item-three">
                      <div class="icon">
                        <img
                          src="{{ asset('user/assets/img/icon/inner_counter_icon03.png')}}"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <h2 class="count">
                          <span class="odometer" data-count="1200"></span>+
                        </h2>
                        <p>PEOPLE <span>LIKES</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="counter-item-three">
                      <div class="icon">
                        <img
                          src="{{ asset('user/assets/img/icon/inner_counter_icon04.png')}}"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <h2 class="count">
                          <span class="odometer" data-count="100"></span>+
                        </h2>
                        <p>IT <span>SERVICES</span></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="counter-content-three">
                <div class="section-title title-style-two mb-30">
                  <h2 class="title">
                    BEST BUDGET <span style="color: red;"> LAPTOPS & DESKTOPS</span>
                  </h2>
                </div>
                <p>
                    We have a wide range of laptops. Pricing range from 10000 to 50000+. Buying a refurbished laptop can save you several hundred dollars depending on the make and model and where you shop. Browse laptops according to your budget.
                </p>
                <!-- <img src="assets/img/images/sine.png" alt="" />
                <div class="content-bottom">
                  <h4 class="title-two">Davis Levin</h4>
                  <span>Director Company</span>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- counter-area-two -->

      <!-- team-area -->
      <!-- <section class="team-area-two pt-110 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <div class="section-title title-style-two text-center mb-70">
                                <h2 class="title">Meet The Squad</h2>
                                <p>Lorem ipsum dolor sit amet, sed nulla ante amet, elementum tincidunt arcu sed laoreet, natoque ac eget imperdiet. Ac scelerisque nibh dolores</p>
                            </div>
                        </div>
                    </div>
                    <div class="row team-active">
                        <div class="col-lg-4">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="assets/img/team/inner_team01.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h2 class="title"><a href="team-details.html">Alena Rosser</a></h2>
                                    <span>CEO Kawasaki Inc.</span>
                                    <div class="team-social">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="assets/img/team/inner_team02.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h2 class="title"><a href="team-details.html">Tiana Dokidis</a></h2>
                                    <span>CEO Kawasaki Inc.</span>
                                    <div class="team-social">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="assets/img/team/inner_team03.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h2 class="title"><a href="team-details.html">Ryan Vetrovs</a></h2>
                                    <span>CEO Kawasaki Inc.</span>
                                    <div class="team-social">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="assets/img/team/inner_team04.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h2 class="title"><a href="team-details.html">Emerson Saris</a></h2>
                                    <span>CEO Kawasaki Inc.</span>
                                    <div class="team-social">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="assets/img/team/inner_team05.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h2 class="title"><a href="team-details.html">Lindsey Schleifer</a></h2>
                                    <span>CEO Kawasaki Inc.</span>
                                    <div class="team-social">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
      <!-- team-area-end -->

      <!-- consultation-area -->
      <section class="consultation-area consultation-area-two pt-120 pb-120">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="consultation-content">
                <div class="section-title mb-25">
                  <!-- <span class="sub-title">95% Accuracy</span> -->
                  <h2 class="title" style="text-align: center;">WELCOME TO <span style="color: red;">LAPPYSTORE</span></h2>
                </div>
                <!-- <h3 style="text-align: center;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Looking to buy quality and cost-effective refurbished or new computers, or require repair service, but can't seem to find something in your budget or a credible vendor?</h3> -->
               <p style="font-family: Arial, Helvetica, sans-serif;font-size: large;text-align: center;"><b>Looking to buy quality and cost-effective refurbished or new computers, or require repair service, but can't seem to find something in your budget or a credible vendor?</b> </p>
                <p class="aboutlappy" >
                  LAs a professional company, we are able to provide all our refurbished computers and laptops that go through a "10-Point Checklist" to ensure all hardware components are checked for any faults. This along with our 6 months service warranty, full aftercare support and professional cleaning, sanitizing and packaging gives our clients a “like new” product at between 50% and 75% less than buying new. Since these are business models, they are built to be durable, long-lasting and provide excellent performance compared to consumer models. <br><br>
                  Green Mayors Solutions along with its partner companies provide end-to-end services that revolve around remarketing used IT equipment to businesses. We provide these services to businesses that require their IT assets safely removed and data wiped according to global compliances/regulations and with businesses that need to update their IT equipment at a fraction of the cost by buying reliable and viable second user IT equipment from us. <br><br>
                  And if you're a Startup, Entrepreneur, Education Institution, Business Owner, Government Organization, IT & Design Professional, Student or someone looking for cost-effective, quality, and performance computers with a warranty from a trusted source, then you've reached the right place! <br><br>
                  Buying refurbished computers can allow for some serious savings and have peace of mind since all our products come with warranty and annual maintenance contracts. <br><br>
                  Our products are restored by highly skilled technical professionals to as good condition as possible. Our QA/QC team check every component - including the battery, internal storage, power supply, ports, and other parts as part of our "10 Point Checklist" before being shipped to our customers.
                </p>
                <!-- <div class="consultation-list">
                  <ul class="list-wrap">
                    <li>
                      <h6 class="title">12X</h6>
                      <p>Faster Order <span>Processing</span></p>
                    </li>
                    <li>
                      <h6 class="title">99%</h6>
                      <p>Processing <span>Accuracy</span></p>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
            <!-- <div class="col-lg-5">
              <div class="consultation-form-wrap">
                <h4 class="title">Free Consultation</h4>
                <form action="#">
                  <div class="form-grp">
                    <input type="text" placeholder="Name" />
                  </div>
                  <div class="form-grp">
                    <input type="email" placeholder="Email Address" />
                  </div>
                  <div class="form-grp">
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="form-grp">
                    <select
                      id="shortBy"
                      name="select"
                      class="form-select"
                      aria-label="Default select example"
                    >
                      <option value="">Subject</option>
                      <option>Subject One</option>
                      <option>Subject Two</option>
                      <option>Subject Three</option>
                      <option>Subject Four</option>
                    </select>
                  </div>
                  <button class="btn" type="submit">Consultation</button>
                </form>
              </div>
            </div> -->
          </div>
        </div>
        <!-- <div class="consultation-shape-wrap">
          <img
            src="assets/img/images/consultation_shape01.png"
            alt=""
            class="shape-one ribbonRotate"
          />
          <img
            src="assets/img/images/consultation_shape02.png"
            alt=""
            class="shape-two float-bob-x"
          />
        </div> -->
      </section>
      <!-- consultation-area-end -->

      <!-- services-area -->
      <section class="inner-services-area pt-110 pb-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section-title title-style-two text-center mb-60">
                <span class="sub-title">Refurbished</span>
                <h2 class="title">Desktops & Laptops</h2>
              </div>
            </div>
          </div>
          <div class="inner-services-item-wrap">
            <div class="row justify-content-center">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <div class="services-item-four">
                  <div class="services-icon-four">
                    <img
                      src="{{ asset('user/assets/img/icon/inner_services_icon01.png')}}"
                      alt=""
                    />
                  </div>
                  <div class="services-content-four">
                    <h2 class="title" style="font-size: 19px">
                      <a href="ComputerRepairs.html">Computer Repair</a>
                    </h2>
                    <p>
                      Lappystore undertake Desktop Computer Repair and Services
                      of all companies make and model. Team Lappystore has a set
                      of Trained and ceritfied technicians expertised in desktop
                      Repair and services. We never send third party vendors to
                      take care of your PC. We use genuine spare parts with
                      warranty. Data Security is our topmost priority
                      <br />
                      <br />
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <div class="services-item-four">
                  <div class="services-icon-four">
                    <img
                      src="{{ asset('user/assets/img/icon/inner_services_icon02.png')}}"
                      alt=""
                    />
                  </div>
                  <div class="services-content-four">
                    <h2 class="title" style="font-size: 19px">
                      <a href="LaptopRepair.html">Laptop Repair</a>
                    </h2>
                    <p>
                      We send our trusted and skilled employees to address your
                      issues. We never send third party vendors to take care of
                      your systems. We provide quality service and genuine spare
                      parts with warranty. If your system has the same trouble
                      in the next 30 days, we provide free service We assure
                      100% data security.
                      <br />
                      <br />
                      <br />
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <div class="services-item-four">
                  <div class="services-icon-four">
                    <img
                      src="{{ asset('user/assets/img/icon/inner_services_icon03.png')}}"
                      alt=""
                    />
                  </div>
                  <div class="services-content-four">
                    <h2 class="title" style="font-size: 19px">
                      <a href="iPadRepair.html">iPad Repair</a>
                    </h2>
                    <p>
                      We're here to help. Apple certified repairs are performed
                      by trusted experts who use genuine Apple parts. Lappystore
                      Team has a set of trained & certified technicians who are
                      expertized in Apple Mac products repairs & service. We
                      never send third party vendors to take care of your PC or
                      Laptop. Whether you're an expert or just getting started,
                      we'll help you get the most out of your Mac.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-sm-8"></div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <div class="services-item-four">
                  <div class="services-icon-four">
                    <img
                      src="{{ asset('user/assets/img/icon/inner_services_icon04.png')}}"
                      alt=""
                    />
                  </div>
                  <div class="services-content-four">
                    <h2 class="title" style="font-size: 19px">
                      <a href="HardwareUpgrades.html">Hardware Upgrades</a>
                    </h2>
                    <p>
                      Are you planning to upgrade the hardware and software of
                      your computer system? Lappystore is the right place to get
                      it done in a smooth manner. We help you in custom hardware
                      upgrades, and many other computer upgrade services in
                      Bangalore. In addition, we guide your team or employees on
                      how to use the computer efficiently with upgraded options.
                      <br>
                      <br>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <div class="services-item-four">
                  <div class="services-icon-four">
                    <img
                      src="{{ asset('user/assets/img/icon/inner_services_icon05.png')}}"
                      alt=""
                    />
                  </div>
                  <div class="services-content-four">
                    <h2 class="title" style="font-size: 19px">
                      <a href="SoftwareInstallation.html">Software Installation</a>
                    </h2>
                    <p>
                      Are you planning to upgrade the hardware and software of
                      your computer system? LappyStore is the right place to get
                      it done in a smooth manner. We help you in custom software
                      upgrades, software migration service, software
                      installation services, and many other computer upgrade
                      services in Bangalore. In addition, we guide your team or
                      employees on how to use the computer efficiently with
                      upgraded options.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-sm-8">
              </div>
          </div>
        </div>
      </section>
      <!-- services-area-end -->

      <!-- success-area -->
      <section class="success-area pb-120">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-0 order-lg-2">
              <div class="success-img">
                <img src="{{ asset('user/assets/img/lappy/lappyindex.png')}}" alt="" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="success-content">
                <!-- <div class="section-title title-style-two mb-30">
                  <span class="sub-title">Company Success</span>
                  <h2 class="title">
                    A Company’s Success is An Ongoing Stream of Happiness
                  </h2>
                </div> -->
                <h3>OUR <span style="color: red;">WORKING</span> SKILL</h3>
                <br>
                  
                
                <div class="success-list">
                  <ul class="list-wrap">
                    <li>
                      <div class="content">
                        <!-- <img src="assets/img/icon/success_icon01.png" alt="" /> -->
                        <span>REFURBISHED COMPUTERS 97%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 97%"
                          aria-valuenow="97"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <!-- <img src="assets/img/icon/success_icon02.png" alt="" /> -->
                        <span>GAMING LAPTOPS 99%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 99%"
                          aria-valuenow="99"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <!-- <img src="assets/img/icon/success_icon03.png" alt="" /> -->
                        <span>PRE-OWNED COMPUTERS & TABLETS 95%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 95%"
                          aria-valuenow="95"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </li>
                    
                    <li>
                      <div class="content">
                        <!-- <img src="assets/img/icon/success_icon04.png" alt="" /> -->
                        <span>REFURBISHED SERVERS 90%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 90%"
                          aria-valuenow="90"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </li>
                       <li>
                      <div class="content">
                        <!-- <img src="assets/img/icon/success_icon01.png" alt="" /> -->
                        <span>BRAND NEW LAPTOPS & DESKTOPS 92%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 92%"
                          aria-valuenow="92"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <!-- <img src="assets/img/icon/success_icon02.png" alt="" /> -->
                        <span>BRAND NEW TABLETS 92%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 92%"
                          aria-valuenow="92"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <!-- <img src="assets/img/icon/success_icon03.png" alt="" /> -->
                        <span>REPAIR & ANNUAL MAINTENANCE CONTRACT
                          90%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 90%"
                          aria-valuenow="90"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </li>
                    
                    <!-- <li>
                      <div class="content">
                        <img src="assets/img/icon/success_icon04.png" alt="" />
                        <span>Development 99%</span>
                      </div>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 99%"
                          aria-valuenow="99"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="success-shape-wrap">
          <img src="{{ asset('user/assets/img/images/success_shape01.png')}}" alt="" />
          <img src="{{ asset('user/assets/img/images/success_shape02.png')}}" alt="" />
        </div>
      </section>
      <!-- success-area-end -->

      <!-- history-area -->
      <section class="history-area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
              <div class="section-title white-title text-center mb-45">
                <!-- <span class="sub-title">Our Company</span> -->
                <h2 class="title">VISION & <span style="color: red;">MISSION</span></h2>
                <!-- <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard.
                </p> -->
              </div>
            </div>
          </div>
          <div class="history-inner">
            <div class="row g-0 justify-content-center">
              <div class="col-lg-6">
                <div class="history-content">
                  <h2 class="title">
                    VISION
                  </h2>
                  <p>
                    Our aim is to help them with high computing performance machines at most cost-effective prices, along with the assurance of warranty and support.
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="history-content">
                  <h2 class="title">
                    <span style="color: red;">MISSION</span>
                  </h2>
                  <p>
                    If you're strapped for cash or do not wish to spend a huge amount on new computers, refurbished machines are a solid and sensible solution.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="history-roadmap-wrap">
            <div class="roadmap-line-shape">
              <span class="dot-one pulse-one"></span>
              <span class="dot-two pulse-two"></span>
            </div>
            <ul class="list-wrap">
              <li
                class="wow fadeInDown"
                data-wow-delay=".2s"
                data-wow-duration="1.5s"
              >
                <span class="dot pulse-three"></span>
                <div class="content">
                  <h5 class="title">2020</h5>
                  <p>January 14 th</p>
                </div>
              </li>
              <li
                class="wow fadeInUp"
                data-wow-delay=".2s"
                data-wow-duration="1.5s"
              >
                <span class="dot pulse-four"></span>
                <div class="content">
                  <h5 class="title">2021</h5>
                  <p>January 14 th</p>
                </div>
              </li>
              <li
                class="wow fadeInDown"
                data-wow-delay=".2s"
                data-wow-duration="1.5s"
              >
                <span class="dot pulse-five"></span>
                <div class="content">
                  <h5 class="title">2022</h5>
                  <p>January 14 th</p>
                </div>
              </li>
              <li
                class="wow fadeInUp"
                data-wow-delay=".2s"
                data-wow-duration="1.5s"
              >
                <span class="dot pulse-six"></span>
                <div class="content">
                  <h5 class="title">2023</h5>
                  <p>January 14 th</p>
                </div>
              </li>
            </ul>
          </div> -->
        </div>
        <!-- <div class="history-shape-wrap">
          <img src="assets/img/images/history_shape01.png" alt="" />
          <img src="assets/img/images/history_shape02.png" alt="" />
        </div> -->
      </section>
      <!-- history-area-end -->

      <!-- testimonial-area -->
      <!-- <section class="testimonial-area-three testimonial-area-four">x
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
                        <img
                          src="assets/img/images/testimonial_avatar01.png"
                          alt=""
                        />
                      </div>
                      <div class="testimonial-content-three">
                        <h4 class="title">James Botosh</h4>
                        <span>Product Designer</span>
                        <p>
                          “We seek to get involved early in the design phase so
                          that we can manage the project more efficiently,
                          provide effective building solutions”
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-item-three">
                      <div class="testimonial-thumb-three">
                        <img
                          src="assets/img/images/testimonial_avatar02.png"
                          alt=""
                        />
                      </div>
                      <div class="testimonial-content-three">
                        <h4 class="title">James Botosh</h4>
                        <span>Product Designer</span>
                        <p>
                          “We seek to get involved early in the design phase so
                          that we can manage the project more efficiently,
                          provide effective building solutions”
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-item-three">
                      <div class="testimonial-thumb-three">
                        <img
                          src="assets/img/images/testimonial_avatar03.png"
                          alt=""
                        />
                      </div>
                      <div class="testimonial-content-three">
                        <h4 class="title">James Botosh</h4>
                        <span>Product Designer</span>
                        <p>
                          “We seek to get involved early in the design phase so
                          that we can manage the project more efficiently,
                          provide effective building solutions”
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- testimonial-area-end -->

      <!-- brand-area -->
      <div class="brand-area pb-120 pt-120">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <span class="title">SOME OF THE TOP BRANDS....</span>
            </div>
          </div>
          <div class="row brand-active">
            <div class="col-12">
              <div class="brand-item-two">
                <img src="{{ asset('user/assets/img/brand2/apple.png')}}" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="{{ asset('user/assets/img/brand2/acer.png')}}" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="{{ asset('user/assets/img/brand2/asus.png')}}" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="{{ asset('user/assets/img/brand2/dell.png')}}" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="{{ asset('user/assets/img/brand2/lenovo.png')}}" alt="" />
              </div>
            </div>
            <div class="col-12">
              <div class="brand-item-two">
                <img src="{{ asset('user/assets/img/brand2/HP.png')}}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- brand-area-end -->
    </main>
    <!-- main-area-end -->
    @endsection