@extends('user/layout/layout')
@section('pagetitle' , 'The Digital Superstore')

@section('container')
<!-- main-area -->
    <main>
      <!-- blog-details-area -->
      <section class="blog-details-area pt-175 pb-120">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="blog-details-wrap">
                <div class="bd-content-top text-center">
                  <!-- <div class="blog-meta-two">
                    <ul class="list-wrap">
                                            <li class="tag"><a href="#">Sector</a></li>
                                            <li><i class="fal fa-clock"></i>5 Min</li>
                                        </ul>
                  </div> -->
                  <div class="blog-details-img">
                    <img
                      style="width: 100%;height: 400px;"
                      src="{{ asset('user/assets/img/lappy/Hardware Upgrade.jpg') }}"
                      alt=""
                    />
                  </div>

                  <h2 class="title">Hardware Upgrade</h2>
                  <p style="text-align: left">
                    Are you planning to upgrade the hardware and software of
                    your computer system? Lappystore is the right place to get
                    it done in a smooth manner. We help you in custom hardware
                    upgrades, and many other computer upgrade services in
                    Bangalore. In addition, we guide your team or employees on
                    how to use the computer efficiently with upgraded options.
                    If you find your system behaving in an abnormal manner, it
                    is better to consult experts for upgrade options. However,
                    we deal with desktops, laptops, PC, etc. Call us to know
                    more details!
                    <br />
                    <br />
                    It is very important to focus on technical specifications
                    and model configuration during the upgradation options. Any
                    kind of hardware and software maintenance services, our
                    computer upgrading professionals will look into the details
                    and then notify you about the necessary changes. Above all,
                    we will come up with the economical options that are also
                    performance oriented. Consider any kind of hardware and
                    software upgrade options, we can be your trusted company in
                    Bangalore. Call us to know better!
                  </p>
                  <!-- <h5>Main Desktop Computer Services</h5> -->
                  <!-- <ul>
                    <li style="text-align: left;">
                        Desktop Memory Repair and services
                    </li>
                    <li style="text-align: left;">
                        Desktop Bios Problem
                    </li>
                    <li style="text-align: left;">
                        Desktop Motherboard Repair and Services
                    </li>
                    <li style="text-align: left;">
                        Desktop Motherboard Replacement
                    </li>
                    <li style="text-align: left;">
                        Desktop Blue Screen Error
                    </li>
                    <li style="text-align: left;">
                        Desktop Data Recovery
                    </li>
                    <li style="text-align: left;">
                        Desktop Panel Repair and services
                    </li>
                    <li style="text-align: left;">
                        Desktop Cooling Fan Repair Services
                    </li>
                  </ul> -->

                  <!-- <div class="blog-meta-two bottom">
                                        <ul class="list-wrap">
                                            <li class="avatar">
                                                <a href="blog-details.html">
                                                    <img src="assets/img/blog/blog_avatar01.png" alt="">
                                                    Victor Pacheco
                                                </a>
                                            </li>
                                            <li><i class="fal fa-calendar"></i>March 17, 2023</li>
                                        </ul>
                                    </div> -->
                </div>
                <!-- <div class="blog-details-img">
                  <img
                    style="width: 2000px"
                    src="assets/img/lappy/computer-repair.jpg"
                    alt=""
                  />
                </div> -->
                <!-- <div class="bd-content-bottom">
                                    <h2 class="title">Pilotage de la performance : vos indicateurs <br> dans le même viseur</h2>
                                    <p>Un tableau de bord est un outil de gestion et d'évaluation de l’organisation d'une entreprise. Il est généralement constitué de plusieurs indicateurs de performance à des moments ou des périodes données. Lepilotage de la performance permet ainsi de comparer différents indicateurs et de les mettre en perspective. Le tableau de bord est donc un outil précieux lorsqu’il s’agit de surveiller ses performances et de planifier ses ressources pour ainsi optimiser sa performance.</p>
                                    <p>Le pilotage de la performance par Skello est une interface développée spécialement pour nos clients. L’objectif ?  Obtenir une visibilité globale de la santé de son organisation et de ses établissements. Nous avons conçu cette solution de pilotage grâce à vos indicateurs de performance et les données du planning de nos clients.</p>
                                    <p>Voici le détail des indicateurs que les clients pourront analyser pour optimiser leur gestion et leur planification :</p>
                                    <ul class="list-wrap">
                                        <li><span>Chiffre d’affaires.</span>Il correspond à la somme des ventes de biens ou de services hors taxes réalisés par un établissement dans le cadre d’une activité professionnelle courante.</li>
                                        <li><span>Masse salariale chargée.</span>Cet indicateur correspond à la masse salariale additionnée aux
                                            cotisations patronales.</li>
                                        <li><span>Ratio de masse salariale chargée</span>/ CA. Cet indicateur indique le ratio entre le coût de la masse salariale chargée sur le revenu réalisé par l’établissement. Il est possible de le calculer en fonction du prévisionnel et du réalisé.</li>
                                        <li><span>Heures travaillées et heures d’absences.</span>Cet indicateur correspond à la somme des heures
                                            travaillées et à la somme des heures d’absences cumulées.</li>
                                        <li><span>Heures travaillées par poste.</span>Ce ratio indique le nombre d’heures travaillées en fonction</li>
                                    </ul>
                                    <p>Un tableau de bord est un outil de gestion et d'évaluation de l’organisation d'une entreprise. Il est  généralement constitué de plusieurs indicateurs de performance à des moments ou des périodes données. Le pilotage de la performance permet ainsi de comparer différents indicateurs et de les mettre en perspective. Le tableau de bord est donc un outil précieux lorsqu’il s’agit de surveiller ses performances et de planifier ses ressources pour ainsi optimiser sa performance.</p>
                                </div>
                            </div>
                            <div class="comment-wrap">
                                <h2 class="title">281 <span>Comments</span></h2>
                                <div class="latest-comments">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/blog/comment_avatar01.png" alt="">
                                                </div>
                                                <div class="comment-text">
                                                    <h4 class="title">Lincoln Culhane</h4>
                                                    <span><i class="fal fa-calendar-alt"></i>March 17, 2023</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                                                    <a href="#" class="comment-reply-link"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/blog/comment_avatar02.png" alt="">
                                                </div>
                                                <div class="comment-text">
                                                    <h4 class="title">Emerson Septimus</h4>
                                                    <span><i class="fal fa-calendar-alt"></i>March 17, 2023</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                                                    <a href="#" class="comment-reply-link"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                            <div class="comments-box children">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/blog/comment_avatar03.png" alt="">
                                                </div>
                                                <div class="comment-text">
                                                    <h4 class="title">Emerson Septimus</h4>
                                                    <span><i class="fal fa-calendar-alt"></i>March 17, 2023</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                                                    <a href="#" class="comment-reply-link"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
              </div>
              <!-- <div class="post-comments-form">
                                <div class="post-comments-title">
                                    <h2 class="title">I Leave Your Comment</h2>
                                </div>
                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Your Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-grp">
                                            <textarea name="message" placeholder="Write your message here"></textarea>
                                        </div>
                                        <button type="submit" class="btn">Send Message <span></span></button>
                                    </form>
                                </div>
                            </div> -->
            </div>
          </div>
        </div>
      </section>
      <!-- blog-details-area-end -->

      <!-- newsletter-area -->
      <!-- <section class="newsletter-area-two">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-9">
                                <div
                                    class="section-title title-style-two white-title text-center mb-30">
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
    </main>
    <!-- main-area-end -->
    @endsection