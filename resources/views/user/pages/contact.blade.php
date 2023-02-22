@extends('user/layout/layout')
@section('pagetitle' , 'About')

@section('container')
<!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-area-four pt-175 pb-160">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Contact Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap-three">
                    <img src="{{ asset('user/assets/img/images/breadcrumb_shape04.png') }}" alt="" class="wow zoomIn" data-wow-delay=".2s">
                    <img src="{{ asset('user/assets/img/images/breadcrumb_shape05.png') }}" alt="" class="wow zoomIn" data-wow-delay=".2s">
                    <img src="{{ asset('user/assets/img/images/breadcrumb_shape06.png') }}" alt="" class="wow zoomIn" data-wow-delay=".2s">
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="inner-contact-area pb-100">
                <div class="container">
                    <div class="inner-contact-wrap">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10">
                                <div class="section-title title-style-two mb-50">
                                    <h2 class="title">Have a <span>Cool Project?</span> Get in touch!</h2>
                                </div>
                                <div class="inner-contact-form-wrap">
                                    <form id="comment-form" action="{{ route('user.enquiry') }}" method="POST">
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
                                            <label for="name"><i class="fas fa-user"></i></label>
                                            <input type="text"  name="name" placeholder="Name">
                                        </div>
                                        <div class="form-grp">
                                            <label for="email"><i class="fas fa-envelope"></i></label>
                                            <input type="email"  name="email" placeholder="Email Address">
                                        </div>
                                        <!-- <div class="form-grp">
                                            <label for="phone"><i class="fas fa-phone"></i></label>
                                            <input type="text" id="phone" name="phone" placeholder="Phone">
                                        </div> -->
                                        <!-- <div class="form-grp">
                                            <label for="subject"><i class="fas fa-book-alt"></i></label>
                                            <input type="text" id="subject" name="subject" placeholder="Subject">
                                        </div> -->
                                        <div class="form-grp">
                                            <label for="comment"><i class="fas fa-user-edit"></i></label>
                                            <textarea name="message"  placeholder="How can we help you? Feel free to get in touch!"></textarea>
                                        </div>
                                        <button type="submit" class="btn">Send Message <span></span></button>
                                    </form>
                                </div>
                                <div id="contact-map">
                                    
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1944.0905511950375!2d77.60159511744386!3d12.960260500000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae154fa03d15c3%3A0x7463deab6aef1865!2sGreen%20Mayors%20Solutions%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1676694796434!5m2!1sen!2sin" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                                        
                                </div>
                                <!-- <div class="inner-contact-info ">
                                    <ul class="list-wrap  " >
                                        <li>
                                            <div class="contact-info-item  ">
                                                <div class="icon">
                                                    <img src="assets/img/icon/loction_icon03.png" alt="">
                                                </div>
                                                <div class="content ">
                                                    <h6 class="title">Address</h6>
                                                    <p>UN82 Dhanmondi Dhaka - 1207</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-info-item">
                                                <div class="icon">
                                                    <img src="assets/img/icon/mail_icon03.png" alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="title">Email</h6>
                                                    <a href="mailto:sales@green-mayors.com">sales@green-mayors.com</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-info-item">
                                                <div class="icon">
                                                    <img src="assets/img/icon/phone_icon03.png" alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="title">Phone</h6>
                                                    <a href="tel:+919526977433">+91 95269 77433</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->
        @endsection