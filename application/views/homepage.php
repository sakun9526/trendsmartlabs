<?php $this->load->view("partials/website_partials/header"); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

    <!--  <h1 class="logo"><a href="index.html">logo<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="<?php echo asset_url();?>web_assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
  <!--       <li><a href="#portfolio">Portfolio</a></li> -->
          <li><a href="#team">Team</a></li>
     <!--     <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#contact" class="get-started-btn scrollto">Get Quotes</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>TRENDSMART LABS<span>.</span></h1>
          <h3 style="color: aliceblue; font-size: 30px; font-family: sans-serif;">We design your future</h3>
        </div>
      </div>

      <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4 col-6">
          <div class="icon-box">
            <i class="ri-robot-fill"></i>
            <h3><a href="">Automation Solutions</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
          <div class="icon-box">
            <i class="ri-computer-fill"></i>
            <h3><a href="">Technologies Solutions</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-shield-fill"></i>
            <h3><a href="">Security Solutions</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="ri-pencil-ruler-2-fill"></i>
            <h3><a href="">Graphic Solutions</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="ri-lightbulb-flash-fill"></i>
            <h3><a href="">Power Solutions</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="ri-building-4-fill"></i>
            <h3><a href="">Construction Solutions</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php echo asset_url();?>web_assets/img/about.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Who We Are</h3>
            <p class="font-italic">
              TRENDSMART LABS is an organization, which is structured for Providing
              Technical Solutions, by directly involving to the technological development of the country,by
              empowering the technological strength of our country and,process of building up a smart nation.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Specialized team for every division.</li>
              <li><i class="ri-check-double-line"></i> Experts you are looking for.</li>
              <li><i class="ri-check-double-line"></i> One stop for your problems.</li>
            </ul>
            <p>
              TRENDSMART LABS can be introduced as a trusted and leading service provider In the Industry.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo asset_url();?>web_assets/img/clients/client-1.png" alt="">
          <img src="<?php echo asset_url();?>web_assets/img/clients/client-2.png" alt="">
          <img src="<?php echo asset_url();?>web_assets/img/clients/client-3.png" alt="">
          <img src="<?php echo asset_url();?>web_assets/img/clients/client-4.png" alt="">
          <img src="<?php echo asset_url();?>web_assets/img/clients/client-5.png" alt="">
          <img src="<?php echo asset_url();?>web_assets/img/clients/client-6.png" alt="">
          <img src="<?php echo asset_url();?>web_assets/img/clients/client-7.png" alt="">
          <img src="<?php echo asset_url();?>web_assets/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("<?php echo asset_url();?>web_assets/img/features.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Ideation & Concept Development</h4>
              <p>Craft the innovation strategy to work closely with domain experts & business partners to execute a structured program of innovation management, 
                identify disruptive tech and help customers safeguard their intellectual property.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>  
              <h4>Concept Validation</h4>
              <p>Setup and manage dedicated innovation centers or labs, to conduct product demos, showcase innovation progress and create awareness among stakeholders.
                 Plan and execute field evaluations in the target environments to gather feedback and iteratively refine concepts.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Production Implementation</h4>
              <p>Build best in class technology solutions using proven technology expertise, mature delivery processes and pre-built technology modules to achieve incremental, measurable and predictable
                 progress towards product launch. We also anticipate and proactively plan for integration challenges.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Support & Maintenance</h4>
              <p>Offers comprehensive and reliable post implementation support and maintenance including change management, product updates, defect fixes, proactive remote monitoring & management 
                employing in-house specialists and external partners to improve the longevity of your product investment.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="ri-computer-fill"></i></div>
              <h4><a href="">Web & Mobile App Development</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="ri-robot-fill"></i></div>
              <h4><a href="">Home & Industrial Automation</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="ri-shield-fill"></i></div>
              <h4><a href="">CCTV Monitoring & Access Controlling</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="ri-pencil-ruler-2-fill"></i></div>
              <h4><a href="">Graphic Design & Digital Marketing</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="ri-lightbulb-flash-fill"></i></div>
              <h4><a href="">Solar Power & Lightning Protection</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="ri-building-4-fill"></i></div>
              <h4><a href="">Interior Designing & Planning</a></h4>
              <p></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Customized Services</h3>
          <p>Do you need customized services? Let us help you</p>
          <a class="cta-btn" href="#contact">VIP In Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
<!--    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>OUR JOURNEY SO FAR</h3>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-simple-smile"></i>
                    <span data-toggle="counter-up">15</span>
                    <p><strong>Happy Clients</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-document-folder"></i>
                    <span data-toggle="counter-up">21</span>
                    <p><strong>Projects</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time"></i>
                    <span data-toggle="counter-up">4</span>
                    <p><strong>Years of experience</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-award"></i>
                    <span data-toggle="counter-up">1</span>
                    <p><strong>Awards</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
    <!--  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">  -->
            <h3>Kamal Nishshanka</h3>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Brilliant service from thses guys, On time and trustworthy.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
          
            <h3>Niluka Wijerathna</h3>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              It's good to see a team who listen to customer requests without questioning
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="<?php echo asset_url();?>web_assets/img/team/janith.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://twitter.com/JanithPrabhanu1?s=09"><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/janith.prabhanuka"><i class="icofont-facebook"></i></a>
                  <a href="https://www.linkedin.com/in/janith-prabhanuka-ba9b4a170"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Janith Prabhanuka</h4>
                <span>Chief Executive Officer</span>
                <span>Founder</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="<?php echo asset_url();?>web_assets/img/team/sakun.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://twitter.com/SakunPushpitha?fbclid=IwAR2P3KxQjQbIs8aM4lt0R3qNjio0ZyyTNuClEsmBtMA89J9dgeDqlFiscEE"><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/sakun.pushpitha"><i class="icofont-facebook"></i></a>
                  <a href="https://www.linkedin.com/in/sakun-rathnayaka-678140126/"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sakun Pushpitha</h4>
                <span>Chief Technological Officer</span>
                <span>CO Founder</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="<?php echo asset_url();?>web_assets/img/team/hoshin.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/hoshin.ranmini"><i class="icofont-facebook"></i></a>
                  <a href="https://www.linkedin.com/in/hoshin-ranmini-90b758159"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Hoshin Ranmini</h4>
                <span>HR Manager</span>
                <span>Business Analyst</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="<?php echo asset_url();?>web_assets/img/team/devin.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/centintelcod"><i class="icofont-facebook"></i></a>
                  <a href="http://linkedin.com/in/devingallage"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Devin Gallage</h4>
                <span>Chief Process Controlling Officer</span>
                <span>CO Founder</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="<?php echo asset_url();?>web_assets/img/team/dilan.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dilan Sankalpa</h4>
                <span>Project Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="<?php echo asset_url();?>web_assets/img/team/rajitha.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rajitha Priyankara</h4>
                <span>Administrative Executive Officer</span>
                <span>Sales Manager</span>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.93539586668!2d80.0977914147687!3d6.1393814955548525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae177fdc480d90b%3A0x486a599b44f84c71!2s56%20Amarasena%20Mawatha%2C%20Hikkaduwa!5e0!3m2!1sen!2slk!4v1590254224674!5m2!1sen!2slk"  frameborder="0"  allowfullscreen></iframe>
         
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>No 56A, Amarasena Avenue, Hikkaduwa</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>trendsmartlabs@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+94(0)774646898</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Trendsmart Labs<span>.</span></h3>
              <p>
                Amarasena Avenue, <br>
                Hikkaduwa, Sri Lanka<br><br>
                <strong>Phone:</strong> +94(0)774646898 <br>
                <strong>Email:</strong> trendsmartlabs@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#top">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design & Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Power Solutions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home & Industry Automation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">CCTV Monitoring</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our Newsletter to stay update.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Trendsmart Labs</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Trendsmart Technologies
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

<?php $this->load->view("partials/website_partials/footer"); ?>