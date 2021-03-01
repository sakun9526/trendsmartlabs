<?php $this->load->view("partials/website_partials/header"); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Web and Moble Application Development</h2>
          <ol>
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li>Web and Mobile Application Development</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?php echo asset_url();?>web_assets/img/portfolio/WEBDEV/ASA/ASAcinnamon1.jpg" class="img-fluid" alt="">
            <img src="<?php echo asset_url();?>web_assets/img/portfolio/WEBDEV/ASA/ASAcinnamon2.jpg" class="img-fluid" alt="">
            <img src="<?php echo asset_url();?>web_assets/img/portfolio/WEBDEV/ASA/ASAcinnamon3.jpg" class="img-fluid" alt="">
            <img src="<?php echo asset_url();?>web_assets/img/portfolio/WEBDEV/ASA/ASAcinnamon4.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design and development</li>
              <li><strong>Client</strong>: ASA Ceylon Cinnamon Exports</li>
              <li><strong>Project date</strong>: 01 September, 2020</li>
              <li><strong>Project URL</strong>: www.asaceyloncinnamon.com</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>ASA Ceylon Cinnamon Exports (PVT) Ltd.</h2>
          <p>
            Our client. Mr. Sameera Sampath wanted a single page website for his startup. We used HTML5, CSS3, Javascript and PHP technologies
            to develop this amazing website.
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->


<!-- =========================================================================================================================================== -->


  </main><!-- End #main -->




<?php $this->load->view("partials/website_partials/footer"); ?>
